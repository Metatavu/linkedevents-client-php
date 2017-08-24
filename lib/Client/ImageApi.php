<?php
/**
 * ImageApi
 * PHP version 5
 *
 * @category Class
 * @package  Metatavu\LinkedEvents
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

namespace Metatavu\LinkedEvents\Client;

use \Metatavu\LinkedEvents\ApiClient;
use \Metatavu\LinkedEvents\ApiException;
use \Metatavu\LinkedEvents\Configuration;
use \Metatavu\LinkedEvents\ObjectSerializer;

/**
 * ImageApi Class Doc Comment
 *
 * @category Class
 * @package  Metatavu\LinkedEvents
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ImageApi
{
    /**
     * API Client
     *
     * @var \Metatavu\LinkedEvents\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Metatavu\LinkedEvents\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Metatavu\LinkedEvents\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Metatavu\LinkedEvents\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Metatavu\LinkedEvents\ApiClient $apiClient set the API client
     *
     * @return ImageApi
     */
    public function setApiClient(\Metatavu\LinkedEvents\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation imageCreate
     *
     * Create a new image
     *
     * @param \SplFileObject $imageFile  (optional)
     * @throws \Metatavu\LinkedEvents\ApiException on non-2xx response
     * @return \Metatavu\LinkedEvents\Model\Image
     */
    public function imageCreate($imageFile = null)
    {
        list($response) = $this->imageCreateWithHttpInfo($imageFile);
        return $response;
    }

    /**
     * Operation imageCreateWithHttpInfo
     *
     * Create a new image
     *
     * @param \SplFileObject $imageFile  (optional)
     * @throws \Metatavu\LinkedEvents\ApiException on non-2xx response
     * @return array of \Metatavu\LinkedEvents\Model\Image, HTTP status code, HTTP response headers (array of strings)
     */
    public function imageCreateWithHttpInfo($imageFile = null)
    {
        // parse inputs
        $resourcePath = "/image/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['multipart/form-data']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($imageFile !== null) {
            // PHP 5.5 introduced a CurlFile object that deprecates the old @filename syntax
            // See: https://wiki.php.net/rfc/curl-file-upload
            if (function_exists('curl_file_create')) {
                $formParams['image_file'] = curl_file_create($this->apiClient->getSerializer()->toFormValue($imageFile));
            } else {
                $formParams['image_file'] = '@' . $this->apiClient->getSerializer()->toFormValue($imageFile);
            }
        }
        
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Metatavu\LinkedEvents\Model\Image',
                '/image/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Metatavu\LinkedEvents\Model\Image', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Metatavu\LinkedEvents\Model\Image', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation imageList
     *
     * Returns a list of images
     *
     * @param int $page request particular page in paginated results (optional)
     * @param int $pageSize request that server delivers page_size results in response (optional)
     * @param string[] $include Embed given reference-type fields directly into the response, otherwise they are returned as URI references. (optional)
     * @param string $sort return the results in ascending or descending order by the named field. sorting is only supported for some string, integer and datetime fields. (optional)
     * @throws \Metatavu\LinkedEvents\ApiException on non-2xx response
     * @return \Metatavu\LinkedEvents\Model\InlineResponse2001
     */
    public function imageList($page = null, $pageSize = null, $include = null, $sort = null)
    {
        list($response) = $this->imageListWithHttpInfo($page, $pageSize, $include, $sort);
        return $response;
    }

    /**
     * Operation imageListWithHttpInfo
     *
     * Returns a list of images
     *
     * @param int $page request particular page in paginated results (optional)
     * @param int $pageSize request that server delivers page_size results in response (optional)
     * @param string[] $include Embed given reference-type fields directly into the response, otherwise they are returned as URI references. (optional)
     * @param string $sort return the results in ascending or descending order by the named field. sorting is only supported for some string, integer and datetime fields. (optional)
     * @throws \Metatavu\LinkedEvents\ApiException on non-2xx response
     * @return array of \Metatavu\LinkedEvents\Model\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     */
    public function imageListWithHttpInfo($page = null, $pageSize = null, $include = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/image/";
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
                '\Metatavu\LinkedEvents\Model\InlineResponse2001',
                '/image/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Metatavu\LinkedEvents\Model\InlineResponse2001', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Metatavu\LinkedEvents\Model\InlineResponse2001', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation imageRetrieve
     *
     * Return information for single image
     *
     * @param string $id The id for the image (required)
     * @throws \Metatavu\LinkedEvents\ApiException on non-2xx response
     * @return \Metatavu\LinkedEvents\Model\Image
     */
    public function imageRetrieve($id)
    {
        list($response) = $this->imageRetrieveWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation imageRetrieveWithHttpInfo
     *
     * Return information for single image
     *
     * @param string $id The id for the image (required)
     * @throws \Metatavu\LinkedEvents\ApiException on non-2xx response
     * @return array of \Metatavu\LinkedEvents\Model\Image, HTTP status code, HTTP response headers (array of strings)
     */
    public function imageRetrieveWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling imageRetrieve');
        }
        // parse inputs
        $resourcePath = "/image/{id}/";
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
                '\Metatavu\LinkedEvents\Model\Image',
                '/image/{id}/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Metatavu\LinkedEvents\Model\Image', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Metatavu\LinkedEvents\Model\Image', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation imageUpdate
     *
     * Update an image
     *
     * @param string $id Identifier for the image to be updated (required)
     * @param \Metatavu\LinkedEvents\Model\Image $imageObject Image object that should replace the existing image, note that some implementations may retain unspecified fields at their original values. (optional)
     * @throws \Metatavu\LinkedEvents\ApiException on non-2xx response
     * @return \Metatavu\LinkedEvents\Model\Image
     */
    public function imageUpdate($id, $imageObject = null)
    {
        list($response) = $this->imageUpdateWithHttpInfo($id, $imageObject);
        return $response;
    }

    /**
     * Operation imageUpdateWithHttpInfo
     *
     * Update an image
     *
     * @param string $id Identifier for the image to be updated (required)
     * @param \Metatavu\LinkedEvents\Model\Image $imageObject Image object that should replace the existing image, note that some implementations may retain unspecified fields at their original values. (optional)
     * @throws \Metatavu\LinkedEvents\ApiException on non-2xx response
     * @return array of \Metatavu\LinkedEvents\Model\Image, HTTP status code, HTTP response headers (array of strings)
     */
    public function imageUpdateWithHttpInfo($id, $imageObject = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling imageUpdate');
        }
        // parse inputs
        $resourcePath = "/image/{id}/";
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

        // body params
        $_tempBody = null;
        if (isset($imageObject)) {
            $_tempBody = $imageObject;
        }

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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Metatavu\LinkedEvents\Model\Image',
                '/image/{id}/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Metatavu\LinkedEvents\Model\Image', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Metatavu\LinkedEvents\Model\Image', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
