<?php require_once '_parts/header.php'; ?>
<section class="carousel row">
	<div class="slideshow-container">
	  	<div class="mySlides fade">
	    	<div class="numbertext">1 / 3</div>
	    	<img src="_img/img-3.jpg" style="width:100%">
	    	<div class="text">
	    			bright, even lit interiors
	    			<div class="caption">
	    				Newburyport, MA
	    			</div>
	    	</div>
	  	</div>

	  	<div class="mySlides fade">
	    	<div class="numbertext">2 / 3</div>
	    	<img src="_img/img-2.jpg" style="width:100%">
	    	<div class="text">  
				compelling aerial images
    			<div class="caption">
    				Harpswell, ME
    			</div>
	    	</div>
	  	</div>

	  	<div class="mySlides fade">
	    	<div class="numbertext">3 / 3</div>
	    	<img src="_img/img-1.jpg" style="width:100%">
	    	<div class="text">
	    			tasteful exteriors, incorporating environment
	    			<div class="caption">
	    				Auburn, ME
	    			</div>
	    	</div>
	  	</div>

	  	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	  	<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<br>

	<div style="text-align:center">
	  <span class="dot" onclick="currentSlide(1)"></span> 
	  <span class="dot" onclick="currentSlide(2)"></span> 
	  <span class="dot" onclick="currentSlide(3)"></span> 
	</div>
</section>

<section class="cta row">
	<div class="wrap">
		<a href="#contact" name="contact"></a>
	<!-- <img src="_img/cta.jpg" alt="" class="fill"> -->
	<span class="more">
		<a href="" class="activate">
			Get in touch
		</a>
		<form action="" id="contact">
			<h3>Send me a Message!</h3>
			<input id="name" type="text" placeholder="Name">
			<input id="email" type="email" placeholder="Email">
			<input id="phone" type="text" placeholder="Phone Number">
			<input id="address" type="text" placeholder="Address">
			<h4>- Message -</h4>
			<textarea id="message">
				
			</textarea>
			<div class="buttons">
				<a href="#" id="cancel">Cancel</a>
				<a href="#" id="submit">Submit</a>
			</div>
		</form>
	</span>
	</div>
</section>

<section class="info row">

	<div class="wrap">
		<div class="pane col-5-small ">
		<div class="thumbnailwrap">
			<img src="_img/img-1-2.jpg" alt="" class="thumbnail">
		</div>
		<h2>Interior Shoots</h2>
		<p>A quality photograph tells a lot about a property, it is often times the first impression a buyer has of a new home or commercial location. To us, it only makes sense to have a listing that stands out and highlights the assets of a property.</p>
	</div>
	<div class="pane col-5-small col-small-offset-2">
		<div class="thumbnailwrap">
			<img src="_img/img-1-3.jpg" alt="" class="thumbnail">
		</div>
		<h2>Aerial Shoots</h2>
		<p>A new angle often makes a compelling photograph. With the power of flight, we're able to capture the most compelling images that offer an unique perspective. Aerial photography is becoming an industry standard and is a fantastic way to offer more to your buyer or seller.</p>
	</div>
	</div>
</section>



<script>
		var slideIndex = 1;
		showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
</script>



<?php require_once '_parts/footer.php' ?>