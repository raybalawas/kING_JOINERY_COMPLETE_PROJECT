@extends('admin.layout.main')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Blog</h4>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form class="forms-sample" action="{{ route('blogs.update', $blog->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('POST')


                    <div class="form-group">
                        <label for="categorySelect">Category</label>
                        <select name="category" id="categorySelect" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category', $blog->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->category }}
                                </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputTitle">Title</label>
                        <input type="text" class="form-control" id="exampleInputTitle" placeholder="Blog Title"
                            name="BlogTitle" value="{{ old('BlogTitle', $blog->BlogTitle) }}">
                        @error('BlogTitle')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputAuthor">Author Name</label>
                        <input type="text" class="form-control" id="exampleInputAuthor" placeholder="Author Name"
                            name="AuthorName" value="{{ old('AuthorName', $blog->AuthorName) }}">
                        @error('AuthorName')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputImage">Update Blog Image</label>
                        <img src="{{ asset('BlogImages/' . $blog->Image) }}" alt="img"
                            style="height: 200px; width: 200px; border-radius: 50%;">
                        <input type="file" class="form-control" id="exampleInputImage" name="BlogImage"
                            value="{{ old('BlogImage', $blog->Image) }}">
                        @error('BlogImage')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <a href="#" class="read-more" data-bs-toggle="modal" data-bs-target="#blogModal">Update Blog</a>

                    <div class="modal fade" id="blogModal" tabindex="-1" aria-labelledby="blogModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="blogModalLabel">Update Blog</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Textarea for updating the blog content -->
                                    <div class="form-group">
                                        <label for="updateBlogTextarea">Update Blog Content</label>
                                        <textarea class="form-control" id="updateBlogTextarea" rows="40" name="Blog">{{ old('Blog', $blog->Blog) }}</textarea>
                                        @error('Blog')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#updateBlogTextarea'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
