<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg148Languages
 *
 * @ORM\Table(name="cpg148_languages")
 * @ORM\Entity
 */
class Cpg148Languages
{
    /**
     * @var string
     *
     * @ORM\Column(name="english_name", type="string", length=70, nullable=true)
     */
    private $englishName;

    /**
     * @var string
     *
     * @ORM\Column(name="native_name", type="string", length=70, nullable=true)
     */
    private $nativeName;

    /**
     * @var string
     *
     * @ORM\Column(name="custom_name", type="string", length=70, nullable=true)
     */
    private $customName;

    /**
     * @var string
     *
     * @ORM\Column(name="flag", type="string", length=15, nullable=true)
     */
    private $flag;

    /**
     * @var string
     *
     * @ORM\Column(name="abbr", type="string", length=15, nullable=false)
     */
    private $abbr = '';

    /**
     * @var string
     *
     * @ORM\Column(name="available", type="string", nullable=false)
     */
    private $available = 'NO';

    /**
     * @var string
     *
     * @ORM\Column(name="enabled", type="string", nullable=false)
     */
    private $enabled = 'NO';

    /**
     * @var string
     *
     * @ORM\Column(name="complete", type="string", nullable=false)
     */
    private $complete = 'NO';

    /**
     * @var string
     *
     * @ORM\Column(name="lang_id", type="string", length=40)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $langId;



    /**
     * Set englishName
     *
     * @param string $englishName
     *
     * @return Cpg148Languages
     */
    public function setEnglishName($englishName)
    {
        $this->englishName = $englishName;

        return $this;
    }

    /**
     * Get englishName
     *
     * @return string
     */
    public function getEnglishName()
    {
        return $this->englishName;
    }

    /**
     * Set nativeName
     *
     * @param string $nativeName
     *
     * @return Cpg148Languages
     */
    public function setNativeName($nativeName)
    {
        $this->nativeName = $nativeName;

        return $this;
    }

    /**
     * Get nativeName
     *
     * @return string
     */
    public function getNativeName()
    {
        return $this->nativeName;
    }

    /**
     * Set customName
     *
     * @param string $customName
     *
     * @return Cpg148Languages
     */
    public function setCustomName($customName)
    {
        $this->customName = $customName;

        return $this;
    }

    /**
     * Get customName
     *
     * @return string
     */
    public function getCustomName()
    {
        return $this->customName;
    }

    /**
     * Set flag
     *
     * @param string $flag
     *
     * @return Cpg148Languages
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * Get flag
     *
     * @return string
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Set abbr
     *
     * @param string $abbr
     *
     * @return Cpg148Languages
     */
    public function setAbbr($abbr)
    {
        $this->abbr = $abbr;

        return $this;
    }

    /**
     * Get abbr
     *
     * @return string
     */
    public function getAbbr()
    {
        return $this->abbr;
    }

    /**
     * Set available
     *
     * @param string $available
     *
     * @return Cpg148Languages
     */
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * Get available
     *
     * @return string
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Set enabled
     *
     * @param string $enabled
     *
     * @return Cpg148Languages
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return string
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set complete
     *
     * @param string $complete
     *
     * @return Cpg148Languages
     */
    public function setComplete($complete)
    {
        $this->complete = $complete;

        return $this;
    }

    /**
     * Get complete
     *
     * @return string
     */
    public function getComplete()
    {
        return $this->complete;
    }

    /**
     * Get langId
     *
     * @return string
     */
    public function getLangId()
    {
        return $this->langId;
    }
}
