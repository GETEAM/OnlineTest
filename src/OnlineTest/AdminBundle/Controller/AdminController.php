<?php

namespace OnlineTest\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('OnlineTestAdminBundle:Admin:systemIntro.html.twig');
    }
    public function teacherActivationAction()
    {
        $repository=$this->getDoctrine()->getRepository('OnlineTestAdminBundle:Admin'); 
        $admins=$repository->findInactiveAdmin();
        return $this->render('OnlineTestAdminBundle:Admin:teacherActivation.html.twig',
                array(
                    'admins'  => $admins,
                ));
    }
    public function deleteTeacherAction($username)
    {
        $isSuccess = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Admin')->deleteOneTeacher($username);         
        $result = array(
            'success' => $isSuccess
        );
        $this->get('session')->getFlashBag()->add(
                'notice', $username . ' 删除成功!'
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    public function activeTeacherAction($username)
    {
        $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Admin')->activeOneTeacher($username); 
        $this->get('session')->getFlashBag()->add(
            'notice',
            $username.' 激活成功!'
        );        
        //删除后跳转回激活教师界面
        $response = $this->redirect($this->generateUrl('teacher_activation'));
        return $response;
    }
    public function deleteSelectedTeachersAction(Request $request){
        $selectedTeachers = $request->request->get('selectTeachers'); 
        $isSuccess = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Admin')->deleteSelectedTeacher($selectedTeachers);         
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
    public function activeSelectedTeachersAction(Request $request){
        $selectedTeachers = $request->request->get('selectTeachers'); 
        $isSuccess = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Admin')->activeSelectedTeacher($selectedTeachers);         
        $result = array(
                'success' => $isSuccess
                );
        $this->get('session')->getFlashBag()->add(
            'notice',
            '选中项激活成功!'
        ); 
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    public function teacherListAction()
    {
        $repository=$this->getDoctrine()->getRepository('OnlineTestAdminBundle:Admin'); 
        $admins=$repository->findByEnabled(1);
        return $this->render('OnlineTestAdminBundle:Admin:teacherList.html.twig',
                array(
                    'admins'  => $admins,
                ));
    }
    public function deactiveTeacherAction($username)
    {
        $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Admin')->deactiveOneTeacher($username); 
        $this->get('session')->getFlashBag()->add(
            'notice',
            $username.' 失效成功!'
        );        
        //删除后跳转回激活教师界面
        $response = $this->redirect($this->generateUrl('teacher_list'));
        return $response;
    }
    public function deactiveSelectedTeachersAction(Request $request){
        $selectedTeachers = $request->request->get('selectTeachers'); 
        $isSuccess = $this->getDoctrine()->getRepository('OnlineTestAdminBundle:Admin')->deactiveSelectedTeacher($selectedTeachers);         
        $result = array(
                'success' => $isSuccess
                );
        $this->get('session')->getFlashBag()->add(
            'notice',
            '选中项失效成功!'
        ); 
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    
    
}
