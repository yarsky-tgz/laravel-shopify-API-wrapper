<?php namespace RocketCode\Shopify;

use \Exception;

class ShopifyException extends Exception
{
    protected $_response;

    public function __construct($response, $code = 0, Exception $previous = null)
    {
        parent::__construct('Shopify error occured', $code, $previous);
        $this->_response = $response;
    }

    public function getResponse()
    {
        return $this->_response;
    }

}
