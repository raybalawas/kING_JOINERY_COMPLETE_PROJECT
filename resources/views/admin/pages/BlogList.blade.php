@extends('admin.layout.main')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a href="{{ url('/admin/add_blogs') }}" class="btn btn-primary">Add More Blogs</a>
                @if (session('success'))
                    <div class="alert alert-danger">{{ session('success') }}</div>
                @endif
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Category</th>
                                <th>Blog Title</th>
                                <th>Author Name</th>
                                <th>Blog</th>
                                <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blog as $blogs)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $blogs->category->category }}</td>
                                    <td>{{ $blogs->BlogTitle }}</td>
                                    <td>{{ $blogs->AuthorName }}</td>
                                    <td>
                                        <div class="blog-preview">
                                            {{ Str::limit(strip_tags($blogs->Blog, 5)) }}
                                            <a href="#" class="read-more" data-bs-toggle="modal"
                                                data-bs-target="#blogModal{{ $blogs->id }}">Read More</a>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="{{ asset('BlogImages/' . $blogs->Image) }}" alt="Blog Image"
                                            class="img-thumbnail" style="max-width: 100px;" id="">
                                    </td>
                                    <td>
                                        <a href="{{ route('BlogEditPage', $blogs->id) }}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form id="delete-form-{{ $blogs->id }}"
                                            action="{{ route('Blog.destroy', encrypt($blogs->id)) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger delete-btn"
                                                data-id="{{ $blogs->id }}">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- Modal for displaying full blog content -->
                                <div class="modal fade" id="blogModal{{ $blogs->id }}" tabindex="-1"
                                    aria-labelledby="blogModalLabel{{ $blogs->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">{{ strip_tags($blogs->Blog) }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.delete-btn').on('click', function(e) {
                e.preventDefault(); // Prevent the default form submission

                var button = $(this);
                var formId = '#delete-form-' + button.data('id');

                // Show confirmation dialog
                var confirmDelete = confirm('Are you sure you want to delete this blog post?');

                // If user cancels, change the button text color to black
                if (!confirmDelete) {
                    button.css('color', 'black');
                }
                else {
                    // If confirmed, submit the form
                    $(formId).submit();
                }
            });
        });
    </script>
@endsection
