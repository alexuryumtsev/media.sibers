<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CpgExif
 *
 * @ORM\Table(name="CPG_exif")
 * @ORM\Entity
 */
class CpgExif
{
    /**
     * @var string
     *
     * @ORM\Column(name="exifData", type="text", length=65535, nullable=false)
     */
    private $exifdata;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $filename;



    /**
     * Set exifdata
     *
     * @param string $exifdata
     *
     * @return CpgExif
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
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }
}
