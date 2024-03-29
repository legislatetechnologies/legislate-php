<?php
/**
 * CollaboratorFieldsRequestDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Legislate API
 *
 * The Legislate API is organized around REST. Our API has predictable resource-oriented URLs, accepts form-encoded request bodies, returns JSON-encoded responses, and uses standard HTTP response codes, authentication, and verbs.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.34
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
 * CollaboratorFieldsRequestDTO Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CollaboratorFieldsRequestDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CollaboratorFieldsRequestDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email' => 'string',
'identity_fields' => '\Swagger\Client\Model\CreateCollaboratorIdentityFieldV1DTO[]',
'inviter_id' => 'int',
'role' => 'string[]',
'side' => 'string',
'signatory_id' => 'int',
'user_id' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'email' => null,
'identity_fields' => null,
'inviter_id' => 'int64',
'role' => null,
'side' => null,
'signatory_id' => 'int64',
'user_id' => 'int64'    ];

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
        'email' => 'email',
'identity_fields' => 'identityFields',
'inviter_id' => 'inviterId',
'role' => 'role',
'side' => 'side',
'signatory_id' => 'signatoryId',
'user_id' => 'userId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
'identity_fields' => 'setIdentityFields',
'inviter_id' => 'setInviterId',
'role' => 'setRole',
'side' => 'setSide',
'signatory_id' => 'setSignatoryId',
'user_id' => 'setUserId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
'identity_fields' => 'getIdentityFields',
'inviter_id' => 'getInviterId',
'role' => 'getRole',
'side' => 'getSide',
'signatory_id' => 'getSignatoryId',
'user_id' => 'getUserId'    ];

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

    const ROLE_COLLABORATOR = 'collaborator';
const ROLE_PARTY = 'party';
const ROLE_PARTY_WITH_SIGNATORY = 'party_with_signatory';
const ROLE_SIGNATORY = 'signatory';
const ROLE_SUPP_SIG = 'supp_sig';
const ROLE_WITNESS = 'witness';
const SIDE_BOTH = 'both';
const SIDE_FIRST = 'first';
const SIDE_SECOND = 'second';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE_COLLABORATOR,
self::ROLE_PARTY,
self::ROLE_PARTY_WITH_SIGNATORY,
self::ROLE_SIGNATORY,
self::ROLE_SUPP_SIG,
self::ROLE_WITNESS,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSideAllowableValues()
    {
        return [
            self::SIDE_BOTH,
self::SIDE_FIRST,
self::SIDE_SECOND,        ];
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['identity_fields'] = isset($data['identity_fields']) ? $data['identity_fields'] : null;
        $this->container['inviter_id'] = isset($data['inviter_id']) ? $data['inviter_id'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['side'] = isset($data['side']) ? $data['side'] : null;
        $this->container['signatory_id'] = isset($data['signatory_id']) ? $data['signatory_id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['identity_fields'] === null) {
            $invalidProperties[] = "'identity_fields' can't be null";
        }
        if ($this->container['inviter_id'] === null) {
            $invalidProperties[] = "'inviter_id' can't be null";
        }
        if ($this->container['role'] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
        if ($this->container['side'] === null) {
            $invalidProperties[] = "'side' can't be null";
        }
        $allowedValues = $this->getSideAllowableValues();
        if (!is_null($this->container['side']) && !in_array($this->container['side'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'side', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
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
     * @param string $email The unique email of the contract collaborator. Deprecated: Will be removed in v2.0.0
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets identity_fields
     *
     * @return \Swagger\Client\Model\CreateCollaboratorIdentityFieldV1DTO[]
     */
    public function getIdentityFields()
    {
        return $this->container['identity_fields'];
    }

    /**
     * Sets identity_fields
     *
     * @param \Swagger\Client\Model\CreateCollaboratorIdentityFieldV1DTO[] $identity_fields The identity fields of the contract collaborator.
     *
     * @return $this
     */
    public function setIdentityFields($identity_fields)
    {
        $this->container['identity_fields'] = $identity_fields;

        return $this;
    }

    /**
     * Gets inviter_id
     *
     * @return int
     */
    public function getInviterId()
    {
        return $this->container['inviter_id'];
    }

    /**
     * Sets inviter_id
     *
     * @param int $inviter_id The unique Id of the user who is inviting the collaborator to the contract.
     *
     * @return $this
     */
    public function setInviterId($inviter_id)
    {
        $this->container['inviter_id'] = $inviter_id;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string[]
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string[] $role The role of contract collaborator.
     *
     * @return $this
     */
    public function setRole($role)
    {
        $allowedValues = $this->getRoleAllowableValues();
        if (array_diff($role, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'role', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets side
     *
     * @return string
     */
    public function getSide()
    {
        return $this->container['side'];
    }

    /**
     * Sets side
     *
     * @param string $side The side of contract collaborator.
     *
     * @return $this
     */
    public function setSide($side)
    {
        $allowedValues = $this->getSideAllowableValues();
        if (!in_array($side, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'side', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['side'] = $side;

        return $this;
    }

    /**
     * Gets signatory_id
     *
     * @return int
     */
    public function getSignatoryId()
    {
        return $this->container['signatory_id'];
    }

    /**
     * Sets signatory_id
     *
     * @param int $signatory_id The unique Id of the contract signatory who is going to sign the contract on behalf of the party / company.
     *
     * @return $this
     */
    public function setSignatoryId($signatory_id)
    {
        $this->container['signatory_id'] = $signatory_id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id The unique Id of the contract collaborator you are adding to the contract.
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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
