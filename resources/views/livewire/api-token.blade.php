<section id="contact" class="ud-contact" style="background-color: #ffffff">
    <div class="container">

        <div class="row" style="">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class=" wow fadeInUp" data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <h3 class="ud-contact-form-title">Create API Token
                    </h3>
                    <p>API tokens allow third-party services to authenticate with our application on your behalf.</p>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                <div class="ud-contact-form-wrapper wow fadeInUp" data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <form wire:submit='generateToken' class="ud-contact-form">
                        <div class="ud-form-group">
                            <label for="token">Token</label>
                            <input id="token" wire:model='token' type="text" name="token" disabled>
                        </div>

                        <div class="ud-form-group mb-0">
                            <button type="submit" class="ud-main-btn">
                                Generate New Token
                            </button>
                            <button onclick="copy(this)" type="button" class="ud-main-btn" >
                                Copy
                            </button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>

    <script>
        function copy(button) {
            button.textContent = "Copied";
            var copyText = document.getElementById("token");
            navigator.clipboard.writeText(copyText.value);
        }
    </script>
</section>
