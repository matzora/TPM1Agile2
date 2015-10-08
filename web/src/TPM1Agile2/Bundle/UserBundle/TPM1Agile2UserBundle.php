<?php
namespace TPM1Agile2\Bundle\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TPM1Agile2UserBundle extends Bundle
{

    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
