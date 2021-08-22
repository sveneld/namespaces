<?php

declare(strict_types=1);

namespace SplAutoload;

class A {

    public function getName(): string
    {
        return 'AAAAAA ' . __CLASS__ . PHP_EOL;
    }
}