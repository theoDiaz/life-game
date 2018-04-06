<?php
require_once __DIR__ . "/vendor/autoload.php";

// die();

include 'src/Life.php';


use src\Life;

$life = new Life(30);

print_r($life->getSchemaWorldCells());
print_r("nb of living cells : ");
print_r($life->getNbLivingCells());

for($i = 0; $i < 10000; $i++) {
	usleep(10000);
	system("clear");
	$life->moveToNextGeneration();
	print_r("\n");
	print_r("Go to next generation : ");
	print_r("\n");
	print_r("\n");
	print_r($life->getSchemaWorldCells());
	print_r("nb of living cells : ");
	print_r($life->getNbLivingCells());
}


