@extends('app')

@section('title','Home')
@section('content')
<section class="ud-page-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="ud-banner-content">
            <h1>Reset</h1>
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
            
            <div class="ud-socials-connect">
              <p>An Email has been sent to your email address, Please check your E-mail to move forward.</p>
              <p style="border-top: 2px solid rgb(202, 198, 198)">Didn't reciver an Email? Send new reset password email from here
                <a href="{{route('resend.password')}}"><img width="25px" src="{{asset('assets/images/resend.png')}}"></a>
              </p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection