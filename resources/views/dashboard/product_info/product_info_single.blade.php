@include('layouts.header')
@include('layouts.sidebar')
@section('ProductList', 'mm-active')

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
                            <span class="d-inline-block">{{$product_info->title}} information</span>
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
                                        Product
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
                    <form action="{{ route('AuthEditOffer') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @include("layouts.includes.flash")
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul style="margin-bottom: 0px !important;">
                                        @foreach ($errors->all() as $error)
                                            <li>* {{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            <input type="text" name="id" value="{{$product_info->id}}" hidden>
                            <input type="text" name="user_id" value="{{$product_info->user_id}}" hidden>
                            <div class="card-body ">
                                <div class="row mb-2">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="input-group date" id="id_1">
                                            <span style="margin-right:5px;margin-top: 4px;">Offer Start :</span>
                                            <input id="in_datetime" name="offer_start" type="text" class="form-control" style="border-top-left-radius: .25rem;border-bottom-left-radius: .25rem;" value="{{javascript_dateformate($product_info->offer_start)}}" required>
                                            <div class="input-group-addon input-group-append">
                                                <div class="input-group-text">
                                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4" style="padding-left: 0;">
                                        <div class="input-group date" id="id_2">
                                            <span style="margin-right:5px;margin-top: 4px;">Offer End :</span>
                                            <input id="out_datetime" name="offer_end" type="text" class="form-control" style="border-top-left-radius: .25rem;border-bottom-left-radius: .25rem;" value="{{javascript_dateformate($product_info->offer_end)}}" required>
                                            <div class="input-group-addon input-group-append">
                                                <div class="input-group-text">
                                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4" style="padding-left: 0;">
                                        <div class="input-group date" id="id_3">
                                            <span style="margin-right:5px;margin-top: 4px;">Created At :</span>
                                            <input id="out_datetime" name="created_at" type="text" class="form-control" style="border-top-left-radius: .25rem;border-bottom-left-radius: .25rem;" value="{{javascript_dateformate($product_info->created_at)}}" required>
                                            <div class="input-group-addon input-group-append">
                                                <div class="input-group-text">
                                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="section">
                                    <div class="section">
                                        <!-- <h5 class="card-title" style="margin-top: 7px;" id="tourist_no">Tourist NO : #1</h5> -->
                                        <div class=" form-row"  style="margin-top: 15px;">
                                            <div class="form-group form-line-height col-lg-6 col-md-12">
                                                <label class="input-label">Product ID<span class="important">*</span></label>
                                                <input type="text" name="product_id" class="form-control" value="{{$product_info->product_id}}" placeholder="" required>
                                            </div>
                                            <div class="form-group form-line-height col-lg-6 col-md-12">
                                            <label class="input-label">Status<span class="important">*</span></label>
                                            <select class="form-control-sm form-control" name="status" data-select2-id="2" tabindex="-1" aria-hidden="true" required>
                                                    @if($product_info->status == "pending")
                                                    <option value="pending">Pending</option>
                                                    <option value="active">Active</option>
                                                    @else
                                                    <option value="active">Active</option>
                                                    <option value="pending">Pending</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class=" form-row">
                                            <div class="form-group form-line-height col-lg-6 col-md-12">
                                            <label class="input-label">Product Category<span class="important">*</span></label>
                                                <select class="form-control-sm form-control" id="product_cat" name="product_cat" data-select2-id="2" tabindex="-1" aria-hidden="true" required>
                                                    <option value="Domain">Domain Offer</option>
                                                    <option value="Hosting">Hosting Offer</option>
                                                    <option value="Combo">Combo Offer</option>
                                                    <option value="Web-Server">Web-Server Offer</option>
                                                </select>
                                                <script>
                                                    var x = document.getElementById("product_cat");

                                                    for (i = 1; i < x.options.length; i++) {

                                                        if (x.options[i].value == {{$product_info->product_cat}}) {
                                                            x.options[i].remove();
                                                        }
                                                    }
                                                </script>
                                            </div>
                                            <div class="form-group form-line-height col-lg-6 col-md-12">
                                            <label class="input-label">Offer Category<span class="important">*</span></label>
                                                <select class="form-control-sm form-control" id="offer_cat" name="offer_cat" data-select2-id="2" tabindex="-1" aria-hidden="true" required>
                                                    <option value="Regular">Regular Offer</option>
                                                    <option value="Exclusive">Exclusive Offer</option>
                                                    <option value="Special">Special Offer</option>
                                                </select>
                                                <script>
                                                    var x = document.getElementById("offer_cat");

                                                    for (i = 1; i < x.options.length; i++) {

                                                        if (x.options[i].value == {{$product_info->offer_cat}}) {
                                                            x.options[i].remove();
                                                        }
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                        <div class=" form-row">
                                            <div class="form-group form-line-height col-lg-6 col-md-12">
                                                <label class="input-label">Product Title <span class="important">*</span></label>
                                                <input type="text" name="title" class="form-control" value="{{$product_info->title}}" placeholder="" required>
                                            </div>
                                            <div class="form-group form-line-height col-lg-6 col-md-12">
                                                <label class="input-label">Product Sub-title <span class="important">*</span></label>
                                                <input type="text" name="sub_title" class="form-control" value="{{$product_info->sub_title}}" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class=" form-row">
                                            <div class="form-group form-line-height col-lg-3 col-md-12">
                                                <label class="input-label">Product Owner<span class="important">*</span></label>
                                                <input type="text" name="fullname" class="form-control" value="{{$product_info->fullname}}" placeholder="" required disabled>
                                            </div>
                                            <div class="form-group form-line-height col-lg-3 col-md-12">
                                                <label class="input-label">Owner Email <span class="important">*</span></label>
                                                <input type="text" name="email" class="form-control" value="{{$product_info->email}}" placeholder="" required disabled>
                                            </div>
                                            <div class="form-group form-line-height col-lg-3 col-md-12">
                                                <label class="input-label">Provider <span class="important">*</span></label>
                                                <input type="text" name="provider" class="form-control" value="{{$product_info->provider}}" placeholder="" required>
                                            </div>
                                            <div class="form-group form-line-height col-lg-3 col-md-12">
                                                <label class="input-label">Promo Code <span class="important">*</span></label>
                                                <input type="text" name="promo_code" class="form-control" value="{{$product_info->promo_code}}" placeholder="">
                                            </div>
                                        </div>
    
                                        <div class=" form-row">
                                            <div class="form-group form-line-height col-lg-7 col-md-12">
                                                <label class="input-label">Offer Note <span class="important">*</span></label>
                                                <input type="text" name="offer_note" class="form-control" value="{{$product_info->offer_note}}" placeholder="">
                                            </div>
                                            <div class="form-group form-line-height col-lg-3 col-md-6">
                                                <label class="input-label">Price <span class="important">*</span></label>
                                                <input type="text" name="price" class="form-control" value="{{$product_info->price}}" placeholder="" required>
                                            </div>
                                            <div class="form-group form-line-height col-lg-2 col-md-6">
                                                <label class="input-label">Currency <span class="important">*</span></label>
                                                <select class="form-control-sm form-control" name="currency" data-select2-id="2" tabindex="-1" aria-hidden="true">
                                                    @if($product_info->currency == "BDT")
                                                    <option value="BDT">BDT</option>
                                                    <option value="USD">USD</option>
                                                    @else
                                                    <option value="USD">USD</option>
                                                    <option value="BDT">BDT</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
    
                                        <div class=" form-row">
                                            <div class="form-group form-line-height col-lg-12 col-md-12">
                                                <label class="input-label">Product Purchase Link<span class="important">*</span></label>
                                                <input type="text" name="product_link" class="form-control" value="{{$product_info->product_link}}" placeholder="" required>
                                            </div>
                                            <div class="form-group form-line-height col-lg-12 col-md-12">
                                                <label class="input-label">Affiliate Link<span class="important">*</span></label>
                                                <input type="text" name="affiliate_link" class="form-control" value="{{$product_info->affiliate_link}}" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="position-relative form-group form-line-height">
                                            <label for="Description" class="card-header ">Description </label>
                                            <textarea class="form-control" id="description" name="description">{!! $product_info->description !!}</textarea>
                                            <script>
                                                CKEDITOR.replace('description');
                                            </script>
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