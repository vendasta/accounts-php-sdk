<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/v1/api.proto

namespace Accounts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accounts.v1.GetAppActivationStatusForBusinessResponse</code>
 */
class GetAppActivationStatusForBusinessResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The status of activation for the requested business/application
     * </pre>
     *
     * <code>.accounts.v1.GetAppActivationStatusForBusinessResponse.ActivationStatus status = 1;</code>
     */
    private $status = null;

    public function __construct() {
        \GPBMetadata\Accounts\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The status of activation for the requested business/application
     * </pre>
     *
     * <code>.accounts.v1.GetAppActivationStatusForBusinessResponse.ActivationStatus status = 1;</code>
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * <pre>
     * The status of activation for the requested business/application
     * </pre>
     *
     * <code>.accounts.v1.GetAppActivationStatusForBusinessResponse.ActivationStatus status = 1;</code>
     */
    public function setStatus(&$var)
    {
        GPBUtil::checkMessage($var, \Accounts\V1\GetAppActivationStatusForBusinessResponse_ActivationStatus::class);
        $this->status = $var;
    }

}
