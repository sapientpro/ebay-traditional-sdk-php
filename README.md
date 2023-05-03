# Ebay Traditional SDK for PHP

This is a fork of the original [dts/ebay-sdk-php](https://github.com/davidtsadler/ebay-sdk-php) by [@davidtsadler](https://github.com/davidtsadler), with support for PHP 8 and compatibility with Guzzle 7.

The original project has been officially abandoned in February 2020.

---

This project enables PHP developers to use the [Traditional eBay APIs](https://developer.ebay.com/docs) in their PHP code,
and build software using services such as [Finding](http://developer.ebay.com/Devzone/finding/Concepts/FindingAPIGuide.html),
[Trading](http://developer.ebay.com/DevZone/guides/ebayfeatures/index.html),
[Shopping](http://developer.ebay.com/Devzone/shopping/docs/Concepts/ShoppingAPIGuide.html), etc.

## Features

  - Compatible with PHP 8.
  - Easy to install with [Composer](http://getcomposer.org/).
  - Compliant with [PSR-1](http://www.php-fig.org/psr/psr-1/), [PSR-2](http://www.php-fig.org/psr/psr-2/), [PSR-4](http://www.php-fig.org/psr/psr-4/), and [PSR-12](http://www.php-fig.org/psr/psr-12/).

## Prerequisites

  - PHP 8 or higher with the following extensions:
      - curl
      - libxml
  - 64 bit version as there are some [issues when using the SDK with 32 bit](http://devbay.net/sdk/guides/getting-started/requirements.html#using-the-sdk-with-32-bit-systems).
  - SSL enabled on the cURL extension so that https requests can be made.

## Installation

The SDK can be installed with [Composer](http://getcomposer.org/):

`composer require sapientpro/ebay-traditional-sdk`

## Example usage

Here is the example usage of the package. Visit wiki for more detailed documentation and examples.

### Get the official eBay time

```php
<?php
use EBay\SDK\Shopping\Services\ShoppingService;
use EBay\SDK\Shopping\Types\GetEbayTimeRequestType;

// Create the service object.
$service = new Services\ShoppingService();

// Create the request object.
$request = new Types\GeteBayTimeRequestType();

// Send the request to the service operation.
$response = $service->getEbayTime($request);

// Output the result of calling the service operation.
printf("The official eBay time is: %s\n", $response->Timestamp->format('H:i (\G\M\T) \o\n l jS Y'));
```
