<section id="contact" class="ud-contact" style="background-color: #ffffff">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class=" wow fadeInUp" data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <h3 class="ud-contact-form-title">Profile Information</h3>
                    <p>Update your account's information and email address.</p>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                <div class="ud-contact-form-wrapper wow fadeInUp" data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <form wire:submit='updateInformation' class="ud-contact-form">
                        <div class="ud-form-group">
                            <label for="fullName">Full Name*</label>
                            <input wire:model='name' type="text" name="fullName" placeholder="Adam Gelius" required>
                        </div>
                        <div class="ud-form-group">
                            <label for="email">Email*</label>
                            <input wire:model='email' type="email" name="email" placeholder="example@yourmail.com" required>
                        </div>
                        <div class="ud-form-group mb-0">
                            <button type="submit" class="ud-main-btn">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            
        </div>
        <br/>
        <div class="row" style="padding-top:20px;border-top:1px solid rgb(207, 202, 202)">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class=" wow fadeInUp" data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <h3 class="ud-contact-form-title">Update Password</h3>
                    <p>Ensure your account is using a long, random password to stay secure.</p>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                <div class="ud-contact-form-wrapper wow fadeInUp" data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <form wire:submit='updatePassword' class="ud-contact-form">
                        <div class="ud-form-group">
                            <label for="current">Current Password</label>
                            <input wire:model='password' type="password" name="current"  required>
                        </div>
                        <div class="ud-form-group">
                            <label for="password">New Password</label>
                            <input wire:model='newPassword' type="password" name="password"  required>
                        </div>
                        <div class="ud-form-group">
                            <label for="confirm">Confirm Password</label>
                            <input wire:model='confirmPassword' type="password" name="confirm"  required>
                        </div>
                        <div class="ud-form-group mb-0">
                            <button type="submit" class="ud-main-btn">
                                Save
                            </button>
                        </div>
                    </form>
                    @if($message)
                        <h6 style="text-align: end;color:red">{{$message}}</h6>
                    
                    @endif
                </div>
            </div>

            
        </div>
    </div>
</section>
