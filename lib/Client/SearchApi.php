<?php
/**
 * SearchApi
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
 * SearchApi Class Doc Comment
 *
 * @category Class
 * @package  LinkedEvents
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SearchApi
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
     * @return SearchApi
     */
    public function setApiClient(\LinkedEvents\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation eventSearch
     *
     * Search through events and places
     *
     * @param int $page request particular page in paginated results (optional)
     * @param int $pageSize request that server delivers page_size results in response (optional)
     * @param string $type Comma-delimited list of resource types to search for. Currently allowed values are &#x60;event&#x60; and &#x60;place&#x60;. &#x60;type&#x3D;event&#x60; must be specified for event date filtering and relevancy sorting. (optional)
     * @param string $q Search for events and places matching this string. Mutually exclusive with &#x60;input&#x60; typeahead search. (optional)
     * @param string $input Return autocompletition suggestions for this string. Mutually exclusive with &#x60;q&#x60; full-text search. (optional)
     * @param \DateTime $start Search for events beginning or ending after this time. Dates can be specified using ISO 8601 (\&quot;2016-01-12\&quot;) and additionally \&quot;today\&quot;. (optional)
     * @param \DateTime $end Search for events beginning or ending before this time. Dates can be specified using ISO 8601 (\&quot;2016-01-12\&quot;) and additionally \&quot;today\&quot;. (optional)
     * @throws \LinkedEvents\ApiException on non-2xx response
     * @return \LinkedEvents\LinkedEvents\Model\InlineResponse200
     */
    public function eventSearch($page = null, $pageSize = null, $type = null, $q = null, $input = null, $start = null, $end = null)
    {
        list($response) = $this->eventSearchWithHttpInfo($page, $pageSize, $type, $q, $input, $start, $end);
        return $response;
    }

    /**
     * Operation eventSearchWithHttpInfo
     *
     * Search through events and places
     *
     * @param int $page request particular page in paginated results (optional)
     * @param int $pageSize request that server delivers page_size results in response (optional)
     * @param string $type Comma-delimited list of resource types to search for. Currently allowed values are &#x60;event&#x60; and &#x60;place&#x60;. &#x60;type&#x3D;event&#x60; must be specified for event date filtering and relevancy sorting. (optional)
     * @param string $q Search for events and places matching this string. Mutually exclusive with &#x60;input&#x60; typeahead search. (optional)
     * @param string $input Return autocompletition suggestions for this string. Mutually exclusive with &#x60;q&#x60; full-text search. (optional)
     * @param \DateTime $start Search for events beginning or ending after this time. Dates can be specified using ISO 8601 (\&quot;2016-01-12\&quot;) and additionally \&quot;today\&quot;. (optional)
     * @param \DateTime $end Search for events beginning or ending before this time. Dates can be specified using ISO 8601 (\&quot;2016-01-12\&quot;) and additionally \&quot;today\&quot;. (optional)
     * @throws \LinkedEvents\ApiException on non-2xx response
     * @return array of \LinkedEvents\LinkedEvents\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function eventSearchWithHttpInfo($page = null, $pageSize = null, $type = null, $q = null, $input = null, $start = null, $end = null)
    {
        // parse inputs
        $resourcePath = "/search/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($pageSize !== null) {
            $queryParams['page_size'] = $this->apiClient->getSerializer()->toQueryValue($pageSize);
        }
        // query params
        if ($type !== null) {
            $queryParams['type'] = $this->apiClient->getSerializer()->toQueryValue($type);
        }
        // query params
        if ($q !== null) {
            $queryParams['q'] = $this->apiClient->getSerializer()->toQueryValue($q);
        }
        // query params
        if ($input !== null) {
            $queryParams['input'] = $this->apiClient->getSerializer()->toQueryValue($input);
        }
        // query params
        if ($start !== null) {
            $queryParams['start'] = $this->apiClient->getSerializer()->toQueryValue($start);
        }
        // query params
        if ($end !== null) {
            $queryParams['end'] = $this->apiClient->getSerializer()->toQueryValue($end);
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
                '\LinkedEvents\LinkedEvents\Model\InlineResponse200',
                '/search/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\LinkedEvents\LinkedEvents\Model\InlineResponse200', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\LinkedEvents\LinkedEvents\Model\InlineResponse200', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
