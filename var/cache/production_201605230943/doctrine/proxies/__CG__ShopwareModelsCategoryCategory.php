<?php

namespace Shopware\Proxies\__CG__\Shopware\Models\Category;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Category extends \Shopware\Models\Category\Category implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'id', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'parentId', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'streamId', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'stream', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'parent', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'name', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'position', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'metaTitle', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'metaKeywords', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'metaDescription', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'cmsHeadline', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'cmsText', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'active', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'template', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'productBoxLayout', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'blog', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'path', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'showFilterGroups', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'external', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'hideFilter', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'hideTop', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'noViewSelect', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'children', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'articles', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'allArticles', 'customerGroups', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'changed', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'added', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'mediaId', 'attribute', 'emotions', 'media');
        }

        return array('__isInitialized__', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'id', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'parentId', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'streamId', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'stream', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'parent', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'name', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'position', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'metaTitle', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'metaKeywords', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'metaDescription', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'cmsHeadline', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'cmsText', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'active', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'template', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'productBoxLayout', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'blog', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'path', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'showFilterGroups', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'external', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'hideFilter', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'hideTop', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'noViewSelect', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'children', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'articles', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'allArticles', 'customerGroups', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'changed', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'added', '' . "\0" . 'Shopware\\Models\\Category\\Category' . "\0" . 'mediaId', 'attribute', 'emotions', 'media');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Category $proxy) {
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
    public function setPrimaryIdentifier($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrimaryIdentifier', array($id));

        return parent::setPrimaryIdentifier($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getParentId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParentId', array());

        return parent::getParentId();
    }

    /**
     * {@inheritDoc}
     */
    public function setParent(\Shopware\Models\Category\Category $parent = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', array($parent));

        return parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', array());

        return parent::getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function getLevel($level = 0)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLevel', array($level));

        return parent::getLevel($level);
    }

    /**
     * {@inheritDoc}
     */
    public function setChildren($children)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChildren', array($children));

        return parent::setChildren($children);
    }

    /**
     * {@inheritDoc}
     */
    public function getChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChildren', array());

        return parent::getChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function isLeaf()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isLeaf', array());

        return parent::isLeaf();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
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
    public function setChanged($changed = 'now')
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChanged', array($changed));

        return parent::setChanged($changed);
    }

    /**
     * {@inheritDoc}
     */
    public function getChanged()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanged', array());

        return parent::getChanged();
    }

    /**
     * {@inheritDoc}
     */
    public function getAdded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdded', array());

        return parent::getAdded();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetaKeywords($metaKeywords)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaKeywords', array($metaKeywords));

        return parent::setMetaKeywords($metaKeywords);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaKeywords()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaKeywords', array());

        return parent::getMetaKeywords();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetaDescription($metaDescription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaDescription', array($metaDescription));

        return parent::setMetaDescription($metaDescription);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaDescription', array());

        return parent::getMetaDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setCmsHeadline($cmsHeadline)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCmsHeadline', array($cmsHeadline));

        return parent::setCmsHeadline($cmsHeadline);
    }

    /**
     * {@inheritDoc}
     */
    public function getCmsHeadline()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCmsHeadline', array());

        return parent::getCmsHeadline();
    }

    /**
     * {@inheritDoc}
     */
    public function setCmsText($cmsText)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCmsText', array($cmsText));

        return parent::setCmsText($cmsText);
    }

    /**
     * {@inheritDoc}
     */
    public function getCmsText()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCmsText', array());

        return parent::getCmsText();
    }

    /**
     * {@inheritDoc}
     */
    public function setTemplate($template)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTemplate', array($template));

        return parent::setTemplate($template);
    }

    /**
     * {@inheritDoc}
     */
    public function getTemplate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTemplate', array());

        return parent::getTemplate();
    }

    /**
     * {@inheritDoc}
     */
    public function setNoViewSelect($noViewSelect)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNoViewSelect', array($noViewSelect));

        return parent::setNoViewSelect($noViewSelect);
    }

    /**
     * {@inheritDoc}
     */
    public function getNoViewSelect()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNoViewSelect', array());

        return parent::getNoViewSelect();
    }

    /**
     * {@inheritDoc}
     */
    public function setActive($active)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', array($active));

        return parent::setActive($active);
    }

    /**
     * {@inheritDoc}
     */
    public function getActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActive', array());

        return parent::getActive();
    }

    /**
     * {@inheritDoc}
     */
    public function getBlog()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlog', array());

        return parent::getBlog();
    }

    /**
     * {@inheritDoc}
     */
    public function setBlog($blog)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBlog', array($blog));

        return parent::setBlog($blog);
    }

    /**
     * {@inheritDoc}
     */
    public function setShowFilterGroups($showFilterGroups)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShowFilterGroups', array($showFilterGroups));

        return parent::setShowFilterGroups($showFilterGroups);
    }

    /**
     * {@inheritDoc}
     */
    public function getShowFilterGroups()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShowFilterGroups', array());

        return parent::getShowFilterGroups();
    }

    /**
     * {@inheritDoc}
     */
    public function setExternal($external)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExternal', array($external));

        return parent::setExternal($external);
    }

    /**
     * {@inheritDoc}
     */
    public function getExternal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExternal', array());

        return parent::getExternal();
    }

    /**
     * {@inheritDoc}
     */
    public function setHideFilter($hideFilter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHideFilter', array($hideFilter));

        return parent::setHideFilter($hideFilter);
    }

    /**
     * {@inheritDoc}
     */
    public function getHideFilter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHideFilter', array());

        return parent::getHideFilter();
    }

    /**
     * {@inheritDoc}
     */
    public function setHideTop($hideTop)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHideTop', array($hideTop));

        return parent::setHideTop($hideTop);
    }

    /**
     * {@inheritDoc}
     */
    public function getHideTop()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHideTop', array());

        return parent::getHideTop();
    }

    /**
     * {@inheritDoc}
     */
    public function getArticles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArticles', array());

        return parent::getArticles();
    }

    /**
     * {@inheritDoc}
     */
    public function getAllArticles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAllArticles', array());

        return parent::getAllArticles();
    }

    /**
     * {@inheritDoc}
     */
    public function setArticles($articles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArticles', array($articles));

        return parent::setArticles($articles);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttribute()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttribute', array());

        return parent::getAttribute();
    }

    /**
     * {@inheritDoc}
     */
    public function setAttribute($attribute)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttribute', array($attribute));

        return parent::setAttribute($attribute);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomerGroups()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomerGroups', array());

        return parent::getCustomerGroups();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomerGroups($customerGroups)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomerGroups', array($customerGroups));

        return parent::setCustomerGroups($customerGroups);
    }

    /**
     * {@inheritDoc}
     */
    public function getMedia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMedia', array());

        return parent::getMedia();
    }

    /**
     * {@inheritDoc}
     */
    public function setMedia($media)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMedia', array($media));

        return parent::setMedia($media);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmotions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmotions', array());

        return parent::getEmotions();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmotions($emotions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmotions', array($emotions));

        return parent::setEmotions($emotions);
    }

    /**
     * {@inheritDoc}
     */
    public function internalSetPath($path)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'internalSetPath', array($path));

        return parent::internalSetPath($path);
    }

    /**
     * {@inheritDoc}
     */
    public function getPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPath', array());

        return parent::getPath();
    }

    /**
     * {@inheritDoc}
     */
    public function isChildOf(\Shopware\Models\Category\Category $parent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isChildOf', array($parent));

        return parent::isChildOf($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductBoxLayout()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductBoxLayout', array());

        return parent::getProductBoxLayout();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductBoxLayout($productBoxLayout)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductBoxLayout', array($productBoxLayout));

        return parent::setProductBoxLayout($productBoxLayout);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaTitle', array());

        return parent::getMetaTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetaTitle($metaTitle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaTitle', array($metaTitle));

        return parent::setMetaTitle($metaTitle);
    }

    /**
     * {@inheritDoc}
     */
    public function getStream()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStream', array());

        return parent::getStream();
    }

    /**
     * {@inheritDoc}
     */
    public function setStream(\Shopware\Models\ProductStream\ProductStream $stream = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStream', array($stream));

        return parent::setStream($stream);
    }

    /**
     * {@inheritDoc}
     */
    public function getMediaId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMediaId', array());

        return parent::getMediaId();
    }

    /**
     * {@inheritDoc}
     */
    public function fromArray(array $array = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'fromArray', array($array));

        return parent::fromArray($array);
    }

    /**
     * {@inheritDoc}
     */
    public function setOneToOne($data, $model, $property, $reference = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOneToOne', array($data, $model, $property, $reference));

        return parent::setOneToOne($data, $model, $property, $reference);
    }

    /**
     * {@inheritDoc}
     */
    public function setOneToMany($data, $model, $property, $reference = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOneToMany', array($data, $model, $property, $reference));

        return parent::setOneToMany($data, $model, $property, $reference);
    }

    /**
     * {@inheritDoc}
     */
    public function setManyToOne($data, $model, $property)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setManyToOne', array($data, $model, $property));

        return parent::setManyToOne($data, $model, $property);
    }

}
