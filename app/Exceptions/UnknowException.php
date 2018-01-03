<?php

namespace App\Exceptions;

class UnknowException extends BaseException
{
    public function __construct($message = null, $code = INTERNAL_SERVER_ERROR)
    {
        $message = $message ?: trans('status_code.' . $code);

        parent::__construct($message, $code);
    }
}
