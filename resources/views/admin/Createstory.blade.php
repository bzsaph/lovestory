@extends('layouts.adminapp')
@section('content')
 <!-- Main section-->
 <section class="section-container">
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <div>Where story goes
                <small>insert story</small>
            </div>
        </div>

        <!-- START row-->
        <div class="row">
            @can('edit articles')
            <div class="col-lg-12" >
                <form class="form-horizontal" action="/submitstoror" method="POST">

                    @csrf

                    <!-- START card-->
                    <div class="card card-default">
                        <div class="bg-gray-lighter px-3 py-2 mb-3">Story</div>
                        <div class="card-body">

                            <fieldset>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Name of Auth</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" readonly name="length" value="{{Auth::user()->name}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Title of the story</label>
                                    <div class="col-md-6" style="margin-top: 10px">
                                        <input class="form-control" type="text" name="titleofthestory">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Name of Auth</label>
                                    <div class="col-md-6" style="margin-top:10px">
                                        <select id="" class="form-control" name="category">
                                            <option  selected disabled >choose category</option>
                                            @foreach ($category as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach

                                        </select>


                                    </div>
                                </div>
                            </fieldset>


                                <div class="form-group row" >
                                    <label class="col-md-2 col-form-label">Your story</label>
                                    <div class="col-md-10" style="margin-top:10px">
                                    <textarea id="summernote" class="form-control" maxlength="600" name="newstory"></textarea>
                                </div>
                                </div>

                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-info" type="submit">Submite story</button>
                        </div>
                    </div>
                    <!-- END card-->
                </form>
            </div>
        </div>
        @endcan
        <!-- END row-->
    </div>
</section>

@endsection
