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
            <div class="d-flex justify-content-between flex-lg-nowrap flex-wrap card-text">
                <span class="text-gray">Current bid</span>
                <p>$
                    <?php
                    if ($i > 2) echo " 1.25";
                    else echo " 1.75";
                    ?>
                </p>
            </div>
            <a href="#" class="btn btn-dark text-truncate mx-auto">PLACE BID</a>
        </div>
    </div>
</div>