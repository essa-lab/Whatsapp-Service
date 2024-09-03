<section id="contact" class="ud-contact" style="background-color: #ffffff">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="ud-contact-form-wrapper wow fadeInUp" data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <h3 class="ud-contact-form-title">Plan Information : </h3>
                    <form wire:submit='editPlan' class="ud-contact-form">

                        <div class="ud-form-group">
                            <label for="planName">Plan Name</label>
                            <input wire:model='name' type="text" name="planName" placeholder="Por Plan" required>
                        </div>

                        <div class="ud-form-group">
                            <label for="description">Description</label>
                            <textarea rows="1" wire:model='description'></textarea>
                            {{-- <input wire:model='description' type="description" name="description" placeholder="example@yourmail.com" required> --}}
                        </div>

                        <div class="ud-form-group"
                            style="display: flex;
                        justify-content: space-between;">
                            <div style="width: 45%">
                                <label for="instanceLimit">Instance Limit</label>
                                <input wire:model='instanceLimit' type="number" name="instanceLimit">
                            </div>
                            <div style="width: 45%">
                                <label for="requestLimit">Requests Limit</label>
                                <input wire:model='requestLimit' type="number" name="requestLimit">
                            </div>
                        </div>

                        <div class="ud-form-group"
                            style="display: flex;
                        justify-content: space-between;">
                            <div style="width: 45%">
                                <label for="prive">Price</label>
                                <input wire:model='price' type="number" name="price">
                            </div>
                            <div style="width: 45%">
                                <label for="month">Duration Months*</label>
                                <input wire:model='month' type="number" name="month">
                            </div>
                        </div>


                        <div class="ud-form-group"
                            style="display: flex;
                        justify-content: start;">
                            <label for="isActive">Is Active</label>
                            <input style="width: 25%" wire:model='isActive' type="checkbox" name="isActive"
                                @if ($isActive) checked @endif>

                        </div>


                        <div class="ud-form-group mb-0"
                            style="display: flex;
                        justify-content: end;
                        
                        border-top: 1px solid #dadada;
                        margin-top: 100px;
                        padding-top: 15px;">
                            <button type="submit" class="ud-main-btn">
                                Update
                            </button>
                        </div>
                    </form>
                    <div style="position: absolute;
                    top: 50%;
                    left: 41%;"  class="spinner" wire:loading></div>

                </div>
            </div>

        </div>




    </div>
</section>
