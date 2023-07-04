<?php
/**
 * ScheduledTransactionsApi
 * PHP version 5
 *
 * @category Class
 * @package  YNAB
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * YNAB API Endpoints
 *
 * Our API uses a REST based design, leverages the JSON data format, and relies upon HTTPS for transport. We respond with meaningful HTTP response codes and if an error occurs, we include error details in the response body.  API Documentation is at https://api.youneedabudget.com
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace YNAB\Client;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Query;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use YNAB\ApiException;
use YNAB\Configuration;
use YNAB\HeaderSelector;
use YNAB\ObjectSerializer;

/**
 * ScheduledTransactionsApi Class Doc Comment
 *
 * @category Class
 * @package  YNAB
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScheduledTransactionsApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getScheduledTransactionById
     *
     * Single scheduled transaction
     *
     * @param  string $budgetId The ID of the Budget.  \&quot;last-used\&quot; can also be used to specify the last used budget. (required)
     * @param  string $scheduledTransactionId The ID of the Scheduled Transaction. (required)
     *
     * @throws \YNAB\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \YNAB\Model\ScheduledTransactionResponse
     */
    public function getScheduledTransactionById($budgetId, $scheduledTransactionId)
    {
        list($response) = $this->getScheduledTransactionByIdWithHttpInfo($budgetId, $scheduledTransactionId);
        return $response;
    }

    /**
     * Operation getScheduledTransactionByIdWithHttpInfo
     *
     * Single scheduled transaction
     *
     * @param  string $budgetId The ID of the Budget.  \&quot;last-used\&quot; can also be used to specify the last used budget. (required)
     * @param  string $scheduledTransactionId The ID of the Scheduled Transaction. (required)
     *
     * @throws \YNAB\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \YNAB\Model\ScheduledTransactionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getScheduledTransactionByIdWithHttpInfo($budgetId, $scheduledTransactionId)
    {
        $returnType = '\YNAB\Model\ScheduledTransactionResponse';
        $request = $this->getScheduledTransactionByIdRequest($budgetId, $scheduledTransactionId);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\YNAB\Model\ScheduledTransactionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\YNAB\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\YNAB\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getScheduledTransactionByIdAsync
     *
     * Single scheduled transaction
     *
     * @param  string $budgetId The ID of the Budget.  \&quot;last-used\&quot; can also be used to specify the last used budget. (required)
     * @param  string $scheduledTransactionId The ID of the Scheduled Transaction. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getScheduledTransactionByIdAsync($budgetId, $scheduledTransactionId)
    {
        return $this->getScheduledTransactionByIdAsyncWithHttpInfo($budgetId, $scheduledTransactionId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getScheduledTransactionByIdAsyncWithHttpInfo
     *
     * Single scheduled transaction
     *
     * @param  string $budgetId The ID of the Budget.  \&quot;last-used\&quot; can also be used to specify the last used budget. (required)
     * @param  string $scheduledTransactionId The ID of the Scheduled Transaction. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getScheduledTransactionByIdAsyncWithHttpInfo($budgetId, $scheduledTransactionId)
    {
        $returnType = '\YNAB\Model\ScheduledTransactionResponse';
        $request = $this->getScheduledTransactionByIdRequest($budgetId, $scheduledTransactionId);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getScheduledTransactionById'
     *
     * @param  string $budgetId The ID of the Budget.  \&quot;last-used\&quot; can also be used to specify the last used budget. (required)
     * @param  string $scheduledTransactionId The ID of the Scheduled Transaction. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getScheduledTransactionByIdRequest($budgetId, $scheduledTransactionId)
    {
        // verify the required parameter 'budgetId' is set
        if ($budgetId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $budgetId when calling getScheduledTransactionById'
            );
        }
        // verify the required parameter 'scheduledTransactionId' is set
        if ($scheduledTransactionId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $scheduledTransactionId when calling getScheduledTransactionById'
            );
        }

        $resourcePath = '/budgets/{budget_id}/scheduled_transactions/{scheduled_transaction_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($budgetId !== null) {
            $resourcePath = str_replace(
                '{' . 'budget_id' . '}',
                ObjectSerializer::toPathValue($budgetId),
                $resourcePath
            );
        }
        // path params
        if ($scheduledTransactionId !== null) {
            $resourcePath = str_replace(
                '{' . 'scheduled_transaction_id' . '}',
                ObjectSerializer::toPathValue($scheduledTransactionId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $query = Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getScheduledTransactions
     *
     * List scheduled transactions
     *
     * @param  string $budgetId The ID of the Budget.  \&quot;last-used\&quot; can also be used to specify the last used budget. (required)
     *
     * @throws \YNAB\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \YNAB\Model\ScheduledTransactionsResponse
     */
    public function getScheduledTransactions($budgetId)
    {
        list($response) = $this->getScheduledTransactionsWithHttpInfo($budgetId);
        return $response;
    }

    /**
     * Operation getScheduledTransactionsWithHttpInfo
     *
     * List scheduled transactions
     *
     * @param  string $budgetId The ID of the Budget.  \&quot;last-used\&quot; can also be used to specify the last used budget. (required)
     *
     * @throws \YNAB\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \YNAB\Model\ScheduledTransactionsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getScheduledTransactionsWithHttpInfo($budgetId)
    {
        $returnType = '\YNAB\Model\ScheduledTransactionsResponse';
        $request = $this->getScheduledTransactionsRequest($budgetId);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\YNAB\Model\ScheduledTransactionsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\YNAB\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\YNAB\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getScheduledTransactionsAsync
     *
     * List scheduled transactions
     *
     * @param  string $budgetId The ID of the Budget.  \&quot;last-used\&quot; can also be used to specify the last used budget. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getScheduledTransactionsAsync($budgetId)
    {
        return $this->getScheduledTransactionsAsyncWithHttpInfo($budgetId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getScheduledTransactionsAsyncWithHttpInfo
     *
     * List scheduled transactions
     *
     * @param  string $budgetId The ID of the Budget.  \&quot;last-used\&quot; can also be used to specify the last used budget. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getScheduledTransactionsAsyncWithHttpInfo($budgetId)
    {
        $returnType = '\YNAB\Model\ScheduledTransactionsResponse';
        $request = $this->getScheduledTransactionsRequest($budgetId);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getScheduledTransactions'
     *
     * @param  string $budgetId The ID of the Budget.  \&quot;last-used\&quot; can also be used to specify the last used budget. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getScheduledTransactionsRequest($budgetId)
    {
        // verify the required parameter 'budgetId' is set
        if ($budgetId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $budgetId when calling getScheduledTransactions'
            );
        }

        $resourcePath = '/budgets/{budget_id}/scheduled_transactions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($budgetId !== null) {
            $resourcePath = str_replace(
                '{' . 'budget_id' . '}',
                ObjectSerializer::toPathValue($budgetId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $query = Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
