<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meta.proto

namespace Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *metaobject backbone -- created and staged in server visuals (for transmission) to populate client metaobjects
 *
 * Generated from protobuf message <code>Messages.Meta</code>
 */
class Meta extends \Google\Protobuf\Internal\Message
{
    /**
     *unique identifier that persists between sessions
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Generated from protobuf field <code>string icon = 2;</code>
     */
    private $icon = '';
    /**
     * Generated from protobuf field <code>string owner = 3;</code>
     */
    private $owner = '';
    /**
     * Generated from protobuf field <code>string comments = 4;</code>
     */
    private $comments = '';
    /**
     * Generated from protobuf field <code>string series = 5;</code>
     */
    private $series = '';
    /**
     * Generated from protobuf field <code>string sys_info = 6;</code>
     */
    private $sys_info = '';
    /**
     * Generated from protobuf field <code>string geom_info = 7;</code>
     */
    private $geom_info = '';
    /**
     * Generated from protobuf field <code>string directory = 8;</code>
     */
    private $directory = '';
    /**
     *universal id for each system assigned, valid only within a given session
     *
     * Generated from protobuf field <code>int64 uid = 9;</code>
     */
    private $uid = 0;
    /**
     * Generated from protobuf field <code>int64 parent = 10;</code>
     */
    private $parent = 0;
    /**
     *unix time 
     *
     * Generated from protobuf field <code>int64 created = 11;</code>
     */
    private $created = 0;
    /**
     * Generated from protobuf field <code>int64 saved = 12;</code>
     */
    private $saved = 0;
    /**
     * Generated from protobuf field <code>int64 modified = 13;</code>
     */
    private $modified = 0;
    /**
     * Generated from protobuf field <code>int64 iteration = 14;</code>
     */
    private $iteration = 0;
    /**
     * Generated from protobuf field <code>int64 save_interval = 15;</code>
     */
    private $save_interval = 0;
    /**
     * Generated from protobuf field <code>bool enabled = 16;</code>
     */
    private $enabled = false;
    /**
     * Generated from protobuf field <code>bool locked = 17;</code>
     */
    private $locked = false;
    /**
     * Generated from protobuf field <code>bool auto_save = 18;</code>
     */
    private $auto_save = false;
    /**
     *reserved
     *
     * Generated from protobuf field <code>.Messages.Revision revision = 20;</code>
     */
    private $revision = null;
    /**
     * Generated from protobuf field <code>.Messages.Revision version = 21;</code>
     */
    private $version = null;
    /**
     * Generated from protobuf field <code>.Messages.Extrema bounds = 22;</code>
     */
    private $bounds = null;
    /**
     * Generated from protobuf field <code>.Messages.GraphicsControl appearance = 24;</code>
     */
    private $appearance = null;
    /**
     *uid's (only good within a given session. see system.proto for persistent relationships)
     *
     * Generated from protobuf field <code>repeated int64 children = 25;</code>
     */
    private $children;
    /**
     * Generated from protobuf field <code>repeated int32 groups = 26;</code>
     */
    private $groups;
    /**
     * Generated from protobuf field <code>repeated int32 loops = 27;</code>
     */
    private $loops;
    /**
     * Generated from protobuf field <code>repeated int32 surfaces = 28;</code>
     */
    private $surfaces;
    /**
     * Generated from protobuf field <code>repeated int32 volumes = 29;</code>
     */
    private $volumes;
    /**
     *dmat4 (aka MAT4 transformation matrix)
     *
     * Generated from protobuf field <code>repeated double model_transform = 30;</code>
     */
    private $model_transform;
    /**
     *serialized property-keys, used to request Vector32 or Vector64 data
     *
     * Generated from protobuf field <code>repeated string properties = 31;</code>
     */
    private $properties;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *          unique identifier that persists between sessions
     *     @type string $icon
     *     @type string $owner
     *     @type string $comments
     *     @type string $series
     *     @type string $sys_info
     *     @type string $geom_info
     *     @type string $directory
     *     @type int|string $uid
     *          universal id for each system assigned, valid only within a given session
     *     @type int|string $parent
     *     @type int|string $created
     *          unix time 
     *     @type int|string $saved
     *     @type int|string $modified
     *     @type int|string $iteration
     *     @type int|string $save_interval
     *     @type bool $enabled
     *     @type bool $locked
     *     @type bool $auto_save
     *     @type \Messages\Revision $revision
     *          reserved
     *     @type \Messages\Revision $version
     *     @type \Messages\Extrema $bounds
     *     @type \Messages\GraphicsControl $appearance
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $children
     *          uid's (only good within a given session. see system.proto for persistent relationships)
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $groups
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $loops
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $surfaces
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $volumes
     *     @type float[]|\Google\Protobuf\Internal\RepeatedField $model_transform
     *          dmat4 (aka MAT4 transformation matrix)
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $properties
     *          serialized property-keys, used to request Vector32 or Vector64 data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Meta::initOnce();
        parent::__construct($data);
    }

    /**
     *unique identifier that persists between sessions
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *unique identifier that persists between sessions
     *
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
     * Generated from protobuf field <code>string icon = 2;</code>
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Generated from protobuf field <code>string icon = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setIcon($var)
    {
        GPBUtil::checkString($var, True);
        $this->icon = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string owner = 3;</code>
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Generated from protobuf field <code>string owner = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOwner($var)
    {
        GPBUtil::checkString($var, True);
        $this->owner = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string comments = 4;</code>
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Generated from protobuf field <code>string comments = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setComments($var)
    {
        GPBUtil::checkString($var, True);
        $this->comments = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string series = 5;</code>
     * @return string
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * Generated from protobuf field <code>string series = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSeries($var)
    {
        GPBUtil::checkString($var, True);
        $this->series = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string sys_info = 6;</code>
     * @return string
     */
    public function getSysInfo()
    {
        return $this->sys_info;
    }

    /**
     * Generated from protobuf field <code>string sys_info = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setSysInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->sys_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string geom_info = 7;</code>
     * @return string
     */
    public function getGeomInfo()
    {
        return $this->geom_info;
    }

    /**
     * Generated from protobuf field <code>string geom_info = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setGeomInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->geom_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string directory = 8;</code>
     * @return string
     */
    public function getDirectory()
    {
        return $this->directory;
    }

    /**
     * Generated from protobuf field <code>string directory = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDirectory($var)
    {
        GPBUtil::checkString($var, True);
        $this->directory = $var;

        return $this;
    }

    /**
     *universal id for each system assigned, valid only within a given session
     *
     * Generated from protobuf field <code>int64 uid = 9;</code>
     * @return int|string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     *universal id for each system assigned, valid only within a given session
     *
     * Generated from protobuf field <code>int64 uid = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkInt64($var);
        $this->uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 parent = 10;</code>
     * @return int|string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Generated from protobuf field <code>int64 parent = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkInt64($var);
        $this->parent = $var;

        return $this;
    }

    /**
     *unix time 
     *
     * Generated from protobuf field <code>int64 created = 11;</code>
     * @return int|string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     *unix time 
     *
     * Generated from protobuf field <code>int64 created = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreated($var)
    {
        GPBUtil::checkInt64($var);
        $this->created = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 saved = 12;</code>
     * @return int|string
     */
    public function getSaved()
    {
        return $this->saved;
    }

    /**
     * Generated from protobuf field <code>int64 saved = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSaved($var)
    {
        GPBUtil::checkInt64($var);
        $this->saved = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 modified = 13;</code>
     * @return int|string
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Generated from protobuf field <code>int64 modified = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setModified($var)
    {
        GPBUtil::checkInt64($var);
        $this->modified = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 iteration = 14;</code>
     * @return int|string
     */
    public function getIteration()
    {
        return $this->iteration;
    }

    /**
     * Generated from protobuf field <code>int64 iteration = 14;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIteration($var)
    {
        GPBUtil::checkInt64($var);
        $this->iteration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 save_interval = 15;</code>
     * @return int|string
     */
    public function getSaveInterval()
    {
        return $this->save_interval;
    }

    /**
     * Generated from protobuf field <code>int64 save_interval = 15;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSaveInterval($var)
    {
        GPBUtil::checkInt64($var);
        $this->save_interval = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool enabled = 16;</code>
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Generated from protobuf field <code>bool enabled = 16;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool locked = 17;</code>
     * @return bool
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Generated from protobuf field <code>bool locked = 17;</code>
     * @param bool $var
     * @return $this
     */
    public function setLocked($var)
    {
        GPBUtil::checkBool($var);
        $this->locked = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool auto_save = 18;</code>
     * @return bool
     */
    public function getAutoSave()
    {
        return $this->auto_save;
    }

    /**
     * Generated from protobuf field <code>bool auto_save = 18;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoSave($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_save = $var;

        return $this;
    }

    /**
     *reserved
     *
     * Generated from protobuf field <code>.Messages.Revision revision = 20;</code>
     * @return \Messages\Revision
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     *reserved
     *
     * Generated from protobuf field <code>.Messages.Revision revision = 20;</code>
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
     * Generated from protobuf field <code>.Messages.Revision version = 21;</code>
     * @return \Messages\Revision
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>.Messages.Revision version = 21;</code>
     * @param \Messages\Revision $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkMessage($var, \Messages\Revision::class);
        $this->version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Messages.Extrema bounds = 22;</code>
     * @return \Messages\Extrema
     */
    public function getBounds()
    {
        return $this->bounds;
    }

    /**
     * Generated from protobuf field <code>.Messages.Extrema bounds = 22;</code>
     * @param \Messages\Extrema $var
     * @return $this
     */
    public function setBounds($var)
    {
        GPBUtil::checkMessage($var, \Messages\Extrema::class);
        $this->bounds = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Messages.GraphicsControl appearance = 24;</code>
     * @return \Messages\GraphicsControl
     */
    public function getAppearance()
    {
        return $this->appearance;
    }

    /**
     * Generated from protobuf field <code>.Messages.GraphicsControl appearance = 24;</code>
     * @param \Messages\GraphicsControl $var
     * @return $this
     */
    public function setAppearance($var)
    {
        GPBUtil::checkMessage($var, \Messages\GraphicsControl::class);
        $this->appearance = $var;

        return $this;
    }

    /**
     *uid's (only good within a given session. see system.proto for persistent relationships)
     *
     * Generated from protobuf field <code>repeated int64 children = 25;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     *uid's (only good within a given session. see system.proto for persistent relationships)
     *
     * Generated from protobuf field <code>repeated int64 children = 25;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChildren($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->children = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 groups = 26;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Generated from protobuf field <code>repeated int32 groups = 26;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->groups = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 loops = 27;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLoops()
    {
        return $this->loops;
    }

    /**
     * Generated from protobuf field <code>repeated int32 loops = 27;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLoops($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->loops = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 surfaces = 28;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSurfaces()
    {
        return $this->surfaces;
    }

    /**
     * Generated from protobuf field <code>repeated int32 surfaces = 28;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSurfaces($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->surfaces = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 volumes = 29;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVolumes()
    {
        return $this->volumes;
    }

    /**
     * Generated from protobuf field <code>repeated int32 volumes = 29;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVolumes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->volumes = $arr;

        return $this;
    }

    /**
     *dmat4 (aka MAT4 transformation matrix)
     *
     * Generated from protobuf field <code>repeated double model_transform = 30;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getModelTransform()
    {
        return $this->model_transform;
    }

    /**
     *dmat4 (aka MAT4 transformation matrix)
     *
     * Generated from protobuf field <code>repeated double model_transform = 30;</code>
     * @param float[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setModelTransform($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::DOUBLE);
        $this->model_transform = $arr;

        return $this;
    }

    /**
     *serialized property-keys, used to request Vector32 or Vector64 data
     *
     * Generated from protobuf field <code>repeated string properties = 31;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     *serialized property-keys, used to request Vector32 or Vector64 data
     *
     * Generated from protobuf field <code>repeated string properties = 31;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProperties($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->properties = $arr;

        return $this;
    }

}

