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

class AirtimePromotionsController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * @param string $accept
     * @param string $authorization
     * @param int|null $size This indicates the number of promotions to be retrieved on a page.
     *        Default value is 200.
     * @param int|null $page This indicates the page of the promotions list being retrieved. Default
     *        value is 1.
     * @param int|null $languageCode This indicates the language you want the promotion information
     *        to be displayed in. The language code is to be specified in the ISO 639-1 format.
     *        Choices are 'EN', 'ES', 'FR', 'IT', 'PT', 'ZH', 'AR', 'HI', 'HT', 'JA' and 'DE'.
     *        Default is 'EN'. This is a case-insensitive field. The promotion information is
     *        returned in your requested language irrespective of the original language in which
     *        the promotion was launched.
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function reloadlyAirtimePromotions(
        string $accept,
        string $authorization,
        ?int $size = null,
        ?int $page = null,
        ?int $languageCode = null
    ) {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri(Server::AIRTIME) . '/promotions';

        //process query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryUrl, [
            'size'          => $size,
            'page'          => $page,
            'languageCode'  => $languageCode,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'          => $accept,
            'Authorization'   => $authorization
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
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

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return $response->body;
    }

    /**
     * @param string $accept
     * @param string $authorization
     * @param string $promotionid The promotion's identification number.
     * @param string|null $languageCode This indicates the language you want the promotion
     *        information to be displayed in. The language code is to be specified in the ISO 639-
     *        1 format. Choices are 'EN', 'ES', 'FR', 'IT', 'PT', 'ZH', 'AR', 'HI', 'HT', 'JA' and
     *        'DE'. Default is 'EN'. This is a case-insensitive field. The promotion information
     *        is returned in your requested language irrespective of the original language in
     *        which the promotion was launched.
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function reloadlyAirtimePromotionById(
        string $accept,
        string $authorization,
        string $promotionid,
        ?string $languageCode = null
    ) {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri(Server::AIRTIME) . '/promotions/{promotionid}';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'promotionid'   => $promotionid,
        ]);

        //process query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryUrl, [
            'languageCode'  => $languageCode,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'          => $accept,
            'Authorization'   => $authorization
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
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
            throw new ApiException('Promotion not found', $_httpRequest, $_httpResponse);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return $response->body;
    }

    /**
     * @param string $accept
     * @param string $authorization
     * @param string $countrycode
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function reloadlyAirtimePromotionByIso(string $accept, string $authorization, string $countrycode)
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri(Server::AIRTIME) .
            '/promotions/country-codes/{countrycode}';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'countrycode'   => $countrycode,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'          => $accept,
            'Authorization'   => $authorization
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
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

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return $response->body;
    }

    /**
     * @param string $accept
     * @param string $authorization
     * @param string $operatorid
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function reloadlyAirtimePromotionByOperatorId(string $accept, string $authorization, string $operatorid)
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri(Server::AIRTIME) .
            '/promotions/operators/{operatorid}';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'Authorization' => $authorization,
            'operatorid'    => $operatorid,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'          => $accept
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
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

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return $response->body;
    }
}
