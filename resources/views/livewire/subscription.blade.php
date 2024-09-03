<div>

    <section id="pricing" class="ud-pricing">
      
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-section-title mx-auto text-center" style="margin-bottom: 70px">
                        <span>Pricing</span>
                        <h2>Our Pricing Plans</h2>
                        <p>
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row g-0 align-items-center justify-content-center">
                @foreach ($servicePlans as $servicePlan)
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="ud-single-pricing  wow fadeInUp {{ $servicePlan->service_plan_id == 3 ? 'active' : ($servicePlan->service_plan_id == 2 ? 'first-item' : 'last-item') }}"
                            data-wow-delay=".15s"
                            style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                            @if ($servicePlan->service_plan_id == 3)
                                <span class="ud-popular-tag">POPULAR</span>
                            @endif
                            <div class="ud-pricing-header">
                                <h3>{{ $servicePlan->plan_name }}</h3>
                                <h4>$ {{ $servicePlan->price }}/mo</h4>
                            </div>
                            <div class="ud-pricing-body">
                                <ul>
                                    <li>Instances : {{ $servicePlan->instances_limit }}</li>
                                    <li>Request Limit : {{ $servicePlan->requests_limit }}</li>
                                    <li>{{ $servicePlan->description }}</li>
                                    {{-- <li>Free updates</li>
                      <li>Use on 1 (one) project</li>
                      <li>4 Months support</li> --}}
                                </ul>
                            </div>
                            <div class="ud-pricing-footer">
                                {{-- wire:click='purchase({{$servicePlan->service_plan_id}})' --}}
                                {{-- onclick="return purchasePlan({{ $servicePlan->service_plan_id }})" --}}
                                <a wire:click='purchase({{$servicePlan->service_plan_id}})' 
                                    href="javascript:void(0)" class="ud-main-btn ud-border-btn">
                                    Purchase Now
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="faq" class="ud-faq">
        <div class="shape">
            <img src="assets/images/faq/shape.svg" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-section-title text-center mx-auto">
                        <span>FAQ</span>
                        <h2>Any Questions? Answered</h2>
                        <p>
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="ud-single-faq wow fadeInUp" data-wow-delay=".1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="accordion">
                            <button class="ud-faq-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                aria-expanded="false">
                                <span class="icon flex-shrink-0">
                                    <i class="lni lni-chevron-down"></i>
                                </span>
                                <span>How to use UIdeck?</span>
                            </button>
                            <div id="collapseOne" class="accordion-collapse collapse" style="">
                                <div class="ud-faq-body">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a
                                    type specimen book.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ud-single-faq wow fadeInUp" data-wow-delay=".15s"
                        style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                        <div class="accordion">
                            <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo">
                                <span class="icon flex-shrink-0">
                                    <i class="lni lni-chevron-down"></i>
                                </span>
                                <span>How to download icons from Lineicons?</span>
                            </button>
                            <div id="collapseTwo" class="accordion-collapse collapse">
                                <div class="ud-faq-body">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a
                                    type specimen book.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ud-single-faq wow fadeInUp" data-wow-delay=".2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="accordion">
                            <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree">
                                <span class="icon flex-shrink-0">
                                    <i class="lni lni-chevron-down"></i>
                                </span>
                                <span>Is GrayGrids part of UIdeck?</span>
                            </button>
                            <div id="collapseThree" class="accordion-collapse collapse">
                                <div class="ud-faq-body">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a
                                    type specimen book.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ud-single-faq wow fadeInUp" data-wow-delay=".1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="accordion">
                            <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour">
                                <span class="icon flex-shrink-0">
                                    <i class="lni lni-chevron-down"></i>
                                </span>
                                <span>Can I use this template for commercial project?</span>
                            </button>
                            <div id="collapseFour" class="accordion-collapse collapse">
                                <div class="ud-faq-body">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a
                                    type specimen book.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ud-single-faq wow fadeInUp" data-wow-delay=".15s"
                        style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                        <div class="accordion">
                            <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive">
                                <span class="icon flex-shrink-0">
                                    <i class="lni lni-chevron-down"></i>
                                </span>
                                <span>Do you have plan releasing Play Pro?</span>
                            </button>
                            <div id="collapseFive" class="accordion-collapse collapse">
                                <div class="ud-faq-body">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a
                                    type specimen book.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ud-single-faq wow fadeInUp" data-wow-delay=".2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="accordion">
                            <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix">
                                <span class="icon flex-shrink-0">
                                    <i class="lni lni-chevron-down"></i>
                                </span>
                                <span>Where and how to host this template?</span>
                            </button>
                            <div id="collapseSix" class="accordion-collapse collapse">
                                <div class="ud-faq-body">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a
                                    type specimen book.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <script>
        function purchasePlan(id) {


            Swal.fire({
                title: "Do you want to Purchase this Plan?",
                showDenyButton: true,
                confirmButtonText: "Purchase",
                denyButtonText: `Cancel`
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{route('payment',['payment'=>"+id+"])}}";

                } else if (result.isDenied) {
                    Swal.fire("Changes are not saved", "", "info");
                }
            });
        }
    </script> --}}
</div>
