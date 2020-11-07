@extends('layouts.home')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Buy</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Sell</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ url('assets/product/iphone.jpg') }}" alt="iphone 6">
            <div class="card-body">
              <h5 class="card-title">Iphone 6 s</h5>
              <p class="card-text">Iphone 6 second hand Rwanda </p>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                more about phone
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">iphone 6 s</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      This iphone 6 is 64 Gb you can find it at kimirinko
                      the price is   <span>:167000 rwf <sub> whatsapp:0788695182</sub> </span>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection
