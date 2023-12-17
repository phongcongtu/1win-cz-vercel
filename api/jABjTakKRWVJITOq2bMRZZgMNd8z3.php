<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     
    <title>Article</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700"
      rel="stylesheet"
    />

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css" />
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css" />
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css" />

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css" />

    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css" />

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
  </head>
  <body>
    <div class="fh5co-loader"></div>

    <div id="page">
      <nav class="fh5co-nav" role="navigation">
        <div class="container-wrap">
          <div class="top-menu">
            <div class="row">
              <div class="col-xs-2">
                <div id="fh5co-logo">
                  <a href="index.php" style="font-size: 10px">Deal</a>
                </div>
              </div>
              <div class="col-xs-10 text-right menu-1">
                <ul>
                  <li><a href="index.php">Main</a></li>
                  <li class="active"><a href="blog.php">Articles</a></li>
                  <li><a href="contact.php">Contacts</a></li>
                  <li><a href="privacy.php">Privacy policy</a></li>
                  <li><a href="terms.php">Terms and conditions</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <div class="container-wrap">
        <aside id="fh5co-hero">
          <div class="flexslider">
            <ul class="slides">
              <li style="background-image: url('./assets/images/elena-joland-mjeqon0mh_q-unsplash.jpg')">
                <div class="overlay-gradient"></div>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 slider-text">
                      <div class="slider-text-inner">
                        <h1 style="color: #fff">Article</h1>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </aside>

        <div id="fh5co-blog fh5co-light-grey" class="blog-flex" style="flex-direction: column">
          <h3>Topic: "Why is the rebranding quite well balanced?"</h3>
          <p><strong> </strong> Brand awareness is achievable within a reasonable time frame. The approximate structure of marketing research is integrated. The media business is quite likely. The product range, therefore, is eligible. The marketing-oriented publication concentrates exclusively on marketing. Visualization of concepts, of course, slows down the collective rating. The media channel, contrary to the opinion of P. Drucker, is competitive. The consumer's dictate accelerates the exhibition stand. The strategic planning process repels the role pool of loyal publications, regardless of costs. It is interesting to note that the leadership in sales is still poorly neutralizes public customer demand. The VIP event supports out-of-the-ordinary social status. The rating, ignoring the details, reflects a complex presentation material. The method of market research, of course, distorts the media weight. The industry standard stabilizes product placement by optimizing budgets. Brand selection is unattainable.</p>
        </div>
      </div>
      <!-- END container-wrap -->

      <div class="container-wrap">
        <footer id="fh5co-footer" role="contentinfo">
          <div class="row copyright">
            <div class="col-md-12 text-center">
              <p>
                <small class="block">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  Copyright</small
                >
              </p>
            </div>
          </div>
        </footer>
      </div>
      <!-- END container-wrap -->
    </div>

    <div class="gototop js-top">
      <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>

    <div class="cookie-banner">
      <p style="color: #000000">
        The site uses cookies. They allow us to recognize you and get information about your user experience.By continuing to browse the site, I agree to the use of cookies by the site owner in accordance with 
        <a target="_blank" href="https://en.wikipedia.org/wiki/HTTP_cookie"
          >Cookie policy</a
        >
      </p>

      <button class="close-cookie">×</button>
    </div>

    <script>
      window.onload = function () {
        $('.close-cookie').click(function () {
          $('.cookie-banner').fadeOut();
        });
      };
    </script>

    <script>
      let elems = document.querySelectorAll('.server-name');
      elems.forEach((elem) => {
        elem.innerHTML = window.location.hostname;
      });
    </script>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Counters -->
    <script src="js/jquery.countTo.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>
  </body>
</html>
