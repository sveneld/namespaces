<?php

declare(strict_types=1);

include_once '../../src/withoutAutoload/A.php';

$A = new \WithoutAutoload\A();
echo $A->getName();