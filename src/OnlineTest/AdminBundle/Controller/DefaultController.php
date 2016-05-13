<?php

namespace OnlineTest\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OnlineTestAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
