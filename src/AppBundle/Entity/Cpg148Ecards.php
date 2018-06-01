<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg148Ecards
 *
 * @ORM\Table(name="cpg148_ecards")
 * @ORM\Entity
 */
class Cpg148Ecards
{
    /**
     * @var string
     *
     * @ORM\Column(name="sender_name", type="string", length=50, nullable=false)
     */
    private $senderName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sender_email", type="text", length=65535, nullable=false)
     */
    private $senderEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="recipient_name", type="string", length=50, nullable=false)
     */
    private $recipientName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="recipient_email", type="text", length=65535, nullable=false)
     */
    private $recipientEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="text", length=65535, nullable=false)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="text", length=255, nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="sender_ip", type="text", length=255, nullable=false)
     */
    private $senderIp;

    /**
     * @var integer
     *
     * @ORM\Column(name="eid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eid;



    /**
     * Set senderName
     *
     * @param string $senderName
     *
     * @return Cpg148Ecards
     */
    public function setSenderName($senderName)
    {
        $this->senderName = $senderName;

        return $this;
    }

    /**
     * Get senderName
     *
     * @return string
     */
    public function getSenderName()
    {
        return $this->senderName;
    }

    /**
     * Set senderEmail
     *
     * @param string $senderEmail
     *
     * @return Cpg148Ecards
     */
    public function setSenderEmail($senderEmail)
    {
        $this->senderEmail = $senderEmail;

        return $this;
    }

    /**
     * Get senderEmail
     *
     * @return string
     */
    public function getSenderEmail()
    {
        return $this->senderEmail;
    }

    /**
     * Set recipientName
     *
     * @param string $recipientName
     *
     * @return Cpg148Ecards
     */
    public function setRecipientName($recipientName)
    {
        $this->recipientName = $recipientName;

        return $this;
    }

    /**
     * Get recipientName
     *
     * @return string
     */
    public function getRecipientName()
    {
        return $this->recipientName;
    }

    /**
     * Set recipientEmail
     *
     * @param string $recipientEmail
     *
     * @return Cpg148Ecards
     */
    public function setRecipientEmail($recipientEmail)
    {
        $this->recipientEmail = $recipientEmail;

        return $this;
    }

    /**
     * Get recipientEmail
     *
     * @return string
     */
    public function getRecipientEmail()
    {
        return $this->recipientEmail;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return Cpg148Ecards
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Cpg148Ecards
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set senderIp
     *
     * @param string $senderIp
     *
     * @return Cpg148Ecards
     */
    public function setSenderIp($senderIp)
    {
        $this->senderIp = $senderIp;

        return $this;
    }

    /**
     * Get senderIp
     *
     * @return string
     */
    public function getSenderIp()
    {
        return $this->senderIp;
    }

    /**
     * Get eid
     *
     * @return integer
     */
    public function getEid()
    {
        return $this->eid;
    }
}
