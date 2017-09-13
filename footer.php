<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DanfossProject
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<h3>Vær social <strong>Deltag aktivt</strong></h3>


<!-- Split dropup button -->
<div class="dropdown_nav">
	<?php wp_nav_menu( array(
		'theme_location' => 'secondary',
		'depth'				=> 2,
	'container'			=> 'div',
	'menu_class'		=> 'dropup',
    'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
    'walker'			=> new WP_Bootstrap_Navwalker()


	) );
	?>

	<!--
<div class="btn-group dropup">
  <div class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   PRODUKTKATALOG
  </div>

  <div class="dropdown-menu">

		<button class="dropdown-item" type="button">Action</button>
    <button class="dropdown-item" type="button">Another action</button>
    <button class="dropdown-item" type="button">Something else here</button>
  </div>

	<div class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   ERHVERV
  </div>

  <div class="dropdown-menu">

		<button class="dropdown-item" type="button">Action</button>
    <button class="dropdown-item" type="button">Another action</button>
    <button class="dropdown-item" type="button">Something else here</button>
  </div>

	<div class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   INDUSTRI
  </div>

  <div class="dropdown-menu">

		<button class="dropdown-item" type="button">Action</button>
    <button class="dropdown-item" type="button">Another action</button>
    <button class="dropdown-item" type="button">Something else here</button>
  </div>

	<div class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   PRIVATPERSONER
  </div>

  <div class="dropdown-menu">

		<button class="dropdown-item" type="button">Action</button>
    <button class="dropdown-item" type="button">Another action</button>
    <button class="dropdown-item" type="button">Something else here</button>
  </div>

	<div class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   FORRETNINGSPARTNER
  </div>

  <div class="dropdown-menu">

		<button class="dropdown-item" type="button">Action</button>
    <button class="dropdown-item" type="button">Another action</button>
    <button class="dropdown-item" type="button">Something else here</button>
  </div>



-->



</div>
</div>


		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
	document.querySelector("#menu-footer").addEventListener("click", function(e) {
		e.preventDefault();
		console.log(document.querySelector(".btn"));
			document.querySelector(".btn").setAttribute("aria-expanded", "true");
		document.querySelector(".btn").setAttribute("data-toggle", "dropdown");
		document.querySelector(".btn").setAttribute("aria-haspopup", "true");
		console.log("clicked");
	});

</script>
</body>
</html>
