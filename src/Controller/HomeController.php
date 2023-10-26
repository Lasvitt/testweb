<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    #[Route('/', name: 'home')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Home</body></html>'
        );
    }

    #[Route('/lucky', name: 'lucky')]
    public function lucky(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}