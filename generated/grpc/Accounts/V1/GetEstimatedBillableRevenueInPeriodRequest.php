<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/v1/api.proto

namespace Accounts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accounts.v1.GetEstimatedBillableRevenueInPeriodRequest</code>
 */
class GetEstimatedBillableRevenueInPeriodRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The id of the marketplace app
     * </pre>
     *
     * <code>string app_id = 1;</code>
     */
    private $app_id = '';
    /**
     * <pre>
     *The start date of the period
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_date = 2;</code>
     */
    private $start_date = null;
    /**
     * <pre>
     *The end date of the period
     * </pre>
     *
     * <code>.google.protobuf.Timestamp end_date = 3;</code>
     */
    private $end_date = null;

    public function __construct() {
        \GPBMetadata\Accounts\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The id of the marketplace app
     * </pre>
     *
     * <code>string app_id = 1;</code>
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * <pre>
     * The id of the marketplace app
     * </pre>
     *
     * <code>string app_id = 1;</code>
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;
    }

    /**
     * <pre>
     *The start date of the period
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_date = 2;</code>
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * <pre>
     *The start date of the period
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_date = 2;</code>
     */
    public function setStartDate(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_date = $var;
    }

    /**
     * <pre>
     *The end date of the period
     * </pre>
     *
     * <code>.google.protobuf.Timestamp end_date = 3;</code>
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * <pre>
     *The end date of the period
     * </pre>
     *
     * <code>.google.protobuf.Timestamp end_date = 3;</code>
     */
    public function setEndDate(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_date = $var;
    }

}

