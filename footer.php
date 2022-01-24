<footer>
    <div class="container">
        <div class="aboute">
            <?php if ( is_active_sidebar( 'pishro_footer_one' ) ) {
                dynamic_sidebar('pishro_footer_one');
            }
            ?>
        </div>

        <div class="f-menu">
            <?php if ( is_active_sidebar( 'pishro_footer_two' ) ) {
                dynamic_sidebar('pishro_footer_two');
            }
            ?>
        </div>

        <div class="f-menu">
            <?php if ( is_active_sidebar( 'pishro_footer_three' ) ) {
                dynamic_sidebar('pishro_footer_three');
            }
            ?>
        </div>
    </div>

    <div class="copy-right">
        <div class="container">
            <p> تمامی حقوق و مطالب سایت برای وبسافت3 محفوظ می باشد و کپی برداری از مطالب رایگان باذکر منبع آزاد است. </p>
            <div class="social">
                <a href="#"><i class="fab fa-facebook"></i> </a>
                <a href="#"><i class="fab fa-twitter"></i> </a>
                <a href="#"><i class="fab fa-telegram"></i> </a>
                <a href="#"><i class="fab fa-linkedin"></i> </a>
                <a href="#"><i class="fab fa-youtube"></i> </a>
            </div>
        </div>
    </div>
</footer>


<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>

<?php wp_footer(); ?>
</body>
</html>
