<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg148Dict
 *
 * @ORM\Table(name="cpg148_dict")
 * @ORM\Entity
 */
class Cpg148Dict
{
    /**
     * @var string
     *
     * @ORM\Column(name="keyword", type="string", length=60)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $keyword;

    /**
     * @var integer
     *
     * @ORM\Column(name="keyId", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $keyid;



    /**
     * Set keyword
     *
     * @param string $keyword
     *
     * @return Cpg148Dict
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
     * Set keyid
     *
     * @param integer $keyid
     *
     * @return Cpg148Dict
     */
    public function setKeyid($keyid)
    {
        $this->keyid = $keyid;

        return $this;
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
