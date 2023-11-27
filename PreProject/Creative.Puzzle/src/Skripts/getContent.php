<?php

if(!isset($_SESSION)){
	session_start();
}

$host="localhost";
$user="maxhagn";
$password="";
$db="creativepuzzle";

$conn=mysqli_connect($host,$user,$password,$db);
$mysqli = new mysqli("$host","$user",$password,$db);
$user = $_SESSION["user"];
$ausgabe = $mysqli->query("SELECT * FROM welcomepage");

    while ($datensatz=mysqli_fetch_assoc($ausgabe)) {

        $header1 = $mysqli->real_escape_string($datensatz["header1"]);
        $header2 = $mysqli->real_escape_string($datensatz["header2"]);
        $text = $mysqli->real_escape_string($datensatz["text"]);
        $image = $datensatz["image"];
        $size = $datensatz["size"];


    if ($size == 1){
        echo "<div class='column-ld-4 column-md-6 column-sd-12 column-xsd-12 box'> <h2>$header1<small> $header2</small><img src='$image' class='img-res'></h2><p>$text</p></div>";
    } else {
    echo "<div class='column-ld-6 column-md-6 column-sd-12 column-xsd-12 box'> <h2>$header1<small> $header2</small><img src='$image' class='img-res'></h2><p>$text</p></div>";
        }

}

?>

