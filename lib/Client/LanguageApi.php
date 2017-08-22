<?php
/**
 * LanguageApi
 * PHP version 5
 *
 * @category Class
 * @package  LinkedEvents
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Linked Events information API
 *
 * Linked Events provides categorized data on events and places using JSON-LD format.  Events can be searched by date and location. Location can be exact address or larger area such as neighbourhood or borough  JSON-LD format is streamlined using include mechanism. API users can request that certain fields are included directly into the result, instead of being hyperlinks to objects.  Several fields are multilingual. These are implemented as object with each language variant as property. In this specification each multilingual field has (fi,sv,en) property triplet as example.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace LinkedEvents\LinkedEvents\Client;

use \LinkedEvents\ApiClient;
use \LinkedEvents\ApiException;
use \LinkedEvents\Configuration;
use \LinkedEvents\ObjectSerializer;

/**
 * LanguageApi Class Doc Comment
 *
 * @category Class
 * @package  LinkedEvents
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LanguageApi
{
    /**
     * API Client
     *
     * @var \LinkedEvents\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \LinkedEvents\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\LinkedEvents\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \LinkedEvents\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \LinkedEvents\ApiClient $apiClient set the API client
     *
     * @return LanguageApi
     */
    public function setApiClient(\LinkedEvents\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation languageList
     *
     * Return a list of languages used for describing events
     *
     * @throws \LinkedEvents\ApiException on non-2xx response
     * @return \LinkedEvents\LinkedEvents\Model\InlineResponse2005
     */
    public function languageList()
    {
        list($response) = $this->languageListWithHttpInfo();
        return $response;
    }

    /**
     * Operation languageListWithHttpInfo
     *
     * Return a list of languages used for describing events
     *
     * @throws \LinkedEvents\ApiException on non-2xx response
     * @return array of \LinkedEvents\LinkedEvents\Model\InlineResponse2005, HTTP status code, HTTP response headers (array of strings)
     */
    public function languageListWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/language/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\LinkedEvents\LinkedEvents\Model\InlineResponse2005',
                '/language/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\LinkedEvents\LinkedEvents\Model\InlineResponse2005', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\LinkedEvents\LinkedEvents\Model\InlineResponse2005', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation languageRetrieve
     *
     * Return information for single language
     *
     * @param string $id  (required)
     * @throws \LinkedEvents\ApiException on non-2xx response
     * @return \LinkedEvents\LinkedEvents\Model\Language
     */
    public function languageRetrieve($id)
    {
        list($response) = $this->languageRetrieveWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation languageRetrieveWithHttpInfo
     *
     * Return information for single language
     *
     * @param string $id  (required)
     * @throws \LinkedEvents\ApiException on non-2xx response
     * @return array of \LinkedEvents\LinkedEvents\Model\Language, HTTP status code, HTTP response headers (array of strings)
     */
    public function languageRetrieveWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling languageRetrieve');
        }
        // parse inputs
        $resourcePath = "/language/{id}/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\LinkedEvents\LinkedEvents\Model\Language',
                '/language/{id}/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\LinkedEvents\LinkedEvents\Model\Language', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\LinkedEvents\LinkedEvents\Model\Language', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
