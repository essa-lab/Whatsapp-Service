<section class="ud-features" style="padding-bottom:90px">
       
    <div class="container " >      
      
        <div class="row">
            <div class="col-lg-12">
                <div class="ud-section-title mx-auto text-center" style="margin-bottom: 70px">
                    <span>Payment Methods</span>
                    
                </div>
            </div>
        
      </div>
      <div class="row">

        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">

            <div class="row" style="margin-bottom: 20px">
                @if($payments->where('payment_name','FIB')->value('is_active')==1)
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="terms_item">
                        <div class="payment-card" style="cursor: pointer;background: #56b89d">
                            <a href="{{route('fib_payment.index')}}">
                            <img style="height: 100px; margin: 40px" src="{{asset('assets/images/fib_payment.svg')}}"
                                alt="FirstIraqiBankPayment">
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @if($payments->where('payment_name','Zain-Cash')->value('is_active')==1)

                <div class="col-md-6 col-lg-6 col-sm-12">

                    <div class="terms_item">
                        <div class="payment-card" style="cursor: pointer;background: #121227">
                            <a href="{{route('zain-cash')}}">
                            <img style="height: 100px; margin: 40px"
                                src="https://www.zaincash.iq/assets/images/logo.png" alt="ZainCashPayment">
                            </a>
                        </div>
                    </div>
                </div>
                @endif

            </div>

            <div class="row">
                @if($payments->where('payment_name','Fast-Pay')->value('is_active')==1)

                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="terms_item">
                        <div class="payment-card" style="cursor: pointer;background: #ffffff">
                            <a href="{{route('fast-pay')}}">

                            <svg style="margin-top: 18px;margin-left:20px" xmlns="http://www.w3.org/2000/svg"
                                width="100%" height="150" viewBox="0 0 150 33">
                                <g id="Group_1" data-name="Group 1" transform="translate(-228.453 -426.75)">
                                    <path id="Path_1" data-name="Path 1"
                                        d="M228.453,452.229V428.923a2.121,2.121,0,0,1,2.121-2.121H246.75v2.5a2.121,2.121,0,0,1-2.121,2.121H233.255v6.948h9.959v2.315a2.122,2.122,0,0,1-2.123,2.121h-7.836v9.422Z"
                                        transform="translate(0 0.021)" fill="#fc2861"></path>
                                    <path id="Path_2" data-name="Path 2"
                                        d="M256.106,432.262h4.257V450.2H256.18l-.219-2.619c-1.019,2.11-3.82,3.129-5.82,3.165-5.31.037-9.24-3.238-9.24-9.531,0-6.184,4.111-9.422,9.349-9.386a6.582,6.582,0,0,1,5.711,2.911Zm-10.767,8.949a5.137,5.137,0,0,0,5.312,5.456c6.984,0,6.984-10.876,0-10.876A5.106,5.106,0,0,0,245.339,441.211Z"
                                        transform="translate(5.04 2.055)" fill="#fc2861"></path>
                                    <path id="Path_3" data-name="Path 3"
                                        d="M269.418,437.046a6.051,6.051,0,0,0-4.438-1.6c-2.11,0-3.275.655-3.275,1.781,0,1.163,1.055,1.819,3.348,1.965,3.381.218,7.675.982,7.675,5.747,0,3.165-2.582,5.893-7.711,5.893-2.838,0-5.676-.473-8.294-3.2l2.182-3.164a9.848,9.848,0,0,0,6.186,2.509c1.672.037,3.237-.837,3.237-2.147,0-1.236-1.019-1.746-3.566-1.891-3.383-.256-7.421-1.492-7.421-5.566,0-4.147,4.293-5.6,7.567-5.6a9.624,9.624,0,0,1,6.984,2.363Z"
                                        transform="translate(11.445 2.034)" fill="#fc2861"></path>
                                    <path id="Path_4" data-name="Path 4"
                                        d="M276.833,428.536v5.093h4.947V435.6a1.848,1.848,0,0,1-1.849,1.849H276.8V445.2a2.226,2.226,0,0,0,2.328,2.546,5.06,5.06,0,0,0,2.145-.545l1.238,3.783a9.927,9.927,0,0,1-3.674.764c-3.893.145-6.439-2.074-6.439-6.548v-7.749h-3.348v-3.82h3.348v-4.619Z"
                                        transform="translate(16.435 0.723)" fill="#fc2861"></path>
                                    <path id="Path_5" data-name="Path 5"
                                        d="M292.3,444.756h-5.8v7.493h-4.8V428.9a2.129,2.129,0,0,1,2.124-2.121c2.9-.008,5.225-.032,8.476-.032C304.74,426.75,304.777,444.756,292.3,444.756Zm-5.8-4.4h5.8c6.148,0,6.111-9.021,0-9.021h-5.8Z"
                                        transform="translate(21.557 0)" fill="#f2f2f7"></path>
                                    <path id="Path_6" data-name="Path 6"
                                        d="M311.932,432.262h4.257V450.2h-4.184l-.218-2.619c-1.018,2.11-3.82,3.129-5.82,3.165-5.312.037-9.241-3.238-9.241-9.531,0-6.184,4.112-9.422,9.349-9.386a6.585,6.585,0,0,1,5.712,2.911Zm-10.767,8.949a5.137,5.137,0,0,0,5.31,5.456c6.985,0,6.985-10.876,0-10.876A5.106,5.106,0,0,0,301.165,441.211Z"
                                        transform="translate(27.641 2.055)" fill="#f2f2f7"></path>
                                    <path id="Path_7" data-name="Path 7"
                                        d="M319.65,440.512h0l-2.9-8.372h-5.156l5.785,14.14Z"
                                        transform="translate(33.66 2.182)" fill="#f2f2f7"></path>
                                    <path id="Path_8" data-name="Path 8"
                                        d="M330.131,432.14l-10.944,25.428h-4.875l2.107-4.917.07-.169,3.47-7.937,1.981-4.552,3.273-7.853Z"
                                        transform="translate(34.761 2.182)" fill="#f2f2f7"></path>
                                </g>
                            </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @if($payments->where('payment_name','tabadul')->value('is_active')==1)

                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="terms_item">
                        <div class="payment-card" style="cursor: pointer;background: #ffffff">
                            <a href="{{route('tabadul')}}">
                            <img style="height: 100px; margin: 55px 5px"
                                src="https://tabadul-web-site.s3.me-south-1.amazonaws.com/icons/logo.svg" />
                            </a>
                        </div>
                    </div>
                </div>
                @endif


            </div>

        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            <div class="ud-single-pricing  wow fadeInUp active"
                data-wow-delay=".15s"
                style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                
                <div class="ud-pricing-header">
                    <h3>{{ $servicePlan->plan_name }}</h3>
                    <h4>$ {{ $servicePlan->price }}/mo</h4>
                </div>
                <div class="ud-pricing-body">
                    <ul>
                        <li>Instances : {{ $servicePlan->instances_limit }}</li>
                        <li>Request Limit : {{ $servicePlan->requests_limit }}</li>
                        <li>{{ $servicePlan->description }}</li>
                        
                    </ul>
                </div>
                
            </div>
        </div>

      </div>
  </div>

</section>