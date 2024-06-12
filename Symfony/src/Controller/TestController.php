<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
//    #[Route(path: '/test/{id}', name: 'test', requirements: ['id' => '\d{2,}'])]
//    #[Route(path: '/test', name: 'test', condition: "request.headers.get('X-Test')=='foo'")]
    #[Route(path: '/test/{id<\d+>}', name: 'test')]
    public function index(Request $request) :Response
    {
        return $this->json([
            'id' => $request->get('id'),
        ]);
        echo $request->query->get('id');
        die;
    }

}