<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DiveSea</title>
    <link href="/img/Logo.svg" rel="shortcut icon" type="image/svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="/styles/main.css" rel="stylesheet">
</head>

<body>
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
                        <div class="row align-items-center">
                            <?php
                            for ($i = 0; $i < 5; $i++) :
                            ?>
                                <div class="col">
                                    <div class="card">
                                        <img src="/img/nft-<?php echo $i ?>.svg" class="card-img-top" alt="nft">
                                        <div class="card-body">
                                            <h5 class="card-title text-start">
                                                <?php
                                                if ($i > 2) echo "NuEvey";
                                                else echo "Sun-Glass";
                                                ?>
                                            </h5>
                                            <div class="d-flex justify-content-between card-text">
                                                <span class="text-gray">Current bid</span>
                                                <p>$
                                                    <?php
                                                    if ($i > 2) echo " 1.25";
                                                    else echo " 1.75";
                                                    ?>
                                                </p>
                                            </div>
                                            <a href="#" class="btn btn-dark mx-auto">PLACE BID</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fuild overflow-hidden">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="card">
                                    <img src="/img/nft-4.svg" class="card-img-top" alt="nft">
                                    <div class="card-body">
                                        <h5 class="card-title text-start">NuEvey</h5>
                                        <div class="d-flex justify-content-between card-text">
                                            <span class="text-gray">Current bid</span>
                                            <p>$ 1.25</p>
                                        </div>
                                        <a href="#" class="btn btn-dark mx-auto">PLACE BID</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                            for ($i = 0; $i < 4; $i++) :
                            ?>
                                <div class="col">
                                    <div class="card">
                                        <img src="/img/nft-<?php echo $i ?>.svg" class="card-img-top" alt="nft">
                                        <div class="card-body">
                                            <h5 class="card-title text-start">
                                                <?php
                                                if ($i > 2) echo "NuEvey";
                                                else echo "Sun-Glass";
                                                ?>
                                            </h5>
                                            <div class="d-flex justify-content-between card-text">
                                                <span class="text-gray">Current bid</span>
                                                <p>$
                                                    <?php
                                                    if ($i > 2) echo " 1.25";
                                                    else echo " 1.75";
                                                    ?>
                                                </p>
                                            </div>
                                            <a href="#" class="btn btn-dark mx-auto">PLACE BID</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fuild overflow-hidden">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="card">
                                    <img src="/img/nft-3.svg" class="card-img-top" alt="nft">
                                    <div class="card-body">
                                        <h5 class="card-title text-start">NuEvey</h5>
                                        <div class="d-flex justify-content-between card-text">
                                            <span class="text-gray">Current bid</span>
                                            <p>$ 1.25</p>
                                        </div>
                                        <a href="#" class="btn btn-dark mx-auto">PLACE BID</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="/img/nft-4.svg" class="card-img-top" alt="nft">
                                    <div class="card-body">
                                        <h5 class="card-title text-start">NuEvey</h5>
                                        <div class="d-flex justify-content-between card-text">
                                            <span class="text-gray">Current bid</span>
                                            <p>$ 1.25</p>
                                        </div>
                                        <a href="#" class="btn btn-dark mx-auto">PLACE BID</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                            for ($i = 0; $i < 3; $i++) :
                            ?>
                                <div class="col">
                                    <div class="card">
                                        <img src="/img/nft-<?php echo $i ?>.svg" class="card-img-top" alt="nft">
                                        <div class="card-body">
                                            <h5 class="card-title text-start">Sun-Glass</h5>
                                            <div class="d-flex justify-content-between card-text">
                                                <span class="text-gray">Current bid</span>
                                                <p>$ 1.75</p>
                                            </div>
                                            <a href="#" class="btn btn-dark mx-auto">PLACE BID</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>
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
                <div class="d-flex flex-row justify-content-between gap-5">
                    <form method="post" class="w-50">
                        <input type="text" name="task" id="task" placeholder="Your task" class="form-control my-3">
                        <input type="datetime-local" name="deadline" id="deadline" placeholder="Your deadline" class="form-control mb-2">
                        <button type="submit" class="btn btn-light btn-connect my-3">Save task</button>
                    </form>
                    <div class="w-50">
                        <?php
                        require "blocks/config_db.php";
                        require "blocks/funs_test.php";

                        $task = $_POST['task'];
                        $deadline = $_POST['deadline'];
                        if ($task != null || $deadline != null) {
                            $query = "INSERT INTO `tasks` (task, deadline, isComp) VALUES ('$task', '$deadline', false)";
                            getDataByQuery($query);
                        }

                        $query = "SELECT * FROM `tasks` ORDER BY `id` DESC";
                        $array = getDataByQuery($query);
                        ?>

                        <p>
                            <a class="btn btn-light" data-bs-toggle="collapse" href="#all" role="button" aria-expanded="false" aria-controls="collapseExample">
                                All tasks
                            </a>
                            <a class="btn btn-light" data-bs-toggle="collapse" href="#notCompleted" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Not completed
                            </a>
                            <a class="btn btn-light" data-bs-toggle="collapse" href="#completed" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Completed
                            </a>
                        </p>
                        <div class="collapse" id="all">
                            <ul class="list-group overflow-auto text-dark" style="height: 150px;">
                                <?php foreach ($array as $key => $val) : ?>
                                    <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                                        <b><?= $val['task'] . ' ' . $val['deadline'] ?></b>
                                        <div>
                                            <a href='/update.php?id=<?= $val['id'] ?>'>
                                                <button type="button" class="btn btn-info">Complete</button>
                                            </a>
                                            <a href='/delete.php?id=<?= $val['id'] ?>'>
                                                <button type="button" class="btn btn-info">Delete</button>
                                            </a>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="collapse" id="notCompleted">
                            <ul class="list-group overflow-auto text-dark" style="height: 150px;">
                                <?php foreach ($array as $key => $val) : ?>
                                    <?php if ($val['isComp'] == 1) continue; ?>
                                    <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                                        <b><?= $val['task'] . ' ' . $val['deadline'] ?></b>
                                        <div>
                                            <a href='/update.php?id=<?= $val['id'] ?>'>
                                                <button type="button" class="btn btn-info">Complete</button>
                                            </a>
                                            <a href='/delete.php?id=<?= $val['id'] ?>'>
                                                <button type="button" class="btn btn-info">Delete</button>
                                            </a>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="collapse" id="completed">
                            <ul class="list-group overflow-auto text-dark" style="height: 150px;">
                                <?php foreach ($array as $key => $val) : ?>
                                    <?php if ($val['isComp'] == 0) continue; ?>
                                    <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                                        <b><?= $val['task'] . ' ' . $val['deadline'] ?></b>
                                        <div>
                                            <a href='/update.php?id=<?= $val['id'] ?>'>
                                                <button type="button" class="btn btn-info">Complete</button>
                                            </a>
                                            <a href='/delete.php?id=<?= $val['id'] ?>'>
                                                <button type="button" class="btn btn-info">Delete</button>
                                            </a>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require "blocks/footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>