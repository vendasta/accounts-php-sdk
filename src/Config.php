<?php
namespace Vendasta\Accounts\V1;
class Config
{
    const ENVIRONMENT_PARAMS = [
        "PROD" => [
            'host' => 'accounts-prod.apigateway.co:443',
            'scope' => 'https://accounts-prod.apigateway.co',
            'url' => 'https://accounts-prod.apigateway.co',
            'secure' => true,
        ],
        "DEMO" => [
            'host' => 'accounts-demo.apigateway.co:443',
            'scope' => 'https://accounts-demo.apigateway.co',
            'url' => 'https://accounts-demo.apigateway.co',
            'secure' => true,
        ]
    ];
}