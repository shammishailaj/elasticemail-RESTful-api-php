<?php
/**
 * TriggerOptions
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
 * TriggerOptions Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TriggerOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TriggerOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'date_to_send_on' => '\DateTime',
        'send_after_x_minutes' => 'double',
        'send_every_x_minutes' => 'double',
        'send_x_times' => 'int',
        'triggered_by' => '\Swagger\Client\Model\TriggerData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'date_to_send_on' => 'date-time',
        'send_after_x_minutes' => 'double',
        'send_every_x_minutes' => 'double',
        'send_x_times' => 'int32',
        'triggered_by' => null
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
        'type' => 'Type',
        'date_to_send_on' => 'DateToSendOn',
        'send_after_x_minutes' => 'SendAfterXMinutes',
        'send_every_x_minutes' => 'SendEveryXMinutes',
        'send_x_times' => 'SendXTimes',
        'triggered_by' => 'TriggeredBy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'date_to_send_on' => 'setDateToSendOn',
        'send_after_x_minutes' => 'setSendAfterXMinutes',
        'send_every_x_minutes' => 'setSendEveryXMinutes',
        'send_x_times' => 'setSendXTimes',
        'triggered_by' => 'setTriggeredBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'date_to_send_on' => 'getDateToSendOn',
        'send_after_x_minutes' => 'getSendAfterXMinutes',
        'send_every_x_minutes' => 'getSendEveryXMinutes',
        'send_x_times' => 'getSendXTimes',
        'triggered_by' => 'getTriggeredBy'
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

    const TYPE_SEND_NOW = 'SendNow';
    const TYPE_FUTURE_SCHEDULED = 'FutureScheduled';
    const TYPE_ON_ADD = 'OnAdd';
    const TYPE_ON_OPEN = 'OnOpen';
    const TYPE_ON_CLICK = 'OnClick';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SEND_NOW,
            self::TYPE_FUTURE_SCHEDULED,
            self::TYPE_ON_ADD,
            self::TYPE_ON_OPEN,
            self::TYPE_ON_CLICK,
        ];
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['date_to_send_on'] = isset($data['date_to_send_on']) ? $data['date_to_send_on'] : null;
        $this->container['send_after_x_minutes'] = isset($data['send_after_x_minutes']) ? $data['send_after_x_minutes'] : null;
        $this->container['send_every_x_minutes'] = isset($data['send_every_x_minutes']) ? $data['send_every_x_minutes'] : null;
        $this->container['send_x_times'] = isset($data['send_x_times']) ? $data['send_x_times'] : null;
        $this->container['triggered_by'] = isset($data['triggered_by']) ? $data['triggered_by'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['send_after_x_minutes'] === null) {
            $invalidProperties[] = "'send_after_x_minutes' can't be null";
        }
        if ($this->container['send_every_x_minutes'] === null) {
            $invalidProperties[] = "'send_every_x_minutes' can't be null";
        }
        if ($this->container['send_x_times'] === null) {
            $invalidProperties[] = "'send_x_times' can't be null";
        }
        if ($this->container['triggered_by'] === null) {
            $invalidProperties[] = "'triggered_by' can't be null";
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

        if ($this->container['type'] === null) {
            return false;
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        if ($this->container['send_after_x_minutes'] === null) {
            return false;
        }
        if ($this->container['send_every_x_minutes'] === null) {
            return false;
        }
        if ($this->container['send_x_times'] === null) {
            return false;
        }
        if ($this->container['triggered_by'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets date_to_send_on
     *
     * @return \DateTime
     */
    public function getDateToSendOn()
    {
        return $this->container['date_to_send_on'];
    }

    /**
     * Sets date_to_send_on
     *
     * @param \DateTime $date_to_send_on date_to_send_on
     *
     * @return $this
     */
    public function setDateToSendOn($date_to_send_on)
    {
        $this->container['date_to_send_on'] = $date_to_send_on;

        return $this;
    }

    /**
     * Gets send_after_x_minutes
     *
     * @return double
     */
    public function getSendAfterXMinutes()
    {
        return $this->container['send_after_x_minutes'];
    }

    /**
     * Sets send_after_x_minutes
     *
     * @param double $send_after_x_minutes send_after_x_minutes
     *
     * @return $this
     */
    public function setSendAfterXMinutes($send_after_x_minutes)
    {
        $this->container['send_after_x_minutes'] = $send_after_x_minutes;

        return $this;
    }

    /**
     * Gets send_every_x_minutes
     *
     * @return double
     */
    public function getSendEveryXMinutes()
    {
        return $this->container['send_every_x_minutes'];
    }

    /**
     * Sets send_every_x_minutes
     *
     * @param double $send_every_x_minutes send_every_x_minutes
     *
     * @return $this
     */
    public function setSendEveryXMinutes($send_every_x_minutes)
    {
        $this->container['send_every_x_minutes'] = $send_every_x_minutes;

        return $this;
    }

    /**
     * Gets send_x_times
     *
     * @return int
     */
    public function getSendXTimes()
    {
        return $this->container['send_x_times'];
    }

    /**
     * Sets send_x_times
     *
     * @param int $send_x_times send_x_times
     *
     * @return $this
     */
    public function setSendXTimes($send_x_times)
    {
        $this->container['send_x_times'] = $send_x_times;

        return $this;
    }

    /**
     * Gets triggered_by
     *
     * @return \Swagger\Client\Model\TriggerData
     */
    public function getTriggeredBy()
    {
        return $this->container['triggered_by'];
    }

    /**
     * Sets triggered_by
     *
     * @param \Swagger\Client\Model\TriggerData $triggered_by triggered_by
     *
     * @return $this
     */
    public function setTriggeredBy($triggered_by)
    {
        $this->container['triggered_by'] = $triggered_by;

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


