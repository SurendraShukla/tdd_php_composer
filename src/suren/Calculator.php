<?php

namespace src\suren;

class Calculator {

    public function sum($a, $b) {
        return $a+$b;
    }

    public function multiply($a, $b) {
        return $a*$b;
    }

    public function divide($a, $b) {
        return $a/$b;
    }

    public function rest($a, $b) {
        return $a-$b;
    }

}