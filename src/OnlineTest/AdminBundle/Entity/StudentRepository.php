<?php

namespace OnlineTest\AdminBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * StudentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class StudentRepository extends EntityRepository
{
    //添加学生
    public function addStudent($student){
        
        $this->getEntityManager()->persist($student);
        $this->getEntityManager()->flush();
    }
    //通过考号和所在考试名称查询考生
    public function findStudentWithExam($examName,$username){
        return $query=$this->getEntityManager()
                ->createQuery("select s,e from OnlineTestAdminBundle:Student s "
                        . "join s.exam e "
                        . " where s.student_name='".$username."' and e.id=".$examName)->getOneOrNullResult();
        
    }
    //通过考生姓名和所在考试名称查询考生
    public function findStudentsWithExam($examName,$name){
        return $query=$this->getEntityManager()
                ->createQuery("select s,e from OnlineTestAdminBundle:Student s "
                        . "join s.exam e "
                        . " where s.name='".$name."' and e.id=".$examName)->getResult();
        
    }
    //删除单个教师
    public function deleteOneStudent($examName,$username){
        $student=$this->findStudentWithExam($examName,$username); 
        $this->getEntityManager()->remove($student);
        try {
            $this->getEntityManager()->flush();
        } catch (\Exception $e) {
            return "数据库删除失败！可能为存在相关数据！";
        }

        return 1;
    }
    //删除选中的学生
    public function deleteSelectedStudents($examName,$selectedStudents){
        foreach ($selectedStudents as $selectedStudent) {
            $this->deleteOneStudent($examName,$selectedStudent);
        }
        return 1;
    }
    //更新学生信息
    public function updateStudent($examId, $username, $name, $password, $status){
        $update_student = $this->findStudentWithExam($examId, $username);
        $update_student->setName($name);
        $update_student->setStatus($status);
        if($password) {
            $update_student->setPassword($password);
        }
        $this->getEntityManager()->flush();
        return 1;
    }
    //批量修改考试状态
    public function updateSelectedStudents($examId, $selectedStudents, $status){
        foreach ($selectedStudents as $selectedStudent) {
            $update_student = $this->findStudentWithExam($examId,$selectedStudent);
            $update_student->setStatus($status);
            $this->getEntityManager()->flush();
        }
        return 1;
    }
}
