@extends('admin.layout.main')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Project</h4>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form class="forms-sample" action="{{ route('update.edit.page', $products->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')


                    <div class="form-group">
                        <label for="categorySelect">Select Category</label>
                        <select class="form-control" id="categorySelect" name="category">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $category->id == old('category', $products->category_id) ? 'selected' : '' }}>
                                    {{ $category->category }}
                                </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputTitle">Project Title:</label>
                        <input type="text" class="form-control" id="exampleInputTitle" placeholder="Project Title"
                            name="Project_Title" value="{{ old('Project_Title', $products->project_title) }}">
                        @error('Project_Title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputAuthor">Project Details:</label>
                        <textarea class="form-control" id="editor" placeholder="Project Details" name="Project_Details">{{ old('Project_Details', $products->project_details) }}</textarea>
                        @error('Project_Details')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputImage">Choose Project Image</label>
                        <input type="file" class="form-control" id="exampleInputImage" name="Project_Image"
                            value="{{ old('Project_Image', $products->project_image) }}">
                        <img src="{{ asset('productsSingleImage/' . $products->project_image) }}" alt="Project Image"
                            class="img-thumbnail">
                        @error('Project_Image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- <div class="form-group">
                        <label for="exampleInputImage">Choose Project Image</label>
                        <input type="file" class="form-control" id="exampleInputImage" name="Project_Image">
                        @if (!empty($products->project_image))
                            <img src="{{ asset('productsSingleImage/' . $products->project_image) }}" alt="Project Image"
                                class="img-thumbnail">
                        @else
                            <img src="{{ asset('placeholder_image.jpg') }}" alt="Placeholder Image" class="img-thumbnail">
                        @endif
                        @error('Project_Image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div> --}}


                    <div class="form-group">
                        <label for="exampleInputMultipleImages">Choose Multiple Images For Projects</label>
                        <input type="file" class="form-control" id="exampleInputMultipleImages"
                            name="Project_Multiple_Image[]" multiple>

                        @if ($products->project_multiple_image)
                            <div class="multiple-images-container">
                                @foreach (explode(',', $products->project_multiple_image) as $image)
                                    <img src="{{ asset('productsMultipleImages/' . $image) }}" alt="Project Image"
                                        class="img-thumbnail" style="max-width: 100px;">
                                @endforeach
                            </div>
                        @endif
                        @error('Project_Multiple_Image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Update</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection

<style>
    .multiple-images-container {
        display: flex;
        gap: 20px;
        /* Add some space between images */
        flex-wrap: wrap;
        /* Wrap images to the next line if they don't fit */
    }
</style>
