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

$A = new \SplAutoload\A();
echo $A->getName();

$a = new \splautoload\a();
echo $a->getName();