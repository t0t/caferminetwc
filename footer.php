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

			<div class="copyright">
				<p>
					&copy; <?php echo date( 'Y' ); ?>
					<a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
					<?php _e( 'All rights reserved.', 'alpha' ); ?>
				</p>
			</div> <!-- end copyright -->

	</footer> <!-- end site-footer -->

	<?php wp_footer(); ?>
</body>
</html>
