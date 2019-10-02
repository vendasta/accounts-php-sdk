<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/v1/api.proto

namespace Accounts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accounts.v1.GetDeactivationReasonsForAppRequest.GetDeactivationReasonsForAppFilterOptions</code>
 */
class GetDeactivationReasonsForAppRequest_GetDeactivationReasonsForAppFilterOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The id of a partner
     * </pre>
     *
     * <code>string partner_id = 1;</code>
     */
    private $partner_id = '';

    public function __construct() {
        \GPBMetadata\Accounts\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The id of a partner
     * </pre>
     *
     * <code>string partner_id = 1;</code>
     */
    public function getPartnerId()
    {
        return $this->partner_id;
    }

    /**
     * <pre>
     * The id of a partner
     * </pre>
     *
     * <code>string partner_id = 1;</code>
     */
    public function setPartnerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->partner_id = $var;
    }

}

