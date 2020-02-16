# casino25/php-api-client
PHP API Client for Casino v2.5

Example of usage:
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
