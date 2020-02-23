<?php

namespace App\Controller;

use App\Entity\Rapport;
use App\Form\RapportFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class RapportController extends AbstractController
{

    /**
     * @Route("/deposerRapport", name="deposerRapport")
     */
    public function deposerRapport(Request $request)
    {
        $rapport = new Rapport();
        $form = $this->createForm(RapportFormType::class, $rapport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $rapport->getRapport();

            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            try {
                $file->move(
                    $this->getParameter('directory'),
                    $fileName
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }

            // updates the 'brochure' property to store the PDF file name
            // instead of its contents
            $product->setRapport($fileName);

            // ... persist the $product variable or any other work

            return $this->redirect($this->generateUrl('profile'));
        }

        return $this->render('deposerRapport.html.twig', [
            'form' => $form->createView(),
        ]);


    }
    
    
}