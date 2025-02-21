<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        // Votre logique, vos données, etc.
        return $this->render('home.html.twig', [
            'message' => 'Bienvenue sur mon site Symfony !'
        ]);
    }
}
