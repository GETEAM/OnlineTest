<?php

namespace OnlineTest\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use OnlineTest\AdminBundle\Entity\Student;
use OnlineTest\AdminBundle\Entity\Exam;

class StudentManagementController extends Controller {
    //添加考生
    public function addStudentAction(Request $request)
    {
        //获取所有考试名称，为将要生成到下拉菜单做准备
        $exams = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->findAll();
        $exam_names=array();
        foreach ($exams as $exam) {
            $exam_names[$exam->getId()]=$exam->getExamName();
        }
        if(!$exam_names){
            $exam_names['']="暂无可用考试，请先添加";
        }
        $student=new Student;
        //创建表单
        $builder=$this->createFormBuilder($student);
        $form = $builder
            ->add('examName', 'choice', array(
                        'label' => '考试名称：',
                        'choices' => $exam_names,
                    ))  
            ->add('student_name', 'text', array('label' => '学号：',))
            ->add('username', 'text', array('label' => '用户名：',))
            ->add('name', 'text', array('label' => '姓名：',))
            ->add('password', 'password', array('label' => '密码：',))
            ->add('save', 'submit', array('label' => '添加'))
            ->add('cancel', 'reset', array('label' => '取消'))
            ->getForm();
        
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $factory = $this->get('security.encoder_factory');
            $encoder = $factory->getEncoder($student);
            $password = $encoder->encodePassword($student->getPassword(), $student->getSalt());
            $student->setPassword($password);
            $exam = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->findOneById($student->getExamName());
            $student->setExam($exam);
            //将考生到状态置为0 ，即没有参与考试前到默认状态
            $student->setStatus(0);
            $this->getDoctrine()->getManager()->persist($student);
            $this->getDoctrine()->getManager()->flush();
            $this->get('session')->getFlashBag()->add(
                'notice', ' 考生添加成功!'
            );
            return $this->redirect($this->generateUrl('add_student'));
        }
        return $this->render('OnlineTestAdminBundle:Admin:studentAdd.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
    //学生验证
    public function studentValidationAction(Request $request,$validation_option)
    {
        $validation_optionStudent_name = $request->request->get('validation_student_name'); 
        $ref_exam_id = $request->request->get('exam_id'); 
        $isUnique=0;
        $ref_exam=$this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->find($ref_exam_id);
        $students= $ref_exam->getStudents();
        if($validation_option=="student_name"){
            foreach ($students as $student) {
                if($validation_optionStudent_name==($student->getStudentName())){
                    $isUnique=1;
                }             
            }            
        }
        $result = array(
            'isUnique' => $isUnique
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    
    //导入学生
    public function importStudentAction(Request $request)
    {
        //获取所有考试名称，为将要生成到下拉菜单做准备
        $exams = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->findAll();
        $exam_names=array();
        foreach ($exams as $exam) {
            $exam_names[$exam->getId()]=$exam->getExamName();
        }
        if(!$exam_names){
            $exam_names['']="暂无可用考试，请先添加";
        }
        //创建表单
       $form = $this->createFormBuilder()
                ->add('examName', 'choice', array(
                        'label' => '考试名称：',
                        'choices' => $exam_names,
                    ))
                ->add('fileUrl', 'file', array(
                        'label' => '文件位置：',
                    ))
                ->add('import', 'submit', array('label' => '导入'))
                ->add('cancel', 'reset', array('label' => '取消'))
                ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            //导入学生文件
            if(!is_dir("import_students")){
                mkdir("import_students");
            }
            //获取文件框到内容
            $file=$form['fileUrl']->getData();
            //获取考试名称
            $examName=$form['examName']->getData();
            
            //将原文档到文件名以“.”分割
            $filename = explode(".", $file->getClientOriginalName());
            //获取原文档到扩展名
            $extension = $filename[count($filename) - 1];
            //构造新到文件名
            $newefilename = $filename[0] . "_" . rand(1, 9999) . "." . $extension;
            
            //如果文档csv格式，如下处理
            if ($extension == "csv") {
                $file->move("import_students", $newefilename);
                $students = file("import_students/" . $newefilename);
                $existedNum=0;
                for ($i = 1; $i < count($students); $i++) {
                    $student = new Student;
                    $exam = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->findOneById($examName);
                    //获取文件中考生信息
                    $student_inf = explode(",", $students[$i]);
                    //验证学生是否已存在
                    $isExist=$this->getDoctrine()
                        ->getRepository('OnlineTestAdminBundle:Student')
                        ->findStudentWithExam($examName,trim($student_inf[0]));
                    if($isExist){
                        $existedNum++;
                    } else {
                        $student->setExam($exam);
                        
                        $student->setStudentName(trim($student_inf[0]));
                        $student->setName(trim($student_inf[1]));
                        //通过考试编号，学号 合成用户名
                        $username = $examName . "_" . trim($student_inf[0]);
                        $student->setUsername($username);
                        $factory = $this->get('security.encoder_factory');
                        $encoder = $factory->getEncoder($student);
                        $password = $encoder->encodePassword(trim($student_inf[2]), $student->getSalt());
                        $student->setPassword($password);
                        $student->setStatus(0);
                        $this->getDoctrine()->getManager()->persist($student);
                    }
                }
                $this->getDoctrine()->getManager()->flush();
                //导入完成后，删除文件
                unlink("import_students/" . $newefilename);
                if ($existedNum == 0) {
                    $this->get('session')->getFlashBag()->add(
                            'notice', '全部导入成功!');
                }else{
                    $this->get('session')->getFlashBag()->add(
                            'notice', '部分导入成功!   存在'.$existedNum.'名考生重复，未导入！');
                }
            }else{
                $this->get('session')->getFlashBag()->add(
                'notice', '该文件不符合导入文件的格式!'
            );
                return $this->redirect($this->generateUrl('import_student'));
            }
            
        }
        
        return $this->render('OnlineTestAdminBundle:Admin:studentImport.html.twig', array(
                    'form' => $form->createView(),
        ));
    }
    //学生信息查询
    public function studentProflieAction(Request $request)
    {
        //获取所有考试名称，为将要生成到下拉菜单做准备
        $exams = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->findAll();
        $exam_names=array();
        foreach ($exams as $exam) {
            $exam_names[$exam->getId()]=$exam->getExamName();
        }
        if(!$exam_names){
            $exam_names['']="暂无可用考试，请先添加";
        }
        //创建表单
       $form = $this->createFormBuilder()
               //选择考试名称
                ->add('examName', 'choice', array(
                        'label' => '考试名称：',
                        'choices' => $exam_names,
                    ))
               //选择查询方式
               ->add('searchOption', 'choice', array(
                        'label' => '考试名称：',
                        'choices' => array('name' => '考生姓名','username' => '考号'),
                    )) 
               ->add('searchContent', 'text', array(
                        'label' => '查询内容：',
                    ))
                ->add('search', 'submit', array('label' => '查询'))
                ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) { 
            $examName=$form['examName']->getData();
            $exam=$this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->find($examName);
            //var_dump($examName);
            $searchOption=$form['searchOption']->getData();
            //var_dump($searchOption);
            $searchContent=$form['searchContent']->getData();
            $searched_students=array();
            //按照学好来搜索时，处理如下
            if($searchOption=='username'){
                //使用该方法搜索时，返回的是一个对象，而不是一个数组，则要将返回值加入到数组中
                $searched_student=$this->getDoctrine()->getRepository('OnlineTestAdminBundle:Student')->findStudentWithExam($examName,$searchContent);
                //如果不为空，则加入数组，否则将空元素加入数组，使用时报错
                if ($searched_student) {
                    array_push($searched_students, $searched_student);
                }
            }else if($searchOption=='name'){
                //
                $searched_students=$this->getDoctrine()
                        ->getRepository('OnlineTestAdminBundle:Student')
                        ->findStudentsWithExam($examName,$searchContent);
            }
        }else{
            $searched_students=array();
            $exam='';
        }
        
        return $this->render('OnlineTestAdminBundle:Admin:studentProfile.html.twig', array(
                    'form' => $form->createView(),
                    'searched_students' => $searched_students,
                    'exam' => $exam,
        ));
    }
    
    //学生列表
    public function studentListAction(Request $request)
    {
        //获取所有考试名称，为将要生成到下拉菜单做准备
        $exams = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->findAll();
        $exam_names=array();
        $exam_names['']="—— 请选择考试名称 ——";
        foreach ($exams as $exam) {
            $exam_names[$exam->getId()]=$exam->getExamName();
        }
        if(!$exam_names){
            $exam_names['']="暂无可用考试，请先添加";
        }
        //创建表单
       $form = $this->createFormBuilder()
                ->add('examName', 'choice', array(
                        'label' => '考试名称：',
                        'choices' => $exam_names,
                    ))
                ->add('search', 'submit', array('label' => '查询'))
                ->getForm();

        $form->handleRequest($request);
        //设置每页显示到学生数量
        $pagesize=5;
        if ($form->isSubmitted()) { 
            $examName=$form['examName']->getData();
            $exam = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->find($examName);
            $students=$exam->getStudents();
            $page_num =  ceil(count($students)/$pagesize);
            $students_num = count($students);
        }else{
            $students=array();
            $examName='';
            $page_num=0;
            $students_num = 0;
        }
        
        return $this->render('OnlineTestAdminBundle:Admin:studentList.html.twig', array(
                    'form' => $form->createView(),
                    'exam' => $exam,
                    'students' => $students,
                    'page_num' => $page_num,
                    'student_num' => $students_num,
                    
        ));
    }
    //删除学生
    public function deleteStudentAction($examName,$username)
    {
        $isSuccess=$this->getDoctrine()
                        ->getRepository('OnlineTestAdminBundle:Student')
                        ->deleteOneStudent($examName,$username);
        if ($isSuccess == 1) {
            $result = array(
                'success' => $isSuccess
            );
            $this->get('session')->getFlashBag()->add(
                    'notice', $username . ' 删除成功!'
            );
        }else{
            $result = array(
                'success' => $isSuccess
            );
            $this->get('session')->getFlashBag()->add(
                    'notice', $username . ' 数据库删除失败！可能为存在相关数据！!'
            );
        }
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    //删除选中学生
    public function deleteSelectedStudentsAction(Request $request,$examName){
        $selectedStudents= $request->request->get('selectStudents'); 
        $isSuccess = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Student')->deleteSelectedStudents($examName,$selectedStudents);         
        $result = array(
                'success' => $isSuccess
                );
        $this->get('session')->getFlashBag()->add(
            'notice',
            '选中项删除成功!'
        ); 
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    //更新学生
    public function updateStudentAction(Request $request)
    {
        $student=new Student();
        $examId= $request->request->get('examId'); 
        //var_dump($examId);
        $username= $request->request->get('username'); 
        //var_dump($username);
        $name= $request->request->get('name'); 
        $password= $request->request->get('password'); 
        $factory = $this->get('security.encoder_factory');
        if ($password) {
            $encoder = $factory->getEncoder($student);
            $encode_password = $encoder->encodePassword($password, $student->getSalt());
        }else{
            $encode_password=$password;
        }
        $status= $request->request->get('status'); 
        $isSuccess=$this->getDoctrine()
                ->getRepository('OnlineTestAdminBundle:Student')
                ->updateStudent($examId, $username, $name, $encode_password, $status);
        $result = array(
                "success" => $isSuccess,
                'password'=> $encode_password
                );
        $this->get('session')->getFlashBag()->add(
                'notice', $username . ' 修改成功!'
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    //批量更新学生
    public function updateSelectedStudentsAction(Request $request)
    {
        $examId= $request->request->get('examId'); 
        //var_dump($examId);
        $status= $request->request->get('status'); 
        //var_dump($status);
        $selectedStudents=$request->request->get('selectedStudents'); 
        //var_dump($selectedStudents);
        $isSuccess=$this->getDoctrine()
                ->getRepository('OnlineTestAdminBundle:Student')
                ->updateSelectedStudents($examId, $selectedStudents, $status);
        $result = array(
                "success" => '1'
                );
        $this->get('session')->getFlashBag()->add(
                'notice', '批量修改成功!'
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
