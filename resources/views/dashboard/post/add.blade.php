@extends('layouts.admin-navigation')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">

      <h1>Add Post</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Posts</li>
          <li class="breadcrumb-item active">Add Post</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Post Details</h5>
              <p>Add all the post information for a new category</p>

              <form method="post" action="{{ route('save-post') }}"  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label>Post Title</label>
                  <input type="text" name="title" class="form-control" value="{{old('title')}}">
                  @error ('title')
                  <span class="alert text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group">
                  <label>Post Category</label>
                <select class="form-control" name="category_id">
                  <option value="">Select Category</option>
                  @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                </select>
                  @error ('category_id')
                  <span class="alert text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group">
                  <label>Location</label>
                  <input type="text" name="location" class="form-control" value="{{old('location')}}">
                  @error ('location')
                  <span class="alert text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group">
                  <label>Add Photo</label>
                  <input type="file" name="post_pic" class="form-control">
                  @error ('post_pic')
                  <span class="alert text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group">
                  <label>Select Post Satatus</label>
                  <select class="form-control" name="status">
                    <option value="">Choose a status</option>
                    <option value="1">Publishe</option>
                    <option value="0">Draft</option>
                  </select>
                  <p class="help-block">Enter the Title of this post.</p>
                </div>

                <div class="form-group">
                  <label>Short Description</label><br>
                  <textarea name="short_desc" class="form-control" rows="8" cols="80">{{old('body')}}</textarea>
                  @error ('short_desc')
                  <span class="alert text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Add Another Photo</label>
                  <input type="file" name="short_pic" class="form-control">
                  @error ('short_pic')
                  <span class="alert text-danger">{{ $message }}</span>
                  @enderror
                </div>


                <div class="form-group">
                  <label>Description</label>
                  <textarea class="tinymce-editor" name="body">
                    {{old('body')}}
                  </textarea>
                  @error ('body')
                  <span class="alert text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <button type="submit" name="add_post" class="btn btn-primary"><i class="fa fa-save"></i> Add Post</button>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection
