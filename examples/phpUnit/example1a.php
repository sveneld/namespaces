<?php

declare(strict_types=1);

include_once 'example1.php';

class TestB extends \PHPUnit\Framework\TestCase
{

    public function testGetA(): void
    {
        $b = $this->createMock(\PHPUnitExample\B::class);
        $b->expects($this->once())
            ->method('getA')
            ->willReturn(new \PHPUnitExample\A());

        $c = new \PHPUnitExample\C($b);
        $this->assertInstanceOf(\PHPUnitExample\A::class, $c->getB()->getA());
    }
}

