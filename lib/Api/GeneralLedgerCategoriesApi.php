<?php
/**
 * GeneralLedgerCategoriesApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Webfox\MYOB\Client
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

namespace Webfox\MYOB\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Webfox\MYOB\Client\ApiException;
use Webfox\MYOB\Client\Configuration;
use Webfox\MYOB\Client\HeaderSelector;
use Webfox\MYOB\Client\ObjectSerializer;

/**
 * GeneralLedgerCategoriesApi Class Doc Comment
 *
 * @category Class
 * @package  Webfox\MYOB\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GeneralLedgerCategoriesApi
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
        'companyFileIdGeneralLedgerCategoryCategoryIdDelete' => [
            'application/json',
        ],
        'companyFileIdGeneralLedgerCategoryCategoryIdPut' => [
            'application/json',
        ],
        'companyFileIdGeneralLedgerCategoryGet' => [
            'application/json',
        ],
        'companyFileIdGeneralLedgerCategoryPost' => [
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
     * Operation companyFileIdGeneralLedgerCategoryCategoryIdDelete
     *
     * Delete a category
     *
     * @param  string $company_file_id company_file_id (required)
     * @param  string $category_id category_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdGeneralLedgerCategoryCategoryIdDelete'] to see the possible values for this operation
     *
     * @throws \Webfox\MYOB\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function companyFileIdGeneralLedgerCategoryCategoryIdDelete($company_file_id, $category_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdGeneralLedgerCategoryCategoryIdDelete'][0])
    {
        $this->companyFileIdGeneralLedgerCategoryCategoryIdDeleteWithHttpInfo($company_file_id, $category_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType);
    }

    /**
     * Operation companyFileIdGeneralLedgerCategoryCategoryIdDeleteWithHttpInfo
     *
     * Delete a category
     *
     * @param  string $company_file_id (required)
     * @param  string $category_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdGeneralLedgerCategoryCategoryIdDelete'] to see the possible values for this operation
     *
     * @throws \Webfox\MYOB\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyFileIdGeneralLedgerCategoryCategoryIdDeleteWithHttpInfo($company_file_id, $category_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdGeneralLedgerCategoryCategoryIdDelete'][0])
    {
        $request = $this->companyFileIdGeneralLedgerCategoryCategoryIdDeleteRequest($company_file_id, $category_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation companyFileIdGeneralLedgerCategoryCategoryIdDeleteAsync
     *
     * Delete a category
     *
     * @param  string $company_file_id (required)
     * @param  string $category_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdGeneralLedgerCategoryCategoryIdDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdGeneralLedgerCategoryCategoryIdDeleteAsync($company_file_id, $category_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdGeneralLedgerCategoryCategoryIdDelete'][0])
    {
        return $this->companyFileIdGeneralLedgerCategoryCategoryIdDeleteAsyncWithHttpInfo($company_file_id, $category_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation companyFileIdGeneralLedgerCategoryCategoryIdDeleteAsyncWithHttpInfo
     *
     * Delete a category
     *
     * @param  string $company_file_id (required)
     * @param  string $category_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdGeneralLedgerCategoryCategoryIdDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdGeneralLedgerCategoryCategoryIdDeleteAsyncWithHttpInfo($company_file_id, $category_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdGeneralLedgerCategoryCategoryIdDelete'][0])
    {
        $returnType = '';
        $request = $this->companyFileIdGeneralLedgerCategoryCategoryIdDeleteRequest($company_file_id, $category_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'companyFileIdGeneralLedgerCategoryCategoryIdDelete'
     *
     * @param  string $company_file_id (required)
     * @param  string $category_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdGeneralLedgerCategoryCategoryIdDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function companyFileIdGeneralLedgerCategoryCategoryIdDeleteRequest($company_file_id, $category_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdGeneralLedgerCategoryCategoryIdDelete'][0])
    {

        // verify the required parameter 'company_file_id' is set
        if ($company_file_id === null || (is_array($company_file_id) && count($company_file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_file_id when calling companyFileIdGeneralLedgerCategoryCategoryIdDelete'
            );
        }

        // verify the required parameter 'category_id' is set
        if ($category_id === null || (is_array($category_id) && count($category_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $category_id when calling companyFileIdGeneralLedgerCategoryCategoryIdDelete'
            );
        }





        $resourcePath = '/{company_file_id}/GeneralLedger/Category/{category_id}';
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
        // path params
        if ($category_id !== null) {
            $resourcePath = str_replace(
                '{' . 'category_id' . '}',
                ObjectSerializer::toPathValue($category_id),
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
            'DELETE',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation companyFileIdGeneralLedgerCategoryCategoryIdPut
     *
     * Update a category
     *
     * @param  string $company_file_id company_file_id (required)
     * @param  string $category_id category_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding accept_encoding (optional)
     * @param  string $body body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdGeneralLedgerCategoryCategoryIdPut'] to see the possible values for this operation
     *
     * @throws \Webfox\MYOB\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function companyFileIdGeneralLedgerCategoryCategoryIdPut($company_file_id, $category_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $body = null, string $contentType = self::contentTypes['companyFileIdGeneralLedgerCategoryCategoryIdPut'][0])
    {
        $this->companyFileIdGeneralLedgerCategoryCategoryIdPutWithHttpInfo($company_file_id, $category_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $body, $contentType);
    }

    /**
     * Operation companyFileIdGeneralLedgerCategoryCategoryIdPutWithHttpInfo
     *
     * Update a category
     *
     * @param  string $company_file_id (required)
     * @param  string $category_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdGeneralLedgerCategoryCategoryIdPut'] to see the possible values for this operation
     *
     * @throws \Webfox\MYOB\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyFileIdGeneralLedgerCategoryCategoryIdPutWithHttpInfo($company_file_id, $category_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $body = null, string $contentType = self::contentTypes['companyFileIdGeneralLedgerCategoryCategoryIdPut'][0])
    {
        $request = $this->companyFileIdGeneralLedgerCategoryCategoryIdPutRequest($company_file_id, $category_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $body, $contentType);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation companyFileIdGeneralLedgerCategoryCategoryIdPutAsync
     *
     * Update a category
     *
     * @param  string $company_file_id (required)
     * @param  string $category_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdGeneralLedgerCategoryCategoryIdPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdGeneralLedgerCategoryCategoryIdPutAsync($company_file_id, $category_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $body = null, string $contentType = self::contentTypes['companyFileIdGeneralLedgerCategoryCategoryIdPut'][0])
    {
        return $this->companyFileIdGeneralLedgerCategoryCategoryIdPutAsyncWithHttpInfo($company_file_id, $category_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation companyFileIdGeneralLedgerCategoryCategoryIdPutAsyncWithHttpInfo
     *
     * Update a category
     *
     * @param  string $company_file_id (required)
     * @param  string $category_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdGeneralLedgerCategoryCategoryIdPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdGeneralLedgerCategoryCategoryIdPutAsyncWithHttpInfo($company_file_id, $category_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $body = null, string $contentType = self::contentTypes['companyFileIdGeneralLedgerCategoryCategoryIdPut'][0])
    {
        $returnType = '';
        $request = $this->companyFileIdGeneralLedgerCategoryCategoryIdPutRequest($company_file_id, $category_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'companyFileIdGeneralLedgerCategoryCategoryIdPut'
     *
     * @param  string $company_file_id (required)
     * @param  string $category_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdGeneralLedgerCategoryCategoryIdPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function companyFileIdGeneralLedgerCategoryCategoryIdPutRequest($company_file_id, $category_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $body = null, string $contentType = self::contentTypes['companyFileIdGeneralLedgerCategoryCategoryIdPut'][0])
    {

        // verify the required parameter 'company_file_id' is set
        if ($company_file_id === null || (is_array($company_file_id) && count($company_file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_file_id when calling companyFileIdGeneralLedgerCategoryCategoryIdPut'
            );
        }

        // verify the required parameter 'category_id' is set
        if ($category_id === null || (is_array($category_id) && count($category_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $category_id when calling companyFileIdGeneralLedgerCategoryCategoryIdPut'
            );
        }






        $resourcePath = '/{company_file_id}/GeneralLedger/Category/{category_id}';
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
        // path params
        if ($category_id !== null) {
            $resourcePath = str_replace(
                '{' . 'category_id' . '}',
                ObjectSerializer::toPathValue($category_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
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
     * Operation companyFileIdGeneralLedgerCategoryGet
     *
     * List all categories Copy
     *
     * @param  string $company_file_id company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdGeneralLedgerCategoryGet'] to see the possible values for this operation
     *
     * @throws \Webfox\MYOB\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function companyFileIdGeneralLedgerCategoryGet($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdGeneralLedgerCategoryGet'][0])
    {
        list($response) = $this->companyFileIdGeneralLedgerCategoryGetWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType);
        return $response;
    }

    /**
     * Operation companyFileIdGeneralLedgerCategoryGetWithHttpInfo
     *
     * List all categories Copy
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdGeneralLedgerCategoryGet'] to see the possible values for this operation
     *
     * @throws \Webfox\MYOB\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyFileIdGeneralLedgerCategoryGetWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdGeneralLedgerCategoryGet'][0])
    {
        $request = $this->companyFileIdGeneralLedgerCategoryGetRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType);

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
     * Operation companyFileIdGeneralLedgerCategoryGetAsync
     *
     * List all categories Copy
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdGeneralLedgerCategoryGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdGeneralLedgerCategoryGetAsync($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdGeneralLedgerCategoryGet'][0])
    {
        return $this->companyFileIdGeneralLedgerCategoryGetAsyncWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation companyFileIdGeneralLedgerCategoryGetAsyncWithHttpInfo
     *
     * List all categories Copy
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdGeneralLedgerCategoryGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdGeneralLedgerCategoryGetAsyncWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdGeneralLedgerCategoryGet'][0])
    {
        $returnType = 'object';
        $request = $this->companyFileIdGeneralLedgerCategoryGetRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType);

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
     * Create request for operation 'companyFileIdGeneralLedgerCategoryGet'
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdGeneralLedgerCategoryGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function companyFileIdGeneralLedgerCategoryGetRequest($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdGeneralLedgerCategoryGet'][0])
    {

        // verify the required parameter 'company_file_id' is set
        if ($company_file_id === null || (is_array($company_file_id) && count($company_file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_file_id when calling companyFileIdGeneralLedgerCategoryGet'
            );
        }





        $resourcePath = '/{company_file_id}/GeneralLedger/Category';
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
     * Operation companyFileIdGeneralLedgerCategoryPost
     *
     * Add a category
     *
     * @param  string $company_file_id company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding accept_encoding (optional)
     * @param  string $body body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdGeneralLedgerCategoryPost'] to see the possible values for this operation
     *
     * @throws \Webfox\MYOB\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function companyFileIdGeneralLedgerCategoryPost($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $body = null, string $contentType = self::contentTypes['companyFileIdGeneralLedgerCategoryPost'][0])
    {
        list($response) = $this->companyFileIdGeneralLedgerCategoryPostWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $body, $contentType);
        return $response;
    }

    /**
     * Operation companyFileIdGeneralLedgerCategoryPostWithHttpInfo
     *
     * Add a category
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdGeneralLedgerCategoryPost'] to see the possible values for this operation
     *
     * @throws \Webfox\MYOB\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyFileIdGeneralLedgerCategoryPostWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $body = null, string $contentType = self::contentTypes['companyFileIdGeneralLedgerCategoryPost'][0])
    {
        $request = $this->companyFileIdGeneralLedgerCategoryPostRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $body, $contentType);

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
     * Operation companyFileIdGeneralLedgerCategoryPostAsync
     *
     * Add a category
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdGeneralLedgerCategoryPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdGeneralLedgerCategoryPostAsync($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $body = null, string $contentType = self::contentTypes['companyFileIdGeneralLedgerCategoryPost'][0])
    {
        return $this->companyFileIdGeneralLedgerCategoryPostAsyncWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation companyFileIdGeneralLedgerCategoryPostAsyncWithHttpInfo
     *
     * Add a category
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdGeneralLedgerCategoryPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdGeneralLedgerCategoryPostAsyncWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $body = null, string $contentType = self::contentTypes['companyFileIdGeneralLedgerCategoryPost'][0])
    {
        $returnType = 'string';
        $request = $this->companyFileIdGeneralLedgerCategoryPostRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $body, $contentType);

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
     * Create request for operation 'companyFileIdGeneralLedgerCategoryPost'
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdGeneralLedgerCategoryPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function companyFileIdGeneralLedgerCategoryPostRequest($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $body = null, string $contentType = self::contentTypes['companyFileIdGeneralLedgerCategoryPost'][0])
    {

        // verify the required parameter 'company_file_id' is set
        if ($company_file_id === null || (is_array($company_file_id) && count($company_file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_file_id when calling companyFileIdGeneralLedgerCategoryPost'
            );
        }






        $resourcePath = '/{company_file_id}/GeneralLedger/Category';
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
