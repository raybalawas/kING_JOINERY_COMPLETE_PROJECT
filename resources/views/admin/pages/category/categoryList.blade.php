@extends('admin.layout.main')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('show.category.form') }}" class="btn btn-primary">Add More Category</a>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Category</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->category }}</td>
                                    <td>
                                        <a href="{{ route('show.edit.pagee', $category->id) }}"
                                            class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger delete-button">Delete</button>
                                        </form>
                                    </td>
                                </tr>
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
            $(".delete-button").click(function(event) {
                var confirmed = confirm('Are you sure you want to delete this item?');
                
                if (!confirmed) {
                    $(this).css('color', 'black');
                    event.preventDefault(); // Prevent the form from submitting
                }
            });
        });
    </script>
@endsection
