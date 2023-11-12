<?php
require "blocks/config_db.php";

function getDataByQuery($query)
{
    global $dbh;

    $s = (string)$query;
    $sth = $dbh->prepare($s);
    $sth->execute();
    $dt = $sth->fetchAll(PDO::FETCH_ASSOC);

    return $dt;
}

function addToDbMT($firstName, $lastName, $motivationType)
{
    $queryAdd = "INSERT INTO `mt-people` (first_name, last_name, res) VALUES ('$firstName', '$lastName', '$motivationType')";
    getDataByQuery($queryAdd);

    $queryGet = "SELECT `mt-people`.first_name, `mt-people`.last_name, `mt-people`.res, `mt-types`.type
    FROM `mt-people` INNER JOIN `mt-types` ON `mt-people`.res = `mt-types`.id 
    WHERE `mt-people`.first_name = '$firstName'";
    $dt = getDataByQuery($queryGet);

    return $dt[0];
}

function addToDbNFT($firstName, $lastName, $result)
{
    $queryAdd = "INSERT INTO `nft-people` (first_name, last_name, res) VALUES ('$firstName', '$lastName', '$result')";
    getDataByQuery($queryAdd);

    $queryGet = "SELECT `nft-people`.first_name, `nft-people`.last_name, `nft-people`.res, `nft-types`.type
    FROM `nft-people` INNER JOIN `nft-types` ON `nft-people`.res = `nft-types`.id 
    WHERE `nft-people`.first_name = '$firstName'";
    $dt = getDataByQuery($queryGet);

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

function getNftRes($buf)
{
    $correctAns = ['c', 'b', 'b', 'a', 'c', 'a', 'b', 'b', 'a'];
 
    $countRes = 0;
    for ($i = 0; $i < 9; $i++) {
        if (strcmp($buf[$i], $correctAns[$i]) == 0) $countRes++;
    }

    if ($countRes < 3) return 1;
    else if ($countRes < 6) return 2;
    else if ($countRes <= 9) return 3;
}
?>
