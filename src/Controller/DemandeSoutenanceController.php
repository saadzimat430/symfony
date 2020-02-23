<?php

namespace App\Controller;

use App\Entity\DemandeSoutenance;
use App\Form\DemandeSoutenanceFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DemandeSoutenanceController extends AbstractController
{
    /**
     * @Route("/deposerDemandeSoutenance", name="deposerDemandeSoutenance")
     */
    public function index(Request $request)
    {
        $demandeSoutenance = new DemandeSoutenance();
        $form = $this->createForm(DemandeSoutenanceFormType::class, $demandeSoutenance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $DemandeSoutenance->getLettre();

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
        return $this->render('demande_soutenance.html.twig', [
            'controller_name' => 'DemandeSoutenanceController',
            'form' => $form->createView()
        ]);
    }
}
