<?php
/**
 * PHP file to process logic
 */


require_once ("../View/index.phtml");

if(isset($_POST['+'])){

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $result = $num1 + $num2;
    echo "<h1>".$result."</h2>";
}

else if(isset($_POST['-'])){

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $result = $num1 - $num2;
    echo "<h1>".$result."</h2>";

}
else if(isset($_POST['*'])){

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $result = $num1 * $num2;
    echo "<h1>".$result."</h2>";

}
else if(isset($_POST['/'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $result = $num1 / $num2;
    echo "<h1>".$result."</h2>";
}



//var_dump($_POST);