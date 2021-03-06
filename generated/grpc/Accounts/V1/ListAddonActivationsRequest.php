<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/v1/api.proto

namespace Accounts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accounts.v1.ListAddonActivationsRequest</code>
 */
class ListAddonActivationsRequest extends \Google\Protobuf\Internal\Message
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

}

