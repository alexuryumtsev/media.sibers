<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CpgVotes
 *
 * @ORM\Table(name="CPG_votes")
 * @ORM\Entity
 */
class CpgVotes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="vote_time", type="integer", nullable=false)
     */
    private $voteTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pic_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $picId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_md5_id", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userMd5Id;



    /**
     * Set voteTime
     *
     * @param integer $voteTime
     *
     * @return CpgVotes
     */
    public function setVoteTime($voteTime)
    {
        $this->voteTime = $voteTime;

        return $this;
    }

    /**
     * Get voteTime
     *
     * @return integer
     */
    public function getVoteTime()
    {
        return $this->voteTime;
    }

    /**
     * Set picId
     *
     * @param integer $picId
     *
     * @return CpgVotes
     */
    public function setPicId($picId)
    {
        $this->picId = $picId;

        return $this;
    }

    /**
     * Get picId
     *
     * @return integer
     */
    public function getPicId()
    {
        return $this->picId;
    }

    /**
     * Set userMd5Id
     *
     * @param string $userMd5Id
     *
     * @return CpgVotes
     */
    public function setUserMd5Id($userMd5Id)
    {
        $this->userMd5Id = $userMd5Id;

        return $this;
    }

    /**
     * Get userMd5Id
     *
     * @return string
     */
    public function getUserMd5Id()
    {
        return $this->userMd5Id;
    }
}
