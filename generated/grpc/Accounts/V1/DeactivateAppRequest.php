<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/v1/api.proto

namespace Accounts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accounts.v1.DeactivateAppRequest</code>
 */
class DeactivateAppRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The business ID.
     * </pre>
     *
     * <code>string business_id = 1;</code>
     */
    private $business_id = '';
    /**
     * <pre>
     * The marketplace application ID.
     * </pre>
     *
     * <code>string app_id = 2;</code>
     */
    private $app_id = '';
    /**
     * <pre>
     * The blame information for this action
     * </pre>
     *
     * <code>.accounts.v1.Blame deactivation_info = 3;</code>
     */
    private $deactivation_info = null;
    /**
     * <pre>
     * The type of deactivation to perform
     * </pre>
     *
     * <code>.accounts.v1.DeactivationType deactivation_type = 4;</code>
     */
    private $deactivation_type = 0;
    /**
     * <pre>
     * The activationID to be deactivated. It is required when the app is multi-activatable.
     * </pre>
     *
     * <code>string activation_id = 5;</code>
     */
    private $activation_id = '';

    public function __construct() {
        \GPBMetadata\Accounts\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The business ID.
     * </pre>
     *
     * <code>string business_id = 1;</code>
     */
    public function getBusinessId()
    {
        return $this->business_id;
    }

    /**
     * <pre>
     * The business ID.
     * </pre>
     *
     * <code>string business_id = 1;</code>
     */
    public function setBusinessId($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_id = $var;
    }

    /**
     * <pre>
     * The marketplace application ID.
     * </pre>
     *
     * <code>string app_id = 2;</code>
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * <pre>
     * The marketplace application ID.
     * </pre>
     *
     * <code>string app_id = 2;</code>
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;
    }

    /**
     * <pre>
     * The blame information for this action
     * </pre>
     *
     * <code>.accounts.v1.Blame deactivation_info = 3;</code>
     */
    public function getDeactivationInfo()
    {
        return $this->deactivation_info;
    }

    /**
     * <pre>
     * The blame information for this action
     * </pre>
     *
     * <code>.accounts.v1.Blame deactivation_info = 3;</code>
     */
    public function setDeactivationInfo(&$var)
    {
        GPBUtil::checkMessage($var, \Accounts\V1\Blame::class);
        $this->deactivation_info = $var;
    }

    /**
     * <pre>
     * The type of deactivation to perform
     * </pre>
     *
     * <code>.accounts.v1.DeactivationType deactivation_type = 4;</code>
     */
    public function getDeactivationType()
    {
        return $this->deactivation_type;
    }

    /**
     * <pre>
     * The type of deactivation to perform
     * </pre>
     *
     * <code>.accounts.v1.DeactivationType deactivation_type = 4;</code>
     */
    public function setDeactivationType($var)
    {
        GPBUtil::checkEnum($var, \Accounts\V1\DeactivationType::class);
        $this->deactivation_type = $var;
    }

    /**
     * <pre>
     * The activationID to be deactivated. It is required when the app is multi-activatable.
     * </pre>
     *
     * <code>string activation_id = 5;</code>
     */
    public function getActivationId()
    {
        return $this->activation_id;
    }

    /**
     * <pre>
     * The activationID to be deactivated. It is required when the app is multi-activatable.
     * </pre>
     *
     * <code>string activation_id = 5;</code>
     */
    public function setActivationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->activation_id = $var;
    }

}

