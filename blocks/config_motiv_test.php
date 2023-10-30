<?php
require "blocks/config_db.php";
function addToDb($firstName, $lastName, $answers, $motivationType) {
    global $dbh;
    $query = "INSERT INTO `people` (first_name, last_name, answers, result) VALUES ('$firstName', '$lastName', '$answers', '$motivationType')";
    $sth = $dbh->prepare($query);
    $affectedRowsNumber = $sth->execute();

    if ($affectedRowsNumber > 0) echo "Данные успешно добавлены <br>";
    else echo "error";

    $sth = $dbh->prepare("INSERT INTO motivationTypes(description) VALUES(:desc);");
    $sth->bindValue(':desc', "Для вас главное учеба!");
    $sth->execute();

    $sth = $dbh->prepare("SELECT people.first_name, people.last_name, people.result, motivationTypes.description
    FROM people INNER JOIN motivationTypes ON people.result = motivationTypes.id 
    WHERE people.first_name = '$firstName';");
    $sth->execute();
    $dt = $sth->fetchAll(PDO::FETCH_ASSOC);

    return $dt[0];
}

function getMotivationType($buf) {
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
?>