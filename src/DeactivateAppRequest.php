<?php
namespace Vendasta\Accounts\V1;

class DeactivateAppRequest {
    private $businessId;
    private $appId;
    private $deactivationInfo;
    private $deactivationType;
    private $activationId;


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

    public function setDeactivationInfo(&$var) {
        $this->deactivationInfo = $var;
    }

    public function getDeactivationInfo() {
        return $this->deactivationInfo;
    }

    public function setDeactivationType(&$var) {
        $this->deactivationType = $var;
    }

    public function getDeactivationType() {
        return $this->deactivationType;
    }

    public function setActivationId(string $var) {
        $this->activationId = $var;
    }

    public function getActivationId(): string {
        return $this->activationId;
    }

    public function toActivateAppRequest(): \Accounts\V1\DeactivateAppRequest
    {
        $deactivateReq = new \Accounts\V1\DeactivateAppRequest();
        $deactivateReq->setAppId($this->getAppId());
        $deactivateReq->setBusinessId($this->getBusinessId());
        $deactivateReq->setDeactivationInfo($this->getDeactivationInfo());
        $deactivateReq->setDeactivationType($this->getDeactivationType());
        $deactivateReq->setActivationId($this->getActivationId());
        return $deactivateReq;
    }
}
