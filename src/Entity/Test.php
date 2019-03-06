<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TestRepository")
 */
class Test
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
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $code;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $last_activated_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $test_start;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $test_end;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TestAttribute", mappedBy="fk_test", orphanRemoval=true)
     */
    private $testAttributes;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TestParticipation", mappedBy="fk_test", orphanRemoval=true)
     */
    private $testParticipations;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Question", mappedBy="fk_test")
     */
    private $questions;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_active = false;

    public function __construct()
    {
        $this->testAttributes = new ArrayCollection();
        $this->testParticipations = new ArrayCollection();
        $this->questions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(): self
    {
        $this->created_at = new \DateTime('now');

        return $this;
    }

    public function getLastActivatedAt(): ?\DateTimeInterface
    {
        return $this->last_activated_at;
    }

    public function setLastActivatedAt(?\DateTimeInterface $last_activated_at): self
    {
        $this->last_activated_at = $last_activated_at;

        return $this;
    }

    public function getTestStart(): ?\DateTimeInterface
    {
        return $this->test_start;
    }

    public function setTestStart(?\DateTimeInterface $test_start): self
    {
        $this->test_start = $test_start;

        return $this;
    }

    public function getTestEnd(): ?\DateTimeInterface
    {
        return $this->test_end;
    }

    public function setTestEnd(?\DateTimeInterface $test_end): self
    {
        $this->test_end = $test_end;

        return $this;
    }

    /**
     * @return Collection|TestAttribute[]
     */
    public function getTestAttributes(): Collection
    {
        return $this->testAttributes;
    }

    public function addTestAttribute(TestAttribute $testAttribute): self
    {
        if (!$this->testAttributes->contains($testAttribute)) {
            $this->testAttributes[] = $testAttribute;
            $testAttribute->setFkTest($this);
        }

        return $this;
    }

    public function removeTestAttribute(TestAttribute $testAttribute): self
    {
        if ($this->testAttributes->contains($testAttribute)) {
            $this->testAttributes->removeElement($testAttribute);
            // set the owning side to null (unless already changed)
            if ($testAttribute->getFkTest() === $this) {
                $testAttribute->setFkTest(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Testparticipation[]
     */
    public function getTestParticipations(): Collection
    {
        return $this->testParticipations;
    }

    public function addTestParticipation(Testparticipation $testParticipation): self
    {
        if (!$this->testParticipations->contains($testParticipation)) {
            $this->testParticipations[] = $testParticipation;
            $testParticipation->setFkTest($this);
        }

        return $this;
    }

    public function removeTestParticipation(Testparticipation $testParticipation): self
    {
        if ($this->testParticipations->contains($testParticipation)) {
            $this->testParticipations->removeElement($testParticipation);
            // set the owning side to null (unless already changed)
            if ($testParticipation->getFkTest() === $this) {
                $testParticipation->setFkTest(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|question[]
     */
    public function getQuestions(): Collection
    {
        return $this->questions;
    }

    public function addQuestion(question $question): self
    {
        if (!$this->questions->contains($question)) {
            $this->questions[] = $question;
            $question->setFkTest($this);
        }

        return $this;
    }

    public function removeQuestion(question $question): self
    {
        if ($this->questions->contains($question)) {
            $this->questions->removeElement($question);
            // set the owning side to null (unless already changed)
            if ($question->getFkTest() === $this) {
                $question->setFkTest(null);
            }
        }

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->is_active;
    }

    public function setIsActive(bool $is_active): self
    {
        $this->is_active = $is_active;

        return $this;
    }
}
