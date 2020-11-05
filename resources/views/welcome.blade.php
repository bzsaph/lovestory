@extends('layouts.app')
@section('content')
<div class="container pt-5 hero">
    <div class="row align-items-center text-center text-md-left">
    <div class="col-lg-4">
    <h1 class="mb-3 display-3">Tell Your Story to the World</h1>
    <p>Join us and be one of the story tell advice story all story love story and so on .</p>
    </div>
    <div class="col-lg-8">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS3LDhzNf4Gh0joYrXcqSLcZvWaeLPtOv0roA&usqp=CAU" alt="Image" class="img-fluid">
    </div>
    </div>
</div>
<div class="site-section">
<div class="container">
<div class="row">
    <div class="col-lg-3">
        <div class="featured-user  mb-5 mb-lg-0">
            <h3 class="mb-4">User</h3>
            <ul class="list-unstyled">
                @foreach ($alluser as $item)
                <li>
                <a href="#" class="d-flex align-items-center">
                    <img src="https://www.yanjye.com/Image/test3.png" alt="Image" class="img-fluid mr-2">
                    <div class="podcaster">
                    <span class="d-block">{{ $item->name }}</span>
                    <span class="small">{{ $item->created_at }}</span>
                    </div>
                    </a>
                    <li>
                @endforeach




            </ul>
        </div>
    </div>

    <div class="col-lg-9">
        @foreach ($story as $item)
        <a href="/Read/{{ $item->id }}">
        <div class="d-block d-md-flex podcast-entry btn-success mb-5" s data-aos="fade-up">
            <div class="image" style="background-image:url(reatehttps://www.yanjye.com/Image/test3.png)">
            </div>
            <div class="text">
                <h3 class="font-weight-light">
                    <a href="/Read/{{ $item->id }}" style="color: #fff !important">{{ $item->Title }}</a>
                </h3>
                <div class="text-white mb-3">
                    <span class="text-black-opacity-05">
                        <small  style="color: #fff !important">Date
                            <span class="sep">/</span> {{ $item->created_at }}

                        </small>
                    </span>
                </div>

            </div>
        </div>
        </a>
        @endforeach

</div>

<div class="container" data-aos="fade-up">
<div class="row">
<div class="col-md-12 text-center">
<div class="site-block-27">
<ul>
<li><a href="#" class="icon-keyboard_arrow_left"></a></li>
<li class="active"><span>1</span></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">5</a></li>
<li><a href="#" class="icon-keyboard_arrow_right"></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


</div>
</div>



@endsection


