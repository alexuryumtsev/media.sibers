<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CpgFavpics
 *
 * @ORM\Table(name="CPG_favpics")
 * @ORM\Entity
 */
class CpgFavpics
{
    /**
     * @var string
     *
     * @ORM\Column(name="user_favpics", type="text", length=65535, nullable=false)
     */
    private $userFavpics;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;



    /**
     * Set userFavpics
     *
     * @param string $userFavpics
     *
     * @return CpgFavpics
     */
    public function setUserFavpics($userFavpics)
    {
        $this->userFavpics = $userFavpics;

        return $this;
    }

    /**
     * Get userFavpics
     *
     * @return string
     */
    public function getUserFavpics()
    {
        return $this->userFavpics;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
