<?php

namespace aminkt\exceptions\yii2;


use yii\web\HttpException;

/**
 * Class InvalidateInputException
 *
 * This exception will use for api validation response.
 *
 * @package common\components\exceptions
 */
class InvalidateInputException extends HttpException
{
    public $statusCode = 400;

    public $code = 100;
}