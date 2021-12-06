@extends('layouts.adminapp')
@section('content')
 <!-- Main section-->
 <section class="section-container">
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <div>Create category
                <small>Insert category</small>
            </div>
        </div>

        <!-- START row-->
        <div class="row">
            <div class="col-lg-12" >
                <form class="form-horizontal" action="/postcategory" method="POST">
                    @csrf

                    <!-- START card-->
                    <div class="card card-default">
                        <div class="bg-gray-lighter px-3 py-2 mb-3">Category</div>
                        <div class="card-body">

                            <fieldset>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Name:</label>
                                    <div class="col-md-6" style="margin-top: 10px">
                                        <input class="form-control" type="text" placeholder="karisa seriyambere one" name="name">
                                    </div>
                                </div>


                            </fieldset>


                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-info" type="submit">Submite category</button>
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
