<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/v1/api.proto

namespace Accounts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accounts.v1.CanActivateRequest</code>
 */
class CanActivateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * a list of app ids that are attempting to be activated
     * </pre>
     *
     * <code>repeated string app_ids = 1;</code>
     */
    private $app_ids;
    /**
     * <pre>
     * the business the apps are attempting to be activated on
     * </pre>
     *
     * <code>string business_id = 2;</code>
     */
    private $business_id = '';

    public function __construct() {
        \GPBMetadata\Accounts\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * a list of app ids that are attempting to be activated
     * </pre>
     *
     * <code>repeated string app_ids = 1;</code>
     */
    public function getAppIds()
    {
        return $this->app_ids;
    }

    /**
     * <pre>
     * a list of app ids that are attempting to be activated
     * </pre>
     *
     * <code>repeated string app_ids = 1;</code>
     */
    public function setAppIds(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->app_ids = $arr;
    }

    /**
     * <pre>
     * the business the apps are attempting to be activated on
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
     * the business the apps are attempting to be activated on
     * </pre>
     *
     * <code>string business_id = 2;</code>
     */
    public function setBusinessId($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_id = $var;
    }

}

