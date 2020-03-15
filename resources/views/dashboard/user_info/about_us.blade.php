@include('layouts.header')
@section('AboutUs', 'mm-active')
@include('layouts.sidebar')

<!-- Dashboard Header  section -->

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title app-page-title-simple">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>
                        <div class="page-title-head center-elem">
                                        <span class="d-inline-block pr-2">
                                            <i class="lnr-apartment opacity-6"></i>
                                        </span>
                            <span class="d-inline-block">Manage Your Site Map</span>
                        </div>
                        <div class="page-title-subheading opacity-10">
                            <nav class="" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a>
                                            <i aria-hidden="true" class="fa fa-home"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a>Dashboards</a>
                                    </li>
                                    <li class="active breadcrumb-item" aria-current="page">
                                        About Us
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <button type="button" data-toggle="tooltip" data-placement="left" class="btn btn-dark" title="" data-original-title="Show a Toastr Notification!">
                        <i class="fa fa-battery-three-quarters"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Dashboard Row section -->
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">

                    <div class="card-body "><h5 class="card-title">Update Site Map</h5>
                        <form method="post" action="{{route('updated.about-us')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @include("layouts.includes.flash")

                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="position-relative form-group">
                                        <label  for="Description" class="card-header ">About Us</label>
                                        <textarea class="form-control" id="benefits" name="about">{{$about_us->about}}</textarea>
                                        <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
                                        <script>
                                            CKEDITOR.replace('benefits');
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row text-center">
                                <div class="offset-5 col-md-2">
                                    <div class="position-relative form-group"><input value="Update" id="date"   class="btn-wide mb-2 mr-2 mt-3 btn btn-shadow btn-gradient-success btn-lg" type="submit" ></div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

@include('layouts.footer')
