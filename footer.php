<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hotel-property
 */

?>
    <?php
    if ( is_active_sidebar( 'top-footer-widget' ) ) : ?>
        <footer id="top-footer" class="top-footer">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col justify-content-center">
                        <?php dynamic_sidebar( 'top-footer-widget' ); ?>
                    </div>
                </div>
            </div>
        </footer>
    <?php endif; ?><!-- #top-footer -->


    <footer id="footer" class="site-footer">
        <div class="container">
            <div class="row">
                <?php
                if ( is_active_sidebar( 'main-footer-widget-1' ) ) : ?>
                    <div class="col-sm-12 col-md-6 col-lg-5 col-xl-5">
                        <?php dynamic_sidebar( 'main-footer-widget-1' ); ?>
                    </div>
                <?php endif; ?>

                <?php
                if ( is_active_sidebar( 'main-footer-widget-2' ) ) : ?>
                    <div class="col-sm-6 col-md-6 col-lg-2 col-xl-2">
                        <?php dynamic_sidebar( 'main-footer-widget-2' ); ?>
                    </div>
                <?php endif; ?>

                <?php
                if ( is_active_sidebar( 'main-footer-widget-3' ) ) : ?>
                    <div class="col-sm-6 col-md-6 col-lg-2 col-xl-2">
                        <?php dynamic_sidebar( 'main-footer-widget-3' ); ?>
                    </div>
                <?php endif; ?>

                <?php
                if ( is_active_sidebar( 'main-footer-widget-4' ) ) : ?>
                    <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                        <?php dynamic_sidebar( 'main-footer-widget-4' ); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </footer><!-- #footer -->

    <?php
    if ( is_active_sidebar( 'copyright-footer-widget' ) ) : ?>
        <footer id="copyright" class="copyright-footer">
            <div class="container border-top">
                <div class="row d-flex justify-content-center">
                    <?php dynamic_sidebar( 'copyright-footer-widget' ); ?>
                </div>

            </div>
        </footer><!-- #copyright -->
    <?php endif; ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
