<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Question extends \App\Entity\Question implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'question_name', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'files', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'fk_group', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'answeroptions', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'participantAnswers', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'questionAttributes', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'testQuestions', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'question_wording', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'fk_user', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'required'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'question_name', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'files', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'fk_group', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'answeroptions', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'participantAnswers', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'questionAttributes', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'testQuestions', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'question_wording', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'fk_user', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'required'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Question $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getQuestionName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuestionName', []);

        return parent::getQuestionName();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuestionName(string $question_name): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuestionName', [$question_name]);

        return parent::setQuestionName($question_name);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(?string $description): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getType(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType(string $type): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getFileS(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileS', []);

        return parent::getFileS();
    }

    /**
     * {@inheritDoc}
     */
    public function addFile(\App\Entity\Files $file): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFile', [$file]);

        return parent::addFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFile(\App\Entity\Files $file): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFile', [$file]);

        return parent::removeFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function getFkGroup(): ?\App\Entity\groupList
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFkGroup', []);

        return parent::getFkGroup();
    }

    /**
     * {@inheritDoc}
     */
    public function setFkGroup(?\App\Entity\groupList $fk_group): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFkGroup', [$fk_group]);

        return parent::setFkGroup($fk_group);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnsweroptions(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnsweroptions', []);

        return parent::getAnsweroptions();
    }

    /**
     * {@inheritDoc}
     */
    public function addAnsweroption(\App\Entity\AnswerOption $answeroption): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAnsweroption', [$answeroption]);

        return parent::addAnsweroption($answeroption);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAnsweroption(\App\Entity\AnswerOption $answeroption): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAnsweroption', [$answeroption]);

        return parent::removeAnsweroption($answeroption);
    }

    /**
     * {@inheritDoc}
     */
    public function getParticipantAnswers(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParticipantAnswers', []);

        return parent::getParticipantAnswers();
    }

    /**
     * {@inheritDoc}
     */
    public function addParticipantAnswer(\App\Entity\ParticipantAnswer $participantAnswer): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addParticipantAnswer', [$participantAnswer]);

        return parent::addParticipantAnswer($participantAnswer);
    }

    /**
     * {@inheritDoc}
     */
    public function removeParticipantAnswer(\App\Entity\ParticipantAnswer $participantAnswer): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeParticipantAnswer', [$participantAnswer]);

        return parent::removeParticipantAnswer($participantAnswer);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuestionAttributes(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuestionAttributes', []);

        return parent::getQuestionAttributes();
    }

    /**
     * {@inheritDoc}
     */
    public function addQuestionAttribute(\App\Entity\QuestionAttribute $questionAttribute): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addQuestionAttribute', [$questionAttribute]);

        return parent::addQuestionAttribute($questionAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function removeQuestionAttribute(\App\Entity\QuestionAttribute $questionAttribute): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeQuestionAttribute', [$questionAttribute]);

        return parent::removeQuestionAttribute($questionAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function getTestQuestions(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTestQuestions', []);

        return parent::getTestQuestions();
    }

    /**
     * {@inheritDoc}
     */
    public function addTestQuestion(\App\Entity\TestQuestion $testQuestion): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTestQuestion', [$testQuestion]);

        return parent::addTestQuestion($testQuestion);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTestQuestion(\App\Entity\TestQuestion $testQuestion): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTestQuestion', [$testQuestion]);

        return parent::removeTestQuestion($testQuestion);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuestionWording(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuestionWording', []);

        return parent::getQuestionWording();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuestionWording(string $question_wording): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuestionWording', [$question_wording]);

        return parent::setQuestionWording($question_wording);
    }

    /**
     * {@inheritDoc}
     */
    public function getFkUser(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFkUser', []);

        return parent::getFkUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setFkUser(?\App\Entity\User $fk_user): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFkUser', [$fk_user]);

        return parent::setFkUser($fk_user);
    }

    /**
     * {@inheritDoc}
     */
    public function getRequired(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRequired', []);

        return parent::getRequired();
    }

    /**
     * {@inheritDoc}
     */
    public function setRequired(bool $required): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRequired', [$required]);

        return parent::setRequired($required);
    }

}
