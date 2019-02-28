<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TestParticipationRepository")
 */
class TestParticipation
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
    private $private_code;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $is_test_over;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $test_started_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $test_ended_at;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Test", inversedBy="testParticipations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fk_test;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ParticipAntanswer", mappedBy="fk_testParticipation")
     */
    private $participantAnswers;

    public function __construct()
    {
        $this->participantAnswers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrivateCode(): ?string
    {
        return $this->private_code;
    }

    public function setPrivateCode(?string $private_code): self
    {
        $this->private_code = $private_code;

        return $this;
    }

    public function getIsTestOver(): ?bool
    {
        return $this->is_test_over;
    }

    public function setIsTestOver(?bool $is_test_over): self
    {
        $this->is_test_over = $is_test_over;

        return $this;
    }

    public function getTestStartedAt(): ?\DateTimeInterface
    {
        return $this->test_started_at;
    }

    public function setTestStartedAt(?\DateTimeInterface $test_started_at): self
    {
        $this->test_started_at = $test_started_at;

        return $this;
    }

    public function getTestEndedAt(): ?\DateTimeInterface
    {
        return $this->test_ended_at;
    }

    public function setTestEndedAt(?\DateTimeInterface $test_ended_at): self
    {
        $this->test_ended_at = $test_ended_at;

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

    /**
     * @return Collection|participantanswer[]
     */
    public function getParticipantAnswers(): Collection
    {
        return $this->participantAnswers;
    }

    public function addParticipantAnswer(participantanswer $participantAnswer): self
    {
        if (!$this->participantAnswers->contains($participantAnswer)) {
            $this->participantAnswers[] = $participantAnswer;
            $participantAnswer->setFkTestParticipation($this);
        }

        return $this;
    }

    public function removeParticipantAnswer(participantanswer $participantAnswer): self
    {
        if ($this->participantAnswers->contains($participantAnswer)) {
            $this->participantAnswers->removeElement($participantAnswer);
            // set the owning side to null (unless already changed)
            if ($participantAnswer->getFkTestParticipation() === $this) {
                $participantAnswer->setFkTestParticipation(null);
            }
        }

        return $this;
    }
}
