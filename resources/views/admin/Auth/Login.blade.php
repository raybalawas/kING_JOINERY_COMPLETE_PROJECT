<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Breeze Admin</title>
    <link rel="stylesheet" href="{{ asset('assetsAdmin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsAdmin/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsAdmin/assets/css/vertical-light-layout/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assetsAdmin/assets/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5" style="background-color: rgb(135, 235, 236);">
                            <div class="brand-logo">
                                <img src="{{ asset('assets/images/logo.png') }}" >

                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>
                            @if (session('success'))
                                <alert class="alert-success">{{ session('success') }}</alert>
                            @endif
                            @if (session('error'))
                                <alert class="alert-danger">{{ session('error') }}</alert>
                            @endif
                            <form class="pt-3" action="{{ route('admin.login.post') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                                        placeholder="Username" name="email">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg"
                                        id="exampleInputPassword1" placeholder="Password" name="password">
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-3 d-grid gap-2">
                                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                        type="submit">SIGN IN</button>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    {{-- <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                                    </div> --}}
                                    {{-- <a href="{{route('admin.forgott.password')}}" class="auth-link text-black">Forgot password?</a> --}}
                                </div>
                                {{-- <div class="mb-2 d-grid gap-2">
                                    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                                        <i class="mdi mdi-facebook me-2"></i>Connect using facebook </button>
                                </div> --}}
                                {{-- <div class="text-center mt-4 font-weight-light"> Don't have an account? <a
                                        href="{{ route('Register.Form') }}" class="text-primary">Create</a>
                                </div> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assetsAdmin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assetsAdmin/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assetsAdmin/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assetsAdmin/assets/js/misc.js') }}"></script>
    <script src="{{ asset('assetsAdmin/assets/js/settings.js') }}"></script>
    <script src="{{ asset('assetsAdmin/assets/js/todolist.js') }}"></script>
</body>

</html>
