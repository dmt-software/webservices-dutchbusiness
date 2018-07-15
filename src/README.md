# Webservices DutchBusiness



## Usage

```php
<?php
 
use DMT\WebservicesNl\Client\Client;
use DMT\WebservicesNl\Client\Factory\ClientFactory;
use DMT\WebservicesNl\DutchBusiness\Request\GetDossierV3Request;
 
$credentials = ['username' => '{username}', 'password' => '{password}'];
$client = ClientFactory::createClient('soap_doclit', $credentials);
 
// create request
$request = new GetDossierV3Request();
$request->setDossierNumber('34221165');
 
/** @var Client $client */
$response = $client->execute($request);
```
