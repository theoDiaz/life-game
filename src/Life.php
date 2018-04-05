<?php

namespace src;

class Life {

    private $worldCells;

    // here we initialize the array of cells
    // 0 for a dead cell, 1 for a living one
    public function __construct($worldLength) {
        for($i = 0; $i < $worldLength; $i++) {
            for($j = 0; $j < $worldLength; $j++) {
                $this->worldCells[$i][$j] = rand(0,1);
            }
        }
    }

    public function getWorldCells() {
        return $this->worldCells;
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

}
