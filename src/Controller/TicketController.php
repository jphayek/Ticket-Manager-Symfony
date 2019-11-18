<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Ticket;
class TicketController extends AbstractController
{
    /**
     * @Route("/ticket", name="ticket")
     */
    public function ticket()
    {
        return $this->render('ticket/index.html.twig', [
            'controller_name' => 'TicketController',
        ]);
    }
    /**
 * @Route("/Ticket/{id}", name="Ticket_show")
 */
public function show(Ticket $Ticket)
{
    // use the Ticket!
    // ...
}
}


