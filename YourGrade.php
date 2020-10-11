<?php

if (isset($_POST["var"]) && !empty($_POST["var"])) {
    echo $var = $_POST["var"];
    echo "<br>";

    switch ($var) {
        case ($var <= 69): echo "F"; break;
        case ($var <= 79): echo "C"; break;
        case ($var <= 89): echo "B"; break;
        case ($var <= 100): echo "A"; break;
        default: echo "something wrong";
    }

}


?>

    <form action="" method="post">
        <input type="number" name="var" >
        <input type="submit" name="submit" value="submit">
    </form>
