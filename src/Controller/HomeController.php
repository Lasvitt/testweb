<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function number(): Response
    {
        return new Response(
            '<html><body>Home</body></html>'
        );
    }

    #[Route('/lucky', name: 'lucky')]
    public function lucky(): Response
    {
        $number = random_int(0, 100);

        return $this->render('lucky-number.html.twig', [
            'number' => $number,
        ]);
    }

    #[Route('/api', name: 'api')]
    public function api(): Response
    {
        return new Response(
            '<html><body>API future</body></html>'
        );
    }
    
}