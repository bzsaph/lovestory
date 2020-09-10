@extends('layouts.home')
@section('content')

<main>
   



    <section class="brand-area section-padding-b">
        <div class="container">
                <!-- Section Tittle -->
                <div class="row d-flex justify-content-center">

                <div class="col-lg-8">
                    <div class="section-tittle text-center">
                        @foreach ($story as $item)
                        <h4>{{$item->Title}}</h4><hr>

                        <h4>{!!$item->Description!!}</h4><hr>

                            
                        @endforeach
                       
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <!-- Gallery-2 img Start-->
    

</main>


@endsection
