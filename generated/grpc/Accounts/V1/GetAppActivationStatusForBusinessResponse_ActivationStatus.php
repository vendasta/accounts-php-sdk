<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/v1/api.proto

namespace Accounts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accounts.v1.GetAppActivationStatusForBusinessResponse.ActivationStatus</code>
 */
class GetAppActivationStatusForBusinessResponse_ActivationStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>bool currently_active = 1;</code>
     */
    private $currently_active = false;

    public function __construct() {
        \GPBMetadata\Accounts\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <code>bool currently_active = 1;</code>
     */
    public function getCurrentlyActive()
    {
        return $this->currently_active;
    }

    /**
     * <code>bool currently_active = 1;</code>
     */
    public function setCurrentlyActive($var)
    {
        GPBUtil::checkBool($var);
        $this->currently_active = $var;
    }

}

