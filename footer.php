<?php
/**
 * footer.php
 *
 * The template for displaying the footer.
 */
?>

	<!-- FOOTER -->
	<footer class="main-footer">
			<?php get_sidebar( 'footer' ); ?>

			<div class="social">
				<a href="https://www.facebook.com/CaFerminet" target="_blank">
						<svg class="icon">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#icon-facebook"></use>
						</svg></a>
				<a href="mailto:sergiofores@gmail.com">
					<svg class="icon">
						<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#icon-envelope"></use>
				</svg></a>
			</div>

			<div class="copyright">
				<p>
					&copy; <?php echo date( 'Y' ); ?>
					<a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
					<?php _e( 'All rights reserved.', 'alpha' ); ?>
				</p>
			</div> <!-- end copyright -->
			<?php edit_post_link( __( 'Edit', 'alpha' ), '{{ ', ' }}' ); ?>

	</footer> <!-- end site-footer -->

	<?php wp_footer(); ?>
</body>
</html>
