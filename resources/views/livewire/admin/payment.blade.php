<section class="ud-features" style="padding-bottom:90px">

    <div class="container ">

        <div class="row " style="margin: 10px 25px 10px 25px;">

            <div class="col-xl-12 col-lg-12 col-sm-12 ">

                <div  style="display: flex;justify-content: space-between;margin-bottom: 60px">
                    <span style="font-weight: 600;color:rgb(54, 54, 252)">Plans</span>
                    
                </div>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Payment Name</th>
                        <th scope="col">Active</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($payments as $key=>$payment)
                        @if($payment->payment_name != 'Cash')
                        <tr wire:key='{{$key+1}}' wire:click='openPayment({{$payment->payment_id}})' class="user-row">
                            <th scope="row">{{$key}}</th>
                            <td>{{$payment->payment_name}}</td>
                            <td><span class="{{$payment->is_active == '1'?'active-span':'normal-span'}}">{{$payment->is_active == '1'?'Active':'Disabled'}}</span></td>
                          </tr>
                          @endif
                        @endforeach
                    </tbody>
                  </table>


            </div>

        </div>

    </div>
    
</section>
