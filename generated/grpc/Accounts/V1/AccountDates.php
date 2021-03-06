<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/v1/api.proto

namespace Accounts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * AccountDates is a object representing just the date information connected to an account activation
 * </pre>
 *
 * Protobuf type <code>accounts.v1.AccountDates</code>
 */
class AccountDates extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The Business ID the data belongs to
     * </pre>
     *
     * <code>string business_id = 1;</code>
     */
    private $business_id = '';
    /**
     * <pre>
     * The App Id for the activation
     * </pre>
     *
     * <code>string app_id = 2;</code>
     */
    private $app_id = '';
    /**
     * <pre>
     * Optional: The addon_id of the activation
     * </pre>
     *
     * <code>string addon_id = 3;</code>
     */
    private $addon_id = '';
    /**
     * <pre>
     * The activation id of the activation
     * </pre>
     *
     * <code>string activation_id = 4;</code>
     */
    private $activation_id = '';
    /**
     * <pre>
     * The UTC time the account was turned on
     * </pre>
     *
     * <code>.google.protobuf.Timestamp activation = 5;</code>
     */
    private $activation = null;
    /**
     * <pre>
     * The UTC time the account was turned off
     * </pre>
     *
     * <code>.google.protobuf.Timestamp deactivation = 6;</code>
     */
    private $deactivation = null;
    /**
     * <pre>
     * The UTC time the account will renew. This is the date of the next billing period starting, based off the activation
     * time and the billing frequency
     * </pre>
     *
     * <code>.google.protobuf.Timestamp anniversary_date = 7;</code>
     */
    private $anniversary_date = null;
    /**
     * <pre>
     * The UTC time the account is allowed to deactivate. This is based off the commitment configuration of the app, and
     * the activation time of the account
     * </pre>
     *
     * <code>.google.protobuf.Timestamp commitment_date = 8;</code>
     */
    private $commitment_date = null;

    public function __construct() {
        \GPBMetadata\Accounts\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The Business ID the data belongs to
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
     * The Business ID the data belongs to
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
     * The App Id for the activation
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
     * The App Id for the activation
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
     * Optional: The addon_id of the activation
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
     * Optional: The addon_id of the activation
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
     * The activation id of the activation
     * </pre>
     *
     * <code>string activation_id = 4;</code>
     */
    public function getActivationId()
    {
        return $this->activation_id;
    }

    /**
     * <pre>
     * The activation id of the activation
     * </pre>
     *
     * <code>string activation_id = 4;</code>
     */
    public function setActivationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->activation_id = $var;
    }

    /**
     * <pre>
     * The UTC time the account was turned on
     * </pre>
     *
     * <code>.google.protobuf.Timestamp activation = 5;</code>
     */
    public function getActivation()
    {
        return $this->activation;
    }

    /**
     * <pre>
     * The UTC time the account was turned on
     * </pre>
     *
     * <code>.google.protobuf.Timestamp activation = 5;</code>
     */
    public function setActivation(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->activation = $var;
    }

    /**
     * <pre>
     * The UTC time the account was turned off
     * </pre>
     *
     * <code>.google.protobuf.Timestamp deactivation = 6;</code>
     */
    public function getDeactivation()
    {
        return $this->deactivation;
    }

    /**
     * <pre>
     * The UTC time the account was turned off
     * </pre>
     *
     * <code>.google.protobuf.Timestamp deactivation = 6;</code>
     */
    public function setDeactivation(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->deactivation = $var;
    }

    /**
     * <pre>
     * The UTC time the account will renew. This is the date of the next billing period starting, based off the activation
     * time and the billing frequency
     * </pre>
     *
     * <code>.google.protobuf.Timestamp anniversary_date = 7;</code>
     */
    public function getAnniversaryDate()
    {
        return $this->anniversary_date;
    }

    /**
     * <pre>
     * The UTC time the account will renew. This is the date of the next billing period starting, based off the activation
     * time and the billing frequency
     * </pre>
     *
     * <code>.google.protobuf.Timestamp anniversary_date = 7;</code>
     */
    public function setAnniversaryDate(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->anniversary_date = $var;
    }

    /**
     * <pre>
     * The UTC time the account is allowed to deactivate. This is based off the commitment configuration of the app, and
     * the activation time of the account
     * </pre>
     *
     * <code>.google.protobuf.Timestamp commitment_date = 8;</code>
     */
    public function getCommitmentDate()
    {
        return $this->commitment_date;
    }

    /**
     * <pre>
     * The UTC time the account is allowed to deactivate. This is based off the commitment configuration of the app, and
     * the activation time of the account
     * </pre>
     *
     * <code>.google.protobuf.Timestamp commitment_date = 8;</code>
     */
    public function setCommitmentDate(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->commitment_date = $var;
    }

}

