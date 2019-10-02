<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/v1/api.proto

namespace Accounts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accounts.v1.ActivateAddonRequest</code>
 */
class ActivateAddonRequest extends \Google\Protobuf\Internal\Message
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
     * The marketplace addon ID.
     * </pre>
     *
     * <code>string addon_id = 3;</code>
     */
    private $addon_id = '';
    /**
     * <pre>
     * The partner ID. Not required if you are authenticating as a partner user.
     * </pre>
     *
     * <code>string partner_id = 4;</code>
     */
    private $partner_id = '';
    /**
     * <pre>
     * The order form submission id, unique per activation.
     * </pre>
     *
     * <code>string order_form_submission_id = 5;</code>
     */
    private $order_form_submission_id = '';
    /**
     * <pre>
     * The time of Activation
     * </pre>
     *
     * <code>.google.protobuf.Timestamp activate_on = 6;</code>
     */
    private $activate_on = null;
    /**
     * <pre>
     * The time to trigger account deactivation.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp deactivate_on = 7;</code>
     */
    private $deactivate_on = null;
    /**
     * <pre>
     * The blame information for this action
     * </pre>
     *
     * <code>.accounts.v1.Blame activation_info = 8;</code>
     */
    private $activation_info = null;

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
     * The marketplace addon ID.
     * </pre>
     *
     * <code>string addon_id = 3;</code>
     */
    public function getAddonId()
    {
        return $this->addon_id;
    }

    /**
     * <pre>
     * The marketplace addon ID.
     * </pre>
     *
     * <code>string addon_id = 3;</code>
     */
    public function setAddonId($var)
    {
        GPBUtil::checkString($var, True);
        $this->addon_id = $var;
    }

    /**
     * <pre>
     * The partner ID. Not required if you are authenticating as a partner user.
     * </pre>
     *
     * <code>string partner_id = 4;</code>
     */
    public function getPartnerId()
    {
        return $this->partner_id;
    }

    /**
     * <pre>
     * The partner ID. Not required if you are authenticating as a partner user.
     * </pre>
     *
     * <code>string partner_id = 4;</code>
     */
    public function setPartnerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->partner_id = $var;
    }

    /**
     * <pre>
     * The order form submission id, unique per activation.
     * </pre>
     *
     * <code>string order_form_submission_id = 5;</code>
     */
    public function getOrderFormSubmissionId()
    {
        return $this->order_form_submission_id;
    }

    /**
     * <pre>
     * The order form submission id, unique per activation.
     * </pre>
     *
     * <code>string order_form_submission_id = 5;</code>
     */
    public function setOrderFormSubmissionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_form_submission_id = $var;
    }

    /**
     * <pre>
     * The time of Activation
     * </pre>
     *
     * <code>.google.protobuf.Timestamp activate_on = 6;</code>
     */
    public function getActivateOn()
    {
        return $this->activate_on;
    }

    /**
     * <pre>
     * The time of Activation
     * </pre>
     *
     * <code>.google.protobuf.Timestamp activate_on = 6;</code>
     */
    public function setActivateOn(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->activate_on = $var;
    }

    /**
     * <pre>
     * The time to trigger account deactivation.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp deactivate_on = 7;</code>
     */
    public function getDeactivateOn()
    {
        return $this->deactivate_on;
    }

    /**
     * <pre>
     * The time to trigger account deactivation.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp deactivate_on = 7;</code>
     */
    public function setDeactivateOn(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->deactivate_on = $var;
    }

    /**
     * <pre>
     * The blame information for this action
     * </pre>
     *
     * <code>.accounts.v1.Blame activation_info = 8;</code>
     */
    public function getActivationInfo()
    {
        return $this->activation_info;
    }

    /**
     * <pre>
     * The blame information for this action
     * </pre>
     *
     * <code>.accounts.v1.Blame activation_info = 8;</code>
     */
    public function setActivationInfo(&$var)
    {
        GPBUtil::checkMessage($var, \Accounts\V1\Blame::class);
        $this->activation_info = $var;
    }

}

