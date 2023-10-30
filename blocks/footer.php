<footer class="bg-dark">
    <div class="container py-5 text-white-50">
        <div class="row border-bottom">
            <div class="col-12 col-md">
                <div class="d-flex flex-row align-items-center">
                    <img src="/img/white-logo.svg" alt="logo">
                    <h5 class="text-white logo-text">DiveSea</h5>
                </div>
            </div>
            <div class="col-6 col-md">
                <ul class="d-lg-flex list-unstyled text-small p-3">
                    <li><a class="link-secondary text-decoration-none mx-3" href="#">Privacy Policy</a></li>
                    <li><a class="link-secondary text-decoration-none mx-3" href="#">Term & Conditions</a></li>
                    <li><a class="link-secondary text-decoration-none mx-3" href="#">About Us</a></li>
                    <li><a class="link-secondary text-decoration-none mx-3" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="row align-items-center mt-4">
            <div class="col-12 col-md">
                <p>© 2023 EATLY All Rights Reserved.</p>
            </div>
            <div class="col-6 col-md-3">
                <ul class="d-lg-flex list-unstyled text-small">
                    <?php for ($i = 0; $i < 4; $i++) : ?>
                        <li>
                            <a class="link-secondary text-decoration-none mx-3" href="#">
                                <img src="/img/link-<?php echo $i + 1 ?>.svg" alt="link">
                            </a>
                        </li>
                    <?php endfor; ?>
                </ul>
            </div>
        </div>
    </div>
</footer>