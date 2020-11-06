@extends('layouts.home')
@section('tittle')
@foreach ($story as $item)
<title>{{$item->Title}}</title>
@endforeach
@endsection
@section('content' )
<section style="background: gray !important">
<main >
    <div class="content-wrapper container"style="background: gray !important;margin-top:5% !important">
        <div class="row">
           <!-- Blog Content-->
           <div class="col-xl-12">
            @foreach ($story as $item)
              <div class="card card-default">
                 <div class="card-header">

                    <div class="bb">
                       <h2 class="text-lg mt-3">{{$item->Title}}</h2>
                       <p class="d-flex">
                          <span>
                             <small class="mr-1">By
                                <a style="color: #000 !important" class="ml-1" href="#">coming soon</a>
                             </small>
                             <small style="color:rgb(104, 231, 178)" class="mr-1">{{$item->created_at}}</small>
                          </span>
                          {{-- <span class="ml-auto">
                             <small>
                                <strong>56</strong>
                                <span>Comments</span>
                             </small>
                          </span> --}}
                       </p>
                    </div>
                 </div>
                 <div class="card-body text-md">
                    <p>{!!$item->Description!!}</p>

                   <hr class="my-4">
                 </div>
                 <div class="row">

                    <div class="col-lg-6">
                        <a href="{{ URL::to( 'Previous/' . $item->id ) }}"  >Previous</a>
                     </div>
                     <div class="col-lg-6">
                        <a href="{{ URL::to( 'Next/' . $item->id ) }}" class="float-right">Next</a>
                     </div>
                </div>
                 @endforeach


              </div>
              <div class="card">
                 <div class="card-header"> Comments</div>
                 <div class="card-body">
                     @foreach ($comment as $Commingcoment)
                     <div class="media">
                        <img class="mr-1 rounded-circle thumb32" src="{{ url('assets/img/logo/logo.png')}}" alt="demo">
                        <div class="media-body">
                           <h4>
                              <a href="#">{{$Commingcoment->usename}}</a>
                              <small>{{$Commingcoment->created_at}}</small>
                           </h4>
                           <p>{{$Commingcoment->coment}}</p>
                        </div>
                     </div>
                     <hr>
                     @endforeach


                 </div>
              </div>
              <div class="card">
                 <div class="card-header">
                    <em class="fas fa-pencil-alt mr-2"></em>Add your Comment we will not share your Email public </div>
                 <div class="card-body">
                    @if (Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif
                    <form class="form-horizontal" action="/Comenttostory" method="POST">
                        @csrf

                       <div class="form-group row">
                          <div class="col-6">
                             <input class="form-control" id="post-firstname" type="text" name="post_firstname" placeholder="Your names">
                             <input class="form-control" id="post-post" readonly type="hidden" name="post_id" value="{{$item->id}}">
                          </div>
                          <div class="col-6">
                             <input class="form-control" id="post-lastname" type="Email" name="post_email" placeholder="your email">
                          </div>
                       </div>
                       <div class="form-group row">
                          <div class="col-12">
                             <textarea class="form-control" id="post-comment" name="post_comment" rows="4" placeholder="Comment here.."></textarea>
                          </div>
                       </div>

                       <div class="form-group row">
                          <div class="col-12">
                            <button class="btn btn-info" type="submit">Send Comment</button>
                          </div>
                       </div>
                    </form>
                 </div>
              </div>
           </div>

        </div>
     </div>


    <!-- Gallery-2 img Start-->


</main>

</div>
</section>
@endsection
