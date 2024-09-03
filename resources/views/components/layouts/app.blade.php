<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

            <!--====== Favicon Icon ======-->
            <meta name="title" content="Whatsapp Service - Issa's">
<meta name="description" content="Whatsapp Service - Issa's ">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="0">
<meta property="og:title" content="Whatsapp Service - Issa's">
<meta property="og:description" content="Whatsapp Service - Issa's ">


    <link
    rel="shortcut icon"
    href="{{asset('assets/images/favIcon.svg')}}"
    type="image/svg"
  />

  <!-- ===== All CSS files ===== -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/lineicons.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/ud-styles.css')}}" />
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    </head>
    <body>

            <!-- ====== Header Start ====== -->
    <header class="ud-header" style="background: #008367">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              @if(Auth::user()->is_admin)
                @livewire('admin-nav')

              @else
                @livewire('user-nav')

              @endif
            </div>
          </div>
        </div>
      </header>

      <main>
        {{ $slot }}
      </main>

    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script> 

    <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>

    <script>
      // ==== for menu scroll
      // const pageLink = document.querySelectorAll(".ud-menu-scroll");

      // pageLink.forEach((elem) => {
      //   elem.addEventListener("click", (e) => {
      //     e.preventDefault();
      //     document.querySelector(elem.getAttribute("href")).scrollIntoView({
      //       behavior: "smooth",
      //       offsetTop: 1 - 60,
      //     });
      //   });
      // });

      // section menu active
      // function onScroll(event) {
      //   const sections = document.querySelectorAll(".ud-menu-scroll");
      //   const scrollPos =
      //     window.pageYOffset ||
      //     document.documentElement.scrollTop ||
      //     document.body.scrollTop;

      //   for (let i = 0; i < sections.length; i++) {
      //     const currLink = sections[i];
      //     const val = currLink.getAttribute("href");
      //     const refElement = document.querySelector(val);
      //     const scrollTopMinus = scrollPos + 73;
      //     if 
      //       refElement.offsetTop <= scrollTopMinus &&
      //       refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
      //     ) {
      //       document
      //         .querySelector(".ud-menu-scroll")
      //         .classList.remove("active");
      //       currLink.classList.add("active");
      //     } else {
      //       currLink.classList.remove("active");
      //     }
      //   }
      // }

      // window.document.addEventListener("scroll", onScroll);
    </script>
    </body>
</html>
