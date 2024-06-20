@extends('front.layout.main');
@section('content')
 <main class="banner-sec inner-banner-sec inner-banner-about">

        <div class="container">
            <div class="row justify-content-md-end">
                <div class="col-lg-5 col-md-8">
                    <div class="banner-text">
                        <h1>ABOUT US</h1>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <section class="section-padding luxury-sec">
        <div class="container">
            <div class="row g-3">
                <div class="col-lg-7">
                    <div class="luxury-text">
                        <h4>ABOUT US</h4>
                        <h2>creative solutions by <br> professional designers</h2>
                        <p>Welcome to King Joinery, a joinery company based in Sydney that specializes in crafting
                            exquisite joinery and cabinetry designs, seamlessly marrying beauty and functionality during
                            installation. Driven by a fervor for craftsmanship and a steadfast commitment to quality, we
                            have dedicated over 15 years to bringing the kitchens, laundries, vanities, offices, and
                            home renovation joinery of our Sydney clients to life.
                        </p>
                        <p>
                            At King Joinery, we take pride in our personalized approach to joinery. Our adept craftsmen,
                            boasting years of experience, meticulously design and flawlessly produce each cabinetry
                            piece. Recognizing the significance of a home as a place where memories are made, we ensure
                            that every custom joinery detail reflects this heartfelt sentiment.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="luxury-img">
                        <img width="100%" src="assets/images/about-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding luxury-sec">
        <div class="container">
            <div class="luxury-text">
                <h2>We specialize in our</h2>
                <p>Specializing in kitchen joinery, our team merges precision craftsmanship with innovative design to
                    transform kitchens into functional and aesthetically pleasing spaces. With meticulous attention to
                    detail, we tailor every aspect of joinery, from cabinets to countertops, to suit the unique needs
                    and preferences of our clients. Utilizing high-quality materials and cutting-edge techniques, we
                    seamlessly integrate storage solutions, maximize space utilization, and create seamless transitions
                    between elements.

                </p>
                <p>
                    Our commitment to excellence ensures that each project is executed with utmost professionalism,
                    delivering kitchens that not only meet but exceed expectations, enriching homes with timeless
                    elegance and practicality. Whether it's a modern minimalist design or a classic, timeless aesthetic,
                    our expertise in kitchen joinery transforms visions into stunning realities, elevating the heart of
                    the home to new heights of functionality and style.
                </p>
            </div>
        </div>
    </section>

    <section class="dream-sec">
        <div class="container">
            <div class="dream-block">
                <div class="dream-block-text">
                    <h6>YOU DREAM IT, WE DESIGN IN</h6>
                    <h3>Let’s start your new dream project</h3>
                    <a href="{{route('contact.us')}}" class="btn-theme">Contact with us <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>


    <a href="https://wa.me/+61425561100" class="fixed-whatsapp-btn" target="_blank">
        <i class="fa fa-whatsapp"></i>
    </a>
@endsection

