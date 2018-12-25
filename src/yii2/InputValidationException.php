<?php

namespace aminkt\exceptions;


use yii\web\HttpException;
use yii\web\UnprocessableEntityHttpException;

/**
 * Class InvalidInputException
 *
 * This exception will use for api validation response.
 *
 * @package common\components\exceptions
 */
class InputValidationException extends UnprocessableEntityHttpException
{
    public $validationErrors;

    public function getValidatoinErros(){
        return $this->validationErrors;
    }

    public function setValidationErros($validationErrors){
        $this->validationErrors = $validationErrors;
    }

    public function __construct($message = null, $validationErrors = null, $code = 0, \Exception $previous = null)
    {
        $this->validationErrors = $validationErrors;

        parent::__construct($message, 100, $previous);
    }
}
