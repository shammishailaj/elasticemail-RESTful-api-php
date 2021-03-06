<?php
/**
 * SpamCheck
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
 * SpamCheck Class Doc Comment
 *
 * @category Class
 * @description Spam check of specified message.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SpamCheck implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SpamCheck';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'total_score' => 'string',
        'date' => 'string',
        'subject' => 'string',
        'from_email' => 'string',
        'msg_id' => 'string',
        'channel_name' => 'string',
        'rules' => '\Swagger\Client\Model\SpamRule[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'total_score' => 'string',
        'date' => 'string',
        'subject' => 'string',
        'from_email' => 'string',
        'msg_id' => 'string',
        'channel_name' => 'string',
        'rules' => null
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
        'total_score' => 'TotalScore',
        'date' => 'Date',
        'subject' => 'Subject',
        'from_email' => 'FromEmail',
        'msg_id' => 'MsgID',
        'channel_name' => 'ChannelName',
        'rules' => 'Rules'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_score' => 'setTotalScore',
        'date' => 'setDate',
        'subject' => 'setSubject',
        'from_email' => 'setFromEmail',
        'msg_id' => 'setMsgId',
        'channel_name' => 'setChannelName',
        'rules' => 'setRules'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_score' => 'getTotalScore',
        'date' => 'getDate',
        'subject' => 'getSubject',
        'from_email' => 'getFromEmail',
        'msg_id' => 'getMsgId',
        'channel_name' => 'getChannelName',
        'rules' => 'getRules'
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
        $this->container['total_score'] = isset($data['total_score']) ? $data['total_score'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['from_email'] = isset($data['from_email']) ? $data['from_email'] : null;
        $this->container['msg_id'] = isset($data['msg_id']) ? $data['msg_id'] : null;
        $this->container['channel_name'] = isset($data['channel_name']) ? $data['channel_name'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['total_score'] === null) {
            $invalidProperties[] = "'total_score' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
        }
        if ($this->container['from_email'] === null) {
            $invalidProperties[] = "'from_email' can't be null";
        }
        if ($this->container['msg_id'] === null) {
            $invalidProperties[] = "'msg_id' can't be null";
        }
        if ($this->container['channel_name'] === null) {
            $invalidProperties[] = "'channel_name' can't be null";
        }
        if ($this->container['rules'] === null) {
            $invalidProperties[] = "'rules' can't be null";
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

        if ($this->container['total_score'] === null) {
            return false;
        }
        if ($this->container['date'] === null) {
            return false;
        }
        if ($this->container['subject'] === null) {
            return false;
        }
        if ($this->container['from_email'] === null) {
            return false;
        }
        if ($this->container['msg_id'] === null) {
            return false;
        }
        if ($this->container['channel_name'] === null) {
            return false;
        }
        if ($this->container['rules'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets total_score
     *
     * @return string
     */
    public function getTotalScore()
    {
        return $this->container['total_score'];
    }

    /**
     * Sets total_score
     *
     * @param string $total_score Total spam score from
     *
     * @return $this
     */
    public function setTotalScore($total_score)
    {
        $this->container['total_score'] = $total_score;

        return $this;
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
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject Default subject of email.
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets from_email
     *
     * @return string
     */
    public function getFromEmail()
    {
        return $this->container['from_email'];
    }

    /**
     * Sets from_email
     *
     * @param string $from_email Default From: email address.
     *
     * @return $this
     */
    public function setFromEmail($from_email)
    {
        $this->container['from_email'] = $from_email;

        return $this;
    }

    /**
     * Gets msg_id
     *
     * @return string
     */
    public function getMsgId()
    {
        return $this->container['msg_id'];
    }

    /**
     * Sets msg_id
     *
     * @param string $msg_id ID number of selected message.
     *
     * @return $this
     */
    public function setMsgId($msg_id)
    {
        $this->container['msg_id'] = $msg_id;

        return $this;
    }

    /**
     * Gets channel_name
     *
     * @return string
     */
    public function getChannelName()
    {
        return $this->container['channel_name'];
    }

    /**
     * Sets channel_name
     *
     * @param string $channel_name Name of selected channel.
     *
     * @return $this
     */
    public function setChannelName($channel_name)
    {
        $this->container['channel_name'] = $channel_name;

        return $this;
    }

    /**
     * Gets rules
     *
     * @return \Swagger\Client\Model\SpamRule[]
     */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
     * Sets rules
     *
     * @param \Swagger\Client\Model\SpamRule[] $rules rules
     *
     * @return $this
     */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;

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


