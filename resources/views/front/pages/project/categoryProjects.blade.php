@extends('front.layout.main')
@section('content')
 {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script> --}}
<main class="banner-sec inner-banner-sec projectbanner1">
    <div class="container">
        <div class="row justify-content-md-end">
            <div class="col-lg-5 col-md-8">
                <div class="banner-text">
                    <h1>{{ $category->category }}</h1>
                </div>
            </div>
        </div>
    </div>
</main>

<section class="gallerybg">
    <div class="container">
        <div class="row row-cols-md-4 g-4 gallery">
            @foreach($category->products as $product)
                @php
                    $images = explode(',', $product->project_multiple_image);
                      $imageCounter = 1;
                @endphp
                @foreach($images as $image)
                    <div class="col-md">
                            <a href="{{ asset('productsMultipleImages/'.$image) }}" data-lightbox="gallery" data-title="Image {{ $imageCounter }}">
                            <img src="{{ asset('productsMultipleImages/'.$image) }}" alt="{{ $product->project_title }}" title="Image {{ $imageCounter }}">
                        </a>
                    </div>
                     @php
                        $imageCounter++; // Increment counter for each image
                    @endphp
                @endforeach
            @endforeach
        </div>
    </div>
</section>

<a href="https://wa.me/+61425561100" class="fixed-whatsapp-btn" target="_blank">
    <i class="fa fa-whatsapp"></i>
</a>

@endsection
