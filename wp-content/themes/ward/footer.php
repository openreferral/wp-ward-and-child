<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main, .grid and #page div elements.
 *
 * @since 1.0.0
 */
$bavotasan_theme_options = bavotasan_theme_options();

		/* Do not display sidebars if is front page, search or archive */
		if ( is_singular() ) {
			if ( 6 != $bavotasan_theme_options['layout'] )
				get_sidebar();
			?>

		</div> <!-- .row -->
		<?php } ?>
	</div> <!-- #main -->
</div> <!-- #page -->

<footer id="footer" role="contentinfo">
	<div id="footer-content" class="container">
		<div class="row">
			<?php dynamic_sidebar( 'extended-footer' ); ?>
		</div><!-- .row -->

		<div class="row">
			<div class="col-lg-12">
				<?php $class = ( is_active_sidebar( 'extended-footer' ) ) ? ' active' : ''; ?>
				<span class="line<?php echo $class; ?>"></span>
				<span class="pull-left">Copyright &copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a>. All Rights Reserved.</span>
				<span class="credit-link pull-right"><i class="icon-leaf"></i><?php printf( __( 'Designed by %s.', 'ward' ), '<a href="https://themes.bavotasan.com/2013/ward/">bavotasan.com</a>' ); ?></span>
			</div><!-- .col-lg-12 -->
		</div><!-- .row -->
	</div><!-- #footer-content.container -->
</footer><!-- #footer -->

<?php wp_footer(); ?>
</body>
</html>