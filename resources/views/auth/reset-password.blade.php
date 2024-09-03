@extends('app')

@section('title','Home')
@section('content')
<section class="ud-page-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="ud-banner-content">
            <h1>Login Page</h1>
            @if(isset($message))
            <h1>{{$message}}</h1>
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Banner End ====== -->

  <!-- ====== Login Start ====== -->
  <section class="ud-login">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="ud-login-wrapper">
            <div class="ud-login-logo">
              <img src="{{asset('assets/images/favIcon.svg')}}" alt="logo" />
            </div>
            @error('faild')
            <h6 class="error-message">
              {{$message}}
            </h6>
            @enderror
            <form class="ud-login-form" method="POST" action="{{ route('request.reset.password') }}">
                @csrf

              <div class="ud-form-group">
                <label style="display: table-row;">Email :</label>

                <input class="@error('email') is-invalid @enderror"
                  type="email"
                  name="email"
                  placeholder="Email"
                  value="{{ old('email') }}"
                />
                @error('email')
                <span class="error-message">{{ $message }}</span>
                @enderror
              </div>
                            
              <div class="ud-form-group">
                <button type="submit" class="ud-main-btn w-100">Reset Password</button>
              </div>
            </form>
            
            <p class="signup-option">
              Not a member yet? <a href="{{route('page.register')}}"> Sign Up </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection