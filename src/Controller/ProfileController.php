<?php

namespace App\Controller;

use App\Entity\Doctorant;
use App\Form\DoctorantType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfileController extends AbstractController
{

    /**
     * @Route("/profile", name="profile")
     */
    public function register(Request $request, EntityManagerInterface $entityManager)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();  

        $doc = new Doctorant();
        $form = $this->createForm(DoctorantType::class, $doc);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $DateNaissance = $doc->getDateNaissance();
            $LieuNaissance = $doc->getLieuNaissance();
            $Adresse = $doc->getAdresse();
            $CIN = $doc->getCIN();
            $CNE = $doc->getCNE();
            $telephone = $doc->getTelephone();
            $boursier = $doc->getBoursier();

            $doc->setDateNaissance($DateNaissance);
            $doc->setLieuNaissance($LieuNaissance);
            $doc->setAdresse($Adresse);
            $doc->setCIN($CIN);
            $doc->setCNE($CNE);
            $doc->setTelephone($telephone);
            $doc->setBoursier($boursier);
            $doc->setAnneeUniversitaire('2018/2019');
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($doc);
            $entityManager->flush();
            
        }

        return $this->render('profile/profile.html.twig',[
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }


}
