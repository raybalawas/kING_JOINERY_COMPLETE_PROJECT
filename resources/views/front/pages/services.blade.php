@extends('front.layout.main')
@section('content')

 <main class="banner-sec inner-banner-sec">

        <div class="container">
            <div class="row justify-content-md-end">
                <div class="col-lg-5 col-md-8">
                    <div class="banner-text">
                        <h1>Our Expertise</h1>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <section class="section-padding service-sec">
        <div class="container-xl">
            <div class="row g-lg-5 g-3">
                <div class="col-lg-3">
                    <div class="side-nav">
                        <!--   <ul class="nav nav-tabs" id="myTab" role="tablist"> -->
                        <ul role="tablist">

                            <li class="nav-item" role="presentation">
                                <!-- <a href="#">Kitchens</a> -->
                                <a href="#" class="nav-link active" id="Kitchens-tab" data-bs-toggle="tab"
                                    data-bs-target="#Kitchens" role="tab" aria-controls="Kitchens"
                                    aria-selected="true">Kitchens</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a href="#" class="nav-link" id="Laundries-tab" data-bs-toggle="tab"
                                    data-bs-target="#Laundries" role="tab" aria-controls="Laundries"
                                    aria-selected="false">Laundries</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a href="#" class="nav-link" id="Vanities-tab" data-bs-toggle="tab"
                                    data-bs-target="#Vanities" role="tab" aria-controls="Vanities"
                                    aria-selected="false">Vanities</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a href="#" class="nav-link" id="Offices-tab" data-bs-toggle="tab"
                                    data-bs-target="#Offices" role="tab" aria-controls="Offices"
                                    aria-selected="false">Offices</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a href="#" class="nav-link" id="Wardrobes-tab" data-bs-toggle="tab"
                                    data-bs-target="#Wardrobes" role="tab" aria-controls="Wardrobes"
                                    aria-selected="false">Wardrobes</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a href="#" class="nav-link" id="Entertainment-tab" data-bs-toggle="tab"
                                    data-bs-target="#Entertainment" role="tab" aria-controls="Entertainment"
                                    aria-selected="false">Entertainment</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a href="#" class="nav-link" id="Outdoor-tab" data-bs-toggle="tab"
                                    data-bs-target="#Outdoor" role="tab" aria-controls="Outdoor"
                                    aria-selected="false">Outdoor kitchens & BBQ</a>
                            </li>
                            <!-- <li>
                                <a href="#">Laundries</a>
                            </li>
                            <li>
                                <a href="#">Vanities</a>
                            </li>
                            <li>
                                <a href="#">Offices</a>
                            </li>
                            <li>
                                <a href="#">Wardrobes</a>
                            </li>
                            <li>
                                <a href="#">Entertainment</a>
                            </li>
                            <li>
                                <a href="#">Outdoor kitchens & BBQ</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="service-text">
                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade show active" id="Kitchens" role="tabpanel"
                                aria-labelledby="Kitchens-tab">
                                <div class="row">
                                    <div class="col-md-8">

                                        <h2>Experts in <br>Luxury Kitchens</h2>
                                        <p>Step into the nucleus of your home, where practicality meets exquisite
                                            artistry. At
                                            King
                                            Joinery, we specialize in crafting tailor-made kitchen designs and joinery
                                            in Sydney
                                            that
                                            redefine the art of culinary creation and entertaining.
                                        </p>
                                        <p>
                                            Our bespoke kitchen designs and joinery epitomize the perfect blend of style
                                            and
                                            functionality, tailored to meet every culinary requirement while enhancing
                                            your
                                            home's
                                            aesthetics. Envision a space where innovation harmonizes with
                                            sophistication, where
                                            each
                                            cabinet, countertop, and appliance seamlessly melds into a unified
                                            masterpiece. Our
                                            custom
                                            joinery guarantees your kitchen is optimized for storage, featuring
                                            ingenious
                                            solutions like
                                            pull-out pantry shelves, spacious drawers, and meticulously crafted
                                            cabinets.
                                        </p>
                                        <p>
                                            We take immense pride in our dedication to premium materials and unmatched
                                            craftsmanship.
                                            Select from an extensive range of high-quality finishes and hardware to
                                            complement
                                            your
                                            distinctive taste and budget. Whether you crave a classic kitchen design
                                            exuding
                                            timeless
                                            allure or a contemporary, streamlined aesthetic, we possess the expertise
                                            and
                                            proficiency to
                                            transform your home renovation aspirations into reality.
                                        </p>
                                        <p>
                                            Reach out to King Joinery today and embark on the journey to crafting the
                                            kitchen
                                            you've
                                            always envisioned.
                                        </p>

                                        <a href="{{(route('kit.chen'))}}" class="btn-theme">Browse Kitchens collection<i
                                                class="fa fa-long-arrow-right"></i></a>

                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="service-img">
                                            <img width="100%" src="assets/images/kitchens.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade " id="Laundries" role="tabpanel" aria-labelledby="Laundries-tab">

                                <div class="row">
                                    <div class="col-md-8">

                                        <h2>The Art of Luxury Laundry: <br>Unveiling King Joinery's Expertise</h2>
                                        <p>In the realm of luxury living, every detail matters. From bespoke furniture
                                            to exquisite decor, the discerning eye seeks perfection in every aspect of
                                            home design. One often overlooked yet crucial element is laundry care, and
                                            this is where the experts at King Joinery step in, elevating the mundane
                                            task to a fine art.</p>
                                        <p>At King Joinery, the philosophy revolves around meticulousness and luxury.
                                            Their team of laundry specialists possesses a wealth of experience and a
                                            keen eye for detail. From delicate fabrics to intricate designs, they
                                            understand the nuances of luxury textiles and employ the latest techniques
                                            to ensure each item is treated with utmost care.</p>
                                        <p>What sets King Joinery apart is their personalized approach. They collaborate
                                            closely with clients to understand their preferences, fabric requirements,
                                            and any specific concerns. Whether it's a hand-stitched silk gown or a set
                                            of fine linens, each piece undergoes a tailored cleaning and preservation
                                            process, maintaining its pristine condition and longevity.</p>
                                        <p>Moreover, King Joinery's commitment to sustainability is commendable. They
                                            utilize eco-friendly detergents and methods, minimizing environmental impact
                                            without compromising on quality. This dedication to both craftsmanship and
                                            environmental responsibility sets a new standard in luxury laundry services.
                                        </p>
                                        <p>In conclusion, King Joinery's expertise in luxury laundries transcends mere
                                            cleaning; it's a testament to their passion for preserving beauty and
                                            quality. For those who demand nothing but the best for their cherished
                                            textiles, King Joinery stands as the epitome of excellence.</p>

                                            <a href="{{route('lau.ndries')}}" class="btn-theme">Browse Laundries collection<i
                                                class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="service-img">
                                            <img width="100%" src="assets/images/laundries.jpg" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade " id="Vanities" role="tabpanel" aria-labelledby="Vanities-tab">

                                <div class="row">
                                    <div class="col-md-8">

                                        <h2>Crafting Elegance: <br>King Joinery's Mastery in Luxury Vanities</h2>
                                        <p>In the realm of exquisite interiors, luxury vanities serve as both functional
                                            essentials and statements of refined taste. King Joinery, renowned for its
                                            expertise in bespoke craftsmanship, stands out as a beacon of excellence in
                                            creating personalized luxury vanities that elevate spaces to new heights of
                                            opulence.</p>
                                        <p>At King Joinery, the journey of crafting a luxury vanity begins with a deep
                                            understanding of the client's aesthetic preferences and spatial
                                            requirements. Their team of expert designers collaborates closely with each
                                            client, translating visions into tangible designs that harmonize
                                            functionality with timeless elegance.</p>
                                        <p>What sets King Joinery apart is their commitment to craftsmanship. Each
                                            luxury vanity is meticulously crafted using premium materials such as exotic
                                            woods, exquisite marble, and custom finishes that reflect unparalleled
                                            attention to detail. From ornate carvings to seamless joinery, every element
                                            is a testament to the artisanal skill and dedication embodied by King
                                            Joinery's craftsmen.</p>
                                        <p>Moreover, King Joinery's bespoke approach extends beyond aesthetics. They
                                            integrate innovative features like hidden storage solutions, integrated
                                            lighting, and cutting-edge technology to enhance usability and convenience,
                                            ensuring that every luxury vanity is as practical as it is beautiful.</p>
                                        <p>In a world where luxury is often mass-produced, King Joinery's dedication to
                                            bespoke excellence and personalized service sets a new standard. For those
                                            seeking a blend of artistry, functionality, and uncompromising luxury in
                                            their vanities, King Joinery remains the epitome of masterful craftsmanship.
                                        </p>

                                        <a href="{{route('vani.ties')}}" class="btn-theme">Browse Vanities collection<i
                                            class="fa fa-long-arrow-right"></i></a>

                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="service-img">
                                            <img width="100%" src="assets/images/vanities.jpg" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade " id="Offices" role="tabpanel" aria-labelledby="Offices-tab">

                                <div class="row">
                                    <div class="col-md-8">

                                        <h2>Crafting Prestige: <br>King Joinery’s Mastery in Luxury Offices</h2>
                                        <p>Creating a luxurious office space is not merely about aesthetics but also
                                            about functionality, comfort, and an atmosphere that inspires productivity.
                                            King Joinery, renowned for its bespoke craftsmanship, stands out as a
                                            pinnacle of excellence in crafting personalized luxury offices that exude
                                            sophistication and prestige.</p>
                                        <p>At King Joinery, the process of designing a luxury office begins with a
                                            thorough understanding of the client’s vision, work style, and ergonomic
                                            needs. Their team of expert designers and craftsmen collaborate closely,
                                            blending creativity with functionality to create spaces that resonate with
                                            the client’s ethos and elevate their professional environment.</p>
                                        <p>What sets King Joinery apart is their unparalleled attention to detail. Each
                                            element of a luxury office, from bespoke desks and cabinetry to statement
                                            pieces and integrated technology solutions, is meticulously crafted using
                                            premium materials and exquisite finishes. The result is a seamless fusion of
                                            aesthetics and functionality that enhances both the visual appeal and
                                            practicality of the workspace.</p>
                                        <p>Moreover, King Joinery’s commitment to sustainability is evident in their
                                            choice of eco-friendly materials and practices, ensuring that luxury doesn’t
                                            come at the cost of environmental responsibility.</p>
                                        <p>For those who seek a bespoke, luxurious, and inspiring workspace that
                                            reflects their brand’s essence and enhances productivity, King Joinery’s
                                            expertise in luxury offices remains unmatched, setting a new standard of
                                            excellence in office design and craftsmanship.</p>

                                            <a href="{{route('offi.ces')}}" class="btn-theme">Browse Offices collection<i
                                                class="fa fa-long-arrow-right"></i></a>

                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="service-img">
                                            <img width="100%" src="assets/images/offices.jpg" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade " id="Wardrobes" role="tabpanel" aria-labelledby="Wardrobes-tab">

                                <div class="row">
                                    <div class="col-md-8">

                                        <h2>Mastering Elegance: <br>King Joinery's Artistry in Luxury Wardrobes</h2>
                                        <p>In the realm of opulent living spaces, luxury wardrobes play a pivotal role
                                            in both functionality and style. King Joinery, renowned for its bespoke
                                            craftsmanship, stands as a beacon of expertise in creating personalized
                                            luxury wardrobes that redefine organization and elegance.</p>
                                        <p>At King Joinery, the journey of crafting a luxury wardrobe begins with a deep
                                            dive into the client's lifestyle, fashion preferences, and spatial
                                            considerations. Their team of expert designers collaborates closely with
                                            each client, translating their wardrobe dreams into meticulously designed
                                            and expertly crafted storage solutions.</p>
                                        <p>What sets King Joinery apart is their unwavering commitment to quality and
                                            attention to detail. Each luxury wardrobe is custom-built using premium
                                            materials such as fine woods, luxurious fabrics, and innovative storage
                                            solutions. From bespoke shelving to integrated lighting and accessories
                                            compartments, every element is tailored to enhance functionality while
                                            maintaining a sense of luxury.</p>
                                        <p>Moreover, King Joinery's dedication to sustainability is evident in their use
                                            of eco-friendly materials and practices, ensuring that luxury coexists
                                            harmoniously with environmental responsibility.</p>
                                        <p>For those who desire a wardrobe that reflects their unique style, maximizes
                                            storage efficiency, and exudes luxury in every detail, King Joinery's
                                            expertise in luxury wardrobes sets a new standard of excellence, blending
                                            artistry, functionality, and timeless elegance seamlessly.</p>

                                            <a href="{{route('ward.robes')}}" class="btn-theme">Browse Wardrobes collection<i
                                                class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="service-img">
                                            <img width="100%" src="assets/images/wardrobes.jpg" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade " id="Entertainment" role="tabpanel"
                                aria-labelledby="Entertainment-tab">


                                <div class="row">
                                    <div class="col-md-8">

                                        <h2>Elevated Entertainment: <br>King Joinery’s Mastery in Entertainment Vanities
                                        </h2>
                                        <p>In the realm of home entertainment, where style meets functionality, King
                                            Joinery emerges as a master of crafting bespoke entertainment vanities that
                                            redefine leisure and luxury. With a fusion of innovative design, premium
                                            materials, and expert craftsmanship, King Joinery’s entertainment vanities
                                            elevate the entertainment experience to unparalleled heights.</p>
                                        <p>At King Joinery, the creation of an entertainment vanity is a collaborative
                                            journey, starting with a thorough understanding of the client’s
                                            entertainment needs, space requirements, and aesthetic preferences. Their
                                            team of expert designers and artisans then weave together creativity and
                                            practicality to fashion a bespoke masterpiece that seamlessly integrates
                                            into the home environment.</p>
                                        <p>What sets King Joinery apart is their relentless pursuit of excellence in
                                            every detail. Each entertainment vanity is meticulously crafted using the
                                            finest materials, from exotic woods to high-quality finishes, ensuring
                                            durability and timeless elegance. Custom features such as integrated sound
                                            systems, adjustable shelving, and concealed storage solutions further
                                            enhance the functionality and allure of these vanities.</p>
                                        <p>Moreover, King Joinery’s commitment to sustainability shines through their
                                            eco-conscious practices and choices, reflecting a harmonious blend of luxury
                                            and environmental responsibility.</p>
                                        <p>For those seeking an entertainment vanity that transcends expectations,
                                            combining cutting-edge design with unmatched craftsmanship, King Joinery
                                            stands as the epitome of expertise in creating entertainment spaces that
                                            inspire and delight.</p>

                                            <a href="{{route('entertain.ment')}}" class="btn-theme">Browse Entertainment collection<i
                                                class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="service-img">
                                            <img width="100%" src="assets/images/entertainment.jpg" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade " id="Outdoor" role="tabpanel" aria-labelledby="Outdoor-tab">


                                <div class="row">
                                    <div class="col-md-8">

                                        <h2>Al Fresco Elegance: <br>King Joinery’s Mastery in Luxury Outdoor Kitchens
                                            and BBQs</h2>
                                        <p>Elevating outdoor living to a realm of luxury and sophistication, King
                                            Joinery excels in crafting bespoke outdoor kitchens and BBQs that redefine
                                            the art of culinary entertainment. With a blend of exquisite design, premium
                                            materials, and unparalleled craftsmanship, King Joinery’s creations
                                            transform outdoor spaces into culinary havens of distinction.</p>
                                        <p>At King Joinery, the journey of crafting a luxury outdoor kitchen or BBQ
                                            begins with a deep dive into the client’s culinary preferences, entertaining
                                            style, and outdoor space dynamics. Their team of expert designers
                                            collaborates closely, translating visions into meticulously planned and
                                            expertly executed outdoor culinary sanctuaries.</p>
                                        <p>What distinguishes King Joinery is their commitment to excellence in every
                                            aspect. Each outdoor kitchen or BBQ is crafted using top-quality materials
                                            such as weather-resistant woods, durable stainless steel, and custom
                                            finishes that withstand the elements while exuding timeless elegance. Custom
                                            features like integrated grills, refrigeration units, and ample storage
                                            ensure functionality without compromising on style.</p>
                                        <p>Furthermore, King Joinery’s dedication to sustainability is evident in their
                                            use of eco-friendly materials and energy-efficient design, aligning luxury
                                            with environmental responsibility.</p>
                                        <p>For those who seek an outdoor culinary experience that harmonizes gourmet
                                            flair with outdoor living, King Joinery’s expertise in luxury outdoor
                                            kitchens and BBQs sets a new standard of opulence, blending innovation,
                                            functionality, and al fresco elegance seamlessly.</p>
                                            <a href="{{route('outdoor.kitchens')}}" class="btn-theme">Browse Outdoor Kitchens & BBQs collection<i
                                                class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="service-img">
                                            <img width="100%" src="assets/images/outdoor.jpg" alt="">
                                        </div>
                                    </div>
                                </div>

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

