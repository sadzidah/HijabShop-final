<!--
Name:          Sadžida Halvadžić
Course:        CS412 Web Application Development
Assigment:     Hijab shop
Due Date:      11.01.2020.
Purpose:       The purpose of this project is to make page for hijab shop
 -->
 <?php
require 'db.php';

$name = $_POST["firstname"];
$surname = $_POST["lastname"];
$email = $_POST["email"];
$comment = $_POST["comment"];
$address = $_POST["address"];
$city = $_POST["city"];


$sql = "INSERT INTO `contact` (`firstname`, `lastname`, `email`, `address`, `city`, `comment`) "
            . "VALUES ('$name','$surname','$email','$address','$city','$comment')";
$mysqli->query($sql);
?>


<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="stylesheet.css">
    <title>Submited</title>
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">

    <nav class=" navbar navbar-expand-lg bg-light navbar-light fixed-top ">
            <ul class="navbar-nav ">
                <li class="nav-item "><a class="nav-link " href="index.html">About us &nbsp;&nbsp;</a></li>
                <li class="nav-item "><a class="nav-link " href="offers.html">Our offer &nbsp;&nbsp;</a></li>
                <li class="nav-item "><a class="nav-link " href="shop.html">Shop here &nbsp;&nbsp;</a></li>
                <li class="nav-item "><a class="nav-link " href="contact.html">Contact us &nbsp;&nbsp;</a></li>
            </ul>
    </nav>

    <hr>
    <hr>
    <hr>
    <h2>Submition successful.</h2>
  </body>
</html>
