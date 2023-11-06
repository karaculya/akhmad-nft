<?php
require "blocks/config_db.php";
function addToDbMT($firstName, $lastName, $answers, $motivationType)
{
    global $dbh;
    $query = "INSERT INTO `mt-people` (first_name, last_name, answers, result) VALUES ('$firstName', '$lastName', '$answers', '$motivationType')";
    $sth = $dbh->prepare($query);
    $sth->execute();

    $sth = $dbh->prepare("SELECT `mt-people`.first_name, `mt-people`.last_name, `mt-people`.result, `mt-types`.type
    FROM `mt-people` INNER JOIN `mt-types` ON `mt-people`.result = `mt-types`.id 
    WHERE `mt-people`.first_name = '$firstName'");
    $sth->execute();
    $dt = $sth->fetchAll(PDO::FETCH_ASSOC);

    return $dt[0];
}

function addToDbNFT($firstName, $lastName, $result)
{
    global $dbh;
    $query = "INSERT INTO `nft-people` (first_name, last_name, res) VALUES ('$firstName', '$lastName', '$result')";
    $sth = $dbh->prepare($query);
    $sth->execute();

    $sth = $dbh->prepare("SELECT `nft-people`.first_name, `nft-people`.last_name, `nft-people`.res, `nft-types`.type
    FROM `nft-people` INNER JOIN `nft-types` ON `nft-people`.res = `nft-types`.id 
    WHERE `nft-people`.first_name = '$firstName'");
    $sth->execute();
    $dt = $sth->fetchAll(PDO::FETCH_ASSOC);

    return $dt[0];
}

function getMotivationType($buf)
{
    $template = [
        [1, 2, 3, 4, 5],
        [3, 2, 5, 4, 1],
        [5, 1, 2, 3, 4],
        [1, 4, 3, 5, 2],
        [2, 1, 3, 5, 4],
        [2, 1, 3, 4, 5],
        [3, 2, 1, 5, 4],
        [4, 1, 3, 5, 2],
        [3, 1, 4, 2, 5],
        [3, 2, 4, 1, 5],
        [1, 2, 4, 5, 3],
        [2, 3, 5, 1, 4],
        [1, 3, 2, 4, 5],
        [4, 3, 2, 1, 5],
    ];

    $marks = [0, 0, 0, 0, 0];
    $s = (string)$buf;
    for ($i = 0; $i < 14; $i++) {
        $pr = substr($s, $i, 1);
        for ($j = 0; $j < 5; $j++) {
            if ((int)$pr == $template[$i][$j]) {
                $marks[$j] += 1;
            }
        }
    }

    $indexMax = 0;
    $maxValue = $marks[0];
    for ($i = 0; $i < 5; $i++) {
        if ($marks[$i] > $maxValue) {
            $maxValue = $marks[$i];
            $indexMax = $i;
        }
    }
    return $indexMax + 1;
}
