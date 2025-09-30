<footer id="footer" class="footer">



  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="index.html" class="d-flex align-items-center">
          <span class="sitename">Legecon Exim</span>
        </a>
        <div class="footer-contact pt-3">
          <p>A108 Adam Street</p>
          <p>New York, NY 535022</p>
          <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="/">Home</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="{{route('frontend.about-us')}}">About us</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Product</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="{{route('frontend.contact-us')}}">Contact Us</a></li>

        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Other Links</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="{{route('frontend.privacy-policy')}}">Privacy Policy</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="{{route('frontend.sitemap')}}">SiteMap</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-12">
        <h4>Follow Us</h4>
        <!-- <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p> -->
        <div class="social-links d-flex">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>© <span>Copyright</span> <strong class="px-1 sitename">Legecon Exim</strong> <span>All Rights Reserved</span></p>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you've purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
    </div>
  </div>
  <div class="cookie-container">
    <p style="line-height: 2;">
      We use cookies on this site to enhance your user experience.
      By continuing to visit this site you agree to our use of cookies.
      <a href="{{route('frontend.privacy-policy')}}" target="_blank" style="text-decoration: underline;color: white;">View Our Privacy Policy</a> <button class="cookie-btn">Got it</button>
    </p>
  </div>
</footer>