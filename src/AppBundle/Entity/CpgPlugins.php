<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CpgPlugins
 *
 * @ORM\Table(name="CPG_plugins")
 * @ORM\Entity
 */
class CpgPlugins
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
     * @ORM\Column(name="name", type="string", length=64)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=128)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $path;



    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return CpgPlugins
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
     * @return CpgPlugins
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
     * Set name
     *
     * @param string $name
     *
     * @return CpgPlugins
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

    /**
     * Set path
     *
     * @param string $path
     *
     * @return CpgPlugins
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
}
