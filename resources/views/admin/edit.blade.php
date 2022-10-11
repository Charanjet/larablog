@extends('layout.adminlayout')
@section('content')
    <form action="/post/update/{{ $post->id }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="first">Post Title</label>
                    <input type="text" class="form-control" placeholder="Post Title here" id="post-title" name="title" value="{{ $post->title }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="last">Slug</label>
                    <input type="text" class="form-control" placeholder="post-title" id="slug" name="slug"  value="{{ $post->slug }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="excerpt">Excerpt</label>
                    <input type="text" class="form-control" id="excerpt" placeholder="short-description" name="excerpt"  value="{{ $post->excerpt }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="content">Description</label>
                    <textarea class="form-control" id="content" placeholder="post content here..." name="description" >{{ $post->description }}</textarea>
                </div>
            </div>
        </div>
        <label for="post-status">Post Status</label>
        <div class="radio">
            <label>
                <input type="radio" name="status" id="post-status" value="0"  {{ $post->status=='0'?'checked':'' }}>Private
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="status" id="post-status" value="1" {{ $post->status=='1'?'checked':'' }}>Published
            </label>
        </div>

        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
    <form action="/post/delete/{{ $post->id }}" method="post">
        @csrf
        <button type="submit" class="btn btn-primary">Delete</button>
    </form>
@endsection