@extends('app')

@section('title','Home')
@section('content')
<section class="ud-page-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="ud-banner-content">
            <h1>Reset Password  Page</h1>
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
            <form class="ud-login-form" method="POST" action="{{ route('set.password') }}">
                @csrf
                <input type="email"  name="email" value="{{$email}}" hidden>

              <div class="ud-form-group">
                <label style="display: table-row;">password :</label>

                <input class="@error('password') is-invalid @enderror"
                  type="password"
                  name="password"
                  placeholder="password"
                  value="{{ old('password') }}"
                />
                @error('password')
                <span class="error-message">{{ $message }}</span>
                @enderror
              </div>
              <div class="ud-form-group">
                <label style="display: table-row;">Password Confirmation:</label>

                <input class="@error('password_confirmation') is-invalid @enderror"
                type="password"
                name="password_confirmation"
                  placeholder="*********"
                  value="{{ old('password_confirmation') }}"
                />
                @error('password_confirmation')
                <span class="error-message">{{ $message }}</span>
                @enderror
              </div>

                
              <div class="ud-form-group">
                <button type="submit" class="ud-main-btn w-100">Reset</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection