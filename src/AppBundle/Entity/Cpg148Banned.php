<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg148Banned
 *
 * @ORM\Table(name="cpg148_banned")
 * @ORM\Entity
 */
class Cpg148Banned
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=255, nullable=false)
     */
    private $userName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_addr", type="text", length=255, nullable=true)
     */
    private $ipAddr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expiry", type="datetime", nullable=true)
     */
    private $expiry;

    /**
     * @var boolean
     *
     * @ORM\Column(name="brute_force", type="boolean", nullable=false)
     */
    private $bruteForce = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ban_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $banId;



    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Cpg148Banned
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userName
     *
     * @param string $userName
     *
     * @return Cpg148Banned
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Cpg148Banned
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set ipAddr
     *
     * @param string $ipAddr
     *
     * @return Cpg148Banned
     */
    public function setIpAddr($ipAddr)
    {
        $this->ipAddr = $ipAddr;

        return $this;
    }

    /**
     * Get ipAddr
     *
     * @return string
     */
    public function getIpAddr()
    {
        return $this->ipAddr;
    }

    /**
     * Set expiry
     *
     * @param \DateTime $expiry
     *
     * @return Cpg148Banned
     */
    public function setExpiry($expiry)
    {
        $this->expiry = $expiry;

        return $this;
    }

    /**
     * Get expiry
     *
     * @return \DateTime
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * Set bruteForce
     *
     * @param boolean $bruteForce
     *
     * @return Cpg148Banned
     */
    public function setBruteForce($bruteForce)
    {
        $this->bruteForce = $bruteForce;

        return $this;
    }

    /**
     * Get bruteForce
     *
     * @return boolean
     */
    public function getBruteForce()
    {
        return $this->bruteForce;
    }

    /**
     * Get banId
     *
     * @return integer
     */
    public function getBanId()
    {
        return $this->banId;
    }
}
