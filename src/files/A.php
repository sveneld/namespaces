<?php

declare(strict_types=1);

namespace Files;

class A {

    public function getName(): string
    {
        return 'AAAAAA ' . __CLASS__ . PHP_EOL;
    }
}