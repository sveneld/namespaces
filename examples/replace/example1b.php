<?php

declare(strict_types=1);

namespace Example1Replaced;

class AReplaced
{
    public $a1;
    protected $a2;
    private $a3;

    public function __construct()
    {
        $this->a1 = 1;
        $this->a2 = 2;
        $this->a3 = 3;
    }

    public function getA1()
    {
        return $this->a1;
    }

    public function getA2()
    {
        return $this->a2;
    }

    public function getA3()
    {
        return $this->a3;
    }
}

class_alias(
    \Example1Replaced\AReplaced::class,
    \Example1\A::class,
);

$serializedA = file_get_contents('../../runtime/serializedExample1.txt');
$unserializedA = unserialize($serializedA);
var_dump($unserializedA);
var_dump($unserializedA->getA1());
var_dump($unserializedA->getA2());
var_dump($unserializedA->getA3());