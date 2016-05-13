<?php

namespace OnlineTest\AdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class OnlineTestAdminBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
