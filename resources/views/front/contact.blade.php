@extends('layouts.include')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Contact</h2>
              <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.892282852237!2d29.318333013960594!3d-1.7803726368648978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dd1bcc0d0a4ca9%3A0x30d97980ea4e9a5!2sAPESEK%2C!5e0!3m2!1sen!2srw!4v1677143917104!5m2!1sen!2srw" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <br><br>
        <div class="row">
          <div class="col-lg-4">

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Location:</h4>
                <p>B.P 320 Gisenyi,Rwanda</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>apesegi@yahoo.fr</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Call:</h4>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            @if (Session::has('message_sent'))
                <div class="alert alert-success">
                  <p>{{Session::get('message_sent')}}</p>
                </div>
            @endif
            <form class="form-contact contact_form" method="POST" action="{{ route('sendEmail') }}">
              @csrf
              <div class="row">
                
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="name" id="name" type="text" placeholder="your name">
                    @error('name')
                    <span class="alert text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <br><br>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                    @error('email')
                    <span class="alert text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <br><br>
                <div class="col-12">
                  <div class="form-group">
                      <textarea class="form-control w-100" name="message" id="message" cols="30" rows="4" placeholder="Enter Message"></textarea>
                      @error('message')
                    <span class="alert text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="form-group mt-lg-3">
                <button type="submit" class="button button-contactForm">Send Message</button>
              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


@endsection