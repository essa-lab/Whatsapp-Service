<section  style="padding-bottom:90px">

    <div class="container free-trail-background" >

        <div class="row" style="margin: 10px 25px 10px 25px;">
            <div class="col-lg-12">
              <div class="ud-section-title">
                <span>Connect your instance</span>
                <p>
                    Scan this QR code to connect your WhatsApp phone number with this instance. After that you are able to send and receive WhatsApp messages.
                </p>
              </div>
            </div>
          </div>

        <div class="row " style="margin: 10px 25px 10px 25px;">
            
            <div class="col-xl-4 col-lg-4 col-sm-12 " wire:init="initQr">
              
                @if ( $qr && $seconds <= 60)
                    <div wire:poll.keep-alive.1s></div>
                    <img  src="{{$qr}}" class="free-trail-image" style="height: 286px" alt="">
                @elseif( $seconds > 60)
                    <div wire:loading.remove style="position: relative">
                        <img  src="{{$qr}}" class="free-trail-image qr-end" style="height: 286px" alt="">
                        <span class="reload-item" wire:click="refreshQr" wire:loading.attr="disabled" ><i class="lni lni-reload" style="font-size: 36px;padding:10px"></i>Click Here to refresh <br> QR code</span>
                    </div>
                    <div wire:loading class="spinner"></div>
                @else
                <div class="free-trail-image" style="height: 286px">
                    <div class=" spinner"></div>
                </div>
                @endif
                    


            </div>

            <div class="col-xl-6 col-lg-6 col-sm-12 " >
                <img  src="{{asset('assets/images/scan-wa.gif')}}" class="free-trail-image" style="height: 286px;" alt="">
            </div>
        
        </div>

    </div>
</section>