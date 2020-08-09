<?php //include("head.php"); 

$color = "";
if (!empty($_POST)) {
    $color = $_POST["color"];
}


    setcookie("color", $color, time() + 60*60);

    if (isset($_COOKIE["color"])) {
        echo "si";
    
    }
?>

<div class=container style="background-color:<?= isset($_COOKIE["color"]) ? $_COOKIE["color"] : "";?>" >

<h1>Este es un home</h1>


<marquee behavior="" direction="">este es un marquee</marquee>

<form action="home.php" method="post">
    <label for="color">Elegi un color</label>
    <input type="text" name="color">
    <input type="submit">

</form>



</div>