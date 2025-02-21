<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LearnSymfonyController extends AbstractController
{
    #[Route('/learn-symfony', name: 'learn_symfony')]
    public function index(): Response
    {
        return $this->render('learn_symfony/index.html.twig', [
            // Vous pouvez passer des données à la vue ici
        ]);
    }
}
?>
