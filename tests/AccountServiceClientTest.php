<?php

use PHPUnit\Framework\TestCase;
use Accounts\V1\DeactivationType;
use Vendasta\Accounts\V1\AccountsServiceClient;
use Vendasta\Accounts\V1\DeactivateAppRequest;

class AccountServiceClientTest extends TestCase
{
    public function testDeactivateApp()
    {
        $businessId = "";
        $appId = "";
        $activationId = "";

        $environment = getenv("ENVIRONMENT");
        if ($environment == null) {
            $environment = "DEMO";
        }
        $client = new AccountsServiceClient($environment);

        $req = new DeactivateAppRequest();
        $req->setBusinessId($businessId);
        $req->setAppId($appId);
        $req->setActivationId($activationId);
        $req->setDeactivationType(DeactivationType::DEACTIVATION_TYPE_CANCEL);

        $resp = $client->DeactivateApp($req);

        self::assertEquals(
            new Google\Protobuf\GPBEmpty(),
            $resp,
            'expected response to be GPBEmpty()',
        );
    }
}
