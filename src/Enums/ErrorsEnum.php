<?php

namespace Dminustin\BfcCore\Enums;

use Dminustin\BfcCore\Classes\ErrorClass;

enum ErrorsEnum: string implements BaseErrorEnum
{
    case BASE_ERROR = 'base_error';

    public function getError(): ErrorClass
    {
        return match ($this) {
            ErrorsEnum::BASE_ERROR => (new ErrorClass),
        };
    }
}
