<?php

namespace OnlineTest\MainBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OnlineTest\AdminBundle\Entity\Admin;

/**
 * @author wendell.zheng <wxzheng@ustc.edu.cn>
 */
class InitData extends AbstractFixture implements ContainerAwareInterface
{

    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     *  {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $userManager = $this->container->get('fos_user.user_manager');

        //超级管理员
        $super = $userManager->createUser();
        $super->setUsername('cmet');
        $super->setEmail('cmet@ustc.edu.cn');
        $super->setName('cmet');
        $super->setPlainPassword('cmet2802');
        $super->setEnabled(TRUE);
        $super->addRole(Admin::ROLE_SUPER_ADMIN);
        $super->addRole(Admin::ROLE_ADMIN);
        $userManager->updateUser($super, FALSE);

        $manager->flush();
    }

}
