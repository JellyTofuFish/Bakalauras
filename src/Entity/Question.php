<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Contracts\Translation\TranslatorInterface;

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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $question_name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\File", mappedBy="fk_question", orphanRemoval=true)
     * @ORM\JoinColumn(nullable=true)
     */
    private $files;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\GroupList", inversedBy="questions")
     * @ORM\JoinColumn(nullable=true)
     */
    private $fk_group;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AnswerOption", mappedBy="fk_question", orphanRemoval=true, cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $answeroptions;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ParticipantAnswer", mappedBy="fk_question")
     * @ORM\JoinColumn(nullable=true)
     */
    private $participantAnswers;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\QuestionAttribute", mappedBy="fk_question")
     * @ORM\JoinColumn(nullable=true)
     */
    private $questionAttributes;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TestQuestion", mappedBy="fk_question")
     * @ORM\JoinColumn(nullable=true)
     */
    private $testQuestions;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $question_wording;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="questions")
     */
    private $fk_user;

    /**
     * @ORM\Column(type="boolean")
     */
    private $required = false;

    public function __construct( )
    {
        $this->files = new ArrayCollection();
        $this->answeroptions = new ArrayCollection();
        $this->participantAnswers = new ArrayCollection();
        $this->questionAttributes = new ArrayCollection();
        $this->testQuestions = new ArrayCollection();
    }

    public function __toString(){
        if ($this->getFkGroup() == null) {
            return (string) $this->question_name;
        }
        else {
            return (string) $this->getFkGroup()->getName() . ' : ' . $this->question_name;
        }
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestionName(): ?string
    {
        return $this->question_name;
    }

    public function setQuestionName(string $question_name): self
    {
        $this->question_name = $question_name;

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


    public function addAnsweroption(AnswerOption $answeroption) : self
    {
        if (!$this->answeroptions->contains($answeroption)) {
            $answeroption->setFkQuestion($this);
            $this->answeroptions->add($answeroption);
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


    /**
     * @return Collection|TestQuestion[]
     */
    public function getTestQuestions(): Collection
    {
        return $this->testQuestions;
    }

    public function addTestQuestion(TestQuestion $testQuestion): self
    {
        if (!$this->testQuestions->contains($testQuestion)) {
            $this->testQuestions[] = $testQuestion;
            $testQuestion->setFkQuestion($this);
        }

        return $this;
    }

    public function removeTestQuestion(TestQuestion $testQuestion): self
    {
        if ($this->testQuestions->contains($testQuestion)) {
            $this->testQuestions->removeElement($testQuestion);
            // set the owning side to null (unless already changed)
            if ($testQuestion->getFkQuestion() === $this) {
                $testQuestion->setFkQuestion(null);
            }
        }

        return $this;
    }

    public function getQuestionWording(): ?string
    {
        return $this->question_wording;
    }

    public function setQuestionWording(string $question_wording): self
    {
        $this->question_wording = $question_wording;

        return $this;
    }

    public function getFkUser(): ?User
    {
        return $this->fk_user;
    }

    public function setFkUser(?User $fk_user): self
    {
        $this->fk_user = $fk_user;

        return $this;
    }

    public function getRequired(): ?bool
    {
        return $this->required;
    }

    public function setRequired(bool $required): self
    {
        $this->required = $required;

        return $this;
    }

}
