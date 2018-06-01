<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg148Comments
 *
 * @ORM\Table(name="cpg148_comments")
 * @ORM\Entity
 */
class Cpg148Comments
{
    /**
     * @var string
     *
     * @ORM\Column(name="msg_author", type="string", length=25, nullable=false)
     */
    private $msgAuthor = '';

    /**
     * @var string
     *
     * @ORM\Column(name="msg_body", type="text", length=65535, nullable=false)
     */
    private $msgBody;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="msg_date", type="datetime", nullable=false)
     */
    private $msgDate = '1000-01-01 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="msg_raw_ip", type="text", length=255, nullable=true)
     */
    private $msgRawIp;

    /**
     * @var string
     *
     * @ORM\Column(name="msg_hdr_ip", type="text", length=255, nullable=true)
     */
    private $msgHdrIp;

    /**
     * @var string
     *
     * @ORM\Column(name="author_md5_id", type="string", length=32, nullable=false)
     */
    private $authorMd5Id = '';

    /**
     * @var string
     *
     * @ORM\Column(name="approval", type="string", nullable=false)
     */
    private $approval = 'YES';

    /**
     * @var string
     *
     * @ORM\Column(name="spam", type="string", nullable=false)
     */
    private $spam = 'NO';

    /**
     * @var integer
     *
     * @ORM\Column(name="msg_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $msgId;

    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pid;

    /**
     * @var integer
     *
     * @ORM\Column(name="author_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $authorId;



    /**
     * Set msgAuthor
     *
     * @param string $msgAuthor
     *
     * @return Cpg148Comments
     */
    public function setMsgAuthor($msgAuthor)
    {
        $this->msgAuthor = $msgAuthor;

        return $this;
    }

    /**
     * Get msgAuthor
     *
     * @return string
     */
    public function getMsgAuthor()
    {
        return $this->msgAuthor;
    }

    /**
     * Set msgBody
     *
     * @param string $msgBody
     *
     * @return Cpg148Comments
     */
    public function setMsgBody($msgBody)
    {
        $this->msgBody = $msgBody;

        return $this;
    }

    /**
     * Get msgBody
     *
     * @return string
     */
    public function getMsgBody()
    {
        return $this->msgBody;
    }

    /**
     * Set msgDate
     *
     * @param \DateTime $msgDate
     *
     * @return Cpg148Comments
     */
    public function setMsgDate($msgDate)
    {
        $this->msgDate = $msgDate;

        return $this;
    }

    /**
     * Get msgDate
     *
     * @return \DateTime
     */
    public function getMsgDate()
    {
        return $this->msgDate;
    }

    /**
     * Set msgRawIp
     *
     * @param string $msgRawIp
     *
     * @return Cpg148Comments
     */
    public function setMsgRawIp($msgRawIp)
    {
        $this->msgRawIp = $msgRawIp;

        return $this;
    }

    /**
     * Get msgRawIp
     *
     * @return string
     */
    public function getMsgRawIp()
    {
        return $this->msgRawIp;
    }

    /**
     * Set msgHdrIp
     *
     * @param string $msgHdrIp
     *
     * @return Cpg148Comments
     */
    public function setMsgHdrIp($msgHdrIp)
    {
        $this->msgHdrIp = $msgHdrIp;

        return $this;
    }

    /**
     * Get msgHdrIp
     *
     * @return string
     */
    public function getMsgHdrIp()
    {
        return $this->msgHdrIp;
    }

    /**
     * Set authorMd5Id
     *
     * @param string $authorMd5Id
     *
     * @return Cpg148Comments
     */
    public function setAuthorMd5Id($authorMd5Id)
    {
        $this->authorMd5Id = $authorMd5Id;

        return $this;
    }

    /**
     * Get authorMd5Id
     *
     * @return string
     */
    public function getAuthorMd5Id()
    {
        return $this->authorMd5Id;
    }

    /**
     * Set approval
     *
     * @param string $approval
     *
     * @return Cpg148Comments
     */
    public function setApproval($approval)
    {
        $this->approval = $approval;

        return $this;
    }

    /**
     * Get approval
     *
     * @return string
     */
    public function getApproval()
    {
        return $this->approval;
    }

    /**
     * Set spam
     *
     * @param string $spam
     *
     * @return Cpg148Comments
     */
    public function setSpam($spam)
    {
        $this->spam = $spam;

        return $this;
    }

    /**
     * Get spam
     *
     * @return string
     */
    public function getSpam()
    {
        return $this->spam;
    }

    /**
     * Set msgId
     *
     * @param integer $msgId
     *
     * @return Cpg148Comments
     */
    public function setMsgId($msgId)
    {
        $this->msgId = $msgId;

        return $this;
    }

    /**
     * Get msgId
     *
     * @return integer
     */
    public function getMsgId()
    {
        return $this->msgId;
    }

    /**
     * Set pid
     *
     * @param integer $pid
     *
     * @return Cpg148Comments
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Get pid
     *
     * @return integer
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set authorId
     *
     * @param integer $authorId
     *
     * @return Cpg148Comments
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;

        return $this;
    }

    /**
     * Get authorId
     *
     * @return integer
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }
}
