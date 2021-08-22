<?php

declare(strict_types=1);

$serializedA = file_get_contents('../../runtime/serializedExample1.txt');

var_dump(unserialize($serializedA));