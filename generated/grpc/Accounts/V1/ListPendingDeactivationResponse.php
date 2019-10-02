<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/v1/api.proto

namespace Accounts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accounts.v1.ListPendingDeactivationResponse</code>
 */
class ListPendingDeactivationResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A list of pending deactivations
     * </pre>
     *
     * <code>repeated .accounts.v1.PendingDeactivation pending_activations = 1;</code>
     */
    private $pending_activations;
    /**
     * <pre>
     * Metadata about the paging
     * </pre>
     *
     * <code>.accounts.v1.PagedResponseMetadata paging_metadata = 2;</code>
     */
    private $paging_metadata = null;

    public function __construct() {
        \GPBMetadata\Accounts\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A list of pending deactivations
     * </pre>
     *
     * <code>repeated .accounts.v1.PendingDeactivation pending_activations = 1;</code>
     */
    public function getPendingActivations()
    {
        return $this->pending_activations;
    }

    /**
     * <pre>
     * A list of pending deactivations
     * </pre>
     *
     * <code>repeated .accounts.v1.PendingDeactivation pending_activations = 1;</code>
     */
    public function setPendingActivations(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Accounts\V1\PendingDeactivation::class);
        $this->pending_activations = $arr;
    }

    /**
     * <pre>
     * Metadata about the paging
     * </pre>
     *
     * <code>.accounts.v1.PagedResponseMetadata paging_metadata = 2;</code>
     */
    public function getPagingMetadata()
    {
        return $this->paging_metadata;
    }

    /**
     * <pre>
     * Metadata about the paging
     * </pre>
     *
     * <code>.accounts.v1.PagedResponseMetadata paging_metadata = 2;</code>
     */
    public function setPagingMetadata(&$var)
    {
        GPBUtil::checkMessage($var, \Accounts\V1\PagedResponseMetadata::class);
        $this->paging_metadata = $var;
    }

}

