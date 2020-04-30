<?php

namespace Yosmy\Test;

use PHPUnit\Framework\TestCase;
use Yosmy;
use Yosmy\UnsupportedAuthenticationException;

class UnsupportedAuthenticationExceptionTest extends TestCase
{
    public function testJsonSerialize()
    {
        $reason = 'reason';

        $exception = new UnsupportedAuthenticationException($reason);

        $this->assertEquals(
            [
                'reason' => $reason
            ],
            $exception->jsonSerialize()
        );
    }
}