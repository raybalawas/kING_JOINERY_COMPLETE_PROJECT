@extends('front.layout.main')
@section('content')
    <main class="banner-sec inner-banner-sec projectbanner1">
        <div class="container">
            <div class="row justify-content-md-end">
                <div class="col-lg-5 col-md-8">
                    <div class="banner-text">

                        @if (isset($category))
                            <h1>{{ $category->category }}</h1>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </main>

    <section class="gallerybg">
        <div class="container">
            
            <p style="font-size: 40px; color:black; text-transform: capitalize;">{{ $product->project_title }}</p>
            <div class="row row-cols-md-4 g-4 gallery">
                @php
                    $imageCounter = 1;
                @endphp
                @foreach ($images as $image)
                    <div class="col-md">

                        <a href="{{ asset('productsMultipleImages/' . $image) }}" data-lightbox="gallery"
                            data-title="Image {{ $imageCounter }}">
                            <img src="{{ asset('productsMultipleImages/' . $image) }}" alt="{{ $product->project_title }}"
                                title="Image {{ $imageCounter }}">
                        </a>
                    </div>
                    @php
                        $imageCounter++;
                    @endphp
                @endforeach
            </div>
        </div>
    </section>

    <a href="https://wa.me/+61425561100" class="fixed-whatsapp-btn" target="_blank">
        <i class="fa fa-whatsapp"></i>
    </a>
@endsection
