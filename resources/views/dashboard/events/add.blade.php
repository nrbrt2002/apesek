@extends('layouts.admin-navigation')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">

      <h1>Add Events</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Events</li>
          <li class="breadcrumb-item active">Add Events</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Event Details</h5>
              <p>Add all the Event information for a new event</p>

              <form method="post" action="{{ route('save-event') }}"  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label>Event Title</label>
                  <input type="text" name="title" class="form-control" value="{{old('title')}}">
                  @error ('title')
                  <span class="alert text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group">
                  <label>Post Category</label>
                <select class="form-control" name="category_id">
                  <option value="{{old('category_id')}}">Select Category</option>
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
                  <label>Targeted</label>
                  <input type="text" name="targeted" class="form-control" value="{{old('targeted')}}">
                  @error ('title')
                  <span class="alert text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group">
                  <label>Participantes</label>
                  <input type="text" name="participantes" class="form-control" value="{{old('participantes')}}">
                  @error ('participantes')
                  <span class="alert text-danger">{{ $message }}</span>
                  @enderror
                </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Start Date</label>
              <input type="date" name="start_date" class="form-control" value="{{old('start_date')}}">
              @error ('location')
              <span class="alert text-danger">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>End Date</label>
              <input type="date" name="end_date" class="form-control" value="{{old('end_date')}}">
              @error ('location')
              <span class="alert text-danger">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>

                <div class="form-group">
                  <label>Event Pic</label>
                  <input type="file" name="event_pic" class="form-control" value="{{old('event_pic')}}">
                  @error ('event_pic')
                  <span class="alert text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group">
                  <label>Materials To be Used</label>
                  <input type="text" name="materials" class="form-control" value="{{old('materials')}}">
                  @error ('title')
                  <span class="alert text-danger">{{ $message }}</span>
                  @enderror
                </div>



                <div class="form-group">
                  <label>Description</label>
                  <textarea class="tinymce-editor" name="desc">
                    {{old('desc')}}
                  </textarea>
                  @error ('body')
                  <span class="alert text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <button type="submit" name="add_event" class="btn btn-primary"><i class="fa fa-save"></i> Add Event</button>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->


@endsection
