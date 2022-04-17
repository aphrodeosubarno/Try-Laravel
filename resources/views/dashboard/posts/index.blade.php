@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 text-left">My Posts</h1>
    </div>

    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($posts->count() > 0)
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->category->name }}</td>
                            <td>
                                <a href="/dashboard/posts/{{ $post->id }}" class="badge bg-primary text-white">
                                    <span data-feather="eye"></span>
                                </a>
                                <a href="" class="badge bg-success text-white">
                                    <span data-feather="edit"></span>
                                </a>
                                <a href="" class="badge bg-danger text-white">
                                    <span data-feather="trash-2"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td>No Posts Found :(</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
