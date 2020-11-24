 <!-- ======= Footer ======= -->
 <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                        <h4><?= $identitas['title'] ?></h4>
                            <p>
                               Alamat: <br><?= $identitas['alamattoko'] ?><br><br>
                                <strong>Phone:</strong> <?= $identitas['nomortoko'] ?><br>
                                <strong>Email:</strong> <?= $identitas['emailtoko'] ?><br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="https://twitter.com/login?lang=id" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="https://www.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="https://www.google-plus.com/" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="https://www.linkedin.com/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                      
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Search">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span> Suka Maju</span></strong>. Sidoarjo Jawa Timur
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
                Designed by <a href="https://twitter.com/nottwithme_">Firas</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/venobox/venobox.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>/assets/js/main.js"></script>

</body>

</html>