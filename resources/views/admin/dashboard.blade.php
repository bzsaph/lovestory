@extends('layouts.adminapp')
 @if ($message = Session::get('message'))
                            <div class="alert alert-success">
                            <ul>
                                    {{ $message }}
                            </ul>
                            </div>
                            @endif
        <div class="container-fluid">
@section('content')
@can('view-dashboard')
<section class="section-container">
    <!-- Page content-->
    <div class="content-wrapper">
      <div class="content-heading">
        <div>Dashboard
          <small data-localize="dashboard.WELCOME"></small>
        </div>
        <!-- START Language list-->
        <div class="ml-auto">
          <div class="btn-group">
            <button class="btn btn-secondary dropdown-toggle dropdown-toggle-nocaret" type="button" data-toggle="dropdown">English</button>
            <div class="dropdown-menu dropdown-menu-right-forced animated fadeInUpShort" role="menu">
              <a class="dropdown-item" href="#" data-set-lang="en">English</a>

            </div>
          </div>
        </div>
        <!-- END Language list-->
      </div>
      <!-- START cards box-->
      <div class="row">
        <div class="col-xl-3 col-md-6">
          <!-- START card-->
          <div class="card flex-row align-items-center align-items-stretch border-0">
            <div class="col-4 d-flex align-items-center bg-primary-dark justify-content-center rounded-left">
             {{$countactive}}
            </div>
            <div class="col-8 py-3 bg-primary rounded-right">

              <div class="h4 mt-0">
               <small>Project that Was not closed</small>
              </div>

            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <!-- START card-->
          <div class="card flex-row align-items-center align-items-stretch border-0">
            <div class="col-4 d-flex align-items-center bg-purple-dark justify-content-center rounded-left">
               {{$countinactive}}
            </div>
            <div class="col-8 py-3 bg-purple rounded-right">
              <div class="h3 mt-0">
                <small>Project that Was  closed</small>
              </div>

            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12">
          <!-- START card-->
          <div class="card flex-row align-items-center align-items-stretch border-0">
            <div class="col-4 d-flex align-items-center bg-green-dark justify-content-center rounded-left">
              <em class="icon-bubbles fa-3x"></em>
            </div>
            <div class="col-8 py-3 bg-green rounded-right">
              <div class="h2 mt-0">500</div>
              <div class="text-uppercase">Reviews</div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12">
          <!-- START date widget-->
          <div class="card flex-row align-items-center align-items-stretch border-0">
            <div class="col-4 d-flex align-items-center bg-green justify-content-center rounded-left">
              <div class="text-center">
                <!-- See formats: https://docs.angularjs.org/api/ng/filter/date-->
                <div class="text-sm" data-now="" data-format="MMMM"></div>
                <br>
                <div class="h2 mt-0" data-now="" data-format="D"></div>
              </div>
            </div>
            <div class="col-8 py-3 rounded-right">
              <div class="text-uppercase" data-now="" data-format="dddd"></div>
              <br>
              <div class="h2 mt-0" data-now="" data-format="h:mm"></div>
              <div class="text-muted text-sm" data-now="" data-format="a"></div>
            </div>
          </div>
          <!-- END date widget-->
        </div>
      </div>
      <!-- END cards box-->

    </div>
  </section>
@else
<button type="button" class="btn btn-primary rounded mx-auto d-block" >
    Wecome to the system dear <span class="badge badge-light"  title="view-dashboard" >{{ Auth::user()->name}}</span>


<br><br>
You don't have permission to view this Dashboard


</button>
<div>
 <div class="col-xl-12 col-lg-12 col-md-12">
          <!-- START date widget-->
          <div class="card flex-row align-items-center align-items-stretch border-0">
            <div class="col-4 d-flex align-items-center bg-green justify-content-center rounded-left">
              <div class="text-center">
                <!-- See formats: https://docs.angularjs.org/api/ng/filter/date-->
                <div class="text-sm" data-now="" data-format="MMMM"></div>
                <br>
                <div class="h2 mt-0" data-now="" data-format="D"></div>
              </div>
            </div>
            <div class="col-8 py-3 rounded-right">
              <div class="text-uppercase" data-now="" data-format="dddd"></div>
              <br>
              <div class="h2 mt-0" data-now="" data-format="h:mm"></div>
              <div class="text-muted text-sm" data-now="" data-format="a"></div>
            </div>
          </div>
          <!-- END date widget-->
        </div>
</div>
@endcan

@endsection
