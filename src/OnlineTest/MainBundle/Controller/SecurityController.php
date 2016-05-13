<?php
namespace OnlineTest\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

class SecurityController extends Controller{

    public function loginAction(Request $request, $examId)
    {
        $session = $request->getSession();

        // get the error if any (works with forward and redirect -- see below)
        if ($request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContextInterface::AUTHENTICATION_ERROR);
        } elseif (null !== $session && $session->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
            $error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
            $session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
        } else {
            $error = null;
        }

        if (!$error instanceof AuthenticationException) {
            $error = null; // The value does not come from the security component.
        }

        // last username entered by the user
        $lastUsername = (null === $session) ? '' : $session->get(SecurityContextInterface::LAST_USERNAME);

        //自定义处理
        $isAvailable = 1;
        if($examId==0){
            $examId=explode("_",$lastUsername)[0];
        }
        
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
        if($error){
            $error='用户名或密码错误，请确认您参与此次调查';
        }
        return $this->render('OnlineTestMainBundle:Main:login.html.twig', array(
            'examId' => $examId,
            'isAvailabe' => $isAvailable,
            'last_username' => $lastUsername,
            'error' => $error,
        ));
    }

    
    public function loginCheckAction()
    {
    }
}
