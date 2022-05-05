<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->
	<footer class="bgBlack">

<div class="page-section pt60 pb60">
  <div class="container">
	<div class="row">
	  <div class="col-lg-3 col-md-3">
		<div class="mb-20"> 
		<a href="<?php echo esc_url(home_url('/')); ?>" class="clearfix">
		  <img src="<?php echo get_stylesheet_directory_uri(); ?>/framework/images/logo-white.png" class="logo-img" alt="Logo">
		</a>
		</div>

		<p class="colorGrey">
		  Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quidem est sint fuga eveniet laborum commodi
		</p>
	  
	  </div>

	  <div class="col-lg-3 col-md-3">
		<h4 class="text-uppercase colorWhite">
		  Lorem ipsum
		</h4>
		<ul class="noUl">
		  <li>
			<a href="#" class="colorGrey">
			  Lorem ipsum
			</a>
		  </li>
		  <li>
			<a href="#" class="colorGrey">
			  Lorem ipsum
			</a>
		  </li>
		  <li>
			<a href="#" class="colorGrey">
			  Lorem ipsum
			</a>
		  </li>
		  <li>
			<a href="#" class="colorGrey">
			  Lorem ipsum
			</a>
		  </li>
		</ul>
	  </div>

	 
	  <div class="col-lg-3 col-md-3">
		<h4 class="text-uppercase colorWhite">
		  Lorem ipsum
		</h4>
		<ul class="noUl">
		  <li>
			<a href="#" class="colorGrey">
			  Lorem ipsum
			</a>
		  </li>
		  <li>
			<a href="#" class="colorGrey">
			  Lorem ipsum
			</a>
		  </li>
		  <li>
			<a href="#" class="colorGrey">
			  Lorem ipsum
			</a>
		  </li>
		  <li>
			<a href="#" class="colorGrey">
			  Lorem ipsum
			</a>
		  </li>
		</ul>
	  </div>
	  
	  <div class="col-lg-3 col-md-3">
		<h4 class="text-uppercase colorWhite">
		  Lorem ipsum
		</h4>
		<ul class="noUl">
		  <li>
			<a href="#" class="colorGrey">
			  Lorem ipsum
			</a>
		  </li>
		  <li>
			<a href="#" class="colorGrey">
			  Lorem ipsum
			</a>
		  </li>
		  <li>
			<a href="#" class="colorGrey">
			  Lorem ipsum
			</a>
		  </li>
		  <li>
			<a href="#" class="colorGrey">
			  Lorem ipsum
			</a>
		  </li>
		</ul>
	  </div>
	</div>
 
  </div>
</div>
</footer><!-- #colophon -->

<div class="whatsApp">
<a href="https://api.whatsapp.com/send?phone=+919711571907&amp;text=Hi, I would like to know connect and ask a few questions. Can you please help me ?"><svg xmlns="http://www.w3.org/2000/svg" width="31.5" height="31.5" viewBox="0 0 31.5 31.5">
  <path id="Icon_ionic-logo-whatsapp" data-name="Icon ionic-logo-whatsapp" d="M18.286,2.25A15.4,15.4,0,0,0,2.822,17.594a15.186,15.186,0,0,0,2.219,7.923L2.25,33.75l8.562-2.72A15.49,15.49,0,0,0,33.75,17.594,15.4,15.4,0,0,0,18.286,2.25Zm7.69,21.172a3.994,3.994,0,0,1-2.735,1.763c-.725.038-.746.562-4.7-1.156s-6.332-5.9-6.519-6.164a7.584,7.584,0,0,1-1.459-4.11,4.382,4.382,0,0,1,1.5-3.215,1.514,1.514,0,0,1,1.071-.451c.311-.005.513-.009.743,0s.576-.048.875.748,1.016,2.753,1.107,2.952a.716.716,0,0,1,.007.687,2.686,2.686,0,0,1-.419.639c-.206.221-.434.5-.618.664-.205.187-.42.392-.2.792a11.833,11.833,0,0,0,2.094,2.794,10.789,10.789,0,0,0,3.1,2.061c.388.211.619.188.86-.065s1.029-1.107,1.308-1.488.539-.307.9-.164,2.261,1.164,2.649,1.375.646.318.739.485A3.247,3.247,0,0,1,25.975,23.422Z" transform="translate(-2.25 -2.25)" fill="#25d366"/>
</svg>
</a>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>
<?php 
if(!is_page(143)){
	?>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/framework/js/jquery.min.js"></script>
<?php
}
?>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/framework/js/bootstrap.min.js"></script>


<!-- MAGNIFIC POPUP -->
<script src='<?php echo get_stylesheet_directory_uri(); ?>/framework/js/jquery.magnific-popup.min.js'></script>

<!-- PORTFOLIO SCRIPTS -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/framework/js/imagesloaded.pkgd.min.js"></script>

<!-- APPEAR -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/framework/js/jquery.appear.js"></script>

<!-- PARALLAX -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/framework/js/jquery.stellar.min.js"></script>

<!-- TEXT ROTATOR -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/framework/js/text-rotator.js"></script>

<!-- MAIN SCRIPT -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/framework/js/main.js"></script>
</body>
</html>
