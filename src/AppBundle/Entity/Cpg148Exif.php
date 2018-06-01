<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg148Exif
 *
 * @ORM\Table(name="cpg148_exif")
 * @ORM\Entity
 */
class Cpg148Exif
{
    /**
     * @var string
     *
     * @ORM\Column(name="exifData", type="text", length=65535, nullable=false)
     */
    private $exifdata;

    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pid;



    /**
     * Set exifdata
     *
     * @param string $exifdata
     *
     * @return Cpg148Exif
     */
    public function setExifdata($exifdata)
    {
        $this->exifdata = $exifdata;

        return $this;
    }

    /**
     * Get exifdata
     *
     * @return string
     */
    public function getExifdata()
    {
        return $this->exifdata;
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
}
