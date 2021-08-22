<?php

declare(strict_types=1);

include_once '../../vendor/autoload.php';

$A = new \ClassMap\A();
echo $A->getName();

$a = new \classmap\a();
echo $a->getName();
