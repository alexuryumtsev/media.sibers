<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CpgBanned
 *
 * @ORM\Table(name="CPG_banned")
 * @ORM\Entity
 */
class CpgBanned
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
     * @return CpgBanned
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
     * Set ipAddr
     *
     * @param string $ipAddr
     *
     * @return CpgBanned
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
     * @return CpgBanned
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
     * @return CpgBanned
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
