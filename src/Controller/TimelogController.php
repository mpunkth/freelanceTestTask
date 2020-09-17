<?php


namespace App\Controller;


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