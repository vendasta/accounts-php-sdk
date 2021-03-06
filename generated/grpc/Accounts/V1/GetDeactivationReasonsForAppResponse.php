<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/v1/api.proto

namespace Accounts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accounts.v1.GetDeactivationReasonsForAppResponse</code>
 */
class GetDeactivationReasonsForAppResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A deactivation reason summary that indicates why an app was deactivated
     * </pre>
     *
     * <code>repeated .accounts.v1.DeactivationReasonSummary deactivation_reason_summary = 1;</code>
     */
    private $deactivation_reason_summary;

    public function __construct() {
        \GPBMetadata\Accounts\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A deactivation reason summary that indicates why an app was deactivated
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
     * A deactivation reason summary that indicates why an app was deactivated
     * </pre>
     *
     * <code>repeated .accounts.v1.DeactivationReasonSummary deactivation_reason_summary = 1;</code>
     */
    public function setDeactivationReasonSummary(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Accounts\V1\DeactivationReasonSummary::class);
        $this->deactivation_reason_summary = $arr;
    }

}

