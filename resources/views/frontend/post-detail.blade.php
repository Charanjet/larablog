@extends('layout.layout')
@section('content')
    <div class="posts-wrapper m-5 row">
        <div class="col-md-4">
            <img src="/assets/images/comp2.jpeg" alt="" class="w-100">
        </div>
        <div class="col-md-7">
                <div class="post-title h2"> {{ $post->title }}</div>
                <div class="post-author h5">By: {{ $post->author }}</div>
                <div class="post-date h6">On: {{ $post->created_at }}</div>
                <div class="post-excerpt">{{ $post->description }}</div>
        </div>
    </div>
@endsection