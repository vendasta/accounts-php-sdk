<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/v1/api.proto

namespace Accounts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accounts.v1.ListPendingDeactivationsForAppOrAddonRequest</code>
 */
class ListPendingDeactivationsForAppOrAddonRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The app ID you want a list of all pending deactivations for
     * </pre>
     *
     * <code>string app_id = 2;</code>
     */
    private $app_id = '';
    /**
     * <pre>
     * The addon ID you want a list of all pending deactivations for
     * </pre>
     *
     * <code>string addon_id = 3;</code>
     */
    private $addon_id = '';
    /**
     * <pre>
     * Options for how to page the response for this request
     * </pre>
     *
     * <code>.accounts.v1.PagedRequestOptions paging_options = 4;</code>
     */
    private $paging_options = null;

    public function __construct() {
        \GPBMetadata\Accounts\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The app ID you want a list of all pending deactivations for
     * </pre>
     *
     * <code>string app_id = 2;</code>
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * <pre>
     * The app ID you want a list of all pending deactivations for
     * </pre>
     *
     * <code>string app_id = 2;</code>
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;
    }

    /**
     * <pre>
     * The addon ID you want a list of all pending deactivations for
     * </pre>
     *
     * <code>string addon_id = 3;</code>
     */
    public function getAddonId()
    {
        return $this->addon_id;
    }

    /**
     * <pre>
     * The addon ID you want a list of all pending deactivations for
     * </pre>
     *
     * <code>string addon_id = 3;</code>
     */
    public function setAddonId($var)
    {
        GPBUtil::checkString($var, True);
        $this->addon_id = $var;
    }

    /**
     * <pre>
     * Options for how to page the response for this request
     * </pre>
     *
     * <code>.accounts.v1.PagedRequestOptions paging_options = 4;</code>
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
     * <code>.accounts.v1.PagedRequestOptions paging_options = 4;</code>
     */
    public function setPagingOptions(&$var)
    {
        GPBUtil::checkMessage($var, \Accounts\V1\PagedRequestOptions::class);
        $this->paging_options = $var;
    }

}

