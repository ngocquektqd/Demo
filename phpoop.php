<?php

    class Cars{

        var $wheel_count = 4;

        function gretting()
        {
            echo "Hello";
        }
    }

    $bmw = new Cars();

    class Trucks extends Cars{

    }

    $tacoma = new Trucks();
    echo $tacoma->wheel_count;





?>