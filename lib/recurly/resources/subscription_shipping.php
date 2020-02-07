<?php
/**
 * This file is automatically created by Recurly's OpenAPI generation process
 * and thus any edits you make by hand will be lost. If you wish to make a
 * change to this file, please create a Github issue explaining the changes you
 * need and we will usher them to the appropriate places.
 */
namespace Recurly\Resources;

use Recurly\RecurlyResource;

// phpcs:disable
class SubscriptionShipping extends RecurlyResource
{
    private $_address;
    private $_amount;
    private $_method;
    private $_object;

    protected static $array_hints = array(
    );

    
    /**
    * Getter method for the address attribute.
    *
    * @return \Recurly\Resources\ShippingAddress 
    */
    public function getAddress(): \Recurly\Resources\ShippingAddress
    {
        return $this->_address;
    }

    /**
    * Setter method for the address attribute.
    *
    * @param \Recurly\Resources\ShippingAddress $address
    *
    * @return void
    */
    public function setAddress(\Recurly\Resources\ShippingAddress $value): void
    {
        $this->_address = $value;
    }

    /**
    * Getter method for the amount attribute.
    *
    * @return float Subscription's shipping cost
    */
    public function getAmount(): float
    {
        return $this->_amount;
    }

    /**
    * Setter method for the amount attribute.
    *
    * @param float $amount
    *
    * @return void
    */
    public function setAmount(float $value): void
    {
        $this->_amount = $value;
    }

    /**
    * Getter method for the method attribute.
    *
    * @return \Recurly\Resources\ShippingMethodMini 
    */
    public function getMethod(): \Recurly\Resources\ShippingMethodMini
    {
        return $this->_method;
    }

    /**
    * Setter method for the method attribute.
    *
    * @param \Recurly\Resources\ShippingMethodMini $method
    *
    * @return void
    */
    public function setMethod(\Recurly\Resources\ShippingMethodMini $value): void
    {
        $this->_method = $value;
    }

    /**
    * Getter method for the object attribute.
    *
    * @return string Object type
    */
    public function getObject(): string
    {
        return $this->_object;
    }

    /**
    * Setter method for the object attribute.
    *
    * @param string $object
    *
    * @return void
    */
    public function setObject(string $value): void
    {
        $this->_object = $value;
    }
}