<?php

$con = new mysqli('localhost', 'root', 'nutty097', 'crudoperation');

if (!$con) {
    die(mysqli_error($con));
} 

?>