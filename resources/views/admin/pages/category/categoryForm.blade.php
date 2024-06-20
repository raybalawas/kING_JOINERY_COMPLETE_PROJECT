@extends('admin.layout.main')
@section('title', 'Categogry')
@section('content')
<div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add A Category</h4>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form class="forms-sample" action="{{route('post.category.form')}}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputTitle">Category Name:</label>
                        <input type="text" class="form-control" id="exampleInputTitle" placeholder="Category"
                            name="category" value="{{ old('category') }}">
                        @error('category')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection


