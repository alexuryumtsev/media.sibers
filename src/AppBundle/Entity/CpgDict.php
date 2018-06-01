<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CpgDict
 *
 * @ORM\Table(name="CPG_dict")
 * @ORM\Entity
 */
class CpgDict
{
    /**
     * @var string
     *
     * @ORM\Column(name="keyword", type="string", length=60, nullable=false)
     */
    private $keyword = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="keyId", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $keyid;



    /**
     * Set keyword
     *
     * @param string $keyword
     *
     * @return CpgDict
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Get keyword
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Get keyid
     *
     * @return integer
     */
    public function getKeyid()
    {
        return $this->keyid;
    }
}
