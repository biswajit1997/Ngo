<section class="w3l-copyright">
    <div class="container">
      <div class="row bottom-copies">
        <p class="col-lg-8 copy-footer-29">© 2021 Kovid. All rights reserved.Design by<a href="https://w3layouts.com/" target="_blank">
            W3layouts</a></p>
        <div class="col-lg-4 main-social-footer-29">
          <a href="#facebook" class="facebook"><span class="fab fa-facebook-f"></span></a>
          <a href="#twitter" class="twitter"><span class="fab fa-twitter"></span></a>
          <a href="#pinterest"><span class="fab fa-pinterest-p"></span></a>
          <a href="#instagram" class="instagram"><span class="fab fa-instagram"></span></a>

        </div>
      </div>
    </div>
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      <i class="fas fa-level-up-alt"></i>
    </button>


    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
  </section>