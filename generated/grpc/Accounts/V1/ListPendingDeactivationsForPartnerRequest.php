<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/v1/api.proto

namespace Accounts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accounts.v1.ListPendingDeactivationsForPartnerRequest</code>
 */
class ListPendingDeactivationsForPartnerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The id of a partner
     * </pre>
     *
     * <code>string partner_id = 1;</code>
     */
    private $partner_id = '';
    /**
     * <pre>
     * Options for how to page the response for this request
     * </pre>
     *
     * <code>.accounts.v1.PagedRequestOptions paging_options = 2;</code>
     */
    private $paging_options = null;

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

    /**
     * <pre>
     * Options for how to page the response for this request
     * </pre>
     *
     * <code>.accounts.v1.PagedRequestOptions paging_options = 2;</code>
     */
    public function getPagingOptions()
    {
        return $this->paging_options;
    }

    /**
     * <pre>
     * Options for how to page the response for this request
     * </pre>
     *
     * <code>.accounts.v1.PagedRequestOptions paging_options = 2;</code>
     */
    public function setPagingOptions(&$var)
    {
        GPBUtil::checkMessage($var, \Accounts\V1\PagedRequestOptions::class);
        $this->paging_options = $var;
    }

}

