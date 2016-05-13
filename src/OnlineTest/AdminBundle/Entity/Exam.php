<?php

namespace OnlineTest\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Exam
 */
class Exam
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $examId;

    /**
     * @var string
     */
    private $examName;

    /**
     * @var string
     */
    private $examCodename;

    protected $students;
    protected $papers;
    public function __construct() {
        $this->students = new ArrayCollection();
    }

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
     * Set examId
     *
     * @param string $examId
     * @return Exam
     */
    public function setExamId($examId)
    {
        $this->examId = $examId;

        return $this;
    }

    /**
     * Get examId
     *
     * @return string 
     */
    public function getExamId()
    {
        return $this->examId;
    }

    /**
     * Set examName
     *
     * @param string $examName
     * @return Exam
     */
    public function setExamName($examName)
    {
        $this->examName = $examName;

        return $this;
    }

    /**
     * Get examName
     *
     * @return string 
     */
    public function getExamName()
    {
        return $this->examName;
    }

    /**
     * Set examCodename
     *
     * @param string $examCodename
     * @return Exam
     */
    public function setExamCodename($examCodename)
    {
        $this->examCodename = $examCodename;

        return $this;
    }

    /**
     * Get examCodename
     *
     * @return string 
     */
    public function getExamCodename()
    {
        return $this->examCodename;
    }

    /**
     * Add students
     *
     * @param \OnlineTest\MainBundle\Entity\Student $students
     * @return Exam
     */
    public function addStudent(\OnlineTest\AdminBundle\Entity\Student $students)
    {
        $this->students[] = $students;

        return $this;
    }

    /**
     * Remove students
     *
     * @param \OnlineTest\MainBundle\Entity\Student $students
     */
    public function removeStudent(\OnlineTest\AdminBundle\Entity\Student $students)
    {
        $this->students->removeElement($students);
    }

    /**
     * Get students
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * Add papers
     *
     * @param \OnlineTest\AdminBundle\Entity\Paper $papers
     * @return Exam
     */
    public function addPaper(\OnlineTest\AdminBundle\Entity\Paper $papers)
    {
        $this->papers[] = $papers;

        return $this;
    }

    /**
     * Remove papers
     *
     * @param \OnlineTest\AdminBundle\Entity\Paper $papers
     */
    public function removePaper(\OnlineTest\AdminBundle\Entity\Paper $papers)
    {
        $this->papers->removeElement($papers);
    }

    /**
     * Get papers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPapers()
    {
        return $this->papers;
    }
    /**
     * @var integer
     */
    private $isRealName;

    /**
     * @var integer
     */
    private $isOrder;

    /**
     * @var integer
     */
    private $isOnTime;


    /**
     * Set isRealName
     *
     * @param integer $isRealName
     * @return Exam
     */
    public function setIsRealName($isRealName)
    {
        $this->isRealName = $isRealName;

        return $this;
    }

    /**
     * Get isRealName
     *
     * @return integer 
     */
    public function getIsRealName()
    {
        return $this->isRealName;
    }

    /**
     * Set isOrder
     *
     * @param integer $isOrder
     * @return Exam
     */
    public function setIsOrder($isOrder)
    {
        $this->isOrder = $isOrder;

        return $this;
    }

    /**
     * Get isOrder
     *
     * @return integer 
     */
    public function getIsOrder()
    {
        return $this->isOrder;
    }

    /**
     * Set isOnTime
     *
     * @param integer $isOnTime
     * @return Exam
     */
    public function setIsOnTime($isOnTime)
    {
        $this->isOnTime = $isOnTime;

        return $this;
    }

    /**
     * Get isOnTime
     *
     * @return integer 
     */
    public function getIsOnTime()
    {
        return $this->isOnTime;
    }
    /**
     * @var integer
     */
    private $isOverAndSave;


    /**
     * Set isOverAndSave
     *
     * @param integer $isOverAndSave
     * @return Exam
     */
    public function setIsOverAndSave($isOverAndSave)
    {
        $this->isOverAndSave = $isOverAndSave;

        return $this;
    }

    /**
     * Get isOverAndSave
     *
     * @return integer 
     */
    public function getIsOverAndSave()
    {
        return $this->isOverAndSave;
    }
    /**
     * @var \DateTime
     */
    private $starttime;

    /**
     * @var \DateTime
     */
    private $endtime;


    /**
     * Set starttime
     *
     * @param \DateTime $starttime
     * @return Exam
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
     * @return Exam
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
     * @var string
     */
    private $questions;


    /**
     * Set questions
     *
     * @param string $questions
     * @return Exam
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
     * @var string
     */
    private $kinds;


    /**
     * Set kinds
     *
     * @param string $kinds
     * @return Exam
     */
    public function setKinds($kinds)
    {
        $this->kinds = $kinds;

        return $this;
    }

    /**
     * Get kinds
     *
     * @return string 
     */
    public function getKinds()
    {
        return $this->kinds;
    }
}
