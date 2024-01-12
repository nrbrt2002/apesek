@extends('layouts.include')

@section('content')
<br><br><br><br>
<section id="features" class="features">
    <div class="container">

      <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
            
        
        <div class="col-md-5">
          <img src="{!! asset('public/storage/images/categories/'.$category1->cat_pic) !!}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7">
          <h3>{{ $category1->name}}</h3>
          <p class="fst-italic">
            {!!  $category1->short_desc !!}
          </p><br>
          <p>
            {!! $category1->desc !!}
          </p>
        </div>
      </div><!-- Features Item -->


    </div>
  </section><!-- End Features Section -->

@endsection