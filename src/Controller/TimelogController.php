<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
class TimelogController
{
    /**
     * @Route("/timelogs")
     */
    public function index()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}