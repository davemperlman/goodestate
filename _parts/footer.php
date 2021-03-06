<footer class="row">
    <div class="wrap">
      <ul class="social col-6-small">
      <li>
        <a target="_blank" href="https://www.facebook.com/luxurypropertyphotos/">
          <i class="fa fa-facebook"></i>
        </a>
      </li>
      <li>
        <a target="_blank" href="https://www.instagram.com/luxurypropertyimages/">
          <i class="fa fa-instagram"></i>
        </a>
      </li>
      <li>
        <a target="_blank" href="https://www.linkedin.com/in/dave-perlman-69298880/">
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
    </div>
</footer>
<div class="row copy">
  <p>
    <em>Dave Perlman Estate Images</em> 2015
  </p>
</div>



<script>


// {"access_token": "6313658060.68dcd27.765ce69e41e541ea89ea7a45df6f7924", "user": {"id": "6313658060", "username": "luxurypropertyimages", "profile_picture": "https://scontent.cdninstagram.com/t51.2885-19/s150x150/22860876_1864106293919067_7310648380676374528_n.jpg", "full_name": "Dave Perlman", "bio": "", "website": "", "is_business": false}}

$('#contact-link').on('click', function(e){
  e.preventDefault();
  scrollToAnchor('contact');
  $('.activate').delay(1000).addClass('clicked');
  $('.more').addClass('opened');
});

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

$('#cancel').on('click', function(e){
  e.preventDefault();
  $('.more').removeClass('opened');
  $('.activate').removeClass('clicked');
})

$('.activate').on('click', function(e){
  e.preventDefault();
  $(this).addClass('clicked');
  $('.more').delay(1000).addClass('opened');
});

$('.mobile-nav').on('click', function(){
  $('.menu').toggleClass('open');
})
function scrollToAnchor(aid) {
  var aTag = $("a[name='" + aid + "']");
  $('html, body').animate({scrollTop: aTag.offset().top}, 'slow');
}


</script>
</body>
</html>