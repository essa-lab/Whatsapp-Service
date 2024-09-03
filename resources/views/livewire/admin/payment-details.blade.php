<section id="contact" class="ud-contact" style="background-color: #ffffff">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
                <div class="ud-contact-form-wrapper wow fadeInUp" data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <h3 class="ud-contact-form-title">Payment Information : </h3>
                    <form wire:submit='editPaymentInformation' class="ud-contact-form">

                        <div class="ud-form-group">
                            <label for="name">Name*</label>
                            <input wire:model='name' type="text" name="name" disabled>
                        </div>

                        @foreach($config as $key=>$c)
                        <div class="ud-form-group">
                            <label for="{{$key}}">{{$key}}*</label>
                            <input wire:model='config.{{$key}}' type="text" name="{{$key}}">
                        </div>
                        @endforeach


                        <div class="ud-form-group"
                            style="display: flex;
                        justify-content: start;">
                            <label for="active">Is Active</label>
                            <input style="width: 25%" wire:model='active' type="checkbox" name="active"
                                @if ($active) checked @endif>

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
            
        </div>

        
       
    </div>
</section>
