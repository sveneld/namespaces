<?php

declare(strict_types=1);

include '../../src/withoutAutoload/A.php';
include '../../src/withoutAutoload/a.php';

$A = new \WithoutAutoload\A();
echo $A->getName();

$a = new \withoutautoload\a();
echo $a->getName();


