<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg148Usergroups
 *
 * @ORM\Table(name="cpg148_usergroups")
 * @ORM\Entity
 */
class Cpg148Usergroups
{
    /**
     * @var string
     *
     * @ORM\Column(name="group_name", type="string", length=255, nullable=false)
     */
    private $groupName = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="group_quota", type="integer", nullable=false)
     */
    private $groupQuota = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="has_admin_access", type="boolean", nullable=false)
     */
    private $hasAdminAccess = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="can_rate_pictures", type="boolean", nullable=false)
     */
    private $canRatePictures = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="can_send_ecards", type="boolean", nullable=false)
     */
    private $canSendEcards = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="can_post_comments", type="boolean", nullable=false)
     */
    private $canPostComments = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="can_upload_pictures", type="boolean", nullable=false)
     */
    private $canUploadPictures = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="can_create_albums", type="boolean", nullable=false)
     */
    private $canCreateAlbums = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="pub_upl_need_approval", type="boolean", nullable=false)
     */
    private $pubUplNeedApproval = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="priv_upl_need_approval", type="boolean", nullable=false)
     */
    private $privUplNeedApproval = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="access_level", type="boolean", nullable=false)
     */
    private $accessLevel = '3';

    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupId;



    /**
     * Set groupName
     *
     * @param string $groupName
     *
     * @return Cpg148Usergroups
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * Get groupName
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Set groupQuota
     *
     * @param integer $groupQuota
     *
     * @return Cpg148Usergroups
     */
    public function setGroupQuota($groupQuota)
    {
        $this->groupQuota = $groupQuota;

        return $this;
    }

    /**
     * Get groupQuota
     *
     * @return integer
     */
    public function getGroupQuota()
    {
        return $this->groupQuota;
    }

    /**
     * Set hasAdminAccess
     *
     * @param boolean $hasAdminAccess
     *
     * @return Cpg148Usergroups
     */
    public function setHasAdminAccess($hasAdminAccess)
    {
        $this->hasAdminAccess = $hasAdminAccess;

        return $this;
    }

    /**
     * Get hasAdminAccess
     *
     * @return boolean
     */
    public function getHasAdminAccess()
    {
        return $this->hasAdminAccess;
    }

    /**
     * Set canRatePictures
     *
     * @param boolean $canRatePictures
     *
     * @return Cpg148Usergroups
     */
    public function setCanRatePictures($canRatePictures)
    {
        $this->canRatePictures = $canRatePictures;

        return $this;
    }

    /**
     * Get canRatePictures
     *
     * @return boolean
     */
    public function getCanRatePictures()
    {
        return $this->canRatePictures;
    }

    /**
     * Set canSendEcards
     *
     * @param boolean $canSendEcards
     *
     * @return Cpg148Usergroups
     */
    public function setCanSendEcards($canSendEcards)
    {
        $this->canSendEcards = $canSendEcards;

        return $this;
    }

    /**
     * Get canSendEcards
     *
     * @return boolean
     */
    public function getCanSendEcards()
    {
        return $this->canSendEcards;
    }

    /**
     * Set canPostComments
     *
     * @param boolean $canPostComments
     *
     * @return Cpg148Usergroups
     */
    public function setCanPostComments($canPostComments)
    {
        $this->canPostComments = $canPostComments;

        return $this;
    }

    /**
     * Get canPostComments
     *
     * @return boolean
     */
    public function getCanPostComments()
    {
        return $this->canPostComments;
    }

    /**
     * Set canUploadPictures
     *
     * @param boolean $canUploadPictures
     *
     * @return Cpg148Usergroups
     */
    public function setCanUploadPictures($canUploadPictures)
    {
        $this->canUploadPictures = $canUploadPictures;

        return $this;
    }

    /**
     * Get canUploadPictures
     *
     * @return boolean
     */
    public function getCanUploadPictures()
    {
        return $this->canUploadPictures;
    }

    /**
     * Set canCreateAlbums
     *
     * @param boolean $canCreateAlbums
     *
     * @return Cpg148Usergroups
     */
    public function setCanCreateAlbums($canCreateAlbums)
    {
        $this->canCreateAlbums = $canCreateAlbums;

        return $this;
    }

    /**
     * Get canCreateAlbums
     *
     * @return boolean
     */
    public function getCanCreateAlbums()
    {
        return $this->canCreateAlbums;
    }

    /**
     * Set pubUplNeedApproval
     *
     * @param boolean $pubUplNeedApproval
     *
     * @return Cpg148Usergroups
     */
    public function setPubUplNeedApproval($pubUplNeedApproval)
    {
        $this->pubUplNeedApproval = $pubUplNeedApproval;

        return $this;
    }

    /**
     * Get pubUplNeedApproval
     *
     * @return boolean
     */
    public function getPubUplNeedApproval()
    {
        return $this->pubUplNeedApproval;
    }

    /**
     * Set privUplNeedApproval
     *
     * @param boolean $privUplNeedApproval
     *
     * @return Cpg148Usergroups
     */
    public function setPrivUplNeedApproval($privUplNeedApproval)
    {
        $this->privUplNeedApproval = $privUplNeedApproval;

        return $this;
    }

    /**
     * Get privUplNeedApproval
     *
     * @return boolean
     */
    public function getPrivUplNeedApproval()
    {
        return $this->privUplNeedApproval;
    }

    /**
     * Set accessLevel
     *
     * @param boolean $accessLevel
     *
     * @return Cpg148Usergroups
     */
    public function setAccessLevel($accessLevel)
    {
        $this->accessLevel = $accessLevel;

        return $this;
    }

    /**
     * Get accessLevel
     *
     * @return boolean
     */
    public function getAccessLevel()
    {
        return $this->accessLevel;
    }

    /**
     * Get groupId
     *
     * @return integer
     */
    public function getGroupId()
    {
        return $this->groupId;
    }
}
