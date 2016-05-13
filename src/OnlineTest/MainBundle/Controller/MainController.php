<?php

namespace OnlineTest\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use OnlineTest\AdminBundle\Entity\Exam;
use OnlineTest\AdminBundle\Entity\Paper;
use OnlineTest\AdminBundle\Entity\Question;
use OnlineTest\MainBundle\Entity\ExamRecord;
use OnlineTest\AdminBundle\Entity\Student;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('OnlineTestMainBundle:Main:index.html.twig');
    }
    public function studentLoginAction(Request $request,$examId)
    {
        $isAvailable = 1;
        if($examId == 0){
            $isAvailable = -1;//表示考试不存在
        }else {
            $exam = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->find($examId);
            if($exam){
                if($exam->getIsOverAndSave()== 0){
                    $isAvailable = 1;//表示试卷可用
                }else{
                    $isAvailable = 0;//表示存在不可用
                }
            }else{
                $isAvailable = -1;
            }
        }
        return $this->render('OnlineTestMainBundle:Main:login.html.twig', array(
            'examId' => $examId,
            'isAvailabe' => $isAvailable
        ));
    }
    //验证考试是否实名制
    public function isRealnameAction(Request $request)
    {
        $examId = $request->request->get('examId'); 
        $isRealname=0;
        $exam=$this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->find($examId);
        if($exam->getIsRealName()==1){
            $isRealname=1;        
        }
        $result = array(
            'isRealname' => $isRealname
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    //验证考试是否开始
    /*取消验证
     * public function paperStatusAction(Request $request)
    {
        $paperId = $request->request->get('paperId'); 
        $paper=$this->getDoctrine()->getRepository('OnlineTestAdminBundle:Paper')->find($paperId);
        $paper_status=$paper->getStatus();
        $result = array(
            'paper_status' => $paper_status
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }*/
    //验证考试是否开始
    public function whichPaperAction(Request $request)
    {
        $examId = $request->request->get('examId'); 
        $exam = $this
                ->getDoctrine()
                ->getRepository('OnlineTestAdminBundle:Exam')
                ->find($examId);
        //从考试对应的试卷中随机出一份试卷备用
        $papers = $exam->getPapers();
        $hasAvailablePaper=0;//不存在可用试卷
        if ($papers) {
            $available_papers = array();
            foreach ($papers as $paper) {
                if ($paper->getUsable() == 1) {
                    $hasAvailablePaper=1;//存在可用试卷
                    array_push($available_papers, $paper);
                }
            }
        }
        
        //获取考生用户名 根据用户判断是否有进行一半的考试
        $username = $request->request->get('username'); 
        $student = $this
                ->getDoctrine()
                ->getRepository('OnlineTestAdminBundle:Student')
                ->findOneByUsername($username);
        if ($student) {
            $student_id = $student->getId();
            $examRecord = $this
                    ->getDoctrine()
                    ->getRepository('OnlineTestMainBundle:ExamRecord')
                    ->findOneByStudent($student_id);
        }
        if($examRecord){
            if($examRecord->getPaper()->getUsable()==1){
                $paper=$examRecord->getPaper();
            }else{//当考试记录中的试卷不可用时，从考试对应的可用试卷中抽取
                if ($hasAvailablePaper==1) {
                    $hasAvailablePaper = -1; //考试记录中的试卷不可用
                    $rand_paper = array_rand($available_papers, 1); //返回数组到key
                    $paper = $available_papers[$rand_paper];
                }
            }
        }else{
            if ($hasAvailablePaper == 1) {
                $rand_paper = array_rand($available_papers, 1); //返回数组到key
                $paper = $available_papers[$rand_paper];
            }
        }
        if($paper){
            $paperId=$paper->getId();
        }else{
            $paperId=0;
        }
        $result = array(
            'hasAvailablePaper' => $hasAvailablePaper,
            'paperId' => $paperId
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    //验证考生状态
    public function studentStatusAction(Request $request)
    {
        $username = $request->request->get('username'); 
        $student=$this->getDoctrine()->getRepository('OnlineTestAdminBundle:Student')->findOneByUsername($username);
        $student_status=$student->getStatus();
        $result = array(
            'student_status' => $student_status
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    public function examPrepareAction(Request $request,$isrealname)
    {
        //获取传递过来的url中的参数
        $examId=$request->get('examId');
        return $this->render('OnlineTestMainBundle:Main:examPrepare.html.twig',
                array(
                    'isRealName' => $isrealname,
                    'examId' => $examId
                ));
    }
    public function examAction(Request $request,$isrealname,$paperId)
    {
        
        
        //实名考试，开始考试时，更改考试状态
        if($isrealname=='realname'){
            $username=$request->get('username');
            $student=$this->getDoctrine()
                    ->getRepository('OnlineTestAdminBundle:Student')
                    ->findOneByUsername($username);
            if($student->getStatus()==0){
                $student->setStatus(1);
            }
            
            $examrecord=$this->getDoctrine()
                    ->getRepository('OnlineTestMainBundle:ExamRecord')
                    ->findOneByPIdAndSId($paperId,$student->getId()); 
            if(!$examrecord){
                //添加考试记录
                $examrecord=new ExamRecord();
            }
            //向考试记录中添加学生
            $examrecord->setStudent($student);
            //$this->getDoctrine()->getManager()->flush();
        }else{
            //添加考试记录
            $examrecord=new ExamRecord();
        }
        
        $paper=$this->getDoctrine()->getRepository('OnlineTestAdminBundle:Paper')->find($paperId);
        $examrecord->setPaper($paper);
        $this->getDoctrine()->getManager()->persist($examrecord);
        $this->getDoctrine()->getManager()->flush();
        
        //获取对应考试
        $exam=$paper->getExam();
        //获取当前考试中的试题
        $parts = unserialize($paper->getParts());
        
        //将试题信息加入到$questions_detail数组中
        $questions_detail=array();
        $questions_content=array();
        $questions_images = array();
        //将多选试题的答案先反序列化
        $mul_choices_answers = array();
        if ($parts) {//当试题包含到parts 不为空时
            foreach ($parts as $key => $part) {
                if ($part['part_order'] == 1) {//part内试题乱序
                    shuffle($parts[$key]['questions']);
                }
                $parts[$key]['question_num'] =  count($parts[$key]['questions']);
                $parts[$key]['question_pre_row'] = 5;
                $parts[$key]['question_rows'] = ceil($parts[$key]['question_num']/$parts[$key]['question_pre_row']);
                
            }
            foreach ($parts as $key => $part){
                //如果part_order为1  即part内部 试题打乱顺序
                
                //获取各个part内的试题
                foreach ($part['questions'] as $key1 => $value) {
                    $question = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Question')->find($value);
                    //试题所有信息
                    $questions_detail[$question->getId()] = $question;
                    //试题题干及选项内容序列化
                    $questions_content[$question->getId()] = unserialize($question->getQuestionContent());
                    //试题包含图片序列化
                    $questions_images[$question->getId()] = unserialize($question->getQuestionImages());
                    if ($question->getType() == "multiple_choices_no_img") {
                        $mul_choices_answers[$question->getId()] = unserialize($question->getAnswer());
                    }
                }
            }
            $hasParts = 1;
        } else {
            $hasParts = 0;
        }
        return $this->render('OnlineTestMainBundle:Main:exam.html.twig', array(
                    'exam' => $paper->getExam(),
                    'paper' => $paper,
                    'parts' => $parts,
                    'questions' => $questions_detail,
                    'questions_content' => $questions_content,
                    'questions_images' => $questions_images,
                    'mul_choices_answers' => $mul_choices_answers,
                    'hasParts' => $hasParts
        ));
    }
    //提交试卷
    public function submitPaperAction(Request $request)
    {
        $paperId = $request->request->get('paperId'); 
        $answers = $request->request->get('answers'); 
        $username = $request->request->get('username'); 
        $score=0;
        
        foreach ($answers as $key => $value) {
            $question=$this->getDoctrine()->getRepository('OnlineTestAdminBundle:Question')->find($key);
            $optionRate =  $question->getOptionRate();
            if($optionRate){
                $optionRate=unserialize($question->getOptionRate());
            }else{
                $optionRate=array();
            }
            $questionType=$question->getType();
            //选择题时，将选项次数变更
            if($questionType=='single_choice_no_img'||$questionType=='single_choice_img'){
                if ($value) {
                    if (array_key_exists($value, $optionRate)) {
                        $optionRate[$value] += 1;
                    } else {
                        $optionRate[$value] = 1;
                    }
                }
            }else if($questionType=='multiple_choices_no_img'){
                if ($value) {
                    foreach ($value as $key1 => $value1) {
                        if (array_key_exists($value1, $optionRate)) {
                            $optionRate[$value1] += 1;
                        } else {
                            $optionRate[$value1] = 1;
                        }
                    }
                }
            }else if($questionType=='short_answer_no_img'||$questionType=='short_answer_img'){
                if ($value) {
                    if (array_key_exists(1, $optionRate)) {
                        $optionRate[1] += 1;
                    } else {
                        $optionRate[1] = 1;
                    }
                }
            }
            //将新的试题比率加入试题
            $question->setOptionRate(serialize($optionRate));
            //当试题存在答案时，判断答案是否和所选答案一致，一致则分数++
            if ($question->getAnswer()) {
                if ($answers[$key] == ($question->getAnswer())) {
                    $score++;
                }
            }
        }
        
        if($username!="匿名"){
            //用户名不为空时，修改考生状态,置为已考
            $student = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Student')->findOneByUsername($username);       
            $student->setStatus(2);
            $examrecord=$this->getDoctrine()->getRepository('OnlineTestMainBundle:ExamRecord')->findOneByPIdAndSId($paperId,$student->getId()); 
        }
        if(!$examrecord){
            $examrecord=new ExamRecord();
        }
        $examrecord->setScore($score);
        $examrecord->setAnswers(serialize($answers));
        //$this->getDoctrine()->getManager()->persist($examrecord);
        $this->getDoctrine()->getManager()->flush();
        $result = array(
            'success' => 1
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    public function examedAction()
    {
        return $this->render('OnlineTestMainBundle:Main:examed.html.twig');
    }
}
