<?php require "blocks/header.php" ?>

<section class="container-fuild overflow-hidden">
    <div class="row align-items-center">
        <div class="col-md-6 pl-7">
            <div class="card-body mb-3">
                <div class="strip"></div>
                <h1 class="card-title">Discover And<br>Create NFTs</h1>
                <p class="card-text">Discover, Create and Sell NFTs On Our NFT Marketplace <br>
                    With Over Thousands Of NFTs And Get a $20 bonus.</p>
                <a href="#more" class="btn btn-dark text-uppercase">Explore More</a>
                <a href="#todolist" class="btn btn-outline-secondary text-uppercase">create task</a>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col">
                    <h3>430K+</h3>
                    <p>Art Works</p>
                </div>
                <div class="col">
                    <h3>159K+</h3>
                    <p>Creators</p>
                </div>
                <div class="col">
                    <h3>87K+</h3>
                    <p>Collections</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 align-self-end">
            <img src="/img/Hero Header.jpg" class="rounded float-end w-100" alt="nft">
        </div>
    </div>
</section>

<section class="container-fuild overflow-hidden bg-body-tertiary">
    <a name="more"></a>
    <h3 class="text-center text-gray mt-3 mb-5">Weekly - Top NFT</h3>
    <div id="carouselExample" class="carousel slide mb-5">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container-fuild overflow-hidden">
                    <div class="row align-items-center flex-nowrap">
                        <?php for ($i = 0; $i < 5; $i++) require "blocks/nft_card.php" ?>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container-fuild overflow-hidden">
                    <div class="row align-items-center flex-nowrap">
                        <?php $i = 4;
                        require "blocks/nft_card.php"; ?>
                        <?php for ($i = 0; $i < 4; $i++) require "blocks/nft_card.php" ?>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container-fuild overflow-hidden">
                    <div class="row align-items-center flex-nowrap">
                        <?php for ($i = 3; $i < 5; $i++) require "blocks/nft_card.php" ?>
                        <?php for ($i = 0; $i < 3; $i++) require "blocks/nft_card.php" ?>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section class="container">
    <a name="todolist"></a>
    <div class="card bg-dark text-white border rounded-5 p-5 my-5">
        <div class="card-body">
            <h2 class="card-title">TodoList</h2>
            <div class="d-flex flex-row justify-content-between flex-lg-nowrap flex-wrap gap-5">
                <?php
                require "serv/config_db.php";
                require "serv/funs_test.php";

                if (isset($_POST['task']) && isset($_POST['deadline'])) {
                    $task = $_POST['task'];
                    $deadline = $_POST['deadline'];
                    $query = "INSERT INTO `tasks` (task, deadline, isComp) VALUES ('$task', '$deadline', false)";
                    getDataByQuery($query);
                }

                $query = "SELECT * FROM `tasks` ORDER BY `id` DESC";
                $array = getDataByQuery($query);
                ?>

                <form method="post" class="w-lg-50 w-100">
                    <input type="text" name="task" id="task" placeholder="Your task" class="form-control my-3">
                    <input type="datetime-local" name="deadline" id="deadline" placeholder="Your deadline" class="form-control mb-2">
                    <div class="d-flex justify-content-lg-start justify-content-center">
                        <button type="submit" class="btn btn-light btn-connect my-3">Save task</button>
                    </div>
                </form>

                <div class="w-lg-50 w-100">
                    <div class="d-flex justify-content-lg-start justify-content-center btn-group" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-outline-light" data-bs-toggle="collapse" data-bs-target="#all" aria-expanded="false" aria-controls="all">All tasks</button>
                        <button type="button" class="btn btn-outline-light" data-bs-toggle="collapse" data-bs-target="#notCompleted" aria-expanded="false" aria-controls="notCompleted">Not completed</button>
                        <button type="button" class="btn btn-outline-light" data-bs-toggle="collapse" data-bs-target="#completed" aria-expanded="false" aria-controls="completed">Completed</button>
                    </div>
                    <div class="collapse mt-2" id="all">
                        <ul class="list-group overflow-auto text-dark" style="height: 150px;">
                            <?php foreach ($array as $key => $val) require "blocks/task.php" ?>
                        </ul>
                    </div>
                    <div class="collapse mt-2" id="notCompleted">
                        <ul class="list-group overflow-auto text-dark" style="height: 150px;">
                            <?php foreach ($array as $key => $val) {
                                if ($val['isComp'] == 1) continue;
                                require "blocks/task.php";
                            } ?>
                        </ul>
                    </div>
                    <div class="collapse mt-2" id="completed">
                        <ul class="list-group overflow-auto text-dark" style="height: 150px;">
                            <?php foreach ($array as $key => $val) {
                                if ($val['isComp'] == 0) continue;
                                require "blocks/task.php";
                            } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require "blocks/footer.php" ?>