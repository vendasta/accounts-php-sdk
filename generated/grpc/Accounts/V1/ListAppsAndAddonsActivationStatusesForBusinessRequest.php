<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/v1/api.proto

namespace Accounts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accounts.v1.ListAppsAndAddonsActivationStatusesForBusinessRequest</code>
 */
class ListAppsAndAddonsActivationStatusesForBusinessRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The business_id to list the activation statuses for
     * </pre>
     *
     * <code>string business_id = 1;</code>
     */
    private $business_id = '';
    /**
     * <pre>
     * A filter to specify what apps and/or what status to return
     * </pre>
     *
     * <code>.accounts.v1.ListAppsAndAddonsActivationStatusesForBusinessRequest.AppActivationStatusesFilters filters = 2;</code>
     */
    private $filters = null;

    public function __construct() {
        \GPBMetadata\Accounts\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The business_id to list the activation statuses for
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
     * The business_id to list the activation statuses for
     * </pre>
     *
     * <code>string business_id = 1;</code>
     */
    public function setBusinessId($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_id = $var;
    }

    /**
     * <pre>
     * A filter to specify what apps and/or what status to return
     * </pre>
     *
     * <code>.accounts.v1.ListAppsAndAddonsActivationStatusesForBusinessRequest.AppActivationStatusesFilters filters = 2;</code>
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * <pre>
     * A filter to specify what apps and/or what status to return
     * </pre>
     *
     * <code>.accounts.v1.ListAppsAndAddonsActivationStatusesForBusinessRequest.AppActivationStatusesFilters filters = 2;</code>
     */
    public function setFilters(&$var)
    {
        GPBUtil::checkMessage($var, \Accounts\V1\ListAppsAndAddonsActivationStatusesForBusinessRequest_AppActivationStatusesFilters::class);
        $this->filters = $var;
    }

}

