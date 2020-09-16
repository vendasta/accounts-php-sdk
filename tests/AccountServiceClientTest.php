<?php

use PHPUnit\Framework\TestCase;
use Accounts\V1\DeactivationType;
use Vendasta\Accounts\V1\AccountsServiceClient;
use Vendasta\Accounts\V1\DeactivateAppRequest;
use Vendasta\Vax\SDKException;

class AccountServiceClientTest extends TestCase
{
    public function testDeactivateApp()
    {
        $environment = getenv("ENVIRONMENT");
        if ($environment == null) {
            $environment = "DEMO";
        }
        $client = new AccountsServiceClient($environment);

        $req = new DeactivateAppRequest();
        $req->setBusinessId("AG-P3KH8VTHR5");
        $req->setAppId("MP-MCLBF8TMSMLCQ5W72LNHQV5XVW4KC2MX");
        $req->setActivationId("ea6f6da0-ad68-49d6-8439-8a693fdaea20");
        $req->setDeactivationType(DeactivationType::DEACTIVATION_TYPE_CANCEL);

        $resp = $client->DeactivateApp($req);
    }
}
