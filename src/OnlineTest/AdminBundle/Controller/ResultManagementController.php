<?php

namespace OnlineTest\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use OnlineTest\AdminBundle\Entity\Exam;
use OnlineTest\AdminBundle\Entity\Question;
use OnlineTest\AdminBundle\Entity\Paper;
use OnlineTest\MainBundle\Entity\ExamRecord;

class ResultManagementController extends Controller {
    //考试结果列表
    public function resultListAction(Request $request)
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
        if ($form->isSubmitted()) { 
            $examName=$form['examName']->getData();
            $exam = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->find($examName);
            $papers=$exam->getPapers();
            //判断是否有试卷
            if(count($papers)){
                $hasPapers=1;
            }else{
                $hasPapers=0;
            }
        }else{
            $papers='';
            $hasPapers=-1;
            $exam='';
        }
        return $this->render('OnlineTestAdminBundle:Admin:resultList.html.twig', array(
            'form' => $form->createView(),
            'papers' => $papers,
            'hasPapers' => $hasPapers,
            'exam' => $exam,
        ));
    }
    //考试结果详情
    public function resultDetailAction($paperId)
    {
        //获取所有考试名称，为将要生成到下拉菜单做准备
        $exam_records = $this->getDoctrine()->getRepository('OnlineTestMainBundle:ExamRecord')->findByPaper($paperId);
        $records_num = count($exam_records);
        //判断是否有考试记录
        if (count($exam_records)) {
            $hasRecords = 1;
        } else {
            $hasRecords = 0;
        }
        return $this->render('OnlineTestAdminBundle:Admin:resultDetail.html.twig', array(
            'paperId' => $paperId,
            'hasRecords' => $hasRecords,
            'exam_records' => $exam_records,
            'records_num' => $records_num,
        ));
    }
    //试卷统计信息
    public function resultStatisticsAction($paperId)
    {
        $exam_records = $this->getDoctrine()->getRepository('OnlineTestMainBundle:ExamRecord')->findByPaper($paperId);
        $records_num = count($exam_records);
        $paper=$this->getDoctrine()->getRepository('OnlineTestAdminBundle:Paper')->find($paperId);
        //获取当前考试中的试题块
        $parts = unserialize($paper->getParts());
        //获取当前试卷中的试题
        $questions=unserialize($paper->getQuestions());
        //将试题信息加入到$questions_detail数组中
        $questions_detail=array();
        $questions_content=array();
        $questions_images=array();
        $questions_option_num=array();
        $questions_option_rate=array();
        //将多选试题的答案先反序列化
        $mul_choices_answers = array();
        if ($parts) {//当试题包含到parts 不为空时
            foreach ($parts as $key => $part) {
                if ($part['part_order'] == 1) {//part内试题乱序
                    shuffle($parts[$key]['questions']);
                }
            }
            /*foreach ($questions as $value) {
                $question = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Question')->find($value);
                //试题所有信息
                $questions_detail[$question->getId()] = $question;
                //试题题干及选项内容序列化
                $questions_content[$question->getId()] = unserialize($question->getQuestionContent());
                //试题包含图片序列化
                $questions_images[$question->getId()] = unserialize($question->getQuestionImages());
            }*/
            foreach ($parts as $key => $part){
                //如果part_order为1  即part内部 试题打乱顺序
                
                //获取各个part内的试题
                foreach ($part['questions'] as $key1 => $value) {
                    $question = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Question')->find($value);
                    //试题所有信息
                    $questions_detail[$question->getId()] = $question;
                    //试题各选项数量
                    $questions_option_num[$question->getId()] = unserialize($question->getOptionRate());
                    //循环计算出各选项占的比例
                    foreach (unserialize($question->getOptionRate()) as $key => $value) {
                        $questions_option_rate[$question->getId()][$key] = round($value / $records_num * 100, 2) . '%';
                    }
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
       
        return $this->render('OnlineTestAdminBundle:Admin:resultStatistics.html.twig',
                array(
                    'paper' => $paper,
                    'parts' => $parts,
                    'questions' => $questions_detail,
                    'questions_content' => $questions_content,
                    'questions_images' => $questions_images,
                    'mul_choices_answers' => $mul_choices_answers,
                    'records_num' => $records_num,
                    'questions_option_num' => $questions_option_num,
                    'questions_option_rate' => $questions_option_rate,
                    'hasParts' => $hasParts,
                ));
    }
    //考试结果详情导出为Excel
    public function exportExcelAction($paperId)
    {
        //获取所有考试名称，为将要生成到下拉菜单做准备
        $exam_records = $this->getDoctrine()->getRepository('OnlineTestMainBundle:ExamRecord')->findByPaper($paperId);
        //获取试卷信息
        $paper = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Paper')->find($paperId);

        // ask the service for a Excel5
        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();

        $phpExcelObject->getProperties()->setCreator("Joseph")
                ->setLastModifiedBy("Maarten Balliauw")
                ->setTitle("Office 2007 XLSX Test Document")
                ->setSubject("Office 2007 XLSX Test Document")
                ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
                ->setKeywords("office 2007 openxml php")
                ->setCategory("Test result file");
        $phpExcelObject->setActiveSheetIndex(0)
                ->setCellValue('A1', '学号')
                ->setCellValue('B1', '姓名')
                ->setCellValue('C1', '试卷编号')
                ->setCellValue('D1', '试卷名称')
                ->setCellValue('E1', '主观题得分');
        $phpExcelObject->getActiveSheet()->setTitle('考试成绩');
        $phpExcelObject->getActiveSheet()->getColumnDimension('A')->setCollapsed(true);
        $phpExcelObject->getActiveSheet()->getColumnDimension('B')->setCollapsed(true);
        $phpExcelObject->getActiveSheet()->getColumnDimension('C')->setCollapsed(true);
        $phpExcelObject->getActiveSheet()->getColumnDimension('D')->setCollapsed(true);
        $parts = unserialize($paper->getParts());
        $Part_Cell_Column='A';
        foreach ($parts as $key => $part) {
            $parts_questions_num = count($part['questions']);
            foreach ($exam_records as $key1 => $exam_record) {
                $Cell_Column = $Part_Cell_Column;
                if ($key == 0) {//当是第一个part时，输出分数等项
                    $phpExcelObject->getActiveSheet()->setCellValue(($Cell_Column++) . ($key1 + 2), $exam_record->getStudent()->getStudentName())
                            ->setCellValue(($Cell_Column++) . ($key1 + 2), $exam_record->getStudent()->getName())
                            ->setCellValue(($Cell_Column++) . ($key1 + 2), $exam_record->getPaper()->getId())
                            ->setCellValue(($Cell_Column++) . ($key1 + 2), $exam_record->getPaper()->getPaperName())
                            ->setCellValue(($Cell_Column++) . ($key1 + 2), $exam_record->getScore());
                }
                $answers=  unserialize($exam_record->getAnswers());
                if(!$answers){
                    //如果$answer为空 
                    $answers=array();
                }
                foreach ($part['questions'] as $key2 => $questionId) {
                    
                    $phpExcelObject->getActiveSheet()->setCellValue($Cell_Column . '1', ($key + 1) . '_' . ($key2 + 1) );
                    if (array_key_exists($questionId, $answers)) {
                        if (is_array($answers[$questionId])) {
                            $answers[$questionId] = implode('_', $answers[$questionId]);
                        }
                        //两个列标相同 第一个不用自动增加
                        $phpExcelObject->getActiveSheet()->setCellValue($Cell_Column . ($key1 + 2), $answers[$questionId]);
                    }
                    $Cell_Column++;
                }
            }
            $Part_Cell_Column=$Cell_Column;
        }

        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $phpExcelObject->setActiveSheetIndex(0);

        // create the writer
        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel5');
        // create the response
        $response = $this->get('phpexcel')->createStreamedResponse($writer);
        // adding headers
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Content-Disposition', 'attachment;filename='.$paper->getPaperName().'_考试结果.xls');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');

        return $response;
    }
    //删除考试结果
    public function deleteExamRecordAction($recordId)
    {
        //获取所有考试名称，为将要生成到下拉菜单做准备
        $isSuccess = $this->getDoctrine()->getRepository('OnlineTestMainBundle:ExamRecord')->deleteOneRecord($recordId);
        $result = array(
            'success' => $isSuccess
        );
        $this->get('session')->getFlashBag()->add(
                'notice', '考试记录删除成功!'
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    //删除选中的考试记录
    public function deleteSelectedExamRecordAction(Request $request){
        $selectedRecords = $request->request->get('selectedRecords'); 
        $isSuccess = $this->getDoctrine()->getRepository('OnlineTestMainBundle:ExamRecord')->deleteSelectedRecords($selectedRecords);         
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
    //答卷详情
    public function answersDetailAction($recordId)
    {   
        $exam_record = $this->getDoctrine()->getRepository('OnlineTestMainBundle:ExamRecord')->find($recordId);
        $paper=$exam_record->getPaper();
        //获取当前考试中的试题
        $parts = unserialize($paper->getParts());
        //获取当前试卷中的试题
        $questions=unserialize($paper->getQuestions());
        //获取当前试卷的答案
        $answers=unserialize($exam_record->getAnswers());
        //将试题信息加入到$questions_detail数组中
        $questions_detail=array();
        $questions_content=array();
        $questions_images=array();
        //将多选试题的答案先反序列化
        $mul_choices_answers = array();
        if ($parts) {//当试题包含到parts 不为空时
            foreach ($parts as $key => $part) {
                if ($part['part_order'] == 1) {//part内试题乱序
                    shuffle($parts[$key]['questions']);
                }
            }
            /*foreach ($questions as $value) {
                $question = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Question')->find($value);
                //试题所有信息
                $questions_detail[$question->getId()] = $question;
                //试题题干及选项内容序列化
                $questions_content[$question->getId()] = unserialize($question->getQuestionContent());
                //试题包含图片序列化
                $questions_images[$question->getId()] = unserialize($question->getQuestionImages());
            }*/
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
        return $this->render('OnlineTestAdminBundle:Admin:answersDetail.html.twig',
                array(
                    'exam_record' => $exam_record,
                    'paper' => $paper,
                    'parts' => $parts,
                    'questions' => $questions_detail,
                    'questions_content' => $questions_content,
                    'questions_images' => $questions_images,
                    'mul_choices_answers' => $mul_choices_answers,
                    'hasParts' => $hasParts,
                    'answers' => $answers
                ));
    }
    
}

