<?php

namespace aminkt\exceptions\yii2;

class ErrorHandler extends \yii\web\ErrorHandler
{
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    protected function convertExceptionToArray($exception)
    {
        $array = parent::convertExceptionToArray($exception);
        if ($exception instanceof InputValidationException){
            $array['validationErrors'] = $exception->validationErrors;
        }

        return $array;
    }
}