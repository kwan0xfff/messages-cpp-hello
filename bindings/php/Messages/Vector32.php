<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vector.proto

namespace Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Messages.Vector32</code>
 */
class Vector32 extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Generated from protobuf field <code>int32 components = 2;</code>
     */
    private $components = 0;
    /**
     * Generated from protobuf field <code>bool interleaved = 3;</code>
     */
    private $interleaved = false;
    /**
     * Generated from protobuf field <code>.Messages.Revision revision = 4;</code>
     */
    private $revision = null;
    /**
     *kg m s^2 and such string literals
     *
     * Generated from protobuf field <code>string units = 5;</code>
     */
    private $units = '';
    /**
     *reserved
     *
     * Generated from protobuf field <code>repeated float values = 10 [packed = true];</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type int $components
     *     @type bool $interleaved
     *     @type \Messages\Revision $revision
     *     @type string $units
     *          kg m s^2 and such string literals
     *     @type float[]|\Google\Protobuf\Internal\RepeatedField $values
     *          reserved
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Vector::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 components = 2;</code>
     * @return int
     */
    public function getComponents()
    {
        return $this->components;
    }

    /**
     * Generated from protobuf field <code>int32 components = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setComponents($var)
    {
        GPBUtil::checkInt32($var);
        $this->components = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool interleaved = 3;</code>
     * @return bool
     */
    public function getInterleaved()
    {
        return $this->interleaved;
    }

    /**
     * Generated from protobuf field <code>bool interleaved = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setInterleaved($var)
    {
        GPBUtil::checkBool($var);
        $this->interleaved = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Messages.Revision revision = 4;</code>
     * @return \Messages\Revision
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * Generated from protobuf field <code>.Messages.Revision revision = 4;</code>
     * @param \Messages\Revision $var
     * @return $this
     */
    public function setRevision($var)
    {
        GPBUtil::checkMessage($var, \Messages\Revision::class);
        $this->revision = $var;

        return $this;
    }

    /**
     *kg m s^2 and such string literals
     *
     * Generated from protobuf field <code>string units = 5;</code>
     * @return string
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     *kg m s^2 and such string literals
     *
     * Generated from protobuf field <code>string units = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setUnits($var)
    {
        GPBUtil::checkString($var, True);
        $this->units = $var;

        return $this;
    }

    /**
     *reserved
     *
     * Generated from protobuf field <code>repeated float values = 10 [packed = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     *reserved
     *
     * Generated from protobuf field <code>repeated float values = 10 [packed = true];</code>
     * @param float[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->values = $arr;

        return $this;
    }

}

