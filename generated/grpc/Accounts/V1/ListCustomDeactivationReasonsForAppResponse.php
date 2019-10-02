<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/v1/api.proto

namespace Accounts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accounts.v1.ListCustomDeactivationReasonsForAppResponse</code>
 */
class ListCustomDeactivationReasonsForAppResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A list of deactivation reason summaries that indicate why an app was deactivated for a group of accounts
     * </pre>
     *
     * <code>repeated .accounts.v1.DeactivationReasonSummary deactivation_reason_summary = 1;</code>
     */
    private $deactivation_reason_summary;
    /**
     * <pre>
     * A cursor for the next page of results
     * </pre>
     *
     * <code>string next_cursor = 2;</code>
     */
    private $next_cursor = '';
    /**
     * <pre>
     * A flag to indicate there are more pages
     * </pre>
     *
     * <code>bool has_more = 3;</code>
     */
    private $has_more = false;

    public function __construct() {
        \GPBMetadata\Accounts\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A list of deactivation reason summaries that indicate why an app was deactivated for a group of accounts
     * </pre>
     *
     * <code>repeated .accounts.v1.DeactivationReasonSummary deactivation_reason_summary = 1;</code>
     */
    public function getDeactivationReasonSummary()
    {
        return $this->deactivation_reason_summary;
    }

    /**
     * <pre>
     * A list of deactivation reason summaries that indicate why an app was deactivated for a group of accounts
     * </pre>
     *
     * <code>repeated .accounts.v1.DeactivationReasonSummary deactivation_reason_summary = 1;</code>
     */
    public function setDeactivationReasonSummary(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Accounts\V1\DeactivationReasonSummary::class);
        $this->deactivation_reason_summary = $arr;
    }

    /**
     * <pre>
     * A cursor for the next page of results
     * </pre>
     *
     * <code>string next_cursor = 2;</code>
     */
    public function getNextCursor()
    {
        return $this->next_cursor;
    }

    /**
     * <pre>
     * A cursor for the next page of results
     * </pre>
     *
     * <code>string next_cursor = 2;</code>
     */
    public function setNextCursor($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_cursor = $var;
    }

    /**
     * <pre>
     * A flag to indicate there are more pages
     * </pre>
     *
     * <code>bool has_more = 3;</code>
     */
    public function getHasMore()
    {
        return $this->has_more;
    }

    /**
     * <pre>
     * A flag to indicate there are more pages
     * </pre>
     *
     * <code>bool has_more = 3;</code>
     */
    public function setHasMore($var)
    {
        GPBUtil::checkBool($var);
        $this->has_more = $var;
    }

}

