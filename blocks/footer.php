<footer class="bg-dark">
    <div class="container py-5 text-white-50">
        <div class="row justify-content-between border-bottom">
            <div class="col-md">
                <div class="d-flex flex-row align-items-center">
                    <img src="/img/white-logo.svg" alt="logo">
                    <h5 class="text-white logo-text">AkhmadNFT</h5>
                </div>
            </div>
            <div class="col-md">
                <ul class="d-flex justify-content-between list-unstyled text-small mt-3">
                    <li><a class="link-secondary text-decoration-none" href="#">Privacy Policy</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Term & Conditions</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">About Us</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="row align-items-center mt-3">
            <div class="col-md">
                <p>© 2023 EATLY All Rights Reserved.</p>
            </div>
            <div class="col-md-3">
                <ul class="d-flex justify-content-between list-unstyled">
                    <?php for ($i = 0; $i < 4; $i++) : ?>
                        <li>
                            <a class="link-secondary text-decoration-none" href="#">
                                <img src="/img/link-<?php echo $i + 1 ?>.svg" alt="link">
                            </a>
                        </li>
                    <?php endfor; ?>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>