<?php
/**
 * WebhookPayload
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
 * WebhookPayload Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebhookPayload implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WebhookPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'web_notification_url' => 'string',
        'notify_once_per_email' => 'bool',
        'notification_for_sent' => 'bool',
        'notification_for_opened' => 'bool',
        'notification_for_clicked' => 'bool',
        'notification_for_unsubscribed' => 'bool',
        'notification_for_abuse_report' => 'bool',
        'notification_for_error' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => 'string',
        'web_notification_url' => 'string',
        'notify_once_per_email' => 'boolean',
        'notification_for_sent' => 'boolean',
        'notification_for_opened' => 'boolean',
        'notification_for_clicked' => 'boolean',
        'notification_for_unsubscribed' => 'boolean',
        'notification_for_abuse_report' => 'boolean',
        'notification_for_error' => 'boolean'
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
        'name' => 'Name',
        'web_notification_url' => 'WebNotificationUrl',
        'notify_once_per_email' => 'NotifyOncePerEmail',
        'notification_for_sent' => 'NotificationForSent',
        'notification_for_opened' => 'NotificationForOpened',
        'notification_for_clicked' => 'NotificationForClicked',
        'notification_for_unsubscribed' => 'NotificationForUnsubscribed',
        'notification_for_abuse_report' => 'NotificationForAbuseReport',
        'notification_for_error' => 'NotificationForError'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'web_notification_url' => 'setWebNotificationUrl',
        'notify_once_per_email' => 'setNotifyOncePerEmail',
        'notification_for_sent' => 'setNotificationForSent',
        'notification_for_opened' => 'setNotificationForOpened',
        'notification_for_clicked' => 'setNotificationForClicked',
        'notification_for_unsubscribed' => 'setNotificationForUnsubscribed',
        'notification_for_abuse_report' => 'setNotificationForAbuseReport',
        'notification_for_error' => 'setNotificationForError'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'web_notification_url' => 'getWebNotificationUrl',
        'notify_once_per_email' => 'getNotifyOncePerEmail',
        'notification_for_sent' => 'getNotificationForSent',
        'notification_for_opened' => 'getNotificationForOpened',
        'notification_for_clicked' => 'getNotificationForClicked',
        'notification_for_unsubscribed' => 'getNotificationForUnsubscribed',
        'notification_for_abuse_report' => 'getNotificationForAbuseReport',
        'notification_for_error' => 'getNotificationForError'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['web_notification_url'] = isset($data['web_notification_url']) ? $data['web_notification_url'] : null;
        $this->container['notify_once_per_email'] = isset($data['notify_once_per_email']) ? $data['notify_once_per_email'] : null;
        $this->container['notification_for_sent'] = isset($data['notification_for_sent']) ? $data['notification_for_sent'] : null;
        $this->container['notification_for_opened'] = isset($data['notification_for_opened']) ? $data['notification_for_opened'] : null;
        $this->container['notification_for_clicked'] = isset($data['notification_for_clicked']) ? $data['notification_for_clicked'] : null;
        $this->container['notification_for_unsubscribed'] = isset($data['notification_for_unsubscribed']) ? $data['notification_for_unsubscribed'] : null;
        $this->container['notification_for_abuse_report'] = isset($data['notification_for_abuse_report']) ? $data['notification_for_abuse_report'] : null;
        $this->container['notification_for_error'] = isset($data['notification_for_error']) ? $data['notification_for_error'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['web_notification_url'] === null) {
            $invalidProperties[] = "'web_notification_url' can't be null";
        }
        if ($this->container['notify_once_per_email'] === null) {
            $invalidProperties[] = "'notify_once_per_email' can't be null";
        }
        if ($this->container['notification_for_sent'] === null) {
            $invalidProperties[] = "'notification_for_sent' can't be null";
        }
        if ($this->container['notification_for_opened'] === null) {
            $invalidProperties[] = "'notification_for_opened' can't be null";
        }
        if ($this->container['notification_for_clicked'] === null) {
            $invalidProperties[] = "'notification_for_clicked' can't be null";
        }
        if ($this->container['notification_for_unsubscribed'] === null) {
            $invalidProperties[] = "'notification_for_unsubscribed' can't be null";
        }
        if ($this->container['notification_for_abuse_report'] === null) {
            $invalidProperties[] = "'notification_for_abuse_report' can't be null";
        }
        if ($this->container['notification_for_error'] === null) {
            $invalidProperties[] = "'notification_for_error' can't be null";
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

        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['web_notification_url'] === null) {
            return false;
        }
        if ($this->container['notify_once_per_email'] === null) {
            return false;
        }
        if ($this->container['notification_for_sent'] === null) {
            return false;
        }
        if ($this->container['notification_for_opened'] === null) {
            return false;
        }
        if ($this->container['notification_for_clicked'] === null) {
            return false;
        }
        if ($this->container['notification_for_unsubscribed'] === null) {
            return false;
        }
        if ($this->container['notification_for_abuse_report'] === null) {
            return false;
        }
        if ($this->container['notification_for_error'] === null) {
            return false;
        }
        return true;
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
     * Gets web_notification_url
     *
     * @return string
     */
    public function getWebNotificationUrl()
    {
        return $this->container['web_notification_url'];
    }

    /**
     * Sets web_notification_url
     *
     * @param string $web_notification_url URL address to receive web notifications to parse and process.
     *
     * @return $this
     */
    public function setWebNotificationUrl($web_notification_url)
    {
        $this->container['web_notification_url'] = $web_notification_url;

        return $this;
    }

    /**
     * Gets notify_once_per_email
     *
     * @return bool
     */
    public function getNotifyOncePerEmail()
    {
        return $this->container['notify_once_per_email'];
    }

    /**
     * Sets notify_once_per_email
     *
     * @param bool $notify_once_per_email notify_once_per_email
     *
     * @return $this
     */
    public function setNotifyOncePerEmail($notify_once_per_email)
    {
        $this->container['notify_once_per_email'] = $notify_once_per_email;

        return $this;
    }

    /**
     * Gets notification_for_sent
     *
     * @return bool
     */
    public function getNotificationForSent()
    {
        return $this->container['notification_for_sent'];
    }

    /**
     * Sets notification_for_sent
     *
     * @param bool $notification_for_sent notification_for_sent
     *
     * @return $this
     */
    public function setNotificationForSent($notification_for_sent)
    {
        $this->container['notification_for_sent'] = $notification_for_sent;

        return $this;
    }

    /**
     * Gets notification_for_opened
     *
     * @return bool
     */
    public function getNotificationForOpened()
    {
        return $this->container['notification_for_opened'];
    }

    /**
     * Sets notification_for_opened
     *
     * @param bool $notification_for_opened notification_for_opened
     *
     * @return $this
     */
    public function setNotificationForOpened($notification_for_opened)
    {
        $this->container['notification_for_opened'] = $notification_for_opened;

        return $this;
    }

    /**
     * Gets notification_for_clicked
     *
     * @return bool
     */
    public function getNotificationForClicked()
    {
        return $this->container['notification_for_clicked'];
    }

    /**
     * Sets notification_for_clicked
     *
     * @param bool $notification_for_clicked notification_for_clicked
     *
     * @return $this
     */
    public function setNotificationForClicked($notification_for_clicked)
    {
        $this->container['notification_for_clicked'] = $notification_for_clicked;

        return $this;
    }

    /**
     * Gets notification_for_unsubscribed
     *
     * @return bool
     */
    public function getNotificationForUnsubscribed()
    {
        return $this->container['notification_for_unsubscribed'];
    }

    /**
     * Sets notification_for_unsubscribed
     *
     * @param bool $notification_for_unsubscribed notification_for_unsubscribed
     *
     * @return $this
     */
    public function setNotificationForUnsubscribed($notification_for_unsubscribed)
    {
        $this->container['notification_for_unsubscribed'] = $notification_for_unsubscribed;

        return $this;
    }

    /**
     * Gets notification_for_abuse_report
     *
     * @return bool
     */
    public function getNotificationForAbuseReport()
    {
        return $this->container['notification_for_abuse_report'];
    }

    /**
     * Sets notification_for_abuse_report
     *
     * @param bool $notification_for_abuse_report notification_for_abuse_report
     *
     * @return $this
     */
    public function setNotificationForAbuseReport($notification_for_abuse_report)
    {
        $this->container['notification_for_abuse_report'] = $notification_for_abuse_report;

        return $this;
    }

    /**
     * Gets notification_for_error
     *
     * @return bool
     */
    public function getNotificationForError()
    {
        return $this->container['notification_for_error'];
    }

    /**
     * Sets notification_for_error
     *
     * @param bool $notification_for_error notification_for_error
     *
     * @return $this
     */
    public function setNotificationForError($notification_for_error)
    {
        $this->container['notification_for_error'] = $notification_for_error;

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

