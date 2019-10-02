<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/v1/api.proto

namespace Accounts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accounts.v1.ListPendingActivationRequest</code>
 */
class ListPendingActivationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The app ID you want a list of all pending activations for
     * </pre>
     *
     * <code>string app_id = 1;</code>
     */
    private $app_id = '';
    /**
     * <pre>
     * The addon ID you want a list of all pending activations for
     * </pre>
     *
     * <code>string addon_id = 2;</code>
     */
    private $addon_id = '';
    /**
     * <pre>
     * A cursor should be supplied from the last response to load the next results
     * </pre>
     *
     * <code>string cursor = 3;</code>
     */
    private $cursor = '';
    /**
     * <pre>
     * The number of results to retrieve
     * </pre>
     *
     * <code>int64 page_size = 4;</code>
     */
    private $page_size = 0;

    public function __construct() {
        \GPBMetadata\Accounts\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The app ID you want a list of all pending activations for
     * </pre>
     *
     * <code>string app_id = 1;</code>
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * <pre>
     * The app ID you want a list of all pending activations for
     * </pre>
     *
     * <code>string app_id = 1;</code>
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;
    }

    /**
     * <pre>
     * The addon ID you want a list of all pending activations for
     * </pre>
     *
     * <code>string addon_id = 2;</code>
     */
    public function getAddonId()
    {
        return $this->addon_id;
    }

    /**
     * <pre>
     * The addon ID you want a list of all pending activations for
     * </pre>
     *
     * <code>string addon_id = 2;</code>
     */
    public function setAddonId($var)
    {
        GPBUtil::checkString($var, True);
        $this->addon_id = $var;
    }

    /**
     * <pre>
     * A cursor should be supplied from the last response to load the next results
     * </pre>
     *
     * <code>string cursor = 3;</code>
     */
    public function getCursor()
    {
        return $this->cursor;
    }

    /**
     * <pre>
     * A cursor should be supplied from the last response to load the next results
     * </pre>
     *
     * <code>string cursor = 3;</code>
     */
    public function setCursor($var)
    {
        GPBUtil::checkString($var, True);
        $this->cursor = $var;
    }

    /**
     * <pre>
     * The number of results to retrieve
     * </pre>
     *
     * <code>int64 page_size = 4;</code>
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * <pre>
     * The number of results to retrieve
     * </pre>
     *
     * <code>int64 page_size = 4;</code>
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->page_size = $var;
    }

}
