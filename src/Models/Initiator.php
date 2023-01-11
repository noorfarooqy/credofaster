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
class Initiator implements JsonSerializable
{
    /**
     * Client Type Initiating the Request
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * Client ID Initiating the Request
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $type Initialization value for $this->type
     * @param string $id   Initialization value for $this->id
     */
    public function __construct()
    {
        switch (func_num_args()) {
            case 2:
                $this->type = func_get_arg(0);
                $this->id = func_get_arg(1);
                break;

            default:
                $this->type = 'PARTNER';
                $this->id = '10001';
                break;
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['type'] = $this->type;
        $json['id'] = $this->id;

        return $json;
    }
}