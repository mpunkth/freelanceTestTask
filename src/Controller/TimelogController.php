<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class TimelogController extends AbstractController
{
    /**
     * @Route("/timelogs")
     */
    public function index()
    {
        $number = random_int(0, 100);

        return $this->render('timelogs/timelogs.html.twig', [
            'number' => $number,
        ]);
    }
}