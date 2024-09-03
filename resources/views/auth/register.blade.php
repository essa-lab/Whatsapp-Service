@extends('app')

@section('title','Home')
@section('content')
<section class="ud-page-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="ud-banner-content">
            <h1>Register Page</h1>
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
            <form class="ud-login-form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="ud-form-group">
                    <label style="display: table-row;">Name :</label>
                    <input class="@error('name') is-invalid @enderror"
                      type="text"
                      name="name"
                      placeholder="Name"
                      value="{{ old('name') }}"
                    />
                    @error('name')
                    <span class="error-message">{{ $message }}</span>
                    @enderror
                  </div>
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
                <label style="display: table-row;">Password :</label>

                <input class="@error('password') is-invalid @enderror"
                  type="password"
                  name="password"
                  placeholder="*********"
                  value="{{ old('password') }}"
                />
                
              </div>
              <div class="ud-form-group">
                <label style="display: table-row;">Password Confirmation:</label>

                <input class="@error('password') is-invalid @enderror"
                  type="password"
                  name="password_confirmation"
                  placeholder="*********"
                  value="{{ old('password_confirmation') }}"
                />
                @error('password')
                <span class="error-message">{{ $message }}</span>
                @enderror
              </div>
              <div class="ud-form-group">
                <button type="submit" class="ud-main-btn w-100">Register</button>
              </div>
            </form>

            <div class="ud-socials-connect">
              <p>Connect With</p>

              <ul>
                <li>
                  <a href="javascript:void(0)" class="facebook">
                    <i class="lni lni-facebook-filled"></i>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)" class="twitter">
                    <i class="lni lni-twitter-filled"></i>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)" class="google">
                    <i class="lni lni-google"></i>
                  </a>
                </li>
              </ul>
            </div>

            <a class="forget-pass" href="{{route('reset.password')}}">
              Forget Password?
            </a>
            <p class="signup-option">
              Have an Account? <a href="{{route('page.login')}}"> Log in </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection