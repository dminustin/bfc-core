<?php

namespace Dminustin\BfcCore\Enums;

use Dminustin\BfcCore\Classes\ErrorClass;

interface BaseErrorEnum
{
    public function getError(): ErrorClass;
}
