<?php
/**
 * Tests for HivemindOrbit
 */

use PHPUnit\Framework\TestCase;
use Hivemindorbit\Hivemindorbit;

class HivemindorbitTest extends TestCase {
    private Hivemindorbit $instance;

    protected function setUp(): void {
        $this->instance = new Hivemindorbit(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Hivemindorbit::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
