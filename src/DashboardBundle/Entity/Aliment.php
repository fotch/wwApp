<?php

namespace DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aliment
 *
 * @ORM\Table(name="aliment")
 * @ORM\Entity(repositoryClass="DashboardBundle\Repository\AlimentRepository")
 */
class Aliment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="quantity_value", type="float")
     */
    private $quantityValue;

    /**
     * @var float
     *
     * @ORM\Column(name="point", type="float")
     */
    private $point;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;


    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="aliment")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;

    /**
    * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
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
     * Set name
     *
     * @param string $name
     * @return Aliment
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
     * Set quantityValue
     *
     * @param float $quantityValue
     * @return Aliment
     */
    public function setQuantityValue($quantityValue)
    {
        $this->quantityValue = $quantityValue;

        return $this;
    }

    /**
     * Get quantityValue
     *
     * @return float 
     */
    public function getQuantityValue()
    {
        return $this->quantityValue;
    }

    /**
     * Set point
     *
     * @param float $point
     * @return Aliment
     */
    public function setPoint($point)
    {
        $this->point = $point;

        return $this;
    }

    /**
     * Get point
     *
     * @return float 
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Aliment
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}
