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
			<div class="col-lg-6">
				<?php $class = ( is_active_sidebar( 'extended-footer' ) ) ? ' active' : ''; ?>
				<span >Copyright &copy; <?php echo date( 'Y' ); ?>&nbsp; </span> 
				<span >
				  <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">
				    <img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" />
				  </a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>
				</span>
			</div>

			<div class='col-lg-6'>
				<span class="credit-link pull-right"><i class="icon-leaf"></i><?php printf( __( 'Designed by %s.', 'ward' ), '<a href="https://themes.bavotasan.com/2013/ward/">bavotasan.com</a>'); printf( __('Tweaked and hosted by %s.', 'ward'), '<a href="http://www.dstrategies.org/">Digital Strategies</a> and <a href="http://www.sarapis.org/">Sarapis</a>'); ?></span>
			</div><!-- .col-lg-12 -->
		</div><!-- .row -->
	</div><!-- #footer-content.container -->
</footer><!-- #footer -->

<?php wp_footer(); ?>
</body>
</html>