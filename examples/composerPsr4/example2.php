<?php

declare(strict_types=1);

include_once '../../vendor/autoload.php';

$A = new \ComposerPsr4\A();
echo $A->getName();

$a = new \composerpsr4\a();
echo $a->getName();
