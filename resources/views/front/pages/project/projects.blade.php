

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
            @php
                $activeIndex = 0;
                foreach($categories as $index => $category) {
                    if ($category->products->isNotEmpty()) {
                        $activeIndex = $index;
                        break;
                    }
                }
            @endphp

            @foreach($categories as $index => $category)
            <li class="nav-item" role="presentation">
                <button class="nav-link @if($index === $activeIndex) active @endif" id="category-{{ $category->id }}-tab"
                    data-bs-toggle="tab" data-bs-target="#category-{{ $category->id }}-tab-pane" type="button"
                    role="tab" aria-controls="category-{{ $category->id }}-tab-pane"
                    aria-selected="{{ $index === $activeIndex ? 'true' : 'false' }}">{{ $category->category }}</button>
            </li>
            @endforeach
        </ul>
        <div class="tab-content" id="myTabContent">
            @foreach ($categories as $index => $category)
                <div class="tab-pane fade @if ($index === $activeIndex) show active @endif"
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
                                    <a href="{{ route('projects.images', $product->id) }}" class="btn-theme">Browse {{$category->category}} collection
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<a href="https://wa.me/+61425561100" class="fixed-whatsapp-btn" target="_blank">
    <i class="fa fa-whatsapp"></i>
</a>
@endsection
