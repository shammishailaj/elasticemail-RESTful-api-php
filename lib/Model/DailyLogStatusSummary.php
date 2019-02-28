<?php
/**
 * DailyLogStatusSummary
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * elasticemail_Restful_api
 *
 * Send your emails with ElasticEmail API
 *
 * OpenAPI spec version: 3.0.0
 * Contact: support@elasticemail.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * DailyLogStatusSummary Class Doc Comment
 *
 * @category Class
 * @description Daily summary of log status, based on specified date range.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DailyLogStatusSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DailyLogStatusSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date' => 'string',
        'email' => 'int',
        'sms' => 'int',
        'delivered' => 'int',
        'opened' => 'int',
        'clicked' => 'int',
        'unsubscribed' => 'int',
        'complaint' => 'int',
        'bounced' => 'int',
        'inbound' => 'int',
        'manual_cancel' => 'int',
        'not_delivered' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date' => 'string',
        'email' => 'int32',
        'sms' => 'int32',
        'delivered' => 'int32',
        'opened' => 'int32',
        'clicked' => 'int32',
        'unsubscribed' => 'int32',
        'complaint' => 'int32',
        'bounced' => 'int32',
        'inbound' => 'int32',
        'manual_cancel' => 'int32',
        'not_delivered' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'date' => 'Date',
        'email' => 'Email',
        'sms' => 'Sms',
        'delivered' => 'Delivered',
        'opened' => 'Opened',
        'clicked' => 'Clicked',
        'unsubscribed' => 'Unsubscribed',
        'complaint' => 'Complaint',
        'bounced' => 'Bounced',
        'inbound' => 'Inbound',
        'manual_cancel' => 'ManualCancel',
        'not_delivered' => 'NotDelivered'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'email' => 'setEmail',
        'sms' => 'setSms',
        'delivered' => 'setDelivered',
        'opened' => 'setOpened',
        'clicked' => 'setClicked',
        'unsubscribed' => 'setUnsubscribed',
        'complaint' => 'setComplaint',
        'bounced' => 'setBounced',
        'inbound' => 'setInbound',
        'manual_cancel' => 'setManualCancel',
        'not_delivered' => 'setNotDelivered'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'email' => 'getEmail',
        'sms' => 'getSms',
        'delivered' => 'getDelivered',
        'opened' => 'getOpened',
        'clicked' => 'getClicked',
        'unsubscribed' => 'getUnsubscribed',
        'complaint' => 'getComplaint',
        'bounced' => 'getBounced',
        'inbound' => 'getInbound',
        'manual_cancel' => 'getManualCancel',
        'not_delivered' => 'getNotDelivered'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['sms'] = isset($data['sms']) ? $data['sms'] : null;
        $this->container['delivered'] = isset($data['delivered']) ? $data['delivered'] : null;
        $this->container['opened'] = isset($data['opened']) ? $data['opened'] : null;
        $this->container['clicked'] = isset($data['clicked']) ? $data['clicked'] : null;
        $this->container['unsubscribed'] = isset($data['unsubscribed']) ? $data['unsubscribed'] : null;
        $this->container['complaint'] = isset($data['complaint']) ? $data['complaint'] : null;
        $this->container['bounced'] = isset($data['bounced']) ? $data['bounced'] : null;
        $this->container['inbound'] = isset($data['inbound']) ? $data['inbound'] : null;
        $this->container['manual_cancel'] = isset($data['manual_cancel']) ? $data['manual_cancel'] : null;
        $this->container['not_delivered'] = isset($data['not_delivered']) ? $data['not_delivered'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['sms'] === null) {
            $invalidProperties[] = "'sms' can't be null";
        }
        if ($this->container['delivered'] === null) {
            $invalidProperties[] = "'delivered' can't be null";
        }
        if ($this->container['opened'] === null) {
            $invalidProperties[] = "'opened' can't be null";
        }
        if ($this->container['clicked'] === null) {
            $invalidProperties[] = "'clicked' can't be null";
        }
        if ($this->container['unsubscribed'] === null) {
            $invalidProperties[] = "'unsubscribed' can't be null";
        }
        if ($this->container['complaint'] === null) {
            $invalidProperties[] = "'complaint' can't be null";
        }
        if ($this->container['bounced'] === null) {
            $invalidProperties[] = "'bounced' can't be null";
        }
        if ($this->container['inbound'] === null) {
            $invalidProperties[] = "'inbound' can't be null";
        }
        if ($this->container['manual_cancel'] === null) {
            $invalidProperties[] = "'manual_cancel' can't be null";
        }
        if ($this->container['not_delivered'] === null) {
            $invalidProperties[] = "'not_delivered' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['date'] === null) {
            return false;
        }
        if ($this->container['email'] === null) {
            return false;
        }
        if ($this->container['sms'] === null) {
            return false;
        }
        if ($this->container['delivered'] === null) {
            return false;
        }
        if ($this->container['opened'] === null) {
            return false;
        }
        if ($this->container['clicked'] === null) {
            return false;
        }
        if ($this->container['unsubscribed'] === null) {
            return false;
        }
        if ($this->container['complaint'] === null) {
            return false;
        }
        if ($this->container['bounced'] === null) {
            return false;
        }
        if ($this->container['inbound'] === null) {
            return false;
        }
        if ($this->container['manual_cancel'] === null) {
            return false;
        }
        if ($this->container['not_delivered'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date Date in YYYY-MM-DDThh:ii:ss format
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets email
     *
     * @return int
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param int $email Proper email address.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets sms
     *
     * @return int
     */
    public function getSms()
    {
        return $this->container['sms'];
    }

    /**
     * Sets sms
     *
     * @param int $sms Number of SMS
     *
     * @return $this
     */
    public function setSms($sms)
    {
        $this->container['sms'] = $sms;

        return $this;
    }

    /**
     * Gets delivered
     *
     * @return int
     */
    public function getDelivered()
    {
        return $this->container['delivered'];
    }

    /**
     * Sets delivered
     *
     * @param int $delivered Number of delivered messages
     *
     * @return $this
     */
    public function setDelivered($delivered)
    {
        $this->container['delivered'] = $delivered;

        return $this;
    }

    /**
     * Gets opened
     *
     * @return int
     */
    public function getOpened()
    {
        return $this->container['opened'];
    }

    /**
     * Sets opened
     *
     * @param int $opened Number of opened messages
     *
     * @return $this
     */
    public function setOpened($opened)
    {
        $this->container['opened'] = $opened;

        return $this;
    }

    /**
     * Gets clicked
     *
     * @return int
     */
    public function getClicked()
    {
        return $this->container['clicked'];
    }

    /**
     * Sets clicked
     *
     * @param int $clicked Number of clicked messages
     *
     * @return $this
     */
    public function setClicked($clicked)
    {
        $this->container['clicked'] = $clicked;

        return $this;
    }

    /**
     * Gets unsubscribed
     *
     * @return int
     */
    public function getUnsubscribed()
    {
        return $this->container['unsubscribed'];
    }

    /**
     * Sets unsubscribed
     *
     * @param int $unsubscribed Number of unsubscribed messages
     *
     * @return $this
     */
    public function setUnsubscribed($unsubscribed)
    {
        $this->container['unsubscribed'] = $unsubscribed;

        return $this;
    }

    /**
     * Gets complaint
     *
     * @return int
     */
    public function getComplaint()
    {
        return $this->container['complaint'];
    }

    /**
     * Sets complaint
     *
     * @param int $complaint Number of complaint messages
     *
     * @return $this
     */
    public function setComplaint($complaint)
    {
        $this->container['complaint'] = $complaint;

        return $this;
    }

    /**
     * Gets bounced
     *
     * @return int
     */
    public function getBounced()
    {
        return $this->container['bounced'];
    }

    /**
     * Sets bounced
     *
     * @param int $bounced Number of bounced messages
     *
     * @return $this
     */
    public function setBounced($bounced)
    {
        $this->container['bounced'] = $bounced;

        return $this;
    }

    /**
     * Gets inbound
     *
     * @return int
     */
    public function getInbound()
    {
        return $this->container['inbound'];
    }

    /**
     * Sets inbound
     *
     * @param int $inbound Number of inbound messages
     *
     * @return $this
     */
    public function setInbound($inbound)
    {
        $this->container['inbound'] = $inbound;

        return $this;
    }

    /**
     * Gets manual_cancel
     *
     * @return int
     */
    public function getManualCancel()
    {
        return $this->container['manual_cancel'];
    }

    /**
     * Sets manual_cancel
     *
     * @param int $manual_cancel Number of manually cancelled messages
     *
     * @return $this
     */
    public function setManualCancel($manual_cancel)
    {
        $this->container['manual_cancel'] = $manual_cancel;

        return $this;
    }

    /**
     * Gets not_delivered
     *
     * @return int
     */
    public function getNotDelivered()
    {
        return $this->container['not_delivered'];
    }

    /**
     * Sets not_delivered
     *
     * @param int $not_delivered Number of messages flagged with 'Not Delivered'
     *
     * @return $this
     */
    public function setNotDelivered($not_delivered)
    {
        $this->container['not_delivered'] = $not_delivered;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


