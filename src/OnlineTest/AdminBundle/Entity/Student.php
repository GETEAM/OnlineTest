<?php

namespace OnlineTest\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Student
 */
class Student implements UserInterface, \Serializable
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
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $password;

    public $salt;
    public $roles;
    public $examName;
    protected $exam;

    public function __construct()
    {
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
     * Set username
     *
     * @param string $username
     * @return Student
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
     * Set name
     *
     * @param string $name
     * @return Student
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Student
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }
    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }
    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return array('ROLE_STUDENT');
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }
     /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }

    

    /**
     * Set salt
     *
     * @param string $salt
     * @return Student
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Set exam
     *
     * @param \OnlineTest\AdminBundle\Entity\Exam $exam
     * @return Student
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
     * Set name
     *
     * @param string $examName
     * @return Student
     */
    public function setExamName($examName)
    {
        $this->examName = $examName;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getExamName()
    {
        return $this->examName;
    }

    /**
     * @var integer
     */
    private $status;


    /**
     * Set status
     *
     * @param integer $status
     * @return Student
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
    /**
     * @var string
     */
    private $student_name;


    /**
     * Set student_name
     *
     * @param string $studentName
     * @return Student
     */
    public function setStudentName($studentName)
    {
        $this->student_name = $studentName;

        return $this;
    }

    /**
     * Get student_name
     *
     * @return string 
     */
    public function getStudentName()
    {
        return $this->student_name;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $examRecords;


    /**
     * Add examRecords
     *
     * @param \OnlineTest\MainBundle\Entity\ExamRecord $examRecords
     * @return Student
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
}
