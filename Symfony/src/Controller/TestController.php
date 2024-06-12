<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
//    #[Route(path: '/test/{id}', name: 'test', requirements: ['id' => '\d{2,}'])]
//    #[Route(path: '/test', name: 'test', condition: "request.headers.get('X-Test')=='foo'")]
    #[Route(path: '/test/{id<\d+>}', name: 'test')]
    public function index(Request $request) :never
    {
        echo $request->query->get('id');
        die;
    }

}