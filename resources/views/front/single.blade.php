@extends('layouts.include')

@section('content')
<section id="features" class="features">
    <div class="container mt-5">
    <div class="row">
        <div class="col-lg-10">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1">{{$post->title}}</h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2">Posted {{$post->created_at->diffForHumans()}} in {{$post->location }}</div>
                    <!-- Post categories-->
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded" src="{!! asset('storage/images/posts/'.$post->post_pic) !!}" alt="..." /></figure>
                <!-- Post content-->
                <section class="mb-5">
                    <p class="fs-5 mb-4">{{$post->post_desc->short_desc}}</p>
                    <figure class="mb-4"><img class="img-fluid rounded" src="{!! asset('storage/images/posts/'.$post->post_desc->short_pic) !!}" alt="..." /></figure>

                    <p class="fs-5 mb-4">For me, the most fascinating interface is Twitter. I have odd cosmic thoughts every day and I realized I could hold them to myself or share them with people who might be interested.</p>
                    <p class="fs-5 mb-4">Venus has a runaway greenhouse effect. I kind of want to know what happened there because we're twirling knobs here on Earth without knowing the consequences of it. Mars once had running water. It's bone dry today. Something bad happened there as well.</p>
                </section>
            </article>
            <!-- Comments section-->
            
        </div>
        <!-- Side widgets-->
        
    </div>
    </div>
  </section><!-- End Features Section -->

@endsection