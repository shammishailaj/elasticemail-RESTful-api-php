<?php
/**
 * ReputationHistory
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
 * ReputationHistory Class Doc Comment
 *
 * @category Class
 * @description Reputation history of your account.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReputationHistory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReputationHistory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date_created' => 'string',
        'abuse_percent' => 'double',
        'unknown_users_percent' => 'double',
        'opened_percent' => 'double',
        'clicked_percent' => 'double',
        'average_spam_score' => 'double',
        'setup_score' => 'double',
        'rep_emails_sent' => 'double',
        'reputation' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date_created' => 'string',
        'abuse_percent' => 'double',
        'unknown_users_percent' => 'double',
        'opened_percent' => 'double',
        'clicked_percent' => 'double',
        'average_spam_score' => 'double',
        'setup_score' => 'double',
        'rep_emails_sent' => 'double',
        'reputation' => 'double'
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
        'date_created' => 'DateCreated',
        'abuse_percent' => 'AbusePercent',
        'unknown_users_percent' => 'UnknownUsersPercent',
        'opened_percent' => 'OpenedPercent',
        'clicked_percent' => 'ClickedPercent',
        'average_spam_score' => 'AverageSpamScore',
        'setup_score' => 'SetupScore',
        'rep_emails_sent' => 'RepEmailsSent',
        'reputation' => 'Reputation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_created' => 'setDateCreated',
        'abuse_percent' => 'setAbusePercent',
        'unknown_users_percent' => 'setUnknownUsersPercent',
        'opened_percent' => 'setOpenedPercent',
        'clicked_percent' => 'setClickedPercent',
        'average_spam_score' => 'setAverageSpamScore',
        'setup_score' => 'setSetupScore',
        'rep_emails_sent' => 'setRepEmailsSent',
        'reputation' => 'setReputation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_created' => 'getDateCreated',
        'abuse_percent' => 'getAbusePercent',
        'unknown_users_percent' => 'getUnknownUsersPercent',
        'opened_percent' => 'getOpenedPercent',
        'clicked_percent' => 'getClickedPercent',
        'average_spam_score' => 'getAverageSpamScore',
        'setup_score' => 'getSetupScore',
        'rep_emails_sent' => 'getRepEmailsSent',
        'reputation' => 'getReputation'
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
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
        $this->container['abuse_percent'] = isset($data['abuse_percent']) ? $data['abuse_percent'] : null;
        $this->container['unknown_users_percent'] = isset($data['unknown_users_percent']) ? $data['unknown_users_percent'] : null;
        $this->container['opened_percent'] = isset($data['opened_percent']) ? $data['opened_percent'] : null;
        $this->container['clicked_percent'] = isset($data['clicked_percent']) ? $data['clicked_percent'] : null;
        $this->container['average_spam_score'] = isset($data['average_spam_score']) ? $data['average_spam_score'] : null;
        $this->container['setup_score'] = isset($data['setup_score']) ? $data['setup_score'] : null;
        $this->container['rep_emails_sent'] = isset($data['rep_emails_sent']) ? $data['rep_emails_sent'] : null;
        $this->container['reputation'] = isset($data['reputation']) ? $data['reputation'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['date_created'] === null) {
            $invalidProperties[] = "'date_created' can't be null";
        }
        if ($this->container['abuse_percent'] === null) {
            $invalidProperties[] = "'abuse_percent' can't be null";
        }
        if ($this->container['unknown_users_percent'] === null) {
            $invalidProperties[] = "'unknown_users_percent' can't be null";
        }
        if ($this->container['opened_percent'] === null) {
            $invalidProperties[] = "'opened_percent' can't be null";
        }
        if ($this->container['clicked_percent'] === null) {
            $invalidProperties[] = "'clicked_percent' can't be null";
        }
        if ($this->container['average_spam_score'] === null) {
            $invalidProperties[] = "'average_spam_score' can't be null";
        }
        if ($this->container['setup_score'] === null) {
            $invalidProperties[] = "'setup_score' can't be null";
        }
        if ($this->container['rep_emails_sent'] === null) {
            $invalidProperties[] = "'rep_emails_sent' can't be null";
        }
        if ($this->container['reputation'] === null) {
            $invalidProperties[] = "'reputation' can't be null";
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

        if ($this->container['date_created'] === null) {
            return false;
        }
        if ($this->container['abuse_percent'] === null) {
            return false;
        }
        if ($this->container['unknown_users_percent'] === null) {
            return false;
        }
        if ($this->container['opened_percent'] === null) {
            return false;
        }
        if ($this->container['clicked_percent'] === null) {
            return false;
        }
        if ($this->container['average_spam_score'] === null) {
            return false;
        }
        if ($this->container['setup_score'] === null) {
            return false;
        }
        if ($this->container['rep_emails_sent'] === null) {
            return false;
        }
        if ($this->container['reputation'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets date_created
     *
     * @return string
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param string $date_created Creation date.
     *
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets abuse_percent
     *
     * @return double
     */
    public function getAbusePercent()
    {
        return $this->container['abuse_percent'];
    }

    /**
     * Sets abuse_percent
     *
     * @param double $abuse_percent Percent of Complaining users - those, who do not want to receive email from you.
     *
     * @return $this
     */
    public function setAbusePercent($abuse_percent)
    {
        $this->container['abuse_percent'] = $abuse_percent;

        return $this;
    }

    /**
     * Gets unknown_users_percent
     *
     * @return double
     */
    public function getUnknownUsersPercent()
    {
        return $this->container['unknown_users_percent'];
    }

    /**
     * Sets unknown_users_percent
     *
     * @param double $unknown_users_percent Percent of Unknown users - users that couldn't be found
     *
     * @return $this
     */
    public function setUnknownUsersPercent($unknown_users_percent)
    {
        $this->container['unknown_users_percent'] = $unknown_users_percent;

        return $this;
    }

    /**
     * Gets opened_percent
     *
     * @return double
     */
    public function getOpenedPercent()
    {
        return $this->container['opened_percent'];
    }

    /**
     * Sets opened_percent
     *
     * @param double $opened_percent opened_percent
     *
     * @return $this
     */
    public function setOpenedPercent($opened_percent)
    {
        $this->container['opened_percent'] = $opened_percent;

        return $this;
    }

    /**
     * Gets clicked_percent
     *
     * @return double
     */
    public function getClickedPercent()
    {
        return $this->container['clicked_percent'];
    }

    /**
     * Sets clicked_percent
     *
     * @param double $clicked_percent clicked_percent
     *
     * @return $this
     */
    public function setClickedPercent($clicked_percent)
    {
        $this->container['clicked_percent'] = $clicked_percent;

        return $this;
    }

    /**
     * Gets average_spam_score
     *
     * @return double
     */
    public function getAverageSpamScore()
    {
        return $this->container['average_spam_score'];
    }

    /**
     * Sets average_spam_score
     *
     * @param double $average_spam_score Penalty from messages marked as spam.
     *
     * @return $this
     */
    public function setAverageSpamScore($average_spam_score)
    {
        $this->container['average_spam_score'] = $average_spam_score;

        return $this;
    }

    /**
     * Gets setup_score
     *
     * @return double
     */
    public function getSetupScore()
    {
        return $this->container['setup_score'];
    }

    /**
     * Sets setup_score
     *
     * @param double $setup_score Points from proper setup of your account
     *
     * @return $this
     */
    public function setSetupScore($setup_score)
    {
        $this->container['setup_score'] = $setup_score;

        return $this;
    }

    /**
     * Gets rep_emails_sent
     *
     * @return double
     */
    public function getRepEmailsSent()
    {
        return $this->container['rep_emails_sent'];
    }

    /**
     * Sets rep_emails_sent
     *
     * @param double $rep_emails_sent Points from quantity of your emails.
     *
     * @return $this
     */
    public function setRepEmailsSent($rep_emails_sent)
    {
        $this->container['rep_emails_sent'] = $rep_emails_sent;

        return $this;
    }

    /**
     * Gets reputation
     *
     * @return double
     */
    public function getReputation()
    {
        return $this->container['reputation'];
    }

    /**
     * Sets reputation
     *
     * @param double $reputation Numeric reputation
     *
     * @return $this
     */
    public function setReputation($reputation)
    {
        $this->container['reputation'] = $reputation;

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


