
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <!-- Primary Meta Tags -->
<meta name="title" content="Whatsapp Service - Issa's">
<meta name="description" content="Whatsapp Service - Issa's">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="0">
<meta property="og:title" content="Whatsapp Service - Issa's">
<meta property="og:description" content="Whatsapp Service - Issa's">

    <!--====== Favicon Icon ======-->
    <link
      rel="shortcut icon"
      href="assets/images/favIcon.svg"
      type="image/svg"
    />

    <!-- ===== All CSS files ===== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/ud-styles.css" />
  </head>
  <body>
    <!-- ====== Header Start ====== -->
    <header class="ud-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="{{route('home')}}">
                <img src="assets/images/logo/SS_Logo_White.png" alt="Logo" />
              </a>
              <button class="navbar-toggler">
                <span class="toggler-icon"> </span>
                <span class="toggler-icon"> </span>
                <span class="toggler-icon"> </span>
              </button>
  
              <div class="navbar-collapse">
                <ul id="nav" class="navbar-nav mx-auto">
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="{{route('home')}}/#home">Home</a>
                  </li>
  
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="{{route('home')}}/#about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="{{route('home')}}/#pricing">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="{{route('home')}}/#usecases">Use Cases</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="{{route('home')}}/#contact">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="ud-menu-scroll " target="_blank" href="{{url('/web')}}">Documentaion</a>
                  </li>
                  

                 
                  <li class="nav-item auth">
                    <a href="{{route('page.login')}}" class="">
                      Sign In
                    </a>
                  </li>

                  <li class="nav-item auth">
                    <a href="{{route('page.register')}}" class="">
                      Sign Up
                    </a>
                  </li>
                  
                </ul>
              </div>
  
              <div class="navbar-btn d-none d-sm-inline-block">
                <a href="{{route('page.login')}}" class="ud-main-btn ud-login-btn">
                  Sign In
                </a>
                <a class="ud-main-btn ud-white-btn" href="{{route('page.register')}}">
                  Sign Up
                </a>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ====== Header End ====== -->

    <main>
      @yield('content')
    </main>

    <!-- ====== Footer Start ====== -->
    <footer class="ud-footer wow fadeInUp" data-wow-delay=".15s">
      <div class="shape shape-1">
        <img src="assets/images/footer/shape-1.svg" alt="shape" />
      </div>
      <div class="shape shape-2">
        <img src="assets/images/footer/shape-2.svg" alt="shape" />
      </div>
      <div class="shape shape-3">
        <img src="assets/images/footer/shape-3.svg" alt="shape" />
      </div>
      <div class="ud-footer-widgets">
        <div class="container">
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="ud-widget">
                <a href="index.html" class="ud-footer-logo">
                  <img src="assets/images/logo/SS_Logo_White.png" alt="logo" />
                </a>
                <p class="ud-widget-desc">
                  Issa's is a software consulting and support organization focused on providing value-added solutions largely through open source products and technologies, We’re the world’s leading provider of enterprise open source solutions.
                </p>
                <ul class="ud-widget-socials">
                  <li>
                    <a href="https://facebook.com/">
                      <i class="lni lni-facebook-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://twitter.com/">
                      <i class="lni lni-twitter-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://instagram.com/">
                      <i class="lni lni-instagram-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://linkedin.com/">
                      <i class="lni lni-linkedin-original"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
  
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
              <div class="ud-widget">
                <h5 class="ud-widget-title">About Us</h5>
                <ul class="ud-widget-links">
                  <li>
                    <a href="#home">Home</a>
                  </li>
                  <li>
                    <a href="#features">Features</a>
                  </li>
                  <li>
                    <a href="#about">About</a>
                  </li>
                  <li>
                    <a href="#usecases">Use Cases</a>
                  </li>
                </ul>
              </div>
            </div>
            {{-- <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
              <div class="ud-widget">
                <h5 class="ud-widget-title">Features</h5>
                <ul class="ud-widget-links">
                  <li>
                    <a href="javascript:void(0)">How it works</a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">Privacy policy</a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">Terms of service</a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">Refund policy</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
              <div class="ud-widget">
                <h5 class="ud-widget-title">Our Products</h5>
                <ul class="ud-widget-links">
                  <li>
                    <a
                      href="https://lineicons.com/"
                      rel="nofollow noopner"
                      target="_blank"
                      >Lineicons
                    </a>
                  </li>
                  <li>
                    <a
                      href="https://ecommercehtml.com/"
                      rel="nofollow noopner"
                      target="_blank"
                      >Ecommerce HTML</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://ayroui.com/"
                      rel="nofollow noopner"
                      target="_blank"
                      >Ayro UI</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://graygrids.com/"
                      rel="nofollow noopner"
                      target="_blank"
                      >Plain Admin</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-8 col-sm-10">
              <div class="ud-widget">
                <h5 class="ud-widget-title">Partners</h5>
                <ul class="ud-widget-brands">
                  <li>
                    <a
                      href="https://ayroui.com/"
                      rel="nofollow noopner"
                      target="_blank"
                    >
                      <img
                        src="assets/images/footer/brands/ayroui.svg"
                        alt="ayroui"
                      />
                    </a>
                  </li>
                  <li>
                    <a
                      href="https://ecommercehtml.com/"
                      rel="nofollow noopner"
                      target="_blank"
                    >
                      <img
                        src="assets/images/footer/brands/ecommerce-html.svg"
                        alt="ecommerce-html"
                      />
                    </a>
                  </li>
                  <li>
                    <a
                      href="https://graygrids.com/"
                      rel="nofollow noopner"
                      target="_blank"
                    >
                      <img
                        src="assets/images/footer/brands/graygrids.svg"
                        alt="graygrids"
                      />
                    </a>
                  </li>
                  <li>
                    <a
                      href="https://lineicons.com/"
                      rel="nofollow noopner"
                      target="_blank"
                    >
                      <img
                        src="assets/images/footer/brands/lineicons.svg"
                        alt="lineicons"
                      />
                    </a>
                  </li>
                  <li>
                    <a
                      href="https://uideck.com/"
                      rel="nofollow noopner"
                      target="_blank"
                    >
                      <img
                        src="assets/images/footer/brands/uideck.svg"
                        alt="uideck"
                      />
                    </a>
                  </li>
                  <li>
                    <a
                      href="https://tailwindtemplates.co/"
                      rel="nofollow noopner"
                      target="_blank"
                    >
                      <img
                        src="assets/images/footer/brands/tailwindtemplates.svg"
                        alt="tailwindtemplates"
                      />
                    </a>
                  </li>
                </ul>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
      <div class="ud-footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <ul class="ud-footer-bottom-left">
                <li>
                  <a href="javascript:void(0)">Privacy policy</a>
                </li>
                <li>
                  <a href="javascript:void(0)">Support policy</a>
                </li>
                <li>
                  <a href="javascript:void(0)">Terms of service</a>
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <p class="ud-footer-bottom-right">
                Designed and Developed by
                <a href="https://snono-systems.com" rel="nofollow">Snono Systems</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- ====== Footer End ====== -->

    <!-- ====== Back To Top Start ====== -->
    <a href="javascript:void(0)" class="back-to-top">
      <i class="lni lni-chevron-up"> </i>
    </a>
    <!-- ====== Back To Top End ====== -->

    <!-- ====== All Javascript Files ====== -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/wow.min.js"></script>

    <script src="assets/js/main.js"></script>

    <script>
      // ==== for menu scroll

      if(request()->url() != route('login')){
      const pageLink = document.querySelectorAll(".ud-menu-scroll");

      pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
          e.preventDefault();
          document.querySelector(elem.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
            offsetTop: 1 - 60,
          });
        });
      });

      // section menu active
      function onScroll(event) {
        const sections = document.querySelectorAll(".ud-menu-scroll");
        const scrollPos =
          window.pageYOffset ||
          document.documentElement.scrollTop ||
          document.body.scrollTop;

        for (let i = 0; i < sections.length; i++) {
          const currLink = sections[i];
          const val = currLink.getAttribute("href");
          const refElement = document.querySelector(val);
          const scrollTopMinus = scrollPos + 73;
          if (
            refElement.offsetTop <= scrollTopMinus &&
            refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
          ) {
            document
              .querySelector(".ud-menu-scroll")
              .classList.remove("active");
            currLink.classList.add("active");
          } else {
            currLink.classList.remove("active");
          }
        }
      }

      window.document.addEventListener("scroll", onScroll);
    }
    </script>
   
  </body>
</html>
