<?php
if (isset($_GET["id"])) {
    $id = $_GET['id'];

    require "serv/config_db.php";

    $sth = $dbh->prepare("UPDATE `tasks` SET `isComp` = true WHERE `id`=?");
    $sth->execute([$id]);
}

header('Location:/');
?>