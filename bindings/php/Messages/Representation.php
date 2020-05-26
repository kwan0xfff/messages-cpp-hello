<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meta.proto

namespace Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Messages.Representation</code>
 */
class Representation extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string property_key = 1;</code>
     */
    private $property_key = '';
    /**
     * Generated from protobuf field <code>int32 color_map = 2;</code>
     */
    private $color_map = 0;
    /**
     * Generated from protobuf field <code>int32 component = 3;</code>
     */
    private $component = 0;
    /**
     * Generated from protobuf field <code>bool auto_range = 4;</code>
     */
    private $auto_range = false;
    /**
     * Generated from protobuf field <code>bool use_default_key = 5;</code>
     */
    private $use_default_key = false;
    /**
     * Generated from protobuf field <code>bool color_out_of_range = 6;</code>
     */
    private $color_out_of_range = false;
    /**
     * Generated from protobuf field <code>bool use_magnitude = 7;</code>
     */
    private $use_magnitude = false;
    /**
     * Generated from protobuf field <code>bool show_displacement = 8;</code>
     */
    private $show_displacement = false;
    /**
     *reserved
     *
     * Generated from protobuf field <code>repeated float range = 10;</code>
     */
    private $range;
    /**
     * Generated from protobuf field <code>repeated float displacement_scale = 11;</code>
     */
    private $displacement_scale;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $property_key
     *     @type int $color_map
     *     @type int $component
     *     @type bool $auto_range
     *     @type bool $use_default_key
     *     @type bool $color_out_of_range
     *     @type bool $use_magnitude
     *     @type bool $show_displacement
     *     @type float[]|\Google\Protobuf\Internal\RepeatedField $range
     *          reserved
     *     @type float[]|\Google\Protobuf\Internal\RepeatedField $displacement_scale
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Meta::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string property_key = 1;</code>
     * @return string
     */
    public function getPropertyKey()
    {
        return $this->property_key;
    }

    /**
     * Generated from protobuf field <code>string property_key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPropertyKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->property_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 color_map = 2;</code>
     * @return int
     */
    public function getColorMap()
    {
        return $this->color_map;
    }

    /**
     * Generated from protobuf field <code>int32 color_map = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setColorMap($var)
    {
        GPBUtil::checkInt32($var);
        $this->color_map = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 component = 3;</code>
     * @return int
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * Generated from protobuf field <code>int32 component = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setComponent($var)
    {
        GPBUtil::checkInt32($var);
        $this->component = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool auto_range = 4;</code>
     * @return bool
     */
    public function getAutoRange()
    {
        return $this->auto_range;
    }

    /**
     * Generated from protobuf field <code>bool auto_range = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoRange($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_range = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool use_default_key = 5;</code>
     * @return bool
     */
    public function getUseDefaultKey()
    {
        return $this->use_default_key;
    }

    /**
     * Generated from protobuf field <code>bool use_default_key = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setUseDefaultKey($var)
    {
        GPBUtil::checkBool($var);
        $this->use_default_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool color_out_of_range = 6;</code>
     * @return bool
     */
    public function getColorOutOfRange()
    {
        return $this->color_out_of_range;
    }

    /**
     * Generated from protobuf field <code>bool color_out_of_range = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setColorOutOfRange($var)
    {
        GPBUtil::checkBool($var);
        $this->color_out_of_range = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool use_magnitude = 7;</code>
     * @return bool
     */
    public function getUseMagnitude()
    {
        return $this->use_magnitude;
    }

    /**
     * Generated from protobuf field <code>bool use_magnitude = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setUseMagnitude($var)
    {
        GPBUtil::checkBool($var);
        $this->use_magnitude = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool show_displacement = 8;</code>
     * @return bool
     */
    public function getShowDisplacement()
    {
        return $this->show_displacement;
    }

    /**
     * Generated from protobuf field <code>bool show_displacement = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setShowDisplacement($var)
    {
        GPBUtil::checkBool($var);
        $this->show_displacement = $var;

        return $this;
    }

    /**
     *reserved
     *
     * Generated from protobuf field <code>repeated float range = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     *reserved
     *
     * Generated from protobuf field <code>repeated float range = 10;</code>
     * @param float[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRange($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->range = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated float displacement_scale = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDisplacementScale()
    {
        return $this->displacement_scale;
    }

    /**
     * Generated from protobuf field <code>repeated float displacement_scale = 11;</code>
     * @param float[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDisplacementScale($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->displacement_scale = $arr;

        return $this;
    }

}

