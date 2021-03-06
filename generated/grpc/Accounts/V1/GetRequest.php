<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/v1/api.proto

namespace Accounts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accounts.v1.GetRequest</code>
 */
class GetRequest extends \Google\Protobuf\Internal\Message
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
     * Deprecated: The unique identifier of the account in the application that corresponds to the business
     * </pre>
     *
     * <code>string account_id = 3;</code>
     */
    private $account_id = '';
    /**
     * <pre>
     * Deprecated: The unique identifier for the legacy Vendasta application being retrieved
     * </pre>
     *
     * <code>string product_id = 4;</code>
     */
    private $product_id = '';
    /**
     * <pre>
     * Optional id of the partner
     * </pre>
     *
     * <code>string partner_id = 5;</code>
     */
    private $partner_id = '';

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
     * Deprecated: The unique identifier of the account in the application that corresponds to the business
     * </pre>
     *
     * <code>string account_id = 3;</code>
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     * <pre>
     * Deprecated: The unique identifier of the account in the application that corresponds to the business
     * </pre>
     *
     * <code>string account_id = 3;</code>
     */
    public function setAccountId($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_id = $var;
    }

    /**
     * <pre>
     * Deprecated: The unique identifier for the legacy Vendasta application being retrieved
     * </pre>
     *
     * <code>string product_id = 4;</code>
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * <pre>
     * Deprecated: The unique identifier for the legacy Vendasta application being retrieved
     * </pre>
     *
     * <code>string product_id = 4;</code>
     */
    public function setProductId($var)
    {
        GPBUtil::checkString($var, True);
        $this->product_id = $var;
    }

    /**
     * <pre>
     * Optional id of the partner
     * </pre>
     *
     * <code>string partner_id = 5;</code>
     */
    public function getPartnerId()
    {
        return $this->partner_id;
    }

    /**
     * <pre>
     * Optional id of the partner
     * </pre>
     *
     * <code>string partner_id = 5;</code>
     */
    public function setPartnerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->partner_id = $var;
    }

}

