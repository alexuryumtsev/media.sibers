<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CopAlbums extends \AppBundle\Entity\CopAlbums implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'title', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'description', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'visibility', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'uploads', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'comments', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'votes', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'pos', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'category', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'owner', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'thumb', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'keyword', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'albPassword', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'albPasswordHint', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'moderatorGroup', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'albHits', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'aid');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'title', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'description', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'visibility', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'uploads', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'comments', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'votes', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'pos', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'category', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'owner', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'thumb', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'keyword', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'albPassword', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'albPasswordHint', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'moderatorGroup', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'albHits', '' . "\0" . 'AppBundle\\Entity\\CopAlbums' . "\0" . 'aid');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CopAlbums $proxy) {
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
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisibility($visibility)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisibility', array($visibility));

        return parent::setVisibility($visibility);
    }

    /**
     * {@inheritDoc}
     */
    public function getVisibility()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVisibility', array());

        return parent::getVisibility();
    }

    /**
     * {@inheritDoc}
     */
    public function setUploads($uploads)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUploads', array($uploads));

        return parent::setUploads($uploads);
    }

    /**
     * {@inheritDoc}
     */
    public function getUploads()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUploads', array());

        return parent::getUploads();
    }

    /**
     * {@inheritDoc}
     */
    public function setComments($comments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComments', array($comments));

        return parent::setComments($comments);
    }

    /**
     * {@inheritDoc}
     */
    public function getComments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComments', array());

        return parent::getComments();
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
    public function setPos($pos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPos', array($pos));

        return parent::setPos($pos);
    }

    /**
     * {@inheritDoc}
     */
    public function getPos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPos', array());

        return parent::getPos();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory($category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', array($category));

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', array());

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwner($owner)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', array($owner));

        return parent::setOwner($owner);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwner', array());

        return parent::getOwner();
    }

    /**
     * {@inheritDoc}
     */
    public function setThumb($thumb)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setThumb', array($thumb));

        return parent::setThumb($thumb);
    }

    /**
     * {@inheritDoc}
     */
    public function getThumb()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThumb', array());

        return parent::getThumb();
    }

    /**
     * {@inheritDoc}
     */
    public function setKeyword($keyword)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKeyword', array($keyword));

        return parent::setKeyword($keyword);
    }

    /**
     * {@inheritDoc}
     */
    public function getKeyword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKeyword', array());

        return parent::getKeyword();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlbPassword($albPassword)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlbPassword', array($albPassword));

        return parent::setAlbPassword($albPassword);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlbPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlbPassword', array());

        return parent::getAlbPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlbPasswordHint($albPasswordHint)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlbPasswordHint', array($albPasswordHint));

        return parent::setAlbPasswordHint($albPasswordHint);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlbPasswordHint()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlbPasswordHint', array());

        return parent::getAlbPasswordHint();
    }

    /**
     * {@inheritDoc}
     */
    public function setModeratorGroup($moderatorGroup)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModeratorGroup', array($moderatorGroup));

        return parent::setModeratorGroup($moderatorGroup);
    }

    /**
     * {@inheritDoc}
     */
    public function getModeratorGroup()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModeratorGroup', array());

        return parent::getModeratorGroup();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlbHits($albHits)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlbHits', array($albHits));

        return parent::setAlbHits($albHits);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlbHits()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlbHits', array());

        return parent::getAlbHits();
    }

    /**
     * {@inheritDoc}
     */
    public function getAid()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getAid();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAid', array());

        return parent::getAid();
    }

}