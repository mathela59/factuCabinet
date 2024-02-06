<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function homepage(): Response
    {
        $number = random_int(0,100);
        return new Response(
            '<html></body>'.$number.'</body></html>'
        );
    }
}