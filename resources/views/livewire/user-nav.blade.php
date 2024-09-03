<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="{{route('account.dashboard')}}">
      <img src="{{asset('assets/images/logo/SS_Logo_White.png')}}" alt="Logo" />
    </a>
    <button class="navbar-toggler">
      <span class="toggler-icon"> </span>
      <span class="toggler-icon"> </span>
      <span class="toggler-icon"> </span>
    </button>

    <div class="navbar-collapse">
      <ul id="nav" class="navbar-nav mx-auto">
        <li class="nav-item  ">
          <a class="ud-menu-scroll {{request()->url() == route('account.dashboard') ?'active-route':''}}" href="{{route('account.dashboard')}}">Dashboard</a>
        </li>
        @if ($subscripe->service_plan_id == 1 )
        <li class="nav-item  ">
          <a class="ud-menu-scroll {{Route::current()->getName()=='instance' ?'active-route':''}}" href="{{route('instance',['sessionName'=>$sessionName])}}">Free trail</a>
        </li>
        
        @endif
       

        <li class="nav-item">
          <a class="ud-menu-scroll {{(request()->url() == route('instances') || Route::current()->getName()=='instance' && $subscripe->service_plan_id != 1) ?'active-route':''}}" href="{{route('instances')}}">Your Instances</a>
        </li>

        @if($subscripe->service_plan_id != 1)
        
        <li class="nav-item  ">
          <a class="ud-menu-scroll {{Route::current()->getName()=='messages.list' ?'active-route':''}}" href="{{route('messages.list')}}">Messages</a>
        </li>
        @endif
        <li class="nav-item">
          <a class="ud-menu-scroll {{request()->url() == route('subscription') ?'active-route':''}}" href="{{route('subscription')}}">Subscription</a>
        </li>
        
        <li class="nav-item">
          <a class="ud-menu-scroll " target="_blank" href="{{url('/web')}}">Documentaion</a>
        </li>
        
        <li class="nav-item">
          <a class="ud-menu-scroll {{request()->url() == route('contact') ?'active-route':''}}" href="{{route('contact')}}">Support</a>
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


    <div class="navbar-btn d-none d-sm-inline-block personal-info">
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

            <li class="ud-submenu-item">
              <a href="{{route('api.token')}}" class="ud-submenu-link">
                API Tokens
              </a>
            </li>

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