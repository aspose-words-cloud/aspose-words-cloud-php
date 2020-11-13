<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WordsApi.php">
 *   Copyright (c) 2020 Aspose.Words for Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------
 */

namespace Aspose\Words;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Aspose\Words\Model\Requests;

/*
 * WordsApi Aspose.Words for Cloud API.
 */
class WordsApi
{
    /*
     * Stores client instance
     * @var ClientInterface client for calling api
     */
    protected $client;

    /*
     * Stores configuration
     * @var Configuration configuration info
     */
    protected $config;

    /*
     * Initialize a new instance of WordsApi
     * @param string   $clientId client sid
     * @param string   $clientSecret client secret
     * @param string   $baseUrl base url for requests
     */
    public function __construct(string $clientId, string $clientSecret)
    {
        if (!isset($clientId) || trim($clientId) === '') {
            throw new ApiException('clientId could not be an empty string.');
        }

        if (!isset($clientSecret) || trim($clientSecret) === '') {
            throw new ApiException('clientSecret could not be an empty string.');
        }

        $this->client = new Client();
        $this->config = new Configuration($clientId, $clientSecret);
    }

    /*
     * Gets the config
     * @return Configuration
     */
    public function getConfig() 
    {
        return $this->config;
    }

    /*
     * Operation acceptAllRevisions
     *
     * Accepts all revisions in document.
     *
     * @param Requests\acceptAllRevisionsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\RevisionsModificationResponse
     */
    public function acceptAllRevisions(Requests\acceptAllRevisionsRequest $request)
    {
        try {
            list($response) = $this->acceptAllRevisionsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->acceptAllRevisionsWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation acceptAllRevisionsWithHttpInfo
     *
     * Accepts all revisions in document.
     *
     * @param Requests\acceptAllRevisionsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\RevisionsModificationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function acceptAllRevisionsWithHttpInfo(Requests\acceptAllRevisionsRequest $request)
    {
        $returnType = '\Aspose\Words\Model\RevisionsModificationResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\RevisionsModificationResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation acceptAllRevisionsAsync
     *
     * Accepts all revisions in document.
     *
     * @param Requests\acceptAllRevisionsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function acceptAllRevisionsAsync(Requests\acceptAllRevisionsRequest $request) 
    {
        return $this->acceptAllRevisionsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation acceptAllRevisionsAsyncWithHttpInfo
     *
     * Accepts all revisions in document.
     *
     * @param Requests\acceptAllRevisionsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function acceptAllRevisionsAsyncWithHttpInfo(Requests\acceptAllRevisionsRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\RevisionsModificationResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation appendDocument
     *
     * Appends documents to original document.
     *
     * @param Requests\appendDocumentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\DocumentResponse
     */
    public function appendDocument(Requests\appendDocumentRequest $request)
    {
        try {
            list($response) = $this->appendDocumentWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->appendDocumentWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation appendDocumentWithHttpInfo
     *
     * Appends documents to original document.
     *
     * @param Requests\appendDocumentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\DocumentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function appendDocumentWithHttpInfo(Requests\appendDocumentRequest $request)
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\DocumentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation appendDocumentAsync
     *
     * Appends documents to original document.
     *
     * @param Requests\appendDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function appendDocumentAsync(Requests\appendDocumentRequest $request) 
    {
        return $this->appendDocumentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation appendDocumentAsyncWithHttpInfo
     *
     * Appends documents to original document.
     *
     * @param Requests\appendDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function appendDocumentAsyncWithHttpInfo(Requests\appendDocumentRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation applyStyleToDocumentElement
     *
     * Apply a style to the document node.
     *
     * @param Requests\applyStyleToDocumentElementRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\WordsResponse
     */
    public function applyStyleToDocumentElement(Requests\applyStyleToDocumentElementRequest $request)
    {
        try {
            list($response) = $this->applyStyleToDocumentElementWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->applyStyleToDocumentElementWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation applyStyleToDocumentElementWithHttpInfo
     *
     * Apply a style to the document node.
     *
     * @param Requests\applyStyleToDocumentElementRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\WordsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function applyStyleToDocumentElementWithHttpInfo(Requests\applyStyleToDocumentElementRequest $request)
    {
        $returnType = '\Aspose\Words\Model\WordsResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\WordsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation applyStyleToDocumentElementAsync
     *
     * Apply a style to the document node.
     *
     * @param Requests\applyStyleToDocumentElementRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function applyStyleToDocumentElementAsync(Requests\applyStyleToDocumentElementRequest $request) 
    {
        return $this->applyStyleToDocumentElementAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation applyStyleToDocumentElementAsyncWithHttpInfo
     *
     * Apply a style to the document node.
     *
     * @param Requests\applyStyleToDocumentElementRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function applyStyleToDocumentElementAsyncWithHttpInfo(Requests\applyStyleToDocumentElementRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\WordsResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation buildReport
     *
     * Executes document "build report" operation.
     *
     * @param Requests\buildReportRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\DocumentResponse
     */
    public function buildReport(Requests\buildReportRequest $request)
    {
        try {
            list($response) = $this->buildReportWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->buildReportWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation buildReportWithHttpInfo
     *
     * Executes document "build report" operation.
     *
     * @param Requests\buildReportRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\DocumentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function buildReportWithHttpInfo(Requests\buildReportRequest $request)
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\DocumentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation buildReportAsync
     *
     * Executes document "build report" operation.
     *
     * @param Requests\buildReportRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function buildReportAsync(Requests\buildReportRequest $request) 
    {
        return $this->buildReportAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation buildReportAsyncWithHttpInfo
     *
     * Executes document "build report" operation.
     *
     * @param Requests\buildReportRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function buildReportAsyncWithHttpInfo(Requests\buildReportRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation buildReportOnline
     *
     * Executes document "build report" online operation.
     *
     * @param Requests\buildReportOnlineRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function buildReportOnline(Requests\buildReportOnlineRequest $request)
    {
        try {
            list($response) = $this->buildReportOnlineWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->buildReportOnlineWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation buildReportOnlineWithHttpInfo
     *
     * Executes document "build report" online operation.
     *
     * @param Requests\buildReportOnlineRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    private function buildReportOnlineWithHttpInfo(Requests\buildReportOnlineRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation buildReportOnlineAsync
     *
     * Executes document "build report" online operation.
     *
     * @param Requests\buildReportOnlineRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function buildReportOnlineAsync(Requests\buildReportOnlineRequest $request) 
    {
        return $this->buildReportOnlineAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation buildReportOnlineAsyncWithHttpInfo
     *
     * Executes document "build report" online operation.
     *
     * @param Requests\buildReportOnlineRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function buildReportOnlineAsyncWithHttpInfo(Requests\buildReportOnlineRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation classify
     *
     * Classifies raw text.
     *
     * @param Requests\classifyRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\ClassificationResponse
     */
    public function classify(Requests\classifyRequest $request)
    {
        try {
            list($response) = $this->classifyWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->classifyWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation classifyWithHttpInfo
     *
     * Classifies raw text.
     *
     * @param Requests\classifyRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\ClassificationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function classifyWithHttpInfo(Requests\classifyRequest $request)
    {
        $returnType = '\Aspose\Words\Model\ClassificationResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\ClassificationResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation classifyAsync
     *
     * Classifies raw text.
     *
     * @param Requests\classifyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function classifyAsync(Requests\classifyRequest $request) 
    {
        return $this->classifyAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation classifyAsyncWithHttpInfo
     *
     * Classifies raw text.
     *
     * @param Requests\classifyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function classifyAsyncWithHttpInfo(Requests\classifyRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\ClassificationResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation classifyDocument
     *
     * Classifies document.
     *
     * @param Requests\classifyDocumentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\ClassificationResponse
     */
    public function classifyDocument(Requests\classifyDocumentRequest $request)
    {
        try {
            list($response) = $this->classifyDocumentWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->classifyDocumentWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation classifyDocumentWithHttpInfo
     *
     * Classifies document.
     *
     * @param Requests\classifyDocumentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\ClassificationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function classifyDocumentWithHttpInfo(Requests\classifyDocumentRequest $request)
    {
        $returnType = '\Aspose\Words\Model\ClassificationResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\ClassificationResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation classifyDocumentAsync
     *
     * Classifies document.
     *
     * @param Requests\classifyDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function classifyDocumentAsync(Requests\classifyDocumentRequest $request) 
    {
        return $this->classifyDocumentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation classifyDocumentAsyncWithHttpInfo
     *
     * Classifies document.
     *
     * @param Requests\classifyDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function classifyDocumentAsyncWithHttpInfo(Requests\classifyDocumentRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\ClassificationResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation compareDocument
     *
     * Compares document with original document.
     *
     * @param Requests\compareDocumentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\DocumentResponse
     */
    public function compareDocument(Requests\compareDocumentRequest $request)
    {
        try {
            list($response) = $this->compareDocumentWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->compareDocumentWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation compareDocumentWithHttpInfo
     *
     * Compares document with original document.
     *
     * @param Requests\compareDocumentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\DocumentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function compareDocumentWithHttpInfo(Requests\compareDocumentRequest $request)
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\DocumentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation compareDocumentAsync
     *
     * Compares document with original document.
     *
     * @param Requests\compareDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function compareDocumentAsync(Requests\compareDocumentRequest $request) 
    {
        return $this->compareDocumentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation compareDocumentAsyncWithHttpInfo
     *
     * Compares document with original document.
     *
     * @param Requests\compareDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function compareDocumentAsyncWithHttpInfo(Requests\compareDocumentRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation convertDocument
     *
     * Converts document from the request's content to the specified format.
     *
     * @param Requests\convertDocumentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function convertDocument(Requests\convertDocumentRequest $request)
    {
        try {
            list($response) = $this->convertDocumentWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->convertDocumentWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation convertDocumentWithHttpInfo
     *
     * Converts document from the request's content to the specified format.
     *
     * @param Requests\convertDocumentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    private function convertDocumentWithHttpInfo(Requests\convertDocumentRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation convertDocumentAsync
     *
     * Converts document from the request's content to the specified format.
     *
     * @param Requests\convertDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertDocumentAsync(Requests\convertDocumentRequest $request) 
    {
        return $this->convertDocumentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation convertDocumentAsyncWithHttpInfo
     *
     * Converts document from the request's content to the specified format.
     *
     * @param Requests\convertDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function convertDocumentAsyncWithHttpInfo(Requests\convertDocumentRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation copyFile
     *
     * Copy file.
     *
     * @param Requests\copyFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function copyFile(Requests\copyFileRequest $request)
    {
        try {
    $this->copyFileWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->copyFileWithHttpInfo($request);
        } 
    }

    /*
     * Operation copyFileWithHttpInfo
     *
     * Copy file.
     *
     * @param Requests\copyFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function copyFileWithHttpInfo(Requests\copyFileRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation copyFileAsync
     *
     * Copy file.
     *
     * @param Requests\copyFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function copyFileAsync(Requests\copyFileRequest $request) 
    {
        return $this->copyFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation copyFileAsyncWithHttpInfo
     *
     * Copy file.
     *
     * @param Requests\copyFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function copyFileAsyncWithHttpInfo(Requests\copyFileRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation copyFolder
     *
     * Copy folder.
     *
     * @param Requests\copyFolderRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function copyFolder(Requests\copyFolderRequest $request)
    {
        try {
    $this->copyFolderWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->copyFolderWithHttpInfo($request);
        } 
    }

    /*
     * Operation copyFolderWithHttpInfo
     *
     * Copy folder.
     *
     * @param Requests\copyFolderRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function copyFolderWithHttpInfo(Requests\copyFolderRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation copyFolderAsync
     *
     * Copy folder.
     *
     * @param Requests\copyFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function copyFolderAsync(Requests\copyFolderRequest $request) 
    {
        return $this->copyFolderAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation copyFolderAsyncWithHttpInfo
     *
     * Copy folder.
     *
     * @param Requests\copyFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function copyFolderAsyncWithHttpInfo(Requests\copyFolderRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation copyStyle
     *
     * Copy and insert a new style to the document, returns a copied style.
     *
     * @param Requests\copyStyleRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\StyleResponse
     */
    public function copyStyle(Requests\copyStyleRequest $request)
    {
        try {
            list($response) = $this->copyStyleWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->copyStyleWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation copyStyleWithHttpInfo
     *
     * Copy and insert a new style to the document, returns a copied style.
     *
     * @param Requests\copyStyleRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\StyleResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function copyStyleWithHttpInfo(Requests\copyStyleRequest $request)
    {
        $returnType = '\Aspose\Words\Model\StyleResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\StyleResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation copyStyleAsync
     *
     * Copy and insert a new style to the document, returns a copied style.
     *
     * @param Requests\copyStyleRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function copyStyleAsync(Requests\copyStyleRequest $request) 
    {
        return $this->copyStyleAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation copyStyleAsyncWithHttpInfo
     *
     * Copy and insert a new style to the document, returns a copied style.
     *
     * @param Requests\copyStyleRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function copyStyleAsyncWithHttpInfo(Requests\copyStyleRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\StyleResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation createDocument
     *
     * Creates new document.
     * Document is created with format which is recognized from file extensions.
     * Supported extensions: ".doc", ".docx", ".docm", ".dot", ".dotm", ".dotx", ".flatopc", ".fopc", ".flatopc_macro", ".fopc_macro", ".flatopc_template", ".fopc_template", ".flatopc_template_macro", ".fopc_template_macro", ".wordml", ".wml", ".rtf".
     *
     * @param Requests\createDocumentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\DocumentResponse
     */
    public function createDocument(Requests\createDocumentRequest $request)
    {
        try {
            list($response) = $this->createDocumentWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->createDocumentWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation createDocumentWithHttpInfo
     *
     * Creates new document.
     * Document is created with format which is recognized from file extensions.
     * Supported extensions: ".doc", ".docx", ".docm", ".dot", ".dotm", ".dotx", ".flatopc", ".fopc", ".flatopc_macro", ".fopc_macro", ".flatopc_template", ".fopc_template", ".flatopc_template_macro", ".fopc_template_macro", ".wordml", ".wml", ".rtf".
     *
     * @param Requests\createDocumentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\DocumentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function createDocumentWithHttpInfo(Requests\createDocumentRequest $request)
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\DocumentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation createDocumentAsync
     *
     * Creates new document.
     * Document is created with format which is recognized from file extensions.
     * Supported extensions: ".doc", ".docx", ".docm", ".dot", ".dotm", ".dotx", ".flatopc", ".fopc", ".flatopc_macro", ".fopc_macro", ".flatopc_template", ".fopc_template", ".flatopc_template_macro", ".fopc_template_macro", ".wordml", ".wml", ".rtf".
     *
     * @param Requests\createDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDocumentAsync(Requests\createDocumentRequest $request) 
    {
        return $this->createDocumentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation createDocumentAsyncWithHttpInfo
     *
     * Creates new document.
     * Document is created with format which is recognized from file extensions.
     * Supported extensions: ".doc", ".docx", ".docm", ".dot", ".dotm", ".dotx", ".flatopc", ".fopc", ".flatopc_macro", ".fopc_macro", ".flatopc_template", ".fopc_template", ".flatopc_template_macro", ".fopc_template_macro", ".wordml", ".wml", ".rtf".
     *
     * @param Requests\createDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function createDocumentAsyncWithHttpInfo(Requests\createDocumentRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation createFolder
     *
     * Create the folder.
     *
     * @param Requests\createFolderRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function createFolder(Requests\createFolderRequest $request)
    {
        try {
    $this->createFolderWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->createFolderWithHttpInfo($request);
        } 
    }

    /*
     * Operation createFolderWithHttpInfo
     *
     * Create the folder.
     *
     * @param Requests\createFolderRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function createFolderWithHttpInfo(Requests\createFolderRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation createFolderAsync
     *
     * Create the folder.
     *
     * @param Requests\createFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createFolderAsync(Requests\createFolderRequest $request) 
    {
        return $this->createFolderAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation createFolderAsyncWithHttpInfo
     *
     * Create the folder.
     *
     * @param Requests\createFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function createFolderAsyncWithHttpInfo(Requests\createFolderRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation createOrUpdateDocumentProperty
     *
     * Adds new or update existing document property.
     *
     * @param Requests\createOrUpdateDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\DocumentPropertyResponse
     */
    public function createOrUpdateDocumentProperty(Requests\createOrUpdateDocumentPropertyRequest $request)
    {
        try {
            list($response) = $this->createOrUpdateDocumentPropertyWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->createOrUpdateDocumentPropertyWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation createOrUpdateDocumentPropertyWithHttpInfo
     *
     * Adds new or update existing document property.
     *
     * @param Requests\createOrUpdateDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\DocumentPropertyResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function createOrUpdateDocumentPropertyWithHttpInfo(Requests\createOrUpdateDocumentPropertyRequest $request)
    {
        $returnType = '\Aspose\Words\Model\DocumentPropertyResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\DocumentPropertyResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation createOrUpdateDocumentPropertyAsync
     *
     * Adds new or update existing document property.
     *
     * @param Requests\createOrUpdateDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOrUpdateDocumentPropertyAsync(Requests\createOrUpdateDocumentPropertyRequest $request) 
    {
        return $this->createOrUpdateDocumentPropertyAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation createOrUpdateDocumentPropertyAsyncWithHttpInfo
     *
     * Adds new or update existing document property.
     *
     * @param Requests\createOrUpdateDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function createOrUpdateDocumentPropertyAsyncWithHttpInfo(Requests\createOrUpdateDocumentPropertyRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\DocumentPropertyResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation deleteAllParagraphTabStops
     *
     * Remove all tab stops.
     *
     * @param Requests\deleteAllParagraphTabStopsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\TabStopsResponse
     */
    public function deleteAllParagraphTabStops(Requests\deleteAllParagraphTabStopsRequest $request)
    {
        try {
            list($response) = $this->deleteAllParagraphTabStopsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->deleteAllParagraphTabStopsWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation deleteAllParagraphTabStopsWithHttpInfo
     *
     * Remove all tab stops.
     *
     * @param Requests\deleteAllParagraphTabStopsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\TabStopsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function deleteAllParagraphTabStopsWithHttpInfo(Requests\deleteAllParagraphTabStopsRequest $request)
    {
        $returnType = '\Aspose\Words\Model\TabStopsResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\TabStopsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation deleteAllParagraphTabStopsAsync
     *
     * Remove all tab stops.
     *
     * @param Requests\deleteAllParagraphTabStopsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAllParagraphTabStopsAsync(Requests\deleteAllParagraphTabStopsRequest $request) 
    {
        return $this->deleteAllParagraphTabStopsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteAllParagraphTabStopsAsyncWithHttpInfo
     *
     * Remove all tab stops.
     *
     * @param Requests\deleteAllParagraphTabStopsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function deleteAllParagraphTabStopsAsyncWithHttpInfo(Requests\deleteAllParagraphTabStopsRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\TabStopsResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation deleteBorder
     *
     * 'nodePath' should refer to paragraph, cell or row.
     *
     * @param Requests\deleteBorderRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\BorderResponse
     */
    public function deleteBorder(Requests\deleteBorderRequest $request)
    {
        try {
            list($response) = $this->deleteBorderWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->deleteBorderWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation deleteBorderWithHttpInfo
     *
     * 'nodePath' should refer to paragraph, cell or row.
     *
     * @param Requests\deleteBorderRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\BorderResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function deleteBorderWithHttpInfo(Requests\deleteBorderRequest $request)
    {
        $returnType = '\Aspose\Words\Model\BorderResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\BorderResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation deleteBorderAsync
     *
     * 'nodePath' should refer to paragraph, cell or row.
     *
     * @param Requests\deleteBorderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteBorderAsync(Requests\deleteBorderRequest $request) 
    {
        return $this->deleteBorderAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteBorderAsyncWithHttpInfo
     *
     * 'nodePath' should refer to paragraph, cell or row.
     *
     * @param Requests\deleteBorderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function deleteBorderAsyncWithHttpInfo(Requests\deleteBorderRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\BorderResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation deleteBorders
     *
     * 'nodePath' should refer to paragraph, cell or row.
     *
     * @param Requests\deleteBordersRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\BordersResponse
     */
    public function deleteBorders(Requests\deleteBordersRequest $request)
    {
        try {
            list($response) = $this->deleteBordersWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->deleteBordersWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation deleteBordersWithHttpInfo
     *
     * 'nodePath' should refer to paragraph, cell or row.
     *
     * @param Requests\deleteBordersRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\BordersResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function deleteBordersWithHttpInfo(Requests\deleteBordersRequest $request)
    {
        $returnType = '\Aspose\Words\Model\BordersResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\BordersResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation deleteBordersAsync
     *
     * 'nodePath' should refer to paragraph, cell or row.
     *
     * @param Requests\deleteBordersRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteBordersAsync(Requests\deleteBordersRequest $request) 
    {
        return $this->deleteBordersAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteBordersAsyncWithHttpInfo
     *
     * 'nodePath' should refer to paragraph, cell or row.
     *
     * @param Requests\deleteBordersRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function deleteBordersAsyncWithHttpInfo(Requests\deleteBordersRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\BordersResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation deleteComment
     *
     * Removes comment from document.
     *
     * @param Requests\deleteCommentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteComment(Requests\deleteCommentRequest $request)
    {
        try {
    $this->deleteCommentWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->deleteCommentWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteCommentWithHttpInfo
     *
     * Removes comment from document.
     *
     * @param Requests\deleteCommentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function deleteCommentWithHttpInfo(Requests\deleteCommentRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation deleteCommentAsync
     *
     * Removes comment from document.
     *
     * @param Requests\deleteCommentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteCommentAsync(Requests\deleteCommentRequest $request) 
    {
        return $this->deleteCommentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteCommentAsyncWithHttpInfo
     *
     * Removes comment from document.
     *
     * @param Requests\deleteCommentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function deleteCommentAsyncWithHttpInfo(Requests\deleteCommentRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation deleteDocumentProperty
     *
     * Deletes document property.
     *
     * @param Requests\deleteDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteDocumentProperty(Requests\deleteDocumentPropertyRequest $request)
    {
        try {
    $this->deleteDocumentPropertyWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->deleteDocumentPropertyWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteDocumentPropertyWithHttpInfo
     *
     * Deletes document property.
     *
     * @param Requests\deleteDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function deleteDocumentPropertyWithHttpInfo(Requests\deleteDocumentPropertyRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation deleteDocumentPropertyAsync
     *
     * Deletes document property.
     *
     * @param Requests\deleteDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteDocumentPropertyAsync(Requests\deleteDocumentPropertyRequest $request) 
    {
        return $this->deleteDocumentPropertyAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteDocumentPropertyAsyncWithHttpInfo
     *
     * Deletes document property.
     *
     * @param Requests\deleteDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function deleteDocumentPropertyAsyncWithHttpInfo(Requests\deleteDocumentPropertyRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation deleteDrawingObject
     *
     * Removes drawing object from document.
     *
     * @param Requests\deleteDrawingObjectRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteDrawingObject(Requests\deleteDrawingObjectRequest $request)
    {
        try {
    $this->deleteDrawingObjectWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->deleteDrawingObjectWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteDrawingObjectWithHttpInfo
     *
     * Removes drawing object from document.
     *
     * @param Requests\deleteDrawingObjectRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function deleteDrawingObjectWithHttpInfo(Requests\deleteDrawingObjectRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation deleteDrawingObjectAsync
     *
     * Removes drawing object from document.
     *
     * @param Requests\deleteDrawingObjectRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteDrawingObjectAsync(Requests\deleteDrawingObjectRequest $request) 
    {
        return $this->deleteDrawingObjectAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteDrawingObjectAsyncWithHttpInfo
     *
     * Removes drawing object from document.
     *
     * @param Requests\deleteDrawingObjectRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function deleteDrawingObjectAsyncWithHttpInfo(Requests\deleteDrawingObjectRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation deleteField
     *
     * Deletes field from document.
     *
     * @param Requests\deleteFieldRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteField(Requests\deleteFieldRequest $request)
    {
        try {
    $this->deleteFieldWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->deleteFieldWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteFieldWithHttpInfo
     *
     * Deletes field from document.
     *
     * @param Requests\deleteFieldRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function deleteFieldWithHttpInfo(Requests\deleteFieldRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation deleteFieldAsync
     *
     * Deletes field from document.
     *
     * @param Requests\deleteFieldRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFieldAsync(Requests\deleteFieldRequest $request) 
    {
        return $this->deleteFieldAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteFieldAsyncWithHttpInfo
     *
     * Deletes field from document.
     *
     * @param Requests\deleteFieldRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function deleteFieldAsyncWithHttpInfo(Requests\deleteFieldRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation deleteFields
     *
     * Removes fields from section paragraph.
     *
     * @param Requests\deleteFieldsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteFields(Requests\deleteFieldsRequest $request)
    {
        try {
    $this->deleteFieldsWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->deleteFieldsWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteFieldsWithHttpInfo
     *
     * Removes fields from section paragraph.
     *
     * @param Requests\deleteFieldsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function deleteFieldsWithHttpInfo(Requests\deleteFieldsRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation deleteFieldsAsync
     *
     * Removes fields from section paragraph.
     *
     * @param Requests\deleteFieldsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFieldsAsync(Requests\deleteFieldsRequest $request) 
    {
        return $this->deleteFieldsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteFieldsAsyncWithHttpInfo
     *
     * Removes fields from section paragraph.
     *
     * @param Requests\deleteFieldsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function deleteFieldsAsyncWithHttpInfo(Requests\deleteFieldsRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation deleteFile
     *
     * Delete file.
     *
     * @param Requests\deleteFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteFile(Requests\deleteFileRequest $request)
    {
        try {
    $this->deleteFileWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->deleteFileWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteFileWithHttpInfo
     *
     * Delete file.
     *
     * @param Requests\deleteFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function deleteFileWithHttpInfo(Requests\deleteFileRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation deleteFileAsync
     *
     * Delete file.
     *
     * @param Requests\deleteFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFileAsync(Requests\deleteFileRequest $request) 
    {
        return $this->deleteFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteFileAsyncWithHttpInfo
     *
     * Delete file.
     *
     * @param Requests\deleteFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function deleteFileAsyncWithHttpInfo(Requests\deleteFileRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation deleteFolder
     *
     * Delete folder.
     *
     * @param Requests\deleteFolderRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteFolder(Requests\deleteFolderRequest $request)
    {
        try {
    $this->deleteFolderWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->deleteFolderWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteFolderWithHttpInfo
     *
     * Delete folder.
     *
     * @param Requests\deleteFolderRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function deleteFolderWithHttpInfo(Requests\deleteFolderRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation deleteFolderAsync
     *
     * Delete folder.
     *
     * @param Requests\deleteFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFolderAsync(Requests\deleteFolderRequest $request) 
    {
        return $this->deleteFolderAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteFolderAsyncWithHttpInfo
     *
     * Delete folder.
     *
     * @param Requests\deleteFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function deleteFolderAsyncWithHttpInfo(Requests\deleteFolderRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation deleteFootnote
     *
     * Removes footnote from document.
     *
     * @param Requests\deleteFootnoteRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteFootnote(Requests\deleteFootnoteRequest $request)
    {
        try {
    $this->deleteFootnoteWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->deleteFootnoteWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteFootnoteWithHttpInfo
     *
     * Removes footnote from document.
     *
     * @param Requests\deleteFootnoteRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function deleteFootnoteWithHttpInfo(Requests\deleteFootnoteRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation deleteFootnoteAsync
     *
     * Removes footnote from document.
     *
     * @param Requests\deleteFootnoteRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFootnoteAsync(Requests\deleteFootnoteRequest $request) 
    {
        return $this->deleteFootnoteAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteFootnoteAsyncWithHttpInfo
     *
     * Removes footnote from document.
     *
     * @param Requests\deleteFootnoteRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function deleteFootnoteAsyncWithHttpInfo(Requests\deleteFootnoteRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation deleteFormField
     *
     * Removes form field from document.
     *
     * @param Requests\deleteFormFieldRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteFormField(Requests\deleteFormFieldRequest $request)
    {
        try {
    $this->deleteFormFieldWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->deleteFormFieldWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteFormFieldWithHttpInfo
     *
     * Removes form field from document.
     *
     * @param Requests\deleteFormFieldRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function deleteFormFieldWithHttpInfo(Requests\deleteFormFieldRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation deleteFormFieldAsync
     *
     * Removes form field from document.
     *
     * @param Requests\deleteFormFieldRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFormFieldAsync(Requests\deleteFormFieldRequest $request) 
    {
        return $this->deleteFormFieldAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteFormFieldAsyncWithHttpInfo
     *
     * Removes form field from document.
     *
     * @param Requests\deleteFormFieldRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function deleteFormFieldAsyncWithHttpInfo(Requests\deleteFormFieldRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation deleteHeaderFooter
     *
     * Deletes header/footer from document.
     *
     * @param Requests\deleteHeaderFooterRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteHeaderFooter(Requests\deleteHeaderFooterRequest $request)
    {
        try {
    $this->deleteHeaderFooterWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->deleteHeaderFooterWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteHeaderFooterWithHttpInfo
     *
     * Deletes header/footer from document.
     *
     * @param Requests\deleteHeaderFooterRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function deleteHeaderFooterWithHttpInfo(Requests\deleteHeaderFooterRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation deleteHeaderFooterAsync
     *
     * Deletes header/footer from document.
     *
     * @param Requests\deleteHeaderFooterRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteHeaderFooterAsync(Requests\deleteHeaderFooterRequest $request) 
    {
        return $this->deleteHeaderFooterAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteHeaderFooterAsyncWithHttpInfo
     *
     * Deletes header/footer from document.
     *
     * @param Requests\deleteHeaderFooterRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function deleteHeaderFooterAsyncWithHttpInfo(Requests\deleteHeaderFooterRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation deleteHeadersFooters
     *
     * Deletes document headers and footers.
     *
     * @param Requests\deleteHeadersFootersRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteHeadersFooters(Requests\deleteHeadersFootersRequest $request)
    {
        try {
    $this->deleteHeadersFootersWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->deleteHeadersFootersWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteHeadersFootersWithHttpInfo
     *
     * Deletes document headers and footers.
     *
     * @param Requests\deleteHeadersFootersRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function deleteHeadersFootersWithHttpInfo(Requests\deleteHeadersFootersRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation deleteHeadersFootersAsync
     *
     * Deletes document headers and footers.
     *
     * @param Requests\deleteHeadersFootersRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteHeadersFootersAsync(Requests\deleteHeadersFootersRequest $request) 
    {
        return $this->deleteHeadersFootersAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteHeadersFootersAsyncWithHttpInfo
     *
     * Deletes document headers and footers.
     *
     * @param Requests\deleteHeadersFootersRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function deleteHeadersFootersAsyncWithHttpInfo(Requests\deleteHeadersFootersRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation deleteMacros
     *
     * Removes macros from document.
     *
     * @param Requests\deleteMacrosRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteMacros(Requests\deleteMacrosRequest $request)
    {
        try {
    $this->deleteMacrosWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->deleteMacrosWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteMacrosWithHttpInfo
     *
     * Removes macros from document.
     *
     * @param Requests\deleteMacrosRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function deleteMacrosWithHttpInfo(Requests\deleteMacrosRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation deleteMacrosAsync
     *
     * Removes macros from document.
     *
     * @param Requests\deleteMacrosRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteMacrosAsync(Requests\deleteMacrosRequest $request) 
    {
        return $this->deleteMacrosAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteMacrosAsyncWithHttpInfo
     *
     * Removes macros from document.
     *
     * @param Requests\deleteMacrosRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function deleteMacrosAsyncWithHttpInfo(Requests\deleteMacrosRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation deleteOfficeMathObject
     *
     * Removes OfficeMath object from document.
     *
     * @param Requests\deleteOfficeMathObjectRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteOfficeMathObject(Requests\deleteOfficeMathObjectRequest $request)
    {
        try {
    $this->deleteOfficeMathObjectWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->deleteOfficeMathObjectWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteOfficeMathObjectWithHttpInfo
     *
     * Removes OfficeMath object from document.
     *
     * @param Requests\deleteOfficeMathObjectRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function deleteOfficeMathObjectWithHttpInfo(Requests\deleteOfficeMathObjectRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation deleteOfficeMathObjectAsync
     *
     * Removes OfficeMath object from document.
     *
     * @param Requests\deleteOfficeMathObjectRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteOfficeMathObjectAsync(Requests\deleteOfficeMathObjectRequest $request) 
    {
        return $this->deleteOfficeMathObjectAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteOfficeMathObjectAsyncWithHttpInfo
     *
     * Removes OfficeMath object from document.
     *
     * @param Requests\deleteOfficeMathObjectRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function deleteOfficeMathObjectAsyncWithHttpInfo(Requests\deleteOfficeMathObjectRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation deleteParagraph
     *
     * Removes paragraph from section.
     *
     * @param Requests\deleteParagraphRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteParagraph(Requests\deleteParagraphRequest $request)
    {
        try {
    $this->deleteParagraphWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->deleteParagraphWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteParagraphWithHttpInfo
     *
     * Removes paragraph from section.
     *
     * @param Requests\deleteParagraphRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function deleteParagraphWithHttpInfo(Requests\deleteParagraphRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation deleteParagraphAsync
     *
     * Removes paragraph from section.
     *
     * @param Requests\deleteParagraphRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteParagraphAsync(Requests\deleteParagraphRequest $request) 
    {
        return $this->deleteParagraphAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteParagraphAsyncWithHttpInfo
     *
     * Removes paragraph from section.
     *
     * @param Requests\deleteParagraphRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function deleteParagraphAsyncWithHttpInfo(Requests\deleteParagraphRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation deleteParagraphListFormat
     *
     * Delete paragraph list format, returns updated list format properties.
     *
     * @param Requests\deleteParagraphListFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\ParagraphListFormatResponse
     */
    public function deleteParagraphListFormat(Requests\deleteParagraphListFormatRequest $request)
    {
        try {
            list($response) = $this->deleteParagraphListFormatWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->deleteParagraphListFormatWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation deleteParagraphListFormatWithHttpInfo
     *
     * Delete paragraph list format, returns updated list format properties.
     *
     * @param Requests\deleteParagraphListFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\ParagraphListFormatResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function deleteParagraphListFormatWithHttpInfo(Requests\deleteParagraphListFormatRequest $request)
    {
        $returnType = '\Aspose\Words\Model\ParagraphListFormatResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\ParagraphListFormatResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation deleteParagraphListFormatAsync
     *
     * Delete paragraph list format, returns updated list format properties.
     *
     * @param Requests\deleteParagraphListFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteParagraphListFormatAsync(Requests\deleteParagraphListFormatRequest $request) 
    {
        return $this->deleteParagraphListFormatAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteParagraphListFormatAsyncWithHttpInfo
     *
     * Delete paragraph list format, returns updated list format properties.
     *
     * @param Requests\deleteParagraphListFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function deleteParagraphListFormatAsyncWithHttpInfo(Requests\deleteParagraphListFormatRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\ParagraphListFormatResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation deleteParagraphTabStop
     *
     * Remove the i-th tab stop.
     *
     * @param Requests\deleteParagraphTabStopRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\TabStopsResponse
     */
    public function deleteParagraphTabStop(Requests\deleteParagraphTabStopRequest $request)
    {
        try {
            list($response) = $this->deleteParagraphTabStopWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->deleteParagraphTabStopWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation deleteParagraphTabStopWithHttpInfo
     *
     * Remove the i-th tab stop.
     *
     * @param Requests\deleteParagraphTabStopRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\TabStopsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function deleteParagraphTabStopWithHttpInfo(Requests\deleteParagraphTabStopRequest $request)
    {
        $returnType = '\Aspose\Words\Model\TabStopsResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\TabStopsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation deleteParagraphTabStopAsync
     *
     * Remove the i-th tab stop.
     *
     * @param Requests\deleteParagraphTabStopRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteParagraphTabStopAsync(Requests\deleteParagraphTabStopRequest $request) 
    {
        return $this->deleteParagraphTabStopAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteParagraphTabStopAsyncWithHttpInfo
     *
     * Remove the i-th tab stop.
     *
     * @param Requests\deleteParagraphTabStopRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function deleteParagraphTabStopAsyncWithHttpInfo(Requests\deleteParagraphTabStopRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\TabStopsResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation deleteRun
     *
     * Removes run from document.
     *
     * @param Requests\deleteRunRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteRun(Requests\deleteRunRequest $request)
    {
        try {
    $this->deleteRunWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->deleteRunWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteRunWithHttpInfo
     *
     * Removes run from document.
     *
     * @param Requests\deleteRunRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function deleteRunWithHttpInfo(Requests\deleteRunRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation deleteRunAsync
     *
     * Removes run from document.
     *
     * @param Requests\deleteRunRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteRunAsync(Requests\deleteRunRequest $request) 
    {
        return $this->deleteRunAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteRunAsyncWithHttpInfo
     *
     * Removes run from document.
     *
     * @param Requests\deleteRunRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function deleteRunAsyncWithHttpInfo(Requests\deleteRunRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation deleteSection
     *
     * Removes section from document.
     *
     * @param Requests\deleteSectionRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteSection(Requests\deleteSectionRequest $request)
    {
        try {
    $this->deleteSectionWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->deleteSectionWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteSectionWithHttpInfo
     *
     * Removes section from document.
     *
     * @param Requests\deleteSectionRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function deleteSectionWithHttpInfo(Requests\deleteSectionRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation deleteSectionAsync
     *
     * Removes section from document.
     *
     * @param Requests\deleteSectionRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteSectionAsync(Requests\deleteSectionRequest $request) 
    {
        return $this->deleteSectionAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteSectionAsyncWithHttpInfo
     *
     * Removes section from document.
     *
     * @param Requests\deleteSectionRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function deleteSectionAsyncWithHttpInfo(Requests\deleteSectionRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation deleteTable
     *
     * Deletes a table.
     *
     * @param Requests\deleteTableRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteTable(Requests\deleteTableRequest $request)
    {
        try {
    $this->deleteTableWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->deleteTableWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteTableWithHttpInfo
     *
     * Deletes a table.
     *
     * @param Requests\deleteTableRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function deleteTableWithHttpInfo(Requests\deleteTableRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation deleteTableAsync
     *
     * Deletes a table.
     *
     * @param Requests\deleteTableRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteTableAsync(Requests\deleteTableRequest $request) 
    {
        return $this->deleteTableAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteTableAsyncWithHttpInfo
     *
     * Deletes a table.
     *
     * @param Requests\deleteTableRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function deleteTableAsyncWithHttpInfo(Requests\deleteTableRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation deleteTableCell
     *
     * Deletes a table cell.
     *
     * @param Requests\deleteTableCellRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteTableCell(Requests\deleteTableCellRequest $request)
    {
        try {
    $this->deleteTableCellWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->deleteTableCellWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteTableCellWithHttpInfo
     *
     * Deletes a table cell.
     *
     * @param Requests\deleteTableCellRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function deleteTableCellWithHttpInfo(Requests\deleteTableCellRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation deleteTableCellAsync
     *
     * Deletes a table cell.
     *
     * @param Requests\deleteTableCellRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteTableCellAsync(Requests\deleteTableCellRequest $request) 
    {
        return $this->deleteTableCellAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteTableCellAsyncWithHttpInfo
     *
     * Deletes a table cell.
     *
     * @param Requests\deleteTableCellRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function deleteTableCellAsyncWithHttpInfo(Requests\deleteTableCellRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation deleteTableRow
     *
     * Deletes a table row.
     *
     * @param Requests\deleteTableRowRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteTableRow(Requests\deleteTableRowRequest $request)
    {
        try {
    $this->deleteTableRowWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->deleteTableRowWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteTableRowWithHttpInfo
     *
     * Deletes a table row.
     *
     * @param Requests\deleteTableRowRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function deleteTableRowWithHttpInfo(Requests\deleteTableRowRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation deleteTableRowAsync
     *
     * Deletes a table row.
     *
     * @param Requests\deleteTableRowRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteTableRowAsync(Requests\deleteTableRowRequest $request) 
    {
        return $this->deleteTableRowAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteTableRowAsyncWithHttpInfo
     *
     * Deletes a table row.
     *
     * @param Requests\deleteTableRowRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function deleteTableRowAsyncWithHttpInfo(Requests\deleteTableRowRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation deleteWatermark
     *
     * Deletes watermark (for deleting last watermark from the document).
     *
     * @param Requests\deleteWatermarkRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\DocumentResponse
     */
    public function deleteWatermark(Requests\deleteWatermarkRequest $request)
    {
        try {
            list($response) = $this->deleteWatermarkWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->deleteWatermarkWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation deleteWatermarkWithHttpInfo
     *
     * Deletes watermark (for deleting last watermark from the document).
     *
     * @param Requests\deleteWatermarkRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\DocumentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function deleteWatermarkWithHttpInfo(Requests\deleteWatermarkRequest $request)
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\DocumentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation deleteWatermarkAsync
     *
     * Deletes watermark (for deleting last watermark from the document).
     *
     * @param Requests\deleteWatermarkRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteWatermarkAsync(Requests\deleteWatermarkRequest $request) 
    {
        return $this->deleteWatermarkAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteWatermarkAsyncWithHttpInfo
     *
     * Deletes watermark (for deleting last watermark from the document).
     *
     * @param Requests\deleteWatermarkRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function deleteWatermarkAsyncWithHttpInfo(Requests\deleteWatermarkRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation downloadFile
     *
     * Download file.
     *
     * @param Requests\downloadFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function downloadFile(Requests\downloadFileRequest $request)
    {
        try {
            list($response) = $this->downloadFileWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->downloadFileWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation downloadFileWithHttpInfo
     *
     * Download file.
     *
     * @param Requests\downloadFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    private function downloadFileWithHttpInfo(Requests\downloadFileRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation downloadFileAsync
     *
     * Download file.
     *
     * @param Requests\downloadFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function downloadFileAsync(Requests\downloadFileRequest $request) 
    {
        return $this->downloadFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation downloadFileAsyncWithHttpInfo
     *
     * Download file.
     *
     * @param Requests\downloadFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function downloadFileAsyncWithHttpInfo(Requests\downloadFileRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation executeMailMerge
     *
     * Executes document mail merge operation.
     *
     * @param Requests\executeMailMergeRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\DocumentResponse
     */
    public function executeMailMerge(Requests\executeMailMergeRequest $request)
    {
        try {
            list($response) = $this->executeMailMergeWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->executeMailMergeWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation executeMailMergeWithHttpInfo
     *
     * Executes document mail merge operation.
     *
     * @param Requests\executeMailMergeRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\DocumentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function executeMailMergeWithHttpInfo(Requests\executeMailMergeRequest $request)
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\DocumentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation executeMailMergeAsync
     *
     * Executes document mail merge operation.
     *
     * @param Requests\executeMailMergeRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function executeMailMergeAsync(Requests\executeMailMergeRequest $request) 
    {
        return $this->executeMailMergeAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation executeMailMergeAsyncWithHttpInfo
     *
     * Executes document mail merge operation.
     *
     * @param Requests\executeMailMergeRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function executeMailMergeAsyncWithHttpInfo(Requests\executeMailMergeRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation executeMailMergeOnline
     *
     * Executes document mail merge online.
     *
     * @param Requests\executeMailMergeOnlineRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function executeMailMergeOnline(Requests\executeMailMergeOnlineRequest $request)
    {
        try {
            list($response) = $this->executeMailMergeOnlineWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->executeMailMergeOnlineWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation executeMailMergeOnlineWithHttpInfo
     *
     * Executes document mail merge online.
     *
     * @param Requests\executeMailMergeOnlineRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    private function executeMailMergeOnlineWithHttpInfo(Requests\executeMailMergeOnlineRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation executeMailMergeOnlineAsync
     *
     * Executes document mail merge online.
     *
     * @param Requests\executeMailMergeOnlineRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function executeMailMergeOnlineAsync(Requests\executeMailMergeOnlineRequest $request) 
    {
        return $this->executeMailMergeOnlineAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation executeMailMergeOnlineAsyncWithHttpInfo
     *
     * Executes document mail merge online.
     *
     * @param Requests\executeMailMergeOnlineRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function executeMailMergeOnlineAsyncWithHttpInfo(Requests\executeMailMergeOnlineRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getAvailableFonts
     *
     * Gets the list of fonts, available for document processing.
     *
     * @param Requests\getAvailableFontsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\AvailableFontsResponse
     */
    public function getAvailableFonts(Requests\getAvailableFontsRequest $request)
    {
        try {
            list($response) = $this->getAvailableFontsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getAvailableFontsWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getAvailableFontsWithHttpInfo
     *
     * Gets the list of fonts, available for document processing.
     *
     * @param Requests\getAvailableFontsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\AvailableFontsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getAvailableFontsWithHttpInfo(Requests\getAvailableFontsRequest $request)
    {
        $returnType = '\Aspose\Words\Model\AvailableFontsResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\AvailableFontsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getAvailableFontsAsync
     *
     * Gets the list of fonts, available for document processing.
     *
     * @param Requests\getAvailableFontsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAvailableFontsAsync(Requests\getAvailableFontsRequest $request) 
    {
        return $this->getAvailableFontsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getAvailableFontsAsyncWithHttpInfo
     *
     * Gets the list of fonts, available for document processing.
     *
     * @param Requests\getAvailableFontsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getAvailableFontsAsyncWithHttpInfo(Requests\getAvailableFontsRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\AvailableFontsResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getBookmarkByName
     *
     * Reads document bookmark data by its name.
     *
     * @param Requests\getBookmarkByNameRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\BookmarkResponse
     */
    public function getBookmarkByName(Requests\getBookmarkByNameRequest $request)
    {
        try {
            list($response) = $this->getBookmarkByNameWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getBookmarkByNameWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getBookmarkByNameWithHttpInfo
     *
     * Reads document bookmark data by its name.
     *
     * @param Requests\getBookmarkByNameRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\BookmarkResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getBookmarkByNameWithHttpInfo(Requests\getBookmarkByNameRequest $request)
    {
        $returnType = '\Aspose\Words\Model\BookmarkResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\BookmarkResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getBookmarkByNameAsync
     *
     * Reads document bookmark data by its name.
     *
     * @param Requests\getBookmarkByNameRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBookmarkByNameAsync(Requests\getBookmarkByNameRequest $request) 
    {
        return $this->getBookmarkByNameAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getBookmarkByNameAsyncWithHttpInfo
     *
     * Reads document bookmark data by its name.
     *
     * @param Requests\getBookmarkByNameRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getBookmarkByNameAsyncWithHttpInfo(Requests\getBookmarkByNameRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\BookmarkResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getBookmarks
     *
     * Reads document bookmarks common info.
     *
     * @param Requests\getBookmarksRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\BookmarksResponse
     */
    public function getBookmarks(Requests\getBookmarksRequest $request)
    {
        try {
            list($response) = $this->getBookmarksWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getBookmarksWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getBookmarksWithHttpInfo
     *
     * Reads document bookmarks common info.
     *
     * @param Requests\getBookmarksRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\BookmarksResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getBookmarksWithHttpInfo(Requests\getBookmarksRequest $request)
    {
        $returnType = '\Aspose\Words\Model\BookmarksResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\BookmarksResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getBookmarksAsync
     *
     * Reads document bookmarks common info.
     *
     * @param Requests\getBookmarksRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBookmarksAsync(Requests\getBookmarksRequest $request) 
    {
        return $this->getBookmarksAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getBookmarksAsyncWithHttpInfo
     *
     * Reads document bookmarks common info.
     *
     * @param Requests\getBookmarksRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getBookmarksAsyncWithHttpInfo(Requests\getBookmarksRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\BookmarksResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getBorder
     *
     * 'nodePath' should refer to paragraph, cell or row.
     *
     * @param Requests\getBorderRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\BorderResponse
     */
    public function getBorder(Requests\getBorderRequest $request)
    {
        try {
            list($response) = $this->getBorderWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getBorderWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getBorderWithHttpInfo
     *
     * 'nodePath' should refer to paragraph, cell or row.
     *
     * @param Requests\getBorderRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\BorderResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getBorderWithHttpInfo(Requests\getBorderRequest $request)
    {
        $returnType = '\Aspose\Words\Model\BorderResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\BorderResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getBorderAsync
     *
     * 'nodePath' should refer to paragraph, cell or row.
     *
     * @param Requests\getBorderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBorderAsync(Requests\getBorderRequest $request) 
    {
        return $this->getBorderAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getBorderAsyncWithHttpInfo
     *
     * 'nodePath' should refer to paragraph, cell or row.
     *
     * @param Requests\getBorderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getBorderAsyncWithHttpInfo(Requests\getBorderRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\BorderResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getBorders
     *
     * 'nodePath' should refer to paragraph, cell or row.
     *
     * @param Requests\getBordersRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\BordersResponse
     */
    public function getBorders(Requests\getBordersRequest $request)
    {
        try {
            list($response) = $this->getBordersWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getBordersWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getBordersWithHttpInfo
     *
     * 'nodePath' should refer to paragraph, cell or row.
     *
     * @param Requests\getBordersRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\BordersResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getBordersWithHttpInfo(Requests\getBordersRequest $request)
    {
        $returnType = '\Aspose\Words\Model\BordersResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\BordersResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getBordersAsync
     *
     * 'nodePath' should refer to paragraph, cell or row.
     *
     * @param Requests\getBordersRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBordersAsync(Requests\getBordersRequest $request) 
    {
        return $this->getBordersAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getBordersAsyncWithHttpInfo
     *
     * 'nodePath' should refer to paragraph, cell or row.
     *
     * @param Requests\getBordersRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getBordersAsyncWithHttpInfo(Requests\getBordersRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\BordersResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getComment
     *
     * Gets comment from document.
     *
     * @param Requests\getCommentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\CommentResponse
     */
    public function getComment(Requests\getCommentRequest $request)
    {
        try {
            list($response) = $this->getCommentWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getCommentWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getCommentWithHttpInfo
     *
     * Gets comment from document.
     *
     * @param Requests\getCommentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\CommentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getCommentWithHttpInfo(Requests\getCommentRequest $request)
    {
        $returnType = '\Aspose\Words\Model\CommentResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\CommentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getCommentAsync
     *
     * Gets comment from document.
     *
     * @param Requests\getCommentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCommentAsync(Requests\getCommentRequest $request) 
    {
        return $this->getCommentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getCommentAsyncWithHttpInfo
     *
     * Gets comment from document.
     *
     * @param Requests\getCommentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getCommentAsyncWithHttpInfo(Requests\getCommentRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\CommentResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getComments
     *
     * Gets comments from document.
     *
     * @param Requests\getCommentsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\CommentsResponse
     */
    public function getComments(Requests\getCommentsRequest $request)
    {
        try {
            list($response) = $this->getCommentsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getCommentsWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getCommentsWithHttpInfo
     *
     * Gets comments from document.
     *
     * @param Requests\getCommentsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\CommentsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getCommentsWithHttpInfo(Requests\getCommentsRequest $request)
    {
        $returnType = '\Aspose\Words\Model\CommentsResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\CommentsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getCommentsAsync
     *
     * Gets comments from document.
     *
     * @param Requests\getCommentsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCommentsAsync(Requests\getCommentsRequest $request) 
    {
        return $this->getCommentsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getCommentsAsyncWithHttpInfo
     *
     * Gets comments from document.
     *
     * @param Requests\getCommentsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getCommentsAsyncWithHttpInfo(Requests\getCommentsRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\CommentsResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getDocument
     *
     * Reads document common info.
     *
     * @param Requests\getDocumentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\DocumentResponse
     */
    public function getDocument(Requests\getDocumentRequest $request)
    {
        try {
            list($response) = $this->getDocumentWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getDocumentWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getDocumentWithHttpInfo
     *
     * Reads document common info.
     *
     * @param Requests\getDocumentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\DocumentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getDocumentWithHttpInfo(Requests\getDocumentRequest $request)
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\DocumentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getDocumentAsync
     *
     * Reads document common info.
     *
     * @param Requests\getDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDocumentAsync(Requests\getDocumentRequest $request) 
    {
        return $this->getDocumentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getDocumentAsyncWithHttpInfo
     *
     * Reads document common info.
     *
     * @param Requests\getDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getDocumentAsyncWithHttpInfo(Requests\getDocumentRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getDocumentDrawingObjectByIndex
     *
     * Reads document drawing object common info by its index or convert to format specified.
     *
     * @param Requests\getDocumentDrawingObjectByIndexRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\DrawingObjectResponse
     */
    public function getDocumentDrawingObjectByIndex(Requests\getDocumentDrawingObjectByIndexRequest $request)
    {
        try {
            list($response) = $this->getDocumentDrawingObjectByIndexWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getDocumentDrawingObjectByIndexWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getDocumentDrawingObjectByIndexWithHttpInfo
     *
     * Reads document drawing object common info by its index or convert to format specified.
     *
     * @param Requests\getDocumentDrawingObjectByIndexRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\DrawingObjectResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getDocumentDrawingObjectByIndexWithHttpInfo(Requests\getDocumentDrawingObjectByIndexRequest $request)
    {
        $returnType = '\Aspose\Words\Model\DrawingObjectResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\DrawingObjectResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getDocumentDrawingObjectByIndexAsync
     *
     * Reads document drawing object common info by its index or convert to format specified.
     *
     * @param Requests\getDocumentDrawingObjectByIndexRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDocumentDrawingObjectByIndexAsync(Requests\getDocumentDrawingObjectByIndexRequest $request) 
    {
        return $this->getDocumentDrawingObjectByIndexAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getDocumentDrawingObjectByIndexAsyncWithHttpInfo
     *
     * Reads document drawing object common info by its index or convert to format specified.
     *
     * @param Requests\getDocumentDrawingObjectByIndexRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getDocumentDrawingObjectByIndexAsyncWithHttpInfo(Requests\getDocumentDrawingObjectByIndexRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\DrawingObjectResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getDocumentDrawingObjectImageData
     *
     * Reads drawing object image data.
     *
     * @param Requests\getDocumentDrawingObjectImageDataRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function getDocumentDrawingObjectImageData(Requests\getDocumentDrawingObjectImageDataRequest $request)
    {
        try {
            list($response) = $this->getDocumentDrawingObjectImageDataWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getDocumentDrawingObjectImageDataWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getDocumentDrawingObjectImageDataWithHttpInfo
     *
     * Reads drawing object image data.
     *
     * @param Requests\getDocumentDrawingObjectImageDataRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    private function getDocumentDrawingObjectImageDataWithHttpInfo(Requests\getDocumentDrawingObjectImageDataRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getDocumentDrawingObjectImageDataAsync
     *
     * Reads drawing object image data.
     *
     * @param Requests\getDocumentDrawingObjectImageDataRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDocumentDrawingObjectImageDataAsync(Requests\getDocumentDrawingObjectImageDataRequest $request) 
    {
        return $this->getDocumentDrawingObjectImageDataAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getDocumentDrawingObjectImageDataAsyncWithHttpInfo
     *
     * Reads drawing object image data.
     *
     * @param Requests\getDocumentDrawingObjectImageDataRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getDocumentDrawingObjectImageDataAsyncWithHttpInfo(Requests\getDocumentDrawingObjectImageDataRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getDocumentDrawingObjectOleData
     *
     * Gets drawing object OLE data.
     *
     * @param Requests\getDocumentDrawingObjectOleDataRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function getDocumentDrawingObjectOleData(Requests\getDocumentDrawingObjectOleDataRequest $request)
    {
        try {
            list($response) = $this->getDocumentDrawingObjectOleDataWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getDocumentDrawingObjectOleDataWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getDocumentDrawingObjectOleDataWithHttpInfo
     *
     * Gets drawing object OLE data.
     *
     * @param Requests\getDocumentDrawingObjectOleDataRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    private function getDocumentDrawingObjectOleDataWithHttpInfo(Requests\getDocumentDrawingObjectOleDataRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getDocumentDrawingObjectOleDataAsync
     *
     * Gets drawing object OLE data.
     *
     * @param Requests\getDocumentDrawingObjectOleDataRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDocumentDrawingObjectOleDataAsync(Requests\getDocumentDrawingObjectOleDataRequest $request) 
    {
        return $this->getDocumentDrawingObjectOleDataAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getDocumentDrawingObjectOleDataAsyncWithHttpInfo
     *
     * Gets drawing object OLE data.
     *
     * @param Requests\getDocumentDrawingObjectOleDataRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getDocumentDrawingObjectOleDataAsyncWithHttpInfo(Requests\getDocumentDrawingObjectOleDataRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getDocumentDrawingObjects
     *
     * Reads document drawing objects common info.
     *
     * @param Requests\getDocumentDrawingObjectsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\DrawingObjectsResponse
     */
    public function getDocumentDrawingObjects(Requests\getDocumentDrawingObjectsRequest $request)
    {
        try {
            list($response) = $this->getDocumentDrawingObjectsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getDocumentDrawingObjectsWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getDocumentDrawingObjectsWithHttpInfo
     *
     * Reads document drawing objects common info.
     *
     * @param Requests\getDocumentDrawingObjectsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\DrawingObjectsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getDocumentDrawingObjectsWithHttpInfo(Requests\getDocumentDrawingObjectsRequest $request)
    {
        $returnType = '\Aspose\Words\Model\DrawingObjectsResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\DrawingObjectsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getDocumentDrawingObjectsAsync
     *
     * Reads document drawing objects common info.
     *
     * @param Requests\getDocumentDrawingObjectsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDocumentDrawingObjectsAsync(Requests\getDocumentDrawingObjectsRequest $request) 
    {
        return $this->getDocumentDrawingObjectsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getDocumentDrawingObjectsAsyncWithHttpInfo
     *
     * Reads document drawing objects common info.
     *
     * @param Requests\getDocumentDrawingObjectsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getDocumentDrawingObjectsAsyncWithHttpInfo(Requests\getDocumentDrawingObjectsRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\DrawingObjectsResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getDocumentFieldNames
     *
     * Reads document field names.
     *
     * @param Requests\getDocumentFieldNamesRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\FieldNamesResponse
     */
    public function getDocumentFieldNames(Requests\getDocumentFieldNamesRequest $request)
    {
        try {
            list($response) = $this->getDocumentFieldNamesWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getDocumentFieldNamesWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getDocumentFieldNamesWithHttpInfo
     *
     * Reads document field names.
     *
     * @param Requests\getDocumentFieldNamesRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\FieldNamesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getDocumentFieldNamesWithHttpInfo(Requests\getDocumentFieldNamesRequest $request)
    {
        $returnType = '\Aspose\Words\Model\FieldNamesResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\FieldNamesResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getDocumentFieldNamesAsync
     *
     * Reads document field names.
     *
     * @param Requests\getDocumentFieldNamesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDocumentFieldNamesAsync(Requests\getDocumentFieldNamesRequest $request) 
    {
        return $this->getDocumentFieldNamesAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getDocumentFieldNamesAsyncWithHttpInfo
     *
     * Reads document field names.
     *
     * @param Requests\getDocumentFieldNamesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getDocumentFieldNamesAsyncWithHttpInfo(Requests\getDocumentFieldNamesRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\FieldNamesResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getDocumentFieldNamesOnline
     *
     * Reads document field names.
     *
     * @param Requests\getDocumentFieldNamesOnlineRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\FieldNamesResponse
     */
    public function getDocumentFieldNamesOnline(Requests\getDocumentFieldNamesOnlineRequest $request)
    {
        try {
            list($response) = $this->getDocumentFieldNamesOnlineWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getDocumentFieldNamesOnlineWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getDocumentFieldNamesOnlineWithHttpInfo
     *
     * Reads document field names.
     *
     * @param Requests\getDocumentFieldNamesOnlineRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\FieldNamesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getDocumentFieldNamesOnlineWithHttpInfo(Requests\getDocumentFieldNamesOnlineRequest $request)
    {
        $returnType = '\Aspose\Words\Model\FieldNamesResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\FieldNamesResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getDocumentFieldNamesOnlineAsync
     *
     * Reads document field names.
     *
     * @param Requests\getDocumentFieldNamesOnlineRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDocumentFieldNamesOnlineAsync(Requests\getDocumentFieldNamesOnlineRequest $request) 
    {
        return $this->getDocumentFieldNamesOnlineAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getDocumentFieldNamesOnlineAsyncWithHttpInfo
     *
     * Reads document field names.
     *
     * @param Requests\getDocumentFieldNamesOnlineRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getDocumentFieldNamesOnlineAsyncWithHttpInfo(Requests\getDocumentFieldNamesOnlineRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\FieldNamesResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getDocumentHyperlinkByIndex
     *
     * Reads document hyperlink by its index.
     *
     * @param Requests\getDocumentHyperlinkByIndexRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\HyperlinkResponse
     */
    public function getDocumentHyperlinkByIndex(Requests\getDocumentHyperlinkByIndexRequest $request)
    {
        try {
            list($response) = $this->getDocumentHyperlinkByIndexWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getDocumentHyperlinkByIndexWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getDocumentHyperlinkByIndexWithHttpInfo
     *
     * Reads document hyperlink by its index.
     *
     * @param Requests\getDocumentHyperlinkByIndexRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\HyperlinkResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getDocumentHyperlinkByIndexWithHttpInfo(Requests\getDocumentHyperlinkByIndexRequest $request)
    {
        $returnType = '\Aspose\Words\Model\HyperlinkResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\HyperlinkResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getDocumentHyperlinkByIndexAsync
     *
     * Reads document hyperlink by its index.
     *
     * @param Requests\getDocumentHyperlinkByIndexRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDocumentHyperlinkByIndexAsync(Requests\getDocumentHyperlinkByIndexRequest $request) 
    {
        return $this->getDocumentHyperlinkByIndexAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getDocumentHyperlinkByIndexAsyncWithHttpInfo
     *
     * Reads document hyperlink by its index.
     *
     * @param Requests\getDocumentHyperlinkByIndexRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getDocumentHyperlinkByIndexAsyncWithHttpInfo(Requests\getDocumentHyperlinkByIndexRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\HyperlinkResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getDocumentHyperlinks
     *
     * Reads document hyperlinks common info.
     *
     * @param Requests\getDocumentHyperlinksRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\HyperlinksResponse
     */
    public function getDocumentHyperlinks(Requests\getDocumentHyperlinksRequest $request)
    {
        try {
            list($response) = $this->getDocumentHyperlinksWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getDocumentHyperlinksWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getDocumentHyperlinksWithHttpInfo
     *
     * Reads document hyperlinks common info.
     *
     * @param Requests\getDocumentHyperlinksRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\HyperlinksResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getDocumentHyperlinksWithHttpInfo(Requests\getDocumentHyperlinksRequest $request)
    {
        $returnType = '\Aspose\Words\Model\HyperlinksResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\HyperlinksResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getDocumentHyperlinksAsync
     *
     * Reads document hyperlinks common info.
     *
     * @param Requests\getDocumentHyperlinksRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDocumentHyperlinksAsync(Requests\getDocumentHyperlinksRequest $request) 
    {
        return $this->getDocumentHyperlinksAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getDocumentHyperlinksAsyncWithHttpInfo
     *
     * Reads document hyperlinks common info.
     *
     * @param Requests\getDocumentHyperlinksRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getDocumentHyperlinksAsyncWithHttpInfo(Requests\getDocumentHyperlinksRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\HyperlinksResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getDocumentProperties
     *
     * Reads document properties info.
     *
     * @param Requests\getDocumentPropertiesRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\DocumentPropertiesResponse
     */
    public function getDocumentProperties(Requests\getDocumentPropertiesRequest $request)
    {
        try {
            list($response) = $this->getDocumentPropertiesWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getDocumentPropertiesWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getDocumentPropertiesWithHttpInfo
     *
     * Reads document properties info.
     *
     * @param Requests\getDocumentPropertiesRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\DocumentPropertiesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getDocumentPropertiesWithHttpInfo(Requests\getDocumentPropertiesRequest $request)
    {
        $returnType = '\Aspose\Words\Model\DocumentPropertiesResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\DocumentPropertiesResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getDocumentPropertiesAsync
     *
     * Reads document properties info.
     *
     * @param Requests\getDocumentPropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDocumentPropertiesAsync(Requests\getDocumentPropertiesRequest $request) 
    {
        return $this->getDocumentPropertiesAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getDocumentPropertiesAsyncWithHttpInfo
     *
     * Reads document properties info.
     *
     * @param Requests\getDocumentPropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getDocumentPropertiesAsyncWithHttpInfo(Requests\getDocumentPropertiesRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\DocumentPropertiesResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getDocumentProperty
     *
     * Reads document property info by the property name.
     *
     * @param Requests\getDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\DocumentPropertyResponse
     */
    public function getDocumentProperty(Requests\getDocumentPropertyRequest $request)
    {
        try {
            list($response) = $this->getDocumentPropertyWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getDocumentPropertyWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getDocumentPropertyWithHttpInfo
     *
     * Reads document property info by the property name.
     *
     * @param Requests\getDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\DocumentPropertyResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getDocumentPropertyWithHttpInfo(Requests\getDocumentPropertyRequest $request)
    {
        $returnType = '\Aspose\Words\Model\DocumentPropertyResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\DocumentPropertyResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getDocumentPropertyAsync
     *
     * Reads document property info by the property name.
     *
     * @param Requests\getDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDocumentPropertyAsync(Requests\getDocumentPropertyRequest $request) 
    {
        return $this->getDocumentPropertyAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getDocumentPropertyAsyncWithHttpInfo
     *
     * Reads document property info by the property name.
     *
     * @param Requests\getDocumentPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getDocumentPropertyAsyncWithHttpInfo(Requests\getDocumentPropertyRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\DocumentPropertyResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getDocumentProtection
     *
     * Reads document protection common info.
     *
     * @param Requests\getDocumentProtectionRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\ProtectionDataResponse
     */
    public function getDocumentProtection(Requests\getDocumentProtectionRequest $request)
    {
        try {
            list($response) = $this->getDocumentProtectionWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getDocumentProtectionWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getDocumentProtectionWithHttpInfo
     *
     * Reads document protection common info.
     *
     * @param Requests\getDocumentProtectionRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\ProtectionDataResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getDocumentProtectionWithHttpInfo(Requests\getDocumentProtectionRequest $request)
    {
        $returnType = '\Aspose\Words\Model\ProtectionDataResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\ProtectionDataResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getDocumentProtectionAsync
     *
     * Reads document protection common info.
     *
     * @param Requests\getDocumentProtectionRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDocumentProtectionAsync(Requests\getDocumentProtectionRequest $request) 
    {
        return $this->getDocumentProtectionAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getDocumentProtectionAsyncWithHttpInfo
     *
     * Reads document protection common info.
     *
     * @param Requests\getDocumentProtectionRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getDocumentProtectionAsyncWithHttpInfo(Requests\getDocumentProtectionRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\ProtectionDataResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getDocumentStatistics
     *
     * Reads document statistics.
     *
     * @param Requests\getDocumentStatisticsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\StatDataResponse
     */
    public function getDocumentStatistics(Requests\getDocumentStatisticsRequest $request)
    {
        try {
            list($response) = $this->getDocumentStatisticsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getDocumentStatisticsWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getDocumentStatisticsWithHttpInfo
     *
     * Reads document statistics.
     *
     * @param Requests\getDocumentStatisticsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\StatDataResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getDocumentStatisticsWithHttpInfo(Requests\getDocumentStatisticsRequest $request)
    {
        $returnType = '\Aspose\Words\Model\StatDataResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\StatDataResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getDocumentStatisticsAsync
     *
     * Reads document statistics.
     *
     * @param Requests\getDocumentStatisticsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDocumentStatisticsAsync(Requests\getDocumentStatisticsRequest $request) 
    {
        return $this->getDocumentStatisticsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getDocumentStatisticsAsyncWithHttpInfo
     *
     * Reads document statistics.
     *
     * @param Requests\getDocumentStatisticsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getDocumentStatisticsAsyncWithHttpInfo(Requests\getDocumentStatisticsRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\StatDataResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getDocumentWithFormat
     *
     * Exports the document into the specified format.
     *
     * @param Requests\getDocumentWithFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function getDocumentWithFormat(Requests\getDocumentWithFormatRequest $request)
    {
        try {
            list($response) = $this->getDocumentWithFormatWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getDocumentWithFormatWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getDocumentWithFormatWithHttpInfo
     *
     * Exports the document into the specified format.
     *
     * @param Requests\getDocumentWithFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    private function getDocumentWithFormatWithHttpInfo(Requests\getDocumentWithFormatRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getDocumentWithFormatAsync
     *
     * Exports the document into the specified format.
     *
     * @param Requests\getDocumentWithFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDocumentWithFormatAsync(Requests\getDocumentWithFormatRequest $request) 
    {
        return $this->getDocumentWithFormatAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getDocumentWithFormatAsyncWithHttpInfo
     *
     * Exports the document into the specified format.
     *
     * @param Requests\getDocumentWithFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getDocumentWithFormatAsyncWithHttpInfo(Requests\getDocumentWithFormatRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getField
     *
     * Gets field from document.
     *
     * @param Requests\getFieldRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\FieldResponse
     */
    public function getField(Requests\getFieldRequest $request)
    {
        try {
            list($response) = $this->getFieldWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getFieldWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getFieldWithHttpInfo
     *
     * Gets field from document.
     *
     * @param Requests\getFieldRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\FieldResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getFieldWithHttpInfo(Requests\getFieldRequest $request)
    {
        $returnType = '\Aspose\Words\Model\FieldResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\FieldResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getFieldAsync
     *
     * Gets field from document.
     *
     * @param Requests\getFieldRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFieldAsync(Requests\getFieldRequest $request) 
    {
        return $this->getFieldAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getFieldAsyncWithHttpInfo
     *
     * Gets field from document.
     *
     * @param Requests\getFieldRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getFieldAsyncWithHttpInfo(Requests\getFieldRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\FieldResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getFields
     *
     * Get fields from document.
     *
     * @param Requests\getFieldsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\FieldsResponse
     */
    public function getFields(Requests\getFieldsRequest $request)
    {
        try {
            list($response) = $this->getFieldsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getFieldsWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getFieldsWithHttpInfo
     *
     * Get fields from document.
     *
     * @param Requests\getFieldsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\FieldsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getFieldsWithHttpInfo(Requests\getFieldsRequest $request)
    {
        $returnType = '\Aspose\Words\Model\FieldsResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\FieldsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getFieldsAsync
     *
     * Get fields from document.
     *
     * @param Requests\getFieldsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFieldsAsync(Requests\getFieldsRequest $request) 
    {
        return $this->getFieldsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getFieldsAsyncWithHttpInfo
     *
     * Get fields from document.
     *
     * @param Requests\getFieldsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getFieldsAsyncWithHttpInfo(Requests\getFieldsRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\FieldsResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getFilesList
     *
     * Get all files and folders within a folder.
     *
     * @param Requests\getFilesListRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\FilesList
     */
    public function getFilesList(Requests\getFilesListRequest $request)
    {
        try {
            list($response) = $this->getFilesListWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getFilesListWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getFilesListWithHttpInfo
     *
     * Get all files and folders within a folder.
     *
     * @param Requests\getFilesListRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\FilesList, HTTP status code, HTTP response headers (array of strings)
     */
    private function getFilesListWithHttpInfo(Requests\getFilesListRequest $request)
    {
        $returnType = '\Aspose\Words\Model\FilesList';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\FilesList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getFilesListAsync
     *
     * Get all files and folders within a folder.
     *
     * @param Requests\getFilesListRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFilesListAsync(Requests\getFilesListRequest $request) 
    {
        return $this->getFilesListAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getFilesListAsyncWithHttpInfo
     *
     * Get all files and folders within a folder.
     *
     * @param Requests\getFilesListRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getFilesListAsyncWithHttpInfo(Requests\getFilesListRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\FilesList';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getFootnote
     *
     * Reads footnote by index.
     *
     * @param Requests\getFootnoteRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\FootnoteResponse
     */
    public function getFootnote(Requests\getFootnoteRequest $request)
    {
        try {
            list($response) = $this->getFootnoteWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getFootnoteWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getFootnoteWithHttpInfo
     *
     * Reads footnote by index.
     *
     * @param Requests\getFootnoteRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\FootnoteResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getFootnoteWithHttpInfo(Requests\getFootnoteRequest $request)
    {
        $returnType = '\Aspose\Words\Model\FootnoteResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\FootnoteResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getFootnoteAsync
     *
     * Reads footnote by index.
     *
     * @param Requests\getFootnoteRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFootnoteAsync(Requests\getFootnoteRequest $request) 
    {
        return $this->getFootnoteAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getFootnoteAsyncWithHttpInfo
     *
     * Reads footnote by index.
     *
     * @param Requests\getFootnoteRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getFootnoteAsyncWithHttpInfo(Requests\getFootnoteRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\FootnoteResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getFootnotes
     *
     * Gets footnotes from document.
     *
     * @param Requests\getFootnotesRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\FootnotesResponse
     */
    public function getFootnotes(Requests\getFootnotesRequest $request)
    {
        try {
            list($response) = $this->getFootnotesWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getFootnotesWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getFootnotesWithHttpInfo
     *
     * Gets footnotes from document.
     *
     * @param Requests\getFootnotesRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\FootnotesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getFootnotesWithHttpInfo(Requests\getFootnotesRequest $request)
    {
        $returnType = '\Aspose\Words\Model\FootnotesResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\FootnotesResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getFootnotesAsync
     *
     * Gets footnotes from document.
     *
     * @param Requests\getFootnotesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFootnotesAsync(Requests\getFootnotesRequest $request) 
    {
        return $this->getFootnotesAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getFootnotesAsyncWithHttpInfo
     *
     * Gets footnotes from document.
     *
     * @param Requests\getFootnotesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getFootnotesAsyncWithHttpInfo(Requests\getFootnotesRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\FootnotesResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getFormField
     *
     * Returns representation of an one of the form field.
     *
     * @param Requests\getFormFieldRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\FormFieldResponse
     */
    public function getFormField(Requests\getFormFieldRequest $request)
    {
        try {
            list($response) = $this->getFormFieldWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getFormFieldWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getFormFieldWithHttpInfo
     *
     * Returns representation of an one of the form field.
     *
     * @param Requests\getFormFieldRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\FormFieldResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getFormFieldWithHttpInfo(Requests\getFormFieldRequest $request)
    {
        $returnType = '\Aspose\Words\Model\FormFieldResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\FormFieldResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getFormFieldAsync
     *
     * Returns representation of an one of the form field.
     *
     * @param Requests\getFormFieldRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFormFieldAsync(Requests\getFormFieldRequest $request) 
    {
        return $this->getFormFieldAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getFormFieldAsyncWithHttpInfo
     *
     * Returns representation of an one of the form field.
     *
     * @param Requests\getFormFieldRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getFormFieldAsyncWithHttpInfo(Requests\getFormFieldRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\FormFieldResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getFormFields
     *
     * Gets form fields from document.
     *
     * @param Requests\getFormFieldsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\FormFieldsResponse
     */
    public function getFormFields(Requests\getFormFieldsRequest $request)
    {
        try {
            list($response) = $this->getFormFieldsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getFormFieldsWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getFormFieldsWithHttpInfo
     *
     * Gets form fields from document.
     *
     * @param Requests\getFormFieldsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\FormFieldsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getFormFieldsWithHttpInfo(Requests\getFormFieldsRequest $request)
    {
        $returnType = '\Aspose\Words\Model\FormFieldsResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\FormFieldsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getFormFieldsAsync
     *
     * Gets form fields from document.
     *
     * @param Requests\getFormFieldsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFormFieldsAsync(Requests\getFormFieldsRequest $request) 
    {
        return $this->getFormFieldsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getFormFieldsAsyncWithHttpInfo
     *
     * Gets form fields from document.
     *
     * @param Requests\getFormFieldsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getFormFieldsAsyncWithHttpInfo(Requests\getFormFieldsRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\FormFieldsResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getHeaderFooter
     *
     * Returns a header/footer from the document by index.
     *
     * @param Requests\getHeaderFooterRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\HeaderFooterResponse
     */
    public function getHeaderFooter(Requests\getHeaderFooterRequest $request)
    {
        try {
            list($response) = $this->getHeaderFooterWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getHeaderFooterWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getHeaderFooterWithHttpInfo
     *
     * Returns a header/footer from the document by index.
     *
     * @param Requests\getHeaderFooterRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\HeaderFooterResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getHeaderFooterWithHttpInfo(Requests\getHeaderFooterRequest $request)
    {
        $returnType = '\Aspose\Words\Model\HeaderFooterResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\HeaderFooterResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getHeaderFooterAsync
     *
     * Returns a header/footer from the document by index.
     *
     * @param Requests\getHeaderFooterRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getHeaderFooterAsync(Requests\getHeaderFooterRequest $request) 
    {
        return $this->getHeaderFooterAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getHeaderFooterAsyncWithHttpInfo
     *
     * Returns a header/footer from the document by index.
     *
     * @param Requests\getHeaderFooterRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getHeaderFooterAsyncWithHttpInfo(Requests\getHeaderFooterRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\HeaderFooterResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getHeaderFooterOfSection
     *
     * Returns a header/footer from the document section.
     *
     * @param Requests\getHeaderFooterOfSectionRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\HeaderFooterResponse
     */
    public function getHeaderFooterOfSection(Requests\getHeaderFooterOfSectionRequest $request)
    {
        try {
            list($response) = $this->getHeaderFooterOfSectionWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getHeaderFooterOfSectionWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getHeaderFooterOfSectionWithHttpInfo
     *
     * Returns a header/footer from the document section.
     *
     * @param Requests\getHeaderFooterOfSectionRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\HeaderFooterResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getHeaderFooterOfSectionWithHttpInfo(Requests\getHeaderFooterOfSectionRequest $request)
    {
        $returnType = '\Aspose\Words\Model\HeaderFooterResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\HeaderFooterResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getHeaderFooterOfSectionAsync
     *
     * Returns a header/footer from the document section.
     *
     * @param Requests\getHeaderFooterOfSectionRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getHeaderFooterOfSectionAsync(Requests\getHeaderFooterOfSectionRequest $request) 
    {
        return $this->getHeaderFooterOfSectionAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getHeaderFooterOfSectionAsyncWithHttpInfo
     *
     * Returns a header/footer from the document section.
     *
     * @param Requests\getHeaderFooterOfSectionRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getHeaderFooterOfSectionAsyncWithHttpInfo(Requests\getHeaderFooterOfSectionRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\HeaderFooterResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getHeaderFooters
     *
     * Returns a list of header/footers from the document.
     *
     * @param Requests\getHeaderFootersRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\HeaderFootersResponse
     */
    public function getHeaderFooters(Requests\getHeaderFootersRequest $request)
    {
        try {
            list($response) = $this->getHeaderFootersWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getHeaderFootersWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getHeaderFootersWithHttpInfo
     *
     * Returns a list of header/footers from the document.
     *
     * @param Requests\getHeaderFootersRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\HeaderFootersResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getHeaderFootersWithHttpInfo(Requests\getHeaderFootersRequest $request)
    {
        $returnType = '\Aspose\Words\Model\HeaderFootersResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\HeaderFootersResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getHeaderFootersAsync
     *
     * Returns a list of header/footers from the document.
     *
     * @param Requests\getHeaderFootersRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getHeaderFootersAsync(Requests\getHeaderFootersRequest $request) 
    {
        return $this->getHeaderFootersAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getHeaderFootersAsyncWithHttpInfo
     *
     * Returns a list of header/footers from the document.
     *
     * @param Requests\getHeaderFootersRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getHeaderFootersAsyncWithHttpInfo(Requests\getHeaderFootersRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\HeaderFootersResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getList
     *
     * This resource represents one of the lists contained in the document.
     *
     * @param Requests\getListRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\ListResponse
     */
    public function getList(Requests\getListRequest $request)
    {
        try {
            list($response) = $this->getListWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getListWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getListWithHttpInfo
     *
     * This resource represents one of the lists contained in the document.
     *
     * @param Requests\getListRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\ListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getListWithHttpInfo(Requests\getListRequest $request)
    {
        $returnType = '\Aspose\Words\Model\ListResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\ListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getListAsync
     *
     * This resource represents one of the lists contained in the document.
     *
     * @param Requests\getListRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getListAsync(Requests\getListRequest $request) 
    {
        return $this->getListAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getListAsyncWithHttpInfo
     *
     * This resource represents one of the lists contained in the document.
     *
     * @param Requests\getListRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getListAsyncWithHttpInfo(Requests\getListRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\ListResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getLists
     *
     * Returns a list of lists that are contained in the document.
     *
     * @param Requests\getListsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\ListsResponse
     */
    public function getLists(Requests\getListsRequest $request)
    {
        try {
            list($response) = $this->getListsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getListsWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getListsWithHttpInfo
     *
     * Returns a list of lists that are contained in the document.
     *
     * @param Requests\getListsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\ListsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getListsWithHttpInfo(Requests\getListsRequest $request)
    {
        $returnType = '\Aspose\Words\Model\ListsResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\ListsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getListsAsync
     *
     * Returns a list of lists that are contained in the document.
     *
     * @param Requests\getListsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getListsAsync(Requests\getListsRequest $request) 
    {
        return $this->getListsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getListsAsyncWithHttpInfo
     *
     * Returns a list of lists that are contained in the document.
     *
     * @param Requests\getListsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getListsAsyncWithHttpInfo(Requests\getListsRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\ListsResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getOfficeMathObject
     *
     * Reads OfficeMath object by index.
     *
     * @param Requests\getOfficeMathObjectRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\OfficeMathObjectResponse
     */
    public function getOfficeMathObject(Requests\getOfficeMathObjectRequest $request)
    {
        try {
            list($response) = $this->getOfficeMathObjectWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getOfficeMathObjectWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getOfficeMathObjectWithHttpInfo
     *
     * Reads OfficeMath object by index.
     *
     * @param Requests\getOfficeMathObjectRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\OfficeMathObjectResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getOfficeMathObjectWithHttpInfo(Requests\getOfficeMathObjectRequest $request)
    {
        $returnType = '\Aspose\Words\Model\OfficeMathObjectResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\OfficeMathObjectResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getOfficeMathObjectAsync
     *
     * Reads OfficeMath object by index.
     *
     * @param Requests\getOfficeMathObjectRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOfficeMathObjectAsync(Requests\getOfficeMathObjectRequest $request) 
    {
        return $this->getOfficeMathObjectAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getOfficeMathObjectAsyncWithHttpInfo
     *
     * Reads OfficeMath object by index.
     *
     * @param Requests\getOfficeMathObjectRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getOfficeMathObjectAsyncWithHttpInfo(Requests\getOfficeMathObjectRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\OfficeMathObjectResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getOfficeMathObjects
     *
     * Gets OfficeMath objects from document.
     *
     * @param Requests\getOfficeMathObjectsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\OfficeMathObjectsResponse
     */
    public function getOfficeMathObjects(Requests\getOfficeMathObjectsRequest $request)
    {
        try {
            list($response) = $this->getOfficeMathObjectsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getOfficeMathObjectsWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getOfficeMathObjectsWithHttpInfo
     *
     * Gets OfficeMath objects from document.
     *
     * @param Requests\getOfficeMathObjectsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\OfficeMathObjectsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getOfficeMathObjectsWithHttpInfo(Requests\getOfficeMathObjectsRequest $request)
    {
        $returnType = '\Aspose\Words\Model\OfficeMathObjectsResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\OfficeMathObjectsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getOfficeMathObjectsAsync
     *
     * Gets OfficeMath objects from document.
     *
     * @param Requests\getOfficeMathObjectsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOfficeMathObjectsAsync(Requests\getOfficeMathObjectsRequest $request) 
    {
        return $this->getOfficeMathObjectsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getOfficeMathObjectsAsyncWithHttpInfo
     *
     * Gets OfficeMath objects from document.
     *
     * @param Requests\getOfficeMathObjectsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getOfficeMathObjectsAsyncWithHttpInfo(Requests\getOfficeMathObjectsRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\OfficeMathObjectsResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getParagraph
     *
     * This resource represents one of the paragraphs contained in the document.
     *
     * @param Requests\getParagraphRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\ParagraphResponse
     */
    public function getParagraph(Requests\getParagraphRequest $request)
    {
        try {
            list($response) = $this->getParagraphWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getParagraphWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getParagraphWithHttpInfo
     *
     * This resource represents one of the paragraphs contained in the document.
     *
     * @param Requests\getParagraphRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\ParagraphResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getParagraphWithHttpInfo(Requests\getParagraphRequest $request)
    {
        $returnType = '\Aspose\Words\Model\ParagraphResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\ParagraphResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getParagraphAsync
     *
     * This resource represents one of the paragraphs contained in the document.
     *
     * @param Requests\getParagraphRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getParagraphAsync(Requests\getParagraphRequest $request) 
    {
        return $this->getParagraphAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getParagraphAsyncWithHttpInfo
     *
     * This resource represents one of the paragraphs contained in the document.
     *
     * @param Requests\getParagraphRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getParagraphAsyncWithHttpInfo(Requests\getParagraphRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\ParagraphResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getParagraphFormat
     *
     * Represents all the formatting for a paragraph.
     *
     * @param Requests\getParagraphFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\ParagraphFormatResponse
     */
    public function getParagraphFormat(Requests\getParagraphFormatRequest $request)
    {
        try {
            list($response) = $this->getParagraphFormatWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getParagraphFormatWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getParagraphFormatWithHttpInfo
     *
     * Represents all the formatting for a paragraph.
     *
     * @param Requests\getParagraphFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\ParagraphFormatResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getParagraphFormatWithHttpInfo(Requests\getParagraphFormatRequest $request)
    {
        $returnType = '\Aspose\Words\Model\ParagraphFormatResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\ParagraphFormatResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getParagraphFormatAsync
     *
     * Represents all the formatting for a paragraph.
     *
     * @param Requests\getParagraphFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getParagraphFormatAsync(Requests\getParagraphFormatRequest $request) 
    {
        return $this->getParagraphFormatAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getParagraphFormatAsyncWithHttpInfo
     *
     * Represents all the formatting for a paragraph.
     *
     * @param Requests\getParagraphFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getParagraphFormatAsyncWithHttpInfo(Requests\getParagraphFormatRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\ParagraphFormatResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getParagraphListFormat
     *
     * Represents list format for a paragraph.
     *
     * @param Requests\getParagraphListFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\ParagraphListFormatResponse
     */
    public function getParagraphListFormat(Requests\getParagraphListFormatRequest $request)
    {
        try {
            list($response) = $this->getParagraphListFormatWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getParagraphListFormatWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getParagraphListFormatWithHttpInfo
     *
     * Represents list format for a paragraph.
     *
     * @param Requests\getParagraphListFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\ParagraphListFormatResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getParagraphListFormatWithHttpInfo(Requests\getParagraphListFormatRequest $request)
    {
        $returnType = '\Aspose\Words\Model\ParagraphListFormatResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\ParagraphListFormatResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getParagraphListFormatAsync
     *
     * Represents list format for a paragraph.
     *
     * @param Requests\getParagraphListFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getParagraphListFormatAsync(Requests\getParagraphListFormatRequest $request) 
    {
        return $this->getParagraphListFormatAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getParagraphListFormatAsyncWithHttpInfo
     *
     * Represents list format for a paragraph.
     *
     * @param Requests\getParagraphListFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getParagraphListFormatAsyncWithHttpInfo(Requests\getParagraphListFormatRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\ParagraphListFormatResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getParagraphs
     *
     * Returns a list of paragraphs that are contained in the document.
     *
     * @param Requests\getParagraphsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\ParagraphLinkCollectionResponse
     */
    public function getParagraphs(Requests\getParagraphsRequest $request)
    {
        try {
            list($response) = $this->getParagraphsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getParagraphsWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getParagraphsWithHttpInfo
     *
     * Returns a list of paragraphs that are contained in the document.
     *
     * @param Requests\getParagraphsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\ParagraphLinkCollectionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getParagraphsWithHttpInfo(Requests\getParagraphsRequest $request)
    {
        $returnType = '\Aspose\Words\Model\ParagraphLinkCollectionResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\ParagraphLinkCollectionResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getParagraphsAsync
     *
     * Returns a list of paragraphs that are contained in the document.
     *
     * @param Requests\getParagraphsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getParagraphsAsync(Requests\getParagraphsRequest $request) 
    {
        return $this->getParagraphsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getParagraphsAsyncWithHttpInfo
     *
     * Returns a list of paragraphs that are contained in the document.
     *
     * @param Requests\getParagraphsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getParagraphsAsyncWithHttpInfo(Requests\getParagraphsRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\ParagraphLinkCollectionResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getParagraphTabStops
     *
     * Get all tab stops for the paragraph.
     *
     * @param Requests\getParagraphTabStopsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\TabStopsResponse
     */
    public function getParagraphTabStops(Requests\getParagraphTabStopsRequest $request)
    {
        try {
            list($response) = $this->getParagraphTabStopsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getParagraphTabStopsWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getParagraphTabStopsWithHttpInfo
     *
     * Get all tab stops for the paragraph.
     *
     * @param Requests\getParagraphTabStopsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\TabStopsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getParagraphTabStopsWithHttpInfo(Requests\getParagraphTabStopsRequest $request)
    {
        $returnType = '\Aspose\Words\Model\TabStopsResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\TabStopsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getParagraphTabStopsAsync
     *
     * Get all tab stops for the paragraph.
     *
     * @param Requests\getParagraphTabStopsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getParagraphTabStopsAsync(Requests\getParagraphTabStopsRequest $request) 
    {
        return $this->getParagraphTabStopsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getParagraphTabStopsAsyncWithHttpInfo
     *
     * Get all tab stops for the paragraph.
     *
     * @param Requests\getParagraphTabStopsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getParagraphTabStopsAsyncWithHttpInfo(Requests\getParagraphTabStopsRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\TabStopsResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getRangeText
     *
     * Gets the text from the range.
     *
     * @param Requests\getRangeTextRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\RangeTextResponse
     */
    public function getRangeText(Requests\getRangeTextRequest $request)
    {
        try {
            list($response) = $this->getRangeTextWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getRangeTextWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getRangeTextWithHttpInfo
     *
     * Gets the text from the range.
     *
     * @param Requests\getRangeTextRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\RangeTextResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getRangeTextWithHttpInfo(Requests\getRangeTextRequest $request)
    {
        $returnType = '\Aspose\Words\Model\RangeTextResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\RangeTextResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getRangeTextAsync
     *
     * Gets the text from the range.
     *
     * @param Requests\getRangeTextRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRangeTextAsync(Requests\getRangeTextRequest $request) 
    {
        return $this->getRangeTextAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getRangeTextAsyncWithHttpInfo
     *
     * Gets the text from the range.
     *
     * @param Requests\getRangeTextRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getRangeTextAsyncWithHttpInfo(Requests\getRangeTextRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\RangeTextResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getRun
     *
     * This resource represents run of text contained in the document.
     *
     * @param Requests\getRunRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\RunResponse
     */
    public function getRun(Requests\getRunRequest $request)
    {
        try {
            list($response) = $this->getRunWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getRunWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getRunWithHttpInfo
     *
     * This resource represents run of text contained in the document.
     *
     * @param Requests\getRunRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\RunResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getRunWithHttpInfo(Requests\getRunRequest $request)
    {
        $returnType = '\Aspose\Words\Model\RunResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\RunResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getRunAsync
     *
     * This resource represents run of text contained in the document.
     *
     * @param Requests\getRunRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRunAsync(Requests\getRunRequest $request) 
    {
        return $this->getRunAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getRunAsyncWithHttpInfo
     *
     * This resource represents run of text contained in the document.
     *
     * @param Requests\getRunRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getRunAsyncWithHttpInfo(Requests\getRunRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\RunResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getRunFont
     *
     * This resource represents font of run.
     *
     * @param Requests\getRunFontRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\FontResponse
     */
    public function getRunFont(Requests\getRunFontRequest $request)
    {
        try {
            list($response) = $this->getRunFontWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getRunFontWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getRunFontWithHttpInfo
     *
     * This resource represents font of run.
     *
     * @param Requests\getRunFontRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\FontResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getRunFontWithHttpInfo(Requests\getRunFontRequest $request)
    {
        $returnType = '\Aspose\Words\Model\FontResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\FontResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getRunFontAsync
     *
     * This resource represents font of run.
     *
     * @param Requests\getRunFontRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRunFontAsync(Requests\getRunFontRequest $request) 
    {
        return $this->getRunFontAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getRunFontAsyncWithHttpInfo
     *
     * This resource represents font of run.
     *
     * @param Requests\getRunFontRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getRunFontAsyncWithHttpInfo(Requests\getRunFontRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\FontResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getRuns
     *
     * This resource represents collection of runs in the paragraph.
     *
     * @param Requests\getRunsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\RunsResponse
     */
    public function getRuns(Requests\getRunsRequest $request)
    {
        try {
            list($response) = $this->getRunsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getRunsWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getRunsWithHttpInfo
     *
     * This resource represents collection of runs in the paragraph.
     *
     * @param Requests\getRunsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\RunsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getRunsWithHttpInfo(Requests\getRunsRequest $request)
    {
        $returnType = '\Aspose\Words\Model\RunsResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\RunsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getRunsAsync
     *
     * This resource represents collection of runs in the paragraph.
     *
     * @param Requests\getRunsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRunsAsync(Requests\getRunsRequest $request) 
    {
        return $this->getRunsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getRunsAsyncWithHttpInfo
     *
     * This resource represents collection of runs in the paragraph.
     *
     * @param Requests\getRunsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getRunsAsyncWithHttpInfo(Requests\getRunsRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\RunsResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getSection
     *
     * Gets document section by index.
     *
     * @param Requests\getSectionRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\SectionResponse
     */
    public function getSection(Requests\getSectionRequest $request)
    {
        try {
            list($response) = $this->getSectionWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getSectionWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getSectionWithHttpInfo
     *
     * Gets document section by index.
     *
     * @param Requests\getSectionRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\SectionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getSectionWithHttpInfo(Requests\getSectionRequest $request)
    {
        $returnType = '\Aspose\Words\Model\SectionResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\SectionResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getSectionAsync
     *
     * Gets document section by index.
     *
     * @param Requests\getSectionRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSectionAsync(Requests\getSectionRequest $request) 
    {
        return $this->getSectionAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getSectionAsyncWithHttpInfo
     *
     * Gets document section by index.
     *
     * @param Requests\getSectionRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getSectionAsyncWithHttpInfo(Requests\getSectionRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\SectionResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getSectionPageSetup
     *
     * Gets page setup of section.
     *
     * @param Requests\getSectionPageSetupRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\SectionPageSetupResponse
     */
    public function getSectionPageSetup(Requests\getSectionPageSetupRequest $request)
    {
        try {
            list($response) = $this->getSectionPageSetupWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getSectionPageSetupWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getSectionPageSetupWithHttpInfo
     *
     * Gets page setup of section.
     *
     * @param Requests\getSectionPageSetupRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\SectionPageSetupResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getSectionPageSetupWithHttpInfo(Requests\getSectionPageSetupRequest $request)
    {
        $returnType = '\Aspose\Words\Model\SectionPageSetupResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\SectionPageSetupResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getSectionPageSetupAsync
     *
     * Gets page setup of section.
     *
     * @param Requests\getSectionPageSetupRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSectionPageSetupAsync(Requests\getSectionPageSetupRequest $request) 
    {
        return $this->getSectionPageSetupAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getSectionPageSetupAsyncWithHttpInfo
     *
     * Gets page setup of section.
     *
     * @param Requests\getSectionPageSetupRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getSectionPageSetupAsyncWithHttpInfo(Requests\getSectionPageSetupRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\SectionPageSetupResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getSections
     *
     * Returns a list of sections that are contained in the document.
     *
     * @param Requests\getSectionsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\SectionLinkCollectionResponse
     */
    public function getSections(Requests\getSectionsRequest $request)
    {
        try {
            list($response) = $this->getSectionsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getSectionsWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getSectionsWithHttpInfo
     *
     * Returns a list of sections that are contained in the document.
     *
     * @param Requests\getSectionsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\SectionLinkCollectionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getSectionsWithHttpInfo(Requests\getSectionsRequest $request)
    {
        $returnType = '\Aspose\Words\Model\SectionLinkCollectionResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\SectionLinkCollectionResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getSectionsAsync
     *
     * Returns a list of sections that are contained in the document.
     *
     * @param Requests\getSectionsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSectionsAsync(Requests\getSectionsRequest $request) 
    {
        return $this->getSectionsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getSectionsAsyncWithHttpInfo
     *
     * Returns a list of sections that are contained in the document.
     *
     * @param Requests\getSectionsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getSectionsAsyncWithHttpInfo(Requests\getSectionsRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\SectionLinkCollectionResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getStyle
     *
     * This resource represents one of the styles contained in the document.
     *
     * @param Requests\getStyleRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\StyleResponse
     */
    public function getStyle(Requests\getStyleRequest $request)
    {
        try {
            list($response) = $this->getStyleWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getStyleWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getStyleWithHttpInfo
     *
     * This resource represents one of the styles contained in the document.
     *
     * @param Requests\getStyleRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\StyleResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getStyleWithHttpInfo(Requests\getStyleRequest $request)
    {
        $returnType = '\Aspose\Words\Model\StyleResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\StyleResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getStyleAsync
     *
     * This resource represents one of the styles contained in the document.
     *
     * @param Requests\getStyleRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStyleAsync(Requests\getStyleRequest $request) 
    {
        return $this->getStyleAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getStyleAsyncWithHttpInfo
     *
     * This resource represents one of the styles contained in the document.
     *
     * @param Requests\getStyleRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getStyleAsyncWithHttpInfo(Requests\getStyleRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\StyleResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getStyleFromDocumentElement
     *
     * Gets a style from the document node.
     *
     * @param Requests\getStyleFromDocumentElementRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\StyleResponse
     */
    public function getStyleFromDocumentElement(Requests\getStyleFromDocumentElementRequest $request)
    {
        try {
            list($response) = $this->getStyleFromDocumentElementWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getStyleFromDocumentElementWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getStyleFromDocumentElementWithHttpInfo
     *
     * Gets a style from the document node.
     *
     * @param Requests\getStyleFromDocumentElementRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\StyleResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getStyleFromDocumentElementWithHttpInfo(Requests\getStyleFromDocumentElementRequest $request)
    {
        $returnType = '\Aspose\Words\Model\StyleResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\StyleResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getStyleFromDocumentElementAsync
     *
     * Gets a style from the document node.
     *
     * @param Requests\getStyleFromDocumentElementRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStyleFromDocumentElementAsync(Requests\getStyleFromDocumentElementRequest $request) 
    {
        return $this->getStyleFromDocumentElementAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getStyleFromDocumentElementAsyncWithHttpInfo
     *
     * Gets a style from the document node.
     *
     * @param Requests\getStyleFromDocumentElementRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getStyleFromDocumentElementAsyncWithHttpInfo(Requests\getStyleFromDocumentElementRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\StyleResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getStyles
     *
     * Returns a list of styles contained in the document.
     *
     * @param Requests\getStylesRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\StylesResponse
     */
    public function getStyles(Requests\getStylesRequest $request)
    {
        try {
            list($response) = $this->getStylesWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getStylesWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getStylesWithHttpInfo
     *
     * Returns a list of styles contained in the document.
     *
     * @param Requests\getStylesRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\StylesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getStylesWithHttpInfo(Requests\getStylesRequest $request)
    {
        $returnType = '\Aspose\Words\Model\StylesResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\StylesResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getStylesAsync
     *
     * Returns a list of styles contained in the document.
     *
     * @param Requests\getStylesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStylesAsync(Requests\getStylesRequest $request) 
    {
        return $this->getStylesAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getStylesAsyncWithHttpInfo
     *
     * Returns a list of styles contained in the document.
     *
     * @param Requests\getStylesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getStylesAsyncWithHttpInfo(Requests\getStylesRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\StylesResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getTable
     *
     * Returns a table.
     *
     * @param Requests\getTableRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\TableResponse
     */
    public function getTable(Requests\getTableRequest $request)
    {
        try {
            list($response) = $this->getTableWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getTableWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getTableWithHttpInfo
     *
     * Returns a table.
     *
     * @param Requests\getTableRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\TableResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getTableWithHttpInfo(Requests\getTableRequest $request)
    {
        $returnType = '\Aspose\Words\Model\TableResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\TableResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getTableAsync
     *
     * Returns a table.
     *
     * @param Requests\getTableRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTableAsync(Requests\getTableRequest $request) 
    {
        return $this->getTableAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getTableAsyncWithHttpInfo
     *
     * Returns a table.
     *
     * @param Requests\getTableRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getTableAsyncWithHttpInfo(Requests\getTableRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\TableResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getTableCell
     *
     * Returns a table cell.
     *
     * @param Requests\getTableCellRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\TableCellResponse
     */
    public function getTableCell(Requests\getTableCellRequest $request)
    {
        try {
            list($response) = $this->getTableCellWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getTableCellWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getTableCellWithHttpInfo
     *
     * Returns a table cell.
     *
     * @param Requests\getTableCellRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\TableCellResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getTableCellWithHttpInfo(Requests\getTableCellRequest $request)
    {
        $returnType = '\Aspose\Words\Model\TableCellResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\TableCellResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getTableCellAsync
     *
     * Returns a table cell.
     *
     * @param Requests\getTableCellRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTableCellAsync(Requests\getTableCellRequest $request) 
    {
        return $this->getTableCellAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getTableCellAsyncWithHttpInfo
     *
     * Returns a table cell.
     *
     * @param Requests\getTableCellRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getTableCellAsyncWithHttpInfo(Requests\getTableCellRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\TableCellResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getTableCellFormat
     *
     * Returns a table cell format.
     *
     * @param Requests\getTableCellFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\TableCellFormatResponse
     */
    public function getTableCellFormat(Requests\getTableCellFormatRequest $request)
    {
        try {
            list($response) = $this->getTableCellFormatWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getTableCellFormatWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getTableCellFormatWithHttpInfo
     *
     * Returns a table cell format.
     *
     * @param Requests\getTableCellFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\TableCellFormatResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getTableCellFormatWithHttpInfo(Requests\getTableCellFormatRequest $request)
    {
        $returnType = '\Aspose\Words\Model\TableCellFormatResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\TableCellFormatResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getTableCellFormatAsync
     *
     * Returns a table cell format.
     *
     * @param Requests\getTableCellFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTableCellFormatAsync(Requests\getTableCellFormatRequest $request) 
    {
        return $this->getTableCellFormatAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getTableCellFormatAsyncWithHttpInfo
     *
     * Returns a table cell format.
     *
     * @param Requests\getTableCellFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getTableCellFormatAsyncWithHttpInfo(Requests\getTableCellFormatRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\TableCellFormatResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getTableProperties
     *
     * Returns a table properties.
     *
     * @param Requests\getTablePropertiesRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\TablePropertiesResponse
     */
    public function getTableProperties(Requests\getTablePropertiesRequest $request)
    {
        try {
            list($response) = $this->getTablePropertiesWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getTablePropertiesWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getTablePropertiesWithHttpInfo
     *
     * Returns a table properties.
     *
     * @param Requests\getTablePropertiesRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\TablePropertiesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getTablePropertiesWithHttpInfo(Requests\getTablePropertiesRequest $request)
    {
        $returnType = '\Aspose\Words\Model\TablePropertiesResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\TablePropertiesResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getTablePropertiesAsync
     *
     * Returns a table properties.
     *
     * @param Requests\getTablePropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTablePropertiesAsync(Requests\getTablePropertiesRequest $request) 
    {
        return $this->getTablePropertiesAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getTablePropertiesAsyncWithHttpInfo
     *
     * Returns a table properties.
     *
     * @param Requests\getTablePropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getTablePropertiesAsyncWithHttpInfo(Requests\getTablePropertiesRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\TablePropertiesResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getTableRow
     *
     * Returns a table row.
     *
     * @param Requests\getTableRowRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\TableRowResponse
     */
    public function getTableRow(Requests\getTableRowRequest $request)
    {
        try {
            list($response) = $this->getTableRowWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getTableRowWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getTableRowWithHttpInfo
     *
     * Returns a table row.
     *
     * @param Requests\getTableRowRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\TableRowResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getTableRowWithHttpInfo(Requests\getTableRowRequest $request)
    {
        $returnType = '\Aspose\Words\Model\TableRowResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\TableRowResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getTableRowAsync
     *
     * Returns a table row.
     *
     * @param Requests\getTableRowRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTableRowAsync(Requests\getTableRowRequest $request) 
    {
        return $this->getTableRowAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getTableRowAsyncWithHttpInfo
     *
     * Returns a table row.
     *
     * @param Requests\getTableRowRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getTableRowAsyncWithHttpInfo(Requests\getTableRowRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\TableRowResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getTableRowFormat
     *
     * Returns a table row format.
     *
     * @param Requests\getTableRowFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\TableRowFormatResponse
     */
    public function getTableRowFormat(Requests\getTableRowFormatRequest $request)
    {
        try {
            list($response) = $this->getTableRowFormatWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getTableRowFormatWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getTableRowFormatWithHttpInfo
     *
     * Returns a table row format.
     *
     * @param Requests\getTableRowFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\TableRowFormatResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getTableRowFormatWithHttpInfo(Requests\getTableRowFormatRequest $request)
    {
        $returnType = '\Aspose\Words\Model\TableRowFormatResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\TableRowFormatResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getTableRowFormatAsync
     *
     * Returns a table row format.
     *
     * @param Requests\getTableRowFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTableRowFormatAsync(Requests\getTableRowFormatRequest $request) 
    {
        return $this->getTableRowFormatAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getTableRowFormatAsyncWithHttpInfo
     *
     * Returns a table row format.
     *
     * @param Requests\getTableRowFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getTableRowFormatAsyncWithHttpInfo(Requests\getTableRowFormatRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\TableRowFormatResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation getTables
     *
     * Returns a list of tables that are contained in the document.
     *
     * @param Requests\getTablesRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\TableLinkCollectionResponse
     */
    public function getTables(Requests\getTablesRequest $request)
    {
        try {
            list($response) = $this->getTablesWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->getTablesWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation getTablesWithHttpInfo
     *
     * Returns a list of tables that are contained in the document.
     *
     * @param Requests\getTablesRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\TableLinkCollectionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function getTablesWithHttpInfo(Requests\getTablesRequest $request)
    {
        $returnType = '\Aspose\Words\Model\TableLinkCollectionResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\TableLinkCollectionResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getTablesAsync
     *
     * Returns a list of tables that are contained in the document.
     *
     * @param Requests\getTablesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTablesAsync(Requests\getTablesRequest $request) 
    {
        return $this->getTablesAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getTablesAsyncWithHttpInfo
     *
     * Returns a list of tables that are contained in the document.
     *
     * @param Requests\getTablesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function getTablesAsyncWithHttpInfo(Requests\getTablesRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\TableLinkCollectionResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation insertComment
     *
     * Adds comment to document, returns inserted comment data.
     *
     * @param Requests\insertCommentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\CommentResponse
     */
    public function insertComment(Requests\insertCommentRequest $request)
    {
        try {
            list($response) = $this->insertCommentWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->insertCommentWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation insertCommentWithHttpInfo
     *
     * Adds comment to document, returns inserted comment data.
     *
     * @param Requests\insertCommentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\CommentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function insertCommentWithHttpInfo(Requests\insertCommentRequest $request)
    {
        $returnType = '\Aspose\Words\Model\CommentResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\CommentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation insertCommentAsync
     *
     * Adds comment to document, returns inserted comment data.
     *
     * @param Requests\insertCommentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function insertCommentAsync(Requests\insertCommentRequest $request) 
    {
        return $this->insertCommentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation insertCommentAsyncWithHttpInfo
     *
     * Adds comment to document, returns inserted comment data.
     *
     * @param Requests\insertCommentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function insertCommentAsyncWithHttpInfo(Requests\insertCommentRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\CommentResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation insertDrawingObject
     *
     * Adds drawing object to document, returns added  drawing object's data.
     *
     * @param Requests\insertDrawingObjectRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\DrawingObjectResponse
     */
    public function insertDrawingObject(Requests\insertDrawingObjectRequest $request)
    {
        try {
            list($response) = $this->insertDrawingObjectWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->insertDrawingObjectWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation insertDrawingObjectWithHttpInfo
     *
     * Adds drawing object to document, returns added  drawing object's data.
     *
     * @param Requests\insertDrawingObjectRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\DrawingObjectResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function insertDrawingObjectWithHttpInfo(Requests\insertDrawingObjectRequest $request)
    {
        $returnType = '\Aspose\Words\Model\DrawingObjectResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\DrawingObjectResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation insertDrawingObjectAsync
     *
     * Adds drawing object to document, returns added  drawing object's data.
     *
     * @param Requests\insertDrawingObjectRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function insertDrawingObjectAsync(Requests\insertDrawingObjectRequest $request) 
    {
        return $this->insertDrawingObjectAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation insertDrawingObjectAsyncWithHttpInfo
     *
     * Adds drawing object to document, returns added  drawing object's data.
     *
     * @param Requests\insertDrawingObjectRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function insertDrawingObjectAsyncWithHttpInfo(Requests\insertDrawingObjectRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\DrawingObjectResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation insertField
     *
     * Adds field to document, returns inserted field's data.
     *
     * @param Requests\insertFieldRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\FieldResponse
     */
    public function insertField(Requests\insertFieldRequest $request)
    {
        try {
            list($response) = $this->insertFieldWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->insertFieldWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation insertFieldWithHttpInfo
     *
     * Adds field to document, returns inserted field's data.
     *
     * @param Requests\insertFieldRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\FieldResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function insertFieldWithHttpInfo(Requests\insertFieldRequest $request)
    {
        $returnType = '\Aspose\Words\Model\FieldResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\FieldResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation insertFieldAsync
     *
     * Adds field to document, returns inserted field's data.
     *
     * @param Requests\insertFieldRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function insertFieldAsync(Requests\insertFieldRequest $request) 
    {
        return $this->insertFieldAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation insertFieldAsyncWithHttpInfo
     *
     * Adds field to document, returns inserted field's data.
     *
     * @param Requests\insertFieldRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function insertFieldAsyncWithHttpInfo(Requests\insertFieldRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\FieldResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation insertFootnote
     *
     * Adds footnote to document, returns added footnote's data.
     *
     * @param Requests\insertFootnoteRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\FootnoteResponse
     */
    public function insertFootnote(Requests\insertFootnoteRequest $request)
    {
        try {
            list($response) = $this->insertFootnoteWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->insertFootnoteWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation insertFootnoteWithHttpInfo
     *
     * Adds footnote to document, returns added footnote's data.
     *
     * @param Requests\insertFootnoteRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\FootnoteResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function insertFootnoteWithHttpInfo(Requests\insertFootnoteRequest $request)
    {
        $returnType = '\Aspose\Words\Model\FootnoteResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\FootnoteResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation insertFootnoteAsync
     *
     * Adds footnote to document, returns added footnote's data.
     *
     * @param Requests\insertFootnoteRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function insertFootnoteAsync(Requests\insertFootnoteRequest $request) 
    {
        return $this->insertFootnoteAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation insertFootnoteAsyncWithHttpInfo
     *
     * Adds footnote to document, returns added footnote's data.
     *
     * @param Requests\insertFootnoteRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function insertFootnoteAsyncWithHttpInfo(Requests\insertFootnoteRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\FootnoteResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation insertFormField
     *
     * Adds form field to paragraph, returns added form field's data.
     *
     * @param Requests\insertFormFieldRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\FormFieldResponse
     */
    public function insertFormField(Requests\insertFormFieldRequest $request)
    {
        try {
            list($response) = $this->insertFormFieldWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->insertFormFieldWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation insertFormFieldWithHttpInfo
     *
     * Adds form field to paragraph, returns added form field's data.
     *
     * @param Requests\insertFormFieldRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\FormFieldResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function insertFormFieldWithHttpInfo(Requests\insertFormFieldRequest $request)
    {
        $returnType = '\Aspose\Words\Model\FormFieldResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\FormFieldResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation insertFormFieldAsync
     *
     * Adds form field to paragraph, returns added form field's data.
     *
     * @param Requests\insertFormFieldRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function insertFormFieldAsync(Requests\insertFormFieldRequest $request) 
    {
        return $this->insertFormFieldAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation insertFormFieldAsyncWithHttpInfo
     *
     * Adds form field to paragraph, returns added form field's data.
     *
     * @param Requests\insertFormFieldRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function insertFormFieldAsyncWithHttpInfo(Requests\insertFormFieldRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\FormFieldResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation insertHeaderFooter
     *
     * Inserts to document header or footer.
     *
     * @param Requests\insertHeaderFooterRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\HeaderFooterResponse
     */
    public function insertHeaderFooter(Requests\insertHeaderFooterRequest $request)
    {
        try {
            list($response) = $this->insertHeaderFooterWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->insertHeaderFooterWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation insertHeaderFooterWithHttpInfo
     *
     * Inserts to document header or footer.
     *
     * @param Requests\insertHeaderFooterRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\HeaderFooterResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function insertHeaderFooterWithHttpInfo(Requests\insertHeaderFooterRequest $request)
    {
        $returnType = '\Aspose\Words\Model\HeaderFooterResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\HeaderFooterResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation insertHeaderFooterAsync
     *
     * Inserts to document header or footer.
     *
     * @param Requests\insertHeaderFooterRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function insertHeaderFooterAsync(Requests\insertHeaderFooterRequest $request) 
    {
        return $this->insertHeaderFooterAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation insertHeaderFooterAsyncWithHttpInfo
     *
     * Inserts to document header or footer.
     *
     * @param Requests\insertHeaderFooterRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function insertHeaderFooterAsyncWithHttpInfo(Requests\insertHeaderFooterRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\HeaderFooterResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation insertList
     *
     * Adds list to document, returns added list's data.
     *
     * @param Requests\insertListRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\ListResponse
     */
    public function insertList(Requests\insertListRequest $request)
    {
        try {
            list($response) = $this->insertListWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->insertListWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation insertListWithHttpInfo
     *
     * Adds list to document, returns added list's data.
     *
     * @param Requests\insertListRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\ListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function insertListWithHttpInfo(Requests\insertListRequest $request)
    {
        $returnType = '\Aspose\Words\Model\ListResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\ListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation insertListAsync
     *
     * Adds list to document, returns added list's data.
     *
     * @param Requests\insertListRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function insertListAsync(Requests\insertListRequest $request) 
    {
        return $this->insertListAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation insertListAsyncWithHttpInfo
     *
     * Adds list to document, returns added list's data.
     *
     * @param Requests\insertListRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function insertListAsyncWithHttpInfo(Requests\insertListRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\ListResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation insertOrUpdateParagraphTabStop
     *
     * Insert or resplace tab stop if a tab stop with the position exists.
     *
     * @param Requests\insertOrUpdateParagraphTabStopRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\TabStopsResponse
     */
    public function insertOrUpdateParagraphTabStop(Requests\insertOrUpdateParagraphTabStopRequest $request)
    {
        try {
            list($response) = $this->insertOrUpdateParagraphTabStopWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->insertOrUpdateParagraphTabStopWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation insertOrUpdateParagraphTabStopWithHttpInfo
     *
     * Insert or resplace tab stop if a tab stop with the position exists.
     *
     * @param Requests\insertOrUpdateParagraphTabStopRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\TabStopsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function insertOrUpdateParagraphTabStopWithHttpInfo(Requests\insertOrUpdateParagraphTabStopRequest $request)
    {
        $returnType = '\Aspose\Words\Model\TabStopsResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\TabStopsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation insertOrUpdateParagraphTabStopAsync
     *
     * Insert or resplace tab stop if a tab stop with the position exists.
     *
     * @param Requests\insertOrUpdateParagraphTabStopRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function insertOrUpdateParagraphTabStopAsync(Requests\insertOrUpdateParagraphTabStopRequest $request) 
    {
        return $this->insertOrUpdateParagraphTabStopAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation insertOrUpdateParagraphTabStopAsyncWithHttpInfo
     *
     * Insert or resplace tab stop if a tab stop with the position exists.
     *
     * @param Requests\insertOrUpdateParagraphTabStopRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function insertOrUpdateParagraphTabStopAsyncWithHttpInfo(Requests\insertOrUpdateParagraphTabStopRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\TabStopsResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation insertPageNumbers
     *
     * Inserts document page numbers.
     *
     * @param Requests\insertPageNumbersRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\DocumentResponse
     */
    public function insertPageNumbers(Requests\insertPageNumbersRequest $request)
    {
        try {
            list($response) = $this->insertPageNumbersWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->insertPageNumbersWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation insertPageNumbersWithHttpInfo
     *
     * Inserts document page numbers.
     *
     * @param Requests\insertPageNumbersRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\DocumentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function insertPageNumbersWithHttpInfo(Requests\insertPageNumbersRequest $request)
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\DocumentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation insertPageNumbersAsync
     *
     * Inserts document page numbers.
     *
     * @param Requests\insertPageNumbersRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function insertPageNumbersAsync(Requests\insertPageNumbersRequest $request) 
    {
        return $this->insertPageNumbersAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation insertPageNumbersAsyncWithHttpInfo
     *
     * Inserts document page numbers.
     *
     * @param Requests\insertPageNumbersRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function insertPageNumbersAsyncWithHttpInfo(Requests\insertPageNumbersRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation insertParagraph
     *
     * Adds paragraph to document, returns added paragraph's data.
     *
     * @param Requests\insertParagraphRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\ParagraphResponse
     */
    public function insertParagraph(Requests\insertParagraphRequest $request)
    {
        try {
            list($response) = $this->insertParagraphWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->insertParagraphWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation insertParagraphWithHttpInfo
     *
     * Adds paragraph to document, returns added paragraph's data.
     *
     * @param Requests\insertParagraphRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\ParagraphResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function insertParagraphWithHttpInfo(Requests\insertParagraphRequest $request)
    {
        $returnType = '\Aspose\Words\Model\ParagraphResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\ParagraphResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation insertParagraphAsync
     *
     * Adds paragraph to document, returns added paragraph's data.
     *
     * @param Requests\insertParagraphRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function insertParagraphAsync(Requests\insertParagraphRequest $request) 
    {
        return $this->insertParagraphAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation insertParagraphAsyncWithHttpInfo
     *
     * Adds paragraph to document, returns added paragraph's data.
     *
     * @param Requests\insertParagraphRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function insertParagraphAsyncWithHttpInfo(Requests\insertParagraphRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\ParagraphResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation insertRun
     *
     * Adds run to document, returns added paragraph's data.
     *
     * @param Requests\insertRunRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\RunResponse
     */
    public function insertRun(Requests\insertRunRequest $request)
    {
        try {
            list($response) = $this->insertRunWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->insertRunWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation insertRunWithHttpInfo
     *
     * Adds run to document, returns added paragraph's data.
     *
     * @param Requests\insertRunRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\RunResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function insertRunWithHttpInfo(Requests\insertRunRequest $request)
    {
        $returnType = '\Aspose\Words\Model\RunResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\RunResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation insertRunAsync
     *
     * Adds run to document, returns added paragraph's data.
     *
     * @param Requests\insertRunRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function insertRunAsync(Requests\insertRunRequest $request) 
    {
        return $this->insertRunAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation insertRunAsyncWithHttpInfo
     *
     * Adds run to document, returns added paragraph's data.
     *
     * @param Requests\insertRunRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function insertRunAsyncWithHttpInfo(Requests\insertRunRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\RunResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation insertStyle
     *
     * Adds a style to the document, returns an added style.
     *
     * @param Requests\insertStyleRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\StyleResponse
     */
    public function insertStyle(Requests\insertStyleRequest $request)
    {
        try {
            list($response) = $this->insertStyleWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->insertStyleWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation insertStyleWithHttpInfo
     *
     * Adds a style to the document, returns an added style.
     *
     * @param Requests\insertStyleRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\StyleResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function insertStyleWithHttpInfo(Requests\insertStyleRequest $request)
    {
        $returnType = '\Aspose\Words\Model\StyleResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\StyleResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation insertStyleAsync
     *
     * Adds a style to the document, returns an added style.
     *
     * @param Requests\insertStyleRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function insertStyleAsync(Requests\insertStyleRequest $request) 
    {
        return $this->insertStyleAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation insertStyleAsyncWithHttpInfo
     *
     * Adds a style to the document, returns an added style.
     *
     * @param Requests\insertStyleRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function insertStyleAsyncWithHttpInfo(Requests\insertStyleRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\StyleResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation insertTable
     *
     * Adds table to document, returns added table's data.
     *
     * @param Requests\insertTableRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\TableResponse
     */
    public function insertTable(Requests\insertTableRequest $request)
    {
        try {
            list($response) = $this->insertTableWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->insertTableWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation insertTableWithHttpInfo
     *
     * Adds table to document, returns added table's data.
     *
     * @param Requests\insertTableRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\TableResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function insertTableWithHttpInfo(Requests\insertTableRequest $request)
    {
        $returnType = '\Aspose\Words\Model\TableResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\TableResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation insertTableAsync
     *
     * Adds table to document, returns added table's data.
     *
     * @param Requests\insertTableRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function insertTableAsync(Requests\insertTableRequest $request) 
    {
        return $this->insertTableAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation insertTableAsyncWithHttpInfo
     *
     * Adds table to document, returns added table's data.
     *
     * @param Requests\insertTableRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function insertTableAsyncWithHttpInfo(Requests\insertTableRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\TableResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation insertTableCell
     *
     * Adds table cell to table, returns added cell's data.
     *
     * @param Requests\insertTableCellRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\TableCellResponse
     */
    public function insertTableCell(Requests\insertTableCellRequest $request)
    {
        try {
            list($response) = $this->insertTableCellWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->insertTableCellWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation insertTableCellWithHttpInfo
     *
     * Adds table cell to table, returns added cell's data.
     *
     * @param Requests\insertTableCellRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\TableCellResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function insertTableCellWithHttpInfo(Requests\insertTableCellRequest $request)
    {
        $returnType = '\Aspose\Words\Model\TableCellResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\TableCellResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation insertTableCellAsync
     *
     * Adds table cell to table, returns added cell's data.
     *
     * @param Requests\insertTableCellRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function insertTableCellAsync(Requests\insertTableCellRequest $request) 
    {
        return $this->insertTableCellAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation insertTableCellAsyncWithHttpInfo
     *
     * Adds table cell to table, returns added cell's data.
     *
     * @param Requests\insertTableCellRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function insertTableCellAsyncWithHttpInfo(Requests\insertTableCellRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\TableCellResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation insertTableRow
     *
     * Adds table row to table, returns added row's data.
     *
     * @param Requests\insertTableRowRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\TableRowResponse
     */
    public function insertTableRow(Requests\insertTableRowRequest $request)
    {
        try {
            list($response) = $this->insertTableRowWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->insertTableRowWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation insertTableRowWithHttpInfo
     *
     * Adds table row to table, returns added row's data.
     *
     * @param Requests\insertTableRowRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\TableRowResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function insertTableRowWithHttpInfo(Requests\insertTableRowRequest $request)
    {
        $returnType = '\Aspose\Words\Model\TableRowResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\TableRowResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation insertTableRowAsync
     *
     * Adds table row to table, returns added row's data.
     *
     * @param Requests\insertTableRowRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function insertTableRowAsync(Requests\insertTableRowRequest $request) 
    {
        return $this->insertTableRowAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation insertTableRowAsyncWithHttpInfo
     *
     * Adds table row to table, returns added row's data.
     *
     * @param Requests\insertTableRowRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function insertTableRowAsyncWithHttpInfo(Requests\insertTableRowRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\TableRowResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation insertWatermarkImage
     *
     * Inserts document watermark image.
     *
     * @param Requests\insertWatermarkImageRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\DocumentResponse
     */
    public function insertWatermarkImage(Requests\insertWatermarkImageRequest $request)
    {
        try {
            list($response) = $this->insertWatermarkImageWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->insertWatermarkImageWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation insertWatermarkImageWithHttpInfo
     *
     * Inserts document watermark image.
     *
     * @param Requests\insertWatermarkImageRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\DocumentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function insertWatermarkImageWithHttpInfo(Requests\insertWatermarkImageRequest $request)
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\DocumentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation insertWatermarkImageAsync
     *
     * Inserts document watermark image.
     *
     * @param Requests\insertWatermarkImageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function insertWatermarkImageAsync(Requests\insertWatermarkImageRequest $request) 
    {
        return $this->insertWatermarkImageAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation insertWatermarkImageAsyncWithHttpInfo
     *
     * Inserts document watermark image.
     *
     * @param Requests\insertWatermarkImageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function insertWatermarkImageAsyncWithHttpInfo(Requests\insertWatermarkImageRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation insertWatermarkText
     *
     * Inserts document watermark text.
     *
     * @param Requests\insertWatermarkTextRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\DocumentResponse
     */
    public function insertWatermarkText(Requests\insertWatermarkTextRequest $request)
    {
        try {
            list($response) = $this->insertWatermarkTextWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->insertWatermarkTextWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation insertWatermarkTextWithHttpInfo
     *
     * Inserts document watermark text.
     *
     * @param Requests\insertWatermarkTextRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\DocumentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function insertWatermarkTextWithHttpInfo(Requests\insertWatermarkTextRequest $request)
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\DocumentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation insertWatermarkTextAsync
     *
     * Inserts document watermark text.
     *
     * @param Requests\insertWatermarkTextRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function insertWatermarkTextAsync(Requests\insertWatermarkTextRequest $request) 
    {
        return $this->insertWatermarkTextAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation insertWatermarkTextAsyncWithHttpInfo
     *
     * Inserts document watermark text.
     *
     * @param Requests\insertWatermarkTextRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function insertWatermarkTextAsyncWithHttpInfo(Requests\insertWatermarkTextRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation loadWebDocument
     *
     * Loads new document from web into the file with any supported format of data.
     *
     * @param Requests\loadWebDocumentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\SaveResponse
     */
    public function loadWebDocument(Requests\loadWebDocumentRequest $request)
    {
        try {
            list($response) = $this->loadWebDocumentWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->loadWebDocumentWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation loadWebDocumentWithHttpInfo
     *
     * Loads new document from web into the file with any supported format of data.
     *
     * @param Requests\loadWebDocumentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\SaveResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function loadWebDocumentWithHttpInfo(Requests\loadWebDocumentRequest $request)
    {
        $returnType = '\Aspose\Words\Model\SaveResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\SaveResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation loadWebDocumentAsync
     *
     * Loads new document from web into the file with any supported format of data.
     *
     * @param Requests\loadWebDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function loadWebDocumentAsync(Requests\loadWebDocumentRequest $request) 
    {
        return $this->loadWebDocumentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation loadWebDocumentAsyncWithHttpInfo
     *
     * Loads new document from web into the file with any supported format of data.
     *
     * @param Requests\loadWebDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function loadWebDocumentAsyncWithHttpInfo(Requests\loadWebDocumentRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\SaveResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation moveFile
     *
     * Move file.
     *
     * @param Requests\moveFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function moveFile(Requests\moveFileRequest $request)
    {
        try {
    $this->moveFileWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->moveFileWithHttpInfo($request);
        } 
    }

    /*
     * Operation moveFileWithHttpInfo
     *
     * Move file.
     *
     * @param Requests\moveFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function moveFileWithHttpInfo(Requests\moveFileRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation moveFileAsync
     *
     * Move file.
     *
     * @param Requests\moveFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function moveFileAsync(Requests\moveFileRequest $request) 
    {
        return $this->moveFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation moveFileAsyncWithHttpInfo
     *
     * Move file.
     *
     * @param Requests\moveFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function moveFileAsyncWithHttpInfo(Requests\moveFileRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation moveFolder
     *
     * Move folder.
     *
     * @param Requests\moveFolderRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function moveFolder(Requests\moveFolderRequest $request)
    {
        try {
    $this->moveFolderWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->moveFolderWithHttpInfo($request);
        } 
    }

    /*
     * Operation moveFolderWithHttpInfo
     *
     * Move folder.
     *
     * @param Requests\moveFolderRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function moveFolderWithHttpInfo(Requests\moveFolderRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation moveFolderAsync
     *
     * Move folder.
     *
     * @param Requests\moveFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function moveFolderAsync(Requests\moveFolderRequest $request) 
    {
        return $this->moveFolderAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation moveFolderAsyncWithHttpInfo
     *
     * Move folder.
     *
     * @param Requests\moveFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function moveFolderAsyncWithHttpInfo(Requests\moveFolderRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation optimizeDocument
     *
     * Allows to optimize the document contents as well as default Aspose.Words behavior to a particular versions of MS Word.
     *
     * @param Requests\optimizeDocumentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function optimizeDocument(Requests\optimizeDocumentRequest $request)
    {
        try {
    $this->optimizeDocumentWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->optimizeDocumentWithHttpInfo($request);
        } 
    }

    /*
     * Operation optimizeDocumentWithHttpInfo
     *
     * Allows to optimize the document contents as well as default Aspose.Words behavior to a particular versions of MS Word.
     *
     * @param Requests\optimizeDocumentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function optimizeDocumentWithHttpInfo(Requests\optimizeDocumentRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation optimizeDocumentAsync
     *
     * Allows to optimize the document contents as well as default Aspose.Words behavior to a particular versions of MS Word.
     *
     * @param Requests\optimizeDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function optimizeDocumentAsync(Requests\optimizeDocumentRequest $request) 
    {
        return $this->optimizeDocumentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation optimizeDocumentAsyncWithHttpInfo
     *
     * Allows to optimize the document contents as well as default Aspose.Words behavior to a particular versions of MS Word.
     *
     * @param Requests\optimizeDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function optimizeDocumentAsyncWithHttpInfo(Requests\optimizeDocumentRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation protectDocument
     *
     * Protects document.
     *
     * @param Requests\protectDocumentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\ProtectionDataResponse
     */
    public function protectDocument(Requests\protectDocumentRequest $request)
    {
        try {
            list($response) = $this->protectDocumentWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->protectDocumentWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation protectDocumentWithHttpInfo
     *
     * Protects document.
     *
     * @param Requests\protectDocumentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\ProtectionDataResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function protectDocumentWithHttpInfo(Requests\protectDocumentRequest $request)
    {
        $returnType = '\Aspose\Words\Model\ProtectionDataResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\ProtectionDataResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation protectDocumentAsync
     *
     * Protects document.
     *
     * @param Requests\protectDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function protectDocumentAsync(Requests\protectDocumentRequest $request) 
    {
        return $this->protectDocumentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation protectDocumentAsyncWithHttpInfo
     *
     * Protects document.
     *
     * @param Requests\protectDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function protectDocumentAsyncWithHttpInfo(Requests\protectDocumentRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\ProtectionDataResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation rejectAllRevisions
     *
     * Rejects all revisions in document.
     *
     * @param Requests\rejectAllRevisionsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\RevisionsModificationResponse
     */
    public function rejectAllRevisions(Requests\rejectAllRevisionsRequest $request)
    {
        try {
            list($response) = $this->rejectAllRevisionsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->rejectAllRevisionsWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation rejectAllRevisionsWithHttpInfo
     *
     * Rejects all revisions in document.
     *
     * @param Requests\rejectAllRevisionsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\RevisionsModificationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function rejectAllRevisionsWithHttpInfo(Requests\rejectAllRevisionsRequest $request)
    {
        $returnType = '\Aspose\Words\Model\RevisionsModificationResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\RevisionsModificationResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation rejectAllRevisionsAsync
     *
     * Rejects all revisions in document.
     *
     * @param Requests\rejectAllRevisionsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rejectAllRevisionsAsync(Requests\rejectAllRevisionsRequest $request) 
    {
        return $this->rejectAllRevisionsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation rejectAllRevisionsAsyncWithHttpInfo
     *
     * Rejects all revisions in document.
     *
     * @param Requests\rejectAllRevisionsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function rejectAllRevisionsAsyncWithHttpInfo(Requests\rejectAllRevisionsRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\RevisionsModificationResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation removeRange
     *
     * Removes the range from the document.
     *
     * @param Requests\removeRangeRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\DocumentResponse
     */
    public function removeRange(Requests\removeRangeRequest $request)
    {
        try {
            list($response) = $this->removeRangeWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->removeRangeWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation removeRangeWithHttpInfo
     *
     * Removes the range from the document.
     *
     * @param Requests\removeRangeRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\DocumentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function removeRangeWithHttpInfo(Requests\removeRangeRequest $request)
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\DocumentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation removeRangeAsync
     *
     * Removes the range from the document.
     *
     * @param Requests\removeRangeRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeRangeAsync(Requests\removeRangeRequest $request) 
    {
        return $this->removeRangeAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation removeRangeAsyncWithHttpInfo
     *
     * Removes the range from the document.
     *
     * @param Requests\removeRangeRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function removeRangeAsyncWithHttpInfo(Requests\removeRangeRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation renderDrawingObject
     *
     * Renders drawing object to specified format.
     *
     * @param Requests\renderDrawingObjectRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function renderDrawingObject(Requests\renderDrawingObjectRequest $request)
    {
        try {
            list($response) = $this->renderDrawingObjectWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->renderDrawingObjectWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation renderDrawingObjectWithHttpInfo
     *
     * Renders drawing object to specified format.
     *
     * @param Requests\renderDrawingObjectRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    private function renderDrawingObjectWithHttpInfo(Requests\renderDrawingObjectRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation renderDrawingObjectAsync
     *
     * Renders drawing object to specified format.
     *
     * @param Requests\renderDrawingObjectRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function renderDrawingObjectAsync(Requests\renderDrawingObjectRequest $request) 
    {
        return $this->renderDrawingObjectAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation renderDrawingObjectAsyncWithHttpInfo
     *
     * Renders drawing object to specified format.
     *
     * @param Requests\renderDrawingObjectRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function renderDrawingObjectAsyncWithHttpInfo(Requests\renderDrawingObjectRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation renderMathObject
     *
     * Renders math object to specified format.
     *
     * @param Requests\renderMathObjectRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function renderMathObject(Requests\renderMathObjectRequest $request)
    {
        try {
            list($response) = $this->renderMathObjectWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->renderMathObjectWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation renderMathObjectWithHttpInfo
     *
     * Renders math object to specified format.
     *
     * @param Requests\renderMathObjectRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    private function renderMathObjectWithHttpInfo(Requests\renderMathObjectRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation renderMathObjectAsync
     *
     * Renders math object to specified format.
     *
     * @param Requests\renderMathObjectRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function renderMathObjectAsync(Requests\renderMathObjectRequest $request) 
    {
        return $this->renderMathObjectAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation renderMathObjectAsyncWithHttpInfo
     *
     * Renders math object to specified format.
     *
     * @param Requests\renderMathObjectRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function renderMathObjectAsyncWithHttpInfo(Requests\renderMathObjectRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation renderPage
     *
     * Renders page to specified format.
     *
     * @param Requests\renderPageRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function renderPage(Requests\renderPageRequest $request)
    {
        try {
            list($response) = $this->renderPageWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->renderPageWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation renderPageWithHttpInfo
     *
     * Renders page to specified format.
     *
     * @param Requests\renderPageRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    private function renderPageWithHttpInfo(Requests\renderPageRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation renderPageAsync
     *
     * Renders page to specified format.
     *
     * @param Requests\renderPageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function renderPageAsync(Requests\renderPageRequest $request) 
    {
        return $this->renderPageAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation renderPageAsyncWithHttpInfo
     *
     * Renders page to specified format.
     *
     * @param Requests\renderPageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function renderPageAsyncWithHttpInfo(Requests\renderPageRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation renderParagraph
     *
     * Renders paragraph to specified format.
     *
     * @param Requests\renderParagraphRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function renderParagraph(Requests\renderParagraphRequest $request)
    {
        try {
            list($response) = $this->renderParagraphWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->renderParagraphWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation renderParagraphWithHttpInfo
     *
     * Renders paragraph to specified format.
     *
     * @param Requests\renderParagraphRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    private function renderParagraphWithHttpInfo(Requests\renderParagraphRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation renderParagraphAsync
     *
     * Renders paragraph to specified format.
     *
     * @param Requests\renderParagraphRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function renderParagraphAsync(Requests\renderParagraphRequest $request) 
    {
        return $this->renderParagraphAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation renderParagraphAsyncWithHttpInfo
     *
     * Renders paragraph to specified format.
     *
     * @param Requests\renderParagraphRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function renderParagraphAsyncWithHttpInfo(Requests\renderParagraphRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation renderTable
     *
     * Renders table to specified format.
     *
     * @param Requests\renderTableRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function renderTable(Requests\renderTableRequest $request)
    {
        try {
            list($response) = $this->renderTableWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->renderTableWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation renderTableWithHttpInfo
     *
     * Renders table to specified format.
     *
     * @param Requests\renderTableRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    private function renderTableWithHttpInfo(Requests\renderTableRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation renderTableAsync
     *
     * Renders table to specified format.
     *
     * @param Requests\renderTableRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function renderTableAsync(Requests\renderTableRequest $request) 
    {
        return $this->renderTableAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation renderTableAsyncWithHttpInfo
     *
     * Renders table to specified format.
     *
     * @param Requests\renderTableRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function renderTableAsyncWithHttpInfo(Requests\renderTableRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation replaceText
     *
     * Replaces document text.
     *
     * @param Requests\replaceTextRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\ReplaceTextResponse
     */
    public function replaceText(Requests\replaceTextRequest $request)
    {
        try {
            list($response) = $this->replaceTextWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->replaceTextWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation replaceTextWithHttpInfo
     *
     * Replaces document text.
     *
     * @param Requests\replaceTextRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\ReplaceTextResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function replaceTextWithHttpInfo(Requests\replaceTextRequest $request)
    {
        $returnType = '\Aspose\Words\Model\ReplaceTextResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\ReplaceTextResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation replaceTextAsync
     *
     * Replaces document text.
     *
     * @param Requests\replaceTextRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function replaceTextAsync(Requests\replaceTextRequest $request) 
    {
        return $this->replaceTextAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation replaceTextAsyncWithHttpInfo
     *
     * Replaces document text.
     *
     * @param Requests\replaceTextRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function replaceTextAsyncWithHttpInfo(Requests\replaceTextRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\ReplaceTextResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation replaceWithText
     *
     * Replaces the content in the range.
     *
     * @param Requests\replaceWithTextRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\DocumentResponse
     */
    public function replaceWithText(Requests\replaceWithTextRequest $request)
    {
        try {
            list($response) = $this->replaceWithTextWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->replaceWithTextWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation replaceWithTextWithHttpInfo
     *
     * Replaces the content in the range.
     *
     * @param Requests\replaceWithTextRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\DocumentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function replaceWithTextWithHttpInfo(Requests\replaceWithTextRequest $request)
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\DocumentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation replaceWithTextAsync
     *
     * Replaces the content in the range.
     *
     * @param Requests\replaceWithTextRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function replaceWithTextAsync(Requests\replaceWithTextRequest $request) 
    {
        return $this->replaceWithTextAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation replaceWithTextAsyncWithHttpInfo
     *
     * Replaces the content in the range.
     *
     * @param Requests\replaceWithTextRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function replaceWithTextAsyncWithHttpInfo(Requests\replaceWithTextRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation resetCache
     *
     * Resets font's cache.
     *
     * @param Requests\resetCacheRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function resetCache(Requests\resetCacheRequest $request)
    {
        try {
    $this->resetCacheWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
    $this->resetCacheWithHttpInfo($request);
        } 
    }

    /*
     * Operation resetCacheWithHttpInfo
     *
     * Resets font's cache.
     *
     * @param Requests\resetCacheRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    private function resetCacheWithHttpInfo(Requests\resetCacheRequest $request)
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            throw $e;
        }
    }

    /*
     * Operation resetCacheAsync
     *
     * Resets font's cache.
     *
     * @param Requests\resetCacheRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function resetCacheAsync(Requests\resetCacheRequest $request) 
    {
        return $this->resetCacheAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation resetCacheAsyncWithHttpInfo
     *
     * Resets font's cache.
     *
     * @param Requests\resetCacheRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function resetCacheAsyncWithHttpInfo(Requests\resetCacheRequest $request) 
    {
        $returnType = 'null';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation saveAs
     *
     * Converts document to destination format with detailed settings and saves result to storage.
     *
     * @param Requests\saveAsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\SaveResponse
     */
    public function saveAs(Requests\saveAsRequest $request)
    {
        try {
            list($response) = $this->saveAsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->saveAsWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation saveAsWithHttpInfo
     *
     * Converts document to destination format with detailed settings and saves result to storage.
     *
     * @param Requests\saveAsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\SaveResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function saveAsWithHttpInfo(Requests\saveAsRequest $request)
    {
        $returnType = '\Aspose\Words\Model\SaveResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\SaveResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation saveAsAsync
     *
     * Converts document to destination format with detailed settings and saves result to storage.
     *
     * @param Requests\saveAsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function saveAsAsync(Requests\saveAsRequest $request) 
    {
        return $this->saveAsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation saveAsAsyncWithHttpInfo
     *
     * Converts document to destination format with detailed settings and saves result to storage.
     *
     * @param Requests\saveAsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function saveAsAsyncWithHttpInfo(Requests\saveAsRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\SaveResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation saveAsRange
     *
     * Saves the selected range as a new document.
     *
     * @param Requests\saveAsRangeRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\DocumentResponse
     */
    public function saveAsRange(Requests\saveAsRangeRequest $request)
    {
        try {
            list($response) = $this->saveAsRangeWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->saveAsRangeWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation saveAsRangeWithHttpInfo
     *
     * Saves the selected range as a new document.
     *
     * @param Requests\saveAsRangeRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\DocumentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function saveAsRangeWithHttpInfo(Requests\saveAsRangeRequest $request)
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\DocumentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation saveAsRangeAsync
     *
     * Saves the selected range as a new document.
     *
     * @param Requests\saveAsRangeRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function saveAsRangeAsync(Requests\saveAsRangeRequest $request) 
    {
        return $this->saveAsRangeAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation saveAsRangeAsyncWithHttpInfo
     *
     * Saves the selected range as a new document.
     *
     * @param Requests\saveAsRangeRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function saveAsRangeAsyncWithHttpInfo(Requests\saveAsRangeRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation saveAsTiff
     *
     * Converts document to tiff with detailed settings and saves result to storage.
     *
     * @param Requests\saveAsTiffRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\SaveResponse
     */
    public function saveAsTiff(Requests\saveAsTiffRequest $request)
    {
        try {
            list($response) = $this->saveAsTiffWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->saveAsTiffWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation saveAsTiffWithHttpInfo
     *
     * Converts document to tiff with detailed settings and saves result to storage.
     *
     * @param Requests\saveAsTiffRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\SaveResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function saveAsTiffWithHttpInfo(Requests\saveAsTiffRequest $request)
    {
        $returnType = '\Aspose\Words\Model\SaveResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\SaveResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation saveAsTiffAsync
     *
     * Converts document to tiff with detailed settings and saves result to storage.
     *
     * @param Requests\saveAsTiffRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function saveAsTiffAsync(Requests\saveAsTiffRequest $request) 
    {
        return $this->saveAsTiffAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation saveAsTiffAsyncWithHttpInfo
     *
     * Converts document to tiff with detailed settings and saves result to storage.
     *
     * @param Requests\saveAsTiffRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function saveAsTiffAsyncWithHttpInfo(Requests\saveAsTiffRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\SaveResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation search
     *
     * Searches text in document.
     *
     * @param Requests\searchRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\SearchResponse
     */
    public function search(Requests\searchRequest $request)
    {
        try {
            list($response) = $this->searchWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->searchWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation searchWithHttpInfo
     *
     * Searches text in document.
     *
     * @param Requests\searchRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\SearchResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function searchWithHttpInfo(Requests\searchRequest $request)
    {
        $returnType = '\Aspose\Words\Model\SearchResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\SearchResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation searchAsync
     *
     * Searches text in document.
     *
     * @param Requests\searchRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAsync(Requests\searchRequest $request) 
    {
        return $this->searchAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation searchAsyncWithHttpInfo
     *
     * Searches text in document.
     *
     * @param Requests\searchRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function searchAsyncWithHttpInfo(Requests\searchRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\SearchResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation splitDocument
     *
     * Splits document.
     *
     * @param Requests\splitDocumentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\SplitDocumentResponse
     */
    public function splitDocument(Requests\splitDocumentRequest $request)
    {
        try {
            list($response) = $this->splitDocumentWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->splitDocumentWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation splitDocumentWithHttpInfo
     *
     * Splits document.
     *
     * @param Requests\splitDocumentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\SplitDocumentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function splitDocumentWithHttpInfo(Requests\splitDocumentRequest $request)
    {
        $returnType = '\Aspose\Words\Model\SplitDocumentResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\SplitDocumentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation splitDocumentAsync
     *
     * Splits document.
     *
     * @param Requests\splitDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function splitDocumentAsync(Requests\splitDocumentRequest $request) 
    {
        return $this->splitDocumentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation splitDocumentAsyncWithHttpInfo
     *
     * Splits document.
     *
     * @param Requests\splitDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function splitDocumentAsyncWithHttpInfo(Requests\splitDocumentRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\SplitDocumentResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation unprotectDocument
     *
     * Unprotects document.
     *
     * @param Requests\unprotectDocumentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\ProtectionDataResponse
     */
    public function unprotectDocument(Requests\unprotectDocumentRequest $request)
    {
        try {
            list($response) = $this->unprotectDocumentWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->unprotectDocumentWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation unprotectDocumentWithHttpInfo
     *
     * Unprotects document.
     *
     * @param Requests\unprotectDocumentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\ProtectionDataResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function unprotectDocumentWithHttpInfo(Requests\unprotectDocumentRequest $request)
    {
        $returnType = '\Aspose\Words\Model\ProtectionDataResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\ProtectionDataResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation unprotectDocumentAsync
     *
     * Unprotects document.
     *
     * @param Requests\unprotectDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function unprotectDocumentAsync(Requests\unprotectDocumentRequest $request) 
    {
        return $this->unprotectDocumentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation unprotectDocumentAsyncWithHttpInfo
     *
     * Unprotects document.
     *
     * @param Requests\unprotectDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function unprotectDocumentAsyncWithHttpInfo(Requests\unprotectDocumentRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\ProtectionDataResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation updateBookmark
     *
     * Updates document bookmark.
     *
     * @param Requests\updateBookmarkRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\BookmarkResponse
     */
    public function updateBookmark(Requests\updateBookmarkRequest $request)
    {
        try {
            list($response) = $this->updateBookmarkWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->updateBookmarkWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation updateBookmarkWithHttpInfo
     *
     * Updates document bookmark.
     *
     * @param Requests\updateBookmarkRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\BookmarkResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function updateBookmarkWithHttpInfo(Requests\updateBookmarkRequest $request)
    {
        $returnType = '\Aspose\Words\Model\BookmarkResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\BookmarkResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation updateBookmarkAsync
     *
     * Updates document bookmark.
     *
     * @param Requests\updateBookmarkRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateBookmarkAsync(Requests\updateBookmarkRequest $request) 
    {
        return $this->updateBookmarkAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation updateBookmarkAsyncWithHttpInfo
     *
     * Updates document bookmark.
     *
     * @param Requests\updateBookmarkRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function updateBookmarkAsyncWithHttpInfo(Requests\updateBookmarkRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\BookmarkResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation updateBorder
     *
     * 'nodePath' should refer to paragraph, cell or row.
     *
     * @param Requests\updateBorderRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\BorderResponse
     */
    public function updateBorder(Requests\updateBorderRequest $request)
    {
        try {
            list($response) = $this->updateBorderWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->updateBorderWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation updateBorderWithHttpInfo
     *
     * 'nodePath' should refer to paragraph, cell or row.
     *
     * @param Requests\updateBorderRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\BorderResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function updateBorderWithHttpInfo(Requests\updateBorderRequest $request)
    {
        $returnType = '\Aspose\Words\Model\BorderResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\BorderResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation updateBorderAsync
     *
     * 'nodePath' should refer to paragraph, cell or row.
     *
     * @param Requests\updateBorderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateBorderAsync(Requests\updateBorderRequest $request) 
    {
        return $this->updateBorderAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation updateBorderAsyncWithHttpInfo
     *
     * 'nodePath' should refer to paragraph, cell or row.
     *
     * @param Requests\updateBorderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function updateBorderAsyncWithHttpInfo(Requests\updateBorderRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\BorderResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation updateComment
     *
     * Updates the comment, returns updated comment data.
     *
     * @param Requests\updateCommentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\CommentResponse
     */
    public function updateComment(Requests\updateCommentRequest $request)
    {
        try {
            list($response) = $this->updateCommentWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->updateCommentWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation updateCommentWithHttpInfo
     *
     * Updates the comment, returns updated comment data.
     *
     * @param Requests\updateCommentRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\CommentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function updateCommentWithHttpInfo(Requests\updateCommentRequest $request)
    {
        $returnType = '\Aspose\Words\Model\CommentResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\CommentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation updateCommentAsync
     *
     * Updates the comment, returns updated comment data.
     *
     * @param Requests\updateCommentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateCommentAsync(Requests\updateCommentRequest $request) 
    {
        return $this->updateCommentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation updateCommentAsyncWithHttpInfo
     *
     * Updates the comment, returns updated comment data.
     *
     * @param Requests\updateCommentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function updateCommentAsyncWithHttpInfo(Requests\updateCommentRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\CommentResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation updateDrawingObject
     *
     * Updates drawing object, returns updated  drawing object's data.
     *
     * @param Requests\updateDrawingObjectRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\DrawingObjectResponse
     */
    public function updateDrawingObject(Requests\updateDrawingObjectRequest $request)
    {
        try {
            list($response) = $this->updateDrawingObjectWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->updateDrawingObjectWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation updateDrawingObjectWithHttpInfo
     *
     * Updates drawing object, returns updated  drawing object's data.
     *
     * @param Requests\updateDrawingObjectRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\DrawingObjectResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function updateDrawingObjectWithHttpInfo(Requests\updateDrawingObjectRequest $request)
    {
        $returnType = '\Aspose\Words\Model\DrawingObjectResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\DrawingObjectResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation updateDrawingObjectAsync
     *
     * Updates drawing object, returns updated  drawing object's data.
     *
     * @param Requests\updateDrawingObjectRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDrawingObjectAsync(Requests\updateDrawingObjectRequest $request) 
    {
        return $this->updateDrawingObjectAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation updateDrawingObjectAsyncWithHttpInfo
     *
     * Updates drawing object, returns updated  drawing object's data.
     *
     * @param Requests\updateDrawingObjectRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function updateDrawingObjectAsyncWithHttpInfo(Requests\updateDrawingObjectRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\DrawingObjectResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation updateField
     *
     * Updates field's properties, returns updated field's data.
     *
     * @param Requests\updateFieldRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\FieldResponse
     */
    public function updateField(Requests\updateFieldRequest $request)
    {
        try {
            list($response) = $this->updateFieldWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->updateFieldWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation updateFieldWithHttpInfo
     *
     * Updates field's properties, returns updated field's data.
     *
     * @param Requests\updateFieldRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\FieldResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function updateFieldWithHttpInfo(Requests\updateFieldRequest $request)
    {
        $returnType = '\Aspose\Words\Model\FieldResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\FieldResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation updateFieldAsync
     *
     * Updates field's properties, returns updated field's data.
     *
     * @param Requests\updateFieldRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateFieldAsync(Requests\updateFieldRequest $request) 
    {
        return $this->updateFieldAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation updateFieldAsyncWithHttpInfo
     *
     * Updates field's properties, returns updated field's data.
     *
     * @param Requests\updateFieldRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function updateFieldAsyncWithHttpInfo(Requests\updateFieldRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\FieldResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation updateFields
     *
     * Updates (reevaluate) fields in document.
     *
     * @param Requests\updateFieldsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\DocumentResponse
     */
    public function updateFields(Requests\updateFieldsRequest $request)
    {
        try {
            list($response) = $this->updateFieldsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->updateFieldsWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation updateFieldsWithHttpInfo
     *
     * Updates (reevaluate) fields in document.
     *
     * @param Requests\updateFieldsRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\DocumentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function updateFieldsWithHttpInfo(Requests\updateFieldsRequest $request)
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\DocumentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation updateFieldsAsync
     *
     * Updates (reevaluate) fields in document.
     *
     * @param Requests\updateFieldsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateFieldsAsync(Requests\updateFieldsRequest $request) 
    {
        return $this->updateFieldsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation updateFieldsAsyncWithHttpInfo
     *
     * Updates (reevaluate) fields in document.
     *
     * @param Requests\updateFieldsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function updateFieldsAsyncWithHttpInfo(Requests\updateFieldsRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\DocumentResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation updateFootnote
     *
     * Updates footnote's properties, returns updated run's data.
     *
     * @param Requests\updateFootnoteRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\FootnoteResponse
     */
    public function updateFootnote(Requests\updateFootnoteRequest $request)
    {
        try {
            list($response) = $this->updateFootnoteWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->updateFootnoteWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation updateFootnoteWithHttpInfo
     *
     * Updates footnote's properties, returns updated run's data.
     *
     * @param Requests\updateFootnoteRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\FootnoteResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function updateFootnoteWithHttpInfo(Requests\updateFootnoteRequest $request)
    {
        $returnType = '\Aspose\Words\Model\FootnoteResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\FootnoteResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation updateFootnoteAsync
     *
     * Updates footnote's properties, returns updated run's data.
     *
     * @param Requests\updateFootnoteRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateFootnoteAsync(Requests\updateFootnoteRequest $request) 
    {
        return $this->updateFootnoteAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation updateFootnoteAsyncWithHttpInfo
     *
     * Updates footnote's properties, returns updated run's data.
     *
     * @param Requests\updateFootnoteRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function updateFootnoteAsyncWithHttpInfo(Requests\updateFootnoteRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\FootnoteResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation updateFormField
     *
     * Updates properties of form field, returns updated form field.
     *
     * @param Requests\updateFormFieldRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\FormFieldResponse
     */
    public function updateFormField(Requests\updateFormFieldRequest $request)
    {
        try {
            list($response) = $this->updateFormFieldWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->updateFormFieldWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation updateFormFieldWithHttpInfo
     *
     * Updates properties of form field, returns updated form field.
     *
     * @param Requests\updateFormFieldRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\FormFieldResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function updateFormFieldWithHttpInfo(Requests\updateFormFieldRequest $request)
    {
        $returnType = '\Aspose\Words\Model\FormFieldResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\FormFieldResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation updateFormFieldAsync
     *
     * Updates properties of form field, returns updated form field.
     *
     * @param Requests\updateFormFieldRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateFormFieldAsync(Requests\updateFormFieldRequest $request) 
    {
        return $this->updateFormFieldAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation updateFormFieldAsyncWithHttpInfo
     *
     * Updates properties of form field, returns updated form field.
     *
     * @param Requests\updateFormFieldRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function updateFormFieldAsyncWithHttpInfo(Requests\updateFormFieldRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\FormFieldResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation updateList
     *
     * Updates list properties, returns updated list.
     *
     * @param Requests\updateListRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\ListResponse
     */
    public function updateList(Requests\updateListRequest $request)
    {
        try {
            list($response) = $this->updateListWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->updateListWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation updateListWithHttpInfo
     *
     * Updates list properties, returns updated list.
     *
     * @param Requests\updateListRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\ListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function updateListWithHttpInfo(Requests\updateListRequest $request)
    {
        $returnType = '\Aspose\Words\Model\ListResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\ListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation updateListAsync
     *
     * Updates list properties, returns updated list.
     *
     * @param Requests\updateListRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateListAsync(Requests\updateListRequest $request) 
    {
        return $this->updateListAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation updateListAsyncWithHttpInfo
     *
     * Updates list properties, returns updated list.
     *
     * @param Requests\updateListRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function updateListAsyncWithHttpInfo(Requests\updateListRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\ListResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation updateListLevel
     *
     * Updates list level in document list, returns updated list.
     *
     * @param Requests\updateListLevelRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\ListResponse
     */
    public function updateListLevel(Requests\updateListLevelRequest $request)
    {
        try {
            list($response) = $this->updateListLevelWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->updateListLevelWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation updateListLevelWithHttpInfo
     *
     * Updates list level in document list, returns updated list.
     *
     * @param Requests\updateListLevelRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\ListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function updateListLevelWithHttpInfo(Requests\updateListLevelRequest $request)
    {
        $returnType = '\Aspose\Words\Model\ListResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\ListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation updateListLevelAsync
     *
     * Updates list level in document list, returns updated list.
     *
     * @param Requests\updateListLevelRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateListLevelAsync(Requests\updateListLevelRequest $request) 
    {
        return $this->updateListLevelAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation updateListLevelAsyncWithHttpInfo
     *
     * Updates list level in document list, returns updated list.
     *
     * @param Requests\updateListLevelRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function updateListLevelAsyncWithHttpInfo(Requests\updateListLevelRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\ListResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation updateParagraphFormat
     *
     * Updates paragraph format properties, returns updated format properties.
     *
     * @param Requests\updateParagraphFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\ParagraphFormatResponse
     */
    public function updateParagraphFormat(Requests\updateParagraphFormatRequest $request)
    {
        try {
            list($response) = $this->updateParagraphFormatWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->updateParagraphFormatWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation updateParagraphFormatWithHttpInfo
     *
     * Updates paragraph format properties, returns updated format properties.
     *
     * @param Requests\updateParagraphFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\ParagraphFormatResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function updateParagraphFormatWithHttpInfo(Requests\updateParagraphFormatRequest $request)
    {
        $returnType = '\Aspose\Words\Model\ParagraphFormatResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\ParagraphFormatResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation updateParagraphFormatAsync
     *
     * Updates paragraph format properties, returns updated format properties.
     *
     * @param Requests\updateParagraphFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateParagraphFormatAsync(Requests\updateParagraphFormatRequest $request) 
    {
        return $this->updateParagraphFormatAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation updateParagraphFormatAsyncWithHttpInfo
     *
     * Updates paragraph format properties, returns updated format properties.
     *
     * @param Requests\updateParagraphFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function updateParagraphFormatAsyncWithHttpInfo(Requests\updateParagraphFormatRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\ParagraphFormatResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation updateParagraphListFormat
     *
     * Updates paragraph list format properties, returns updated list format properties.
     *
     * @param Requests\updateParagraphListFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\ParagraphListFormatResponse
     */
    public function updateParagraphListFormat(Requests\updateParagraphListFormatRequest $request)
    {
        try {
            list($response) = $this->updateParagraphListFormatWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->updateParagraphListFormatWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation updateParagraphListFormatWithHttpInfo
     *
     * Updates paragraph list format properties, returns updated list format properties.
     *
     * @param Requests\updateParagraphListFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\ParagraphListFormatResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function updateParagraphListFormatWithHttpInfo(Requests\updateParagraphListFormatRequest $request)
    {
        $returnType = '\Aspose\Words\Model\ParagraphListFormatResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\ParagraphListFormatResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation updateParagraphListFormatAsync
     *
     * Updates paragraph list format properties, returns updated list format properties.
     *
     * @param Requests\updateParagraphListFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateParagraphListFormatAsync(Requests\updateParagraphListFormatRequest $request) 
    {
        return $this->updateParagraphListFormatAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation updateParagraphListFormatAsyncWithHttpInfo
     *
     * Updates paragraph list format properties, returns updated list format properties.
     *
     * @param Requests\updateParagraphListFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function updateParagraphListFormatAsyncWithHttpInfo(Requests\updateParagraphListFormatRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\ParagraphListFormatResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation updateRun
     *
     * Updates run's properties, returns updated run's data.
     *
     * @param Requests\updateRunRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\RunResponse
     */
    public function updateRun(Requests\updateRunRequest $request)
    {
        try {
            list($response) = $this->updateRunWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->updateRunWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation updateRunWithHttpInfo
     *
     * Updates run's properties, returns updated run's data.
     *
     * @param Requests\updateRunRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\RunResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function updateRunWithHttpInfo(Requests\updateRunRequest $request)
    {
        $returnType = '\Aspose\Words\Model\RunResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\RunResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation updateRunAsync
     *
     * Updates run's properties, returns updated run's data.
     *
     * @param Requests\updateRunRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateRunAsync(Requests\updateRunRequest $request) 
    {
        return $this->updateRunAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation updateRunAsyncWithHttpInfo
     *
     * Updates run's properties, returns updated run's data.
     *
     * @param Requests\updateRunRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function updateRunAsyncWithHttpInfo(Requests\updateRunRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\RunResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation updateRunFont
     *
     * Updates font properties, returns updated font data.
     *
     * @param Requests\updateRunFontRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\FontResponse
     */
    public function updateRunFont(Requests\updateRunFontRequest $request)
    {
        try {
            list($response) = $this->updateRunFontWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->updateRunFontWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation updateRunFontWithHttpInfo
     *
     * Updates font properties, returns updated font data.
     *
     * @param Requests\updateRunFontRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\FontResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function updateRunFontWithHttpInfo(Requests\updateRunFontRequest $request)
    {
        $returnType = '\Aspose\Words\Model\FontResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\FontResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation updateRunFontAsync
     *
     * Updates font properties, returns updated font data.
     *
     * @param Requests\updateRunFontRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateRunFontAsync(Requests\updateRunFontRequest $request) 
    {
        return $this->updateRunFontAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation updateRunFontAsyncWithHttpInfo
     *
     * Updates font properties, returns updated font data.
     *
     * @param Requests\updateRunFontRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function updateRunFontAsyncWithHttpInfo(Requests\updateRunFontRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\FontResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation updateSectionPageSetup
     *
     * Updates page setup of section.
     *
     * @param Requests\updateSectionPageSetupRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\SectionPageSetupResponse
     */
    public function updateSectionPageSetup(Requests\updateSectionPageSetupRequest $request)
    {
        try {
            list($response) = $this->updateSectionPageSetupWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->updateSectionPageSetupWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation updateSectionPageSetupWithHttpInfo
     *
     * Updates page setup of section.
     *
     * @param Requests\updateSectionPageSetupRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\SectionPageSetupResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function updateSectionPageSetupWithHttpInfo(Requests\updateSectionPageSetupRequest $request)
    {
        $returnType = '\Aspose\Words\Model\SectionPageSetupResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\SectionPageSetupResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation updateSectionPageSetupAsync
     *
     * Updates page setup of section.
     *
     * @param Requests\updateSectionPageSetupRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateSectionPageSetupAsync(Requests\updateSectionPageSetupRequest $request) 
    {
        return $this->updateSectionPageSetupAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation updateSectionPageSetupAsyncWithHttpInfo
     *
     * Updates page setup of section.
     *
     * @param Requests\updateSectionPageSetupRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function updateSectionPageSetupAsyncWithHttpInfo(Requests\updateSectionPageSetupRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\SectionPageSetupResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation updateStyle
     *
     * Updates style properties, returns an updated style.
     *
     * @param Requests\updateStyleRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\StyleResponse
     */
    public function updateStyle(Requests\updateStyleRequest $request)
    {
        try {
            list($response) = $this->updateStyleWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->updateStyleWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation updateStyleWithHttpInfo
     *
     * Updates style properties, returns an updated style.
     *
     * @param Requests\updateStyleRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\StyleResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function updateStyleWithHttpInfo(Requests\updateStyleRequest $request)
    {
        $returnType = '\Aspose\Words\Model\StyleResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\StyleResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation updateStyleAsync
     *
     * Updates style properties, returns an updated style.
     *
     * @param Requests\updateStyleRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateStyleAsync(Requests\updateStyleRequest $request) 
    {
        return $this->updateStyleAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation updateStyleAsyncWithHttpInfo
     *
     * Updates style properties, returns an updated style.
     *
     * @param Requests\updateStyleRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function updateStyleAsyncWithHttpInfo(Requests\updateStyleRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\StyleResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation updateTableCellFormat
     *
     * Updates a table cell format.
     *
     * @param Requests\updateTableCellFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\TableCellFormatResponse
     */
    public function updateTableCellFormat(Requests\updateTableCellFormatRequest $request)
    {
        try {
            list($response) = $this->updateTableCellFormatWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->updateTableCellFormatWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation updateTableCellFormatWithHttpInfo
     *
     * Updates a table cell format.
     *
     * @param Requests\updateTableCellFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\TableCellFormatResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function updateTableCellFormatWithHttpInfo(Requests\updateTableCellFormatRequest $request)
    {
        $returnType = '\Aspose\Words\Model\TableCellFormatResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\TableCellFormatResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation updateTableCellFormatAsync
     *
     * Updates a table cell format.
     *
     * @param Requests\updateTableCellFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateTableCellFormatAsync(Requests\updateTableCellFormatRequest $request) 
    {
        return $this->updateTableCellFormatAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation updateTableCellFormatAsyncWithHttpInfo
     *
     * Updates a table cell format.
     *
     * @param Requests\updateTableCellFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function updateTableCellFormatAsyncWithHttpInfo(Requests\updateTableCellFormatRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\TableCellFormatResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation updateTableProperties
     *
     * Updates a table properties.
     *
     * @param Requests\updateTablePropertiesRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\TablePropertiesResponse
     */
    public function updateTableProperties(Requests\updateTablePropertiesRequest $request)
    {
        try {
            list($response) = $this->updateTablePropertiesWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->updateTablePropertiesWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation updateTablePropertiesWithHttpInfo
     *
     * Updates a table properties.
     *
     * @param Requests\updateTablePropertiesRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\TablePropertiesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function updateTablePropertiesWithHttpInfo(Requests\updateTablePropertiesRequest $request)
    {
        $returnType = '\Aspose\Words\Model\TablePropertiesResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\TablePropertiesResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation updateTablePropertiesAsync
     *
     * Updates a table properties.
     *
     * @param Requests\updateTablePropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateTablePropertiesAsync(Requests\updateTablePropertiesRequest $request) 
    {
        return $this->updateTablePropertiesAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation updateTablePropertiesAsyncWithHttpInfo
     *
     * Updates a table properties.
     *
     * @param Requests\updateTablePropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function updateTablePropertiesAsyncWithHttpInfo(Requests\updateTablePropertiesRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\TablePropertiesResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation updateTableRowFormat
     *
     * Updates a table row format.
     *
     * @param Requests\updateTableRowFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\TableRowFormatResponse
     */
    public function updateTableRowFormat(Requests\updateTableRowFormatRequest $request)
    {
        try {
            list($response) = $this->updateTableRowFormatWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->updateTableRowFormatWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation updateTableRowFormatWithHttpInfo
     *
     * Updates a table row format.
     *
     * @param Requests\updateTableRowFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\TableRowFormatResponse, HTTP status code, HTTP response headers (array of strings)
     */
    private function updateTableRowFormatWithHttpInfo(Requests\updateTableRowFormatRequest $request)
    {
        $returnType = '\Aspose\Words\Model\TableRowFormatResponse';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\TableRowFormatResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation updateTableRowFormatAsync
     *
     * Updates a table row format.
     *
     * @param Requests\updateTableRowFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateTableRowFormatAsync(Requests\updateTableRowFormatRequest $request) 
    {
        return $this->updateTableRowFormatAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation updateTableRowFormatAsyncWithHttpInfo
     *
     * Updates a table row format.
     *
     * @param Requests\updateTableRowFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function updateTableRowFormatAsyncWithHttpInfo(Requests\updateTableRowFormatRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\TableRowFormatResponse';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation uploadFile
     *
     * Upload file.
     *
     * @param Requests\uploadFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Words\Model\FilesUploadResult
     */
    public function uploadFile(Requests\uploadFileRequest $request)
    {
        try {
            list($response) = $this->uploadFileWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $e) {
            list($response) = $this->uploadFileWithHttpInfo($request);
            return $response;
        } 
    }

    /*
     * Operation uploadFileWithHttpInfo
     *
     * Upload file.
     *
     * @param Requests\uploadFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Words\Model\FilesUploadResult, HTTP status code, HTTP response headers (array of strings)
     */
    private function uploadFileWithHttpInfo(Requests\uploadFileRequest $request)
    {
        $returnType = '\Aspose\Words\Model\FilesUploadResult';
        $request = $request->createRequest($this->config);

        try {
            $options = $this->_createHttpClientOption();
            $this->_checkAuthToken();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", 401, null, null);
                }
                else if ($e->getCode() < 200 || $e->getCode() > 299) {
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $request->getUri()), $e->getCode(), null, null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Words\Model\FilesUploadResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation uploadFileAsync
     *
     * Upload file.
     *
     * @param Requests\uploadFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadFileAsync(Requests\uploadFileRequest $request) 
    {
        return $this->uploadFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation uploadFileAsyncWithHttpInfo
     *
     * Upload file.
     *
     * @param Requests\uploadFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function uploadFileAsyncWithHttpInfo(Requests\uploadFileRequest $request) 
    {
        $returnType = '\Aspose\Words\Model\FilesUploadResult';
        $request = $request->createRequest($this->config);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
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

                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Operation bacth requests
     *
     * @param array of requests
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of response objects
     */
    public function batch($requests)
    {
        try {
            return $this->batchWithHttpInfo($requests);
        }
        catch(RepeatRequestException $e) {
            return $this->batchWithHttpInfo($requests);
        }
    }

    /*
     * Operation bacth requests
     *
     * @param array of requests
     *
     * @throws \Aspose\Words\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of response objects
     */
    private function batchWithHttpInfo($requests)
    {
        return $this->batchAsyncWithHttpInfo($requests)->wait();
    }

    /*
     * Async operation bacth requests
     *
     * @param array of requests
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function batchAsync($requests) 
    {
        return $this->batchAsyncWithHttpInfo($requests)
            ->then(
                function ($response) {
                    return $response;
                }
            );
    }

    /*
     * Async operation bacth requests
     *
     * @param array of requests
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function batchAsyncWithHttpInfo($requests) 
    {
        if (count($requests) == 0)
        {
            return array();
        }

        $options = $this->_createHttpClientOption();
        $this->_checkAuthToken();

        $multipartContents = [];
        foreach ($requests as $request)
        {
            $partData = ObjectSerializer::createBatchPart($this->config, $request);
            $multipartContents[] = [
                'name' => sha1(uniqid('', true)),
                'contents' => $partData,
                'headers' => ['Content-Type' => 'application/http; msgtype=request']
            ];
        }

        $headers = [];
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        if ($this->config->getUserAgent()) {
            $headers['x-aspose-client'] = $this->config->getUserAgent();
        }

        $headers['x-aspose-client-version'] = $this->config->getClientVersion();
        $httpBody = new MultipartStream($multipartContents);
        $headers['Content-Type'] = "multipart/form-data; boundary=" . $httpBody->getBoundary();

        $method = 'PUT';
        $url = ObjectSerializer::parseURL($this->config, '/words/batch', array());
        $batchRequest = new Request(
            $method,
            $url,
            $headers,
            $httpBody
        );

        if ($this->config->getDebug()) {
            $this->_writeRequestLog($method, $url, $headers, $httpBody);
        }

        return $this->client
            ->sendAsync($batchRequest, $options)
            ->then(
                function ($response) use ($requests) {
                    return ObjectSerializer::parseBatchResponse($response, $requests);
                },
                function ($e) use ($batchRequest) {
                    if ($e->getCode() == 401) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", 401, null, null);
                    }
                    else if ($e->getCode() < 200 || $e->getCode() > 299) {
                        print($e);
                        throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $e->getCode(), $batchRequest->getUri()), $e->getCode(), null, null);
                    }
                }
            );
    }

    /*
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    private function _createHttpClientOption() 
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

    /*
     * Executes response logging
     */
    private function _writeResponseLog($statusCode, $headers, $body)
    {
        $logInfo = "\nResponse: $statusCode \n";
        echo $logInfo . $this->_writeHeadersAndBody($logInfo, $headers, $body);
    }

    /*
     * Executes request logging
     */
    private function _writeRequestLog($method, $url, $headers, $body)
    {
        $logInfo = "\n$method: $url \n";
        echo $logInfo . $this->_writeHeadersAndBody($logInfo, $headers, $body);
    }

    /*
     * Executes header and boy formatting
     */
    private function _writeHeadersAndBody($logInfo, $headers, $body)
    {
        foreach ($headers as $name => $value) {
            $logInfo .= $name . ': ' . $value . "\n";
        }

        return $logInfo .= "Body: " . $body . "\n";
    }

    /*
     * Gets a request token from server
     */
    private function _requestToken() 
    {
        $requestUrl = $this->config->getHost() . "connect/token";
        $params = array(
            "grant_type"=>'client_credentials',
            "client_id" => $this->config->getClientId(),
            "client_secret" => $this->config->getClientSecret()
        );
        $multipartContents = [];
        foreach ($params as $paramName => $paramValue) {
            $multipartContents[] = [
                'name' => $paramName,
                'contents' => $paramValue
            ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);
        $response = $this->client->send(new Request('POST', $requestUrl, [], $httpBody));
        $result = json_decode($response->getBody()->getContents(), true);
        $this->config->setAccessToken($result["access_token"]);
    }

    private function _checkAuthToken()
    {
        if ($this->config->getAccessToken() === "") {
            $this->_requestToken();
        }
    }
}
