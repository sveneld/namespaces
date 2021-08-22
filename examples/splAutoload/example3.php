<?php

declare(strict_types=1);

spl_autoload_register(function($className) {
    switch ($className) {
        case 'SplAutoload\A':
            include '../../src/splAutoload/A.php';
            break;
        case 'splautoload\a':
            include '../../src/splAutoload/a.php';
            break;
    }
});

class Example3 {

    private $a;

    public function __construct($className) {
        if ('a' === $className) {
            $this->a = new \SplAutoload\A();
        } elseif ('A' === $className) {
            $this->a = new \splautoload\a();
        }
    }

    public function isABig()
    {
        return $this->a instanceof \SplAutoload\A;
    }

    public function isASmall()
    {
        return $this->a instanceof \splautoload\a;
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
