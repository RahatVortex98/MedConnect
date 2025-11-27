<!--
=================================================================================
PROJECT DESCRIPTION: ONE-HEALTH APPOINTMENT & CONSULTATION PLATFORM
=================================================================================

This component is the main landing page for the "Healthy Living" healthcare platform.
It is designed to be user-centric, providing immediate, animated access to key services.

1.  **Core Objective:** Promote 'Healthy Living' by making healthcare accessible and convenient.

2.  **Key Features on Display:**
    * **Hero Section:** High-impact "Healthy Living" headline with a clear Call-to-Action (CTA): 'Let's Consult' (links to {{ route('appointment.book') }}). Uses `overlay-dark` for visual contrast and `wow zoomIn` animation.
    * **Quick Services:** Three prominent service cards for rapid navigation, positioned in a custom index format (`mt-md-n5`) for visibility, each featuring the `wow fadeInUp` scroll animation:
        * Chat with Doctors (Online Consultation)
        * One-Health Protection (Insurance/Preventative Care)
        * One-Health Pharmacy (Medicine Access)
    * **Introduction:** A welcoming 'Welcome to Your Health Center' section with detailed placeholder text and a dedicated 'Learn More' CTA (links to {{ route('about-us') }}).

3.  **Technology:**
    * Integration: Laravel Blade for dynamic routing (e.g., `{{ route(...) }}`).
    * Frontend: HTML/CSS/JavaScript.
    * Enhancement: Uses the WOW.js library (inferred from `wow zoomIn`, `wow fadeInUp`, `wow fadeInRight`) for smooth, engaging scroll animations.

4.  **Design Philosophy:** Fully responsive layout leveraging a grid system (`row`, `col-lg-6`) to ensure optimal viewing across all devices.

=================================================================================
-->
<!--
    This file represents the main content of the healthcare platform's home page.
    It integrates the hero section, quick-access service cards, and the Welcome/About Us section.
    It assumes the 'front_end/assets/img/' paths are correctly set up and Blade routes exist.
-->
<div class="main-content">

    <!-- Hero Section -->
    <div class="page-hero bg-image overlay-dark" style="background-image: url('front_end/assets/img/bg_image_1.jpg');">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <span class="subhead">Let's make your life happier</span>
                <h1 class="display-4">Healthy Living</h1>
                {{-- Assuming the 'Let's Consult' button links to the appointment booking route --}}
                <a href="{{ route('appointment.book') }}" class="btn btn-primary">Let's Consult</a>
            </div>
        </div>
    </div>

    <!-- Quick-Access Service Cards Section -->
    <div class="bg-light">
        <div class="page-section py-3 mt-md-n5 custom-index">
            <div class="container">
                <div class="row justify-content-center">
                    
                    {{-- Card 1: Chat with Doctors --}}
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-secondary text-white">
                                <span class="mai-chatbubbles-outline"></span>
                            </div>
                            <p><span>Chat</span> with a doctors</p>
                        </div>
                    </div>

                    {{-- Card 2: One-Health Protection --}}
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-primary text-white">
                                <span class="mai-shield-checkmark"></span>
                            </div>
                            <p><span>One</span>-Health Protection</p>
                        </div>
                    </div>

                    {{-- Card 3: One-Health Pharmacy --}}
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-accent text-white">
                                <span class="mai-basket"></span>
                            </div>
                            <p><span>One</span>-Health Pharmacy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .page-section -->

        <!-- Welcome and About Us Section -->
        <div class="page-section pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 py-3 wow fadeInUp">
                        <h1>Welcome to Your Health <br> Center</h1>
                        <p class="text-grey mb-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Accusantium aperiam earum ipsa eius, inventore nemo labore eaque porro consequatur ex aspernatur. Explicabo, excepturi accusantium! Placeat voluptates esse ut optio facilis!</p>
                        <a href="{{ route('about-us') }}" class="btn btn-primary">Learn More</a>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="img-place custom-img-1">
                            <img src="front_end/assets/img/bg-doctor.png" alt="A doctor ready to assist">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .bg-light section end -->
    </div> <!-- .bg-light wrapper end -->

    <!-- Placeholder for other page sections (e.g., Doctors, Latest News, etc.) -->

</div>