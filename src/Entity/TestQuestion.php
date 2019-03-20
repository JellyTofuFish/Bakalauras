<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TestQuestionRepository")
 */
class TestQuestion
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $serial_number;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Test", inversedBy="testQuestions")
     */
    private $fk_test;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Question", inversedBy="testQuestions")
     */
    private $fk_question;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSerialNumber(): ?int
    {
        return $this->serial_number;
    }

    public function setSerialNumber(?int $serial_number): self
    {
        $this->serial_number = $serial_number;

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

    public function getFkQuestion(): ?Question
    {
        return $this->fk_question;
    }

    public function setFkQuestion(?Question $fk_question): self
    {
        $this->fk_question = $fk_question;

        return $this;
    }
}
