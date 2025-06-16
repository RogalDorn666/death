<form method = "post">
    <input name = "namn" placeholder = "Enter your name"><br>
    <input name = "favoritdjur" placeholder = "Enter animal"><br>
    <button type = "submit">send</button><br>
</form>




<?php


echo "==== POST ==== ";
print_r($_POST);

echo "==== SERVER ==== ";
print_r($_GET);

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $namn = $_POST["namn"];
    $favoritdjur = $_POST["favoritdjur"];

    echo "name:" . htmlspecialchars($namn) . "<br>";
    echo "animal:" .htmlspecialchars($favoritdjur);
}

// $name = $_POST['name']; //tar värde från input name -> metod
// $name = $_GET['name'];
// $name = $_REQUEST['name'];
// $method = $_SERVER['REQUEST_METHOD'];




?>
