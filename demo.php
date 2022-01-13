<?php include ("variables.php");?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<?php
include ("navbar.php");
?>
<center>
<h1>

    <?php
    echo "Hello World, My name is Le Ngoc Que.";
    $firt_name= "Que";
    $favorite_number = 8;
    $last_name = "Le";

    $number_1 = 1;
    $number_2 = 2;
    $number_3 = 3;
    $number_4 = 4;
    $number_40 = 40;

    $list_last_name = array("Le", "Nguyen", "Pham", "Tran");
    $list_first_name = array("John", "Dan", "Mary", "Sam");
    $fav_pizza = array(
            "John"=>"Pepperoni",
            "Steve"=>"Cheese",
            "Mary"=>"Mushroom"
    );


    echo "<br/>";
    echo $firt_name;
    echo "<br/>";
    echo $favorite_number;
    echo "<br/>";
    echo $number_1 + $number_2 + $number_3;
    echo "<br/>";
    echo $number_40++;
    echo "<br/>";
    echo ++$number_40;
    echo "<br/>";
    echo $firt_name." ".$last_name."<br/>";

    var_dump($number_1 == $number_2);
    echo "And then she said: \"You are beautiful\"";
    echo "<br/>";
    if ($firt_name == "Que"){
        echo "Hello ".$firt_name."! How are you?";
    }
    echo "<br/>";
    echo $list_first_name[0]."<br/>";
    echo "this is list of first name <br/>";
    for ($i=0; $i<=3;$i++){
        echo $list_first_name[$i]."<br/>";
    }

    foreach ($list_first_name as &$value){
        echo $value;
    }

    echo "<br/>";

    for ($i=0; $i<=3; $i++){
        for ($j=0; $j<=3; $j++){
            echo $list_first_name[$i]." ".$list_last_name[$j]."<br/>";
        }
    }

    echo $fav_pizza['John']."<br/>";
    echo count($fav_pizza)."<br/>";
// Loop -- While;
    $counter = 0;
    while ($counter <10 ){
        echo "The count is: ".$counter."<br/>";
        $counter++;
    }

// Function
    function helloThere($name){
        echo "Hello There $name! <br/>";
    }
    helloThere("Que");

    function number($num_1, $num_2){
        return $num_1+$num_2;
    }

    $answer = number(45,5);
    echo $answer;
    echo "<br/>";

    echo date("Y/M");

    include ("footer.php");

    ?>

</h1>
</center>
<?php echo $last_name ?>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>