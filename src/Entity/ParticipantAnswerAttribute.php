<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ParticipantAnswerAttributeRepository")
 */
class ParticipantAnswerAttribute
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $value = null;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\QuestionAttribute", inversedBy="participantAnswerAttributes")
     */
    private $fk_questionAttribute = null;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ParticipantAnswer", inversedBy="participantAnswerAttributes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fk_participantAnswer;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TestAttribute", inversedBy="participantAnswerAttributes")
     */
    private $fk_testAttribute = null;


    public function __construct()
    {
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

    public function getFkQuestionAttribute(): ?QuestionAttribute
    {
        return $this->fk_questionAttribute;
    }

    public function setFkQuestionAttribute(?QuestionAttribute $fk_questionAttribute): self
    {
        $this->fk_questionAttribute = $fk_questionAttribute;

        return $this;
    }

    public function getFkParticipantAnswer(): ?ParticipantAnswer
    {
        return $this->fk_participantAnswer;
    }

    public function setFkParticipantAnswer(?ParticipantAnswer $fk_participantAnswer): self
    {
        $this->fk_participantAnswer = $fk_participantAnswer;

        return $this;
    }

    public function getFkTestAttribute(): ?TestAttribute
    {
        return $this->fk_testAttribute;
    }

    public function setFkTestAttribute(?TestAttribute $fk_testAttribute): self
    {
        $this->fk_testAttribute = $fk_testAttribute;

        return $this;
    }

}
