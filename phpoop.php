<?php

    Class Car{

        function  gretting(){
        echo "Hello Student";
        }

        function gretting2(){

        }

    }

    $the_method = get_class_methods('Car');
    foreach ($the_method as $method){
        echo $method."<br>";
    }

//    $my_class = get_declared_classes();
//
//    foreach ($my_class as $class){
//        echo $class."<br>";
//    }

?>
