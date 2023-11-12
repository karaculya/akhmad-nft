<?php
$id = $_GET['id'];

require "blocks/config_db.php";

$sth = $dbh->prepare("UPDATE `tasks` SET `isComp` = true WHERE `id`=?");
$sth->execute([$id]);
header('Location:/');
?>