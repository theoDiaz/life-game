<?php

include 'src/Life.php';

use src\Life;

$life = new Life(10);

print_r($life->getSchemaWorldCells());

