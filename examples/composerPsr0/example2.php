<?php

declare(strict_types=1);

include_once '../../vendor/autoload.php';

$A = new ComposerPsr0_A();
echo $A->getName();

$a = new composerpsr0_a();
echo $a->getName();
