<?php
    try {
        $dbh = new PDO('mysql:dbname=coursework;host=localhost', 'root', '');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
?>