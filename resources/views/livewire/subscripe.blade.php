<section id="contact" class="ud-contact" style="background-color: #ffffff">
    <div class="container">
        @if(count($instance)>0 && ($instance->where('is_active',1)->value('service_plan_id')!=1))
        <div class="row ">
            <div class="col-xl-8 col-lg-7">
                <div class="ud-contact-content-wrapper">
                    <div class="ud-contact-title" style="margin-bottom: 25px">
                        <span style="color: #008367">Your Subscription</span>
                    </div>
                    <div class="ud-contact-info-wrapper">
                        <table class="table">
                            <thead>
                                <tr>

                                    <th style="width: 50%" scope="col">Invoice</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Download</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach($instance as $i)
                                @if(isset($i->reference_id))
                                <tr>
                                    <td>{{ $i->reference_id }}</td>
                                    <td>{{ $i->created_at }}</td>

                                    <td>{{ $i->price }}</td>

                                    <td><a href="{{route('generate.pdf',['id'=>$i->id])}}"><i  style="cursor: pointer" class="lni lni-download"></i></a></td>
                                </tr>
                                @endif
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="ud-contact-form-wrapper wow fadeInUp" data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <h3 style= "color: #008367" class="ud-contact-form-title">Your Subscription</h3>
                    {{-- <form class="ud-contact-form">
                        <div class="ud-form-group">
                            <label for="fullName">Full Name*</label>
                            <input type="text" name="fullName" placeholder="Adam Gelius">
                        </div>
                        <div class="ud-form-group">
                            <label for="email">Email*</label>
                            <input type="email" name="email" placeholder="example@yourmail.com">
                        </div>
                        <div class="ud-form-group">
                            <label for="phone">Phone*</label>
                            <input type="text" name="phone" placeholder="+885 1254 5211 552">
                        </div>
                        <div class="ud-form-group">
                            <label for="message">Message*</label>
                            <textarea name="message" rows="1" placeholder="type your message here"></textarea>
                        </div>
                        <div class="ud-form-group mb-0">
                            <button type="submit" class="ud-main-btn">
                                Send Message
                            </button>
                        </div>
                    </form> --}}
                    
                    @php
                        $activeInstance=$instance->where('is_active',1)->first()
                    @endphp

                    <div>
                        <p><i class="lni lni-package"></i>
                            {{$activeInstance['instances_used']}} Instance used out of {{  $activeInstance['instances_limit'] }} </p>
                    </div>
                    <div>
                        <p><i class="lni lni-bookmark"></i>
                            {{ $activeInstance['servicePlan']->plan_name }}  </p>
                    </div>
                    <div>
                        <p><i class="lni lni-bookmark"></i>
                            Expires at: {{ $activeInstance['subscription_end_date'] }} </p>
                    </div>
                    {{-- <div style="display: flex;justify-content: space-between;border-top:1px solid gray;margin-top:15px">
                        <button onclick="return cancelPlan({{ $activeInstance['service_plan_id'] }})"
                            style="margin-top:10px;padding:10px 5px;background-color:rgba(207, 52, 13, 0.795)"
                            type="button" class="ud-main-btn">Delete</button>
                        <button onclick="return updatePlan({{ $activeInstance['service_plan_id'] }})"
                            style="margin-top:10px;padding:10px 5px;background-color:rgba(52, 207, 13, 0.795)"
                            type="button" class="ud-main-btn">Update</button>
                    </div> --}}
                </div>
            </div>
        </div>
        @else
        <div class="row ">
           
            

            <div class="col-lg-12" >
                <div class="ud-section-title-subscription" style="display: flex;flex-direction: column;justify-content: center;align-items: center">
                  <span>No Subscription</span>
                  <span>Get started By subscripte to one of our plans</span>
  
  
                <div class="subscription-buttons">
                    <a href="{{route('subscriptions')}}" class="ud-main-btn" style="
                    background-color: rgb(4, 180, 4);
                    margin-top: 15px;
                    margin-left: 10px;
                ">Buy a subscription</a>
  
                </div>
                </div>
              </div>

        </div>
        @endif

    </div>

    
</section>
