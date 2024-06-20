@extends('admin.layout.main')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('show.add.product.form') }}" class="btn btn-primary">Add More Projects</a>
                @if (session('success'))
                    <div class="alert alert-danger">{{ session('success') }}</div>
                @endif
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Category</th>
                                <th>Project Title</th>
                                <th>Project Detail</th>
                                <th>Project Image</th>
                                <th>Multiple Project Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Products as $Product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $Product->category->category }}</td>
                                    <td>{{ $Product->project_title }}</td>
                                    <td>
                                        <div class="blog-preview">
                                            {{ Str::limit(strip_tags($Product->project_details, 2)) }}
                                            <a href="#" class="read-more" data-bs-toggle="modal"
                                                data-bs-target="#blogModal{{ $Product->id }}">Read More</a>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="{{ asset('productsSingleImage/' . $Product->project_image) }}"
                                            alt="Blog Image" style="max-width: 100px;" id="">
                                    </td>
                                    <td>
                                        @if ($Product->project_multiple_image)
                                            @foreach (explode(',', $Product->project_multiple_image) as $image)
                                                <img src="{{ asset('productsMultipleImages/' . $image) }}" alt="">
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('show.edit.page', $Product->id) }}"
                                            class="btn btn-primary">Edit</a>
                                    </td>
                                    {{-- <td>
                                        <form action="{{ route('product.destroy', $Product->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this blog post?')">Delete</button>
                                        </form>
                                    </td> --}}

                                    <td>
                                        <form id="delete-form-{{ $Product->id }}"
                                            action="{{ route('product.destroy', $Product->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger delete-btn"
                                                data-id="{{ $Product->id }}">Delete</button>
                                        </form>
                                    </td>

                                </tr>

                                <div class="modal fade" id="blogModal{{ $Product->id }}" tabindex="-1"
                                    aria-labelledby="blogModalLabel{{ $Product->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="blogModalLabel{{ $Product->id }}">
                                                    {{ $Product->project_title }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {!! nl2br(strip_tags($Product->project_details)) !!}

                                                {{-- {!! nl2br(strip_tags($project->details)) !!} --}}
                                            </div>
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
                } else {
                    // If confirmed, submit the form
                    $(formId).submit();
                }
            });
        });
    </script>
@endsection
