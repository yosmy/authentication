<?php

namespace Yosmy\Test;

use PHPUnit\Framework\TestCase;
use Yosmy;
use Yosmy\DeniedAuthenticationException;

class DeniedAuthenticationExceptionTest extends TestCase
{
    public function testJsonSerialize()
    {
        $message = 'message';

        $exception = new DeniedAuthenticationException($message);

        $this->assertEquals(
            [
                'class' => DeniedAuthenticationException::class,
                'message' => $message
            ],
            $exception->jsonSerialize()
        );
    }
}