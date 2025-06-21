<?php
include "functions.php";
deleteInfo($_GET['id']);
header("Location:index.php");
?>