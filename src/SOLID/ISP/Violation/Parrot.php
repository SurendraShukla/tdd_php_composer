<?php

namespace src\SOLID\ISP\Violation;

class Parrot implements BirdInterface {

    public function fly() {
        echo "Parrot is flying";
    }
}
