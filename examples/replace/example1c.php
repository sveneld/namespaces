<?php

declare(strict_types=1);

namespace Example1Replaced;

class AReplaced
{
    public int $a1;
    protected int $a2;
    private int $a3;

    public function __construct()
    {
        $this->a1 = 1;
        $this->a2 = 2;
        $this->a3 = 3;
    }

    public function getA1(): int
    {
        return $this->a1;
    }

    public function getA2(): int
    {
        return $this->a2;
    }

    public function getA3(): int
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