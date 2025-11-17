# casino25/php-api-client

PHP API Client for Casino v2.5

## Requirements

> - PHP 5.6.3 or higher
> - The **phpseclib3** library.
    > (required for secure 64-bit nonce generation used by the signature mechanism)
> - OpenSSL and cURL extensions (required by json-rpc client)

## Example of usage:

```php
<?php
use casino25\api\client\Client;

require __DIR__.'/vendor/autoload.php';

$client = new Client(array(
        'url' => 'https://api.example.com/v1/', // You'll get it with documentation.
        'sslKeyPath' => __DIR__.'/ssl/apikey.pem',
));

var_export($client->listGames());
```

## Example of usage with signature authentication method:

> *NOTE*: Please refer to corresponding documentation regarding the **"Signature authentication method"**.

```php
<?php
use casino25\api\client\Client;

require __DIR__.'/vendor/autoload.php';

$client = new Client(array(
    'url' => 'https://customer.devpltform.com/v1/signed/',
    'debug' => true,
    'ssl_verification' => false,
    'signature_verification' => true,
    'signature' => array(
        'key_id' => 'example-key',
        'key_value' => 'ExampleKeyValue',
        'casino_id' => $myCasinoID,
        'nonce_start' => $randomNonceInt64,
    ),
));

var_export($client->listGames([]));
```
