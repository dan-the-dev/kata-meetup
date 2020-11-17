<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\Meetup;

class MettupTest extends TestCase
{
    private $meetup;

    protected function setUp(): void
    {
        $this->meetup = new Meetup();
    }

    public function testShallPass(): void
    {
        $this->assertEquals(1, 1);
    }

    public function testHandleReturnTrue(): void
    {
        $this->assertEquals(true, $this->meetup->handle());
    }
}
