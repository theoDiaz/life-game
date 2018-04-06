<?php
require_once __DIR__ . "/vendor/autoload.php";
$climate = new \League\CLImate\CLImate;

include 'src/Life.php';


use src\Life;

$life = new Life(25);

$climate->table($life->getSchemaWorldCells());
print_r("nb of living cells : ");
print_r($life->getNbLivingCells());

for($i = 0; $i < 10000; $i++) {
	usleep(50000);
	$climate->clear();
	$life->moveToNextGeneration();
	$climate->table($life->getSchemaWorldCells());
	print_r("nb of living cells : ");
	print_r($life->getNbLivingCells());
}


