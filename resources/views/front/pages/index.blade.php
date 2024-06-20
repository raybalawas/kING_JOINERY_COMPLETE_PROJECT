@extends('front.layout.main')
@section('content')
    <main class="banner-sec">

        <div class="container">
            <div class="row justify-content-md-end">
                <div class="col-lg-5 col-md-8">
                    <div class="banner-text">
                        <h1>New and evolving kitchen designs</h1>
                        <p>Revolutionising culinary spaces, as our kitchens seamlessly blends cutting-edge technology
                            with timeless design to elevate your cooking experience.</p>
                        <a href="{{ route('projects.index') }}" class="btn-theme">discover more <i
                                class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <section class="section-padding luxury-sec pb-0">
        <div class="container">
            <div class="row g-2">
                <div class="col-lg-6">
                    <div class="luxury-text">
                        <h2>Experts in <br> Luxury Kitchens</h2>
                        <p>At King Joinery, our expertise lies in the creation and installation of exclusive, high-end
                            kitchens customized to suit both you and your home. Our accomplished designers meticulously
                            attend to every aspect, encompassing lighting, tiles, finishes, and paint hues. The
                            objective is to meticulously craft and present a unified, harmonious vision for your living
                            space.</p>
                        <a href="{{ route('about.us') }}" class="btn-theme">more about us <i
                                class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="luxury-img">
                        <img width="100%" src="assets/images/luxury-kitchen.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding collections-sec">
        <div class="container">

            <div class="section-heading-block">
                <h5>inspired designs</h5>
                <h2>our Projects</h2>
            </div>


            <ul class="nav nav-pills justify-content-center" id="myTab" role="tablist">
                @php
                    $activeIndex = 0;
                    foreach ($categories as $index => $category) {
                        if ($category->products->isNotEmpty()) {
                            $activeIndex = $index;
                            break;
                        }
                    }
                @endphp
                @foreach ($categories as $index => $category)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link @if ($index === $activeIndex) active @endif"
                            id="category-{{ $category->id }}-tab" data-bs-toggle="tab"
                            data-bs-target="#category-{{ $category->id }}-tab-pane" type="button" role="tab"
                            aria-controls="category-{{ $category->id }}-tab-pane"
                            aria-selected="{{ $index === 0 ? 'true' : 'false' }}">{{ $category->category }}</button>
                    </li>
                @endforeach
            </ul>
            {{-- //FOR SHOWING ALL PROJECTS ON INDEX PAGE --}}
            {{-- <div class="tab-content" id="myTabContent">
                @foreach ($categories as $index => $category)
                    <div class="tab-pane fade @if ($index === 0) show active @endif"
                        id="category-{{ $category->id }}-tab-pane" role="tabpanel"
                        aria-labelledby="category-{{ $category->id }}-tab" tabindex="0">

                        <div class="row g-lg-5 g-3">
                            @foreach ($category->products as $product)
                                <div class="col-lg-6">
                                    <div class="collecttions-img">
                                        <img width="100%"
                                            src="{{ asset('productsSingleImage/' . $product->project_image) }}"
                                            alt="{{ $product->project_title }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="collecttions-text">
                                        <h2>{{ $product->project_title }}</h2>
                                        <p>{!! strip_tags($product->project_details) !!}</p>
                                        <a href="{{ route('projects.images', $product->id) }}" class="btn-theme">View More
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div> --}}

            {{-- //FOR SHOWING ONLY ONE  PROJECTS ON INDEX PAGE --}}
            <div class="tab-content" id="myTabContent">
                @foreach ($categories as $index => $category)
                    @php
                        $product = $category->products->first();
                    @endphp
                    @if ($product)
                        <div class="tab-pane fade @if ($index === $activeIndex) show active @endif"
                            id="category-{{ $category->id }}-tab-pane" role="tabpanel"
                            aria-labelledby="category-{{ $category->id }}-tab" tabindex="0">

                            <div class="row g-lg-5 g-3">
                                <div class="col-lg-6">
                                    <div class="collecttions-img">
                                        <img width="100%"
                                            src="{{ asset('productsSingleImage/' . $product->project_image) }}"
                                            alt="{{ $product->project_title }}" style="height: 270px;">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="collecttions-text">
                                        <h2>{{ $product->project_title }}</h2>
                                        <p>{!! strip_tags($product->project_details) !!}</p>
                                        <a href="{{ route('projects.images', $product->id) }}" class="btn-theme">Browse
                                            {{ $category->category }} collection
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>
    </section>

    <section class="section-padding quote-sec">
        <div class="container">

            <div class="row">
                <div class="col-lg-7">
                    <p>I had an exceptional experience working with King Joinery for my kitchen redesign. Their team
                        demonstrated a remarkable blend of creativity and professionalism throughout the entire process.
                        The initial consultation was insightful, with their designers carefully considering my
                        preferences and offering innovative ideas. The final design surpassed my expectations,
                        showcasing their attention to detail in optimizing both space and functionality. What truly
                        impressed me was the impeccable craftsmanship evident in every element of the kitchen, from
                        custom cabinets to fixtures. The installation was carried out efficiently, and the end result is
                        a kitchen that not only looks stunning but also aligns perfectly with my lifestyle. King
                        Joinery's commitment to quality and their customer-centric approach make them a standout choice
                        in the realm of kitchen design. I highly recommend their services to anyone seeking a seamless
                        and stylish transformation for their kitchen space.</p>
                </div>

                <div class="col-lg-5">
                    <div class="quote-img-sec">
                        <div class="quote-user">
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                            <p class="user-name text-uppercase">Dean & Samantha, The Ponds</p>
                        </div>
                        <div class="quote-img">
                            <img src="assets/images/quote-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="section-padding images-sec">
        <div class="container">

            <div class="swiper slider-top">

                <div class="swiper-wrapper">
                    <div class="swiper-slide slider-top-img">
                        <img src="assets/images/slider-img-1.jpg" alt="img">
                    </div>
                    <div class="swiper-slide slider-top-img">
                        <img src="assets/images/slider-img-2.jpg" alt="img">
                    </div>
                    <div class="swiper-slide slider-top-img">
                        <img src="assets/images/slider-img-3.jpg" alt="img">
                    </div>
                    <div class="swiper-slide slider-top-img">
                        <img src="assets/images/slider-img-4.jpg" alt="img">
                    </div>
                </div>
            </div>
            <div class="swiper slider-bottom">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slider-bottom-img">
                        <img src="assets/images/slider-img-1.jpg" alt="img">
                    </div>
                    <div class="swiper-slide slider-bottom-img">
                        <img src="assets/images/slider-img-2.jpg" alt="img">
                    </div>
                    <div class="swiper-slide slider-bottom-img">
                        <img src="assets/images/slider-img-3.jpg" alt="img">
                    </div>
                    <div class="swiper-slide slider-bottom-img">
                        <img src="assets/images/slider-img-4.jpg" alt="img">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="section-padding features-sec">
        <div class="section-heading-block">
            <h5>IT’S ALL ABOUT THE DETAILS </h5>
            <h2>Luxury Features as Standard </h2>
        </div>
        <div class="container position-relative">

            <div class="swiper features-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/images/feature-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kitchen Handles</h5>
                                <p class="card-text">Handles add the final touches to each kitchen design, and ours are
                                    uniquely handcrafted for you, offering a variety of finishes and exclusive designs
                                    to choose from.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn-theme">Learn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/images/feature-2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Appliances</h5>
                                <p class="card-text">A high-end kitchen warrants premium appliances, and that's why
                                    we've collaborated with top manufacturers of reputable appliance brands, carefully
                                    selecting only the finest options.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn-theme">Learn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/images/feature-3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Walk-in Pantries</h5>
                                <p class="card-text">Simplify the retrieval of everyday kitchen items with a luxurious
                                    walk-in pantry. Keeping your main kitchen clean and organized becomes effortless as
                                    you stow away items along the way, proving especially useful when entertaining
                                    guests.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn-theme">Learn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/images/feature-4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Work Surfaces</h5>
                                <p class="card-text">Whether you choose natural stone or opt for stunning and resilient
                                    man-made alternatives, each work surface undergoes precision cutting to match your
                                    exact specifications, ensuring a flawless finish.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn-theme">Learn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/images/feature-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Storage</h5>
                                <p class="card-text">Tailored to fit your lifestyle, our elegant storage solutions
                                    contribute to maintaining a serene and organized kitchen, irrespective of the size
                                    or quantity of accessories you need to store.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn-theme">Learn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/images/feature-2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Boot Rooms</h5>
                                <p class="card-text">Our customized boot rooms are skillfully designed and tailored
                                    precisely to meet your requirements. It's an ideal area for storing muddy boots,
                                    coats, bags, hats, and even features a designated space for your cherished pet.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn-theme">Learn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/images/feature-3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Seat & Dining</h5>
                                <p class="card-text">Kitchens serve more than just a cooking purpose. Elevate your
                                    kitchen into the core of your home by incorporating tailored seating and dining
                                    arrangements, crafting the ideal social atmosphere for your lifestyle.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn-theme">Learn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/images/feature-4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Taps & Sinks</h5>
                                <p class="card-text">The collection of premium taps and sinks offered by King Joinery is
                                    truly exceptional. Carefully chosen from top-tier manufacturers and subjected to our
                                    stringent standards, you can trust in the utmost quality.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn-theme">Learn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/images/feature-2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Personalisation</h5>
                                <p class="card-text">With our custom engraving service, you can infuse a deeply personal
                                    touch into your exquisite King Joinery kitchen, forging a lifelong connection that
                                    holds special meaning for you.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn-theme">Learn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/images/feature-5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Utility Rooms</h5>
                                <p class="card-text">A thoughtfully planned utility room may incorporate amenities such
                                    as a washing machine, tumble dryer, sink, storage for clothes, ironing board, iron,
                                    additional shoe storage, and even extra pantry space.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn-theme">Learn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/images/feature-6.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pantries</h5>
                                <p class="card-text">Tailor-made pantries simplify the task of locating kitchen
                                    essentials. Through thoughtful details like customized internal storage, we can
                                    design a pantry that perfectly suits your home.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn-theme">Learn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/images/feature-7.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Islands</h5>
                                <p class="card-text">The kitchen island is frequently deemed a crucial element in
                                    contemporary kitchen designs. Whether you're looking to expand workspace, add extra
                                    storage, or create a socializing hub, there's a kitchen island design tailored for
                                    you.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn-theme">Learn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/images/feature-8.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Dovetail Drawers</h5>
                                <p class="card-text">As anticipated from King Joinery, our drawers are meticulously
                                    crafted by skilled artisans, featuring enduring dovetail joints that guarantee
                                    strength and durability for many years.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn-theme">Learn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/images/feature-9.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Colours</h5>
                                <p class="card-text">Every color in our meticulously selected palette is crafted
                                    specifically for our kitchen collections, forming an exclusive range that highlights
                                    the superior design of each King Joinery Kitchen.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn-theme">Learn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="swiper-pagination"></div>

            </div>

        </div>
    </section>


    <section class="section-padding reasonable-sec">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-lg-3 col-md-12 col-sm-4 card-img-block">
                                <img src="assets/images/reasonable-price.png" style="width: 100%; max-width: 100px;">
                            </div>
                            <div class="col-lg-9 col-md-12 col-sm-8">
                                <div class="card-body">
                                    <h5 class="card-title">Reasonable Prices</h5>
                                    <p class="card-text">We produce furniture to fullfill needs of all people and offer
                                        it at affordable and fair prices</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-lg-3 col-md-12 col-sm-4 card-img-block">
                                <img src="assets/images/exclusive-design.png" style="width: 100%; max-width: 100px;">
                            </div>
                            <div class="col-lg-9 col-md-12 col-sm-8">
                                <div class="card-body">
                                    <h5 class="card-title">Exclusive Design</h5>
                                    <p class="card-text">We produce furniture to fullfill needs of all people and offer
                                        it at affordable and fair prices</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-lg-3 col-md-12 col-sm-4 card-img-block">
                                <img src="assets/images/professional-team.png" style="width: 100%; max-width: 100px;">
                            </div>
                            <div class="col-lg-9 col-md-12 col-sm-8">
                                <div class="card-body">
                                    <h5 class="card-title">Professional Team</h5>
                                    <p class="card-text">We produce furniture to fullfill needs of all people and offer
                                        it at affordable and fair prices</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding testimonial-sec">
        <div class="section-heading-block">
            <h5>testimonials </h5>
            <h2>What Our Clients Say </h2>
        </div>
        <div class="container position-relative">

            <div class="swiper testimonial-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="review-box">
                            <div class="review-quote">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </div>
                            <p>I am delighted with the exceptional design service provided by King Joinery, which
                                perfectly tailored my new kitchen to the unique layout and aesthetics of my room
                                featuring a pitched roof. The expertise of the designer, the customized approach to the
                                product, and the use of premium materials were instrumental in achieving the outstanding
                                final outcome.
                            </p>
                            <h4>Mr Smith</h4>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="review-box">
                            <div class="review-quote">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </div>
                            <p>King Joinery emerged as the most comprehensive end-to-end service, being the sole company
                                with which we experienced no complications. The excellence in design, installation, and
                                overall service quality was outstanding. The installation proceeded smoothly without any
                                trouble, and the team we engaged with was exceptionally helpful.
                            </p>
                            <h4>Mrs Barwell</h4>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="review-box">
                            <div class="review-quote">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </div>
                            <p>We want to express our gratitude for turning our kitchen into a timeless and practical
                                dream space. Each team member contributed to providing outstanding customer service—a
                                truly refreshing change. Well done!
                            </p>
                            <h4>Mr & Mrs Arthur</h4>
                        </div>
                    </div>



                    <!-- /////////////////////////////////////

                        <div class="swiper-slide">
                            <div class="review-box">
                                <div class="review-quote">
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                </div>
                                <p>I have an unusual space and style of room with a pitched roof and I was extremely
                                    impressed with the Tom Howley design service. My new kitchen fits the style and space
                                    perfectly. The skills of the designer, the bespoke nature of the product and the high
                                    quality materials were the key to the final result.
                                </p>
                                <h4>Mr Bathurst</h4>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="review-box">
                                <div class="review-quote">
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                </div>
                                <p>I have an unusual space and style of room with a pitched roof and I was extremely
                                    impressed with the Tom Howley design service. My new kitchen fits the style and space
                                    perfectly. The skills of the designer, the bespoke nature of the product and the high
                                    quality materials were the key to the final result.
                                </p>
                                <h4>Mr Bathurst</h4>
                            </div>
                        </div> -->

                </div>
                <div class="swiper-pagination"></div>

            </div>


        </div>
    </section>

     <a href="https://wa.me/+61425561100" class="fixed-whatsapp-btn" target="_blank">
        <i class="fa fa-whatsapp"></i>
    </a>
@endsection
