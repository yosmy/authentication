<?php

namespace Yosmy;

use Exception;
use JsonSerializable;

class DeniedAuthenticationException extends Exception implements JsonSerializable
{
    /**
     * @param string $message
     */
    public function __construct(
        string $message
    ) {
        parent::__construct($message);
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize(): array
    {
        return [
            'class' => self::class,
            'message' => $this->getMessage()
        ];
    }
}