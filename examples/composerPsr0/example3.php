<?php

declare(strict_types=1);

include_once '../../vendor/autoload.php';

class Example3 {

    private $a;

    public function __construct($className) {
        if ('a' === $className) {
            $this->a = new composerpsr0_a();
        } elseif ('A' === $className) {
            $this->a = new ComposerPsr0_A();
        }
    }

    public function isABig()
    {
        return $this->a instanceof ComposerPsr0_A;
    }

    public function isASmall()
    {
        return $this->a instanceof composerpsr0_a;
    }

    public function getAName()
    {
        return $this->a->getName();
    }
}

$example3 = new Example3('A');
var_dump($example3->isABig());
var_dump($example3->isASmall());
var_dump($example3->getAName());

$example3 = new Example3('a');
var_dump($example3->isABig());
var_dump($example3->isASmall());
var_dump($example3->getAName());
