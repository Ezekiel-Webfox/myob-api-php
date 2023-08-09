<?php
/**
 * ReportsApi
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
 * ReportsApi Class Doc Comment
 *
 * @category Class
 * @package  Webfox\MYOB\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReportsApi
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
        'companyFileIdReportGSTNZGSTReportGet' => [
            'application/json',
        ],
        'companyFileIdReportPayrollCategorySummaryGet' => [
            'application/json',
        ],
        'companyFileIdReportPayrollEmployeePayrollAdviceGet' => [
            'application/json',
        ],
        'companyFileIdReportProfitAndLossSummaryGet' => [
            'application/json',
        ],
        'companyFileIdReportTaxCodeSummaryGet' => [
            'application/json',
        ],
        'companyFileIdReportTransactionCodingSummaryGet' => [
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
     * Operation companyFileIdReportGSTNZGSTReportGet
     *
     * NZ GST Report
     *
     * @param  string $company_file_id company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportGSTNZGSTReportGet'] to see the possible values for this operation
     *
     * @throws \Webfox\MYOB\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function companyFileIdReportGSTNZGSTReportGet($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdReportGSTNZGSTReportGet'][0])
    {
        $this->companyFileIdReportGSTNZGSTReportGetWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType);
    }

    /**
     * Operation companyFileIdReportGSTNZGSTReportGetWithHttpInfo
     *
     * NZ GST Report
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportGSTNZGSTReportGet'] to see the possible values for this operation
     *
     * @throws \Webfox\MYOB\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyFileIdReportGSTNZGSTReportGetWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdReportGSTNZGSTReportGet'][0])
    {
        $request = $this->companyFileIdReportGSTNZGSTReportGetRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType);

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
     * Operation companyFileIdReportGSTNZGSTReportGetAsync
     *
     * NZ GST Report
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportGSTNZGSTReportGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdReportGSTNZGSTReportGetAsync($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdReportGSTNZGSTReportGet'][0])
    {
        return $this->companyFileIdReportGSTNZGSTReportGetAsyncWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation companyFileIdReportGSTNZGSTReportGetAsyncWithHttpInfo
     *
     * NZ GST Report
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportGSTNZGSTReportGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdReportGSTNZGSTReportGetAsyncWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdReportGSTNZGSTReportGet'][0])
    {
        $returnType = '';
        $request = $this->companyFileIdReportGSTNZGSTReportGetRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType);

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
     * Create request for operation 'companyFileIdReportGSTNZGSTReportGet'
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportGSTNZGSTReportGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function companyFileIdReportGSTNZGSTReportGetRequest($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdReportGSTNZGSTReportGet'][0])
    {

        // verify the required parameter 'company_file_id' is set
        if ($company_file_id === null || (is_array($company_file_id) && count($company_file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_file_id when calling companyFileIdReportGSTNZGSTReportGet'
            );
        }





        $resourcePath = '/{company_file_id}/Report/GST/NZGSTReport';
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
     * Operation companyFileIdReportPayrollCategorySummaryGet
     *
     * Payroll Category Summary
     *
     * @param  string $company_file_id company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding accept_encoding (optional)
     * @param  string $start_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $end_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $reporting_basis ReportingBasis should be Accrual or Cash (optional)
     * @param  string $year_end_adjust yearEndAdjust must be either true or false (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportPayrollCategorySummaryGet'] to see the possible values for this operation
     *
     * @throws \Webfox\MYOB\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function companyFileIdReportPayrollCategorySummaryGet($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $start_date = null, $end_date = null, $reporting_basis = null, $year_end_adjust = null, string $contentType = self::contentTypes['companyFileIdReportPayrollCategorySummaryGet'][0])
    {
        list($response) = $this->companyFileIdReportPayrollCategorySummaryGetWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $start_date, $end_date, $reporting_basis, $year_end_adjust, $contentType);
        return $response;
    }

    /**
     * Operation companyFileIdReportPayrollCategorySummaryGetWithHttpInfo
     *
     * Payroll Category Summary
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $start_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $end_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $reporting_basis ReportingBasis should be Accrual or Cash (optional)
     * @param  string $year_end_adjust yearEndAdjust must be either true or false (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportPayrollCategorySummaryGet'] to see the possible values for this operation
     *
     * @throws \Webfox\MYOB\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyFileIdReportPayrollCategorySummaryGetWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $start_date = null, $end_date = null, $reporting_basis = null, $year_end_adjust = null, string $contentType = self::contentTypes['companyFileIdReportPayrollCategorySummaryGet'][0])
    {
        $request = $this->companyFileIdReportPayrollCategorySummaryGetRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $start_date, $end_date, $reporting_basis, $year_end_adjust, $contentType);

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
     * Operation companyFileIdReportPayrollCategorySummaryGetAsync
     *
     * Payroll Category Summary
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $start_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $end_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $reporting_basis ReportingBasis should be Accrual or Cash (optional)
     * @param  string $year_end_adjust yearEndAdjust must be either true or false (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportPayrollCategorySummaryGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdReportPayrollCategorySummaryGetAsync($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $start_date = null, $end_date = null, $reporting_basis = null, $year_end_adjust = null, string $contentType = self::contentTypes['companyFileIdReportPayrollCategorySummaryGet'][0])
    {
        return $this->companyFileIdReportPayrollCategorySummaryGetAsyncWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $start_date, $end_date, $reporting_basis, $year_end_adjust, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation companyFileIdReportPayrollCategorySummaryGetAsyncWithHttpInfo
     *
     * Payroll Category Summary
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $start_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $end_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $reporting_basis ReportingBasis should be Accrual or Cash (optional)
     * @param  string $year_end_adjust yearEndAdjust must be either true or false (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportPayrollCategorySummaryGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdReportPayrollCategorySummaryGetAsyncWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $start_date = null, $end_date = null, $reporting_basis = null, $year_end_adjust = null, string $contentType = self::contentTypes['companyFileIdReportPayrollCategorySummaryGet'][0])
    {
        $returnType = 'object';
        $request = $this->companyFileIdReportPayrollCategorySummaryGetRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $start_date, $end_date, $reporting_basis, $year_end_adjust, $contentType);

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
     * Create request for operation 'companyFileIdReportPayrollCategorySummaryGet'
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $start_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $end_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $reporting_basis ReportingBasis should be Accrual or Cash (optional)
     * @param  string $year_end_adjust yearEndAdjust must be either true or false (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportPayrollCategorySummaryGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function companyFileIdReportPayrollCategorySummaryGetRequest($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $start_date = null, $end_date = null, $reporting_basis = null, $year_end_adjust = null, string $contentType = self::contentTypes['companyFileIdReportPayrollCategorySummaryGet'][0])
    {

        // verify the required parameter 'company_file_id' is set
        if ($company_file_id === null || (is_array($company_file_id) && count($company_file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_file_id when calling companyFileIdReportPayrollCategorySummaryGet'
            );
        }









        $resourcePath = '/{company_file_id}/Report/PayrollCategorySummary';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $start_date,
            'StartDate', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $end_date,
            'EndDate', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $reporting_basis,
            'ReportingBasis', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $year_end_adjust,
            'YearEndAdjust', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

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
     * Operation companyFileIdReportPayrollEmployeePayrollAdviceGet
     *
     * Employee Payroll Advice
     *
     * @param  string $company_file_id company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportPayrollEmployeePayrollAdviceGet'] to see the possible values for this operation
     *
     * @throws \Webfox\MYOB\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function companyFileIdReportPayrollEmployeePayrollAdviceGet($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdReportPayrollEmployeePayrollAdviceGet'][0])
    {
        list($response) = $this->companyFileIdReportPayrollEmployeePayrollAdviceGetWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType);
        return $response;
    }

    /**
     * Operation companyFileIdReportPayrollEmployeePayrollAdviceGetWithHttpInfo
     *
     * Employee Payroll Advice
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportPayrollEmployeePayrollAdviceGet'] to see the possible values for this operation
     *
     * @throws \Webfox\MYOB\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyFileIdReportPayrollEmployeePayrollAdviceGetWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdReportPayrollEmployeePayrollAdviceGet'][0])
    {
        $request = $this->companyFileIdReportPayrollEmployeePayrollAdviceGetRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType);

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
     * Operation companyFileIdReportPayrollEmployeePayrollAdviceGetAsync
     *
     * Employee Payroll Advice
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportPayrollEmployeePayrollAdviceGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdReportPayrollEmployeePayrollAdviceGetAsync($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdReportPayrollEmployeePayrollAdviceGet'][0])
    {
        return $this->companyFileIdReportPayrollEmployeePayrollAdviceGetAsyncWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation companyFileIdReportPayrollEmployeePayrollAdviceGetAsyncWithHttpInfo
     *
     * Employee Payroll Advice
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportPayrollEmployeePayrollAdviceGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdReportPayrollEmployeePayrollAdviceGetAsyncWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdReportPayrollEmployeePayrollAdviceGet'][0])
    {
        $returnType = 'object';
        $request = $this->companyFileIdReportPayrollEmployeePayrollAdviceGetRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $contentType);

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
     * Create request for operation 'companyFileIdReportPayrollEmployeePayrollAdviceGet'
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportPayrollEmployeePayrollAdviceGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function companyFileIdReportPayrollEmployeePayrollAdviceGetRequest($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, string $contentType = self::contentTypes['companyFileIdReportPayrollEmployeePayrollAdviceGet'][0])
    {

        // verify the required parameter 'company_file_id' is set
        if ($company_file_id === null || (is_array($company_file_id) && count($company_file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_file_id when calling companyFileIdReportPayrollEmployeePayrollAdviceGet'
            );
        }





        $resourcePath = '/{company_file_id}/Report/Payroll/EmployeePayrollAdvice';
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
     * Operation companyFileIdReportProfitAndLossSummaryGet
     *
     * Profit and Loss (P &#39;n&#39; L) summary
     *
     * @param  string $company_file_id company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding accept_encoding (optional)
     * @param  string $start_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $end_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $reporting_basis ReportingBasis should be Accrual or Cash (optional)
     * @param  string $year_end_adjust yearEndAdjust must be either true or false (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportProfitAndLossSummaryGet'] to see the possible values for this operation
     *
     * @throws \Webfox\MYOB\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function companyFileIdReportProfitAndLossSummaryGet($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $start_date = null, $end_date = null, $reporting_basis = null, $year_end_adjust = null, string $contentType = self::contentTypes['companyFileIdReportProfitAndLossSummaryGet'][0])
    {
        list($response) = $this->companyFileIdReportProfitAndLossSummaryGetWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $start_date, $end_date, $reporting_basis, $year_end_adjust, $contentType);
        return $response;
    }

    /**
     * Operation companyFileIdReportProfitAndLossSummaryGetWithHttpInfo
     *
     * Profit and Loss (P &#39;n&#39; L) summary
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $start_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $end_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $reporting_basis ReportingBasis should be Accrual or Cash (optional)
     * @param  string $year_end_adjust yearEndAdjust must be either true or false (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportProfitAndLossSummaryGet'] to see the possible values for this operation
     *
     * @throws \Webfox\MYOB\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyFileIdReportProfitAndLossSummaryGetWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $start_date = null, $end_date = null, $reporting_basis = null, $year_end_adjust = null, string $contentType = self::contentTypes['companyFileIdReportProfitAndLossSummaryGet'][0])
    {
        $request = $this->companyFileIdReportProfitAndLossSummaryGetRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $start_date, $end_date, $reporting_basis, $year_end_adjust, $contentType);

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
     * Operation companyFileIdReportProfitAndLossSummaryGetAsync
     *
     * Profit and Loss (P &#39;n&#39; L) summary
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $start_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $end_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $reporting_basis ReportingBasis should be Accrual or Cash (optional)
     * @param  string $year_end_adjust yearEndAdjust must be either true or false (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportProfitAndLossSummaryGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdReportProfitAndLossSummaryGetAsync($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $start_date = null, $end_date = null, $reporting_basis = null, $year_end_adjust = null, string $contentType = self::contentTypes['companyFileIdReportProfitAndLossSummaryGet'][0])
    {
        return $this->companyFileIdReportProfitAndLossSummaryGetAsyncWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $start_date, $end_date, $reporting_basis, $year_end_adjust, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation companyFileIdReportProfitAndLossSummaryGetAsyncWithHttpInfo
     *
     * Profit and Loss (P &#39;n&#39; L) summary
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $start_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $end_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $reporting_basis ReportingBasis should be Accrual or Cash (optional)
     * @param  string $year_end_adjust yearEndAdjust must be either true or false (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportProfitAndLossSummaryGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdReportProfitAndLossSummaryGetAsyncWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $start_date = null, $end_date = null, $reporting_basis = null, $year_end_adjust = null, string $contentType = self::contentTypes['companyFileIdReportProfitAndLossSummaryGet'][0])
    {
        $returnType = 'object';
        $request = $this->companyFileIdReportProfitAndLossSummaryGetRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $start_date, $end_date, $reporting_basis, $year_end_adjust, $contentType);

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
     * Create request for operation 'companyFileIdReportProfitAndLossSummaryGet'
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $start_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $end_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $reporting_basis ReportingBasis should be Accrual or Cash (optional)
     * @param  string $year_end_adjust yearEndAdjust must be either true or false (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportProfitAndLossSummaryGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function companyFileIdReportProfitAndLossSummaryGetRequest($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $start_date = null, $end_date = null, $reporting_basis = null, $year_end_adjust = null, string $contentType = self::contentTypes['companyFileIdReportProfitAndLossSummaryGet'][0])
    {

        // verify the required parameter 'company_file_id' is set
        if ($company_file_id === null || (is_array($company_file_id) && count($company_file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_file_id when calling companyFileIdReportProfitAndLossSummaryGet'
            );
        }









        $resourcePath = '/{company_file_id}/Report/ProfitAndLossSummary';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $start_date,
            'StartDate', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $end_date,
            'EndDate', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $reporting_basis,
            'ReportingBasis', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $year_end_adjust,
            'YearEndAdjust', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

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
     * Operation companyFileIdReportTaxCodeSummaryGet
     *
     * Tax Code Summary
     *
     * @param  string $company_file_id company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding accept_encoding (optional)
     * @param  string $start_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $end_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $reporting_basis ReportingBasis should be Accrual or Cash (optional)
     * @param  string $year_end_adjust yearEndAdjust must be either true or false (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportTaxCodeSummaryGet'] to see the possible values for this operation
     *
     * @throws \Webfox\MYOB\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function companyFileIdReportTaxCodeSummaryGet($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $start_date = null, $end_date = null, $reporting_basis = null, $year_end_adjust = null, string $contentType = self::contentTypes['companyFileIdReportTaxCodeSummaryGet'][0])
    {
        list($response) = $this->companyFileIdReportTaxCodeSummaryGetWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $start_date, $end_date, $reporting_basis, $year_end_adjust, $contentType);
        return $response;
    }

    /**
     * Operation companyFileIdReportTaxCodeSummaryGetWithHttpInfo
     *
     * Tax Code Summary
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $start_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $end_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $reporting_basis ReportingBasis should be Accrual or Cash (optional)
     * @param  string $year_end_adjust yearEndAdjust must be either true or false (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportTaxCodeSummaryGet'] to see the possible values for this operation
     *
     * @throws \Webfox\MYOB\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyFileIdReportTaxCodeSummaryGetWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $start_date = null, $end_date = null, $reporting_basis = null, $year_end_adjust = null, string $contentType = self::contentTypes['companyFileIdReportTaxCodeSummaryGet'][0])
    {
        $request = $this->companyFileIdReportTaxCodeSummaryGetRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $start_date, $end_date, $reporting_basis, $year_end_adjust, $contentType);

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
     * Operation companyFileIdReportTaxCodeSummaryGetAsync
     *
     * Tax Code Summary
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $start_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $end_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $reporting_basis ReportingBasis should be Accrual or Cash (optional)
     * @param  string $year_end_adjust yearEndAdjust must be either true or false (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportTaxCodeSummaryGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdReportTaxCodeSummaryGetAsync($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $start_date = null, $end_date = null, $reporting_basis = null, $year_end_adjust = null, string $contentType = self::contentTypes['companyFileIdReportTaxCodeSummaryGet'][0])
    {
        return $this->companyFileIdReportTaxCodeSummaryGetAsyncWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $start_date, $end_date, $reporting_basis, $year_end_adjust, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation companyFileIdReportTaxCodeSummaryGetAsyncWithHttpInfo
     *
     * Tax Code Summary
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $start_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $end_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $reporting_basis ReportingBasis should be Accrual or Cash (optional)
     * @param  string $year_end_adjust yearEndAdjust must be either true or false (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportTaxCodeSummaryGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdReportTaxCodeSummaryGetAsyncWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $start_date = null, $end_date = null, $reporting_basis = null, $year_end_adjust = null, string $contentType = self::contentTypes['companyFileIdReportTaxCodeSummaryGet'][0])
    {
        $returnType = 'object';
        $request = $this->companyFileIdReportTaxCodeSummaryGetRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $start_date, $end_date, $reporting_basis, $year_end_adjust, $contentType);

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
     * Create request for operation 'companyFileIdReportTaxCodeSummaryGet'
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $start_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $end_date Date should be valid and in yyyy-mm-dd format (optional)
     * @param  string $reporting_basis ReportingBasis should be Accrual or Cash (optional)
     * @param  string $year_end_adjust yearEndAdjust must be either true or false (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportTaxCodeSummaryGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function companyFileIdReportTaxCodeSummaryGetRequest($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $start_date = null, $end_date = null, $reporting_basis = null, $year_end_adjust = null, string $contentType = self::contentTypes['companyFileIdReportTaxCodeSummaryGet'][0])
    {

        // verify the required parameter 'company_file_id' is set
        if ($company_file_id === null || (is_array($company_file_id) && count($company_file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_file_id when calling companyFileIdReportTaxCodeSummaryGet'
            );
        }









        $resourcePath = '/{company_file_id}/Report/TaxCodeSummary';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $start_date,
            'StartDate', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $end_date,
            'EndDate', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $reporting_basis,
            'ReportingBasis', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $year_end_adjust,
            'YearEndAdjust', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

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
     * Operation companyFileIdReportTransactionCodingSummaryGet
     *
     * Transaction Coding Summary
     *
     * @param  string $company_file_id company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding accept_encoding (optional)
     * @param  string $filter {{mm}} is the month like 02 or 11 (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportTransactionCodingSummaryGet'] to see the possible values for this operation
     *
     * @throws \Webfox\MYOB\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function companyFileIdReportTransactionCodingSummaryGet($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $filter = null, string $contentType = self::contentTypes['companyFileIdReportTransactionCodingSummaryGet'][0])
    {
        list($response) = $this->companyFileIdReportTransactionCodingSummaryGetWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $filter, $contentType);
        return $response;
    }

    /**
     * Operation companyFileIdReportTransactionCodingSummaryGetWithHttpInfo
     *
     * Transaction Coding Summary
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $filter {{mm}} is the month like 02 or 11 (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportTransactionCodingSummaryGet'] to see the possible values for this operation
     *
     * @throws \Webfox\MYOB\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyFileIdReportTransactionCodingSummaryGetWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $filter = null, string $contentType = self::contentTypes['companyFileIdReportTransactionCodingSummaryGet'][0])
    {
        $request = $this->companyFileIdReportTransactionCodingSummaryGetRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $filter, $contentType);

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
     * Operation companyFileIdReportTransactionCodingSummaryGetAsync
     *
     * Transaction Coding Summary
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $filter {{mm}} is the month like 02 or 11 (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportTransactionCodingSummaryGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdReportTransactionCodingSummaryGetAsync($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $filter = null, string $contentType = self::contentTypes['companyFileIdReportTransactionCodingSummaryGet'][0])
    {
        return $this->companyFileIdReportTransactionCodingSummaryGetAsyncWithHttpInfo($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $filter, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation companyFileIdReportTransactionCodingSummaryGetAsyncWithHttpInfo
     *
     * Transaction Coding Summary
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $filter {{mm}} is the month like 02 or 11 (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportTransactionCodingSummaryGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyFileIdReportTransactionCodingSummaryGetAsyncWithHttpInfo($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $filter = null, string $contentType = self::contentTypes['companyFileIdReportTransactionCodingSummaryGet'][0])
    {
        $returnType = 'object';
        $request = $this->companyFileIdReportTransactionCodingSummaryGetRequest($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $filter, $contentType);

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
     * Create request for operation 'companyFileIdReportTransactionCodingSummaryGet'
     *
     * @param  string $company_file_id (required)
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (optional)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $filter {{mm}} is the month like 02 or 11 (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companyFileIdReportTransactionCodingSummaryGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function companyFileIdReportTransactionCodingSummaryGetRequest($company_file_id, $x_myobapi_key = null, $x_myobapi_version = null, $accept_encoding = null, $filter = null, string $contentType = self::contentTypes['companyFileIdReportTransactionCodingSummaryGet'][0])
    {

        // verify the required parameter 'company_file_id' is set
        if ($company_file_id === null || (is_array($company_file_id) && count($company_file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_file_id when calling companyFileIdReportTransactionCodingSummaryGet'
            );
        }






        $resourcePath = '/{company_file_id}/Report/TransactionCodingSummary';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $filter,
            '$filter', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

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
