<div class="container w-100 mt-3 p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
    <h5>Результат</h5>
    <p>
        <?= $firstName . ' ' . $lastName ?> <br>
        <?php
        if ($isMotivationTest === true) {
            echo "Ваш тип мотивации : " . $motivationType;
            echo "<br>" . $resMt['type'];
        } else {
            echo "Количество правильных ответов : " . $countRes;
            echo "<br>" . $resNFT['type'];
        }
        ?>
    </p>
    <a href="/" class="btn btn-dark">На главную</a>
</div>