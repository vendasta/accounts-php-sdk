<?php 
namespace Vendasta\Accounts\V1;

use Vendasta\Accounts\V1\internal\AccountsServiceGeneratedClient;

class AccountsServiceClient extends AccountsServiceGeneratedClient
{
    /**
     * AccountsServiceClient constructor.
     * @param string $env one of \Vendasta\Vax\Environment::<Env>
     * @param float $default_timeout
     */
    public function __construct(string $env, float $default_timeout = 10000)
    {
        parent::__construct($env, $default_timeout);
    }
}
