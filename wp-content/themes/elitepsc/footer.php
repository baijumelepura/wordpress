<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elitepsc
 */

?>
<?php /*
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'elitepsc' ) ); ?>">
				<?php
				
				printf( esc_html__( 'Proudly powered by %s', 'elitepsc' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'elitepsc' ), 'elitepsc', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
 */ ?>
    <section class="footer-copy-right bg-defult text-white">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p>© 2018, elitepsc.com All Rights Reserved</p>
          </div>
        </div>
      </div>
    </section>




<?php wp_footer(); ?>




</body>
</html>
