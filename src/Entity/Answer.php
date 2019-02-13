<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnswerRepository")
 */
class Answer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_correct;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\AnswerSingleSelect", mappedBy="answer", cascade={"persist", "remove"})
     */
    private $answerSingleSelect;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\AnswerMultiSelect", mappedBy="answer", cascade={"persist", "remove"})
     */
    private $answerMultiSelect;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsCorrect(): ?bool
    {
        return $this->is_correct;
    }

    public function setIsCorrect(): self
    {
        $this->is_correct = false;

        return $this;
    }

    public function getAnswerSingleSelect(): ?AnswerSingleSelect
    {
        return $this->answerSingleSelect;
    }

    public function setAnswerSingleSelect(AnswerSingleSelect $answerSingleSelect): self
    {
        $this->answerSingleSelect = $answerSingleSelect;

        // set the owning side of the relation if necessary
        if ($this !== $answerSingleSelect->getAnswer()) {
            $answerSingleSelect->setAnswer($this);
        }

        return $this;
    }

    public function getAnswerMultiSelect(): ?AnswerMultiSelect
    {
        return $this->answerMultiSelect;
    }

    public function setAnswerMultiSelect(AnswerMultiSelect $answerMultiSelect): self
    {
        $this->answerMultiSelect = $answerMultiSelect;

        // set the owning side of the relation if necessary
        if ($this !== $answerMultiSelect->getAnswer()) {
            $answerMultiSelect->setAnswer($this);
        }

        return $this;
    }
}
