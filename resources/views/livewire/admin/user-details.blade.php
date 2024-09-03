<section id="contact" class="ud-contact" style="background-color: #ffffff">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12" >
                <div class="ud-contact-form-wrapper wow fadeInUp" data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;height: 700px;">
                    <h3 class="ud-contact-form-title">Personal Information : </h3>
                    <form wire:submit='editPersonalInformation' class="ud-contact-form">

                        <div class="ud-form-group">
                            <label for="fullName">Full Name*</label>
                            <input wire:model='name' type="text" name="fullName" placeholder="Adam Gelius" required>
                        </div>

                        <div class="ud-form-group">
                            <label for="email">Email*</label>
                            <input wire:model='email' type="email" name="email" placeholder="example@yourmail.com" required>
                        </div>

                        <div class="ud-form-group">
                            <label for="phone">Phone*</label>
                            <input wire:model='phone' type="text" name="phone" placeholder="+964 1254 5211 552">
                        </div>

                        <div class="ud-form-group">
                            <label for="apiToken">ApiToken*</label>
                            <input style="font-size: 13px" wire:model='token' type="text" name="apiToken" disabled>
                        </div>
                        
                        <div class="ud-form-group mb-0" style="display: flex;
                        justify-content: end;
                        
                        border-top: 1px solid #dadada;
                        margin-top: 100px;
                        padding-top: 15px;">
                            <button type="submit" class="ud-main-btn">
                                Update
                            </button>
                        </div>
                    </form>
                    
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="ud-contact-form-wrapper wow fadeInUp" data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;height: 700px;">
                    <h3 class="ud-contact-form-title">{{$user->subscripe ? 'Active Subscription :':'No Active Subscription'}} </h3>
                    <form wire:submit='editSubscriptionInformation' class="ud-contact-form">
                        <div class="ud-form-group">
                            <label for="ServicePlan">ServicePlan</label>
                            <select style="width: 100%;
                            border: none;
                            height: 50px;
                            background: none;
                            border-bottom: 1px solid #dfdfdf;"  wire:model='servicePlan'>
                                @foreach ($servicePlans as $s)
                                    <option value="{{$s->service_plan_id}}">{{$s->plan_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="ud-form-group">
                            <label for="date">Expire Date*</label>
                            <input wire:model='expireDate' type="date" name="date" required>
                        </div>
                        <div class="ud-form-group" style="display: flex;
                        justify-content: space-between;">
                            <div>
                            <label for="requestLimit">Request Limit*</label>
                            <input wire:model='requestsLimit' type="text" name="requestLimit" required>
                            </div>
                            <div>
                            <label for="requestsUsed">Request Used*</label>
                            <input wire:model='requestsUsed' type="text" name="requestsUsed" required>
                            </div>
                        </div>

                        <div class="ud-form-group" style="display: flex;
                        justify-content: space-between;">
                            <div>
                            <label for="instanceLimit">Instance Limit*</label>
                            <input wire:model='instanceLimit' type="text" name="instancesLimit" required>
                            </div>
                            <div>
                            <label for="instancesUsed">Instance Used*</label>
                            <input wire:model='instanceUsed' type="text" name="instancesUsed" required>
                            </div>
                        </div>

                        <div class="ud-form-group" style="display: flex;
                        justify-content: start;">

                            <label for="isActive">Is Active</label>
                            <input style="width: 25%" wire:model='isActive' type="checkbox" name="isActive" @if($isActive) checked @endif>
                            
                        </div>
                        
                        <div class="ud-form-group mb-0" style="display: flex;
                        justify-content: end;
                        
                        border-top: 1px solid #dadada;
                        margin-top: 59px;
                        padding-top: 15px;">
                            <button type="submit" class="ud-main-btn">
                                Update
                            </button>
                        </div>
                    </form>
                    <div style="position: absolute;
                    top: 25%;
                    left: 41%;"  class="spinner" wire:loading></div>
                </div>
            </div>
        </div>

        <div class="row " style="margin: 20px 25px 10px 25px;">

            <div class="col-xl-12 col-lg-12 col-sm-12 ">

                <div class="ud-section-title">
                    <span>Subscriptions</span>
                </div>
                <div style="overflow-x: auto">

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Reference ID</th>
                        <th scope="col">Payment ID</th>
                        <th scope="col">Plan</th>

                        <th scope="col">Start At</th>
                        <th scope="col">Expires At</th>

                        <th scope="col">Instance Limit</th>
                        <th scope="col">Instance Used</th>

                        <th scope="col">Message Limit</th>

                        <th scope="col">Message Used</th>

                      </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($subscriptions as $key=>$subscription)
                        <tr wire:key='{{$key+1}}' >
                            <th scope="row">{{$subscription->id}}</th>
                            <td>{{$subscription->reference_id}}</td>
                            <td>{{$subscription->payment_id}}</td>

                            <td>{{$subscription->servicePlan->plan_name}}</td>

                            <td>{{$subscription->subscription_start_date }}</td>
                            <td>{{$subscription->subscription_end_date }}</td>
                            <td>{{$subscription->instances_limit}}</td>
                            <td>{{$subscription->instances_used}}</td>
                            <td>{{$subscription->requests_limit}}</td>
                            <td>{{$subscription->requests_used}}</td>

                           
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>

            </div>

        </div>

        <div class="row " style="margin: 50px 25px 10px 25px;">

            <div class="col-xl-12 col-lg-12 col-sm-12 ">

                <div class="ud-section-title">
                    <span>Sessions</span>
                </div>
                <div style="overflow-x: auto">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Session Name</th>
                        <th scope="col">Whatsapp Phone</th>
                        <th scope="col">Whatsapp Name</th>

                        <th scope="col">Whatsapp Image</th>
                        <th scope="col">Status</th>

                      </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($user->sessions as $key=>$session)
                        <tr wire:key='{{$key+1}}' >
                            <th scope="row">{{$session->id}}</th>
                            <td>{{$session->name}}</td>
                            <td>{{$session->phone}}</td>

                            <td>{{$session->push_name}}</td>

                            <td style="width: 15%"><img style="width:25%;border-radius: 50%" src="{{$session->pic_url}}"></td>
                            <td >{{$session->status }}</td>
                           

                           
                          </tr>
                        @endforeach
                    </tbody>
                  </table>

                </div>
            </div>

        </div>
    </div>
</section>
