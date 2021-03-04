<?php

namespace App\Controller;

use App\Entity\Telefoon;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class AdminController
 * @package App\Controller
 * @IsGranted("ROLE_ADMIN")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(EntityManagerInterface $em): Response
    {
        $telefoons = $em->getRepository(Telefoon::class)->findAll();
        return $this->render('admin/index.html.twig', [
            'telefoons' => $telefoons
        ]);
    }

    /**
     * @Route("/details/{id}", name="details")
     * @param EntityManagerInterface $em
     * @param $id
     * @return Response
     */
    public function details(EntityManagerInterface $em, $id)
    {
        $telefoon = $em->getRepository(Telefoon::class)->find($id);

        return $this->render('admin/detail.html.twig', [
            'telefoon' => $telefoon]);
    }
}
