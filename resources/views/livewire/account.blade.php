<div>
    <section  class="ud-features min-container2">
        <div class="container free-trail-background">
            <div class="row parent">
                <div class="col-xl-4 col-lg-4 col-sm-12 free-trail-grid" >
                    <div class="free-trail-item"  >
                        <div class="free-trail-sub-item free-trail-sub-item-2">
                    <p class="free-trail-text">Instance</p>
                    <p class="free-trail-text-d">{{$sessionName}}</p>
                        </div>
                    <div class="free-trail-sub-item-2">
                        <p class="free-trail-text">Current State</p>

                        <p class="free-trail-text-d" wire:poll.4s='checkStatusChange'>{{Str::upper($previousStatus)}}</p>
                    

                    </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-sm-12 free-trail-grid" >
                    <div class="free-trail-item" >
                        <div class="free-trail-sub-item free-trail-sub-item-2">
                            <p class="free-trail-text">Type</p>
                            <p class="free-trail-text-d">{{($user->subscripe->servicePlan->plan_name)}}</p>
                        </div>
                    <div class="free-trail-sub-item-2">
                        <p class="free-trail-text">Created At</p>
                        <p class="free-trail-text-d">{{$user->subscripe->subscription_start_date}}</p>
                    </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-sm-12 free-trail-grid" >
                    <div class="free-trail-item"  >
                        <div class="free-trail-sub-item free-trail-sub-item-2" >
                            <p class="free-trail-text">Expires In</p>
                            <p class="free-trail-text-d">{{$expires_in}}hour(s)</p>
                        </div>
                    <div class="">
                        <p class="free-trail-text">Expires At</p>
                        <p class="free-trail-text-d">{{$user->subscripe->subscription_end_date}}</p>
                    </div>
                    </div>
                </div>
    
    
            </div>

        </div>
    </section>

    @if($previousStatus != 'connected')
        @livewire('qr-instance',['sessionName'=>$sessionName]) 
    @else
        @livewire('messages',['phoneNumber'=>$phoneNumber,'sessionName'=>$sessionName])
    @endif

</div>
