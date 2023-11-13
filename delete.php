<?php
if(isset($_GET["id"])) {
    $id = $_GET['id'];

    require "serv/config_db.php";

    $sth = $dbh->prepare("DELETE FROM `tasks` WHERE `id`=?");
    $sth->execute([$id]);
}

header('Location:/');
?>
