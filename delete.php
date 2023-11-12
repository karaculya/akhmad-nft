<?php
$id = $_GET['id'];

require "blocks/config_db.php";

$sth = $dbh->prepare("DELETE FROM `tasks` WHERE `id`=?");
$sth->execute([$id]);
header('Location:/');
?>
