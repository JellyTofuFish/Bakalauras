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
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\File", mappedBy="fk_question")
     */
    private $files;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\GroupList", inversedBy="questions")
     * @ORM\JoinColumn(nullable=true)
     */
    private $fk_group = null;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AnswerOption", mappedBy="fk_question", orphanRemoval=true)
     */
    private $answeroptions;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ParticipantAnswer", mappedBy="fk_question")
     */
    private $participantAnswers;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\QuestionAttribute", mappedBy="fk_question", orphanRemoval=true)
     */
    private $questionAttributes;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Test", inversedBy="questions")
     */
    private $fk_test;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Question", inversedBy="presentationQuestions")
     */
    private $fk_presentation;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Question", mappedBy="fk_presentation")
     */
    private $presentationQuestions;

    public function __construct()
    {
        $this->files = new ArrayCollection();
        $this->answeroptions = new ArrayCollection();
        $this->participantAnswers = new ArrayCollection();
        $this->questionAttributes = new ArrayCollection();
        $this->presentationQuestions = new ArrayCollection();
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection|File[]
     */
    public function getFileS(): Collection
    {
        return $this->files;
    }

    public function addFile(File $file): self
    {
        if (!$this->files->contains($file)) {
            $this->files[] = $file;
            $file->setFkQuestion($this);
        }

        return $this;
    }

    public function removeFile(File $file): self
    {
        if ($this->files->contains($file)) {
            $this->files->removeElement($file);
            // set the owning side to null (unless already changed)
            if ($file->getFkQuestion() === $this) {
                $file->setFkQuestion(null);
            }
        }

        return $this;
    }

    public function getFkGroup(): ?groupList
    {
        return $this->fk_group;
    }

    public function setFkGroup(?groupList $fk_group): self
    {
        $this->fk_group = $fk_group;

        return $this;
    }

    /**
     * @return Collection|AnswerOption[]
     */
    public function getAnsweroptions(): Collection
    {
        return $this->answeroptions;
    }

    public function addAnsweroption(AnswerOption $answeroption): self
    {
        if (!$this->answeroptions->contains($answeroption)) {
            $this->answeroptions[] = $answeroption;
            $answeroption->setFkQuestion($this);
        }

        return $this;
    }

    public function removeAnsweroption(AnswerOption $answeroption): self
    {
        if ($this->answeroptions->contains($answeroption)) {
            $this->answeroptions->removeElement($answeroption);
            // set the owning side to null (unless already changed)
            if ($answeroption->getFkQuestion() === $this) {
                $answeroption->setFkQuestion(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|ParticipantAnswer[]
     */
    public function getParticipantAnswers(): Collection
    {
        return $this->participantAnswers;
    }

    public function addParticipantAnswer(ParticipantAnswer $participantAnswer): self
    {
        if (!$this->participantAnswers->contains($participantAnswer)) {
            $this->participantAnswers[] = $participantAnswer;
            $participantAnswer->setFkQuestion($this);
        }

        return $this;
    }

    public function removeParticipantAnswer(ParticipantAnswer $participantAnswer): self
    {
        if ($this->participantAnswers->contains($participantAnswer)) {
            $this->participantAnswers->removeElement($participantAnswer);
            // set the owning side to null (unless already changed)
            if ($participantAnswer->getFkQuestion() === $this) {
                $participantAnswer->setFkQuestion(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|QuestionAttribute[]
     */
    public function getQuestionAttributes(): Collection
    {
        return $this->questionAttributes;
    }

    public function addQuestionAttribute(QuestionAttribute $questionAttribute): self
    {
        if (!$this->questionAttributes->contains($questionAttribute)) {
            $this->questionAttributes[] = $questionAttribute;
            $questionAttribute->setFkQuestion($this);
        }

        return $this;
    }

    public function removeQuestionAttribute(QuestionAttribute $questionAttribute): self
    {
        if ($this->questionAttributes->contains($questionAttribute)) {
            $this->questionAttributes->removeElement($questionAttribute);
            // set the owning side to null (unless already changed)
            if ($questionAttribute->getFkQuestion() === $this) {
                $questionAttribute->setFkQuestion(null);
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

    public function getPresentationQuestions(): ?self
    {
        return $this->fk_presentation;
    }

    public function setPresentationQuestions(?self $presentationQuestions): self
    {
        $this->fk_presentation = $presentationQuestions;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getPresentationQuestione(): Collection
    {
        return $this->presentationQuestions;
    }

    public function addPresentationQuestion(self $presentationQuestion): self
    {
        if (!$this->presentationQuestions->contains($presentationQuestion)) {
            $this->presentationQuestions[] = $presentationQuestion;
            $presentationQuestion->setPresentationQuestions($this);
        }

        return $this;
    }

    public function removePresentationQuestion(self $presentationQuestions): self
    {
        if ($this->presentationQuestions->contains($presentationQuestions)) {
            $this->presentationQuestions->removeElement($presentationQuestions);
            // set the owning side to null (unless already changed)
            if ($presentationQuestions->getPresentationQuestions() === $this) {
                $presentationQuestions->setPresentationQuestions(null);
            }
        }

        return $this;
    }

}
