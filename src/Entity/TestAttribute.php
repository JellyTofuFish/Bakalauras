<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TestAttributeRepository")
 */
class TestAttribute
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $value;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Attribute", inversedBy="testAttributes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fk_attribute;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ParticipantAnswerAttribute", mappedBy="fk_testAttribute")
     */
    private $participantAnswerAttributes;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Test", inversedBy="testAttributes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fk_test;

    public function __construct()
    {
        $this->participantAnswerAttributes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getFkAttribute(): ?Attribute
    {
        return $this->fk_attribute;
    }

    public function setFkAttribute(?Attribute $fk_attribute): self
    {
        $this->fk_attribute = $fk_attribute;

        return $this;
    }

    /**
     * @return Collection|participantAnswerAttribute[]
     */
    public function getParticipantAnswerAttributes(): Collection
    {
        return $this->participantAnswerAttributes;
    }

    public function addParticipantAnswerAttribute(participantAnswerAttribute $participantAnswerAttribute): self
    {
        if (!$this->participantAnswerAttributes->contains($participantAnswerAttribute)) {
            $this->participantAnswerAttributes[] = $participantAnswerAttribute;
            $participantAnswerAttribute->setFkTestAttribute($this);
        }

        return $this;
    }

    public function removeParticipantAnswerAttribute(participantAnswerAttribute $participantAnswerAttribute): self
    {
        if ($this->participantAnswerAttributes->contains($participantAnswerAttribute)) {
            $this->participantAnswerAttributes->removeElement($participantAnswerAttribute);
            // set the owning side to null (unless already changed)
            if ($participantAnswerAttribute->getFkTestAttribute() === $this) {
                $participantAnswerAttribute->setFkTestAttribute(null);
            }
        }

        return $this;
    }

    public function getFkTest(): ?Test
    {
        return $this->fk_test;
    }

    public function setFkTest(?Test $fk_test): self
    {
        $this->fk_test = $fk_test;

        return $this;
    }
}
