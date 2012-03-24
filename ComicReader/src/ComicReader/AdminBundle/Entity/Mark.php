<?php

namespace ComicReader\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComicReader\AdminBundle\Entity\Mark
 *
 * @ORM\Table(name="mark")
 * @ORM\Entity(repositoryClass="ComicReader\AdminBundle\Entity\MarkRepository")
 */
class Mark
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var date $Date
     *
     * @ORM\Column(name="Date", type="date")
     */
    private $Date;

    /**
     * @var integer $Mark
     *
     * @ORM\Column(name="Mark", type="integer", nullable=true)
     */
    private $Mark;

    /**
     * @var string $Comment
     *
     * @ORM\Column(name="Comment", type="string", length=1000, nullable=true)
     */
    private $Comment;


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
     * Set Date
     *
     * @param date $date
     */
    public function setDate($date)
    {
        $this->Date = $date;
    }

    /**
     * Get Date
     *
     * @return date 
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * Set Mark
     *
     * @param integer $mark
     */
    public function setMark($mark)
    {
        $this->Mark = $mark;
    }

    /**
     * Get Mark
     *
     * @return integer 
     */
    public function getMark()
    {
        return $this->Mark;
    }

    /**
     * Set Comment
     *
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->Comment = $comment;
    }

    /**
     * Get Comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->Comment;
    }
    public function __construct()
    {
	$this->Date =  new \DateTime('now');
	$this->Mark = 0;
	$this->Comment = "";
    }
}