{{-- @extends('front.layout.main')

@section('content')
    <main class="banner-sec inner-banner-sec">

        <div class="container">
            <div class="row justify-content-md-end">
                <div class="col-lg-5 col-md-8">
                    <div class="banner-text">
                        <h1>Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <section class="section-padding service-sec">
        <div class="container-xl">
            <div class="row g-lg-5 g-3">
                <div class="col-lg-3">
                    <div class="side-nav blog-category">

                        <h3 style="color: white;">CATEGORY</h3>
                        <ul role="tablist">
                            @foreach ($categories as $category)
                            <li class="nav-item">
                                <a href="{{route('blogs.by.category', encrypt($category->id))}}" class="nav-link ">{{$category->category}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="service-text blog-text">
                        <div class="row">
                            <div class="col-md-8">
                                <h2>{{ $blogs->BlogTitle }}</h2>
                                <p>{{strip_tags($blogs->Blog)}}</p>
                            </div>
                            <div class="col-md-4">
                                
                                <div class="service-img">
                                    <img width="100%" src="{{asset('BlogImages/' . $blogs->Image)}}" alt="">
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
@endsection --}}
@extends('front.layout.main')

@section('content')
    <main class="banner-sec inner-banner-sec">
        <div class="container">
            <div class="row justify-content-md-end">
                <div class="col-lg-5 col-md-8">
                    <div class="banner-text">
                        <h1>Blog</h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>

    <section class="section-padding service-sec">
        <div class="container-xl">
            <div class="row g-lg-5 g-3">
                {{-- <div class="col-lg-3">
                    <div class="side-nav blog-category">
                        <h3 style="color: white;">CATEGORY</h3>
                        <ul role="tablist">
                            @foreach ($categories as $category)
                                @if ($category->blogs->contains('id', $blog->id))
                                    <li class="nav-item">
                                        <a href="{{ route('blogs.by.category', encrypt($category->id)) }}"
                                            class="nav-link">{{ $category->category }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div> --}}
                <div class="row g-lg-5 g-3">
                    <div class="col-lg-3">
                        <div class="side-nav blog-category">
                            <h3 style="color: white;">CATEGORY</h3>
                            <ul role="tablist">
                                @foreach ($categories as $category)
                                    <li class="nav-item">
                                        <a href="{{ route('blogs.by.category', encrypt($category->id)) }}"
                                            class="nav-link">{{ $category->category }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="service-text blog-text">
                            <div class="row">
                                <div class="col-md-8">
                                    <h2>{{ $blog->BlogTitle }}</h2>
                                    <p>{{ strip_tags($blog->Blog) }}</p>
                                </div>
                                <div class="col-md-4">
                                    <div class="service-img">
                                        <img width="100%" src="{{ asset('BlogImages/' . $blog->Image) }}" alt="">
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
