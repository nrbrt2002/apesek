@extends('layouts.admin-navigation')

@section('content')
    
<main id="main" class="main">

    <div class="pagetitle">
        
      <h1>Edit Event</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Events</li>
          <li class="breadcrumb-item active">Edit Event</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row"> 
          <div class="card">
            <div class="card-body">
              <p>Add all the event information for a new event</p>
              
              <form method="post" action="{{ route('update-event', $event->id) }}"  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label>Event Title</label>
                  <input type="text" name="title" value="{{ $event->title }}" class="form-control">
                </div>
        
        
                <div class="form-group">
                  <label>Post Category</label>
                <select class="form-control" name="category_id">
                  <option value="{{$event->category->id}}">{{$event->category->name}}</option>
                  @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                </select>
                </div>
        
                <div class="form-group">
                  <label>Location</label>
                  <input type="text" name="location" value="{{ $event->location }}" class="form-control">
                </div>
        
                <div class="form-group">
                  <label>Targeted</label>
                  <input type="text" name="targeted" value="{{ $event->targeted }}" class="form-control">
                </div>
        
                <div class="form-group">
                  <label>Participantes</label>
                  <input type="text" name="participantes" value="{{ $event->participantes }}" class="form-control">
                </div>
        
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Start Date</label>
              <p>{{ $event->start_date }}</p>
              <input type="date" name="start_date" value="{{ $event->start_date }}" class="form-control">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>End Date</label>
              <p>{{ $event->end_date }}</p>
              <input type="date" name="end_date" value="{{ $event->end_date }}" class="form-control">
            </div>
          </div>
        </div>
                <div class="form-group">
                  <label>Event Pic</label>
                  <input type="file" name="event_pic" class="form-control">
                  @error ('event_pic')
                    <p class="help-block alert-danger">{{ $message }}</p>
                  @enderror
                </div>
        
                <div class="form-group">
                  <label>Materials To be Used</label>
                  <input type="text" name="materials" value="{{ $event->materials }}" class="form-control">
                </div>
        
        
                <div class="form-group">
                  <label>Description</label>
                  <textarea id="myTextarea" name="desc">{{ $event->desc }}</textarea>
                </div>
        
                <button type="submit" name="add_event" class="btn btn-primary"><i class="fa fa-edit"></i> Edit Event</button>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <script src="{!! asset('tinymce/tinymce.min.js') !!}"></script>
  <script>
    tinymce.init({
      selector: '#myTextarea'
    })
  </script>
@endsection