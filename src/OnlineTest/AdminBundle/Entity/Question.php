<?php

namespace OnlineTest\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 */
class Question
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $questionContent;

    /**
     * @var string
     */
    private $answer;

    /**
     * @var string
     */
    private $type;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set questionContent
     *
     * @param string $questionContent
     * @return Question
     */
    public function setQuestionContent($questionContent)
    {
        $this->questionContent = $questionContent;

        return $this;
    }

    /**
     * Get questionContent
     *
     * @return string 
     */
    public function getQuestionContent()
    {
        return $this->questionContent;
    }

    /**
     * Set answer
     *
     * @param string $answer
     * @return Question
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string 
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Question
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @var string
     */
    private $questionImages;


    /**
     * Set questionImages
     *
     * @param string $questionImages
     * @return Question
     */
    public function setQuestionImages($questionImages)
    {
        $this->questionImages = $questionImages;

        return $this;
    }

    /**
     * Get questionImages
     *
     * @return string 
     */
    public function getQuestionImages()
    {
        return $this->questionImages;
    }
    /**
     * @var string
     */
    private $optionRate;


    /**
     * Set optionRate
     *
     * @param string $optionRate
     * @return Question
     */
    public function setOptionRate($optionRate)
    {
        $this->optionRate = $optionRate;

        return $this;
    }

    /**
     * Get optionRate
     *
     * @return string 
     */
    public function getOptionRate()
    {
        return $this->optionRate;
    }
    /**
     * @var string
     */
    private $kind;

    /**
     * @var integer
     */
    private $isMustSelect;

    /**
     * @var integer
     */
    private $isOptionShuffle;


    /**
     * Set kind
     *
     * @param string $kind
     * @return Question
     */
    public function setKind($kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Get kind
     *
     * @return string 
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Set isMustSelect
     *
     * @param integer $isMustSelect
     * @return Question
     */
    public function setIsMustSelect($isMustSelect)
    {
        $this->isMustSelect = $isMustSelect;

        return $this;
    }

    /**
     * Get isMustSelect
     *
     * @return integer 
     */
    public function getIsMustSelect()
    {
        return $this->isMustSelect;
    }

    /**
     * Set isOptionShuffle
     *
     * @param integer $isOptionShuffle
     * @return Question
     */
    public function setIsOptionShuffle($isOptionShuffle)
    {
        $this->isOptionShuffle = $isOptionShuffle;

        return $this;
    }

    /**
     * Get isOptionShuffle
     *
     * @return integer 
     */
    public function getIsOptionShuffle()
    {
        return $this->isOptionShuffle;
    }
}
