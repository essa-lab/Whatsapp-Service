@extends('app')

@section('title','Home')
@section('content')
    <!-- ====== Hero Start ====== -->
    <section class="ud-hero" id="home">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="ud-hero-content wow fadeInUp" data-wow-delay=".2s">
                <h1 class="ud-hero-title">
                  Introducing the WhatsApp API
                </h1>
                <p class="ud-hero-desc">
                  Experience effortless customer communication with our user-friendly WhatsApp API. Easily connect with clients through simple HTTP requests, requiring only a smartphone and valid phone number(s). Elevate your messaging with our high-performing solution.
  
                </p>
                <ul class="ud-hero-buttons">
                  <li>
                    <a href="#" rel="nofollow noopener" target="_blank" class="ud-main-btn ud-white-btn">
                      Get Started
                    </a>
                  </li>
                  {{-- <li>
                    <a href="https://github.com/uideck/play-bootstrap" rel="nofollow noopener" target="_blank" class="ud-main-btn ud-link-btn">
                      Learn More <i class="lni lni-arrow-right"></i>
                    </a>
                  </li> --}}
                </ul>
              </div>
              {{-- <div
                class="ud-hero-brands-wrapper wow fadeInUp"
                data-wow-delay=".3s"
              >
                <img src="assets/images/hero/brand.svg" alt="brand" />
              </div> --}}
              <div class="ud-hero-image wow fadeInUp" data-wow-delay=".25s">
                <img style="border-radius:10px 10px 0px 0px" src="assets/images/hero/banner3.jpg" alt="hero-image" />
                <img
                  src="assets/images/hero/dotted-shape.svg"
                  alt="shape"
                  class="shape shape-1"
                />
                <img
                  src="assets/images/hero/dotted-shape.svg"
                  alt="shape"
                  class="shape shape-2"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ====== Hero End ====== -->
  
      <!-- ====== Features Start ====== -->
      <section id="features" class="ud-features">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="ud-section-title">
                <span>Features</span>
                <h2>All essentials for WhatsApp messaging at your fingertips.</h2>
                <p>
                  Effortless sending and receiving of WhatsApp messages has never been more accessible. Our service ensures high-quality performance at fair and transparent pricing.
                </p>
              </div>
            </div>
          </div>
          <div class="row" style="margin-top:30px">
            <div class="col-xl-3 col-lg-3 col-sm-6">
              <div class="ud-single-feature wow fadeInUp" data-wow-delay=".1s">
                <div class="ud-feature-icon">
                  <i class="lni lni-gift"></i>
                </div>
                <div class="ud-feature-content">
                  <h3 class="ud-feature-title">Rest API</h3>
                  <p class="ud-feature-desc">
                      We offer a comprehensive REST API that allows you to manage all your linked WhatsApp phone numbers from a single platform.
                  </p>
                  
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-6">
              <div class="ud-single-feature wow fadeInUp" data-wow-delay=".15s">
                <div class="ud-feature-icon">
                  <i class="lni lni-move"></i>
                </div>
                <div class="ud-feature-content">
                  <h3 class="ud-feature-title">Secure Messaging</h3>
                  <p class="ud-feature-desc">
                      We ensure absolute privacy for your messages, committing to never store any WhatsApp interactions, including messages.
                  </p>
                  
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-6">
              <div class="ud-single-feature wow fadeInUp" data-wow-delay=".2s">
                <div class="ud-feature-icon">
                  <i class="lni lni-layout"></i>
                </div>
                <div class="ud-feature-content">
                  <h3 class="ud-feature-title">Continuous Accessibility</h3>
                  <p class="ud-feature-desc">
                      Our API and systems are available around the clock, 24/7, with no scheduled maintenance. Enjoy real-time updates seamlessly without any downtimes.
                  </p>
                  
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-6">
              <div class="ud-single-feature wow fadeInUp" data-wow-delay=".25s">
                <div class="ud-feature-icon">
                  <i class="lni lni-layers"></i>
                </div>
                <div class="ud-feature-content">
                  <h3 class="ud-feature-title">Flexible Billing</h3>
                  <p class="ud-feature-desc">
                      Feel free to subscribe to additional billing plans whenever necessary, and you have the flexibility to unsubscribe from any billing plans at any time within your account.
                  </p>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ====== Features End ====== -->
  
      <!-- ====== About Start ====== -->
      <section id="about" class="ud-about">
        <div class="container">
          <div class="ud-about-wrapper wow fadeInUp" data-wow-delay=".2s">
            <div class="ud-about-content-wrapper">
              <div class="ud-about-content">
                <span class="tag">About Us</span>
                <h2>Empowering Connections, Elevating Conversations: Discover</h2>
                <p>
                  Welcome to Whatsapp service, where innovation meets seamless communication. Our mission is to provide a comprehensive suite of tools, including a powerful WhatsApp API, designed to transform the way you connect, engage, and thrive in the digital realm.
                </p>
  
                <p>
                   we understand the pulse of modern communication. From crafting personalized WhatsApp chatbots to ensuring 100% privacy in your messages, our solutions are tailored to enhance your digital experience. We believe in simplicity and efficiency, reflected in our user-friendly REST API that enables you to manage all your WhatsApp phone numbers effortlessly.
                </p>
                <a href="https://snono-systems.com/" class="ud-main-btn">Learn More</a>
              </div>
            </div>
            <div class="ud-about-image">
              <img src="assets/images/about/about-image.svg" alt="about-image" />
            </div>
          </div>
        </div>
      </section>
      <!-- ====== About End ====== -->
  
      <!-- ====== Pricing Start ====== -->
      <section id="pricing" class="ud-pricing">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="ud-section-title mx-auto text-center">
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
            <div class="col-lg-4 col-md-6 col-sm-10">
              <div
                class="ud-single-pricing first-item wow fadeInUp"
                data-wow-delay=".15s"
              >
                <div class="ud-pricing-header">
                  <h3>STARTING FROM</h3>
                  <h4>$ 19.99/mo</h4>
                </div>
                <div class="ud-pricing-body">
                  <ul>
                    <li>5 User</li>
                    <li>All UI components</li>
                    <li>Lifetime access</li>
                    <li>Free updates</li>
                    <li>Use on 1 (one) project</li>
                    <li>4 Months support</li>
                  </ul>
                </div>
                <div class="ud-pricing-footer">
                  <a href="javascript:void(0)" class="ud-main-btn ud-border-btn">
                    Purchase Now
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10">
              <div
                class="ud-single-pricing active wow fadeInUp"
                data-wow-delay=".1s"
              >
                <span class="ud-popular-tag">POPULAR</span>
                <div class="ud-pricing-header">
                  <h3>STARTING FROM</h3>
                  <h4>$ 30.99/mo</h4>
                </div>
                <div class="ud-pricing-body">
                  <ul>
                    <li>5 User</li>
                    <li>All UI components</li>
                    <li>Lifetime access</li>
                    <li>Free updates</li>
                    <li>Use on 1 (one) project</li>
                    <li>4 Months support</li>
                  </ul>
                </div>
                <div class="ud-pricing-footer">
                  <a href="javascript:void(0)" class="ud-main-btn ud-white-btn">
                    Purchase Now
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10">
              <div
                class="ud-single-pricing last-item wow fadeInUp"
                data-wow-delay=".15s"
              >
                <div class="ud-pricing-header">
                  <h3>STARTING FROM</h3>
                  <h4>$ 70.99/mo</h4>
                </div>
                <div class="ud-pricing-body">
                  <ul>
                    <li>5 User</li>
                    <li>All UI components</li>
                    <li>Lifetime access</li>
                    <li>Free updates</li>
                    <li>Use on 1 (one) project</li>
                    <li>4 Months support</li>
                  </ul>
                </div>
                <div class="ud-pricing-footer">
                  <a href="javascript:void(0)" class="ud-main-btn ud-border-btn">
                    Purchase Now
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ====== Pricing End ====== -->
  
      <!-- ====== FAQ Start ====== -->
      <section id="faq" class="ud-faq">
        <div class="shape">
          <img src="assets/images/faq/shape.svg" alt="shape" />
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
              <div class="ud-single-faq wow fadeInUp" data-wow-delay=".1s">
                <div class="accordion">
                  <button
                    class="ud-faq-btn collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                  >
                    <span class="icon flex-shrink-0">
                      <i class="lni lni-chevron-down"></i>
                    </span>
                    <span>How to use UIdeck?</span>
                  </button>
                  <div id="collapseOne" class="accordion-collapse collapse">
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
              <div class="ud-single-faq wow fadeInUp" data-wow-delay=".15s">
                <div class="accordion">
                  <button
                    class="ud-faq-btn collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                  >
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
              <div class="ud-single-faq wow fadeInUp" data-wow-delay=".2s">
                <div class="accordion">
                  <button
                    class="ud-faq-btn collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree"
                  >
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
              <div class="ud-single-faq wow fadeInUp" data-wow-delay=".1s">
                <div class="accordion">
                  <button
                    class="ud-faq-btn collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFour"
                  >
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
              <div class="ud-single-faq wow fadeInUp" data-wow-delay=".15s">
                <div class="accordion">
                  <button
                    class="ud-faq-btn collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFive"
                  >
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
              <div class="ud-single-faq wow fadeInUp" data-wow-delay=".2s">
                <div class="accordion">
                  <button
                    class="ud-faq-btn collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseSix"
                  >
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
      <!-- ====== FAQ End ====== -->
  
      <!-- ====== Testimonials Start ====== -->
      <section id="usecases" class="ud-testimonials">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="ud-section-title mx-auto text-center">
                <span>Use Cases</span>
                <h2>Creative Applications for the WhatsApp API</h2>
                <p>
                  Unsure about the benefits of using our WhatsApp API? Explore these examples to discover the possibilities. Remember, with over 2 billion users worldwide, every day, the potential is vast!
                </p>
              </div>
            </div>
          </div>
  
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div style="height: 700px"
                class="ud-single-testimonial wow fadeInUp"
                data-wow-delay=".1s"
              >
              <div class="ud-testimonial-info">
                  <div class="ud-testimonial-image">
                    <img
                      src="assets/images/testimonials/ecommerce.jpg"
                      alt="ecommerce"
                    />
                  </div>
                  
                </div>
  
              <div class="ud-testimonial-meta">
                  <h4 style="margin-bottom: 10px;margin-top:7px">Online Retail</h4>
                  <p style="margin-bottom: 6px;color:var(--primary-color);">Enhance your rate of conversions.</p>
                </div>
                <div class="ud-testimonial-content">
                  <p>
                      If you operate an online store, you have the option to automatically engage with your customers through WhatsApp. Update them on discounts, restocks, or events seamlessly. The conversion rate is likely to outperform traditional email communication. If you have obtained their phone numbers with consent, consider shifting to WhatsApp messages rather than emails.
                  </p>
                </div>
                
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6">
              <div style="height: 700px"
                class="ud-single-testimonial wow fadeInUp"
                data-wow-delay=".15s"
              >
              <div class="ud-testimonial-info">
                  <div class="ud-testimonial-image">
                    <img
                      src="assets/images/testimonials/chatbot.jpg"
                      alt="agent"
                    />
                  </div>
                  
                </div>
  
              <div class="ud-testimonial-meta">
                  <h4 style="margin-bottom: 10px;margin-top:7px">Conversational Agent</h4>
                  <p style="margin-bottom: 6px;color:var(--primary-color);">Develop a conversational agent for WhatsApp.</p>
                </div>
                <div class="ud-testimonial-content">
                  <p>
                      With WhatsApp API, you can craft personalized WhatsApp Conversational Agent. Construct your unique chatbot to engage and automatically respond to users in conversation. The notable benefit: There's no requirement to develop a standalone smartphone app, and users aren't confined to staying on your website.                </p>
                </div>
                
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6">
              <div style="height: 700px"
                class="ud-single-testimonial wow fadeInUp"
                data-wow-delay=".2s"
              >
              <div class="ud-testimonial-info">
                  <div class="ud-testimonial-image">
                    <img
                      src="assets/images/testimonials/noti.jpg"
                      alt="notification"
                    />
                  </div>
                  
                </div>
              <div class="ud-testimonial-meta">
                  <h4 style="margin-bottom: 10px;margin-top:7px">Notifications</h4>
                  <p  style="margin-bottom: 6px;color:var(--primary-color);">Receive notifications for yourself or your team.</p>
                </div>
                <div class="ud-testimonial-content">
                  <p>
                      Now, you have the capability to dispatch alerts and notifications through WhatsApp. In the event of significant occurrences, you can inform yourself or your team by sending a WhatsApp message. Additionally, you can integrate commands to engage with the triggered event.                </p>
                </div>
                
              </div>
            </div>
  
            {{-- <div class="col-lg-4 col-md-6">
              <div
                class="ud-single-testimonial wow fadeInUp"
                data-wow-delay=".15s"
              >
                <div class="ud-testimonial-ratings">
                  <i class="lni lni-star-filled"></i>
                  <i class="lni lni-star-filled"></i>
                  <i class="lni lni-star-filled"></i>
                  <i class="lni lni-star-filled"></i>
                  <i class="lni lni-star-filled"></i>
                </div>
                <div class="ud-testimonial-content">
                  <p>
                    “Our members are so impressed. It's intuitive. It's clean.
                    It's distraction free. If you're building a community.
                  </p>
                </div>
                <div class="ud-testimonial-info">
                  <div class="ud-testimonial-image">
                    <img
                      src="assets/images/testimonials/author-02.png"
                      alt="author"
                    />
                  </div>
                  <div class="ud-testimonial-meta">
                    <h4>Margin Gesmu</h4>
                    <p>Founder @Lineicons</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div
                class="ud-single-testimonial wow fadeInUp"
                data-wow-delay=".2s"
              >
                <div class="ud-testimonial-ratings">
                  <i class="lni lni-star-filled"></i>
                  <i class="lni lni-star-filled"></i>
                  <i class="lni lni-star-filled"></i>
                  <i class="lni lni-star-filled"></i>
                  <i class="lni lni-star-filled"></i>
                </div>
                <div class="ud-testimonial-content">
                  <p>
                    “Our members are so impressed. It's intuitive. It's clean.
                    It's distraction free. If you're building a community.
                  </p>
                </div>
                <div class="ud-testimonial-info">
                  <div class="ud-testimonial-image">
                    <img
                      src="assets/images/testimonials/author-03.png"
                      alt="author"
                    />
                  </div>
                  <div class="ud-testimonial-meta">
                    <h4>William Smith</h4>
                    <p>Founder @GrayGrids</p>
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="ud-brands wow fadeInUp" data-wow-delay=".2s">
                <div class="ud-title">
                  <h6>From Developers to Developers</h6>
                </div>
                <div class="ud-brands-logo">
                  <div class="ud-single-logo">
                    <img width="100px" height="100px" src="assets/images/brands/rest-api.svg" alt="rest" />
                  </div>
                  <div class="ud-single-logo">
                      <img width="100px" height="100px"
                        src="assets/images/brands/laravel.svg"
                        alt="laravel"
                      />
                    </div>
                  <div class="ud-single-logo">
                    <img width="100px" height="100px" src="assets/images/brands/php.svg" alt="php" />
                  </div>
                  <div class="ud-single-logo">
                    <img width="100px" height="100px"
                      src="assets/images/brands/node-js-icon.svg"
                      alt="node-js-icon"
                    />
                  </div>
                  <div class="ud-single-logo">
                    <img width="100px" height="100px"
                      src="assets/images/brands/javascript-programming-language-icon.svg"
                      alt="javascript-programming-language-icon"
                    />
                  </div>
                  <div class="ud-single-logo">
                    <img width="100px" height="100px"
                      src="assets/images/brands/python-programming-language-icon.svg"
                      alt="python-programming-language-icon"
                    />
                  </div>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ====== Testimonials End ====== -->
  
      <!-- ====== Team Start ====== -->
      {{-- <section id="team" class="ud-team">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="ud-section-title mx-auto text-center">
                <span>Our Team</span>
                <h2>Meet The Team</h2>
                <p>
                  There are many variations of passages of Lorem Ipsum available
                  but the majority have suffered alteration in some form.
                </p>
              </div>
            </div>
          </div>
  
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-sm-6">
              <div class="ud-single-team wow fadeInUp" data-wow-delay=".1s">
                <div class="ud-team-image-wrapper">
                  <div class="ud-team-image">
                    <img src="assets/images/team/team-01.png" alt="team" />
                  </div>
  
                  <img
                    src="assets/images/team/dotted-shape.svg"
                    alt="shape"
                    class="shape shape-1"
                  />
                  <img
                    src="assets/images/team/shape-2.svg"
                    alt="shape"
                    class="shape shape-2"
                  />
                </div>
                <div class="ud-team-info">
                  <h5>Adveen Desuza</h5>
                  <h6>UI Designer</h6>
                </div>
                <ul class="ud-team-socials">
                  <li>
                    <a href="https://twitter.com/MusharofChy">
                      <i class="lni lni-facebook-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://twitter.com/MusharofChy">
                      <i class="lni lni-twitter-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://twitter.com/MusharofChy">
                      <i class="lni lni-instagram-filled"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-6">
              <div class="ud-single-team wow fadeInUp" data-wow-delay=".15s">
                <div class="ud-team-image-wrapper">
                  <div class="ud-team-image">
                    <img src="assets/images/team/team-02.png" alt="team" />
                  </div>
  
                  <img
                    src="assets/images/team/dotted-shape.svg"
                    alt="shape"
                    class="shape shape-1"
                  />
                  <img
                    src="assets/images/team/shape-2.svg"
                    alt="shape"
                    class="shape shape-2"
                  />
                </div>
                <div class="ud-team-info">
                  <h5>Jezmin uniya</h5>
                  <h6>Product Designer</h6>
                </div>
                <ul class="ud-team-socials">
                  <li>
                    <a href="https://twitter.com/MusharofChy">
                      <i class="lni lni-facebook-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://twitter.com/MusharofChy">
                      <i class="lni lni-twitter-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://twitter.com/MusharofChy">
                      <i class="lni lni-instagram-filled"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-6">
              <div class="ud-single-team wow fadeInUp" data-wow-delay=".2s">
                <div class="ud-team-image-wrapper">
                  <div class="ud-team-image">
                    <img src="assets/images/team/team-03.png" alt="team" />
                  </div>
  
                  <img
                    src="assets/images/team/dotted-shape.svg"
                    alt="shape"
                    class="shape shape-1"
                  />
                  <img
                    src="assets/images/team/shape-2.svg"
                    alt="shape"
                    class="shape shape-2"
                  />
                </div>
                <div class="ud-team-info">
                  <h5>Andrieo Gloree</h5>
                  <h6>App Developer</h6>
                </div>
                <ul class="ud-team-socials">
                  <li>
                    <a href="https://twitter.com/MusharofChy">
                      <i class="lni lni-facebook-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://twitter.com/MusharofChy">
                      <i class="lni lni-twitter-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://twitter.com/MusharofChy">
                      <i class="lni lni-instagram-filled"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-6">
              <div class="ud-single-team wow fadeInUp" data-wow-delay=".25s">
                <div class="ud-team-image-wrapper">
                  <div class="ud-team-image">
                    <img src="assets/images/team/team-04.png" alt="team" />
                  </div>
  
                  <img
                    src="assets/images/team/dotted-shape.svg"
                    alt="shape"
                    class="shape shape-1"
                  />
                  <img
                    src="assets/images/team/shape-2.svg"
                    alt="shape"
                    class="shape shape-2"
                  />
                </div>
                <div class="ud-team-info">
                  <h5>Jackie Sanders</h5>
                  <h6>Content Writer</h6>
                </div>
                <ul class="ud-team-socials">
                  <li>
                    <a href="https://twitter.com/MusharofChy">
                      <i class="lni lni-facebook-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://twitter.com/MusharofChy">
                      <i class="lni lni-twitter-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://twitter.com/MusharofChy">
                      <i class="lni lni-instagram-filled"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section> --}}
      <!-- ====== Team End ====== -->
  
      <!-- ====== Contact Start ====== -->
      <section id="contact" class="ud-contact">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-8 col-lg-7">
              <div class="ud-contact-content-wrapper">
                <div class="ud-contact-title">
                  <span>CONTACT US</span>
                  <h2>
                    Let’s talk about <br />
                    Love to hear from you!
                  </h2>
                </div>
                <div class="ud-contact-info-wrapper">
                  <div class="ud-single-info">
                    <div class="ud-info-icon">
                      <i class="lni lni-map-marker"></i>
                    </div>
                    <div class="ud-info-meta">
                      <h5>Our Location</h5>
                      <p>-14th Tamooz St, Risafa, Baghdad, IQ
  
                      </p>
                      <p>-Iraq, Erbil, Darwazay Hawler</p>
                    </div>
                  </div>
                  <div class="ud-single-info">
                    <div class="ud-info-icon">
                      <i class="lni lni-envelope"></i>
                    </div>
                    <div class="ud-info-meta">
                      <h5>How Can We Help?</h5>
                      <p>info@snono-systems.com
  
                      </p>
                      <p>+964 7700 826 164
  
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-5">
              <div
                class="ud-contact-form-wrapper wow fadeInUp"
                data-wow-delay=".2s"
              >
                <h3 class="ud-contact-form-title">Send us a Message</h3>
                <form class="ud-contact-form">
                  <div class="ud-form-group">
                    <label for="fullName">Full Name*</label>
                    <input
                      type="text"
                      name="fullName"
                      placeholder=" "
                    />
                  </div>
                  <div class="ud-form-group">
                    <label for="email">Email*</label>
                    <input
                      type="email"
                      name="email"
                      placeholder=" "
                    />
                  </div>
                  <div class="ud-form-group">
                    <label for="phone">Phone*</label>
                    <input
                      type="text"
                      name="phone"
                      placeholder=" "
                    />
                  </div>
                  <div class="ud-form-group">
                    <label for="message">Message*</label>
                    <textarea
                      name="message"
                      rows="1"
                      placeholder=" "
                    ></textarea>
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
      
      <!-- ====== Contact End ====== -->
  @endsection