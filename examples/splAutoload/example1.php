<?php

declare(strict_types=1);

spl_autoload_register(function($className) {
    switch ($className) {
        case 'SplAutoload\A':
            include '../../src/splAutoload/A.php';
            break;
    }
});

$A = new \SplAutoload\A();
echo $A->getName();