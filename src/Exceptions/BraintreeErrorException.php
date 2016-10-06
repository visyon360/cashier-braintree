<?php 

namespace Laravel\Cashier\Exceptions;

use Exception;

class BraintreeErrorException extends Exception
{
    protected $errorObject;
    
    public function __construct($message = "", $code = 0, Exception $previous = null, $errorObject = null)
    {
        $this->errorObject = $errorObject;
        
        parent::__construct($message, $code, $previous);
    }
    
    public function getErrorBag()
    {
        return $this->errorObject;
    }
}