@extends('admin.layout.main')
@section('content')
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>404 Error Page</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('adminn')}}">Home</a></li>
                                <li class="breadcrumb-item active">404 Error Page</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection
