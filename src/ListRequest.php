<?php
namespace Vendasta\Accounts\V1;

class ListRequest {
    private $businessId;
    private $partnerId;
    private $cursor;
    private $pageSize = 0;


    public function setBusinessId($var){
        $this->businessId = $var;
    }

    public function getBusinessId() {
        return $this->businessId;
    }

    public function setPartnerId($var){
        $this->partnerId = $var;
    }

    public function getPartnerId() {
        return $this->partnerId;
    }

    public function setCursor($var) {
        $this->cursor = $var;
    }

    public function getCursor() {
        return $this->cursor;
    }

    public function setPageSize($var) {
        $this->pageSize = $var;
    }

    public function getPageSize() {
        return $this->pageSize;
    }

    public function toListRequest()
    {
        $listReq = new \Accounts\V1\ListRequest();
        $listReq->setPartnerId($this->getPartnerId());
        $listReq->setBusinessId($this->getBusinessId());
        $listReq->setCursor($this->getCursor());
        $listReq->setPageSize($this->getPageSize());
        return $listReq;
    }
}
