<footer class="row">
    <ul class="social col-6-small">
      <li>
        <a href="https://www.facebook.com/luxurypropertyphotos/">
          <i class="fa fa-facebook"></i>
        </a>
      </li>
      <li>
        <a href="https://www.instagram.com/luxurypropertyphotos/">
          <i class="fa fa-instagram"></i>
        </a>
      </li>
      <li>
        <a href="">
          <i class="fa fa-linkedin"></i>
        </a>
      </li>
    </ul>
    <ul class="notes col-6-small">
      <li>
        <h4>
          Dave Perlman Estate Images
        </h4>
      </li>
      <li>
        152 Main Street, Auburn, Maine 04210
      </li>
      <li>
        <a href="tel:2074021995">207.402.1995</a>
      </li>
    </ul>
</footer>
<div class="row copy">
  <p>
    <em>Dave Perlman Estate Images</em> 2015
  </p>
</div>



<script>


$('#contact-link').on('click', function(e){
  e.preventDefault();
  scrollToAnchor('contact');
  $('.activate').delay(1000).addClass('clicked');
  $('#contact').delay(1000).fadeIn('slow');
})

$('#submit').on('click', function(e){
  e.preventDefault();
  var name = $('#name').val();
  var email = $('#email').val();
  var phone = $('#phone').val();
  var address = $('#address').val();
  var message = $('#message').val();
  $.post( '_parts/mail.php', { name: name, email: email, phone: phone, address: address, message: message}, function(data){
     $('#contact').fadeOut('slow');
     $('.cta').append('<div class="status">' + data + '</div>');
     $('.cta').delay(5000).fadeOut('slow');
  });
});

$('.activate').on('click', function(e){
  e.preventDefault();
  $(this).addClass('clicked');
  $('#contact').delay(1000).fadeIn('slow');
});

$('.mobile-nav').on('click', function(){
  $('.menu').toggleClass('open');
})

function scrollToAnchor(aid) {
  var aTag = $("a[name='" + aid + "']");
  $('html, body').animate({scrollTop: aTag.offset().top}, 'slow');
}

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
</body>
</html>