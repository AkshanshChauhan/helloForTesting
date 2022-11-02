<?php
$name = $_POST["name"];
$pass = $_POST["pass"];

echo $name . "hello";
$account = fopen($name . ".html", "w");
fwrite($account, "<h1>$name</h1><p>Welcome to your Home Page</p>");
fclose($account);
?>