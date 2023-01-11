<?php
/*
 * CredofasterSDK
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Noorfarooqy\Credofaster\Controllers;

use Noorfarooqy\Credofaster\APIException;
use Noorfarooqy\Credofaster\APIHelper;
use Noorfarooqy\Credofaster\Configuration;
use Noorfarooqy\Credofaster\Http\HttpContext;
use Noorfarooqy\Credofaster\Http\HttpMethod;
use Noorfarooqy\Credofaster\Http\HttpRequest;
use Noorfarooqy\Credofaster\Http\HttpResponse;
use Noorfarooqy\Credofaster\Models;
use Noorfarooqy\Credofaster\Servers;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class EventsController extends BaseController
{
    /**
     * @var EventsController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return EventsController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * A callback to receive the below Callbacks
     *
     * @param Models\RegisterCallbackRequest $request TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function registerCallback(
        $request
    ) {

        //prepare query string for API call
        $_queryBuilder = '/RegisterCallback';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri(Servers::DEFAULT_) . $_queryBuilder);

        //prepare headers
        $_headers = array(
            'user-agent' => BaseController::USER_AGENT,
            'Accept' => 'application/json',
            'content-type' => 'application/json; charset=utf-8',
            'ApiKey' => Configuration::$apiKey,
            'ClientId' => Configuration::$clientId,
        );

        //json encode body
        $_bodyJson = Request\Body::Json($request);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, $_bodyJson);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'Noorfarooqy\\Credofaster\\Models\\RegisterCallbackRequest');
    }

    /**
     * You are required to provide a HTTP/HTTPS endpoint, to which we will publish various events.
     *
     * This Endpoint will be hosted on the CLIENT's Environment. If no endpoint is provided, we are not
     * liable to any missing events.
     *
     * NOTE: A DETAILED PDF of all Events is shared on request. It contains application events, System
     * Health Events and Alerts on the same.
     *
     * @param Models\EventCallbackPayload $payloadToReceive   Sample Payload: {"EventId":"123456789","EventType":
     *                                                        "QUEUED","RequestId":"A09797a11e2564061b859781b18bb34dd",
     *                                                        "EventData":{}}
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function clientEventFeedback(
        $payloadToReceive
    ) {

        //prepare query string for API call
        $_queryBuilder = '/my_endpoint_here';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri(Servers::MY_CALLBACK_ENDPOINT) . $_queryBuilder);

        //prepare headers
        $_headers = array(
            'user-agent' => BaseController::USER_AGENT,
            'Accept' => 'application/json',
            'content-type' => 'application/json; charset=utf-8',
        );

        //json encode body
        $_bodyJson = Request\Body::Json($payloadToReceive);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, $_bodyJson);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'Noorfarooqy\\Credofaster\\Models\\EventCallbackFeedback');
    }
}