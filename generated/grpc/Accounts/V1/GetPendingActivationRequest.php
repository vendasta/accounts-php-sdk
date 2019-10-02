<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/v1/api.proto

namespace Accounts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accounts.v1.GetPendingActivationRequest</code>
 */
class GetPendingActivationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The activation id
     * </pre>
     *
     * <code>string activation_id = 1;</code>
     */
    private $activation_id = '';
    /**
     * <pre>
     * The business ID of the pending activation
     * </pre>
     *
     * <code>string business_id = 2;</code>
     */
    private $business_id = '';
    /**
     * <pre>
     * The app ID of the pending activation
     * </pre>
     *
     * <code>string app_id = 3;</code>
     */
    private $app_id = '';
    /**
     * <pre>
     * The account id
     * </pre>
     *
     * <code>string account_id = 4;</code>
     */
    private $account_id = '';

    public function __construct() {
        \GPBMetadata\Accounts\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The activation id
     * </pre>
     *
     * <code>string activation_id = 1;</code>
     */
    public function getActivationId()
    {
        return $this->activation_id;
    }

    /**
     * <pre>
     * The activation id
     * </pre>
     *
     * <code>string activation_id = 1;</code>
     */
    public function setActivationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->activation_id = $var;
    }

    /**
     * <pre>
     * The business ID of the pending activation
     * </pre>
     *
     * <code>string business_id = 2;</code>
     */
    public function getBusinessId()
    {
        return $this->business_id;
    }

    /**
     * <pre>
     * The business ID of the pending activation
     * </pre>
     *
     * <code>string business_id = 2;</code>
     */
    public function setBusinessId($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_id = $var;
    }

    /**
     * <pre>
     * The app ID of the pending activation
     * </pre>
     *
     * <code>string app_id = 3;</code>
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * <pre>
     * The app ID of the pending activation
     * </pre>
     *
     * <code>string app_id = 3;</code>
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;
    }

    /**
     * <pre>
     * The account id
     * </pre>
     *
     * <code>string account_id = 4;</code>
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     * <pre>
     * The account id
     * </pre>
     *
     * <code>string account_id = 4;</code>
     */
    public function setAccountId($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_id = $var;
    }

}
