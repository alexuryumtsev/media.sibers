<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg148Users
 *
 * @ORM\Table(name="cpg148_users")
 * @ORM\Entity
 */
class Cpg148Users
{
    /**
     * @var string
     *
     * @ORM\Column(name="user_active", type="string", nullable=false)
     */
    private $userActive = 'NO';

    /**
     * @var string
     *
     * @ORM\Column(name="user_password", type="string", length=40, nullable=false)
     */
    private $userPassword = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_lastvisit", type="datetime", nullable=false)
     */
    private $userLastvisit = '1000-01-01 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_regdate", type="datetime", nullable=false)
     */
    private $userRegdate = '1000-01-01 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="user_group_list", type="string", length=255, nullable=false)
     */
    private $userGroupList = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=255, nullable=false)
     */
    private $userEmail = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_profile1", type="string", length=255, nullable=false)
     */
    private $userProfile1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_profile2", type="string", length=255, nullable=false)
     */
    private $userProfile2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_profile3", type="string", length=255, nullable=false)
     */
    private $userProfile3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_profile4", type="string", length=255, nullable=false)
     */
    private $userProfile4 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_profile5", type="string", length=255, nullable=false)
     */
    private $userProfile5 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_profile6", type="text", length=65535, nullable=false)
     */
    private $userProfile6;

    /**
     * @var string
     *
     * @ORM\Column(name="user_actkey", type="string", length=32, nullable=false)
     */
    private $userActkey = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_language", type="string", length=40, nullable=false)
     */
    private $userLanguage = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_email_valid", type="string", nullable=false)
     */
    private $userEmailValid = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=25)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userName;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_group", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userGroup;



    /**
     * Set userActive
     *
     * @param string $userActive
     *
     * @return Cpg148Users
     */
    public function setUserActive($userActive)
    {
        $this->userActive = $userActive;

        return $this;
    }

    /**
     * Get userActive
     *
     * @return string
     */
    public function getUserActive()
    {
        return $this->userActive;
    }

    /**
     * Set userPassword
     *
     * @param string $userPassword
     *
     * @return Cpg148Users
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    /**
     * Get userPassword
     *
     * @return string
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Set userLastvisit
     *
     * @param \DateTime $userLastvisit
     *
     * @return Cpg148Users
     */
    public function setUserLastvisit($userLastvisit)
    {
        $this->userLastvisit = $userLastvisit;

        return $this;
    }

    /**
     * Get userLastvisit
     *
     * @return \DateTime
     */
    public function getUserLastvisit()
    {
        return $this->userLastvisit;
    }

    /**
     * Set userRegdate
     *
     * @param \DateTime $userRegdate
     *
     * @return Cpg148Users
     */
    public function setUserRegdate($userRegdate)
    {
        $this->userRegdate = $userRegdate;

        return $this;
    }

    /**
     * Get userRegdate
     *
     * @return \DateTime
     */
    public function getUserRegdate()
    {
        return $this->userRegdate;
    }

    /**
     * Set userGroupList
     *
     * @param string $userGroupList
     *
     * @return Cpg148Users
     */
    public function setUserGroupList($userGroupList)
    {
        $this->userGroupList = $userGroupList;

        return $this;
    }

    /**
     * Get userGroupList
     *
     * @return string
     */
    public function getUserGroupList()
    {
        return $this->userGroupList;
    }

    /**
     * Set userEmail
     *
     * @param string $userEmail
     *
     * @return Cpg148Users
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set userProfile1
     *
     * @param string $userProfile1
     *
     * @return Cpg148Users
     */
    public function setUserProfile1($userProfile1)
    {
        $this->userProfile1 = $userProfile1;

        return $this;
    }

    /**
     * Get userProfile1
     *
     * @return string
     */
    public function getUserProfile1()
    {
        return $this->userProfile1;
    }

    /**
     * Set userProfile2
     *
     * @param string $userProfile2
     *
     * @return Cpg148Users
     */
    public function setUserProfile2($userProfile2)
    {
        $this->userProfile2 = $userProfile2;

        return $this;
    }

    /**
     * Get userProfile2
     *
     * @return string
     */
    public function getUserProfile2()
    {
        return $this->userProfile2;
    }

    /**
     * Set userProfile3
     *
     * @param string $userProfile3
     *
     * @return Cpg148Users
     */
    public function setUserProfile3($userProfile3)
    {
        $this->userProfile3 = $userProfile3;

        return $this;
    }

    /**
     * Get userProfile3
     *
     * @return string
     */
    public function getUserProfile3()
    {
        return $this->userProfile3;
    }

    /**
     * Set userProfile4
     *
     * @param string $userProfile4
     *
     * @return Cpg148Users
     */
    public function setUserProfile4($userProfile4)
    {
        $this->userProfile4 = $userProfile4;

        return $this;
    }

    /**
     * Get userProfile4
     *
     * @return string
     */
    public function getUserProfile4()
    {
        return $this->userProfile4;
    }

    /**
     * Set userProfile5
     *
     * @param string $userProfile5
     *
     * @return Cpg148Users
     */
    public function setUserProfile5($userProfile5)
    {
        $this->userProfile5 = $userProfile5;

        return $this;
    }

    /**
     * Get userProfile5
     *
     * @return string
     */
    public function getUserProfile5()
    {
        return $this->userProfile5;
    }

    /**
     * Set userProfile6
     *
     * @param string $userProfile6
     *
     * @return Cpg148Users
     */
    public function setUserProfile6($userProfile6)
    {
        $this->userProfile6 = $userProfile6;

        return $this;
    }

    /**
     * Get userProfile6
     *
     * @return string
     */
    public function getUserProfile6()
    {
        return $this->userProfile6;
    }

    /**
     * Set userActkey
     *
     * @param string $userActkey
     *
     * @return Cpg148Users
     */
    public function setUserActkey($userActkey)
    {
        $this->userActkey = $userActkey;

        return $this;
    }

    /**
     * Get userActkey
     *
     * @return string
     */
    public function getUserActkey()
    {
        return $this->userActkey;
    }

    /**
     * Set userLanguage
     *
     * @param string $userLanguage
     *
     * @return Cpg148Users
     */
    public function setUserLanguage($userLanguage)
    {
        $this->userLanguage = $userLanguage;

        return $this;
    }

    /**
     * Get userLanguage
     *
     * @return string
     */
    public function getUserLanguage()
    {
        return $this->userLanguage;
    }

    /**
     * Set userEmailValid
     *
     * @param string $userEmailValid
     *
     * @return Cpg148Users
     */
    public function setUserEmailValid($userEmailValid)
    {
        $this->userEmailValid = $userEmailValid;

        return $this;
    }

    /**
     * Get userEmailValid
     *
     * @return string
     */
    public function getUserEmailValid()
    {
        return $this->userEmailValid;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Cpg148Users
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
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

    /**
     * Set userName
     *
     * @param string $userName
     *
     * @return Cpg148Users
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set userGroup
     *
     * @param integer $userGroup
     *
     * @return Cpg148Users
     */
    public function setUserGroup($userGroup)
    {
        $this->userGroup = $userGroup;

        return $this;
    }

    /**
     * Get userGroup
     *
     * @return integer
     */
    public function getUserGroup()
    {
        return $this->userGroup;
    }
}
