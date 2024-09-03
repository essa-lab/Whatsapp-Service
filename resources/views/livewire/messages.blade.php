<section style="padding-bottom:90px">

    <div class="container free-trail-background" >

        <div class="row" style="margin: 10px 25px 10px 25px;">
            <div class="col-lg-12">
              <div class="ud-section-title">
                <span>Your Connected Whatsapp Phone Number</span>
                <div  style="display: flex">
                  @if(!$profileImage)
                    <span class="lni lni-user user-icon"></span>
                  @else
                  <img style="    width: 60px;
                  border-radius: 50%;
                  margin-right: 20px;" src="{{$profileImage}}" />
                  @endif
                    <div>
                <p>
                    {{$name??'N/A'}}
                </p>
                <p>{{$phoneNumber}}</p>
                    </div>
                </div>
              </div>
            </div>
          </div>
    </div>

    <div class="container free-trail-background" style="margin-top:30px ">

        <div class="row" style="margin: 10px 25px 10px 25px;">
            <div class="col-lg-12">
              <div class="ud-section-title">
                <span>Send test WhatsApp message</span>
                <p style="font-size: 13px">Receiver phone number
                </p>

                <form class="ud-contact-form" wire:submit="send">
                    <div class="ud-form-group">
                    <input style="
                    padding: 15px 25px;
                    height: 55px;
                " type="text" name="reciverPhoneNumber" wire:model="reciverPhoneNumber" placeholder="+9647519998888">
                    <button type="submit" class="ud-main-btn">
                        Send 
                        </button>
                    </div>
                   
                </form>

                <p style="font-size: 11px">Use a full number with the country code!

                </p>
                
              </div>
            </div>
          </div>
    </div>

    <div class="container" style="display:flex;justify-content: end;margin-top:30px ">
      <button wire:click='deleteInstance()' type="button" style="background-color: #d10b0b" class="ud-main-btn">Delete Instance</button>
    </div>

   
</section>