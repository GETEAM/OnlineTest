<?php

namespace OnlineTest\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('name', 'text', array('label' => '姓名：', 'translation_domain' => 'FOSUserBundle'))
                ->add('cancel', 'reset', array('label' => '取消', 'translation_domain' => 'FOSUserBundle'))
                ->add('save', 'submit', array('label' => 'profile.edit.submit', 'translation_domain' => 'FOSUserBundle'))
            ;
    }
    

    public function getParent()
    {
        return 'fos_user_profile';
    }

    public function getName()
    {
        return 'onlinetest_admin_info';
    }
}

?>