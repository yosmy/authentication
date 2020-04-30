<?php

namespace Yosmy;

use Exception;
use JsonSerializable;

class UnsupportedAuthenticationException extends Exception implements JsonSerializable
{
    /**
     * @var string
     */
    private $reason;

    /**
     * @param string $reason
     */
    public function __construct(
        string $reason
    ) {
        $this->reason = $reason;

        parent::__construct();
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize(): array
    {
        return [
            'class' => self::class,
            'reason' => $this->getReason(),
        ];
    }
}