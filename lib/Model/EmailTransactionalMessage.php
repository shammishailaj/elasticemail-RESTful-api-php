<?php
/**
 * EmailTransactionalMessage
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
 * EmailTransactionalMessage Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailTransactionalMessage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmailTransactionalMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'recipients' => '\Swagger\Client\Model\TransactionalRecipient',
        'body' => '\Swagger\Client\Model\Body',
        'sender' => '\Swagger\Client\Model\Sender',
        'template_name' => 'string',
        'attachments' => '\Swagger\Client\Model\MessageAttachment[]',
        'tracking' => '\Swagger\Client\Model\TrackingOptions',
        'merge_fields' => 'map[string,string]',
        'headers' => 'map[string,string]',
        'postback' => 'string',
        'encoding' => '\Swagger\Client\Model\EncodingSettings',
        'options' => '\Swagger\Client\Model\Options'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'recipients' => null,
        'body' => null,
        'sender' => null,
        'template_name' => 'string',
        'attachments' => null,
        'tracking' => null,
        'merge_fields' => null,
        'headers' => null,
        'postback' => 'string',
        'encoding' => null,
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
        'recipients' => 'Recipients',
        'body' => 'Body',
        'sender' => 'Sender',
        'template_name' => 'TemplateName',
        'attachments' => 'Attachments',
        'tracking' => 'Tracking',
        'merge_fields' => 'MergeFields',
        'headers' => 'Headers',
        'postback' => 'Postback',
        'encoding' => 'Encoding',
        'options' => 'Options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recipients' => 'setRecipients',
        'body' => 'setBody',
        'sender' => 'setSender',
        'template_name' => 'setTemplateName',
        'attachments' => 'setAttachments',
        'tracking' => 'setTracking',
        'merge_fields' => 'setMergeFields',
        'headers' => 'setHeaders',
        'postback' => 'setPostback',
        'encoding' => 'setEncoding',
        'options' => 'setOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recipients' => 'getRecipients',
        'body' => 'getBody',
        'sender' => 'getSender',
        'template_name' => 'getTemplateName',
        'attachments' => 'getAttachments',
        'tracking' => 'getTracking',
        'merge_fields' => 'getMergeFields',
        'headers' => 'getHeaders',
        'postback' => 'getPostback',
        'encoding' => 'getEncoding',
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
        $this->container['recipients'] = isset($data['recipients']) ? $data['recipients'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['template_name'] = isset($data['template_name']) ? $data['template_name'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['tracking'] = isset($data['tracking']) ? $data['tracking'] : null;
        $this->container['merge_fields'] = isset($data['merge_fields']) ? $data['merge_fields'] : null;
        $this->container['headers'] = isset($data['headers']) ? $data['headers'] : null;
        $this->container['postback'] = isset($data['postback']) ? $data['postback'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
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

        if ($this->container['recipients'] === null) {
            $invalidProperties[] = "'recipients' can't be null";
        }
        if ($this->container['body'] === null) {
            $invalidProperties[] = "'body' can't be null";
        }
        if ($this->container['sender'] === null) {
            $invalidProperties[] = "'sender' can't be null";
        }
        if ($this->container['template_name'] === null) {
            $invalidProperties[] = "'template_name' can't be null";
        }
        if ($this->container['attachments'] === null) {
            $invalidProperties[] = "'attachments' can't be null";
        }
        if ($this->container['tracking'] === null) {
            $invalidProperties[] = "'tracking' can't be null";
        }
        if ($this->container['merge_fields'] === null) {
            $invalidProperties[] = "'merge_fields' can't be null";
        }
        if ($this->container['headers'] === null) {
            $invalidProperties[] = "'headers' can't be null";
        }
        if ($this->container['postback'] === null) {
            $invalidProperties[] = "'postback' can't be null";
        }
        if ($this->container['encoding'] === null) {
            $invalidProperties[] = "'encoding' can't be null";
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

        if ($this->container['recipients'] === null) {
            return false;
        }
        if ($this->container['body'] === null) {
            return false;
        }
        if ($this->container['sender'] === null) {
            return false;
        }
        if ($this->container['template_name'] === null) {
            return false;
        }
        if ($this->container['attachments'] === null) {
            return false;
        }
        if ($this->container['tracking'] === null) {
            return false;
        }
        if ($this->container['merge_fields'] === null) {
            return false;
        }
        if ($this->container['headers'] === null) {
            return false;
        }
        if ($this->container['postback'] === null) {
            return false;
        }
        if ($this->container['encoding'] === null) {
            return false;
        }
        if ($this->container['options'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets recipients
     *
     * @return \Swagger\Client\Model\TransactionalRecipient
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param \Swagger\Client\Model\TransactionalRecipient $recipients recipients
     *
     * @return $this
     */
    public function setRecipients($recipients)
    {
        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets body
     *
     * @return \Swagger\Client\Model\Body
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param \Swagger\Client\Model\Body $body body
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return \Swagger\Client\Model\Sender
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param \Swagger\Client\Model\Sender $sender sender
     *
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets template_name
     *
     * @return string
     */
    public function getTemplateName()
    {
        return $this->container['template_name'];
    }

    /**
     * Sets template_name
     *
     * @param string $template_name Name of template.
     *
     * @return $this
     */
    public function setTemplateName($template_name)
    {
        $this->container['template_name'] = $template_name;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \Swagger\Client\Model\MessageAttachment[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \Swagger\Client\Model\MessageAttachment[] $attachments Attachment files. These files should be provided with the POST multipart file upload, not directly in the request's URL. Should also include merge CSV file
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets tracking
     *
     * @return \Swagger\Client\Model\TrackingOptions
     */
    public function getTracking()
    {
        return $this->container['tracking'];
    }

    /**
     * Sets tracking
     *
     * @param \Swagger\Client\Model\TrackingOptions $tracking tracking
     *
     * @return $this
     */
    public function setTracking($tracking)
    {
        $this->container['tracking'] = $tracking;

        return $this;
    }

    /**
     * Gets merge_fields
     *
     * @return map[string,string]
     */
    public function getMergeFields()
    {
        return $this->container['merge_fields'];
    }

    /**
     * Sets merge_fields
     *
     * @param map[string,string] $merge_fields merge_fields
     *
     * @return $this
     */
    public function setMergeFields($merge_fields)
    {
        $this->container['merge_fields'] = $merge_fields;

        return $this;
    }

    /**
     * Gets headers
     *
     * @return map[string,string]
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param map[string,string] $headers headers
     *
     * @return $this
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }

    /**
     * Gets postback
     *
     * @return string
     */
    public function getPostback()
    {
        return $this->container['postback'];
    }

    /**
     * Sets postback
     *
     * @param string $postback postback
     *
     * @return $this
     */
    public function setPostback($postback)
    {
        $this->container['postback'] = $postback;

        return $this;
    }

    /**
     * Gets encoding
     *
     * @return \Swagger\Client\Model\EncodingSettings
     */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
     * Sets encoding
     *
     * @param \Swagger\Client\Model\EncodingSettings $encoding encoding
     *
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \Swagger\Client\Model\Options
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \Swagger\Client\Model\Options $options options
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


