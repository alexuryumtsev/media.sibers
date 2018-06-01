<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CpgSessions
 *
 * @ORM\Table(name="CPG_sessions")
 * @ORM\Entity
 */
class CpgSessions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="time", type="integer", nullable=true)
     */
    private $time;

    /**
     * @var integer
     *
     * @ORM\Column(name="remember", type="integer", nullable=true)
     */
    private $remember = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=40)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sessionId;



    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return CpgSessions
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
     * Set time
     *
     * @param integer $time
     *
     * @return CpgSessions
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return integer
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set remember
     *
     * @param integer $remember
     *
     * @return CpgSessions
     */
    public function setRemember($remember)
    {
        $this->remember = $remember;

        return $this;
    }

    /**
     * Get remember
     *
     * @return integer
     */
    public function getRemember()
    {
        return $this->remember;
    }

    /**
     * Get sessionId
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
}
