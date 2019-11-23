<?php
// src/AppBundle/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    public function index()
    {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
        	'number' => $number,
        ]);
    }
}