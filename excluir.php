<?php
include 'conexao.php';

$id = $_GET['id'];
mysqli_query($con, "DELETE FROM times WHERE id=$id");

header("Location: index.php");
?>