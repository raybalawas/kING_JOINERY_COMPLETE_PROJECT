@extends('front.layout.main')

@section('content')


    <main class="banner-sec inner-banner-sec inner-banner-contact">

        <div class="container">
            <div class="row justify-content-md-end">
                <div class="col-lg-5 col-md-8">
                    <div class="banner-text">
                        <h1>Contact us</h1>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <section class="section-padding contact-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4>CONTACTS US</h4>
                    <h2>get in touch with us</h2>
                    <p>If you have any inquiries about our services or wish to schedule an obligation-free consultation,
                        please reach out to the King Joinery team using the contact information provided below.</p>
                </div>

                <div class="col-12">
                    <div class="contact-form">
                        <form action="email.php" method="POST">
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="form-control-group">
                                        <div class="form-control-icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="form-control-group-inner">
                                            <label for="" class="form-label">Name*</label>
                                            <input class="form-control" type="text" name="name" required placeholder="Enter your name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-control-group">
                                        <div class="form-control-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="form-control-group-inner">
                                            <label for="" class="form-label">Email*</label>
                                            <input class="form-control" type="email" name="email" required placeholder="Enter your email address">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-control-group">
                                        <div class="form-control-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="form-control-group-inner">
                                            <label for="" class="form-label">Phone No*</label>
                                            <input class="form-control" type="tel" name="phone" required placeholder="Enter your phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-control-group">
                                        <div class="form-control-icon">
                                            <i class="fa fa-file-text-o" ></i>
                                        </div>
                                        <div class="form-control-group-inner">
                                            <label for="" class="form-label">Message*</label>
                                            <textarea class="form-control" name="message" required id="" rows="4" placeholder="Describe your requirements"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    {{-- <button type="SUBMIT" class="btn-theme">SUBMIT <i class="fa fa-long-arrow-right"></i></button> --}}



                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="COL-12 mt-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d493.02383928939076!2d150.94682680799266!3d-33.76955846380945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12989b0ae74c9b%3A0x4373e8d8c36ad1a6!2s6%2F17%20Brumby%20St%2C%20Seven%20Hills%20NSW%202147%2C%20Australia!5e0!3m2!1sen!2sin!4v1710219442338!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div>
    </section>


        <a href="https://wa.me/+61425561100" class="fixed-whatsapp-btn" target="_blank">
        <i class="fa fa-whatsapp"></i>
    </a>
 
@endsection
