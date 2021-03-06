<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/v1/api.proto

namespace Accounts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accounts.v1.HandleBusinessDeletedRequest</code>
 */
class HandleBusinessDeletedRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The Business ID to remove all items for
     * </pre>
     *
     * <code>string business_id = 1;</code>
     */
    private $business_id = '';

    public function __construct() {
        \GPBMetadata\Accounts\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The Business ID to remove all items for
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
     * The Business ID to remove all items for
     * </pre>
     *
     * <code>string business_id = 1;</code>
     */
    public function setBusinessId($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_id = $var;
    }

}

