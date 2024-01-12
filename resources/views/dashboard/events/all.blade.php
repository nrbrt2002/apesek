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
                      <th>Title</th>
                      <th>Location</th>
                      <th>Start</th>
                      <th>Status</th>
                      <th>Category</th>
                      <th colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($events as $event)
                    <tr>
                      <td>{{ $event->id }}</td>
                      <td>{{ $event->title }}</td>
                      <td>{{ $event->location }}</td>
                      <td>{{ ($event->start_date)->diffForHumans() }}</td>
                      @if ($event->status == 2)
                        <td><span class="badge bg-warning">Upcoming</span></td>
                      @elseif ($event->status == 1 )
                        <td><span class="badge bg-primary">Today</span></td>
                      @else
                        <td><span class="badge bg-success">Complited</span></td>
                      @endif
                      <td>{{ $event->category->name }}</td>
                      <td><a href="{{ route('edit-event', $event->id) }}"><i class="bx bxs-edit-alt text-primary"></i> </a></td>
                      <td><a href="{{ route('delete-event', $event->id) }}"><i class="bx bxs-trash-alt text-danger"></i> </a></td>
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