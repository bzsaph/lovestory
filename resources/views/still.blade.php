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


            <div class="row"></div>
                @foreach ($product as $avoilable )






                <div class="col-sm-3">
                    <div class="card" style="width: 17rem;">
                        <img class="card-img-top " src="{{ url('thumbnail') }}/{{$avoilable->image}}" Style="width: 100%;height: 15vw; object-fit: cover;" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{$avoilable->pname}}</h5>
                            <p class="card-text">{{$avoilable->ptitle}} </p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".t{{$avoilable->id}}">more about phone</button>

                            <div class="modal fade t{{$avoilable->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{$avoilable->pname}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ url('thumbnail') }}/{{$avoilable->image}}" height="400px" alt="{{$avoilable->pname}}"><br>

                                            {!!$avoilable->pdiscription!!}
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
                @endforeach
            </div>




        </div>
    </section>

</main><!-- End #main -->
@endsection

