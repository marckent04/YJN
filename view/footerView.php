
   <!-- section Contact -->
   <section class="Contact">
      <div class="container intro-contact">
        <div class="row">
          <div class="col-md-8">
          <div class="col-md-3 rs">
            <a href=""><img src="img/facebook.png"></a>
            <a href=""><img src="img/twitter.png"></a>
            <a href=""><img src="img/linkedin-logo.png"></a>
            <a href=""><img src="img/youtube.png"></a>
            
          </div>
          <div class="col-md-3">
            <ul>
              <li><a href="">Financials</a></li>
              <li><a href="">Terms of Use</a></li>
              <li><a href="">Accessibility</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <ul>
              <li><a href="">Podcasts</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <ul>
              <li><a href="">Partnering With Us</a></li>
              <li><a href="">Contact Us</a></li>
            </ul>
          </div>
          </div>
          <div class="col-md-4 text-left">
          <h4>Sign up for email updates</h4>
          <div class="form-group">
            <div class="input-group">
              <input class="form-control" type="text" name="search" placeholder="Enter your mail" required/>
              <span class="input-group-btn">
              <button class="btn btn-valide font_Flexo" type="submit">Submit</button>
              </span>
            </div>
          </div>
          </div>
        </div>
      </div>
   </section>

   <footer class="">
    <div class="container">
      <div class="col-md-6">
         <h5 class="text-center">Copyright © 2018<a href=""></a></h5>
        </div>
      <div class="col-md-6"></div>
    </div>  
   </footer>

<!-- Button trigger modal -->


<!-- MODAL -->

   


<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/wow.js"></script>

<script> new WOW().init(); 
$(window).on('scroll', function(){
    if($(window).scrollTop()){
      $('.navbar-shrink ').addClass('black');
      $('.logo ').addClass('logo-reduits');
      $('.navbar-lu').addClass('navbar-lu-reduits');
    }
    else{
      $('.navbar-shrink ').removeClass('black');
      $('.logo ').removeClass('logo-reduits');
      $('.navbar-lu').removeClass('navbar-lu-reduits');
    }
  });
  $(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- JS pour le portfolio-->
</body> 
</html>