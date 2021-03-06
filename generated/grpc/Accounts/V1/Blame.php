<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/v1/blame.proto

namespace Accounts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accounts.v1.Blame</code>
 */
class Blame extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The source of action
     * This could be a User identified by subject ID, ie: bbassingthwaite&#64;vendasta.com
     * or a System-level action, bulk action, etc.
     * </pre>
     *
     * <code>.accounts.v1.Blame.Source source = 1;</code>
     */
    private $source = 0;
    /**
     * <pre>
     * Optionally used to provide additional information on source
     * ie: If source is USER, identifier could be an e-mail
     * </pre>
     *
     * <code>string source_identifier = 2;</code>
     */
    private $source_identifier = '';
    protected $additional_info;

    public function __construct() {
        \GPBMetadata\Accounts\V1\Blame::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The source of action
     * This could be a User identified by subject ID, ie: bbassingthwaite&#64;vendasta.com
     * or a System-level action, bulk action, etc.
     * </pre>
     *
     * <code>.accounts.v1.Blame.Source source = 1;</code>
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * <pre>
     * The source of action
     * This could be a User identified by subject ID, ie: bbassingthwaite&#64;vendasta.com
     * or a System-level action, bulk action, etc.
     * </pre>
     *
     * <code>.accounts.v1.Blame.Source source = 1;</code>
     */
    public function setSource($var)
    {
        GPBUtil::checkEnum($var, \Accounts\V1\Blame_Source::class);
        $this->source = $var;
    }

    /**
     * <pre>
     * Optionally used to provide additional information on source
     * ie: If source is USER, identifier could be an e-mail
     * </pre>
     *
     * <code>string source_identifier = 2;</code>
     */
    public function getSourceIdentifier()
    {
        return $this->source_identifier;
    }

    /**
     * <pre>
     * Optionally used to provide additional information on source
     * ie: If source is USER, identifier could be an e-mail
     * </pre>
     *
     * <code>string source_identifier = 2;</code>
     */
    public function setSourceIdentifier($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_identifier = $var;
    }

    /**
     * <pre>
     * Reasons for a deactivation
     * </pre>
     *
     * <code>.accounts.v1.Blame.DeactivationReasons reasons = 3;</code>
     */
    public function getReasons()
    {
        return $this->readOneof(3);
    }

    /**
     * <pre>
     * Reasons for a deactivation
     * </pre>
     *
     * <code>.accounts.v1.Blame.DeactivationReasons reasons = 3;</code>
     */
    public function setReasons(&$var)
    {
        GPBUtil::checkMessage($var, \Accounts\V1\Blame_DeactivationReasons::class);
        $this->writeOneof(3, $var);
    }

    /**
     * <pre>
     * Package Activation metadata
     * </pre>
     *
     * <code>.accounts.v1.Blame.PackageActivation package_info = 4;</code>
     */
    public function getPackageInfo()
    {
        return $this->readOneof(4);
    }

    /**
     * <pre>
     * Package Activation metadata
     * </pre>
     *
     * <code>.accounts.v1.Blame.PackageActivation package_info = 4;</code>
     */
    public function setPackageInfo(&$var)
    {
        GPBUtil::checkMessage($var, \Accounts\V1\Blame_PackageActivation::class);
        $this->writeOneof(4, $var);
    }

    public function getAdditionalInfo()
    {
        return $this->whichOneof("additional_info");
    }

}

