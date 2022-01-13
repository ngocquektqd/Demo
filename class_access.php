<?php

    class Cars{

        public $wheel_count = 4;
        private $door_count = 4;
        protected $set_count = 2;

        function car_detail()
        {
            echo $this->wheel_count."<br>";
            echo $this->door_count."<br>";
            echo $this->set_count."<br>";
        }
    }
    $bmw = new Cars();
    echo $bmw->wheel_count."<br>";
    echo $bmw->car_detail();
    $bmw = new Cars();

    class Truck extends Cars{
        function truck_detail(){
            echo $this->wheel_count;
            echo $this->set_count;
        }
    }
    $suzuki = new Truck();


?>