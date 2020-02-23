<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function dashboard()
    {
        return $this->render('dash.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/deposerDemandeSoutenance", name="deposerDemandeSoutenance")
     */
    public function deposerDemandeSoutenance()
    {
        return $this->render('deposerds.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }



}