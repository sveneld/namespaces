<?php

declare(strict_types=1);

namespace ClassMap;

class A {

    public function getName(): string
    {
        return 'AAAAAA ' . __CLASS__ . PHP_EOL;
    }
}