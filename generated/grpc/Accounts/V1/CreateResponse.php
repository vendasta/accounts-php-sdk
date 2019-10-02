<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/v1/api.proto

namespace Accounts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 *DEPRECATED: Create RPC is deprecated
 * </pre>
 *
 * Protobuf type <code>accounts.v1.CreateResponse</code>
 */
class CreateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A unique ID assigned for this specific app activation.
     * </pre>
     *
     * <code>string activation_id = 1 [deprecated = true];</code>
     */
    private $activation_id = '';
    /**
     * <pre>
     * The order form submission id, unique per activation.
     * </pre>
     *
     * <code>string order_form_submission_id = 2 [deprecated = true];</code>
     */
    private $order_form_submission_id = '';

    public function __construct() {
        \GPBMetadata\Accounts\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A unique ID assigned for this specific app activation.
     * </pre>
     *
     * <code>string activation_id = 1 [deprecated = true];</code>
     */
    public function getActivationId()
    {
        return $this->activation_id;
    }

    /**
     * <pre>
     * A unique ID assigned for this specific app activation.
     * </pre>
     *
     * <code>string activation_id = 1 [deprecated = true];</code>
     */
    public function setActivationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->activation_id = $var;
    }

    /**
     * <pre>
     * The order form submission id, unique per activation.
     * </pre>
     *
     * <code>string order_form_submission_id = 2 [deprecated = true];</code>
     */
    public function getOrderFormSubmissionId()
    {
        return $this->order_form_submission_id;
    }

    /**
     * <pre>
     * The order form submission id, unique per activation.
     * </pre>
     *
     * <code>string order_form_submission_id = 2 [deprecated = true];</code>
     */
    public function setOrderFormSubmissionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_form_submission_id = $var;
    }

}
