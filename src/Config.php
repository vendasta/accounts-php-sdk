<?php
namespace Vendasta\Accounts\V1;
class Config
{
    const ENVIRONMENT_PARAMS = [
        "PROD" => [
            'host' => 'accounts-api-prod.apigateway.co:443',
            'scope' => 'https://accounts-api-prod.apigateway.co',
            'url' => 'https://accounts-api-prod.apigateway.co',
            'secure' => true,
        ],
        "DEMO" => [
            'host' => 'accounts-api-demo.apigateway.co:443',
            'scope' => 'https://accounts-api-demo.apigateway.co',
            'url' => 'https://accounts-api-demo.apigateway.co',
            'secure' => true,
        ]
    ];
}