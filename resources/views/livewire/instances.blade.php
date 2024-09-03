<section class="ud-features" style="padding-bottom:90px">

    @if ($this->instance->service_plan_id == 1) {{-- free plan --}}

        <div class="container free-trail-background">

            <div class="row parent" style="margin: 10px 25px 10px 25px;">
                <div class="col-lg-12">
                    <div class="ud-section-title-subscription"
                        style="display: flex;flex-direction: column;justify-content: center;align-items: center">
                        <span>You do not have any instances yet. Let's change this!</span>


                        <div class="subscription-buttons">
                            <button wire:click='goToFreePlan()' class="ud-main-btn"
                                style="margin-top: 15px;">Free Plan</button>
                            <button wire:click='goToChoosePlan()' class="ud-main-btn"
                                style="
                  background-color: rgb(4, 180, 4);
                  margin-top: 15px;
                  margin-left: 10px;
              ">Buy
                                a subscription</button>

                        </div>
                    </div>
                </div>
            </div>
        @else
            
            <div class="container">
              <div class="row ud-section-title-subscription"
              style="display: flex;flex-direction: row;justify-content: space-between;">
              <div class="col-xl-6 col-lg-6 col-md-7 col-sm-12">
              <span class="insatnce-text">You Have created ({{ $instance->instances_used }}) instance out of
                  ({{ $instance->instances_limit }})</span>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-5 col-sm-12">

                  <div class="insatnce-text" wire:click="$refresh" class="ud-section-title-subscription"
                  style="display: flex;flex-direction: row;justify-content: end;">

                  <button wire:click='createInstance' style="padding: 10px 5px" class="ud-main-btn"><i
                          style="margin-right:10px" class="lni lni-plus"></i>Create New Instance</button>
              </div>
                </div>
            </div>

                <div class="row " style="margin: 10px 25px 10px 25px;">


                    <div class="col-xl-12 col-lg-12 col-sm-12 ">


                        

                        @foreach ($sessions as $key => $session)
                            <br />
                            <div class="session-card free-trail-background" wire:key='{{ $key }}' wire:click='openSession("{{ $session->name }}")'
                                class="intance-card"
                                style="  padding:20px;display: flex;justify-content: space-between">
                                <div class="session-card-section" style="display: flex;flex-direction: column">
                                    <div style="display: ruby">
                                        <i class="lni lni-cog"></i>
                                        <p>&nbsp;Instance {{ $session->name  }}</p>
                                    </div>
                                    <div style="display: ruby">
                                        <i class="lni lni-map-marker"></i>
                                        <p>&nbsp;1.0.0</p>
                                    </div>
                                </div>

                                <div class="session-card-section" style="display: flex;flex-direction: column">
                                    <div style="display: ruby">
                                        </i>
                                        <p
                                            style="background-color: rgb(4 255 100 / 42%);
                                                    padding: 2px;
                                                     border-radius: 10px;">
                                            &nbsp;status: {{ $session->status }}</p>
                                    </div>
                                    <div style="display: ruby">
                                        <i class="lni lni-calendar"></i>
                                        <p>&nbsp;Expires At : {{ $session->updated_at }}</p>
                                    </div>
                                </div>

                            </div>
                        @endforeach

                    </div>

                </div>



            </div>
    @endif

    </div>
</section>
