<?php

namespace OnlineTest\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExamRecord
 */
class ExamRecord
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var integer
     */
    private $paperId;

    /**
     * @var string
     */
    private $answer;

    /**
     * @var integer
     */
    private $score;


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
     * Set username
     *
     * @param string $username
     * @return ExamRecord
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set paperId
     *
     * @param integer $paperId
     * @return ExamRecord
     */
    public function setPaperId($paperId)
    {
        $this->paperId = $paperId;

        return $this;
    }

    /**
     * Get paperId
     *
     * @return integer 
     */
    public function getPaperId()
    {
        return $this->paperId;
    }

    /**
     * Set answer
     *
     * @param string $answer
     * @return ExamRecord
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
     * Set score
     *
     * @param integer $score
     * @return ExamRecord
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return integer 
     */
    public function getScore()
    {
        return $this->score;
    }
    /**
     * @var \OnlineTest\AdminBundle\Entity\Paper
     */
    private $paper;

    /**
     * @var \OnlineTest\AdminBundle\Entity\Student
     */
    private $student;


    /**
     * Set paper
     *
     * @param \OnlineTest\AdminBundle\Entity\Paper $paper
     * @return ExamRecord
     */
    public function setPaper(\OnlineTest\AdminBundle\Entity\Paper $paper = null)
    {
        $this->paper = $paper;

        return $this;
    }

    /**
     * Get paper
     *
     * @return \OnlineTest\AdminBundle\Entity\Paper 
     */
    public function getPaper()
    {
        return $this->paper;
    }

    /**
     * Set student
     *
     * @param \OnlineTest\AdminBundle\Entity\Student $student
     * @return ExamRecord
     */
    public function setStudent(\OnlineTest\AdminBundle\Entity\Student $student = null)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \OnlineTest\AdminBundle\Entity\Student 
     */
    public function getStudent()
    {
        return $this->student;
    }
    /**
     * @var string
     */
    private $answers;


    /**
     * Set answers
     *
     * @param string $answers
     * @return ExamRecord
     */
    public function setAnswers($answers)
    {
        $this->answers = $answers;

        return $this;
    }

    /**
     * Get answers
     *
     * @return string 
     */
    public function getAnswers()
    {
        return $this->answers;
    }
}
