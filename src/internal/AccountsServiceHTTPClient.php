<?php 
# Code generated by sdkgen
# Generated on 2019-10-01 21:12:20.5838247 +0000 UTC using container gcr.io/repcore-prod/sdkgen:latest
# DO NOT EDIT!

namespace Vendasta\Accounts\V1\internal;

use Vendasta\Vax\HTTPClient;

class AccountsServiceHTTPClient extends HTTPClient implements AccountsServiceClientInterface
{
    /**
     * AccountsServiceHTTPClient constructor.
     * @param string $host
     * @param string $scope
     * @param bool $secure
     * @param float $default_timeout
     */
    public function __construct(string $host, string $scope, bool $secure = true, float $default_timeout = 10000)
    {
        parent::__construct($host, $scope, $secure, $default_timeout);
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::ActivateAddon
     * @param \Accounts\V1\ActivateAddonRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accounts\V1\ActivateAddonResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ActivateAddon(\Accounts\V1\ActivateAddonRequest $req, array $options = []): \Accounts\V1\ActivateAddonResponse
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/ActivateAddon",
            $req,
            "\Accounts\V1\ActivateAddonResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::DeactivateAddon
     * @param \Accounts\V1\DeactivateAddonRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function DeactivateAddon(\Accounts\V1\DeactivateAddonRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/DeactivateAddon",
            $req,
            "\Google\Protobuf\GPBEmpty",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::ActivateApp
     * @param \Accounts\V1\ActivateAppRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accounts\V1\ActivateAppResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ActivateApp(\Accounts\V1\ActivateAppRequest $req, array $options = []): \Accounts\V1\ActivateAppResponse
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/ActivateApp",
            $req,
            "\Accounts\V1\ActivateAppResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::DeactivateApp
     * @param \Accounts\V1\DeactivateAppRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function DeactivateApp(\Accounts\V1\DeactivateAppRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/DeactivateApp",
            $req,
            "\Google\Protobuf\GPBEmpty",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::ChangeEdition
     * @param \Accounts\V1\ChangeEditionRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ChangeEdition(\Accounts\V1\ChangeEditionRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/ChangeEdition",
            $req,
            "\Google\Protobuf\GPBEmpty",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::UndoCancel
     * @param \Accounts\V1\UndoCancelRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function UndoCancel(\Accounts\V1\UndoCancelRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/UndoCancel",
            $req,
            "\Google\Protobuf\GPBEmpty",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::ListAddonActivations
     * @param \Accounts\V1\ListAddonActivationsRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accounts\V1\ListAddonActivationsResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ListAddonActivations(\Accounts\V1\ListAddonActivationsRequest $req, array $options = []): \Accounts\V1\ListAddonActivationsResponse
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/ListAddonActivations",
            $req,
            "\Accounts\V1\ListAddonActivationsResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::Create
     * @param \Accounts\V1\CreateRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accounts\V1\CreateResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function Create(\Accounts\V1\CreateRequest $req, array $options = []): \Accounts\V1\CreateResponse
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/Create",
            $req,
            "\Accounts\V1\CreateResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::Delete
     * @param \Accounts\V1\DeleteRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function Delete(\Accounts\V1\DeleteRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/Delete",
            $req,
            "\Google\Protobuf\GPBEmpty",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::Get
     * @param \Accounts\V1\GetRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accounts\V1\GetResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function Get(\Accounts\V1\GetRequest $req, array $options = []): \Accounts\V1\GetResponse
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/Get",
            $req,
            "\Accounts\V1\GetResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::GetMulti
     * @param \Accounts\V1\GetMultiRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accounts\V1\GetMultiResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function GetMulti(\Accounts\V1\GetMultiRequest $req, array $options = []): \Accounts\V1\GetMultiResponse
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/GetMulti",
            $req,
            "\Accounts\V1\GetMultiResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::List
     * @param \Accounts\V1\ListRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accounts\V1\ListResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function List(\Accounts\V1\ListRequest $req, array $options = []): \Accounts\V1\ListResponse
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/List",
            $req,
            "\Accounts\V1\ListResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::ListAccountDates
     * @param \Accounts\V1\ListAccountDatesRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accounts\V1\ListAccountDatesResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ListAccountDates(\Accounts\V1\ListAccountDatesRequest $req, array $options = []): \Accounts\V1\ListAccountDatesResponse
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/ListAccountDates",
            $req,
            "\Accounts\V1\ListAccountDatesResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::UpdateExpiry
     * @param \Accounts\V1\UpdateExpiryRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function UpdateExpiry(\Accounts\V1\UpdateExpiryRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/UpdateExpiry",
            $req,
            "\Google\Protobuf\GPBEmpty",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::DismissPendingActivation
     * @param \Accounts\V1\DismissPendingActivationRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function DismissPendingActivation(\Accounts\V1\DismissPendingActivationRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/DismissPendingActivation",
            $req,
            "\Google\Protobuf\GPBEmpty",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::ResolvePendingActivation
     * @param \Accounts\V1\ResolvePendingActivationRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ResolvePendingActivation(\Accounts\V1\ResolvePendingActivationRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/ResolvePendingActivation",
            $req,
            "\Google\Protobuf\GPBEmpty",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::ListPendingActivations
     * @param \Accounts\V1\ListPendingActivationRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accounts\V1\ListPendingActivationResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ListPendingActivations(\Accounts\V1\ListPendingActivationRequest $req, array $options = []): \Accounts\V1\ListPendingActivationResponse
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/ListPendingActivations",
            $req,
            "\Accounts\V1\ListPendingActivationResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::ListPendingDeactivationsForPartner
     * @param \Accounts\V1\ListPendingDeactivationsForPartnerRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accounts\V1\ListPendingDeactivationResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ListPendingDeactivationsForPartner(\Accounts\V1\ListPendingDeactivationsForPartnerRequest $req, array $options = []): \Accounts\V1\ListPendingDeactivationResponse
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/ListPendingDeactivationsForPartner",
            $req,
            "\Accounts\V1\ListPendingDeactivationResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::ListPendingDeactivationsForAppOrAddon
     * @param \Accounts\V1\ListPendingDeactivationsForAppOrAddonRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accounts\V1\ListPendingDeactivationResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ListPendingDeactivationsForAppOrAddon(\Accounts\V1\ListPendingDeactivationsForAppOrAddonRequest $req, array $options = []): \Accounts\V1\ListPendingDeactivationResponse
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/ListPendingDeactivationsForAppOrAddon",
            $req,
            "\Accounts\V1\ListPendingDeactivationResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::ListPendingActivationsForBusiness
     * @param \Accounts\V1\ListPendingActivationsForBusinessRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accounts\V1\ListPendingActivationResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ListPendingActivationsForBusiness(\Accounts\V1\ListPendingActivationsForBusinessRequest $req, array $options = []): \Accounts\V1\ListPendingActivationResponse
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/ListPendingActivationsForBusiness",
            $req,
            "\Accounts\V1\ListPendingActivationResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::GetPendingActivation
     * @param \Accounts\V1\GetPendingActivationRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accounts\V1\GetPendingActivationResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function GetPendingActivation(\Accounts\V1\GetPendingActivationRequest $req, array $options = []): \Accounts\V1\GetPendingActivationResponse
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/GetPendingActivation",
            $req,
            "\Accounts\V1\GetPendingActivationResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::ResolveBilling
     * @param \Accounts\V1\ResolveBillingRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ResolveBilling(\Accounts\V1\ResolveBillingRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/ResolveBilling",
            $req,
            "\Google\Protobuf\GPBEmpty",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::ListDeactivatedBusinessIDsForApp
     * @param \Accounts\V1\ListDeactivatedBusinessIDsForAppRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accounts\V1\ListDeactivatedBusinessIDsForAppResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ListDeactivatedBusinessIDsForApp(\Accounts\V1\ListDeactivatedBusinessIDsForAppRequest $req, array $options = []): \Accounts\V1\ListDeactivatedBusinessIDsForAppResponse
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/ListDeactivatedBusinessIDsForApp",
            $req,
            "\Accounts\V1\ListDeactivatedBusinessIDsForAppResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::ListActivationEventHistoryForBusiness
     * @param \Accounts\V1\ListActivationEventHistoryForBusinessRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accounts\V1\ListActivationEventHistoryForBusinessResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ListActivationEventHistoryForBusiness(\Accounts\V1\ListActivationEventHistoryForBusinessRequest $req, array $options = []): \Accounts\V1\ListActivationEventHistoryForBusinessResponse
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/ListActivationEventHistoryForBusiness",
            $req,
            "\Accounts\V1\ListActivationEventHistoryForBusinessResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::GetDeactivationReasonsForApp
     * @param \Accounts\V1\GetDeactivationReasonsForAppRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accounts\V1\GetDeactivationReasonsForAppResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function GetDeactivationReasonsForApp(\Accounts\V1\GetDeactivationReasonsForAppRequest $req, array $options = []): \Accounts\V1\GetDeactivationReasonsForAppResponse
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/GetDeactivationReasonsForApp",
            $req,
            "\Accounts\V1\GetDeactivationReasonsForAppResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::ListCustomDeactivationReasonsForApp
     * @param \Accounts\V1\ListCustomDeactivationReasonsForAppRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accounts\V1\ListCustomDeactivationReasonsForAppResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ListCustomDeactivationReasonsForApp(\Accounts\V1\ListCustomDeactivationReasonsForAppRequest $req, array $options = []): \Accounts\V1\ListCustomDeactivationReasonsForAppResponse
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/ListCustomDeactivationReasonsForApp",
            $req,
            "\Accounts\V1\ListCustomDeactivationReasonsForAppResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::GetAppActivationStatusForBusiness
     * @param \Accounts\V1\GetAppActivationStatusForBusinessRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accounts\V1\GetAppActivationStatusForBusinessResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function GetAppActivationStatusForBusiness(\Accounts\V1\GetAppActivationStatusForBusinessRequest $req, array $options = []): \Accounts\V1\GetAppActivationStatusForBusinessResponse
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/GetAppActivationStatusForBusiness",
            $req,
            "\Accounts\V1\GetAppActivationStatusForBusinessResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::CanActivate
     * @param \Accounts\V1\CanActivateRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accounts\V1\CanActivateResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function CanActivate(\Accounts\V1\CanActivateRequest $req, array $options = []): \Accounts\V1\CanActivateResponse
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/CanActivate",
            $req,
            "\Accounts\V1\CanActivateResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::ListAppsAndAddonsActivationStatusesForBusiness
     * @param \Accounts\V1\ListAppsAndAddonsActivationStatusesForBusinessRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accounts\V1\ListAppsAndAddonsActivationsStatusesForBusinessResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ListAppsAndAddonsActivationStatusesForBusiness(\Accounts\V1\ListAppsAndAddonsActivationStatusesForBusinessRequest $req, array $options = []): \Accounts\V1\ListAppsAndAddonsActivationsStatusesForBusinessResponse
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/ListAppsAndAddonsActivationStatusesForBusiness",
            $req,
            "\Accounts\V1\ListAppsAndAddonsActivationsStatusesForBusinessResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::SuspendActivation
     * @param \Accounts\V1\SuspendActivationRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function SuspendActivation(\Accounts\V1\SuspendActivationRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/SuspendActivation",
            $req,
            "\Google\Protobuf\GPBEmpty",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::UnsuspendActivation
     * @param \Accounts\V1\UnsuspendActivationRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function UnsuspendActivation(\Accounts\V1\UnsuspendActivationRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/UnsuspendActivation",
            $req,
            "\Google\Protobuf\GPBEmpty",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::HandleBusinessDeleted
     * @param \Accounts\V1\HandleBusinessDeletedRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function HandleBusinessDeleted(\Accounts\V1\HandleBusinessDeletedRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/HandleBusinessDeleted",
            $req,
            "\Google\Protobuf\GPBEmpty",
            $options
        );
    }
    
    /**
     * Auth wrapper for \Accounts\V1\AccountsServiceClient::GetEstimatedBillableRevenueInPeriod
     * @param \Accounts\V1\GetEstimatedBillableRevenueInPeriodRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accounts\V1\GetEstimatedBillableRevenueInPeriodResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function GetEstimatedBillableRevenueInPeriod(\Accounts\V1\GetEstimatedBillableRevenueInPeriodRequest $req, array $options = []): \Accounts\V1\GetEstimatedBillableRevenueInPeriodResponse
    {
        return $this->doRequest(
            "/accounts.v1.AccountsService/GetEstimatedBillableRevenueInPeriod",
            $req,
            "\Accounts\V1\GetEstimatedBillableRevenueInPeriodResponse",
            $options
        );
    }
    
}