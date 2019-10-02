<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Accounts\V1;

/**
 * Accounts Service manages business account and addon activations and deactivations.
 */
class AccountsServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * ActivateAddon activates a marketplace addon on an account.
     * @param \Accounts\V1\ActivateAddonRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ActivateAddon(\Accounts\V1\ActivateAddonRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/ActivateAddon',
        $argument,
        ['\Accounts\V1\ActivateAddonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * DeactivateAddon deactivates a marketplace addon on an account.
     * @param \Accounts\V1\DeactivateAddonRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeactivateAddon(\Accounts\V1\DeactivateAddonRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/DeactivateAddon',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * ActivateApp is used to activate a marketplace app on a business
     * @param \Accounts\V1\ActivateAppRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ActivateApp(\Accounts\V1\ActivateAppRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/ActivateApp',
        $argument,
        ['\Accounts\V1\ActivateAppResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * DeactivateApp is used to deactivate a marketplace app on a business
     * @param \Accounts\V1\DeactivateAppRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeactivateApp(\Accounts\V1\DeactivateAppRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/DeactivateApp',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * ChangeEdition changes the currently activated app edition to a new one
     * @param \Accounts\V1\ChangeEditionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ChangeEdition(\Accounts\V1\ChangeEditionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/ChangeEdition',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * UndoCancel is used to undo a cancellation for an Activation
     * @param \Accounts\V1\UndoCancelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UndoCancel(\Accounts\V1\UndoCancelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/UndoCancel',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * ListAddonActivations gets activations of an app's add-ons for a business
     * @param \Accounts\V1\ListAddonActivationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListAddonActivations(\Accounts\V1\ListAddonActivationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/ListAddonActivations',
        $argument,
        ['\Accounts\V1\ListAddonActivationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: Create is used to activate an account.
     * @param \Accounts\V1\CreateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Create(\Accounts\V1\CreateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/Create',
        $argument,
        ['\Accounts\V1\CreateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: Delete is used to do a hard delete on an account.
     * @param \Accounts\V1\DeleteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Delete(\Accounts\V1\DeleteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/Delete',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * Get is used to get an account.
     * @param \Accounts\V1\GetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Accounts\V1\GetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/Get',
        $argument,
        ['\Accounts\V1\GetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * GetMulti returns multiple Account objects
     * @param \Accounts\V1\GetMultiRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetMulti(\Accounts\V1\GetMultiRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/GetMulti',
        $argument,
        ['\Accounts\V1\GetMultiResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List is used to lookup a list of accounts.
     * @param \Accounts\V1\ListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function List(\Accounts\V1\ListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/List',
        $argument,
        ['\Accounts\V1\ListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ListAccountDates return important dates related to the accounts on a business
     * This endpoint has more downstream requirements than Get or List, thus is best effort for data.
     * @param \Accounts\V1\ListAccountDatesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListAccountDates(\Accounts\V1\ListAccountDatesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/ListAccountDates',
        $argument,
        ['\Accounts\V1\ListAccountDatesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: UpdateExpiry is used to expire an account.
     * @param \Accounts\V1\UpdateExpiryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateExpiry(\Accounts\V1\UpdateExpiryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/UpdateExpiry',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * DismissPendingActivation sets the dismissed flag and dismissed_by string
     * @param \Accounts\V1\DismissPendingActivationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DismissPendingActivation(\Accounts\V1\DismissPendingActivationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/DismissPendingActivation',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * ResolvePendingActivation is used to accept or reject a pending activation
     * @param \Accounts\V1\ResolvePendingActivationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ResolvePendingActivation(\Accounts\V1\ResolvePendingActivationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/ResolvePendingActivation',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * ListPendingActivations gets pending activations for an app or addon
     * @param \Accounts\V1\ListPendingActivationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListPendingActivations(\Accounts\V1\ListPendingActivationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/ListPendingActivations',
        $argument,
        ['\Accounts\V1\ListPendingActivationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ListPendingDeactivationsForPartner gets pending deactivations for a partner
     * @param \Accounts\V1\ListPendingDeactivationsForPartnerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListPendingDeactivationsForPartner(\Accounts\V1\ListPendingDeactivationsForPartnerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/ListPendingDeactivationsForPartner',
        $argument,
        ['\Accounts\V1\ListPendingDeactivationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ListPendingDeactivationsForAppOrAddon gets pending deactivations for an app or addon
     * @param \Accounts\V1\ListPendingDeactivationsForAppOrAddonRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListPendingDeactivationsForAppOrAddon(\Accounts\V1\ListPendingDeactivationsForAppOrAddonRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/ListPendingDeactivationsForAppOrAddon',
        $argument,
        ['\Accounts\V1\ListPendingDeactivationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ListPendingActivationsForBusiness gets pending activations for a business
     * @param \Accounts\V1\ListPendingActivationsForBusinessRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListPendingActivationsForBusiness(\Accounts\V1\ListPendingActivationsForBusinessRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/ListPendingActivationsForBusiness',
        $argument,
        ['\Accounts\V1\ListPendingActivationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the pending activation for an app or an addon.
     * Note that the pending activation model, and it's status, is only applicable to an activation, not to the current state of an account.
     * If you need to check the current status of an account post-activation, use the Get RPC.
     * @param \Accounts\V1\GetPendingActivationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetPendingActivation(\Accounts\V1\GetPendingActivationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/GetPendingActivation',
        $argument,
        ['\Accounts\V1\GetPendingActivationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * DEPRECATED: The resolve billing rpc does not do anything anymore.
     * @param \Accounts\V1\ResolveBillingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ResolveBilling(\Accounts\V1\ResolveBillingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/ResolveBilling',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * ListDeactivatedBusinessIDsForApp will return the deactivated business ids for the given app.
     * @param \Accounts\V1\ListDeactivatedBusinessIDsForAppRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListDeactivatedBusinessIDsForApp(\Accounts\V1\ListDeactivatedBusinessIDsForAppRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/ListDeactivatedBusinessIDsForApp',
        $argument,
        ['\Accounts\V1\ListDeactivatedBusinessIDsForAppResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ListActivationEventHistoryForBusiness Gets the Activation Event history for a specific account.
     * @param \Accounts\V1\ListActivationEventHistoryForBusinessRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListActivationEventHistoryForBusiness(\Accounts\V1\ListActivationEventHistoryForBusinessRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/ListActivationEventHistoryForBusiness',
        $argument,
        ['\Accounts\V1\ListActivationEventHistoryForBusinessResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * GetDeactivationReasonsForApp returns the primary reasons for app deactivation.
     * @param \Accounts\V1\GetDeactivationReasonsForAppRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetDeactivationReasonsForApp(\Accounts\V1\GetDeactivationReasonsForAppRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/GetDeactivationReasonsForApp',
        $argument,
        ['\Accounts\V1\GetDeactivationReasonsForAppResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ListCustomDeactivationReasonsForApp lists the set of custom-written deactivation reasons.
     * @param \Accounts\V1\ListCustomDeactivationReasonsForAppRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListCustomDeactivationReasonsForApp(\Accounts\V1\ListCustomDeactivationReasonsForAppRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/ListCustomDeactivationReasonsForApp',
        $argument,
        ['\Accounts\V1\ListCustomDeactivationReasonsForAppResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * GetAppActivationStatusForBusiness returns the ActivationStatus for a given business scoped to application
     * @param \Accounts\V1\GetAppActivationStatusForBusinessRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetAppActivationStatusForBusiness(\Accounts\V1\GetAppActivationStatusForBusinessRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/GetAppActivationStatusForBusiness',
        $argument,
        ['\Accounts\V1\GetAppActivationStatusForBusinessResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * CanActivate checks to see if a list of apps can be activated
     * @param \Accounts\V1\CanActivateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CanActivate(\Accounts\V1\CanActivateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/CanActivate',
        $argument,
        ['\Accounts\V1\CanActivateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ListAppActivationStatusForBusiness will return all of the app and addons ActivationStatus and number of activation for that app/addon for a given business
     * @param \Accounts\V1\ListAppsAndAddonsActivationStatusesForBusinessRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListAppsAndAddonsActivationStatusesForBusiness(\Accounts\V1\ListAppsAndAddonsActivationStatusesForBusinessRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/ListAppsAndAddonsActivationStatusesForBusiness',
        $argument,
        ['\Accounts\V1\ListAppsAndAddonsActivationsStatusesForBusinessResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * SuspendActivation will mark an activation as suspended
     * @param \Accounts\V1\SuspendActivationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SuspendActivation(\Accounts\V1\SuspendActivationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/SuspendActivation',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * UnsuspendActivation will mark an activation as suspended
     * @param \Accounts\V1\UnsuspendActivationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UnsuspendActivation(\Accounts\V1\UnsuspendActivationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/UnsuspendActivation',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * HandleBusinessDeleted will deactivate all items active on the account immediately, and reject any pending work for that account. This is intended to be
     * used in the case of the account group being deleted, to perform all the required cleanup for the account.
     * @param \Accounts\V1\HandleBusinessDeletedRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function HandleBusinessDeleted(\Accounts\V1\HandleBusinessDeletedRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/HandleBusinessDeleted',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * EstimatedBillableRevenueInPeriod returns the estimated revenue for a given app and its addons in a given period of time based on activations data
     * @param \Accounts\V1\GetEstimatedBillableRevenueInPeriodRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetEstimatedBillableRevenueInPeriod(\Accounts\V1\GetEstimatedBillableRevenueInPeriodRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.v1.AccountsService/GetEstimatedBillableRevenueInPeriod',
        $argument,
        ['\Accounts\V1\GetEstimatedBillableRevenueInPeriodResponse', 'decode'],
        $metadata, $options);
    }

}
