<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my-assignment
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
	<!--		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'my-assignment' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'my-assignment' ), 'WordPress' );
				?> 
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'my-assignment' ), 'my-assignment', '<a href="http://underscores.me/">Underscores.me</a>' );
				?> -->
				<div class="sign-up">
    <input type="text" placeholder="Name" name="name" required>
    <input type="text" placeholder="Lastname" name="last name" required>
    <input type="text" placeholder="Email address" name="mail" required>
    <label>
      <input class = "button" type="submit" checked="checked" name="submit">
    </label>
  </div>

				<div class="footer-links">
					<p>&copy Braintraffic</p>
					<a class="footer-links" href="#">Confab Conference</a>
					<a class="footer-links" href="#"> Button Conference</a>
					<a class="footer-links" href="#">Content Strategy Podcast</a>
					<a class="footer-links" href="#">Conatct Us</a>
					<a class="footer-links" href="#">Newsletter</a>
					<a class="footer-links" href="#">Twitter</a>
					<a class="footer-links" href="#">LinkedIn</a>
				</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>
