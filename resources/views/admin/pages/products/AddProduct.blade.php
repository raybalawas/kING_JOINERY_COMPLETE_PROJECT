@extends('admin.layout.main')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Post A Project</h4>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form class="forms-sample" action="{{ route('post.product') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                     <div class="form-group">
                        <label for="categorySelect">Select Product Category:-</label>
                        <select class="form-control" id="categorySelect" name="category">
                              <option value="">---------------------- Choose Category -------------------------
                            </option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category', $selectedCategoryId ?? '') == $category->id ? 'selected' : '' }}>{{ $category->category }}</option>
                            @endforeach
                        </select>
                    </div> 
                    {{-- <div class="form-group">
                        <label for="categorySelect">Select Category</label>
                        <select class="form-control" id="categorySelect" name="category">
                            <option value="">---------------------- Choose Category -------------------------
                            </option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category', $selectedCategoryId ?? '') == $category->id ? 'selected' : '' }}>
                                    {{ $category->category }}
                                </option>
                            @endforeach
                        </select>
                        @error('category')
                            <span class="alert alert-danger">{{ $message }}</span>
                        @enderror
                    </div> --}}

                    <div class="form-group">
                        <label for="exampleInputTitle">Project Title:</label>
                        <input type="text" class="form-control" id="exampleInputTitle" placeholder="Project Title"
                            name="Project_Title" value="{{ old('Project_Title') }}">
                        @error('Project_Title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputAuthor">Project Detail</label>
                        <textarea class="form-control" id="editor" placeholder="Project Detail" name="Project_Details">{{ old('Project_Details') }}</textarea>
                        @error('Project_Details')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputImage">Choose Project Image</label>
                        <input type="file" class="form-control" id="exampleInputImage" name="Project_Image">
                        @error('Project_Image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputImage">Choose  Multiple Images For Projects</label>
                        <input type="file" class="form-control" id="exampleInputImage" name="Project_Multiple_Image[]"
                            multiple>
                        @error('Project_Multiple_Image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
            </div>
        </div>
    </div>

    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script> --}}

    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                // Configuration options
                toolbar: [
                    'heading', '|',
                    'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|',
                    'outdent', 'indent', '|',
                    'blockQuote', 'insertTable', 'mediaEmbed', 'undo', 'redo'
                ],
                heading: {
                    options: [{
                            model: 'paragraph',
                            title: 'Paragraph',
                            class: 'ck-heading_paragraph'
                        },
                        {
                            model: 'heading1',
                            view: 'h1',
                            title: 'Heading 1',
                            class: 'ck-heading_heading1'
                        },
                        {
                            model: 'heading2',
                            view: 'h2',
                            title: 'Heading 2',
                            class: 'ck-heading_heading2'
                        },
                        {
                            model: 'heading3',
                            view: 'h3',
                            title: 'Heading 3',
                            class: 'ck-heading_heading3'
                        }
                    ]
                },
                // Restrict HTML tags (optional)
                htmlEmbed: {
                    showPreviews: true,
                    sanitizeHtml: (inputHtml) => {
                        const outputHtml = inputHtml
                            .replace(/<\/?(p|h[1-6])>/gi, '')
                            .replace(/<\/?[^>]+(>|$)/g, "");
                        return {
                            html: outputHtml,
                            hasChanged: true
                        };
                    }
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
