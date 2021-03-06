<?php
/**
 * UtmTracking
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
 * UtmTracking Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UtmTracking implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UtmTracking';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'utm_source' => 'string',
        'utm_medium' => 'string',
        'utm_campaign' => 'string',
        'utm_content' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'utm_source' => 'string',
        'utm_medium' => 'string',
        'utm_campaign' => 'string',
        'utm_content' => 'string'
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
        'utm_source' => 'UtmSource',
        'utm_medium' => 'UtmMedium',
        'utm_campaign' => 'UtmCampaign',
        'utm_content' => 'UtmContent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'utm_source' => 'setUtmSource',
        'utm_medium' => 'setUtmMedium',
        'utm_campaign' => 'setUtmCampaign',
        'utm_content' => 'setUtmContent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'utm_source' => 'getUtmSource',
        'utm_medium' => 'getUtmMedium',
        'utm_campaign' => 'getUtmCampaign',
        'utm_content' => 'getUtmContent'
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
        $this->container['utm_source'] = isset($data['utm_source']) ? $data['utm_source'] : null;
        $this->container['utm_medium'] = isset($data['utm_medium']) ? $data['utm_medium'] : null;
        $this->container['utm_campaign'] = isset($data['utm_campaign']) ? $data['utm_campaign'] : null;
        $this->container['utm_content'] = isset($data['utm_content']) ? $data['utm_content'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['utm_source'] === null) {
            $invalidProperties[] = "'utm_source' can't be null";
        }
        if ($this->container['utm_medium'] === null) {
            $invalidProperties[] = "'utm_medium' can't be null";
        }
        if ($this->container['utm_campaign'] === null) {
            $invalidProperties[] = "'utm_campaign' can't be null";
        }
        if ($this->container['utm_content'] === null) {
            $invalidProperties[] = "'utm_content' can't be null";
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

        if ($this->container['utm_source'] === null) {
            return false;
        }
        if ($this->container['utm_medium'] === null) {
            return false;
        }
        if ($this->container['utm_campaign'] === null) {
            return false;
        }
        if ($this->container['utm_content'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets utm_source
     *
     * @return string
     */
    public function getUtmSource()
    {
        return $this->container['utm_source'];
    }

    /**
     * Sets utm_source
     *
     * @param string $utm_source The utm_source marketing parameter appended to each link in the campaign.
     *
     * @return $this
     */
    public function setUtmSource($utm_source)
    {
        $this->container['utm_source'] = $utm_source;

        return $this;
    }

    /**
     * Gets utm_medium
     *
     * @return string
     */
    public function getUtmMedium()
    {
        return $this->container['utm_medium'];
    }

    /**
     * Sets utm_medium
     *
     * @param string $utm_medium The utm_medium marketing parameter appended to each link in the campaign.
     *
     * @return $this
     */
    public function setUtmMedium($utm_medium)
    {
        $this->container['utm_medium'] = $utm_medium;

        return $this;
    }

    /**
     * Gets utm_campaign
     *
     * @return string
     */
    public function getUtmCampaign()
    {
        return $this->container['utm_campaign'];
    }

    /**
     * Sets utm_campaign
     *
     * @param string $utm_campaign The utm_campaign marketing parameter appended to each link in the campaign.
     *
     * @return $this
     */
    public function setUtmCampaign($utm_campaign)
    {
        $this->container['utm_campaign'] = $utm_campaign;

        return $this;
    }

    /**
     * Gets utm_content
     *
     * @return string
     */
    public function getUtmContent()
    {
        return $this->container['utm_content'];
    }

    /**
     * Sets utm_content
     *
     * @param string $utm_content The utm_content marketing parameter appended to each link in the campaign.
     *
     * @return $this
     */
    public function setUtmContent($utm_content)
    {
        $this->container['utm_content'] = $utm_content;

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


