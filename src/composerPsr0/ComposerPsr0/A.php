<?php

declare(strict_types=1);

class ComposerPsr0_A {

    public function getName(): string
    {
        return 'AAAAAA ' . __CLASS__ . PHP_EOL;
    }
}