<?php
$conn = new mysqli('db303-mysql', 'root', 'P@ssw0rd', 'northwind');
if($conn->connect_errno) {
    die($conn->connect_error);
}
?>