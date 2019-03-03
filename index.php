<?php
    class Fruit {

        // Declare class properties
        public $weight = 0;

        // Declare constructor to create new Fruit
        public function __construct($weight) {
            $this->weight = $weight;
        }

        // Public function to get the weight
        public function getWeight() {
            return 'This fruit weighs ' . $this->weight . ' grams.';
        }

        public function setWeight($newWeight) {
            $this->weight = $newWeight;
        }

    }

    $fruit = new Fruit(250);
    // echo($fruit->getWeight());
    echo '<br>';
    
    $fruit->weight = 300; // changing value directly
    // echo($fruit->getWeight());
    echo '<br>';
    
    $fruit->setWeight(400); // changing value through a function
    // echo($fruit->getWeight());
    echo '<br>';


    class Apple extends Fruit {

        public $color = "";

        function __construct($weight, $color) {
            // this will call the parent constructor
            parent::__construct($weight);
            $this->color = $color;
        }

        public function getColor() {
            return 'This apple is ' . $this->color . '.';
        }

        public function getWeight() {
            return 'This apple weighs ' . $this->weight . ' grams.';
        }
    }

    $apple = new Apple(300, 'red');

    echo($apple->getWeight());
    echo($apple->getColor());
    





 
?>