<?php

namespace Pimtestcore\RandomBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends FrontendController
{
    /**
     * @Route("/pimtestcore/random")
     */
    public function indexAction(Request $request)
    {
        return new Response('Hello world from random bundle');
    }
}
