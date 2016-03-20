<?php

namespace DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserInformation
 *
 * @ORM\Table(name="user_information")
 * @ORM\Entity(repositoryClass="DashboardBundle\Repository\UserInformationRepository")
 */
class UserInformation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=50, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=50, nullable=true)
     */
    private $lastname;

    /**
     * @var \integer
     *
     * @ORM\Column(name="age", type="integer")
     */

    private $age;

    /**
     * @var \float
     *
     * @ORM\Column(name="height", type="float")
     */

    private $height;

    /**
     * @var \float
     *
     * @ORM\Column(name="weight", type="float")
     */

    private $weight;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date", nullable=true)
     */

    private $birthday;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */

    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="Gender")
     * @ORM\JoinColumn(name="gender_id", referencedColumnName="id")
     */

    protected $gender;

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
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
     * Set firstname
     *
     * @param string $firstname
     * @return UserInformation
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return UserInformation
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set age
     *
     * @param \integer $age
     * @return UserInformation
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return \integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set height
     *
     * @param \float $height
     * @return UserInformation
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return \float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set weight
     *
     * @param \float $weight
     * @return UserInformation
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return \float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return UserInformation
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return UserInformation
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

    public function getAllInfromation()
    {
        $userInformation = array();


    }
}
