<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TicketRepository")
 */
class Ticket
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Ticket;

    /**
     * @ORM\Column(type="text")
     */
    private $Comments;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTicket(): ?string
    {
        return $this->Ticket;
    }

    public function setTicket(string $Ticket): self
    {
        $this->Ticket = $Ticket;

        return $this;
    }

    public function getComments(): ?string
    {
        return $this->Comments;
    }

    public function setComments(string $Comments): self
    {
        $this->Comments = $Comments;

        return $this;
    }
}
