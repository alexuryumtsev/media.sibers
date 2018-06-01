<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg148Votes
 *
 * @ORM\Table(name="cpg148_votes")
 * @ORM\Entity
 */
class Cpg148Votes
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
     * @return Cpg148Votes
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
     * @return Cpg148Votes
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
     * @return Cpg148Votes
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
