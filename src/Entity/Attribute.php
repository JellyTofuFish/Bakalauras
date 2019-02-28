<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AttributeRepository")
 */
class Attribute
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
     * @ORM\OneToMany(targetEntity="App\Entity\QuestionAttribute", mappedBy="fk_attribute", orphanRemoval=true)
     */
    private $questionAttributes;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TestAttribute", mappedBy="fk_attribute", orphanRemoval=true)
     */
    private $testAttributes;


    public function __construct()
    {
        $this->attributes = new ArrayCollection();
        $this->questionAttributes = new ArrayCollection();
        $this->testAttributes = new ArrayCollection();
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
            $questionAttribute->setFkAttribute($this);
        }

        return $this;
    }

    public function removeQuestionAttribute(QuestionAttribute $questionAttribute): self
    {
        if ($this->questionAttributes->contains($questionAttribute)) {
            $this->questionAttributes->removeElement($questionAttribute);
            // set the owning side to null (unless already changed)
            if ($questionAttribute->getFkAttribute() === $this) {
                $questionAttribute->setFkAttribute(null);
            }
        }

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
            $testAttribute->setFkAttribute($this);
        }

        return $this;
    }

    public function removeTestAttribute(TestAttribute $testAttribute): self
    {
        if ($this->testAttributes->contains($testAttribute)) {
            $this->testAttributes->removeElement($testAttribute);
            // set the owning side to null (unless already changed)
            if ($testAttribute->getFkAttribute() === $this) {
                $testAttribute->setFkAttribute(null);
            }
        }

        return $this;
    }

}
