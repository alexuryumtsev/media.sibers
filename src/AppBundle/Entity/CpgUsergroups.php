<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CpgUsergroups
 *
 * @ORM\Table(name="CPG_usergroups")
 * @ORM\Entity
 */
class CpgUsergroups
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
     * @ORM\Column(name="upload_form_config", type="boolean", nullable=false)
     */
    private $uploadFormConfig = '3';

    /**
     * @var boolean
     *
     * @ORM\Column(name="custom_user_upload", type="boolean", nullable=false)
     */
    private $customUserUpload = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="num_file_upload", type="boolean", nullable=false)
     */
    private $numFileUpload = '5';

    /**
     * @var boolean
     *
     * @ORM\Column(name="num_URI_upload", type="boolean", nullable=false)
     */
    private $numUriUpload = '3';

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
     * @return CpgUsergroups
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
     * @return CpgUsergroups
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
     * @return CpgUsergroups
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
     * @return CpgUsergroups
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
     * @return CpgUsergroups
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
     * @return CpgUsergroups
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
     * @return CpgUsergroups
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
     * @return CpgUsergroups
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
     * @return CpgUsergroups
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
     * @return CpgUsergroups
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
     * Set uploadFormConfig
     *
     * @param boolean $uploadFormConfig
     *
     * @return CpgUsergroups
     */
    public function setUploadFormConfig($uploadFormConfig)
    {
        $this->uploadFormConfig = $uploadFormConfig;

        return $this;
    }

    /**
     * Get uploadFormConfig
     *
     * @return boolean
     */
    public function getUploadFormConfig()
    {
        return $this->uploadFormConfig;
    }

    /**
     * Set customUserUpload
     *
     * @param boolean $customUserUpload
     *
     * @return CpgUsergroups
     */
    public function setCustomUserUpload($customUserUpload)
    {
        $this->customUserUpload = $customUserUpload;

        return $this;
    }

    /**
     * Get customUserUpload
     *
     * @return boolean
     */
    public function getCustomUserUpload()
    {
        return $this->customUserUpload;
    }

    /**
     * Set numFileUpload
     *
     * @param boolean $numFileUpload
     *
     * @return CpgUsergroups
     */
    public function setNumFileUpload($numFileUpload)
    {
        $this->numFileUpload = $numFileUpload;

        return $this;
    }

    /**
     * Get numFileUpload
     *
     * @return boolean
     */
    public function getNumFileUpload()
    {
        return $this->numFileUpload;
    }

    /**
     * Set numUriUpload
     *
     * @param boolean $numUriUpload
     *
     * @return CpgUsergroups
     */
    public function setNumUriUpload($numUriUpload)
    {
        $this->numUriUpload = $numUriUpload;

        return $this;
    }

    /**
     * Get numUriUpload
     *
     * @return boolean
     */
    public function getNumUriUpload()
    {
        return $this->numUriUpload;
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
