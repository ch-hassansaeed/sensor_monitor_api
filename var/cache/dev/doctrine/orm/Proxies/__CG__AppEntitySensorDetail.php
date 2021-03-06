<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class SensorDetail extends \App\Entity\SensorDetail implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\SensorDetail' . "\0" . 'id', '' . "\0" . 'App\\Entity\\SensorDetail' . "\0" . 'uuid', '' . "\0" . 'App\\Entity\\SensorDetail' . "\0" . 'mac_address', '' . "\0" . 'App\\Entity\\SensorDetail' . "\0" . 'is_active', '' . "\0" . 'App\\Entity\\SensorDetail' . "\0" . 'row_insertion_datetime', '' . "\0" . 'App\\Entity\\SensorDetail' . "\0" . 'sensorAlerts', '' . "\0" . 'App\\Entity\\SensorDetail' . "\0" . 'sensorMeasurements'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\SensorDetail' . "\0" . 'id', '' . "\0" . 'App\\Entity\\SensorDetail' . "\0" . 'uuid', '' . "\0" . 'App\\Entity\\SensorDetail' . "\0" . 'mac_address', '' . "\0" . 'App\\Entity\\SensorDetail' . "\0" . 'is_active', '' . "\0" . 'App\\Entity\\SensorDetail' . "\0" . 'row_insertion_datetime', '' . "\0" . 'App\\Entity\\SensorDetail' . "\0" . 'sensorAlerts', '' . "\0" . 'App\\Entity\\SensorDetail' . "\0" . 'sensorMeasurements'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (SensorDetail $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getUuid(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUuid', []);

        return parent::getUuid();
    }

    /**
     * {@inheritDoc}
     */
    public function setUuid(string $uuid): \App\Entity\SensorDetail
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUuid', [$uuid]);

        return parent::setUuid($uuid);
    }

    /**
     * {@inheritDoc}
     */
    public function getMacAddress(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMacAddress', []);

        return parent::getMacAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setMacAddress(string $mac_address): \App\Entity\SensorDetail
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMacAddress', [$mac_address]);

        return parent::setMacAddress($mac_address);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsActive(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsActive', []);

        return parent::getIsActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsActive(bool $is_active): \App\Entity\SensorDetail
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsActive', [$is_active]);

        return parent::setIsActive($is_active);
    }

    /**
     * {@inheritDoc}
     */
    public function getRowInsertionDatetime(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRowInsertionDatetime', []);

        return parent::getRowInsertionDatetime();
    }

    /**
     * {@inheritDoc}
     */
    public function setRowInsertionDatetime(\DateTimeInterface $row_insertion_datetime): \App\Entity\SensorDetail
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRowInsertionDatetime', [$row_insertion_datetime]);

        return parent::setRowInsertionDatetime($row_insertion_datetime);
    }

    /**
     * {@inheritDoc}
     */
    public function getSensorAlerts(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSensorAlerts', []);

        return parent::getSensorAlerts();
    }

    /**
     * {@inheritDoc}
     */
    public function addSensorAlert(\App\Entity\SensorAlerts $sensorAlert): \App\Entity\SensorDetail
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSensorAlert', [$sensorAlert]);

        return parent::addSensorAlert($sensorAlert);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSensorAlert(\App\Entity\SensorAlerts $sensorAlert): \App\Entity\SensorDetail
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSensorAlert', [$sensorAlert]);

        return parent::removeSensorAlert($sensorAlert);
    }

    /**
     * {@inheritDoc}
     */
    public function getSensorMeasurements(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSensorMeasurements', []);

        return parent::getSensorMeasurements();
    }

    /**
     * {@inheritDoc}
     */
    public function addSensorMeasurement(\App\Entity\SensorMeasurement $sensorMeasurement): \App\Entity\SensorDetail
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSensorMeasurement', [$sensorMeasurement]);

        return parent::addSensorMeasurement($sensorMeasurement);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSensorMeasurement(\App\Entity\SensorMeasurement $sensorMeasurement): \App\Entity\SensorDetail
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSensorMeasurement', [$sensorMeasurement]);

        return parent::removeSensorMeasurement($sensorMeasurement);
    }

}
