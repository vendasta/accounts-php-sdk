# accounts-php-sdk
Accounts php sdk

## Description

This is Vendasta's official PHP SDK for API integration of accounts. This is used to provision apps for a business.

## Requirements

- PHP 5.5 and above or PHP 7.0 and above
- [PECL](https://pecl.php.net/) (may be used to install the required PHP extensions)
- [Composer](https://getcomposer.org/)
- [PHP gmp extension](http://php.net/manual/en/book.gmp.php)
- OPTIONAL (but recommended): [PHP grpc extension](https://cloud.google.com/php/grpc)

## Installation

Install the requirements from above, then:

```bash
composer require vendasta/accounts-php-sdk
```

## Authentication

To authenticate your SDK calls, you must provision a service account from within the Vendasta platform.

_This feature is currently in alpha, therefore your service account credentials file will be provided to you manually._

You must put this file on your server, and set an environment variable to it's path:

```bash
export VENDASTA_APPLICATION_CREDENTIALS=<path to credentials.json>
```

## Client Initialization

It is highly recommended that you use a singleton client instance. Each client initilization will open it's own connection, therefore using a singleton results in reusing a connection, saving time and resources.

To instantiate the client:
```php
$environment = "DEMO"; // "PROD" for production environment
$client = new Vendasta\Accounts\V1\AccountsServiceClient($environment);
```

## App provisioning

To provision an App
```php
$createReq = new Vendasta\Accounts\V1\ActivateAppRequest();
$createReq->setBusinessId(<business_id>);
$createReq->setAppId("<app_id>");
$createReq->setPartnerId("<partner_id>");
$createReq->setEditionId("<edition_id>");
$resp = $client->ActivateApp($createReq);
```
