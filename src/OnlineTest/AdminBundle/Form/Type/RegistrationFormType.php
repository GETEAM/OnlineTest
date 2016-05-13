<?php

namespace OnlineTest\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // add your custom field
        $builder
                ->add('name', 'text', array('label' => '姓名：', 'translation_domain' => 'FOSUserBundle'))
                ->add('save', 'submit', array('label' => 'registration.submit', 'translation_domain' => 'FOSUserBundle'))
                ->add('cancel', 'reset', array('label' => '取消', 'translation_domain' => 'FOSUserBundle'))
            ;
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'onlinetest_admin_registration';
    }
}

?>