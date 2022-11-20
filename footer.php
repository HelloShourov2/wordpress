<?php
/* =============================
    Theme Footer Section
================================ */

?>



<footer id="footer_area">
    <section id="footer" class="">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php dynamic_sidebar( 'footer-1' ) ?>
                </div>
                <div class="col-md-4">
                    <?php dynamic_sidebar( 'footer-2' ) ?>
                </div>
                <div class="col-md-4">
                    <?php dynamic_sidebar( 'footer-3' ) ?>
                </div>
            </div>
        </div>
    </section>
    <section id="copyright_area" class="sticky-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="#" class="text-decoration-none">
                        <p><?php echo get_theme_mod('wl_copyright_section'); ?></p>
                    </a>
                </div>
            </div>
        </div>
    </section>
</footer>

<?php wp_footer() ?>
</body>

</html>