@extends('front.layout.main')
@section('content')

    <main class="banner-sec inner-banner-sec inner-banner-projects">

        <div class="container">
            <div class="row justify-content-md-end">
                <div class="col-lg-5 col-md-8">
                    <div class="banner-text">
                        <h1>Projects</h1>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <section class="section-padding collections-sec">
        <div class="container">

            <div class="section-heading-block">
                <h5>inspired designs</h5>
                <h2>our Projects</h2>
            </div>

            <ul class="nav nav-pills justify-content-center" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="hartford-tab" data-bs-toggle="tab"
                        data-bs-target="#hartford-tab-pane" type="button" role="tab" aria-controls="hartford-tab-pane"
                        aria-selected="true">Kitchens</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="kavanagh-tab" data-bs-toggle="tab" data-bs-target="#kavanagh-tab-pane"
                        type="button" role="tab" aria-controls="kavanagh-tab-pane"
                        aria-selected="false">Laundries</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="butler-tab" data-bs-toggle="tab" data-bs-target="#butler-tab-pane"
                        type="button" role="tab" aria-controls="butler-tab-pane" aria-selected="false">Vanities</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="devine-tab" data-bs-toggle="tab" data-bs-target="#devine-tab-pane"
                        type="button" role="tab" aria-controls="devine-tab-pane" aria-selected="false">Offices</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="harrington-tab" data-bs-toggle="tab"
                        data-bs-target="#harrington-tab-pane" type="button" role="tab"
                        aria-controls="harrington-tab-pane" aria-selected="false">Wardrobes</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="summerville-tab" data-bs-toggle="tab"
                        data-bs-target="#summerville-tab-pane" type="button" role="tab"
                        aria-controls="summerville-tab-pane" aria-selected="false">Entertainment</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="bbq-tab" data-bs-toggle="tab"
                        data-bs-target="#bbq-tab-pane" type="button" role="tab"
                        aria-controls="bbq-tab-pane" aria-selected="false">Outdoor kitchens & BBQ</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="hartford-tab-pane" role="tabpanel"
                    aria-labelledby="hartford-tab" tabindex="0">
                    <div class="row g-lg-5 g-3">
                        <div class="col-lg-6">
                            <div class="collecttions-img">
                                <img width="100%" src="assets/images/luxury-kitchens.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="collecttions-text">
                                <h2>Experts in Luxury Kitchens</h2>
                                <p>King Joinery boasts luxury kitchen experts who craft exquisite designs tailored to each client’s desires. With meticulous attention to detail, they blend functionality and aesthetics seamlessly, using high-quality materials and innovative techniques. From sleek modern kitchens to timeless classics, King Joinery’s expertise elevates every culinary space to unparalleled sophistication.</p>
                                <a href="kitchens.html" class="btn-theme">BROWSE Kitchens COLLECTION <i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kavanagh-tab-pane" role="tabpanel" aria-labelledby="kavanagh-tab"
                    tabindex="0">
                    <div class="row g-lg-5 g-3">
                        <div class="col-lg-6">
                            <div class="collecttions-img">
                                <img width="100%" src="assets/images/luxury-laundries.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="collecttions-text">
                                <h2>Mastering Luxury Laundry: <br>The Artistry of King Joinery</h2>
                                <p>At King Joinery, experts elevate laundry to an art form, blending technology and tradition for impeccable results. Their meticulous care extends from delicate fabrics to couture pieces, ensuring each garment emerges refreshed and renewed. With a commitment to luxury, King Joinery redefines laundry with unparalleled expertise.</p>
                                <a href="laundries.html" class="btn-theme">BROWSE Laundries COLLECTION <i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="butler-tab-pane" role="tabpanel" aria-labelledby="butler-tab"
                    tabindex="0">
                    <div class="row g-lg-5 g-3">
                        <div class="col-lg-6">
                            <div class="collecttions-img">
                                <img width="100%" src="assets/images/luxury-vanities.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="collecttions-text">
                                <h2>Crafting Opulence: <br>King Joinery's Mastery in Luxury Vanities</h2>
                                <p>King Joinery's artisans are unparalleled in crafting luxury vanities, blending exquisite design with superior craftsmanship. Each piece is meticulously crafted, using the finest materials to create a statement of opulence and functionality. With a dedication to perfection, King Joinery sets the standard for luxury vanities.</p>
                                <a href="vanities.html" class="btn-theme">BROWSE Vanities COLLECTION <i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="devine-tab-pane" role="tabpanel" aria-labelledby="devine-tab"
                    tabindex="0">
                    <div class="row g-lg-5 g-3">
                        <div class="col-lg-6">
                            <div class="collecttions-img">
                                <img width="100%" src="assets/images/luxury-offices.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="collecttions-text">
                                <h2>Elevating Workspace Elegance: <br>King Joinery’s Expertise in Luxury Offices</h2>
                                <p>King Joinery’s mastery extends to luxury offices, where bespoke designs meet functionality seamlessly. Their experts craft sophisticated workspaces with premium materials and innovative solutions, ensuring every detail reflects opulence and productivity. With a focus on excellence, King Joinery redefines luxury in the realm of office design.</p>
                                <a href="offices.html" class="btn-theme">BROWSE Offices COLLECTION <i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="harrington-tab-pane" role="tabpanel" aria-labelledby="harrington-tab"
                    tabindex="0">
                    <div class="row g-lg-5 g-3">
                        <div class="col-lg-6">
                            <div class="collecttions-img">
                                <img width="100%" src="assets/images/luxury-wardrobes.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="collecttions-text">
                                <h2>Exquisite Elegance: <br>King Joinery’s Mastery in Luxury Wardrobes</h2>
                                <p>King Joinery’s artisans excel in creating luxury wardrobes that blend style and functionality flawlessly. From custom fittings to exquisite finishes, each wardrobe is a testament to craftsmanship and attention to detail. With a passion for elegance, King Joinery sets the standard for luxurious storage solutions.</p>
                                <a href="wardrobes.html" class="btn-theme">BROWSE Wardrobes COLLECTION <i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="summerville-tab-pane" role="tabpanel" aria-labelledby="summerville-tab"
                    tabindex="0">
                    <div class="row g-lg-5 g-3">
                        <div class="col-lg-6">
                            <div class="collecttions-img">
                                <img width="100%" src="assets/images/entertainment-vanities.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="collecttions-text">
                                <h2>Mastering Entertainment Elegance: <br>King Joinery’s Expertise in Entertainment Vanities</h2>
                                <p>King Joinery’s craftsmen excel in designing entertainment vanities that harmonize style and functionality. Each piece is meticulously crafted, featuring innovative storage solutions and luxurious finishes. With a commitment to excellence, King Joinery redefines entertainment spaces with sophistication and timeless elegance.</p>
                                <a href="entertainment.html" class="btn-theme">BROWSE Entertainment COLLECTION <i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="bbq-tab-pane" role="tabpanel" aria-labelledby="bbq-tab"
                    tabindex="0">
                    <div class="row g-lg-5 g-3">
                        <div class="col-lg-6">
                            <div class="collecttions-img">
                                <img width="100%" src="assets/images/luxury-outdoor.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="collecttions-text">
                                <h2>Al Fresco Excellence: <br>King Joinery’s Mastery in Luxury Outdoor Kitchens and BBQs</h2>
                                <p>King Joinery’s experts elevate outdoor dining with bespoke luxury kitchens and BBQs. Their designs blend functionality with aesthetic appeal, using premium materials for durability and style. With meticulous attention to detail, King Joinery creates outdoor culinary spaces that redefine al fresco dining with elegance and innovation.</p>
                                <a href="outdoor-kitchens.html" class="btn-theme">BROWSE Outdoor kitchens COLLECTION <i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


        <a href="https://wa.me/+61425561100" class="fixed-whatsapp-btn" target="_blank">
        <i class="fa fa-whatsapp"></i>
    </a>
@endsection
