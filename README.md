# linkedevents-client-php
Linked Events provides categorized data on events and places using JSON-LD format.  Events can be searched by date and location. Location can be exact address or larger area such as neighbourhood or borough  JSON-LD format is streamlined using include mechanism. API users can request that certain fields are included directly into the result, instead of being hyperlinks to objects.  Several fields are multilingual. These are implemented as object with each language variant as property. In this specification each multilingual field has (fi,sv,en) property triplet as example.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v1
- Package version: 0.0.1
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/metatavu/linkedevents-php-client.git"
    }
  ],
  "require": {
    "metatavu/linkedevents-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/linkedevents-client-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Metatavu\LinkedEvents\Api\EventApi();
$eventObject = new \Metatavu\LinkedEvents\Model\Event(); // \Metatavu\LinkedEvents\Model\Event | 

try {
    $result = $api_instance->eventCreate($eventObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->eventCreate: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.hel.fi/linkedevents/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*EventApi* | [**eventCreate**](docs/Api/EventApi.md#eventcreate) | **POST** /event/ | Create a new event
*EventApi* | [**eventDelete**](docs/Api/EventApi.md#eventdelete) | **DELETE** /event/{id}/ | Delete an event
*EventApi* | [**eventList**](docs/Api/EventApi.md#eventlist) | **GET** /event/ | Return a list of events
*EventApi* | [**eventRetrieve**](docs/Api/EventApi.md#eventretrieve) | **GET** /event/{id}/ | Retrieve single event by id
*EventApi* | [**eventUpdate**](docs/Api/EventApi.md#eventupdate) | **PUT** /event/{id}/ | Update an event
*EventApi* | [**placeDelete**](docs/Api/EventApi.md#placedelete) | **DELETE** /place/{id}/ | Delete a place
*FilterApi* | [**keywordList**](docs/Api/FilterApi.md#keywordlist) | **GET** /keyword/ | Returns a list of keywords used for describing events
*FilterApi* | [**keywordRetrieve**](docs/Api/FilterApi.md#keywordretrieve) | **GET** /keyword/{id}/ | Return information for single keyword
*FilterApi* | [**keywordSetList**](docs/Api/FilterApi.md#keywordsetlist) | **GET** /keyword_set/ | Return as list of keyword_sets for grouping keywords
*FilterApi* | [**keywordSetRetrieve**](docs/Api/FilterApi.md#keywordsetretrieve) | **GET** /keyword_set/{id} | Return information about single keyword_set
*FilterApi* | [**placeCreate**](docs/Api/FilterApi.md#placecreate) | **POST** /place/ | Creates new place
*FilterApi* | [**placeList**](docs/Api/FilterApi.md#placelist) | **GET** /place/ | Returns list of places used for describing events
*FilterApi* | [**placeRetrieve**](docs/Api/FilterApi.md#placeretrieve) | **GET** /place/{id}/ | Return information for single place
*FilterApi* | [**placeUpdate**](docs/Api/FilterApi.md#placeupdate) | **PUT** /place/{id}/ | Update a place
*ImageApi* | [**imageCreate**](docs/Api/ImageApi.md#imagecreate) | **POST** /image/ | Create a new image
*ImageApi* | [**imageList**](docs/Api/ImageApi.md#imagelist) | **GET** /image/ | Returns a list of images
*ImageApi* | [**imageRetrieve**](docs/Api/ImageApi.md#imageretrieve) | **GET** /image/{id}/ | Return information for single image
*ImageApi* | [**imageUpdate**](docs/Api/ImageApi.md#imageupdate) | **PUT** /image/{id}/ | Update an image
*LanguageApi* | [**languageList**](docs/Api/LanguageApi.md#languagelist) | **GET** /language/ | Return a list of languages used for describing events
*LanguageApi* | [**languageRetrieve**](docs/Api/LanguageApi.md#languageretrieve) | **GET** /language/{id}/ | Return information for single language
*SearchApi* | [**eventSearch**](docs/Api/SearchApi.md#eventsearch) | **GET** /search/ | Search through events and places


## Documentation For Models

 - [Event](docs/Model/Event.md)
 - [EventInfoUrl](docs/Model/EventInfoUrl.md)
 - [EventName](docs/Model/EventName.md)
 - [Eventlink](docs/Model/Eventlink.md)
 - [IdRef](docs/Model/IdRef.md)
 - [Image](docs/Model/Image.md)
 - [ImageName](docs/Model/ImageName.md)
 - [ImageUrl](docs/Model/ImageUrl.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [Keyword](docs/Model/Keyword.md)
 - [KeywordName](docs/Model/KeywordName.md)
 - [KeywordSet](docs/Model/KeywordSet.md)
 - [Language](docs/Model/Language.md)
 - [LanguageName](docs/Model/LanguageName.md)
 - [MetaDefinition](docs/Model/MetaDefinition.md)
 - [Offer](docs/Model/Offer.md)
 - [OfferDescription](docs/Model/OfferDescription.md)
 - [OfferInfoUrl](docs/Model/OfferInfoUrl.md)
 - [OfferPrice](docs/Model/OfferPrice.md)
 - [Place](docs/Model/Place.md)
 - [PlaceAddressLocality](docs/Model/PlaceAddressLocality.md)
 - [PlaceCustomData](docs/Model/PlaceCustomData.md)
 - [PlaceDescription](docs/Model/PlaceDescription.md)
 - [PlaceInfoUrl](docs/Model/PlaceInfoUrl.md)
 - [PlaceName](docs/Model/PlaceName.md)
 - [PlacePosition](docs/Model/PlacePosition.md)
 - [PlaceStreetAddress](docs/Model/PlaceStreetAddress.md)
 - [PlaceTelephone](docs/Model/PlaceTelephone.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




