<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionRepository")
 */
class Question
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
    private $question;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\QuestionComplexity", inversedBy="questions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $complexity;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Test", inversedBy="questions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $test;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AnswerSingleSelect", mappedBy="question")
     */
    private $answerSingleSelects;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AnswerMultiSelect", mappedBy="question")
     */
    private $answerMultiSelects;

    public function __construct()
    {
        $this->answerSingleSelects = new ArrayCollection();
        $this->answerMultiSelects = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

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

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getComplexity(): ?questioncomplexity
    {
        return $this->complexity;
    }

    public function setComplexity(?questioncomplexity $complexity): self
    {
        $this->complexity = $complexity;

        return $this;
    }

    public function getTest(): ?test
    {
        return $this->test;
    }

    public function setTest(?test $test): self
    {
        $this->test = $test;

        return $this;
    }

    /**
     * @return Collection|AnswerSingleSelect[]
     */
    public function getAnswerSingleSelects(): Collection
    {
        return $this->answerSingleSelects;
    }

    public function addAnswerSingleSelect(AnswerSingleSelect $answerSingleSelect): self
    {
        if (!$this->answerSingleSelects->contains($answerSingleSelect)) {
            $this->answerSingleSelects[] = $answerSingleSelect;
            $answerSingleSelect->setQuestion($this);
        }

        return $this;
    }

    public function removeAnswerSingleSelect(AnswerSingleSelect $answerSingleSelect): self
    {
        if ($this->answerSingleSelects->contains($answerSingleSelect)) {
            $this->answerSingleSelects->removeElement($answerSingleSelect);
            // set the owning side to null (unless already changed)
            if ($answerSingleSelect->getQuestion() === $this) {
                $answerSingleSelect->setQuestion(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|AnswerMultiSelect[]
     */
    public function getAnswerMultiSelects(): Collection
    {
        return $this->answerMultiSelects;
    }

    public function addAnswerMultiSelect(AnswerMultiSelect $answerMultiSelect): self
    {
        if (!$this->answerMultiSelects->contains($answerMultiSelect)) {
            $this->answerMultiSelects[] = $answerMultiSelect;
            $answerMultiSelect->setQuestion($this);
        }

        return $this;
    }

    public function removeAnswerMultiSelect(AnswerMultiSelect $answerMultiSelect): self
    {
        if ($this->answerMultiSelects->contains($answerMultiSelect)) {
            $this->answerMultiSelects->removeElement($answerMultiSelect);
            // set the owning side to null (unless already changed)
            if ($answerMultiSelect->getQuestion() === $this) {
                $answerMultiSelect->setQuestion(null);
            }
        }

        return $this;
    }
}
