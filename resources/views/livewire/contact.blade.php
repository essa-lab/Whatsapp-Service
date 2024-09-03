<section id="contact" class="ud-contact" style="background-color: #ffffff">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-xl-12 col-lg-12">
                <div class="ud-contact-form-wrapper wow fadeInUp" data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <h3 class="ud-contact-form-title">Send us a Message</h3>
                    <form wire:submit='sendMessage' class="ud-contact-form">
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
                            <input wire:model='phone' type="text" name="phone" placeholder="+885 1254 5211 552" required>
                        </div>
                        <div class="ud-form-group">
                            <label for="message">Message*</label>
                            <textarea wire:model='message' name="message" rows="1" placeholder="type your message here" required></textarea>
                        </div>
                        <div class="ud-form-group mb-0">
                            <button type="submit" class="ud-main-btn">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
