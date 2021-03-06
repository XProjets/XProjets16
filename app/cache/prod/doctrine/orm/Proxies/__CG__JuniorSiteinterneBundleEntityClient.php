<?php

namespace Proxies\__CG__\Junior\SiteinterneBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Client extends \Junior\SiteinterneBundle\Entity\Client implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'id', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'nom', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'particulierEntreprise', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'taille', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'nomContact', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'prenomContact', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'fonctionContact', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'civiliteContact', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'email', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'telephone', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'adresse1', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'adresse2', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'adresse3', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'ville', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'codePostal', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'pays');
        }

        return array('__isInitialized__', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'id', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'nom', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'particulierEntreprise', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'taille', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'nomContact', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'prenomContact', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'fonctionContact', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'civiliteContact', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'email', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'telephone', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'adresse1', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'adresse2', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'adresse3', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'ville', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'codePostal', '' . "\0" . 'Junior\\SiteinterneBundle\\Entity\\Client' . "\0" . 'pays');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Client $proxy) {
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
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaille($taille)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaille', array($taille));

        return parent::setTaille($taille);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaille', array());

        return parent::getTaille();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomContact($nomContact)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomContact', array($nomContact));

        return parent::setNomContact($nomContact);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomContact()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomContact', array());

        return parent::getNomContact();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone($telephone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone', array($telephone));

        return parent::setTelephone($telephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone', array());

        return parent::getTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse1($adresse1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse1', array($adresse1));

        return parent::setAdresse1($adresse1);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse1', array());

        return parent::getAdresse1();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse2($adresse2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse2', array($adresse2));

        return parent::setAdresse2($adresse2);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse2', array());

        return parent::getAdresse2();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse3($adresse3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse3', array($adresse3));

        return parent::setAdresse3($adresse3);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse3', array());

        return parent::getAdresse3();
    }

    /**
     * {@inheritDoc}
     */
    public function setParticulierEntreprise($particulierEntreprise)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParticulierEntreprise', array($particulierEntreprise));

        return parent::setParticulierEntreprise($particulierEntreprise);
    }

    /**
     * {@inheritDoc}
     */
    public function getParticulierEntreprise()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParticulierEntreprise', array());

        return parent::getParticulierEntreprise();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille($ville)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', array($ville));

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', array());

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodePostal($codePostal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodePostal', array($codePostal));

        return parent::setCodePostal($codePostal);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodePostal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodePostal', array());

        return parent::getCodePostal();
    }

    /**
     * {@inheritDoc}
     */
    public function setPays($pays)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPays', array($pays));

        return parent::setPays($pays);
    }

    /**
     * {@inheritDoc}
     */
    public function getPays()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPays', array());

        return parent::getPays();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenomContact($prenomContact)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenomContact', array($prenomContact));

        return parent::setPrenomContact($prenomContact);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenomContact()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenomContact', array());

        return parent::getPrenomContact();
    }

    /**
     * {@inheritDoc}
     */
    public function setFonctionContact($fonctionContact)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFonctionContact', array($fonctionContact));

        return parent::setFonctionContact($fonctionContact);
    }

    /**
     * {@inheritDoc}
     */
    public function getFonctionContact()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFonctionContact', array());

        return parent::getFonctionContact();
    }

    /**
     * {@inheritDoc}
     */
    public function setCiviliteContact($civiliteContact)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCiviliteContact', array($civiliteContact));

        return parent::setCiviliteContact($civiliteContact);
    }

    /**
     * {@inheritDoc}
     */
    public function getCiviliteContact()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCiviliteContact', array());

        return parent::getCiviliteContact();
    }

    /**
     * {@inheritDoc}
     */
    public function getCiviliteContactBienEcrit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCiviliteContactBienEcrit', array());

        return parent::getCiviliteContactBienEcrit();
    }

}
