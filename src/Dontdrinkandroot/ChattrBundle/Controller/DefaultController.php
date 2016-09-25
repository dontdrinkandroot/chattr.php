<?php

namespace Dontdrinkandroot\ChattrBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DdrChattrBundle:Default:index.html.twig');
    }
}
