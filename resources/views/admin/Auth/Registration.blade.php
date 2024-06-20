<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Breeze Admin</title>
    <link rel="stylesheet" href="{{ asset('assetsAdmin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsAdmin/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsAdmin/assets/css/vertical-light-layout/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" />
</head>
<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5" style="background-color: rgb(12, 15, 15);">
                            <div class="brand-logo">
                                <img src="{{ asset('assets/images/logo.png') }}">
                            </div>
                            <h4 style="color: white">New here?</h4>
                            <h6 class="font-weight-light" style="color: white">Signing up is easy. It only takes a few steps</h6>
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            <form class="pt-3" method="POST" action="{{ route('Register.post') }}">
                                @csrf

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg"
                                        id="exampleInputUsername1" placeholder="Username" name="UserName" value="{{(old('UserName'))}}">
                                    @error('UserName')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                                        placeholder="Email" name="Email" value="{{old('Email')}}">
                                    @error('Email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg"
                                        id="exampleInputPassword1" placeholder="Password" name="Password" value="{{old('Password')}}">
                                    @error('Password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                 <div class="form-group">
                                    <input type="text" class="form-control form-control-lg"
                                        id="exampleInputPassword1" placeholder="Confirm Password" name="Password_confirmation">
                                    @error('Password_confirmation')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <div class="form-check" style="color: white">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input"> I agree to all Terms &
                                            Conditions </label>
                                    </div>
                                </div>

                                <div class="mt-3 d-grid gap-2" style="color: white">
                                    <button type="submit"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN
                                        UP</button>
                                </div>

                                <div class="text-center mt-4 font-weight-light"> Already have an account? <a
                                        href="{{ route('login') }}" class="text-primary">Login</a>
                                </div>
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
