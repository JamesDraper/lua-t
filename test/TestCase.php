<?php
declare(strict_types=1);

namespace Test;

use Prophecy\Prophecy\ObjectProphecy;
use Prophecy\Prophet;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    private Prophet $prophet;

    protected function makeMock(string $classPath): ObjectProphecy
    {
        return $this->prophet->prophesize($classPath);
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->prophet = new Prophet;
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        $this->prophet->checkPredictions();
    }
}
