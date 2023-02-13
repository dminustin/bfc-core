<?php

namespace Dminustin\BfcCore\Classes;

class ErrorClass
{
    protected string $message = 'Unknown Error';
    protected int $code = 500;
    protected string $logMessage = 'Unknown Error';

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): static
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode(int $code): static
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogMessage(): string
    {
        return $this->logMessage;
    }

    /**
     * @param string $logMessage
     */
    public function setLogMessage(string $logMessage): static
    {
        $this->logMessage = $logMessage;
        return $this;
    }
}