<?php

namespace App\Entity;

use App\Repository\OrderDetailRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrderDetailRepository::class)
 */
class OrderDetail
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @ORM\ManyToOne(targetEntity=Canva::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $canva;

    /**
     * @ORM\ManyToOne(targetEntity=Format::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $format;

    /**
     * @ORM\ManyToOne(targetEntity=Support::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $support;

    /**
     * @ORM\ManyToOne(targetEntity=Order::class, inversedBy="details")
     * @ORM\JoinColumn(nullable=false)
     */
    private $orderOrigin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getCanva(): ?Canva
    {
        return $this->canva;
    }

    public function setCanva(?Canva $canva): self
    {
        $this->canva = $canva;

        return $this;
    }

    public function getFormat(): ?Format
    {
        return $this->format;
    }

    public function setFormat(?Format $format): self
    {
        $this->format = $format;

        return $this;
    }

    public function getSupport(): ?Support
    {
        return $this->support;
    }

    public function setSupport(?Support $support): self
    {
        $this->support = $support;

        return $this;
    }

    public function getOrderOrigin(): ?Order
    {
        return $this->orderOrigin;
    }

    public function setOrderOrigin(?Order $orderOrigin): self
    {
        $this->orderOrigin = $orderOrigin;

        return $this;
    }
}
