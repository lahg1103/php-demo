<?php
    $outputString = "Tell us your age, and we will tell you where you will be in five years: ";

    $outputString .= "\n";

    echo $outputString;

    $inputAge = (int)readline();

    $incrementAge = fn( int $age, int $increment) => $age + $increment;

    $newAge = $incrementAge($inputAge, 5);

    $outputString = "You're $inputAge today. In five years you will be $newAge.\n";
    
    echo $outputString;
    
    class Fortune {
        public $age;
        public $increment;

        public function __construct(int $age, int $increment) {
            $this->age = $age;
            $this->increment = $increment;
        }
        private function getFinalAge() {
            return $this->age + $this->increment;
        }
        public function getFortune() {
            $finalAge = $this->getFinalAge();
            echo "You are " . $this->age . " today. In " . $this->increment . " years you will be $finalAge.\n";
        }
    }

    $demoFortune = new Fortune(23, 7);
    echo $demoFortune->getFortune();