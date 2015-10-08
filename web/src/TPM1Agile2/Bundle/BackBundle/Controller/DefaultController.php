<?php

namespace TPM1Agile2\Bundle\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TPM1Agile2BackBundle:Default:index.html.twig');
    }
}
