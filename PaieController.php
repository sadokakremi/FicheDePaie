<?php

namespace App\Controller;

use App\Entity\Employe;
use App\Repository\EmployeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PaieController extends AbstractController
{
    /**
     * @Route("/paie/{idemploye}/{periode}", name="paie")
     */
    public function index($idemploye,$periode)
    {

        $employe = $this->getDoctrine()
            ->getRepository(Employe::class)
            ->find($idemploye);
        return $this->render('paie/index.html.twig', [
            'employe' => $employe,
            'periode'=>$periode
        ]);
    }
}
