<header>
    <div class="header-top container">
        <div class="row g-1">
            <div class="col-lg-4 col-sm-5 header-top-left">
                <a href="mailto:sales@kingjoinery.com.au" class="btn-theme text-lowercase"><i class="fa fa-envelope"></i>
                    sales@kingjoinery.com.au</a>
            </div>
            <div class="col-lg-4 header-top-center">
                <a href="index.html">
                    <img src="assets/images/logo.png" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-sm-7 header-top-right">
                <a href="tel:+61 2 8529 3666" class="btn-theme"><i class="fa fa-phone"></i> +61 2 8529 3666 </a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-dark navbar-expand-lg">
        <div class="container">
            <a href="index.html" class="navbar-brand">
                <img src="assets/images/footer-logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
                aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('services') }}">Our Expertise</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('projects.index') }}">Projects</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">Our Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about_Us') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}">Contacts</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ url('privacy') }}">Privacy</a>
                    </li> --}}

                    {{-- <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Other Important
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{ url('entertainment') }}">Entertainment</a></li>
                            <li><a class="dropdown-item" href="{{ url('kitchen') }}">Kitchen</a></li>
                            <li><a class="dropdown-item" href="{{ url('offices') }}">Offices</a></li>
                            <li><a class="dropdown-item" href="{{ url('outdoorKitche') }}">Out Door Kitche</a></li>
                            <li><a class="dropdown-item" href="{{ url('laundries') }}">Laundries</a></li>
                            <li><a class="dropdown-item" href="{{ url('vanities') }}">Vanities</a></li>
                            <li><a class="dropdown-item" href="{{ url('wardrobes') }}">Wardrobes</a></li>
                            <li><a class="dropdown-item" href="{{ url('privacy') }}">Privacy</a></li>
                        </ul>
                    </div> --}}
                </ul>
            </div>
        </div>
    </nav>
</header>
