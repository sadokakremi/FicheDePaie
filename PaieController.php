<?php

namespace App\Controller;

use App\Entity\Employe;
use App\Entity\Salaire;
use App\Repository\EmployeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PaieController extends AbstractController
{
    /**
     * @Route("/paie/{idsalaire}", name="paie")
     */
    public function index($idsalaire)
    {

        $salaire = $this->getDoctrine()
            ->getRepository(Salaire::class )

            ->find($idsalaire);

        return $this->render('paie/index.html.twig', [
            'salaire' => $salaire

        ]);
    }
}
