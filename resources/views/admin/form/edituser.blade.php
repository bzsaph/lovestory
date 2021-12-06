@extends('layouts.adminapp')
@section('content')
 <!-- Main section-->
 <section class="section-container">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="/admin/updateuser">
                        @method('PATCH')
                        @include("admin.form.registerform")

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection
