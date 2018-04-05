<?php

include 'src/Life.php';

use src\Life;

$life = new Life(10);

print_r($life->getSchemaWorldCells());
$life->moveToNextGeneration();
print_r("\n");
$life->getSchemaScores();
print_r("\n");
print_r("Go to next generation : ");
print_r("\n");
print_r("\n");
print_r($life->getSchemaWorldCells());

