<?php
	/* Template Name: HOME */

get_header();
?>
<div class="container">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="http://localhost/wordpress/wp-content/uploads/2021/05/Welcome.png" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="http://localhost/wordpress/wp-content/uploads/2021/05/welcome-3.jpg" alt="Second slide">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>

<div class="container recommended">
	<h4><label>RECOMMENDATION-----------------------------------------------------------</label></h4>
</div>


<div class = "container">
	<div class = "column nine">
		<div class="card">
  			<a href="http://localhost/wordpress/product/rem-figurine/"><img src="http://localhost/wordpress/wp-content/uploads/2021/05/rem4.jpg" style="width:80%"></a>
  			<h1>Rem Figurine</h1>
  			<p class="price">₱1000.00</p>
  			<p>A cute figurine of the character Re:Zero. A blue hair ogre maid who serves her master Roswaal.</p>
  		</div>
  	</div>
  	<div class = "column nine">
  		<div class="card">
  			<a href="http://localhost/wordpress/product/re-zero-kara-hajimeru-isekai-seikatsu-subaru-jersey/"><img src="http://localhost/wordpress/wp-content/uploads/2021/05/subaru-3.jpg" style="width:80%"></a>
  			<h1>Natsuki Subaru</h1>
  			<p class="price">₱800.00</p>
  			<p>A jersey of Subaru Natsuki. Super comfortable</p>
		</div>
	</div>
  	<div class = "column nine">
  		<div class="card">
  			<a href="http://localhost/wordpress/product/neko-sweater-jacket/"><img src="http://localhost/wordpress/wp-content/uploads/2021/05/neko.jpg" style="width:80%"></a>
  			<h1>Neko Jacket</h1>
  			<p class="price">₱650.00</p>
  			<p>A black Neko jacket. Very warm and comfortable. Easy to wear and can be worn for cold weathers</p>
		</div>
	</div>
	  	<div class = "column nine">
  		<div class="card">
  			<a href="http://localhost/wordpress/product/hatsune-miku-figurine/"><img src="http://localhost/wordpress/wp-content/uploads/2021/05/hatsu.jpg" style="width:80%"></a>
  			<h1>hatsune Miku Figurine</h1>
  			<p class="price">₱500.00</p>
  			<p>A cute hatsune figurine</p>
		</div>
	</div>
	<div class = "column nine">
		<div class = "more">
		<a href="http://localhost/wordpress/shop/"><img src ="http://localhost/wordpress/wp-content/uploads/2021/05/next.png" style = "width: 60%"></a>
		</div>
	</div>
</div>
<?php get_footer(); ?>