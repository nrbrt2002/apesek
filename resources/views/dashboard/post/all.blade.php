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
                      <th>Title</th>
                      <th>Location</th>
                      <th>Category</th>
                      <th>Status</th>
                      <th colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                    <tr class="gradeU">
                      <td>{{$post->id}}</td>
                      <td><img class="img-responcive" width="100" height="50" src="{!! asset('storage/images/posts/'.$post->post_pic) !!}" alt=""></td>
                      <td>{{$post->title}}</td>
                      <td>{{$post->location}}</td>
                      <td>{{$post->category->name}}</td>
                      @if ($post->status == 1)
                        <td>Published</td>
                      @else
                        <td>Draft</td>
                      @endif
                      {{-- <td><a href="{{ route('show-post', $post->id) }}"><i class="fa fa-eye text-info"></i> </a></td> --}}
                      <td><a href="{{ route('edit-post', $post->id) }}"><i class="bx bxs-edit-alt text-primary"></i> </a></td>
                      <td><a onClick=\"javascript: return confirm('Are you sure to delete this post'); \" href="{{ route('delete-post', $post->id) }}"><i class="bx bxs-trash-alt text-danger"></i> </a></td>
                      @if ($post->status == 1)
                        <td><a href="{{ route('draft-post', $post->id) }}" class="btn btn-warning btn-xs">Draft</a></td>
                      @else
                        <td><a href="{{ route('publish-post', $post->id) }}" class="btn btn-info btn-xs">Publish</a></td>
                      @endif

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
