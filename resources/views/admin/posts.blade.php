@extends('layout.adminlayout')
@section('content')
    <div class="col-2 "> @include('admin.sidebar',['user'=>$user]) </div>
    <div class="col-8 offset-1 mb-5 mt-5">
        <h2>Posts</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>

            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td><a href="/post/{{ $post->id }}">{{ $post->title }}</a></td>
                    <td>{{ $post->description }}</td>
                    <td>{{ $post->status==1?'Active':'Disabled' }}</td>
                    <td><a href="/post/edit/{{$post->id}}">Edit/Delete</a></td>
                </tr>

        @endforeach
            </tbody>
        </table>
    </div>
@endsection
