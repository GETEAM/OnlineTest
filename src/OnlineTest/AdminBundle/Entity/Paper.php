<?php

namespace OnlineTest\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paper
 */
class Paper
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $paperName;

    /**
     * @var \DateTime
     */
    private $starttime;

    /**
     * @var \DateTime
     */
    private $endtime;

    /**
     * @var integer
     */
    private $status;


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
     * Set paperName
     *
     * @param string $paperName
     * @return Paper
     */
    public function setPaperName($paperName)
    {
        $this->paperName = $paperName;

        return $this;
    }

    /**
     * Get paperName
     *
     * @return string 
     */
    public function getPaperName()
    {
        return $this->paperName;
    }

    /**
     * Set starttime
     *
     * @param \DateTime $starttime
     * @return Paper
     */
    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;

        return $this;
    }

    /**
     * Get starttime
     *
     * @return \DateTime 
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * Set endtime
     *
     * @param \DateTime $endtime
     * @return Paper
     */
    public function setEndtime($endtime)
    {
        $this->endtime = $endtime;

        return $this;
    }

    /**
     * Get endtime
     *
     * @return \DateTime 
     */
    public function getEndtime()
    {
        return $this->endtime;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Paper
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }
    
    protected $exam;

    /**
     * Set exam
     *
     * @param \OnlineTest\AdminBundle\Entity\Exam $exam
     * @return Paper
     */
    public function setExam(\OnlineTest\AdminBundle\Entity\Exam $exam = null)
    {
        $this->exam = $exam;

        return $this;
    }

    /**
     * Get exam
     *
     * @return \OnlineTest\AdminBundle\Entity\Exam 
     */
    public function getExam()
    {
        return $this->exam;
    }
    /**
     * @var string
     */
    private $questions;


    /**
     * Set questions
     *
     * @param string $questions
     * @return Paper
     */
    public function setQuestions($questions)
    {
        $this->questions = $questions;

        return $this;
    }

    /**
     * Get questions
     *
     * @return string 
     */
    public function getQuestions()
    {
        return $this->questions;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $examRecords;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->examRecords = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add examRecords
     *
     * @param \OnlineTest\MainBundle\Entity\ExamRecord $examRecords
     * @return Paper
     */
    public function addExamRecord(\OnlineTest\MainBundle\Entity\ExamRecord $examRecords)
    {
        $this->examRecords[] = $examRecords;

        return $this;
    }

    /**
     * Remove examRecords
     *
     * @param \OnlineTest\MainBundle\Entity\ExamRecord $examRecords
     */
    public function removeExamRecord(\OnlineTest\MainBundle\Entity\ExamRecord $examRecords)
    {
        $this->examRecords->removeElement($examRecords);
    }

    /**
     * Get examRecords
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getExamRecords()
    {
        return $this->examRecords;
    }
    /**
     * @var integer
     */
    private $duration;

    /**
     * @var string
     */
    private $parts;


    /**
     * Set duration
     *
     * @param integer $duration
     * @return Paper
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set parts
     *
     * @param string $parts
     * @return Paper
     */
    public function setParts($parts)
    {
        $this->parts = $parts;

        return $this;
    }

    /**
     * Get parts
     *
     * @return string 
     */
    public function getParts()
    {
        return $this->parts;
    }
    /**
     * @var integer
     */
    private $usable;


    /**
     * Set usable
     *
     * @param integer $usable
     * @return Paper
     */
    public function setUsable($usable)
    {
        $this->usable = $usable;

        return $this;
    }

    /**
     * Get usable
     *
     * @return integer 
     */
    public function getUsable()
    {
        return $this->usable;
    }
}
