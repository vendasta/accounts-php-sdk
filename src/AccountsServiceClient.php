<?php
namespace Vendasta\Accounts\V1;

use Vendasta\Accounts\V1\internal\AccountsServiceGeneratedClient;

class AccountsServiceClient
{
    /**
     * AccountsServiceClient constructor.
     * @param string $env one of \Vendasta\Vax\Environment::<Env>
     * @param float $default_timeout
     */

    private $client = null;

    public function __construct(string $env, float $default_timeout = 10000)
    {
        $this->client = new AccountsServiceGeneratedClient($env, $default_timeout);
    }

    public function ActivateApp(ActivateAppRequest $req) {
        $activateRequest = $req->toActivateAppRequest();
        return $this->client->ActivateApp($activateRequest);
    }

    public function DeactivateApp(DeactivateAppRequest $req) {
        $deactivateRequest = $req->toDeactivateAppRequest();
        return $this->client->DeactivateApp($deactivateRequest);
    }
}
