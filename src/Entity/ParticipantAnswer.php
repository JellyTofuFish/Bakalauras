<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ParticipantAnswerRepository")
 */
class ParticipantAnswer
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
    private $answer;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Question", inversedBy="participantAnswers")
     * @ORM\JoinColumn(nullable=true)
     */
    private $fk_question;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\AnswerOption", mappedBy="fk_participantanswer")
     * @ORM\JoinColumn(nullable=true)
     */
    private $fk_answeroption;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ParticipantAnswerAttribute", mappedBy="fk_participantAnswer")
     */
    private $participantAnswerAttributes;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TestParticipation", inversedBy="participantAnswers", cascade={"persist"})
     */
    private $fk_testParticipation;

    public function __construct()
    {
        $this->fk_answeroption = new ArrayCollection();
        $this->participantAnswerAttributes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    public function setAnswer(?string $answer): self
    {
        $this->answer = $answer;

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
     * @return Collection|AnswerOption[]
     */
    public function getFkAnsweroption(): Collection
    {
        return $this->fk_answeroption;
    }

    public function addFkAnsweroption(AnswerOption $fkAnsweroption): self
    {
        if (!$this->fk_answeroption->contains($fkAnsweroption)) {
            $this->fk_answeroption[] = $fkAnsweroption;
            $fkAnsweroption->addFkParticipantanswer($this);
        }

        return $this;
    }

    public function removeFkAnsweroption(AnswerOption $fkAnsweroption): self
    {
        if ($this->fk_answeroption->contains($fkAnsweroption)) {
            $this->fk_answeroption->removeElement($fkAnsweroption);
            $fkAnsweroption->removeFkParticipantanswer($this);
        }

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
            $participantAnswerAttribute->setFkParticipantAnswer($this);
        }

        return $this;
    }

    public function removeParticipantAnswerAttribute(ParticipantAnswerAttribute $participantAnswerAttribute): self
    {
        if ($this->participantAnswerAttributes->contains($participantAnswerAttribute)) {
            $this->participantAnswerAttributes->removeElement($participantAnswerAttribute);
            // set the owning side to null (unless already changed)
            if ($participantAnswerAttribute->getFkParticipantAnswer() === $this) {
                $participantAnswerAttribute->setFkParticipantAnswer(null);
            }
        }

        return $this;
    }

    public function getFkTestParticipation(): ?TestParticipation
    {
        return $this->fk_testParticipation;
    }

    public function setFkTestParticipation(?TestParticipation $fk_testParticipation): self
    {
        $this->fk_testParticipation = $fk_testParticipation;

        return $this;
    }
}
