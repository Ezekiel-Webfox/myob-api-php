<?php
/**
 * PurchasesBillsSupplierPaymentsApi
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
 * PurchasesBillsSupplierPaymentsApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PurchasesBillsSupplierPaymentsApi
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
        'companyFileIdPurchaseSupplierPaymentCalculateDiscountsPost' => [
            'application/json',
        ],
        'companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69Delete' => [
            'application/json',
        ],
        'companyFileIdPurchaseSupplierPaymentGet' => [
            'application/json',
        ],
        'companyFileIdPurchaseSupplierPaymentGuidPut' => [
            'application/json',
        ],
        'companyFileIdPurchaseSupplierPaymentPost' => [
            'application/json',
        ],
        'companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPost' => [
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
     * Operation companyFileIdPurchaseSupplierPaymentCalculateDiscountsPost
     *
     * Calculate the discounts
     *
     * @param  string $company_file_id company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding accept_encoding (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $body body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentCalculateDiscountsPost'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function companyFileIdPurchaseSupplierPaymentCalculateDiscountsPost($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentCalculateDiscountsPost'][0])
    {
        list($response) = $this->companyFileIdPurchaseSupplierPaymentCalculateDiscountsPostWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType);
        return $response;
    }

    /**
     * Operation companyFileIdPurchaseSupplierPaymentCalculateDiscountsPostWithHttpInfo
     *
     * Calculate the discounts
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentCalculateDiscountsPost'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyFileIdPurchaseSupplierPaymentCalculateDiscountsPostWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentCalculateDiscountsPost'][0])
    {
        $request = $this->companyFileIdPurchaseSupplierPaymentCalculateDiscountsPostRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType);

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
     * Operation companyFileIdPurchaseSupplierPaymentCalculateDiscountsPostAsync
     *
     * Calculate the discounts
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentCalculateDiscountsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdPurchaseSupplierPaymentCalculateDiscountsPostAsync($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentCalculateDiscountsPost'][0])
    {
        return $this->companyFileIdPurchaseSupplierPaymentCalculateDiscountsPostAsyncWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation companyFileIdPurchaseSupplierPaymentCalculateDiscountsPostAsyncWithHttpInfo
     *
     * Calculate the discounts
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentCalculateDiscountsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdPurchaseSupplierPaymentCalculateDiscountsPostAsyncWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentCalculateDiscountsPost'][0])
    {
        $returnType = 'object';
        $request = $this->companyFileIdPurchaseSupplierPaymentCalculateDiscountsPostRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType);

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
     * Create request for operation 'companyFileIdPurchaseSupplierPaymentCalculateDiscountsPost'
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentCalculateDiscountsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function companyFileIdPurchaseSupplierPaymentCalculateDiscountsPostRequest($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentCalculateDiscountsPost'][0])
    {

        // verify the required parameter 'company_file_id' is set
        if ($company_file_id === null || (is_array($company_file_id) && count($company_file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_file_id when calling companyFileIdPurchaseSupplierPaymentCalculateDiscountsPost'
            );
        }







        $resourcePath = '/{company_file_id}/Purchase/SupplierPayment/CalculateDiscounts';
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69Delete
     *
     * Delete a supplier payment
     *
     * @param  string $company_file_id company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding accept_encoding (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69Delete'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69Delete($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69Delete'][0])
    {
        list($response) = $this->companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69DeleteWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $contentType);
        return $response;
    }

    /**
     * Operation companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69DeleteWithHttpInfo
     *
     * Delete a supplier payment
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69Delete'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69DeleteWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69Delete'][0])
    {
        $request = $this->companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69DeleteRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $contentType);

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
     * Operation companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69DeleteAsync
     *
     * Delete a supplier payment
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69Delete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69DeleteAsync($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69Delete'][0])
    {
        return $this->companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69DeleteAsyncWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69DeleteAsyncWithHttpInfo
     *
     * Delete a supplier payment
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69Delete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69DeleteAsyncWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69Delete'][0])
    {
        $returnType = 'string';
        $request = $this->companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69DeleteRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $contentType);

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
     * Create request for operation 'companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69Delete'
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69Delete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69DeleteRequest($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69Delete'][0])
    {

        // verify the required parameter 'company_file_id' is set
        if ($company_file_id === null || (is_array($company_file_id) && count($company_file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_file_id when calling companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69Delete'
            );
        }






        $resourcePath = '/{company_file_id}/Purchase/SupplierPayment/ee1c61ed-98f0-4e0e-a0d5-712149206b69';
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
     * Operation companyFileIdPurchaseSupplierPaymentGet
     *
     * List all supplier payments
     *
     * @param  string $company_file_id company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentGet'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function companyFileIdPurchaseSupplierPaymentGet($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentGet'][0])
    {
        list($response) = $this->companyFileIdPurchaseSupplierPaymentGetWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType);
        return $response;
    }

    /**
     * Operation companyFileIdPurchaseSupplierPaymentGetWithHttpInfo
     *
     * List all supplier payments
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentGet'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyFileIdPurchaseSupplierPaymentGetWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentGet'][0])
    {
        $request = $this->companyFileIdPurchaseSupplierPaymentGetRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType);

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
     * Operation companyFileIdPurchaseSupplierPaymentGetAsync
     *
     * List all supplier payments
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdPurchaseSupplierPaymentGetAsync($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentGet'][0])
    {
        return $this->companyFileIdPurchaseSupplierPaymentGetAsyncWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation companyFileIdPurchaseSupplierPaymentGetAsyncWithHttpInfo
     *
     * List all supplier payments
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdPurchaseSupplierPaymentGetAsyncWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentGet'][0])
    {
        $returnType = 'object';
        $request = $this->companyFileIdPurchaseSupplierPaymentGetRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType);

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
     * Create request for operation 'companyFileIdPurchaseSupplierPaymentGet'
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function companyFileIdPurchaseSupplierPaymentGetRequest($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentGet'][0])
    {

        // verify the required parameter 'company_file_id' is set
        if ($company_file_id === null || (is_array($company_file_id) && count($company_file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_file_id when calling companyFileIdPurchaseSupplierPaymentGet'
            );
        }





        $resourcePath = '/{company_file_id}/Purchase/SupplierPayment';
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
     * Operation companyFileIdPurchaseSupplierPaymentGuidPut
     *
     * Update a supplier payment
     *
     * @param  string $company_file_id company_file_id (required)
     * @param  string $guid guid (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding accept_encoding (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $body body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentGuidPut'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function companyFileIdPurchaseSupplierPaymentGuidPut($company_file_id, $guid, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentGuidPut'][0])
    {
        list($response) = $this->companyFileIdPurchaseSupplierPaymentGuidPutWithHttpInfo($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType);
        return $response;
    }

    /**
     * Operation companyFileIdPurchaseSupplierPaymentGuidPutWithHttpInfo
     *
     * Update a supplier payment
     *
     * @param  string $company_file_id (required)
     * @param  string $guid (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentGuidPut'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyFileIdPurchaseSupplierPaymentGuidPutWithHttpInfo($company_file_id, $guid, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentGuidPut'][0])
    {
        $request = $this->companyFileIdPurchaseSupplierPaymentGuidPutRequest($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType);

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
     * Operation companyFileIdPurchaseSupplierPaymentGuidPutAsync
     *
     * Update a supplier payment
     *
     * @param  string $company_file_id (required)
     * @param  string $guid (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentGuidPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdPurchaseSupplierPaymentGuidPutAsync($company_file_id, $guid, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentGuidPut'][0])
    {
        return $this->companyFileIdPurchaseSupplierPaymentGuidPutAsyncWithHttpInfo($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation companyFileIdPurchaseSupplierPaymentGuidPutAsyncWithHttpInfo
     *
     * Update a supplier payment
     *
     * @param  string $company_file_id (required)
     * @param  string $guid (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentGuidPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdPurchaseSupplierPaymentGuidPutAsyncWithHttpInfo($company_file_id, $guid, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentGuidPut'][0])
    {
        $returnType = 'string';
        $request = $this->companyFileIdPurchaseSupplierPaymentGuidPutRequest($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType);

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
     * Create request for operation 'companyFileIdPurchaseSupplierPaymentGuidPut'
     *
     * @param  string $company_file_id (required)
     * @param  string $guid (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentGuidPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function companyFileIdPurchaseSupplierPaymentGuidPutRequest($company_file_id, $guid, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentGuidPut'][0])
    {

        // verify the required parameter 'company_file_id' is set
        if ($company_file_id === null || (is_array($company_file_id) && count($company_file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_file_id when calling companyFileIdPurchaseSupplierPaymentGuidPut'
            );
        }

        // verify the required parameter 'guid' is set
        if ($guid === null || (is_array($guid) && count($guid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $guid when calling companyFileIdPurchaseSupplierPaymentGuidPut'
            );
        }







        $resourcePath = '/{company_file_id}/Purchase/SupplierPayment/{guid}';
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
     * Operation companyFileIdPurchaseSupplierPaymentPost
     *
     * Create a supplier payment
     *
     * @param  string $company_file_id company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding accept_encoding (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $body body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentPost'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function companyFileIdPurchaseSupplierPaymentPost($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentPost'][0])
    {
        list($response) = $this->companyFileIdPurchaseSupplierPaymentPostWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType);
        return $response;
    }

    /**
     * Operation companyFileIdPurchaseSupplierPaymentPostWithHttpInfo
     *
     * Create a supplier payment
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentPost'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyFileIdPurchaseSupplierPaymentPostWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentPost'][0])
    {
        $request = $this->companyFileIdPurchaseSupplierPaymentPostRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType);

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
     * Operation companyFileIdPurchaseSupplierPaymentPostAsync
     *
     * Create a supplier payment
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdPurchaseSupplierPaymentPostAsync($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentPost'][0])
    {
        return $this->companyFileIdPurchaseSupplierPaymentPostAsyncWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation companyFileIdPurchaseSupplierPaymentPostAsyncWithHttpInfo
     *
     * Create a supplier payment
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdPurchaseSupplierPaymentPostAsyncWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentPost'][0])
    {
        $returnType = 'string';
        $request = $this->companyFileIdPurchaseSupplierPaymentPostRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType);

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
     * Create request for operation 'companyFileIdPurchaseSupplierPaymentPost'
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function companyFileIdPurchaseSupplierPaymentPostRequest($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentPost'][0])
    {

        // verify the required parameter 'company_file_id' is set
        if ($company_file_id === null || (is_array($company_file_id) && count($company_file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_file_id when calling companyFileIdPurchaseSupplierPaymentPost'
            );
        }







        $resourcePath = '/{company_file_id}/Purchase/SupplierPayment';
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
     * Operation companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPost
     *
     * Create a supplier payment with discounts and fees
     *
     * @param  string $company_file_id company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding accept_encoding (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $body body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPost'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPost($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPost'][0])
    {
        $this->companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPostWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType);
    }

    /**
     * Operation companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPostWithHttpInfo
     *
     * Create a supplier payment with discounts and fees
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPost'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPostWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPost'][0])
    {
        $request = $this->companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPostRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType);

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
     * Operation companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPostAsync
     *
     * Create a supplier payment with discounts and fees
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPostAsync($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPost'][0])
    {
        return $this->companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPostAsyncWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPostAsyncWithHttpInfo
     *
     * Create a supplier payment with discounts and fees
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPostAsyncWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPost'][0])
    {
        $returnType = '';
        $request = $this->companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPostRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body, $contentType);

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
     * Create request for operation 'companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPost'
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $content_type (optional)
     * @param  string $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPostRequest($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $content_type = null, $body = null, string $contentType = self::contentTypes['companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPost'][0])
    {

        // verify the required parameter 'company_file_id' is set
        if ($company_file_id === null || (is_array($company_file_id) && count($company_file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_file_id when calling companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPost'
            );
        }







        $resourcePath = '/{company_file_id}/Purchase/SupplierPayment/RecordWithDiscountsAndFees';
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
