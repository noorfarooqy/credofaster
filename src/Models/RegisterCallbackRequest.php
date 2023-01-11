<?php
/*
 * CredofasterSDK
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Noorfarooqy\Credofaster\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class RegisterCallbackRequest implements JsonSerializable
{
    /**
     * Define a reachable URL that accepts a JSON Payload as described below
     * @required
     * @var string $url public property
     */
    public $url;

    /**
     * Define the transactions per second we should use when pushing callbacks to your side
     * @var string|null $tps public property
     */
    public $tps;

    /**
     * A comma separated value, containing the number of seconds to wait for any retries and the max number
     * of retries to do, when the clients endpoint responds with an Error
     * @var string|null $retries public property
     */
    public $retries;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $url     Initialization value for $this->url
     * @param string $tps     Initialization value for $this->tps
     * @param string $retries Initialization value for $this->retries
     */
    public function __construct()
    {
        switch (func_num_args()) {
            case 3:
                $this->url = func_get_arg(0);
                $this->tps = func_get_arg(1);
                $this->retries = func_get_arg(2);
                break;

            default:
                $this->url = 'https://posthere.io/partner_test';
                $this->tps = '10';
                $this->retries = '1,5';
                break;
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['url'] = $this->url;
        $json['tps'] = $this->tps;
        $json['retries'] = $this->retries;

        return $json;
    }
}