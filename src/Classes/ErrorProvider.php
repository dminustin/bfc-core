<?php

namespace Dminustin\BfcCore\Classes;

use Dminustin\BfcCore\Enums\BaseErrorEnum;
use Dminustin\BfcCore\Exceptions\BfcBaseException;
use Exception;
use Psr\Log\LoggerInterface;

class ErrorProvider
{
    public function __construct(protected LoggerInterface $log)
    {
        /*_*/
    }

    public function throwException(
        BaseErrorEnum $errorObject,
        string        $exceptionClass = BfcBaseException::class
    ): exception
    {
        $error = $errorObject->getError();
        $this->log->error($error->getLogMessage());
        return new $exceptionClass(
            $error->getMessage(),
            $error->getCode()
        );
    }
}