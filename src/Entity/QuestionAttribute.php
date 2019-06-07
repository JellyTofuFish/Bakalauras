<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionAttributeRepository")
 */
class QuestionAttribute
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Attribute", inversedBy="questionAttributes")
     * @ORM\JoinColumn(nullable=true)
     */
    private $fk_attribute;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Question", inversedBy="questionAttributes", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $fk_question;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ParticipantAnswerAttribute", mappedBy="fk_questionAttribute")
     */
    private $participantAnswerAttributes;

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

    public function getFkQuestion(): ?Question
    {
        return $this->fk_question;
    }

    public function setFkQuestion(?Question $fk_question): self
    {
        $this->fk_question = $fk_question;

        return $this;
    }

    /**
     * @return Collection|ParticipantAnswerAttribute[]
     */
    public function getParticipantAnswerAttributes(): Collection
    {
        return $this->participantAnswerAttributes;
    }

    public function addParticipantAnswerAttribute(ParticipantAnswerAttribute $participantAnswerAttribute): self
    {
        if (!$this->participantAnswerAttributes->contains($participantAnswerAttribute)) {
            $this->participantAnswerAttributes[] = $participantAnswerAttribute;
            $participantAnswerAttribute->setFkQuestionAttribute($this);
        }

        return $this;
    }

    public function removeParticipantAnswerAttribute(ParticipantAnswerAttribute $participantAnswerAttribute): self
    {
        if ($this->participantAnswerAttributes->contains($participantAnswerAttribute)) {
            $this->participantAnswerAttributes->removeElement($participantAnswerAttribute);
            // set the owning side to null (unless already changed)
            if ($participantAnswerAttribute->getFkQuestionAttribute() === $this) {
                $participantAnswerAttribute->setFkQuestionAttribute(null);
            }
        }

        return $this;
    }
}
