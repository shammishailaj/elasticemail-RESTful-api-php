<?php
/**
 * DomainPayload
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
 * DomainPayload Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DomainPayload implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DomainPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'domain' => 'string',
        'tracking_type' => 'string',
        'set_as_default' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'domain' => 'string',
        'tracking_type' => null,
        'set_as_default' => 'boolean'
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
        'domain' => 'Domain',
        'tracking_type' => 'TrackingType',
        'set_as_default' => 'SetAsDefault'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'domain' => 'setDomain',
        'tracking_type' => 'setTrackingType',
        'set_as_default' => 'setSetAsDefault'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'domain' => 'getDomain',
        'tracking_type' => 'getTrackingType',
        'set_as_default' => 'getSetAsDefault'
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

    const TRACKING_TYPE_NONE = 'None';
    const TRACKING_TYPE_DELETE = 'Delete';
    const TRACKING_TYPE_HTTP = 'Http';
    const TRACKING_TYPE_EXTERNAL_HTTPS = 'ExternalHttps';
    const TRACKING_TYPE_INTERNAL_CERT_HTTPS = 'InternalCertHttps';
    const TRACKING_TYPE_LETS_ENCRYPT_CERT = 'LetsEncryptCert';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTrackingTypeAllowableValues()
    {
        return [
            self::TRACKING_TYPE_NONE,
            self::TRACKING_TYPE_DELETE,
            self::TRACKING_TYPE_HTTP,
            self::TRACKING_TYPE_EXTERNAL_HTTPS,
            self::TRACKING_TYPE_INTERNAL_CERT_HTTPS,
            self::TRACKING_TYPE_LETS_ENCRYPT_CERT,
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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['tracking_type'] = isset($data['tracking_type']) ? $data['tracking_type'] : null;
        $this->container['set_as_default'] = isset($data['set_as_default']) ? $data['set_as_default'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
        if ($this->container['tracking_type'] === null) {
            $invalidProperties[] = "'tracking_type' can't be null";
        }
        $allowedValues = $this->getTrackingTypeAllowableValues();
        if (!in_array($this->container['tracking_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tracking_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['set_as_default'] === null) {
            $invalidProperties[] = "'set_as_default' can't be null";
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

        if ($this->container['domain'] === null) {
            return false;
        }
        if ($this->container['tracking_type'] === null) {
            return false;
        }
        $allowedValues = $this->getTrackingTypeAllowableValues();
        if (!in_array($this->container['tracking_type'], $allowedValues)) {
            return false;
        }
        if ($this->container['set_as_default'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain Name of selected domain.
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets tracking_type
     *
     * @return string
     */
    public function getTrackingType()
    {
        return $this->container['tracking_type'];
    }

    /**
     * Sets tracking_type
     *
     * @param string $tracking_type tracking_type
     *
     * @return $this
     */
    public function setTrackingType($tracking_type)
    {
        $allowedValues = $this->getTrackingTypeAllowableValues();
        if (!in_array($tracking_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tracking_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tracking_type'] = $tracking_type;

        return $this;
    }

    /**
     * Gets set_as_default
     *
     * @return bool
     */
    public function getSetAsDefault()
    {
        return $this->container['set_as_default'];
    }

    /**
     * Sets set_as_default
     *
     * @param bool $set_as_default set_as_default
     *
     * @return $this
     */
    public function setSetAsDefault($set_as_default)
    {
        $this->container['set_as_default'] = $set_as_default;

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


