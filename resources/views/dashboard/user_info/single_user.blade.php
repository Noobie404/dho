@include('layouts.header')
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
                            <span class="d-inline-block">Update user</span>
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
                                        Update User
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
                    <form action="{{ route('auth.user.register') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul style="margin-bottom: 0px !important;">
                                        @foreach ($errors->all() as $error)
                                            <li>* {{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            <div class="card-body">
                                @include("layouts.includes.flash")
                                <input type="hidden" name="id" value="{{ $single_user->id }}">
                                <div id="section">
                                    <div class="section">
                                        <!-- <h5 class="card-title" style="margin-top: 7px;" id="tourist_no">Tourist NO : #1</h5> -->
                                        <div class=" form-row">
                                            <div class="form-group form-line-height col-lg-6 col-md-12">
                                                <label class="input-label">User Name <span class="important">*</span></label>
                                                <input type="text" name="username" class="form-control" placeholder="User Name" value="{{ $single_user->username }}" required>
                                                @if ($errors->has('username'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('username') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group form-line-height col-lg-6 col-md-12">
                                                <label class="input-label">Full Name <span class="important">*</span></label>
                                                <input type="text" name="fullname" class="form-control" placeholder="Your Full Name" value="{{ $single_user->fullname }}" required>
                                                @if ($errors->has('fullname'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('fullname') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class=" form-row">
                                            <div class="form-group form-line-height col-lg-6 col-md-12">
                                                <label class="input-label">Email Address <span class="important">*</span></label>
                                                <input type="email" name="email" class="form-control" placeholder="Email Address" value="{{ $single_user->email }}" required>
                                                @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group form-line-height col-lg-6 col-md-12">
                                                <label class="input-label">Mobile Number</label>
                                                <input type="text" name="mobile" class="form-control" placeholder="mobile Address" value="{{ $single_user->mobile }}">
                                                @if ($errors->has('mobile'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('mobile') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class=" form-row">
                                            <div class="form-group form-line-height col-lg-12 col-md-12">
                                                <label class="input-label">Address</label>
                                                <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $single_user->address }}">
                                                @if ($errors->has('address'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('address') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class=" form-row">
                                            <div class="form-group form-line-height col-lg-3 col-md-12">
                                                <label class="input-label">Country</label>
                                                <input type="text" name="country" class="form-control" placeholder="Country Address" value="{{ $single_user->country }}">
                                                @if ($errors->has('country'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('country') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group form-line-height col-lg-3 col-md-12">
                                                <label class="input-label">City</label>
                                                <input type="text" name="city" class="form-control" placeholder="city Address" value="{{ $single_user->city }}">
                                                @if ($errors->has('city'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('city') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group form-line-height col-lg-3 col-md-12">
                                                <label class="input-label">Post Code</label>
                                                <input type="text" name="post_code" class="form-control" placeholder="Post Code Address" value="{{ $single_user->post_code }}">
                                                @if ($errors->has('post_code'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('post_code') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group form-line-height col-lg-3 col-md-12">
                                                <label class="input-label">Password ( put new password )</label>
                                                <input type="password" name="password" class="form-control" placeholder="Your Password">
                                                @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="offset-md-5 col-md-5">
                                    <button type="submit" class="btn-wide mb-4 ml-1 mt-2 btn btn-shadow btn-gradient-primary btn-md"> <i class="fas fa-send"></i> Submit </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

</div>
<script>
$(document).ready(function() {
    $('#id_1').datetimepicker({
        "allowInputToggle": true,
        "showClose": true,
        "showClear": true,
        "showTodayButton": true,
        "format": "MM/DD/YYYY hh:mm:ss A",
    });
    $('#id_2').datetimepicker({
    "allowInputToggle": true,
    "showClose": true,
    "showClear": true,
    "showTodayButton": true,
    "format": "MM/DD/YYYY hh:mm:ss A",
    });
    $('#id_3').datetimepicker({
    "allowInputToggle": true,
    "showClose": true,
    "showClear": true,
    "showTodayButton": true,
    "format": "MM/DD/YYYY hh:mm:ss A",
    });
});
</script>
@include('layouts.footer')

<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">