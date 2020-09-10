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
            <div class="col-lg-12">
                <form class="form-horizontal" action="#" data-parsley-validate="" novalidate="">
                    <!-- START card-->
                    <div class="card card-default">
                        <div class="bg-gray-lighter px-3 py-2 mb-3">Range validation</div>
                        <div class="card-body">


                            <fieldset>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Name of Auth</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" readonly name="length" value="{{Auth::user()->name}}">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Your story</label>
                                </div>
                                <div class="form-group">
                                    <textarea id="summernote" name="story"></textarea>


                                </div>
                            </fieldset>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-info" type="submit">Run validation</button>
                        </div>
                    </div>
                    <!-- END card-->
                </form>
            </div>
        </div>
        <!-- END row-->
    </div>
</section>

@endsection
