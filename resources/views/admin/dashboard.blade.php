@extends('layout.adminlayout')
@section('content')
  <div class="col-2 "> @include('admin.sidebar',['user'=>$user]) </div>
  <div class="col-8 offset-1">
      <h2 class="m-5">Manage Posts</h2>
      <div class="container create-post-wrapper">
        <form action="create-post" method="post">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="first">Post Title</label>
                <input type="text" class="form-control" placeholder="Post Title here" id="post-title" name="title">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="last">Slug</label>
                <input type="text" class="form-control" placeholder="post-title" id="slug" name="slug">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="author">Author</label>
                {{-- after login user name should be author --}}
                {{-- list the users if logged in as admin --}}
                <input type="text" class="form-control" placeholder="author name" id="author" name="author">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="excerpt">Excerpt</label>
                <input type="text" class="form-control" id="excerpt" placeholder="short-description" name="excerpt">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="content">Description</label>
                <textarea class="form-control" id="content" placeholder="post content here..." name="desription"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <label for="img"></label>
              <input type="file" name="img">
            </div>
          </div>
          <label for="post-status">Post Status</label>
          <div class="radio">
            <label>
              <input type="radio" name="post-status" id="post-status" value="0" checked>Private
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="post-status" id="post-status" value="1" checked>Published
            </label>
          </div>

          <button type="submit" class="btn btn-primary">Add Post</button>
        </form>
      </div>

      <h2 class="m-5">Manage Banners</h2>
    </div>
@endsection
