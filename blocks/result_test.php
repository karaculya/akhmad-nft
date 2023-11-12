<div class="container text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-5 p-5">
    <h5>Результат</h5>
    <p>
        <b><?= $firstName . ' ' . $lastName ?></b> <br>
        <?php
        if ($isMotivationTest === true) {
            echo $resMt['type'];
        } else {
            echo $resNFT['type'];
        }
        ?>
    </p>
    <a href="/" class="btn btn-dark">На главную</a>
</div>