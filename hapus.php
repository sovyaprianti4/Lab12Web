<?php
$db = new Database();
$id = $_GET['id'];

$db->query("DELETE FROM artikel WHERE id='$id'");
header("Location: ../artikel/index");
