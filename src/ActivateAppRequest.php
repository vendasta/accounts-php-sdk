<?php
namespace Vendasta\Accounts\V1;

class ActivateAppRequest {
    private $businessId;
    private $appId;
    private $partnerId;
    private $editionId;


    public function setBusinessId(string $var){
        $this->businessId = $var;
    }

    public function getBusinessId(): string {
        return $this->businessId;
    }

    public function setAppId(string $var){
        $this->appId = $var;
    }

    public function getAppId(): string {
        return $this->appId;
    }

    public function setPartnerId(string $var) {
        $this->partnerId = $var;
    }

    public function getPartnerId(): string {
        return $this->partnerId;
    }

    public function setEditionId(string $var) {
        $this->editionId = $var;
    }

    public function getEditionId(): string {
        return $this->editionId;
    }

    public function toActivateAppRequest(): \Accounts\V1\ActivateAppRequest
    {
        $createReq = new \Accounts\V1\ActivateAppRequest();
        $createReq->setAppId($this->getAppId());
        $createReq->setBusinessId($this->getBusinessId());
        $createReq->setPartnerId($this->getPartnerId());
        $createReq->setEditionId($this->getEditionId());
        return $createReq;
    }
}