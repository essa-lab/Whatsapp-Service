<section class="ud-features" style="padding-bottom:90px">
       
    <div class="container " >

<div class="row">
    @if($status == 'success')
    <div class="col-md-12 payment-card " style="display: flex;
    align-items: center;
    flex-direction: column;
    height: 350px;">

        <img style="width:200px;height: 200px;" src="{{asset('assets/images/Successful-payment.png')}}" alt="success">
        <div style="text-align: center">
        <h4><br>Payment Successfully!</h4>
        <h5>Thank You for using our service.<br>Please Check Your profile in order to get the Invoice.</h5>
    </div>
    </div>
    @else
    <div class="col-md-12 payment-card " style="display: flex;
    align-items: center;
    flex-direction: column;
    height: 350px;">

        <img style="width:600px;height: 500px;" src="{{asset('assets/images/faild-payment.png')}}" alt="success">
        <div style="text-align: center">

        <h4><br>{{Session::get('error')}}</h4>

    </div>
    </div>
    @endif
</div>
</section>
