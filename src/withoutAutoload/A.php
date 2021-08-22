<?php

declare(strict_types=1);

namespace WithoutAutoload;

class A {

    public function getName(): string
    {
        return 'AAAAAA ' . __CLASS__ . PHP_EOL;
    }
}