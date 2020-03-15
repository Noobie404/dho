@include('layouts.header')
@include('layouts.sidebar')
<style>
    .input-group-prepend > span {
        height: 31px !important;
    }
</style>
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
                        <span class="d-inline-block">Add Offer to {{$user_name->username}}</span>
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
                                        Offer
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <button type="button" data-toggle="tooltip" data-placement="left" class="btn btn-dark" title=""
                        data-original-title="Show a Toastr Notification!">
                        <i class="fa fa-battery-three-quarters"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Dashboard Row section -->
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    @include('dashboard.product_info.offer_form')
                </div>
            </div>
        </div>

    </div>
</div>

</div>
<script>
    $(document).ready(function () {
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
        $("#inputGroupSelect01").change();
    });
</script>
@include('layouts.footer')

<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
<script>
    $("#inputGroupSelect01").change(function () {
        var selected = $(this).children("option:selected").val();
        if (selected == 'Web-Server') {
            $("#single_subtitle").fadeOut(500);
            $("#double_subtitle").fadeOut(500);
            $("#triple_subtitle").fadeIn(500);
            $("#sub_title_fadeIN1").prop('required', true);
            $("#sub_title_fadeIN2").prop('required', true);
            $("#sub_title_fadeIN3").prop('required', true);
            $("#sub_title_fade").removeAttr('required');
            $("#sub_title_fadeIN4").removeAttr('required');
            $("#sub_title_fadeIN5").removeAttr('required');
        } else if (selected == 'Hosting') {
            $("#single_subtitle").fadeOut(500);
            $("#triple_subtitle").fadeOut(500);
            $("#double_subtitle").fadeIn(500);
            $("#sub_title_fadeIN4").prop('required', true);
            $("#sub_title_fadeIN5").prop('required', true);
            $("#sub_title_fade").removeAttr('required');
            $("#sub_title_fadeIN1").removeAttr('required');
            $("#sub_title_fadeIN2").removeAttr('required');
            $("#sub_title_fadeIN3").removeAttr('required');
        } else {
            $("#single_subtitle").fadeIn(500);
            $("#triple_subtitle").fadeOut(500);
            $("#double_subtitle").fadeOut(500);
            $("#sub_title_fade").prop('required', true);
            $("#sub_title_fadeIN1").removeAttr('required');
            $("#sub_title_fadeIN2").removeAttr('required');
            $("#sub_title_fadeIN3").removeAttr('required');
            $("#sub_title_fadeIN4").removeAttr('required');
            $("#sub_title_fadeIN5").removeAttr('required');
        }
    });
</script>