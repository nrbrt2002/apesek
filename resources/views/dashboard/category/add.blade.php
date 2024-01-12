@extends('layouts.admin-navigation')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">

      <h1>Add Categories</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Categories</li>
          <li class="breadcrumb-item active">Add Categories</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Category Details</h5>
              <p>Add all the category information for a new category</p>

              <form method="post" action="{{ route('save-category') }}"  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label>Category Name</label>
                  <input type="text" name="name" class="form-control" value="{{old('name')}}">
                  @error ('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                  <label>Short Description</label>
                  <textarea name="short_desc" rows="5" cols="50" class="form-control" value="{{old('short_desc')}}"></textarea>
                  @error ('short_desc')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group">
                  <label>Add Photo</label>
                  <input type="file" name="cat_pic" class="form-control"value="{{old('catpic')}}">
                  @error ('cat_pic')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea class="tinymce-editor" name="desc">
                      {{old('body')}}
                    </textarea>
                  @error ('body')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div><br>
                <div class="col-sm-10">
                    <button type="submit" name="add_post" class="btn btn-primary"><i class="fa fa-save"></i> Add Post</button>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection
