<?php
/**
 * InventoryItemApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MYOB AccountRight
 *
 * ![Beta](https://s3-ap-southeast-2.amazonaws.com/addons.myob.cloud/postman_assets/arl_postman_beta.jpg \"Beta\")  # Welcome A collection of endpoints for Postman when working with the MYOB AccountRight API Please note **this postman collection is in beta** - last updated Jan 2021  **Note:** we have a quick [getting started video you can watch on our developer site here](http://developers.myob.com/api/accountright/accountright-postman-collection/).  To use this API you will need to make calls to `https://api.myob.com/accountright` This API makes use of OAUTH2.0 and will require you to complete the OAUTH flow to obtain **access_tokens** for making calls to this API.  Authorisation is to the users account, the first call you make to the API will return a **_list of company files_** that are within this users account.  Future calls will involve using the URI for the company file the users selects.  **Note:** all future calls you make will be to an url that looks like `https://arX.api.myob.com/accountright` where **x** is a number. This allows the API to route you to the correct location for that specific file.  ### Expectations This collection of endpoints and methods has been created to guide and assist you as you work with the **MYOB AccountRight API**. It is _not_ intended to be a replacement to MYOB's documentation nor support channels. Best efforts have been undertaken to as accurately as possible represent and give samples of how to work with the API. Most **POST** and **PUT** examples will only submit the minimum required items, for a full list of potential items for any endpoint, please refer to the **[http://developers.myob.com/](http://developers.myob.com/)** documentation.   # Getting started The first thing you will need to do is open this collection in [Postman](https://www.getpostman.com/) - which if you haven't used before, is a power REST API explorer tool that allows you to quickly and easily explore API endpoints, make calls and fetch data.   Once you have the collection running in Postman you'll need some **MYOB API Keys** and an **MYOB AccountRight Sandbox company file** to test with. These are free, and easily obtained from the [MYOB Developers API portal](http://developers.myob.com/) - please note: all api registrations and sandbox file allocations are manually reviewed before being granted. Learn more about **[Getting Started with the MYOB AccountRight API](http://developers.myob.com/api/accountright/api-overview/getting-started/)**. Once you have a **my.myob** login, you will need to [login and register your Application](https://my.myob.com.au/Bd/pages/DevAppList.aspx), which will give you the API credentials. Note that for working with postman, make sure that one of the `redirect_uri` that you setup is `https://oauth.pstmn.io/v1/callback` - you can have multiple so in the redirect uri form you can enter `https://oauth.pstmn.io/v1/callback,https://staging.mydomain.xyz,https://production.mydomain.abc` to use your keys across multiple environments.  Now that you have your API Credentials and you have opened this collection in Postman you will see a **collection** called MYOB AccountRight, and if you _mouse over_ this collection, on the right you will see an ellipsis **...** - click this and then hit EDIT. Here you will find 5 tabs Description (this content), Authorization, Pre-request Scripts, Tests and Variables.  ## Setting up the variables Head to the **Variables** tab, and fill in the `client_id` and `client_secret` along with your `redirect_uri` (note: make sure this is **not** url encoded when you paste it here).  ## Authorization Now switch over to the **Authorization** tab, and click the orange **Get New Access Token** button. You will notice most of this is prefilled for you. For now simply click **request token** and it should take you through the standard OAUTH 2.0 flow. You'll see the MYOB login screen, login and grant permission for your app. It should now redirect you to Postman with a acess token.  **NOTE**: if you see an `invalid_request` message, the most usual issue will be with your `redirect_uri` or the `scope` paramater.   Postman will now display the response body, scroll to the bottom and click **use token**, and then click **Update** on the bottom of the _edit collection_ window. This setups up the **authorization headers** for the collection. All of the endpoints are setup to inherit this token and use it for calls. Note this collection does not (_yet_) auto-refresh the token, so you will need to redo that last **authorization** step roughly every 20mins as that's the life time of an MYOB Access Token.  ## Go exploring. At this point you can start exploring the API. You might have spotted in the Variables tab a couple of other items that expect data - these are the `company_file_uri` and `company_file_id` - you get these after making a **GET** request to the **_List Company Files_** endpoint found in the _General API Endpoints_ folder. The Company File URI looks like `https://arx.api.myob.com/accountright` where the **x** is a number. The Company File ID is the UID of the file. These two variables are used in subsequent calls to the API to read/write data to a specific MYOB AccountRight Company File.  # Need Support? If you need support or want to read the full API Documentation you can head to: * [MYOB AccountRight API Documentation](http://developers.myob.com/api/accountright/v2/) * [Log a Ticket with API Support](https://apisupport.myob.com/hc/en-us/requests/new?ticket_form_id=215283)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * InventoryItemApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InventoryItemApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'companyFileIdInventoryItemGet' => [
            'application/json',
        ],
        'companyFileIdInventoryItemGuidDelete' => [
            'application/json',
        ],
        'companyFileIdInventoryItemGuidPut' => [
            'application/json',
        ],
        'companyFileIdInventoryItemPost' => [
            'application/json',
        ],
        'companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821Put' => [
            'application/json',
        ],
        'companyFileIdInventoryItemPriceMatrixGet' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation companyFileIdInventoryItemGet
     *
     * Fetch a list of items
     *
     * @param  string $company_file_id company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemGet'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function companyFileIdInventoryItemGet($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdInventoryItemGet'][0])
    {
        list($response) = $this->companyFileIdInventoryItemGetWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType);
        return $response;
    }

    /**
     * Operation companyFileIdInventoryItemGetWithHttpInfo
     *
     * Fetch a list of items
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemGet'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyFileIdInventoryItemGetWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdInventoryItemGet'][0])
    {
        $request = $this->companyFileIdInventoryItemGetRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('object' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('object' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation companyFileIdInventoryItemGetAsync
     *
     * Fetch a list of items
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdInventoryItemGetAsync($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdInventoryItemGet'][0])
    {
        return $this->companyFileIdInventoryItemGetAsyncWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation companyFileIdInventoryItemGetAsyncWithHttpInfo
     *
     * Fetch a list of items
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdInventoryItemGetAsyncWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdInventoryItemGet'][0])
    {
        $returnType = 'object';
        $request = $this->companyFileIdInventoryItemGetRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'companyFileIdInventoryItemGet'
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function companyFileIdInventoryItemGetRequest($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdInventoryItemGet'][0])
    {

        // verify the required parameter 'company_file_id' is set
        if ($company_file_id === null || (is_array($company_file_id) && count($company_file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_file_id when calling companyFileIdInventoryItemGet'
            );
        }





        $resourcePath = '/{company_file_id}/Inventory/Item';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_myobapi_key !== null) {
            $headerParams['x-myobapi-key'] = ObjectSerializer::toHeaderValue($x_myobapi_key);
        }
        // header params
        if ($x_myobapi_version !== null) {
            $headerParams['x-myobapi-version'] = ObjectSerializer::toHeaderValue($x_myobapi_version);
        }
        // header params
        if ($accept_encoding !== null) {
            $headerParams['Accept-Encoding'] = ObjectSerializer::toHeaderValue($accept_encoding);
        }

        // path params
        if ($company_file_id !== null) {
            $resourcePath = str_replace(
                '{' . 'company_file_id' . '}',
                ObjectSerializer::toPathValue($company_file_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation companyFileIdInventoryItemGuidDelete
     *
     * Delete an item
     *
     * @param  string $company_file_id company_file_id (required)
     * @param  string $guid guid (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding accept_encoding (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemGuidDelete'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function companyFileIdInventoryItemGuidDelete($company_file_id, $guid, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, string $contentType = self::contentTypes['companyFileIdInventoryItemGuidDelete'][0])
    {
        list($response) = $this->companyFileIdInventoryItemGuidDeleteWithHttpInfo($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $contentType);
        return $response;
    }

    /**
     * Operation companyFileIdInventoryItemGuidDeleteWithHttpInfo
     *
     * Delete an item
     *
     * @param  string $company_file_id (required)
     * @param  string $guid (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemGuidDelete'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyFileIdInventoryItemGuidDeleteWithHttpInfo($company_file_id, $guid, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, string $contentType = self::contentTypes['companyFileIdInventoryItemGuidDelete'][0])
    {
        $request = $this->companyFileIdInventoryItemGuidDeleteRequest($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('string' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('string' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'string', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'string';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation companyFileIdInventoryItemGuidDeleteAsync
     *
     * Delete an item
     *
     * @param  string $company_file_id (required)
     * @param  string $guid (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemGuidDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdInventoryItemGuidDeleteAsync($company_file_id, $guid, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, string $contentType = self::contentTypes['companyFileIdInventoryItemGuidDelete'][0])
    {
        return $this->companyFileIdInventoryItemGuidDeleteAsyncWithHttpInfo($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation companyFileIdInventoryItemGuidDeleteAsyncWithHttpInfo
     *
     * Delete an item
     *
     * @param  string $company_file_id (required)
     * @param  string $guid (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemGuidDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdInventoryItemGuidDeleteAsyncWithHttpInfo($company_file_id, $guid, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, string $contentType = self::contentTypes['companyFileIdInventoryItemGuidDelete'][0])
    {
        $returnType = 'string';
        $request = $this->companyFileIdInventoryItemGuidDeleteRequest($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'companyFileIdInventoryItemGuidDelete'
     *
     * @param  string $company_file_id (required)
     * @param  string $guid (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemGuidDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function companyFileIdInventoryItemGuidDeleteRequest($company_file_id, $guid, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, string $contentType = self::contentTypes['companyFileIdInventoryItemGuidDelete'][0])
    {

        // verify the required parameter 'company_file_id' is set
        if ($company_file_id === null || (is_array($company_file_id) && count($company_file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_file_id when calling companyFileIdInventoryItemGuidDelete'
            );
        }

        // verify the required parameter 'guid' is set
        if ($guid === null || (is_array($guid) && count($guid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $guid when calling companyFileIdInventoryItemGuidDelete'
            );
        }






        $resourcePath = '/{company_file_id}/Inventory/Item/{guid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_myobapi_key !== null) {
            $headerParams['x-myobapi-key'] = ObjectSerializer::toHeaderValue($x_myobapi_key);
        }
        // header params
        if ($x_myobapi_version !== null) {
            $headerParams['x-myobapi-version'] = ObjectSerializer::toHeaderValue($x_myobapi_version);
        }
        // header params
        if ($accept_encoding !== null) {
            $headerParams['Accept-Encoding'] = ObjectSerializer::toHeaderValue($accept_encoding);
        }
        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }

        // path params
        if ($company_file_id !== null) {
            $resourcePath = str_replace(
                '{' . 'company_file_id' . '}',
                ObjectSerializer::toPathValue($company_file_id),
                $resourcePath
            );
        }
        // path params
        if ($guid !== null) {
            $resourcePath = str_replace(
                '{' . 'guid' . '}',
                ObjectSerializer::toPathValue($guid),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['text/plain', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'DELETE',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation companyFileIdInventoryItemGuidPut
     *
     * Update an item
     *
     * @param  string $company_file_id company_file_id (required)
     * @param  string $guid guid (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding accept_encoding (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $body body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemGuidPut'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function companyFileIdInventoryItemGuidPut($company_file_id, $guid, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdInventoryItemGuidPut'][0])
    {
        list($response) = $this->companyFileIdInventoryItemGuidPutWithHttpInfo($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType);
        return $response;
    }

    /**
     * Operation companyFileIdInventoryItemGuidPutWithHttpInfo
     *
     * Update an item
     *
     * @param  string $company_file_id (required)
     * @param  string $guid (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemGuidPut'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyFileIdInventoryItemGuidPutWithHttpInfo($company_file_id, $guid, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdInventoryItemGuidPut'][0])
    {
        $request = $this->companyFileIdInventoryItemGuidPutRequest($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('string' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('string' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'string', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'string';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation companyFileIdInventoryItemGuidPutAsync
     *
     * Update an item
     *
     * @param  string $company_file_id (required)
     * @param  string $guid (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemGuidPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdInventoryItemGuidPutAsync($company_file_id, $guid, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdInventoryItemGuidPut'][0])
    {
        return $this->companyFileIdInventoryItemGuidPutAsyncWithHttpInfo($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation companyFileIdInventoryItemGuidPutAsyncWithHttpInfo
     *
     * Update an item
     *
     * @param  string $company_file_id (required)
     * @param  string $guid (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemGuidPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdInventoryItemGuidPutAsyncWithHttpInfo($company_file_id, $guid, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdInventoryItemGuidPut'][0])
    {
        $returnType = 'string';
        $request = $this->companyFileIdInventoryItemGuidPutRequest($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'companyFileIdInventoryItemGuidPut'
     *
     * @param  string $company_file_id (required)
     * @param  string $guid (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemGuidPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function companyFileIdInventoryItemGuidPutRequest($company_file_id, $guid, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdInventoryItemGuidPut'][0])
    {

        // verify the required parameter 'company_file_id' is set
        if ($company_file_id === null || (is_array($company_file_id) && count($company_file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_file_id when calling companyFileIdInventoryItemGuidPut'
            );
        }

        // verify the required parameter 'guid' is set
        if ($guid === null || (is_array($guid) && count($guid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $guid when calling companyFileIdInventoryItemGuidPut'
            );
        }







        $resourcePath = '/{company_file_id}/Inventory/Item/{guid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_myobapi_key !== null) {
            $headerParams['x-myobapi-key'] = ObjectSerializer::toHeaderValue($x_myobapi_key);
        }
        // header params
        if ($x_myobapi_version !== null) {
            $headerParams['x-myobapi-version'] = ObjectSerializer::toHeaderValue($x_myobapi_version);
        }
        // header params
        if ($accept_encoding !== null) {
            $headerParams['Accept-Encoding'] = ObjectSerializer::toHeaderValue($accept_encoding);
        }
        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }

        // path params
        if ($company_file_id !== null) {
            $resourcePath = str_replace(
                '{' . 'company_file_id' . '}',
                ObjectSerializer::toPathValue($company_file_id),
                $resourcePath
            );
        }
        // path params
        if ($guid !== null) {
            $resourcePath = str_replace(
                '{' . 'guid' . '}',
                ObjectSerializer::toPathValue($guid),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['text/plain', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation companyFileIdInventoryItemPost
     *
     * Create a new item
     *
     * @param  string $company_file_id company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding accept_encoding (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $body body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemPost'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function companyFileIdInventoryItemPost($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdInventoryItemPost'][0])
    {
        list($response) = $this->companyFileIdInventoryItemPostWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType);
        return $response;
    }

    /**
     * Operation companyFileIdInventoryItemPostWithHttpInfo
     *
     * Create a new item
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemPost'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyFileIdInventoryItemPostWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdInventoryItemPost'][0])
    {
        $request = $this->companyFileIdInventoryItemPostRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 201:
                    if ('string' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('string' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'string', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'string';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation companyFileIdInventoryItemPostAsync
     *
     * Create a new item
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdInventoryItemPostAsync($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdInventoryItemPost'][0])
    {
        return $this->companyFileIdInventoryItemPostAsyncWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation companyFileIdInventoryItemPostAsyncWithHttpInfo
     *
     * Create a new item
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdInventoryItemPostAsyncWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdInventoryItemPost'][0])
    {
        $returnType = 'string';
        $request = $this->companyFileIdInventoryItemPostRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'companyFileIdInventoryItemPost'
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function companyFileIdInventoryItemPostRequest($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdInventoryItemPost'][0])
    {

        // verify the required parameter 'company_file_id' is set
        if ($company_file_id === null || (is_array($company_file_id) && count($company_file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_file_id when calling companyFileIdInventoryItemPost'
            );
        }







        $resourcePath = '/{company_file_id}/Inventory/Item';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_myobapi_key !== null) {
            $headerParams['x-myobapi-key'] = ObjectSerializer::toHeaderValue($x_myobapi_key);
        }
        // header params
        if ($x_myobapi_version !== null) {
            $headerParams['x-myobapi-version'] = ObjectSerializer::toHeaderValue($x_myobapi_version);
        }
        // header params
        if ($accept_encoding !== null) {
            $headerParams['Accept-Encoding'] = ObjectSerializer::toHeaderValue($accept_encoding);
        }
        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }

        // path params
        if ($company_file_id !== null) {
            $resourcePath = str_replace(
                '{' . 'company_file_id' . '}',
                ObjectSerializer::toPathValue($company_file_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['text/plain', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821Put
     *
     * Update a specific price matrix
     *
     * @param  string $company_file_id company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding accept_encoding (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $body body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821Put'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821Put($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821Put'][0])
    {
        list($response) = $this->companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821PutWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType);
        return $response;
    }

    /**
     * Operation companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821PutWithHttpInfo
     *
     * Update a specific price matrix
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821Put'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821PutWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821Put'][0])
    {
        $request = $this->companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821PutRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('string' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('string' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'string', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'string';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821PutAsync
     *
     * Update a specific price matrix
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821Put'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821PutAsync($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821Put'][0])
    {
        return $this->companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821PutAsyncWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821PutAsyncWithHttpInfo
     *
     * Update a specific price matrix
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821Put'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821PutAsyncWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821Put'][0])
    {
        $returnType = 'string';
        $request = $this->companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821PutRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821Put'
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821Put'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821PutRequest($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821Put'][0])
    {

        // verify the required parameter 'company_file_id' is set
        if ($company_file_id === null || (is_array($company_file_id) && count($company_file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_file_id when calling companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821Put'
            );
        }







        $resourcePath = '/{company_file_id}/Inventory/ItemPriceMatrix/37af587e-b799-4568-b3cf-82c120745821';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_myobapi_key !== null) {
            $headerParams['x-myobapi-key'] = ObjectSerializer::toHeaderValue($x_myobapi_key);
        }
        // header params
        if ($x_myobapi_version !== null) {
            $headerParams['x-myobapi-version'] = ObjectSerializer::toHeaderValue($x_myobapi_version);
        }
        // header params
        if ($accept_encoding !== null) {
            $headerParams['Accept-Encoding'] = ObjectSerializer::toHeaderValue($accept_encoding);
        }
        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }

        // path params
        if ($company_file_id !== null) {
            $resourcePath = str_replace(
                '{' . 'company_file_id' . '}',
                ObjectSerializer::toPathValue($company_file_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['text/plain', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation companyFileIdInventoryItemPriceMatrixGet
     *
     * List the pricing matrices for all items
     *
     * @param  string $company_file_id company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemPriceMatrixGet'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function companyFileIdInventoryItemPriceMatrixGet($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdInventoryItemPriceMatrixGet'][0])
    {
        list($response) = $this->companyFileIdInventoryItemPriceMatrixGetWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType);
        return $response;
    }

    /**
     * Operation companyFileIdInventoryItemPriceMatrixGetWithHttpInfo
     *
     * List the pricing matrices for all items
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemPriceMatrixGet'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyFileIdInventoryItemPriceMatrixGetWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdInventoryItemPriceMatrixGet'][0])
    {
        $request = $this->companyFileIdInventoryItemPriceMatrixGetRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('object' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('object' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation companyFileIdInventoryItemPriceMatrixGetAsync
     *
     * List the pricing matrices for all items
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemPriceMatrixGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdInventoryItemPriceMatrixGetAsync($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdInventoryItemPriceMatrixGet'][0])
    {
        return $this->companyFileIdInventoryItemPriceMatrixGetAsyncWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation companyFileIdInventoryItemPriceMatrixGetAsyncWithHttpInfo
     *
     * List the pricing matrices for all items
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemPriceMatrixGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdInventoryItemPriceMatrixGetAsyncWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdInventoryItemPriceMatrixGet'][0])
    {
        $returnType = 'object';
        $request = $this->companyFileIdInventoryItemPriceMatrixGetRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'companyFileIdInventoryItemPriceMatrixGet'
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdInventoryItemPriceMatrixGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function companyFileIdInventoryItemPriceMatrixGetRequest($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdInventoryItemPriceMatrixGet'][0])
    {

        // verify the required parameter 'company_file_id' is set
        if ($company_file_id === null || (is_array($company_file_id) && count($company_file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_file_id when calling companyFileIdInventoryItemPriceMatrixGet'
            );
        }





        $resourcePath = '/{company_file_id}/Inventory/ItemPriceMatrix';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_myobapi_key !== null) {
            $headerParams['x-myobapi-key'] = ObjectSerializer::toHeaderValue($x_myobapi_key);
        }
        // header params
        if ($x_myobapi_version !== null) {
            $headerParams['x-myobapi-version'] = ObjectSerializer::toHeaderValue($x_myobapi_version);
        }
        // header params
        if ($accept_encoding !== null) {
            $headerParams['Accept-Encoding'] = ObjectSerializer::toHeaderValue($accept_encoding);
        }

        // path params
        if ($company_file_id !== null) {
            $resourcePath = str_replace(
                '{' . 'company_file_id' . '}',
                ObjectSerializer::toPathValue($company_file_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
