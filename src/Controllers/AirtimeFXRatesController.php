<?php

declare(strict_types=1);

/*
 * ReloadlySdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ReloadlySdkLib\Controllers;

use ReloadlySdkLib\Exceptions\ApiException;
use ReloadlySdkLib\ConfigurationInterface;
use ReloadlySdkLib\ApiHelper;
use ReloadlySdkLib\Http\HttpRequest;
use ReloadlySdkLib\Http\HttpResponse;
use ReloadlySdkLib\Http\HttpMethod;
use ReloadlySdkLib\Http\HttpContext;
use ReloadlySdkLib\Http\HttpCallBack;
use ReloadlySdkLib\Server;

class AirtimeFXRatesController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * @param string $accept
     * @param string $authorization
     * @param array $body Payload description
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function reloadlyAirtimeFxRates(string $accept, string $authorization, array $body)
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri(Server::AIRTIME) . '/operators/fx-rate';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'          => $accept,
            'Authorization'   => $authorization,
            'Content-Type'    => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($body);

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->post($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 401) {
            throw new ApiException(
                'Full authentication is required to access this resource',
                $_httpRequest,
                $_httpResponse
            );
        }

        if ($response->code == 404) {
            throw new ApiException('Not Found', $_httpRequest, $_httpResponse);
        }

        if ($response->code == 500) {
            throw new ApiException(
                'Fx rate is currently not available for this operator, please try again later or cont' .
                'act support.',
                $_httpRequest,
                $_httpResponse
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return $response->body;
    }
}
