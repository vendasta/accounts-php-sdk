<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/v1/api.proto

namespace Accounts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accounts.v1.CanActivateResponse</code>
 */
class CanActivateResponse extends \Google\Protobuf\Internal\Message
{
    protected $can_activate_response;

    public function __construct() {
        \GPBMetadata\Accounts\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <code>.accounts.v1.CanActivateResponse.InvalidResponse invalid_response = 1;</code>
     */
    public function getInvalidResponse()
    {
        return $this->readOneof(1);
    }

    /**
     * <code>.accounts.v1.CanActivateResponse.InvalidResponse invalid_response = 1;</code>
     */
    public function setInvalidResponse(&$var)
    {
        GPBUtil::checkMessage($var, \Accounts\V1\CanActivateResponse_InvalidResponse::class);
        $this->writeOneof(1, $var);
    }

    /**
     * <code>.accounts.v1.CanActivateResponse.SuccessResponse success_response = 2;</code>
     */
    public function getSuccessResponse()
    {
        return $this->readOneof(2);
    }

    /**
     * <code>.accounts.v1.CanActivateResponse.SuccessResponse success_response = 2;</code>
     */
    public function setSuccessResponse(&$var)
    {
        GPBUtil::checkMessage($var, \Accounts\V1\CanActivateResponse_SuccessResponse::class);
        $this->writeOneof(2, $var);
    }

    public function getCanActivateResponse()
    {
        return $this->whichOneof("can_activate_response");
    }

}

