<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Accounts\V1;

/**
 * Fulfillment Service manages the information update about accounts
 */
class FulfillmentServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * SetAutoRenew is used to update or set the state.
     * @param \Accounts\V1\SetAutoRenewRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetAutoRenew(\Accounts\V1\SetAutoRenewRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.FulfillmentService/SetAutoRenew',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

}
