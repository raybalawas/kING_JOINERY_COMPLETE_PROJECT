{{-- @extends('front.layout.main')
@section('content')
    <main class="banner-sec inner-banner-sec">

        <div class="container">
            <div class="row justify-content-md-end">
                <div class="col-lg-5 col-md-8">
                    <div class="banner-text">
                        <h1>Blogs</h1>
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
                                <li class="nav-item" role="presentation">
                                    <a href="{{ route('blogs.by.category', encrypt($category->id)) }}"
                                        class="nav-link">{{ $category->category }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class=" blog-list">
                        @foreach ($blogs as $blog)
                            <div class="card blog-card">
                                <img class="card-img" src="{{ asset('BlogImages/' . $blog->Image) }}" alt="">
                                <div class="card-body">
                                    <h2 class="card-title">
                                        <a href="{{ route('single.blog', ['id' => encrypt($blog->id)]) }}"
                                            style="color: black; text-decoration: none;"
                                            onmouseover="this.style.color='red'" onmouseout="this.style.color='black'">
                                            {{ $blog->BlogTitle }}
                                        </a>
                                    </h2>


                                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3"
                                        style="color: red">
                                        <div class="card-author">
                                            <span>AUTHOR: {{ $blog->AuthorName }}</span>
                                            <span>DATE POSTED: {{ $blog->created_at->format('d F Y') }}</span>
                                        </div>
                                    </div>
                                    <p class="card-text">
                                        @php
                                            $content = $blog->Blog;
                                            $wordCount = str_word_count($content);
                                            $limitedContent = strtok($content, ' ');
                                            for ($i = 1; $i < 30 && $i < $wordCount; $i++) {
                                                $limitedContent .= ' ' . strtok(' ');
                                            }
                                            echo $limitedContent . '...';
                                        @endphp
                                    </p>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a href="https://wa.me/+61425561100" class="fixed-whatsapp-btn" target="_blank">
        <i class="fa fa-whatsapp"></i>
    </a>
@endsection --}}
{{-- @extends('front.layout.main')
@section('content')
    <main class="banner-sec inner-banner-sec">
        <div class="container">
            <div class="row justify-content-md-end">
                <div class="col-lg-5 col-md-8">
                    <div class="banner-text">
                        <h1>Blogs</h1>
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
                                <li class="nav-item" role="presentation">
                                    <a href="{{ route('blogs.by.category', encrypt($category->id)) }}"
                                       class="nav-link">{{ $category->category }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="blog-list">
                        @foreach ($blogs as $blog)
                            <div class="card blog-card">
                                <img class="card-img" src="{{ asset('BlogImages/' . $blog->Image) }}" alt="" style="height: 200px;">
                                <div class="card-body">
                                    <h2 class="card-title">
                                        <a href="{{ route('single.blog', ['id' => encrypt($blog->id)]) }}"
                                           style="color: black; text-decoration: none;"
                                           onmouseover="this.style.color='red'" onmouseout="this.style.color='black'">
                                            {{ $blog->BlogTitle }}
                                        </a>
                                    </h2>

                                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3"
                                         style="color: red">
                                        <div class="card-author">
                                            <span>AUTHOR: {{ $blog->AuthorName }}</span>
                                            <span>DATE POSTED: {{ $blog->created_at->format('d F Y') }}</span>
                                        </div>
                                    </div>
                                    <p class="card-text">
                                        @php
                                            $content = $blog->Blog;
                                            $wordCount = str_word_count($content);
                                            $limitedContent = strtok($content, ' ');
                                            for ($i = 1; $i < 30 && $i < $wordCount; $i++) {
                                                $limitedContent .= ' ' . strtok(' ');
                                            }
                                            echo $limitedContent . '...';
                                        @endphp
                                    </p>
                                </div>
                            </div>
                        @endforeach
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
                        <h1>Blogs</h1>
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
                                <li class="nav-item">
                                    <a href="{{ route('blogs.by.category', encrypt($category->id)) }}"
                                        class="nav-link">{{ $category->category }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div> --}}
                <div class="col-lg-3">
                    <div class="side-nav blog-category">
                        <h3 style="color: white;">CATEGORIES</h3>
                        <ul role="tablist">
                            @foreach ($categories as $category)
                                @if ($category->blogs->count() > 0)
                                    <!-- Check if category has blogs -->
                                    <li class="nav-item">
                                        <a href="{{ route('blogs.by.category', encrypt($category->id)) }}"
                                            class="nav-link">{{ $category->category }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="blog-list">
                        @foreach ($blogs as $blog)
                            <div class="card blog-card">
                                <img class="card-img" src="{{ asset('BlogImages/' . $blog->Image) }}" alt="" >
                                <div class="card-body">
                                    <h2 class="card-title">
                                        <a href="{{ route('single.blog', ['id' => encrypt($blog->id)]) }}"
                                            style="color: black; text-decoration: none;"
                                            onmouseover="this.style.color='red'" onmouseout="this.style.color='black'">
                                            {{ $blog->BlogTitle }}
                                        </a>
                                    </h2>

                                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3" >
                                        <div class="card-author">
                                            <span>AUTHOR: {{ $blog->AuthorName }}</span>
                                            <span>DATE POSTED: {{ $blog->created_at->format('d F Y') }}</span>
                                        </div>

                                        <div class="dropdown"> 
                                            <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Share: <i class="fa fa-facebook-square text-facebook"></i>
                                                <i class="fa fa-twitter-square text-twitter"></i>
                                                <i class="fa fa-pinterest-square text-pinterest"></i>
                                                <i class="fa fa-google-plus-square text-google-plus"></i>
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-facebook-square text-facebook"></i> Facebook</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-twitter-square text-twitter"></i> Twitter</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-pinterest-square text-pinterest"></i> Pinterest</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-google-plus-square text-google-plus"></i>
                                                        Google+</a>
                                                </li>
                                            </ul>
    
                                        </div>
                                    </div>
                                    <div class="card-text-content">
                                        @php
                                            $content = $blog->Blog;
                                            $wordCount = str_word_count($content);
                                            $limitedContent = strtok($content, ' ');
                                            for ($i = 1; $i < 30 && $i < $wordCount; $i++) {
                                                $limitedContent .= ' ' . strtok(' ');
                                            }
                                            echo $limitedContent . '...';
                                        @endphp
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


            </div>
        </div>
    </section>
    <a href="https://wa.me/+61425561100" class="fixed-whatsapp-btn" target="_blank">
        <i class="fa fa-whatsapp"></i>
    </a>
@endsection
