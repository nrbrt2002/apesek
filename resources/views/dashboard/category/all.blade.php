@extends('layouts.admin-navigation')

@section('content')
    
<main id="main" class="main">

    <div class="pagetitle">
        
      <h1>All Categories</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Categories</li>
          <li class="breadcrumb-item active">All Categories</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row"> 
          <div class="card">
            <div class="card-body">
                <table class="table table-stripedtable-hover" id="dataTables-example">
                    <thead>
                        <tr>
                          <th>#</th>
                          <th>Image</th>
                          <th>name</th>
                          <th>Short Description</th>
                          <th>Add at</th>
                          <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($categories as $category)
                        <tr class="gradeU">
                          <td>{{$category->id}}</td>
                          <td><img class="img-responcive" width="100" height="50" src="{!! asset('public/storage/images/categories/'.$category->cat_pic) !!}" alt=""></td>
                          <td>{{$category->name}}</td>
                          <td>{{$category->short_desc}}</td>
                          <td>{{$category->created_at->diffForHumans()}}</td>
                          <td><a href="{{ route('edit-category', $category->id) }}"><i class="bx bxs-edit-alt text-primary"></i> </a></td>
                          <td><a href="{{ route('delete-category', $category->id) }}"><i class="bx bxs-trash-alt text-danger"></i> </a></td>
                        </tr>
                      @endforeach
          
                    </tbody>
                </table>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection