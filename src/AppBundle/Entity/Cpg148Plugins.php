<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg148Plugins
 *
 * @ORM\Table(name="cpg148_plugins")
 * @ORM\Entity
 */
class Cpg148Plugins
{
    /**
     * @var integer
     *
     * @ORM\Column(name="priority", type="integer", nullable=false)
     */
    private $priority = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="plugin_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluginId;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=128)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $name;



    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return Cpg148Plugins
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set pluginId
     *
     * @param integer $pluginId
     *
     * @return Cpg148Plugins
     */
    public function setPluginId($pluginId)
    {
        $this->pluginId = $pluginId;

        return $this;
    }

    /**
     * Get pluginId
     *
     * @return integer
     */
    public function getPluginId()
    {
        return $this->pluginId;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return Cpg148Plugins
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Cpg148Plugins
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
