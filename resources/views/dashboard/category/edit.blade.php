@extends('layouts.admin-navigation')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">

      <h1>Edit Categories</h1>
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
              <h5 class="card-title">{{$category->name}}</h5>
              <p>Add all the category information for a new category</p>

              <form method="post" action="{{ route('update-category', $category->id) }}"  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label>Category Name</label>
                  <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                </div>

                <div class="form-group">
                  <label>Short Description</label>
                  <textarea name="short_desc" rows="5" cols="50" class="form-control">{{$category->short_desc}}</textarea>
                </div><br>
                <img class="img-responcive" width="300" height="200" src="{!! asset('storage/images/categories/'.$category->cat_pic) !!}" alt="">

                <div class="form-group">
                  <label>Add Photo</label>
                  <input type="file" name="cat_pic" class="form-control">
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="tinymce-editor" name="desc">
                    {{ $category->desc }}
                  </textarea>                </div>
                <br>
                <button type="submit" name="edit_post" class="btn btn-primary"><i class="fa fa-save"></i> Edit Post</button>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection
