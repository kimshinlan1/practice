<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home_page")
     */
    public function index()
    {
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/welcome",name="welcome_page")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function welcome()
    {
        return $this->render("welcome/welcome.html.twig", [
            "my_variable" => "Nhi Keo"
        ]);
    }
}
