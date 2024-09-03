<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="{{route('home')}}">
      <img src="{{asset('assets/images/logo/SS_Logo_White.png')}}" alt="Logo" />
    </a>
    <button class="navbar-toggler">
      <span class="toggler-icon"> </span>
      <span class="toggler-icon"> </span>
      <span class="toggler-icon"> </span>
    </button>

    <div class="navbar-collapse">
      <ul id="nav" class="navbar-nav mx-auto">

        <li class="nav-item">
          <a class="ud-menu-scroll {{request()->url() == route('admin.dashboard') ? 'active-route':''}}" href="{{route('admin.dashboard')}}">Dashboard</a>
        </li>

        <li class="nav-item">
          <a class="ud-menu-scroll {{(request()->url() == route('admin.users') || Route::current()->getName()=='admin.userDeatils') ?'active-route':''}}" href="{{route('admin.users')}}">Users</a>
        </li>
        
        <li class="nav-item">
          <a class="ud-menu-scroll {{request()->url() == route('admin.plans')  ? 'active-route':''}}" href="{{route('admin.plans')}}">Plans</a>
        </li>

        <li class="nav-item">
          <a class="ud-menu-scroll {{(request()->url() == route('admin.payment') || Route::current()->getName()=='admin.payment.details') ? 'active-route':''}}" href="{{route('admin.payment')}}">Payment Methods</a>
        </li>
        
        <li class="nav-item">
          <a class="ud-menu-scroll {{request()->url() == route('admin.contact') ? 'active-route':''}}" href="{{route('admin.contact')}}">Contact Us</a>
        </li>

        <li class="nav-item auth">
          <a href="{{route('profile')}}" >
            Profile
          </a>        </li>

        <li class="nav-item auth">
          <a href="{{route('api.token')}}" class="ud-submenu-link">
            API Tokens
          </a>        </li>

        <li class="nav-item auth">
          <a href="{{route('logout')}}" class="ud-submenu-link">
            Logout
          </a>        </li>


      </ul>
    </div>


    <div class="navbar-btn  d-sm-inline-block personal-info">
      <ul class="navbar-nav mx-auto">
      <li class="nav-item nav-item-has-children">
          <a href="javascript:void(0)"> {{Auth::user()->name??''}} </a>
          <ul class="ud-submenu">
              <p style="font-size: 10px">Manage Account</p>

            <li class="ud-submenu-item">
              <a href="{{route('profile')}}" class="ud-submenu-link">
                Profile
              </a>
            </li>

            {{-- <li class="ud-submenu-item">
              <a href="{{route('api.token')}}" class="ud-submenu-link">
                API Tokens
              </a>
            </li> --}}

            <li style="border-top: 1px solid gray" class="ud-submenu-item">
              <a href="{{route('logout')}}" class="ud-submenu-link">
                Logout
              </a>
            </li>
            
          </ul>
        </li>
        <ul id="nav" class="navbar-nav mx-auto">
    </div>
  </nav>