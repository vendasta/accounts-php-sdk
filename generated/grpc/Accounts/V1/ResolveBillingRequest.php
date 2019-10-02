<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/v1/api.proto

namespace Accounts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 *DEPRECATED: This request is not used for anything anymore
 * </pre>
 *
 * Protobuf type <code>accounts.v1.ResolveBillingRequest</code>
 */
class ResolveBillingRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The businessID of the pending activation being resolved
     * </pre>
     *
     * <code>string customer_id = 1 [deprecated = true];</code>
     */
    private $customer_id = '';
    /**
     * <pre>
     * The billingID related to the pending activation being resolved
     * </pre>
     *
     * <code>string sku = 2 [deprecated = true];</code>
     */
    private $sku = '';
    /**
     * <pre>
     * The activationID of the pending activation being resolved
     * </pre>
     *
     * <code>string order_id = 3 [deprecated = true];</code>
     */
    private $order_id = '';
    /**
     * <pre>
     * True for approved, False for rejected
     * </pre>
     *
     * <code>bool approved = 4 [deprecated = true];</code>
     */
    private $approved = false;
    /**
     * <pre>
     * The reason billing rejected the pending activation if applicable
     * </pre>
     *
     * <code>string rejected_reason = 5 [deprecated = true];</code>
     */
    private $rejected_reason = '';

    public function __construct() {
        \GPBMetadata\Accounts\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The businessID of the pending activation being resolved
     * </pre>
     *
     * <code>string customer_id = 1 [deprecated = true];</code>
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * <pre>
     * The businessID of the pending activation being resolved
     * </pre>
     *
     * <code>string customer_id = 1 [deprecated = true];</code>
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;
    }

    /**
     * <pre>
     * The billingID related to the pending activation being resolved
     * </pre>
     *
     * <code>string sku = 2 [deprecated = true];</code>
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <pre>
     * The billingID related to the pending activation being resolved
     * </pre>
     *
     * <code>string sku = 2 [deprecated = true];</code>
     */
    public function setSku($var)
    {
        GPBUtil::checkString($var, True);
        $this->sku = $var;
    }

    /**
     * <pre>
     * The activationID of the pending activation being resolved
     * </pre>
     *
     * <code>string order_id = 3 [deprecated = true];</code>
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * <pre>
     * The activationID of the pending activation being resolved
     * </pre>
     *
     * <code>string order_id = 3 [deprecated = true];</code>
     */
    public function setOrderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_id = $var;
    }

    /**
     * <pre>
     * True for approved, False for rejected
     * </pre>
     *
     * <code>bool approved = 4 [deprecated = true];</code>
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * <pre>
     * True for approved, False for rejected
     * </pre>
     *
     * <code>bool approved = 4 [deprecated = true];</code>
     */
    public function setApproved($var)
    {
        GPBUtil::checkBool($var);
        $this->approved = $var;
    }

    /**
     * <pre>
     * The reason billing rejected the pending activation if applicable
     * </pre>
     *
     * <code>string rejected_reason = 5 [deprecated = true];</code>
     */
    public function getRejectedReason()
    {
        return $this->rejected_reason;
    }

    /**
     * <pre>
     * The reason billing rejected the pending activation if applicable
     * </pre>
     *
     * <code>string rejected_reason = 5 [deprecated = true];</code>
     */
    public function setRejectedReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->rejected_reason = $var;
    }

}

