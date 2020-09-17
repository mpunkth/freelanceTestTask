<?php

namespace App\Entity;

use App\Repository\TimelogRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TimelogRepository::class)
 */
class Timelog
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $TimeStart;

    /**
     * @ORM\Column(type="datetime")
     */
    private $TimeStop;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Task;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Customer;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $HoursSpent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTimeStart(): ?\DateTimeInterface
    {
        return $this->TimeStart;
    }

    public function setTimeStart(\DateTimeInterface $TimeStart): self
    {
        $this->TimeStart = $TimeStart;

        return $this;
    }

    public function getTimeStop(): ?\DateTimeInterface
    {
        return $this->TimeStop;
    }

    public function setTimeStop(\DateTimeInterface $TimeStop): self
    {
        $this->TimeStop = $TimeStop;

        return $this;
    }

    public function getTask(): ?string
    {
        return $this->Task;
    }

    public function setTask(string $Task): self
    {
        $this->Task = $Task;

        return $this;
    }

    public function getCustomer(): ?string
    {
        return $this->Customer;
    }

    public function setCustomer(string $Customer): self
    {
        $this->Customer = $Customer;

        return $this;
    }

    public function __toString()
    {
        return $this->getTimeStart() . " " . $this->getTimeStop();
    }

    public function getHoursSpent(): ?string
    {
         return $this->HoursSpent;
    }

    public function setHoursSpent(?string $HoursSpent): self
    {
        $this->HoursSpent = $HoursSpent;
        return $this;
    }
}
