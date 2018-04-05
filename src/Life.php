<?php

namespace src;

class Life {

    private $worldCells;
    private $nbLivingCells = 0;

    // here we initialize the array of cells
    // 0 for a dead cell, 1 for a living one
    public function __construct($worldLength) {
        for($i = 0; $i < $worldLength; $i++) {
            for($j = 0; $j < $worldLength; $j++) {
                $this->worldCells[$i][$j] = rand(0,1);
                if($this->worldCells[$i][$j]) {
                    $this->nbLivingCells += 1;
                }
            }
        }
    }

    public function getWorldCells() {
        return $this->worldCells;
    }

    public function getNbLivingCells() {
        return $this->nbLivingCells;
    }

    // X for a dead cell, O for a living one
    public function getSchemaWorldCells() {
        $schema = '';
        for($i = 0; $i < count($this->worldCells); $i++) {
            $line = '';
            for($j = 0; $j < count($this->worldCells[0]); $j++) {
                $cell = $this->worldCells[$i][$j] ? 'O':'X';
                $line = trim($line . ' ' . $cell);
            }
            $schema = $schema . $line . "\n";
        }
        return $schema;
    }

    public function moveToNextGeneration() {
        $nextWorldCells = array();
        $lengthX = count($this->worldCells);
        $lengthY = count($this->worldCells[0]);
        $nbLivingCellsNextGen = 0;
        for($i = 0; $i < $lengthX; $i++) {
            for($j = 0; $j < $lengthY; $j++) {
                if($i == 0 || $j == 0 || $i == $lengthX-1 || $j == $lengthY-1) {
                    $nextWorldCells[$i][$j] = $this->worldCells[$i][$j];
                } else {
                    $nbSurroundingLivingCells = 0;
                    for($k = -1; $k <= 1; $k++) {
                        for($l = -1; $l <= 1; $l++) {
                            if($k !== 0 || $l !== 0) {
                                $nbSurroundingLivingCells += $this->worldCells[$i+$k][$j+$l];
                            }
                        }
                    }
                    $nextWorldCells[$i][$j] = ($nbSurroundingLivingCells === 3) ? 1 : 
                                                    (
                                                        ($this->worldCells[$i][$j] === 1 && $nbSurroundingLivingCells === 2) ? 1 : 0
                                                    );
                }
                if($nextWorldCells[$i][$j]) {
                    $nbLivingCellsNextGen += 1;
                }
            }
        }

        $this->nbLivingCells = $nbLivingCellsNextGen;
        $this->worldCells = $nextWorldCells;
    }

}
