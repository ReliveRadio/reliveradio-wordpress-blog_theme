<?php
/**
 * Sidebar
 *
 * Content for our sidebar, provides prompt for logged in users to create widgets
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<!-- Sidebar -->
<aside class="large-3 columns sidebar">

<?php if ( dynamic_sidebar('Sidebar Right') ) : elseif( current_user_can( 'edit_theme_options' ) ) : ?>

	<h4> <b>ReliveRadio</b></h4>
	<p style="color:#808080;"><i class="fa fa-arrow-circle-right"></i> Bleib auf dem laufenden!</p>
	
	<p><img class="img responsive th" src="https://raw.github.com/ReliveRadio/reliveradio-ressources/master/logos/reliveradio.jpg"></p>
	<br>
	<br>
<?php endif; ?>

</aside>



<!-- Sidebar MIX -->
<aside class="large-3 columns sidebar">
	<h5><i class="fa fa-arrow-circle-right"></i> Mix Kanal</h5>
	<p>
		<iframe style="border: none;" name="ReliveRadio Miniplayer" src="http://cm.wikibyte.org/testcodes/neu-chapters/standalone-mini.php?stream=mix&amp;css=mix&amp;color=" height="100" width="100%" marginwidth="10" marginheight="10" scrolling="no" border="0"></iframe>
	</p>
</aside>

<br>

<!-- Sidebar Technik -->
<aside class="large-3 columns sidebar">
	<h5><i class="fa fa-arrow-circle-right"></i> Technik Kanal</h5>
	<p>
		<iframe style="border: none;" name="ReliveRadio Miniplayer" src="http://cm.wikibyte.org/testcodes/neu-chapters/standalone-mini.php?stream=technik&amp;css=technik&amp;color=" height="100" width="100%" marginwidth="10" marginheight="10" scrolling="no" border="0"></iframe>
	</p>
</aside>

<br>

<!-- Sidebar Kultur -->
<aside class="large-3 columns sidebar">
	<h5><i class="fa fa-arrow-circle-right"></i> Kultur Kanal</h5>
	<p>
		<iframe style="border: none;" name="ReliveRadio Miniplayer" src="http://cm.wikibyte.org/testcodes/neu-chapters/standalone-mini.php?stream=kultur&amp;css=kultur&amp;color=" height="100" width="100%" marginwidth="10" marginheight="10" scrolling="no" border="0"></iframe>
	</p>
</aside>


<!-- End Sidebar -->