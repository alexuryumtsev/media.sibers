<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CpgHitStats
 *
 * @ORM\Table(name="CPG_hit_stats")
 * @ORM\Entity
 */
class CpgHitStats
{
    /**
     * @var string
     *
     * @ORM\Column(name="pid", type="string", length=100, nullable=false)
     */
    private $pid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=20, nullable=false)
     */
    private $ip = '';

    /**
     * @var string
     *
     * @ORM\Column(name="search_phrase", type="string", length=255, nullable=false)
     */
    private $searchPhrase = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="sdate", type="bigint", nullable=false)
     */
    private $sdate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="referer", type="text", length=65535, nullable=false)
     */
    private $referer;

    /**
     * @var string
     *
     * @ORM\Column(name="browser", type="string", length=255, nullable=false)
     */
    private $browser = '';

    /**
     * @var string
     *
     * @ORM\Column(name="os", type="string", length=50, nullable=false)
     */
    private $os = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="sid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sid;



    /**
     * Set pid
     *
     * @param string $pid
     *
     * @return CpgHitStats
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Get pid
     *
     * @return string
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return CpgHitStats
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set searchPhrase
     *
     * @param string $searchPhrase
     *
     * @return CpgHitStats
     */
    public function setSearchPhrase($searchPhrase)
    {
        $this->searchPhrase = $searchPhrase;

        return $this;
    }

    /**
     * Get searchPhrase
     *
     * @return string
     */
    public function getSearchPhrase()
    {
        return $this->searchPhrase;
    }

    /**
     * Set sdate
     *
     * @param integer $sdate
     *
     * @return CpgHitStats
     */
    public function setSdate($sdate)
    {
        $this->sdate = $sdate;

        return $this;
    }

    /**
     * Get sdate
     *
     * @return integer
     */
    public function getSdate()
    {
        return $this->sdate;
    }

    /**
     * Set referer
     *
     * @param string $referer
     *
     * @return CpgHitStats
     */
    public function setReferer($referer)
    {
        $this->referer = $referer;

        return $this;
    }

    /**
     * Get referer
     *
     * @return string
     */
    public function getReferer()
    {
        return $this->referer;
    }

    /**
     * Set browser
     *
     * @param string $browser
     *
     * @return CpgHitStats
     */
    public function setBrowser($browser)
    {
        $this->browser = $browser;

        return $this;
    }

    /**
     * Get browser
     *
     * @return string
     */
    public function getBrowser()
    {
        return $this->browser;
    }

    /**
     * Set os
     *
     * @param string $os
     *
     * @return CpgHitStats
     */
    public function setOs($os)
    {
        $this->os = $os;

        return $this;
    }

    /**
     * Get os
     *
     * @return string
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * Get sid
     *
     * @return integer
     */
    public function getSid()
    {
        return $this->sid;
    }
}
