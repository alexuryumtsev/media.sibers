<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CpgTempData
 *
 * @ORM\Table(name="CPG_temp_data")
 * @ORM\Entity
 */
class CpgTempData
{
    /**
     * @var string
     *
     * @ORM\Column(name="encoded_string", type="blob", length=65535, nullable=false)
     */
    private $encodedString;

    /**
     * @var integer
     *
     * @ORM\Column(name="timestamp", type="integer", nullable=false)
     */
    private $timestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="unique_ID", type="string", length=8)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uniqueId;



    /**
     * Set encodedString
     *
     * @param string $encodedString
     *
     * @return CpgTempData
     */
    public function setEncodedString($encodedString)
    {
        $this->encodedString = $encodedString;

        return $this;
    }

    /**
     * Get encodedString
     *
     * @return string
     */
    public function getEncodedString()
    {
        return $this->encodedString;
    }

    /**
     * Set timestamp
     *
     * @param integer $timestamp
     *
     * @return CpgTempData
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return integer
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Get uniqueId
     *
     * @return string
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }
}
