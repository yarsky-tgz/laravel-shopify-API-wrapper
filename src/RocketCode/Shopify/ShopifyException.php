<?php namespace RocketCode\Shopify;

use \Exception;

class ShopifyException extends Exception
{
    protected $_response;
    protected $_request;

    public function __construct($response, $request, $code = 0, Exception $previous = null)
    {
        parent::__construct('Shopify error occured', $code, $previous);
        $this->_response = $response;
        $this->_request = $request;
    }

    public function getResponse()
    {
        return $this->_response;
    }

    public function getRequest()
    {
        return $this->_request;
    }

}
