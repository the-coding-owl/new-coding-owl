<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\SessionData;
use App\Repository\SessionDataRepository;

class BackendController extends AbstractController
{
    /**
     * @Route("/backend", name="backend")
     */
    public function index(Request $request)
    {
        return $this->render('backend/index.html.twig');
    }

}
