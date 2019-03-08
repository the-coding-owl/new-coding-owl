<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class FrontendController extends AbstractController
{
  public function index()
  {
    $response = new Response('Hallo Welt', 200);
    return $response;
  }
}
