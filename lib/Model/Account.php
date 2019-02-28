<?php
/**
 * Account
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
 * Account Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Account implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'general_info' => '\Swagger\Client\Model\AccountCore',
        'profile' => '\Swagger\Client\Model\Profile',
        'overview' => '\Swagger\Client\Model\AccountOverview',
        'advanced_options' => '\Swagger\Client\Model\AdvancedOptions',
        'inbound_options' => '\Swagger\Client\Model\InboundOptions',
        'reputation' => '\Swagger\Client\Model\ReputationDetail',
        'usage' => '\Swagger\Client\Model\UsageData[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'general_info' => null,
        'profile' => null,
        'overview' => null,
        'advanced_options' => null,
        'inbound_options' => null,
        'reputation' => null,
        'usage' => null
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
        'general_info' => 'GeneralInfo',
        'profile' => 'Profile',
        'overview' => 'Overview',
        'advanced_options' => 'AdvancedOptions',
        'inbound_options' => 'InboundOptions',
        'reputation' => 'Reputation',
        'usage' => 'Usage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'general_info' => 'setGeneralInfo',
        'profile' => 'setProfile',
        'overview' => 'setOverview',
        'advanced_options' => 'setAdvancedOptions',
        'inbound_options' => 'setInboundOptions',
        'reputation' => 'setReputation',
        'usage' => 'setUsage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'general_info' => 'getGeneralInfo',
        'profile' => 'getProfile',
        'overview' => 'getOverview',
        'advanced_options' => 'getAdvancedOptions',
        'inbound_options' => 'getInboundOptions',
        'reputation' => 'getReputation',
        'usage' => 'getUsage'
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
        $this->container['general_info'] = isset($data['general_info']) ? $data['general_info'] : null;
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
        $this->container['overview'] = isset($data['overview']) ? $data['overview'] : null;
        $this->container['advanced_options'] = isset($data['advanced_options']) ? $data['advanced_options'] : null;
        $this->container['inbound_options'] = isset($data['inbound_options']) ? $data['inbound_options'] : null;
        $this->container['reputation'] = isset($data['reputation']) ? $data['reputation'] : null;
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['general_info'] === null) {
            $invalidProperties[] = "'general_info' can't be null";
        }
        if ($this->container['profile'] === null) {
            $invalidProperties[] = "'profile' can't be null";
        }
        if ($this->container['overview'] === null) {
            $invalidProperties[] = "'overview' can't be null";
        }
        if ($this->container['advanced_options'] === null) {
            $invalidProperties[] = "'advanced_options' can't be null";
        }
        if ($this->container['inbound_options'] === null) {
            $invalidProperties[] = "'inbound_options' can't be null";
        }
        if ($this->container['reputation'] === null) {
            $invalidProperties[] = "'reputation' can't be null";
        }
        if ($this->container['usage'] === null) {
            $invalidProperties[] = "'usage' can't be null";
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

        if ($this->container['general_info'] === null) {
            return false;
        }
        if ($this->container['profile'] === null) {
            return false;
        }
        if ($this->container['overview'] === null) {
            return false;
        }
        if ($this->container['advanced_options'] === null) {
            return false;
        }
        if ($this->container['inbound_options'] === null) {
            return false;
        }
        if ($this->container['reputation'] === null) {
            return false;
        }
        if ($this->container['usage'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets general_info
     *
     * @return \Swagger\Client\Model\AccountCore
     */
    public function getGeneralInfo()
    {
        return $this->container['general_info'];
    }

    /**
     * Sets general_info
     *
     * @param \Swagger\Client\Model\AccountCore $general_info general_info
     *
     * @return $this
     */
    public function setGeneralInfo($general_info)
    {
        $this->container['general_info'] = $general_info;

        return $this;
    }

    /**
     * Gets profile
     *
     * @return \Swagger\Client\Model\Profile
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     *
     * @param \Swagger\Client\Model\Profile $profile profile
     *
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;

        return $this;
    }

    /**
     * Gets overview
     *
     * @return \Swagger\Client\Model\AccountOverview
     */
    public function getOverview()
    {
        return $this->container['overview'];
    }

    /**
     * Sets overview
     *
     * @param \Swagger\Client\Model\AccountOverview $overview overview
     *
     * @return $this
     */
    public function setOverview($overview)
    {
        $this->container['overview'] = $overview;

        return $this;
    }

    /**
     * Gets advanced_options
     *
     * @return \Swagger\Client\Model\AdvancedOptions
     */
    public function getAdvancedOptions()
    {
        return $this->container['advanced_options'];
    }

    /**
     * Sets advanced_options
     *
     * @param \Swagger\Client\Model\AdvancedOptions $advanced_options advanced_options
     *
     * @return $this
     */
    public function setAdvancedOptions($advanced_options)
    {
        $this->container['advanced_options'] = $advanced_options;

        return $this;
    }

    /**
     * Gets inbound_options
     *
     * @return \Swagger\Client\Model\InboundOptions
     */
    public function getInboundOptions()
    {
        return $this->container['inbound_options'];
    }

    /**
     * Sets inbound_options
     *
     * @param \Swagger\Client\Model\InboundOptions $inbound_options inbound_options
     *
     * @return $this
     */
    public function setInboundOptions($inbound_options)
    {
        $this->container['inbound_options'] = $inbound_options;

        return $this;
    }

    /**
     * Gets reputation
     *
     * @return \Swagger\Client\Model\ReputationDetail
     */
    public function getReputation()
    {
        return $this->container['reputation'];
    }

    /**
     * Sets reputation
     *
     * @param \Swagger\Client\Model\ReputationDetail $reputation reputation
     *
     * @return $this
     */
    public function setReputation($reputation)
    {
        $this->container['reputation'] = $reputation;

        return $this;
    }

    /**
     * Gets usage
     *
     * @return \Swagger\Client\Model\UsageData[]
     */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
     * Sets usage
     *
     * @param \Swagger\Client\Model\UsageData[] $usage Shows usage of your account.
     *
     * @return $this
     */
    public function setUsage($usage)
    {
        $this->container['usage'] = $usage;

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


