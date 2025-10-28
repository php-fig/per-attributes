<?php

declare(strict_types=1);

namespace Fig\Attributes\Tests;

use Fig\Attributes\Route;
use PHPUnit\Framework\TestCase;

final class RouteTest extends TestCase
{
    /**
     * @covers \Fig\Attributes\Route
     */
    public function testSingleMethod(): void
    {
        $attribute = new Route('GET', '/users');
        $this->assertSame(['GET'], $attribute->methods);
        $this->assertSame('/users', $attribute->path);
    }

    /**
     * @covers \Fig\Attributes\Route
     */
    public function testMultipleMethods(): void
    {
        $attribute = new Route(['GET', 'POST'], '/users');
        $this->assertSame(['GET', 'POST'], $attribute->methods);
        $this->assertSame('/users', $attribute->path);
    }
}
