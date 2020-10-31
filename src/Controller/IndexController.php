<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
//        dump($this->getDoctrine()->getConnection()->connect());
        return new Response('CORRIENDO update');
    }
}