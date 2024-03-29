<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnswerOptionRepository")
 */
class AnswerOption
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
    private $answer;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Question", inversedBy="answeroptions")
     * @ORM\JoinColumn(nullable=true)
     */
    private $fk_question;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\ParticipantAnswer", inversedBy="fk_answeroption",cascade={"persist"})
     */
    private $fk_participantanswer;

    public function __construct()
    {
        $this->fk_participantanswer = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    public function setAnswer(string $answer): self
    {
        $this->answer = $answer;

        return $this;
    }

    public function getFkQuestion(): ?Question
    {
        return $this->fk_question;
    }

    public function setFkQuestion(?Question $question): self
    {
        $this->fk_question = $question;

        return $this;
    }

    /**
     * @return Collection|ParticipantAnswer[]
     */
    public function getFkParticipantanswer(): Collection
    {
        return $this->fk_participantanswer;
    }

    public function addFkParticipantanswer(ParticipantAnswer $fkParticipantanswer): self
    {
        if (!$this->fk_participantanswer->contains($fkParticipantanswer)) {
            $this->fk_participantanswer[] = $fkParticipantanswer;
        }

        return $this;
    }

    public function removeFkParticipantanswer(ParticipantAnswer $fkParticipantanswer): self
    {
        if ($this->fk_participantanswer->contains($fkParticipantanswer)) {
            $this->fk_participantanswer->removeElement($fkParticipantanswer);
        }

        return $this;
    }
}
