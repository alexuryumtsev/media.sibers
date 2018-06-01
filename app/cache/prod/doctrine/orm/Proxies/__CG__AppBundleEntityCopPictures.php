<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CopPictures extends \AppBundle\Entity\CopPictures implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'aid', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'filepath', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'filename', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'filesize', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'totalFilesize', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'pwidth', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'pheight', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'hits', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'mtime', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'ctime', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'ownerId', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'picRating', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'votes', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'title', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'caption', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'keywords', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'approved', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'galleryicon', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'user1', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'user2', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'user3', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'user4', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'urlPrefix', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'picRawIp', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'picHdrIp', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'lasthitIp', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'position', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'guestToken', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'pid');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'aid', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'filepath', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'filename', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'filesize', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'totalFilesize', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'pwidth', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'pheight', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'hits', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'mtime', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'ctime', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'ownerId', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'picRating', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'votes', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'title', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'caption', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'keywords', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'approved', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'galleryicon', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'user1', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'user2', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'user3', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'user4', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'urlPrefix', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'picRawIp', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'picHdrIp', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'lasthitIp', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'position', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'guestToken', '' . "\0" . 'AppBundle\\Entity\\CopPictures' . "\0" . 'pid');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CopPictures $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setAid($aid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAid', array($aid));

        return parent::setAid($aid);
    }

    /**
     * {@inheritDoc}
     */
    public function getAid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAid', array());

        return parent::getAid();
    }

    /**
     * {@inheritDoc}
     */
    public function setFilepath($filepath)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFilepath', array($filepath));

        return parent::setFilepath($filepath);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilepath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFilepath', array());

        return parent::getFilepath();
    }

    /**
     * {@inheritDoc}
     */
    public function setFilename($filename)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFilename', array($filename));

        return parent::setFilename($filename);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilename()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFilename', array());

        return parent::getFilename();
    }

    /**
     * {@inheritDoc}
     */
    public function setFilesize($filesize)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFilesize', array($filesize));

        return parent::setFilesize($filesize);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilesize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFilesize', array());

        return parent::getFilesize();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotalFilesize($totalFilesize)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotalFilesize', array($totalFilesize));

        return parent::setTotalFilesize($totalFilesize);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalFilesize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalFilesize', array());

        return parent::getTotalFilesize();
    }

    /**
     * {@inheritDoc}
     */
    public function setPwidth($pwidth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPwidth', array($pwidth));

        return parent::setPwidth($pwidth);
    }

    /**
     * {@inheritDoc}
     */
    public function getPwidth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPwidth', array());

        return parent::getPwidth();
    }

    /**
     * {@inheritDoc}
     */
    public function setPheight($pheight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPheight', array($pheight));

        return parent::setPheight($pheight);
    }

    /**
     * {@inheritDoc}
     */
    public function getPheight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPheight', array());

        return parent::getPheight();
    }

    /**
     * {@inheritDoc}
     */
    public function setHits($hits)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHits', array($hits));

        return parent::setHits($hits);
    }

    /**
     * {@inheritDoc}
     */
    public function getHits()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHits', array());

        return parent::getHits();
    }

    /**
     * {@inheritDoc}
     */
    public function setMtime($mtime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMtime', array($mtime));

        return parent::setMtime($mtime);
    }

    /**
     * {@inheritDoc}
     */
    public function getMtime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMtime', array());

        return parent::getMtime();
    }

    /**
     * {@inheritDoc}
     */
    public function setCtime($ctime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCtime', array($ctime));

        return parent::setCtime($ctime);
    }

    /**
     * {@inheritDoc}
     */
    public function getCtime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCtime', array());

        return parent::getCtime();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwnerId($ownerId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwnerId', array($ownerId));

        return parent::setOwnerId($ownerId);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwnerId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwnerId', array());

        return parent::getOwnerId();
    }

    /**
     * {@inheritDoc}
     */
    public function setPicRating($picRating)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPicRating', array($picRating));

        return parent::setPicRating($picRating);
    }

    /**
     * {@inheritDoc}
     */
    public function getPicRating()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPicRating', array());

        return parent::getPicRating();
    }

    /**
     * {@inheritDoc}
     */
    public function setVotes($votes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVotes', array($votes));

        return parent::setVotes($votes);
    }

    /**
     * {@inheritDoc}
     */
    public function getVotes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVotes', array());

        return parent::getVotes();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', array($title));

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', array());

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setCaption($caption)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCaption', array($caption));

        return parent::setCaption($caption);
    }

    /**
     * {@inheritDoc}
     */
    public function getCaption()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCaption', array());

        return parent::getCaption();
    }

    /**
     * {@inheritDoc}
     */
    public function setKeywords($keywords)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKeywords', array($keywords));

        return parent::setKeywords($keywords);
    }

    /**
     * {@inheritDoc}
     */
    public function getKeywords()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKeywords', array());

        return parent::getKeywords();
    }

    /**
     * {@inheritDoc}
     */
    public function setApproved($approved)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApproved', array($approved));

        return parent::setApproved($approved);
    }

    /**
     * {@inheritDoc}
     */
    public function getApproved()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApproved', array());

        return parent::getApproved();
    }

    /**
     * {@inheritDoc}
     */
    public function setGalleryicon($galleryicon)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGalleryicon', array($galleryicon));

        return parent::setGalleryicon($galleryicon);
    }

    /**
     * {@inheritDoc}
     */
    public function getGalleryicon()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGalleryicon', array());

        return parent::getGalleryicon();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser1($user1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser1', array($user1));

        return parent::setUser1($user1);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser1', array());

        return parent::getUser1();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser2($user2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser2', array($user2));

        return parent::setUser2($user2);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser2', array());

        return parent::getUser2();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser3($user3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser3', array($user3));

        return parent::setUser3($user3);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser3', array());

        return parent::getUser3();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser4($user4)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser4', array($user4));

        return parent::setUser4($user4);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser4()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser4', array());

        return parent::getUser4();
    }

    /**
     * {@inheritDoc}
     */
    public function setUrlPrefix($urlPrefix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUrlPrefix', array($urlPrefix));

        return parent::setUrlPrefix($urlPrefix);
    }

    /**
     * {@inheritDoc}
     */
    public function getUrlPrefix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrlPrefix', array());

        return parent::getUrlPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function setPicRawIp($picRawIp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPicRawIp', array($picRawIp));

        return parent::setPicRawIp($picRawIp);
    }

    /**
     * {@inheritDoc}
     */
    public function getPicRawIp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPicRawIp', array());

        return parent::getPicRawIp();
    }

    /**
     * {@inheritDoc}
     */
    public function setPicHdrIp($picHdrIp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPicHdrIp', array($picHdrIp));

        return parent::setPicHdrIp($picHdrIp);
    }

    /**
     * {@inheritDoc}
     */
    public function getPicHdrIp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPicHdrIp', array());

        return parent::getPicHdrIp();
    }

    /**
     * {@inheritDoc}
     */
    public function setLasthitIp($lasthitIp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLasthitIp', array($lasthitIp));

        return parent::setLasthitIp($lasthitIp);
    }

    /**
     * {@inheritDoc}
     */
    public function getLasthitIp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLasthitIp', array());

        return parent::getLasthitIp();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition($position)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', array($position));

        return parent::setPosition($position);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', array());

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setGuestToken($guestToken)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGuestToken', array($guestToken));

        return parent::setGuestToken($guestToken);
    }

    /**
     * {@inheritDoc}
     */
    public function getGuestToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGuestToken', array());

        return parent::getGuestToken();
    }

    /**
     * {@inheritDoc}
     */
    public function getPid()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getPid();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPid', array());

        return parent::getPid();
    }

}
