<?php
/**
 * Contact
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
 * Contact Class Doc Comment
 *
 * @category Class
 * @description Contact
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Contact implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Contact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contact_score' => 'int',
        'date_added' => '\DateTime',
        'email' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'status' => 'string',
        'bounced_error_code' => 'int',
        'bounced_error_message' => 'string',
        'total_sent' => 'int',
        'total_failed' => 'int',
        'total_opened' => 'int',
        'total_clicked' => 'int',
        'first_failed_date' => '\DateTime',
        'last_failed_count' => 'int',
        'date_updated' => '\DateTime',
        'source' => 'string',
        'error_code' => 'int',
        'friendly_error_message' => 'string',
        'created_from_ip' => 'string',
        'consent_ip' => 'string',
        'consent_date' => '\DateTime',
        'consent_tracking' => 'string',
        'unsubscribed_date' => '\DateTime',
        'notes' => 'string',
        'website_url' => 'string',
        'last_opened' => '\DateTime',
        'last_clicked' => '\DateTime',
        'custom_fields' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contact_score' => 'int32',
        'date_added' => 'date-time',
        'email' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'status' => null,
        'bounced_error_code' => 'int32',
        'bounced_error_message' => 'string',
        'total_sent' => 'int32',
        'total_failed' => 'int32',
        'total_opened' => 'int32',
        'total_clicked' => 'int32',
        'first_failed_date' => 'date-time',
        'last_failed_count' => 'int32',
        'date_updated' => 'date-time',
        'source' => null,
        'error_code' => 'int32',
        'friendly_error_message' => 'string',
        'created_from_ip' => 'string',
        'consent_ip' => 'string',
        'consent_date' => 'date-time',
        'consent_tracking' => null,
        'unsubscribed_date' => 'date-time',
        'notes' => 'string',
        'website_url' => 'string',
        'last_opened' => 'date-time',
        'last_clicked' => 'date-time',
        'custom_fields' => null
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
        'contact_score' => 'ContactScore',
        'date_added' => 'DateAdded',
        'email' => 'Email',
        'first_name' => 'FirstName',
        'last_name' => 'LastName',
        'status' => 'Status',
        'bounced_error_code' => 'BouncedErrorCode',
        'bounced_error_message' => 'BouncedErrorMessage',
        'total_sent' => 'TotalSent',
        'total_failed' => 'TotalFailed',
        'total_opened' => 'TotalOpened',
        'total_clicked' => 'TotalClicked',
        'first_failed_date' => 'FirstFailedDate',
        'last_failed_count' => 'LastFailedCount',
        'date_updated' => 'DateUpdated',
        'source' => 'Source',
        'error_code' => 'ErrorCode',
        'friendly_error_message' => 'FriendlyErrorMessage',
        'created_from_ip' => 'CreatedFromIP',
        'consent_ip' => 'ConsentIP',
        'consent_date' => 'ConsentDate',
        'consent_tracking' => 'ConsentTracking',
        'unsubscribed_date' => 'UnsubscribedDate',
        'notes' => 'Notes',
        'website_url' => 'WebsiteUrl',
        'last_opened' => 'LastOpened',
        'last_clicked' => 'LastClicked',
        'custom_fields' => 'CustomFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact_score' => 'setContactScore',
        'date_added' => 'setDateAdded',
        'email' => 'setEmail',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'status' => 'setStatus',
        'bounced_error_code' => 'setBouncedErrorCode',
        'bounced_error_message' => 'setBouncedErrorMessage',
        'total_sent' => 'setTotalSent',
        'total_failed' => 'setTotalFailed',
        'total_opened' => 'setTotalOpened',
        'total_clicked' => 'setTotalClicked',
        'first_failed_date' => 'setFirstFailedDate',
        'last_failed_count' => 'setLastFailedCount',
        'date_updated' => 'setDateUpdated',
        'source' => 'setSource',
        'error_code' => 'setErrorCode',
        'friendly_error_message' => 'setFriendlyErrorMessage',
        'created_from_ip' => 'setCreatedFromIp',
        'consent_ip' => 'setConsentIp',
        'consent_date' => 'setConsentDate',
        'consent_tracking' => 'setConsentTracking',
        'unsubscribed_date' => 'setUnsubscribedDate',
        'notes' => 'setNotes',
        'website_url' => 'setWebsiteUrl',
        'last_opened' => 'setLastOpened',
        'last_clicked' => 'setLastClicked',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact_score' => 'getContactScore',
        'date_added' => 'getDateAdded',
        'email' => 'getEmail',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'status' => 'getStatus',
        'bounced_error_code' => 'getBouncedErrorCode',
        'bounced_error_message' => 'getBouncedErrorMessage',
        'total_sent' => 'getTotalSent',
        'total_failed' => 'getTotalFailed',
        'total_opened' => 'getTotalOpened',
        'total_clicked' => 'getTotalClicked',
        'first_failed_date' => 'getFirstFailedDate',
        'last_failed_count' => 'getLastFailedCount',
        'date_updated' => 'getDateUpdated',
        'source' => 'getSource',
        'error_code' => 'getErrorCode',
        'friendly_error_message' => 'getFriendlyErrorMessage',
        'created_from_ip' => 'getCreatedFromIp',
        'consent_ip' => 'getConsentIp',
        'consent_date' => 'getConsentDate',
        'consent_tracking' => 'getConsentTracking',
        'unsubscribed_date' => 'getUnsubscribedDate',
        'notes' => 'getNotes',
        'website_url' => 'getWebsiteUrl',
        'last_opened' => 'getLastOpened',
        'last_clicked' => 'getLastClicked',
        'custom_fields' => 'getCustomFields'
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

    const STATUS_TRANSACTIONAL = 'Transactional';
    const STATUS_ENGAGED = 'Engaged';
    const STATUS_ACTIVE = 'Active';
    const STATUS_BOUNCED = 'Bounced';
    const STATUS_UNSUBSCRIBED = 'Unsubscribed';
    const STATUS_ABUSE = 'Abuse';
    const STATUS_INACTIVE = 'Inactive';
    const STATUS_STALE = 'Stale';
    const STATUS_NOT_CONFIRMED = 'NotConfirmed';
    const SOURCE_DELIVERY_API = 'DeliveryApi';
    const SOURCE_MANUAL_INPUT = 'ManualInput';
    const SOURCE_FILE_UPLOAD = 'FileUpload';
    const SOURCE_WEB_FORM = 'WebForm';
    const SOURCE_CONTACT_API = 'ContactApi';
    const CONSENT_TRACKING_UNKNOWN = 'Unknown';
    const CONSENT_TRACKING_ALLOW = 'Allow';
    const CONSENT_TRACKING_DENY = 'Deny';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_TRANSACTIONAL,
            self::STATUS_ENGAGED,
            self::STATUS_ACTIVE,
            self::STATUS_BOUNCED,
            self::STATUS_UNSUBSCRIBED,
            self::STATUS_ABUSE,
            self::STATUS_INACTIVE,
            self::STATUS_STALE,
            self::STATUS_NOT_CONFIRMED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_DELIVERY_API,
            self::SOURCE_MANUAL_INPUT,
            self::SOURCE_FILE_UPLOAD,
            self::SOURCE_WEB_FORM,
            self::SOURCE_CONTACT_API,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConsentTrackingAllowableValues()
    {
        return [
            self::CONSENT_TRACKING_UNKNOWN,
            self::CONSENT_TRACKING_ALLOW,
            self::CONSENT_TRACKING_DENY,
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
        $this->container['contact_score'] = isset($data['contact_score']) ? $data['contact_score'] : null;
        $this->container['date_added'] = isset($data['date_added']) ? $data['date_added'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['bounced_error_code'] = isset($data['bounced_error_code']) ? $data['bounced_error_code'] : null;
        $this->container['bounced_error_message'] = isset($data['bounced_error_message']) ? $data['bounced_error_message'] : null;
        $this->container['total_sent'] = isset($data['total_sent']) ? $data['total_sent'] : null;
        $this->container['total_failed'] = isset($data['total_failed']) ? $data['total_failed'] : null;
        $this->container['total_opened'] = isset($data['total_opened']) ? $data['total_opened'] : null;
        $this->container['total_clicked'] = isset($data['total_clicked']) ? $data['total_clicked'] : null;
        $this->container['first_failed_date'] = isset($data['first_failed_date']) ? $data['first_failed_date'] : null;
        $this->container['last_failed_count'] = isset($data['last_failed_count']) ? $data['last_failed_count'] : null;
        $this->container['date_updated'] = isset($data['date_updated']) ? $data['date_updated'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['error_code'] = isset($data['error_code']) ? $data['error_code'] : null;
        $this->container['friendly_error_message'] = isset($data['friendly_error_message']) ? $data['friendly_error_message'] : null;
        $this->container['created_from_ip'] = isset($data['created_from_ip']) ? $data['created_from_ip'] : null;
        $this->container['consent_ip'] = isset($data['consent_ip']) ? $data['consent_ip'] : null;
        $this->container['consent_date'] = isset($data['consent_date']) ? $data['consent_date'] : null;
        $this->container['consent_tracking'] = isset($data['consent_tracking']) ? $data['consent_tracking'] : null;
        $this->container['unsubscribed_date'] = isset($data['unsubscribed_date']) ? $data['unsubscribed_date'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['website_url'] = isset($data['website_url']) ? $data['website_url'] : null;
        $this->container['last_opened'] = isset($data['last_opened']) ? $data['last_opened'] : null;
        $this->container['last_clicked'] = isset($data['last_clicked']) ? $data['last_clicked'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['contact_score'] === null) {
            $invalidProperties[] = "'contact_score' can't be null";
        }
        if ($this->container['date_added'] === null) {
            $invalidProperties[] = "'date_added' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
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

        if ($this->container['bounced_error_message'] === null) {
            $invalidProperties[] = "'bounced_error_message' can't be null";
        }
        if ($this->container['total_sent'] === null) {
            $invalidProperties[] = "'total_sent' can't be null";
        }
        if ($this->container['total_failed'] === null) {
            $invalidProperties[] = "'total_failed' can't be null";
        }
        if ($this->container['total_opened'] === null) {
            $invalidProperties[] = "'total_opened' can't be null";
        }
        if ($this->container['total_clicked'] === null) {
            $invalidProperties[] = "'total_clicked' can't be null";
        }
        if ($this->container['last_failed_count'] === null) {
            $invalidProperties[] = "'last_failed_count' can't be null";
        }
        if ($this->container['date_updated'] === null) {
            $invalidProperties[] = "'date_updated' can't be null";
        }
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        $allowedValues = $this->getSourceAllowableValues();
        if (!in_array($this->container['source'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'source', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['friendly_error_message'] === null) {
            $invalidProperties[] = "'friendly_error_message' can't be null";
        }
        if ($this->container['created_from_ip'] === null) {
            $invalidProperties[] = "'created_from_ip' can't be null";
        }
        if ($this->container['consent_ip'] === null) {
            $invalidProperties[] = "'consent_ip' can't be null";
        }
        if ($this->container['consent_tracking'] === null) {
            $invalidProperties[] = "'consent_tracking' can't be null";
        }
        $allowedValues = $this->getConsentTrackingAllowableValues();
        if (!in_array($this->container['consent_tracking'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'consent_tracking', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['notes'] === null) {
            $invalidProperties[] = "'notes' can't be null";
        }
        if ($this->container['website_url'] === null) {
            $invalidProperties[] = "'website_url' can't be null";
        }
        if ($this->container['custom_fields'] === null) {
            $invalidProperties[] = "'custom_fields' can't be null";
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

        if ($this->container['contact_score'] === null) {
            return false;
        }
        if ($this->container['date_added'] === null) {
            return false;
        }
        if ($this->container['email'] === null) {
            return false;
        }
        if ($this->container['first_name'] === null) {
            return false;
        }
        if ($this->container['last_name'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            return false;
        }
        if ($this->container['bounced_error_message'] === null) {
            return false;
        }
        if ($this->container['total_sent'] === null) {
            return false;
        }
        if ($this->container['total_failed'] === null) {
            return false;
        }
        if ($this->container['total_opened'] === null) {
            return false;
        }
        if ($this->container['total_clicked'] === null) {
            return false;
        }
        if ($this->container['last_failed_count'] === null) {
            return false;
        }
        if ($this->container['date_updated'] === null) {
            return false;
        }
        if ($this->container['source'] === null) {
            return false;
        }
        $allowedValues = $this->getSourceAllowableValues();
        if (!in_array($this->container['source'], $allowedValues)) {
            return false;
        }
        if ($this->container['friendly_error_message'] === null) {
            return false;
        }
        if ($this->container['created_from_ip'] === null) {
            return false;
        }
        if ($this->container['consent_ip'] === null) {
            return false;
        }
        if ($this->container['consent_tracking'] === null) {
            return false;
        }
        $allowedValues = $this->getConsentTrackingAllowableValues();
        if (!in_array($this->container['consent_tracking'], $allowedValues)) {
            return false;
        }
        if ($this->container['notes'] === null) {
            return false;
        }
        if ($this->container['website_url'] === null) {
            return false;
        }
        if ($this->container['custom_fields'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets contact_score
     *
     * @return int
     */
    public function getContactScore()
    {
        return $this->container['contact_score'];
    }

    /**
     * Sets contact_score
     *
     * @param int $contact_score contact_score
     *
     * @return $this
     */
    public function setContactScore($contact_score)
    {
        $this->container['contact_score'] = $contact_score;

        return $this;
    }

    /**
     * Gets date_added
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->container['date_added'];
    }

    /**
     * Sets date_added
     *
     * @param \DateTime $date_added Date of creation in YYYY-MM-DDThh:ii:ss format
     *
     * @return $this
     */
    public function setDateAdded($date_added)
    {
        $this->container['date_added'] = $date_added;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Proper email address.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name First name.
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name Last name.
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

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
     * Gets bounced_error_code
     *
     * @return int
     */
    public function getBouncedErrorCode()
    {
        return $this->container['bounced_error_code'];
    }

    /**
     * Sets bounced_error_code
     *
     * @param int $bounced_error_code RFC Error code
     *
     * @return $this
     */
    public function setBouncedErrorCode($bounced_error_code)
    {
        $this->container['bounced_error_code'] = $bounced_error_code;

        return $this;
    }

    /**
     * Gets bounced_error_message
     *
     * @return string
     */
    public function getBouncedErrorMessage()
    {
        return $this->container['bounced_error_message'];
    }

    /**
     * Sets bounced_error_message
     *
     * @param string $bounced_error_message RFC error message
     *
     * @return $this
     */
    public function setBouncedErrorMessage($bounced_error_message)
    {
        $this->container['bounced_error_message'] = $bounced_error_message;

        return $this;
    }

    /**
     * Gets total_sent
     *
     * @return int
     */
    public function getTotalSent()
    {
        return $this->container['total_sent'];
    }

    /**
     * Sets total_sent
     *
     * @param int $total_sent Total emails sent.
     *
     * @return $this
     */
    public function setTotalSent($total_sent)
    {
        $this->container['total_sent'] = $total_sent;

        return $this;
    }

    /**
     * Gets total_failed
     *
     * @return int
     */
    public function getTotalFailed()
    {
        return $this->container['total_failed'];
    }

    /**
     * Sets total_failed
     *
     * @param int $total_failed Total emails failed.
     *
     * @return $this
     */
    public function setTotalFailed($total_failed)
    {
        $this->container['total_failed'] = $total_failed;

        return $this;
    }

    /**
     * Gets total_opened
     *
     * @return int
     */
    public function getTotalOpened()
    {
        return $this->container['total_opened'];
    }

    /**
     * Sets total_opened
     *
     * @param int $total_opened Total emails opened.
     *
     * @return $this
     */
    public function setTotalOpened($total_opened)
    {
        $this->container['total_opened'] = $total_opened;

        return $this;
    }

    /**
     * Gets total_clicked
     *
     * @return int
     */
    public function getTotalClicked()
    {
        return $this->container['total_clicked'];
    }

    /**
     * Sets total_clicked
     *
     * @param int $total_clicked Total emails clicked
     *
     * @return $this
     */
    public function setTotalClicked($total_clicked)
    {
        $this->container['total_clicked'] = $total_clicked;

        return $this;
    }

    /**
     * Gets first_failed_date
     *
     * @return \DateTime
     */
    public function getFirstFailedDate()
    {
        return $this->container['first_failed_date'];
    }

    /**
     * Sets first_failed_date
     *
     * @param \DateTime $first_failed_date Date of first failed message
     *
     * @return $this
     */
    public function setFirstFailedDate($first_failed_date)
    {
        $this->container['first_failed_date'] = $first_failed_date;

        return $this;
    }

    /**
     * Gets last_failed_count
     *
     * @return int
     */
    public function getLastFailedCount()
    {
        return $this->container['last_failed_count'];
    }

    /**
     * Sets last_failed_count
     *
     * @param int $last_failed_count Number of fails in sending to this Contact
     *
     * @return $this
     */
    public function setLastFailedCount($last_failed_count)
    {
        $this->container['last_failed_count'] = $last_failed_count;

        return $this;
    }

    /**
     * Gets date_updated
     *
     * @return \DateTime
     */
    public function getDateUpdated()
    {
        return $this->container['date_updated'];
    }

    /**
     * Sets date_updated
     *
     * @param \DateTime $date_updated Last change date
     *
     * @return $this
     */
    public function setDateUpdated($date_updated)
    {
        $this->container['date_updated'] = $date_updated;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source Source of URL of payment
     *
     * @return $this
     */
    public function setSource($source)
    {
        $allowedValues = $this->getSourceAllowableValues();
        if (!in_array($source, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'source', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets error_code
     *
     * @return int
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     *
     * @param int $error_code RFC Error code
     *
     * @return $this
     */
    public function setErrorCode($error_code)
    {
        $this->container['error_code'] = $error_code;

        return $this;
    }

    /**
     * Gets friendly_error_message
     *
     * @return string
     */
    public function getFriendlyErrorMessage()
    {
        return $this->container['friendly_error_message'];
    }

    /**
     * Sets friendly_error_message
     *
     * @param string $friendly_error_message RFC error message
     *
     * @return $this
     */
    public function setFriendlyErrorMessage($friendly_error_message)
    {
        $this->container['friendly_error_message'] = $friendly_error_message;

        return $this;
    }

    /**
     * Gets created_from_ip
     *
     * @return string
     */
    public function getCreatedFromIp()
    {
        return $this->container['created_from_ip'];
    }

    /**
     * Sets created_from_ip
     *
     * @param string $created_from_ip IP address
     *
     * @return $this
     */
    public function setCreatedFromIp($created_from_ip)
    {
        $this->container['created_from_ip'] = $created_from_ip;

        return $this;
    }

    /**
     * Gets consent_ip
     *
     * @return string
     */
    public function getConsentIp()
    {
        return $this->container['consent_ip'];
    }

    /**
     * Sets consent_ip
     *
     * @param string $consent_ip IP address of consent to send this contact(s) your email. If not provided your current public IP address is used for consent.
     *
     * @return $this
     */
    public function setConsentIp($consent_ip)
    {
        $this->container['consent_ip'] = $consent_ip;

        return $this;
    }

    /**
     * Gets consent_date
     *
     * @return \DateTime
     */
    public function getConsentDate()
    {
        return $this->container['consent_date'];
    }

    /**
     * Sets consent_date
     *
     * @param \DateTime $consent_date Date of consent to send this contact(s) your email. If not provided current date is used for consent.
     *
     * @return $this
     */
    public function setConsentDate($consent_date)
    {
        $this->container['consent_date'] = $consent_date;

        return $this;
    }

    /**
     * Gets consent_tracking
     *
     * @return string
     */
    public function getConsentTracking()
    {
        return $this->container['consent_tracking'];
    }

    /**
     * Sets consent_tracking
     *
     * @param string $consent_tracking consent_tracking
     *
     * @return $this
     */
    public function setConsentTracking($consent_tracking)
    {
        $allowedValues = $this->getConsentTrackingAllowableValues();
        if (!in_array($consent_tracking, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'consent_tracking', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['consent_tracking'] = $consent_tracking;

        return $this;
    }

    /**
     * Gets unsubscribed_date
     *
     * @return \DateTime
     */
    public function getUnsubscribedDate()
    {
        return $this->container['unsubscribed_date'];
    }

    /**
     * Sets unsubscribed_date
     *
     * @param \DateTime $unsubscribed_date Unsubscribed date in YYYY-MM-DD format
     *
     * @return $this
     */
    public function setUnsubscribedDate($unsubscribed_date)
    {
        $this->container['unsubscribed_date'] = $unsubscribed_date;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes Free form field of notes
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets website_url
     *
     * @return string
     */
    public function getWebsiteUrl()
    {
        return $this->container['website_url'];
    }

    /**
     * Sets website_url
     *
     * @param string $website_url Website of contact
     *
     * @return $this
     */
    public function setWebsiteUrl($website_url)
    {
        $this->container['website_url'] = $website_url;

        return $this;
    }

    /**
     * Gets last_opened
     *
     * @return \DateTime
     */
    public function getLastOpened()
    {
        return $this->container['last_opened'];
    }

    /**
     * Sets last_opened
     *
     * @param \DateTime $last_opened Date this contact last opened an email
     *
     * @return $this
     */
    public function setLastOpened($last_opened)
    {
        $this->container['last_opened'] = $last_opened;

        return $this;
    }

    /**
     * Gets last_clicked
     *
     * @return \DateTime
     */
    public function getLastClicked()
    {
        return $this->container['last_clicked'];
    }

    /**
     * Sets last_clicked
     *
     * @param \DateTime $last_clicked last_clicked
     *
     * @return $this
     */
    public function setLastClicked($last_clicked)
    {
        $this->container['last_clicked'] = $last_clicked;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return map[string,string]
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param map[string,string] $custom_fields custom_fields
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

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

