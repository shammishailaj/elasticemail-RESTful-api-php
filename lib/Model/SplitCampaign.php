<?php
/**
 * SplitCampaign
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
 * SplitCampaign Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SplitCampaign implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SplitCampaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'split_campaign_templates' => '\Swagger\Client\Model\CampaignTemplate[]',
        'trigger_options' => '\Swagger\Client\Model\TriggerOptions',
        'split_options' => '\Swagger\Client\Model\SplitOptions',
        'name' => 'string',
        'status' => 'string',
        'targets' => '\Swagger\Client\Model\CampaignRecipient',
        'tracking_options' => '\Swagger\Client\Model\TrackingOptions',
        'options' => '\Swagger\Client\Model\CampaignOptions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'split_campaign_templates' => null,
        'trigger_options' => null,
        'split_options' => null,
        'name' => 'string',
        'status' => null,
        'targets' => null,
        'tracking_options' => null,
        'options' => null
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
        'split_campaign_templates' => 'SplitCampaignTemplates',
        'trigger_options' => 'TriggerOptions',
        'split_options' => 'SplitOptions',
        'name' => 'Name',
        'status' => 'Status',
        'targets' => 'Targets',
        'tracking_options' => 'TrackingOptions',
        'options' => 'Options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'split_campaign_templates' => 'setSplitCampaignTemplates',
        'trigger_options' => 'setTriggerOptions',
        'split_options' => 'setSplitOptions',
        'name' => 'setName',
        'status' => 'setStatus',
        'targets' => 'setTargets',
        'tracking_options' => 'setTrackingOptions',
        'options' => 'setOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'split_campaign_templates' => 'getSplitCampaignTemplates',
        'trigger_options' => 'getTriggerOptions',
        'split_options' => 'getSplitOptions',
        'name' => 'getName',
        'status' => 'getStatus',
        'targets' => 'getTargets',
        'tracking_options' => 'getTrackingOptions',
        'options' => 'getOptions'
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

    const STATUS_DELETED = 'Deleted';
    const STATUS_ACTIVE = 'Active';
    const STATUS_PROCESSING = 'Processing';
    const STATUS_SENDING = 'Sending';
    const STATUS_COMPLETED = 'Completed';
    const STATUS_PAUSED = 'Paused';
    const STATUS_CANCELLED = 'Cancelled';
    const STATUS_DRAFT = 'Draft';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DELETED,
            self::STATUS_ACTIVE,
            self::STATUS_PROCESSING,
            self::STATUS_SENDING,
            self::STATUS_COMPLETED,
            self::STATUS_PAUSED,
            self::STATUS_CANCELLED,
            self::STATUS_DRAFT,
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
        $this->container['split_campaign_templates'] = isset($data['split_campaign_templates']) ? $data['split_campaign_templates'] : null;
        $this->container['trigger_options'] = isset($data['trigger_options']) ? $data['trigger_options'] : null;
        $this->container['split_options'] = isset($data['split_options']) ? $data['split_options'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['targets'] = isset($data['targets']) ? $data['targets'] : null;
        $this->container['tracking_options'] = isset($data['tracking_options']) ? $data['tracking_options'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['split_campaign_templates'] === null) {
            $invalidProperties[] = "'split_campaign_templates' can't be null";
        }
        if ($this->container['trigger_options'] === null) {
            $invalidProperties[] = "'trigger_options' can't be null";
        }
        if ($this->container['split_options'] === null) {
            $invalidProperties[] = "'split_options' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['targets'] === null) {
            $invalidProperties[] = "'targets' can't be null";
        }
        if ($this->container['tracking_options'] === null) {
            $invalidProperties[] = "'tracking_options' can't be null";
        }
        if ($this->container['options'] === null) {
            $invalidProperties[] = "'options' can't be null";
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

        if ($this->container['split_campaign_templates'] === null) {
            return false;
        }
        if ($this->container['trigger_options'] === null) {
            return false;
        }
        if ($this->container['split_options'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            return false;
        }
        if ($this->container['targets'] === null) {
            return false;
        }
        if ($this->container['tracking_options'] === null) {
            return false;
        }
        if ($this->container['options'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets split_campaign_templates
     *
     * @return \Swagger\Client\Model\CampaignTemplate[]
     */
    public function getSplitCampaignTemplates()
    {
        return $this->container['split_campaign_templates'];
    }

    /**
     * Sets split_campaign_templates
     *
     * @param \Swagger\Client\Model\CampaignTemplate[] $split_campaign_templates split_campaign_templates
     *
     * @return $this
     */
    public function setSplitCampaignTemplates($split_campaign_templates)
    {
        $this->container['split_campaign_templates'] = $split_campaign_templates;

        return $this;
    }

    /**
     * Gets trigger_options
     *
     * @return \Swagger\Client\Model\TriggerOptions
     */
    public function getTriggerOptions()
    {
        return $this->container['trigger_options'];
    }

    /**
     * Sets trigger_options
     *
     * @param \Swagger\Client\Model\TriggerOptions $trigger_options trigger_options
     *
     * @return $this
     */
    public function setTriggerOptions($trigger_options)
    {
        $this->container['trigger_options'] = $trigger_options;

        return $this;
    }

    /**
     * Gets split_options
     *
     * @return \Swagger\Client\Model\SplitOptions
     */
    public function getSplitOptions()
    {
        return $this->container['split_options'];
    }

    /**
     * Sets split_options
     *
     * @param \Swagger\Client\Model\SplitOptions $split_options split_options
     *
     * @return $this
     */
    public function setSplitOptions($split_options)
    {
        $this->container['split_options'] = $split_options;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Filename
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Name of status: Active, Engaged, Inactive, Abuse, Bounced, Unsubscribed.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets targets
     *
     * @return \Swagger\Client\Model\CampaignRecipient
     */
    public function getTargets()
    {
        return $this->container['targets'];
    }

    /**
     * Sets targets
     *
     * @param \Swagger\Client\Model\CampaignRecipient $targets targets
     *
     * @return $this
     */
    public function setTargets($targets)
    {
        $this->container['targets'] = $targets;

        return $this;
    }

    /**
     * Gets tracking_options
     *
     * @return \Swagger\Client\Model\TrackingOptions
     */
    public function getTrackingOptions()
    {
        return $this->container['tracking_options'];
    }

    /**
     * Sets tracking_options
     *
     * @param \Swagger\Client\Model\TrackingOptions $tracking_options tracking_options
     *
     * @return $this
     */
    public function setTrackingOptions($tracking_options)
    {
        $this->container['tracking_options'] = $tracking_options;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \Swagger\Client\Model\CampaignOptions
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \Swagger\Client\Model\CampaignOptions $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

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


