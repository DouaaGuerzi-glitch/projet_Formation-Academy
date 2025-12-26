<?php
include("php/config.php");
$id=intval($_GET['id']);
$conn->query("DELETE FROM inscriptions WHERE id=$id");
header("Location: admin.php");
?>