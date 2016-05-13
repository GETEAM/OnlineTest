<?php

namespace OnlineTest\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use OnlineTest\AdminBundle\Entity\Exam;
use OnlineTest\AdminBundle\Entity\Question;
use OnlineTest\AdminBundle\Entity\Paper;
use Symfony\Component\Validator\Constraints\DateTime;

class ExamManagementController extends Controller {

    //考试列表
    public function examListAction(Request $request) {
        //考试状态选项
        $exam_status = $request->get('exam_status');
        if ($exam_status == "all") {
            //获取所有考试名称，为将要生成到下拉菜单做准备
            $exams = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->findAll();
        } else if ($exam_status == 0) {//考试正在进行
            //获取正在进行中的考试名称，为将要生成到下拉菜单做准备
            $exams = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->findByIsOverAndSave(0);
        } else if ($exam_status == 1) {//考试已结束
            //获取已经结束的考试名称，为将要生成到下拉菜单做准备
            $exams = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->findByIsOverAndSave(1);
        }
        if (count($exams)) {
            $hasExams = 1;
        } else {
            $hasExams = 0;
        }
        return $this->render('OnlineTestAdminBundle:Admin:examList.html.twig', array(
                    'exams' => $exams,
                    'hasExams' => $hasExams,
                    'exam_status' => $exam_status
        ));
    }

    //添加考试
    public function addExamAction(Request $request) {
        $exam = new Exam();
        $examName = $request->request->get('examName');
        $starttime = new \DateTime($request->request->get('starttime'));
        $endtime = new \DateTime($request->request->get('endtime'));
        $isRealName = $request->request->get('isRealName');
        $exam->setExamName($examName);
        $exam->setStarttime($starttime);
        $exam->setEndtime($endtime);
        $exam->setIsRealName($isRealName);
        //将考试状态默认为0
        $exam->setIsOverAndSave(0);
        $this->getDoctrine()->getManager()->persist($exam);
        $this->getDoctrine()->getManager()->flush();
        $result = array(
            "success" => 1
        );
        $this->get('session')->getFlashBag()->add(
                'notice', '考试添加成功!'
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    //考试验证
    public function examValidationAction(Request $request, $validation_option) {
        $validation_optionName = $request->request->get('validation_name');
        $isUnique = 0;
        $exams = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->findAll();
        if ($validation_option == "exam_name") {
            foreach ($exams as $exam) {
                if ($validation_optionName == ($exam->getExamName())) {
                    $isUnique = 1;
                }
            }
        }
        //取消考试代码的使用
        /* else if($validation_option=="exam_codename"){
          foreach ($exams as $exam) {
          if($validation_optionName==($exam->getExamCodename())){
          $isUnique=1;
          }
          }
          } */
        $result = array(
            'isUnique' => $isUnique
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    //结束考试
    public function endExamAction(Request $request, $examId) {
        $exam = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->endOneExam($examId);
        $result = array(
            'success' => 1
        );
        $this->get('session')->getFlashBag()->add(
                'notice', '考试结束成功!'
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    //结束选中试卷
    public function endSelectedExamsAction(Request $request) {
        $selectedExams = $request->request->get('selectedExams');
        $isSuccess = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->endSelectedExams($selectedExams);
        $result = array(
            'success' => $isSuccess
        );
        $this->get('session')->getFlashBag()->add(
                'notice', '选中项结束成功!'
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    //重新启用考试
    public function restartExamAction(Request $request, $examId) {
        $exam = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->restartOneExam($examId);
        $result = array(
            'success' => 1
        );
        $this->get('session')->getFlashBag()->add(
                'notice', '重新启用考试成功!'
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    //重新启用选中试卷
    public function restartSelectedExamsAction(Request $request) {
        $selectedExams = $request->request->get('selectedExams');
        $isSuccess = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->restartSelectedExams($selectedExams);
        $result = array(
            'success' => $isSuccess
        );
        $this->get('session')->getFlashBag()->add(
                'notice', '选中项重新启用成功!'
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    //试卷列表
    public function paperListAction(Request $request, $examId) {
        //获取所有考试名称，为将要生成到下拉菜单做准备
        $exams = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->findAll();
        $exam_names = array();
        $exam_names[''] = "—— 请选择考试名称 ——";
        foreach ($exams as $exam) {
            $exam_names[$exam->getId()] = $exam->getExamName();
        }
        if (!$exam_names) {
            $exam_names[''] = "暂无可用考试，请先添加";
        }
        //创建表单
        $form = $this->createFormBuilder()
                ->add('examName', 'choice', array(
                    'label' => '考试名称：',
                    'choices' => $exam_names,
                    'data' => $examId,
                ))
                ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $examName = $form['examName']->getData();
            $exam = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->find($examName);
            $papers = $exam->getPapers();
            //判断是否有试卷
            if (count($papers)) {
                $hasPapers = 1;
            } else {
                $hasPapers = 0;
            }
        } else {
            $papers = '';
            $hasPapers = -1;
            $exam = '';
        }
        //当url中的examId 为0时，不做任何操作,不等0时 视为考试编号 查询相应考试
        if ($examId != 0) {
            $exam = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->find($examId);
            $papers = $exam->getPapers();
            //判断是否有试卷
            if (count($papers)) {
                $hasPapers = 1;
            } else {
                $hasPapers = 0;
            }
        }
        return $this->render('OnlineTestAdminBundle:Admin:paperList.html.twig', array(
                    'form' => $form->createView(),
                    'papers' => $papers,
                    'hasPapers' => $hasPapers,
                    'exam' => $exam,
        ));
    }

    //添加试卷
    public function addPaperAction(Request $request) {
        $paper = new Paper();
        $examId = $request->request->get('examId');
        $paperName = $request->request->get('paperName');
        $duration = $request->request->get('duration');
        $paper->setPaperName($paperName);
        $paper->setDuration($duration);
        //将试卷可用状态默认为1
        $paper->setUsable(1);
        $exam = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->findOneById($examId);
        $paper->setExam($exam);
        $this->getDoctrine()->getManager()->persist($paper);
        $this->getDoctrine()->getManager()->flush();
        $result = array(
            "success" => 1
        );
        $this->get('session')->getFlashBag()->add(
                'notice', '试卷添加成功!'
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    //删除试卷
    public function deletePaperAction(Request $request, $paperId) {
        $isSuccess = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Paper')->deleteOnePaper($paperId);
        $result = array(
            'success' => $isSuccess
        );
        $this->get('session')->getFlashBag()->add(
                'notice', '试卷删除成功!'
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    //删除选中试卷
    public function deleteSelectedPapersAction(Request $request) {
        $selectedPapers = $request->request->get('selectedPapers');
        $isSuccess = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Paper')->deleteSelectedPapers($selectedPapers);
        $result = array(
            'success' => $isSuccess
        );
        $this->get('session')->getFlashBag()->add(
                'notice', '选中项删除成功!'
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    //修改试卷
    public function updatePaperAction(Request $request) {
        $examId = $request->request->get('examId');
        $paperId = $request->request->get('paperId');
        $paperName = $request->request->get('paperName');
        $duration = $request->request->get('duration');
        $usable = $request->request->get('usable');
        $paper = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Paper')->find($paperId);
        $paper->setPaperName($paperName);
        $paper->setDuration($duration);
        $paper->setUsable($usable);
        $this->getDoctrine()->getManager()->persist($paper);
        $this->getDoctrine()->getManager()->flush();
        $result = array(
            "success" => 1
        );
        $this->get('session')->getFlashBag()->add(
                'notice', '试卷修改成功!'
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    //添加parts页面(出卷)
    public function addPartsAction(Request $request, $paperId) {
        $paper = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Paper')->find($paperId);
        //获取当前考试中的试题
        $parts = unserialize($paper->getParts());
        
        //获取考试所包含的试题类别
        $kinds = unserialize($paper->getExam()->getKinds());
        //将试题信息加入到$questions_detail数组中
        $questions_detail = array();
        $questions_content = array();
        $questions_images = array();
        //将多选试题的答案先反序列化
        $mul_choices_answers = array();
        if ($parts) {//当试题包含到parts 不为空时
            foreach ($parts as $key => $part) {
                if ($part['part_order'] == 1) {//part内试题乱序
                    //shuffle($parts[$key]['questions']);
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
        return $this->render('OnlineTestAdminBundle:Admin:partsAdd.html.twig', array(
                    'exam' => $paper->getExam(),
                    'paper' => $paper,
                    'parts' => $parts,
                    'questions' => $questions_detail,
                    'questions_content' => $questions_content,
                    'questions_images' => $questions_images,
                    'mul_choices_answers' => $mul_choices_answers,
                    'kinds' => $kinds,
                    'hasParts' => $hasParts
        ));
    }
    
    //添加part页面(向试卷中添加一个part)
    public function addPartAction(Request $request, $paperId) {
        $paper = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Paper')->find($paperId);
        //获取当前考试中的试题
        $parts = unserialize($paper->getParts());
        //获取试题块包含的类别
        $part_kind = $request->request->get('kind');
        //获取试题块包含的试题数量
        $part_questions_num = $request->request->get('questions_num');
        //获取试题块的时长
        $part_duration = $request->request->get('duration');
        //获取试题内试题是否打乱
        $part_order = $request->request->get('part_order');
        
        $new_part=array();
        //将part的各个属性加入part中
        $new_part['kind'] = $part_kind;
        $new_part['questions_num'] = $part_questions_num;
        $new_part['duration'] = $part_duration;
        $new_part['part_order'] = $part_order;
        
        //从试题库抽取相应的试题
        $exam = $paper->getExam();
        $examId = $exam->getId();
        //part所包含的试题
        $part_questions = array();
        
        $questions_isMust = array();
        $questions_notMust = array();
        $questions = unserialize($exam->getQuestions());
        foreach($questions as $key => $question){
            $question_d=$this->getDoctrine()->getRepository('OnlineTestAdminBundle:Question')->find($question);
            if ($part_kind == "all") {
                if ($question_d->getIsMustSelect() == 1) {
                    array_push($part_questions, $question); //直接将必选题加入$part_questions
                } else if ($question_d->getIsMustSelect() == 0) {
                    array_push($questions_notMust, $question);
                }
            } else {
                if ($question_d->getKind() == $part_kind && $question_d->getIsMustSelect() == 1) {
                    array_push($part_questions, $question); //直接将必选题加入$part_questions
                } else if ($question_d->getKind() == $part_kind && $question_d->getIsMustSelect() == 0) {
                    array_push($questions_notMust, $question);
                }
            }
        }
        //如果必选题的数量小于要求到数量，从可选题内随机抽取
        if(count($part_questions)<$part_questions_num){
            $rest_num = $part_questions_num-count($part_questions);
            if($rest_num<  count($questions_notMust)){
                //剩余数量小于可选数量，随机抽取
                $rand_questions = array_rand($questions_notMust, $rest_num );
                foreach ($rand_questions as $key => $value){
                    array_push($part_questions,$questions_notMust[$value]);   
                }
            }else{
                //剩余数量大于等于可选数量，不抽取，将可选全部加入
                foreach ($questions_notMust as $key => $value){
                    array_push($part_questions,$value);   
                }
            }
        }
        //将试题加入part
        $new_part['questions'] = $part_questions;
        
        //将新试题块加入试卷
        if ($parts) {//当试题包含到parts 不为空时
            $hasParts = 1;
            $parts[count($parts)] = $new_part;
        } else {
            $parts=array();
            $hasParts = 0;
            $parts[0] = $new_part;
        }
        $paper->setParts(serialize($parts));
        $this->getDoctrine()->getManager()->flush();
        
        $result = array(
            "success" => 1
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    //添加试题页面(出卷)
    public function addQuestionsAction(Request $request, $examId) {
        $exam = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->find($examId);
        //获取当前考试中的试题
        $questions = unserialize($exam->getQuestions());
        //获取考试包含的自定义试题类别
        $kinds = unserialize($exam->getKinds());
        //将试题信息加入到$questions_detail数组中
        $questions_detail = array();
        $questions_content = array();
        $questions_images = array();
        //将多选试题的答案先反序列化
        $mul_choices_answers = array();
        if ($questions) {
            foreach ($questions as $value) {
                $question = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Question')->find($value);
                //试题所有信息
                $questions_detail[$question->getId()] = $question;
                //试题题干及选项内容序列化
                $questions_content[$question->getId()] = unserialize($question->getQuestionContent());
                //试题包含图片序列化
                $questions_images[$question->getId()] = unserialize($question->getQuestionImages());
                if($question->getType() == "multiple_choices_no_img"){
                    $mul_choices_answers[$question->getId()] = unserialize($question->getAnswer());
                }
            }
            $hasQuestions = 1;
        } else {
            $hasQuestions = 0;
        }
        return $this->render('OnlineTestAdminBundle:Admin:questionsAdd.html.twig', array(
                    'exam' => $exam,
                    'questions' => $questions_detail,
                    'questions_content' => $questions_content,
                    'questions_images' => $questions_images,
                    'mul_choices_answers' => $mul_choices_answers,
                    'kinds' => $kinds,
                    'hasQuestions' => $hasQuestions
        ));
    }

    //获取考试的自定义类别
    public function getExamKindsAction(Request $request) {
        $examId = $request->request->get('examId');
        $exam = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->find($examId);
        //获取考试包含的自定义试题类别
        $kinds = unserialize($exam->getKinds());
        $result = array(
            "success" => 1,
            "kinds" => $kinds
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    //将考试状态置为可用
    public function enablePaperAction($paperId) {
        $paper = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Paper')->find($paperId);
        $paper->setUsable(1);
        $this->getDoctrine()->getManager()->flush();
        $result = array(
            "usable" => $paper->getUsable()
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'text/html');
        return $response;
    }

    //将考试状态置为过期
    public function disablePaperAction($paperId) {
        $paper = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Paper')->find($paperId);
        $paper->setUsable(0);
        $this->getDoctrine()->getManager()->flush();
        $result = array(
            "usable" => $paper->getUsable()
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'text/html');
        return $response;
    }

    //添加试题
    public function addQuestionAction(Request $request) {
        //获取考试编号
        $examId = $request->request->get('examId');
        //获取试题类别
        $kind = $request->request->get('kind');

        //获取考试包含的自定义试题类别
        $exam = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->find($examId);
        $kinds = unserialize($exam->getKinds());

        //判断试题类别是否在已有类别中,若不在数组中添加新类别
        if ($kinds) {//如果kinds不为空 判断是否在内
            if (!in_array($kind, $kinds)) {
                array_push($kinds, $kind);
            }
        } else {//kind为空 手动加入
            $kinds = array();
            array_push($kinds, $kind);
        }
        $exam->setKinds(serialize($kinds));
        $this->getDoctrine()->getManager()->flush();

        //获取试题类型
        $type = $request->request->get('type');
        //获取试题是否必选
        $isMustSelect = $request->request->get('mustSelect');
        //获取试题选项是否打乱
        $isOptionShuffle = $request->request->get('optionShuffle');
        //如果试题类型为单选无图片题，做如下处理
        if ($type == "single_choice_no_img") {
            //获取ajxa传递过来的题干内容
            $question_stem = $request->request->get('question_stem');
            //获取ajxa传递过来的选项内容
            $question_options = $request->request->get('question_options');
            //获取ajxa传递过来的答案
            $answer = $request->request->get('answer');
            //构建试题内容（题干+选项）
            $question_content = array();
            //分别将题干,选项内容 加入数组
            $question_content['question_stem'] = $question_stem;
            $question_content['question_options'] = $question_options;
            //将试题数组序列化称字符串
            $question_content_serial = serialize($question_content);
            $question = new Question;
            $question->setQuestionContent($question_content_serial);
            $question->setType($type);
            $question->setAnswer($answer);
            $question->setKind($kind);
            $question->setIsMustSelect($isMustSelect);
            $question->setIsOptionShuffle($isOptionShuffle);
            $this->getDoctrine()->getManager()->persist($question);
            $this->getDoctrine()->getManager()->flush();
            $question_id = $question->getId();
            $result = array(
                "question_id" => $question->getId()
            );
            $response = new Response(json_encode($result));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        } else if ($type == "single_choice_img") {//如果试题类型为单选有图片题，做如下处理
            //获取ajxa传递过来的题干内容
            $question_stem = $request->request->get('question_stem');
            //获取ajxa传递过来的选项内容
            $question_options = $request->request->get('question_options');
            //获取ajxa传递过来的答案
            $answer = $request->request->get('answer');
            //构建试题内容（题干+选项）
            $question_content = array();
            //分别将题干,选项内容 加入数组
            $question_content['question_stem'] = $question_stem;
            $question_content['question_options'] = $question_options;
            //将试题数组序列化称字符串
            $question_content_serial = serialize($question_content);
            $question = new Question;
            $question->setQuestionContent($question_content_serial);
            $question->setType($type);
            $question->setAnswer($answer);
            $question->setKind($kind);
            $question->setIsMustSelect($isMustSelect);
            $question->setIsOptionShuffle($isOptionShuffle);
            $this->getDoctrine()->getManager()->persist($question);
            $this->getDoctrine()->getManager()->flush();
            $question_id = $question->getId();
            $result = array(
                "question_id" => $question_id
            );
            $response = new Response(json_encode($result));
            $response->headers->set('Content-Type', 'text/html');
            return $response;
        }else if ($type == "multiple_choices_no_img") {//如果试题类型为多选无图片题，做如下处理
            //获取ajxa传递过来的题干内容
            $question_stem = $request->request->get('question_stem');
            //获取ajxa传递过来的选项内容
            $question_options = $request->request->get('question_options');
            //获取ajxa传递过来的答案,因为是多选题，需要进行序列化
            $answer = serialize($request->request->get('answer'));
            //构建试题内容（题干+选项）
            $question_content = array();
            //分别将题干,选项内容 加入数组
            $question_content['question_stem'] = $question_stem;
            $question_content['question_options'] = $question_options;
            //将试题数组序列化称字符串
            $question_content_serial = serialize($question_content);
            $question = new Question;
            $question->setQuestionContent($question_content_serial);
            $question->setType($type);
            $question->setAnswer($answer);
            $question->setKind($kind);
            $question->setIsMustSelect($isMustSelect);
            $question->setIsOptionShuffle($isOptionShuffle);
            $this->getDoctrine()->getManager()->persist($question);
            $this->getDoctrine()->getManager()->flush();
            $question_id = $question->getId();
            $result = array(
                "question_id" => $question->getId()
            );
            $response = new Response(json_encode($result));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        } else if ($type == "short_answer_no_img") {//如果试题类型为简答有图片题，做如下处理
            //获取ajxa传递过来的题干内容
            $question_stem = $request->request->get('question_stem');
            //构建试题内容（题干+选项）
            $question_content = array();
            //分别将题干,选项内容 加入数组
            $question_content['question_stem'] = $question_stem;
            //将试题数组序列化称字符串
            $question_content_serial = serialize($question_content);
            $question = new Question;
            $question->setQuestionContent($question_content_serial);
            $question->setType($type);
            $question->setKind($kind);
            $question->setIsMustSelect($isMustSelect);
            $question->setIsOptionShuffle($isOptionShuffle);
            $this->getDoctrine()->getManager()->persist($question);
            $this->getDoctrine()->getManager()->flush();
            $question_id = $question->getId();
            $result = array(
                "question_id" => $question_id
            );
            $response = new Response(json_encode($result));
            $response->headers->set('Content-Type', 'text/html');
            return $response;
        } else if ($type == "short_answer_img") {//如果试题类型为简答有图片题，做如下处理
            //获取ajxa传递过来的题干内容
            $question_stem = $request->request->get('question_stem');
            //构建试题内容（题干+选项）
            $question_content = array();
            //分别将题干,选项内容 加入数组
            $question_content['question_stem'] = $question_stem;
            //将试题数组序列化称字符串
            $question_content_serial = serialize($question_content);
            $question = new Question;
            $question->setQuestionContent($question_content_serial);
            $question->setType($type);
            $question->setKind($kind);
            $question->setIsMustSelect($isMustSelect);
            $question->setIsOptionShuffle($isOptionShuffle);
            $this->getDoctrine()->getManager()->persist($question);
            $this->getDoctrine()->getManager()->flush();
            $question_id = $question->getId();
            $result = array(
                "question_id" => $question_id
            );
            $response = new Response(json_encode($result));
            $response->headers->set('Content-Type', 'text/html');
            return $response;
        }
    }

    //上传试题图片
    public function uploadImagesAction(Request $request) {
        $question_id = $request->request->get('question_id');
        $type = $request->request->get('type');
        //获取ajxa传递过来的试题图片id (且使用json_decode将json数组转换成php数组)
        $question_images_ids = explode(',', $request->request->get('question_images_ids'));
        if ($type == "single_choice_img") {
            //处理试题图片上传。图片保存名称与试题编号有关
            //判断文件夹是否存在
            if (!is_dir("question_images")) {
                mkdir("question_images");
            }
            //创建试题图片数组
            $question_images = array();
            //循环上传图片文件(题干和选项在一个数组)
            if (is_array($question_images_ids)) {
                foreach ($question_images_ids as $key => $value) {
                    if ($key == 0) {
                        if (!empty($_FILES[$value]['tmp_name'])) {
                            //获取后缀名
                            $extension = pathinfo($_FILES[$value]['name'], PATHINFO_EXTENSION);
                            //上传文件
                            move_uploaded_file($_FILES[$value]['tmp_name'], 'question_images/' . $question_id . '_stem.' . $extension);
                            //如果图片存在，则将图片地址存入数组
                            array_push($question_images, 'question_images/' . $question_id . '_stem.' . $extension);
                        } else {
                            //如果图片不存在，则在数组标识为0
                            array_push($question_images, 0);
                        }
                    } else {
                        if (!empty($_FILES[$value]['tmp_name'])) {
                            //获取后缀名
                            $extension = pathinfo($_FILES[$value]['name'], PATHINFO_EXTENSION);
                            //上传文件
                            move_uploaded_file($_FILES[$value]['tmp_name'], 'question_images/' . $question_id . '_option_' . $key . '.' . $extension);
                            //如果图片存在，则将图片地址存入数组
                            array_push($question_images, 'question_images/' . $question_id . '_option_' . $key . '.' . $extension);
                        } else {
                            //如果图片不存在，则在数组标识为0
                            array_push($question_images, 0);
                        }
                    }
                }
            }
        } else if ($type == "short_answer_img") {
            //处理试题图片上传。图片保存名称与试题编号有关
            //判断文件夹是否存在
            if (!is_dir("question_images")) {
                mkdir("question_images");
            }
            //创建试题图片数组
            $question_images = array();
            //循环上传图片文件(题干和选项在一个数组)
            if (is_array($question_images_ids)) {
                foreach ($question_images_ids as $key => $value) {
                    if ($key == 0) {
                        if (!empty($_FILES[$value]['tmp_name'])) {
                            //获取后缀名
                            $extension = pathinfo($_FILES[$value]['name'], PATHINFO_EXTENSION);
                            //上传文件
                            move_uploaded_file($_FILES[$value]['tmp_name'], 'question_images/' . $question_id . '_stem.' . $extension);
                            //如果图片存在，则将图片地址存入数组
                            array_push($question_images, 'question_images/' . $question_id . '_stem.' . $extension);
                        } else {
                            //如果图片不存在，则在数组标识为0
                            array_push($question_images, 0);
                        }
                    }
                }
            }
        }
        //将试题的图片地址存放到试题表中
        $question = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Question')->find($question_id);
        //将图片地址数组序列化存入数组
        $question->setQuestionImages(serialize($question_images));
        $this->getDoctrine()->getManager()->flush();
        $result = array(
            "success" => '图片上传成功！',
            "question_images" => $question_images,
            "question_id" => $question_id
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'text/html');
        return $response;
    }

    //将试题保存到试卷中
    public function saveAddAction(Request $request) {
        ////获取ajxa传递过来的考试编号
        $examId = trim($request->request->get('examId'));
        //获取ajxa传递过来的试题
        $questions = $request->request->get('questions');
        //将试题数组序列化称字符串
        $questions_serial = serialize($questions);
        $exam = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->find($examId);
        $exam->setQuestions($questions_serial);
        $this->getDoctrine()->getManager()->persist($exam);
        $this->getDoctrine()->getManager()->flush();
        $result = array(
            "success" => 1
        );
        $this->get('session')->getFlashBag()->add(
                'notice', '试题添加保存成功!正在刷新页面……'
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    //编辑试题
    public function updateQuestionAction(Request $request) {
        //获取考试编号
        $examId = $request->request->get('examId');
        //获取试题类别
        $kind = $request->request->get('kind');

        //获取考试包含的自定义试题类别
        $exam = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Exam')->find($examId);
        $kinds = unserialize($exam->getKinds());

        //判断试题类别是否在已有类别中,若不在数组中添加新类别
        if ($kinds) {//如果kinds不为空 判断是否在内
            if (!in_array($kind, $kinds)) {
                array_push($kinds, $kind);
            }
        } else {//kind为空 手动加入
            $kinds = array();
            array_push($kinds, $kind);
        }
        $exam->setKinds(serialize($kinds));
        $this->getDoctrine()->getManager()->flush();

        $type = $request->request->get('type');
        //获取试题是否必选
        $isMustSelect = $request->request->get('mustSelect');
        //获取试题选项是否打乱
        $isOptionShuffle = $request->request->get('optionShuffle');

        //如果试题类型为单选无图片题，做如下处理
        if ($type = 'single_choice_no_img') {
            //获取ajxa传递过来的试题编号
            $questionId = $request->request->get('questionId');
            //获取ajxa传递过来的题干内容
            $question_stem = $request->request->get('question_stem');
            //获取ajxa传递过来的选项内容
            $question_options = $request->request->get('question_options');
            //获取ajxa传递过来的答案
            $answer = $request->request->get('answer');
            //构建试题内容（题干+选项）
            $question_content = array();
            //分别将题干,选项内容 加入数组
            $question_content['question_stem'] = $question_stem;
            $question_content['question_options'] = $question_options;
            //将试题数组序列化称字符串
            $question_content_serial = serialize($question_content);
            $question = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Question')->find($questionId);
            ;
            $question->setQuestionContent($question_content_serial);
            $question->setAnswer($answer);
            $question->setKind($kind);
            $question->setIsMustSelect($isMustSelect);
            $question->setIsOptionShuffle($isOptionShuffle);
            $this->getDoctrine()->getManager()->flush();
            $result = array(
                "success" => 1
            );
            $response = new Response(json_encode($result));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        } else if ($type = 'single_choice_img') {//如果试题类型为单选有图片题，做如下处理
            //获取ajxa传递过来的试题编号
            $questionId = $request->request->get('questionId');
            //获取ajxa传递过来的题干内容
            $question_stem = $request->request->get('question_stem');
            //获取ajxa传递过来的选项内容
            $question_options = $request->request->get('question_options');
            //获取ajxa传递过来的答案
            $answer = $request->request->get('answer');
            //构建试题内容（题干+选项）
            $question_content = array();
            //分别将题干,选项内容 加入数组
            $question_content['question_stem'] = $question_stem;
            $question_content['question_options'] = $question_options;
            //将试题数组序列化称字符串
            $question_content_serial = serialize($question_content);
            $question = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Question')->find($questionId);
            $question->setQuestionContent($question_content_serial);
            $question->setAnswer($answer);
            $question->setKind($kind);
            $question->setIsMustSelect($isMustSelect);
            $question->setIsOptionShuffle($isOptionShuffle);
            $this->getDoctrine()->getManager()->flush();
            $result = array(
                "success" => 1
            );
            $response = new Response(json_encode($result));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        } else if ($type = 'short_answer_no_img') {//如果试题类型为简答无图片题，做如下处理
            //获取ajxa传递过来的试题编号
            $questionId = $request->request->get('questionId');
            //获取ajxa传递过来的题干内容
            $question_stem = $request->request->get('question_stem');
            //构建试题内容（题干+选项）
            $question_content = array();
            //分别将题干,选项内容 加入数组
            $question_content['question_stem'] = $question_stem;
            //将试题数组序列化称字符串
            $question_content_serial = serialize($question_content);
            $question = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Question')->find($questionId);
            $question->setQuestionContent($question_content_serial);
            $question->setKind($kind);
            $question->setIsMustSelect($isMustSelect);
            $question->setIsOptionShuffle($isOptionShuffle);
            $this->getDoctrine()->getManager()->flush();
            $result = array(
                "success" => 1
            );
            $response = new Response(json_encode($result));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        } else if ($type = 'short_answer_img') {//如果试题类型为简答有图片题，做如下处理
            //获取ajxa传递过来的试题编号
            $questionId = $request->request->get('questionId');
            //获取ajxa传递过来的题干内容
            $question_stem = $request->request->get('question_stem');
            //构建试题内容（题干+选项）
            $question_content = array();
            //分别将题干,选项内容 加入数组
            $question_content['question_stem'] = $question_stem;
            //将试题数组序列化称字符串
            $question_content_serial = serialize($question_content);
            $question = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Question')->find($questionId);
            $question->setQuestionContent($question_content_serial);
            $question->setKind($kind);
            $question->setIsMustSelect($isMustSelect);
            $question->setIsOptionShuffle($isOptionShuffle);
            $this->getDoctrine()->getManager()->flush();
            $result = array(
                "success" => 1
            );
            $response = new Response(json_encode($result));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }
    }

    //上传编辑试题图片
    public function uploadEditImagesAction(Request $request) {
        $question_id = $request->request->get('question_id');
        $question = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Question')->find($question_id);
        ;
        $type = $request->request->get('type');
        //获取ajxa传递过来的试题图片id (且使用json_decode将json数组转换成php数组)
        $question_images_ids = explode(',', $request->request->get('question_images_ids'));
        if ($type == "single_choice_img") {
            //处理试题图片上传。图片保存名称与试题编号有关
            //判断文件夹是否存在
            if (!is_dir("question_images")) {
                mkdir("question_images");
            }
            //获取数据库中试题图片数组,并且反序列化
            $question_images = unserialize($question->getQuestionImages());
            //循环上传图片文件(题干和选项在一个数组)
            if (is_array($question_images_ids)) {
                foreach ($question_images_ids as $key => $value) {
                    if ($key == 0) {
                        if (!empty($_FILES[$value]['tmp_name'])) {
                            //获取后缀名
                            $extension = pathinfo($_FILES[$value]['name'], PATHINFO_EXTENSION);
                            //上传文件
                            move_uploaded_file($_FILES[$value]['tmp_name'], 'question_images/' . $question_id . '_stem.' . $extension);
                            //如果图片存在，则将新图片地址存入数组
                            $question_images[$key] = 'question_images/' . $question_id . '_stem.' . $extension;
                        }
                    } else {
                        if (!empty($_FILES[$value]['tmp_name'])) {
                            //获取后缀名
                            $extension = pathinfo($_FILES[$value]['name'], PATHINFO_EXTENSION);
                            //上传文件
                            move_uploaded_file($_FILES[$value]['tmp_name'], 'question_images/' . $question_id . '_option_' . $key . '.' . $extension);
                            //如果图片存在，则将新图片地址存入数组
                            $question_images[$key] = 'question_images/' . $question_id . '_option_' . $key . '.' . $extension;
                        }
                    }
                }
            }
        } else if ($type == "short_answer_img") {
            //处理试题图片上传。图片保存名称与试题编号有关
            //判断文件夹是否存在
            if (!is_dir("question_images")) {
                mkdir("question_images");
            }
            //获取数据库中试题图片数组,并且反序列化
            $question_images = unserialize($question->getQuestionImages());
            //循环上传图片文件(题干和选项在一个数组)
            if (is_array($question_images_ids)) {
                foreach ($question_images_ids as $key => $value) {
                    if ($key == 0) {
                        if (!empty($_FILES[$value]['tmp_name'])) {
                            //获取后缀名
                            $extension = pathinfo($_FILES[$value]['name'], PATHINFO_EXTENSION);
                            //上传文件
                            move_uploaded_file($_FILES[$value]['tmp_name'], 'question_images/' . $question_id . '_stem.' . $extension);
                            //如果图片存在，则将新图片地址存入数组
                            $question_images[$key] = 'question_images/' . $question_id . '_stem.' . $extension;
                        }
                    }
                }
            }
        }
        //将图片地址数组序列化存入数组
        $question->setQuestionImages(serialize($question_images));
        $this->getDoctrine()->getManager()->flush();
        $result = array(
            "success" => '试题修改成功！',
            "question_images" => $question_images
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'text/html');
        return $response;
    }

    //试卷出题完毕，准备考试
    public function paperPreparedAction(Request $request) {
        $paperId = $request->request->get('paperId');
        $paper = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Paper')->find($paperId);
        $paper->setStatus(1);
        $this->getDoctrine()->getManager()->persist($paper);
        $this->getDoctrine()->getManager()->flush();
        $result = array(
            "success" => 1
        );
        $this->get('session')->getFlashBag()->add(
                'notice', '试卷保存成功，可以开始考试'
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

}
