<?php

namespace src;

class Life {

    private $worldCells;

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
