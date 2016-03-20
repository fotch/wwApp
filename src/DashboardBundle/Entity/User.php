<?php

namespace DashboardBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 *
 * Class User
 * @package DashboardBundle\Entity
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var
     */
    protected $id;

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function getUsername()
    {
        return parent::getUsername();
    }

    public function setUsername($username)
    {
        return parent::setUsername($username);
    }

    /**
     * Gets the encrypted password.
     *
     * @return string
     */
    public function getPassword()
    {
        return parent::getPassword();
    }

    public function getPlainPassword()
    {
        return parent::getPlainPassword();
    }

    public function setPassword($password)
    {
        return parent::setPassword($password);
    }

    /**
     * @ORM\ManyToOne(targetEntity="UserInformation")
     * @ORM\JoinColumn(name="userInformation_id", referencedColumnName="id")
     */

    protected $userInformation;

    /**
     * @return mixed
     */
    public function getUserInformation()
    {
        return $this->userInformation;
    }

}