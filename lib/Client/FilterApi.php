<?php
/**
 * FilterApi
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

namespace LinkedEvents\Client;

use \LinkedEvents\ApiClient;
use \LinkedEvents\ApiException;
use \LinkedEvents\Configuration;
use \LinkedEvents\ObjectSerializer;

/**
 * FilterApi Class Doc Comment
 *
 * @category Class
 * @package  LinkedEvents
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FilterApi
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
     * @return FilterApi
     */
    public function setApiClient(\LinkedEvents\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation keywordList
     *
     * Returns a list of keywords used for describing events
     *
     * @param int $page request particular page in paginated results (optional)
     * @param int $pageSize request that server delivers page_size results in response (optional)
     * @param string[] $include Embed given reference-type fields directly into the response, otherwise they are returned as URI references. (optional)
     * @param bool $showAllKeywords Show all keywords, including those that are not associated with any events. Otherwise such keywords are hidden. When show_all_keywords is specified, no other filter is applied, **except** \&quot;filter\&quot; (match for keywords beginning with string) (optional)
     * @param string $dataSource Search for keywords (**note**: NOT events) that come from the specified data source (see data source in keyword definition). (optional)
     * @param string $text Search for keywords (**note**: NOT events) that contain the given string. This applies even when show_all_keywords is specified. (optional)
     * @param string $sort Sort the returned keywords in the given order. Possible sorting criteria are &#39;n_events&#39;, &#39;id&#39;, &#39;name&#39;, &#39;data_source&#39;. The default ordering is &#39;-data_source&#39;, &#39;-n_events&#39;. (optional)
     * @throws \LinkedEvents\ApiException on non-2xx response
     * @return \LinkedEvents\Model\InlineResponse2002
     */
    public function keywordList($page = null, $pageSize = null, $include = null, $showAllKeywords = null, $dataSource = null, $text = null, $sort = null)
    {
        list($response) = $this->keywordListWithHttpInfo($page, $pageSize, $include, $showAllKeywords, $dataSource, $text, $sort);
        return $response;
    }

    /**
     * Operation keywordListWithHttpInfo
     *
     * Returns a list of keywords used for describing events
     *
     * @param int $page request particular page in paginated results (optional)
     * @param int $pageSize request that server delivers page_size results in response (optional)
     * @param string[] $include Embed given reference-type fields directly into the response, otherwise they are returned as URI references. (optional)
     * @param bool $showAllKeywords Show all keywords, including those that are not associated with any events. Otherwise such keywords are hidden. When show_all_keywords is specified, no other filter is applied, **except** \&quot;filter\&quot; (match for keywords beginning with string) (optional)
     * @param string $dataSource Search for keywords (**note**: NOT events) that come from the specified data source (see data source in keyword definition). (optional)
     * @param string $text Search for keywords (**note**: NOT events) that contain the given string. This applies even when show_all_keywords is specified. (optional)
     * @param string $sort Sort the returned keywords in the given order. Possible sorting criteria are &#39;n_events&#39;, &#39;id&#39;, &#39;name&#39;, &#39;data_source&#39;. The default ordering is &#39;-data_source&#39;, &#39;-n_events&#39;. (optional)
     * @throws \LinkedEvents\ApiException on non-2xx response
     * @return array of \LinkedEvents\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     */
    public function keywordListWithHttpInfo($page = null, $pageSize = null, $include = null, $showAllKeywords = null, $dataSource = null, $text = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/keyword/";
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
        if (is_array($include)) {
            $include = $this->apiClient->getSerializer()->serializeCollection($include, 'csv', true);
        }
        if ($include !== null) {
            $queryParams['include'] = $this->apiClient->getSerializer()->toQueryValue($include);
        }
        // query params
        if ($showAllKeywords !== null) {
            $queryParams['show_all_keywords'] = $this->apiClient->getSerializer()->toQueryValue($showAllKeywords);
        }
        // query params
        if ($dataSource !== null) {
            $queryParams['data_source'] = $this->apiClient->getSerializer()->toQueryValue($dataSource);
        }
        // query params
        if ($text !== null) {
            $queryParams['text'] = $this->apiClient->getSerializer()->toQueryValue($text);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
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
                '\LinkedEvents\Model\InlineResponse2002',
                '/keyword/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\LinkedEvents\Model\InlineResponse2002', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\LinkedEvents\Model\InlineResponse2002', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation keywordRetrieve
     *
     * Return information for single keyword
     *
     * @param string $id Same as id in keyword schema (required)
     * @throws \LinkedEvents\ApiException on non-2xx response
     * @return \LinkedEvents\Model\Keyword
     */
    public function keywordRetrieve($id)
    {
        list($response) = $this->keywordRetrieveWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation keywordRetrieveWithHttpInfo
     *
     * Return information for single keyword
     *
     * @param string $id Same as id in keyword schema (required)
     * @throws \LinkedEvents\ApiException on non-2xx response
     * @return array of \LinkedEvents\Model\Keyword, HTTP status code, HTTP response headers (array of strings)
     */
    public function keywordRetrieveWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling keywordRetrieve');
        }
        // parse inputs
        $resourcePath = "/keyword/{id}/";
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
                '\LinkedEvents\Model\Keyword',
                '/keyword/{id}/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\LinkedEvents\Model\Keyword', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\LinkedEvents\Model\Keyword', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation keywordSetList
     *
     * Return as list of keyword_sets for grouping keywords
     *
     * @param int $page request particular page in paginated results (optional)
     * @param int $pageSize request that server delivers page_size results in response (optional)
     * @param string[] $include Embed given reference-type fields directly into the response, otherwise they are returned as URI references. (optional)
     * @throws \LinkedEvents\ApiException on non-2xx response
     * @return \LinkedEvents\Model\InlineResponse2003
     */
    public function keywordSetList($page = null, $pageSize = null, $include = null)
    {
        list($response) = $this->keywordSetListWithHttpInfo($page, $pageSize, $include);
        return $response;
    }

    /**
     * Operation keywordSetListWithHttpInfo
     *
     * Return as list of keyword_sets for grouping keywords
     *
     * @param int $page request particular page in paginated results (optional)
     * @param int $pageSize request that server delivers page_size results in response (optional)
     * @param string[] $include Embed given reference-type fields directly into the response, otherwise they are returned as URI references. (optional)
     * @throws \LinkedEvents\ApiException on non-2xx response
     * @return array of \LinkedEvents\Model\InlineResponse2003, HTTP status code, HTTP response headers (array of strings)
     */
    public function keywordSetListWithHttpInfo($page = null, $pageSize = null, $include = null)
    {
        // parse inputs
        $resourcePath = "/keyword_set/";
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
        if (is_array($include)) {
            $include = $this->apiClient->getSerializer()->serializeCollection($include, 'csv', true);
        }
        if ($include !== null) {
            $queryParams['include'] = $this->apiClient->getSerializer()->toQueryValue($include);
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
                '\LinkedEvents\Model\InlineResponse2003',
                '/keyword_set/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\LinkedEvents\Model\InlineResponse2003', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\LinkedEvents\Model\InlineResponse2003', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation keywordSetRetrieve
     *
     * Return information about single keyword_set
     *
     * @param string $id Same as id in keyword_set schema (required)
     * @throws \LinkedEvents\ApiException on non-2xx response
     * @return \LinkedEvents\Model\KeywordSet
     */
    public function keywordSetRetrieve($id)
    {
        list($response) = $this->keywordSetRetrieveWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation keywordSetRetrieveWithHttpInfo
     *
     * Return information about single keyword_set
     *
     * @param string $id Same as id in keyword_set schema (required)
     * @throws \LinkedEvents\ApiException on non-2xx response
     * @return array of \LinkedEvents\Model\KeywordSet, HTTP status code, HTTP response headers (array of strings)
     */
    public function keywordSetRetrieveWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling keywordSetRetrieve');
        }
        // parse inputs
        $resourcePath = "/keyword_set/{id}";
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
                '\LinkedEvents\Model\KeywordSet',
                '/keyword_set/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\LinkedEvents\Model\KeywordSet', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\LinkedEvents\Model\KeywordSet', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation placeList
     *
     * Returns list of places used for describing events
     *
     * @param int $page request particular page in paginated results (optional)
     * @param int $pageSize request that server delivers page_size results in response (optional)
     * @param bool $showAllPlaces Show all places, including those that are not hosting any events. Otherwise such places are hidden. When show_all_places is specified, no other filter is applied. (optional)
     * @param string $division You may filter places by specific OCD division id, or by division name. The latter query checks all divisions with the name, regardless of division type. (optional)
     * @param string $text  (optional)
     * @param string $sort Sort the returned places in the given order. Possible sorting criteria are &#39;n_events&#39;, &#39;id&#39;, &#39;name&#39;, &#39;street_address&#39; and &#39;postal_code&#39;. The default ordering is &#39;-n_events&#39;. (optional)
     * @throws \LinkedEvents\ApiException on non-2xx response
     * @return \LinkedEvents\Model\InlineResponse2004
     */
    public function placeList($page = null, $pageSize = null, $showAllPlaces = null, $division = null, $text = null, $sort = null)
    {
        list($response) = $this->placeListWithHttpInfo($page, $pageSize, $showAllPlaces, $division, $text, $sort);
        return $response;
    }

    /**
     * Operation placeListWithHttpInfo
     *
     * Returns list of places used for describing events
     *
     * @param int $page request particular page in paginated results (optional)
     * @param int $pageSize request that server delivers page_size results in response (optional)
     * @param bool $showAllPlaces Show all places, including those that are not hosting any events. Otherwise such places are hidden. When show_all_places is specified, no other filter is applied. (optional)
     * @param string $division You may filter places by specific OCD division id, or by division name. The latter query checks all divisions with the name, regardless of division type. (optional)
     * @param string $text  (optional)
     * @param string $sort Sort the returned places in the given order. Possible sorting criteria are &#39;n_events&#39;, &#39;id&#39;, &#39;name&#39;, &#39;street_address&#39; and &#39;postal_code&#39;. The default ordering is &#39;-n_events&#39;. (optional)
     * @throws \LinkedEvents\ApiException on non-2xx response
     * @return array of \LinkedEvents\Model\InlineResponse2004, HTTP status code, HTTP response headers (array of strings)
     */
    public function placeListWithHttpInfo($page = null, $pageSize = null, $showAllPlaces = null, $division = null, $text = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/place/";
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
        if ($showAllPlaces !== null) {
            $queryParams['show_all_places'] = $this->apiClient->getSerializer()->toQueryValue($showAllPlaces);
        }
        // query params
        if ($division !== null) {
            $queryParams['division'] = $this->apiClient->getSerializer()->toQueryValue($division);
        }
        // query params
        if ($text !== null) {
            $queryParams['text'] = $this->apiClient->getSerializer()->toQueryValue($text);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
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
                '\LinkedEvents\Model\InlineResponse2004',
                '/place/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\LinkedEvents\Model\InlineResponse2004', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\LinkedEvents\Model\InlineResponse2004', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation placeRetrieve
     *
     * Return information for single place
     *
     * @param string $id Id as defined in place model (required)
     * @throws \LinkedEvents\ApiException on non-2xx response
     * @return \LinkedEvents\Model\Place
     */
    public function placeRetrieve($id)
    {
        list($response) = $this->placeRetrieveWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation placeRetrieveWithHttpInfo
     *
     * Return information for single place
     *
     * @param string $id Id as defined in place model (required)
     * @throws \LinkedEvents\ApiException on non-2xx response
     * @return array of \LinkedEvents\Model\Place, HTTP status code, HTTP response headers (array of strings)
     */
    public function placeRetrieveWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling placeRetrieve');
        }
        // parse inputs
        $resourcePath = "/place/{id}/";
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
                '\LinkedEvents\Model\Place',
                '/place/{id}/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\LinkedEvents\Model\Place', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\LinkedEvents\Model\Place', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
