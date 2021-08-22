<?php

declare(strict_types=1);

class Example3 {

    private $a;

    public function __construct($className) {
        if ('a' === $className) {
            include '../../src/withoutAutoload/a.php';
            $this->a = new \withoutautoload\a();
        } elseif ('A' === $className) {
            include '../../src/withoutAutoload/A.php';
            $this->a = new \WithoutAutoload\A();
        }
    }

    public function isABig()
    {
        return $this->a instanceof \WithoutAutoload\A;
    }

    public function isASmall()
    {
        return $this->a instanceof \withoutautoload\a;
    }

    public function getAName()
    {
        return $this->a->getName();
    }
}

$example3 = new Example3('a');
var_dump($example3->isABig());
var_dump($example3->isASmall());
var_dump($example3->getAName());

$example3 = new Example3('A');
var_dump($example3->isABig());
var_dump($example3->isASmall());
var_dump($example3->getAName());
