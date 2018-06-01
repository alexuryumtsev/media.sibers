<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg148Filetypes
 *
 * @ORM\Table(name="cpg148_filetypes")
 * @ORM\Entity
 */
class Cpg148Filetypes
{
    /**
     * @var string
     *
     * @ORM\Column(name="mime", type="string", length=254, nullable=true)
     */
    private $mime;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=15, nullable=true)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="player", type="string", length=5, nullable=true)
     */
    private $player;

    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=7)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $extension;



    /**
     * Set mime
     *
     * @param string $mime
     *
     * @return Cpg148Filetypes
     */
    public function setMime($mime)
    {
        $this->mime = $mime;

        return $this;
    }

    /**
     * Get mime
     *
     * @return string
     */
    public function getMime()
    {
        return $this->mime;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Cpg148Filetypes
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set player
     *
     * @param string $player
     *
     * @return Cpg148Filetypes
     */
    public function setPlayer($player)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get player
     *
     * @return string
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Get extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }
}
