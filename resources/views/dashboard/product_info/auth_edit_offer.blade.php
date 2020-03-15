<script src="{!! asset('master/js/bootstrap.bundle.min.js') !!}"></script>
<style>
    .input-group-prepend > span {
        height: 31px !important;
    }
</style>
<form action="{{ route('auth.add.offer') }}" method="post" enctype="multipart/form-data">
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
    <div class="card-body" id="to-be-ckcdn">
        @include("layouts.includes.flash")
        <input type="hidden" name="id" id="id">
        <input id="user_append_id" type="hidden" name="user_id">
        <div class="row mb-2">
            <div class="offset-md-4 col-lg-4 col-md-4 col-sm-4">
                <div class="input-group date" id="id_1">
                    <span style="margin-right:5px;margin-top: 4px;">Offer Start :</span>
                    <input id="offer_starts" name="offer_start" type="text" class="form-control"
                        style="border-top-left-radius: .25rem;border-bottom-left-radius: .25rem;"
                        required>
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
                    <input id="offer_ends" name="offer_end" type="text" class="form-control"
                        style="border-top-left-radius: .25rem;border-bottom-left-radius: .25rem;"
                        required>
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
                        <input type="text" id="product_id" name="product_id" class="form-control" placeholder="" required disabled>
                    </div>
                    <div class="form-group form-line-height col-lg-6 col-md-12">
                    <label class="input-label">Status<span class="important">*</span></label>
                    <select class="form-control-sm form-control" id="status" name="status" data-select2-id="2" tabindex="-1" aria-hidden="true" required >
                            <option value="active">Active</option>
                            <option value="pending">Pending</option>
                            <option value="expire">Expire</option>
                        </select>
                    </div>
                </div>
                <div class=" form-row">
                    <div class="form-group form-line-height col-lg-6 col-md-12">
                        <label class="input-label">Product Owner<span class="important">*</span></label>
                        <input type="text" id="fullname" name="fullname" class="form-control" placeholder="" required disabled>
                    </div>
                    <div class="form-group form-line-height col-lg-6 col-md-12">
                        <label class="input-label">Owner Email <span class="important">*</span></label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="" required disabled>
                    </div>
                </div>
                <div class=" form-row">
                    <div class="form-group form-line-height col-lg-6 col-md-12">
                        <label class="input-label">Product Category<span
                                class="important">*</span></label>
                        <select class="form-control-sm form-control" id="inputGroupSelect01"
                            name="product_cat" data-select2-id="2" tabindex="-1" aria-hidden="true"
                            required>
                            <option value="Domain">Domain Offer</option>
                            <option value="Hosting">Hosting Offer</option>
                            <option value="Combo">Combo Offer</option>
                            <option value="Web-Server">Web-Server Offer</option>
                        </select>
                    </div>
                    <div class="form-group form-line-height col-lg-6 col-md-12">
                        <label class="input-label">Offer Category<span
                                class="important">*</span></label>
                        <select class="form-control-sm form-control" id="offer_cat" name="offer_cat"
                            data-select2-id="2" tabindex="-1" aria-hidden="true" required>
                            <option value="Regular">Regular Offer</option>
                            <option value="Exclusive">Exclusive Offer</option>
                            <option value="Special">Special Offer</option>
                        </select>
                    </div>
                </div>
                <div class=" form-row">
                    <div class="form-group form-line-height col-lg-12 col-md-12">
                        <label class="input-label">Product Title <span
                                class="important">*</span></label>
                        <input type="text" id="title" name="title" class="form-control"
                            placeholder="Product Title" required>
                    </div>
                </div>
                <div class="row mb-2" id="single_subtitle">
                    <div class="col-md-12">
                        <div class="input-group input-group-md">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="sub_title_fade_span">Product
                                    Sub-title</span>
                            </div>
                            <input type="text" id="sub_title_fade" class="form-control" name="sub_title" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="ex:.COM is a TLD">
                        </div>
                    </div>
                </div>
                <div class="row mb-2" id="triple_subtitle">
                    <div class="col-md-4">
                        <div class="input-group input-group-md">
                            <div class="input-group-prepend">
                                <span class="input-group-text"
                                    id="sub_title_fadeIN_span1">CPU</span>
                            </div>
                            <input type="text" id="sub_title_fadeIN1" class="form-control" value=""
                                name="sub_title1" aria-label="Large"
                                aria-describedby="inputGroup-sizing-sm" placeholder="ex: 1">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group input-group-md">
                            <div class="input-group-prepend">
                                <span class="input-group-text"
                                    id="sub_title_fadeIN_span2">RAM</span>
                            </div>
                            <input type="text" id="sub_title_fadeIN2" class="form-control" value=""
                                name="sub_title2" aria-label="Large"
                                aria-describedby="inputGroup-sizing-sm" placeholder="ex: 512 MB">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group input-group-md">
                            <div class="input-group-prepend">
                                <span class="input-group-text"
                                    id="sub_title_fadeIN_span3">Storage</span>
                            </div>
                            <input type="text" id="sub_title_fadeIN3" class="form-control" value=""
                                name="sub_title3" aria-label="Large"
                                aria-describedby="inputGroup-sizing-sm" placeholder="ex: 1 TB">
                        </div>
                    </div>
                </div>
                <div class="row mb-2" id="double_subtitle">
                    <div class="col-md-6">
                        <div class="input-group input-group-md">
                            <div class="input-group-prepend">
                                <span class="input-group-text"">Storage</span>
                            </div>
                            <input type=" text" id="sub_title_fadeIN4" class="form-control"
                                    value="" name="sub_title4" aria-label="Large"
                                    aria-describedby="inputGroup-sizing-sm"
                                    placeholder="ex: 500 GB">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group input-group-md">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Bandwidth</span>
                                </div>
                                <input type="text" id="sub_title_fadeIN5" class="form-control"
                                    value="" name="sub_title5" aria-label="Large"
                                    aria-describedby="inputGroup-sizing-sm"
                                    placeholder="ex: 512 mbps">
                            </div>
                        </div>
                    </div>
                    <div class=" form-row">
                        <div class="form-group form-line-height col-lg-6 col-md-12">
                            <label class="input-label">Provider <span
                                    class="important">*</span></label>
                            <input type="text" id="provider" name="provider" class="form-control"
                                placeholder="Provider" required>
                        </div>
                        <div class="form-group form-line-height col-lg-6 col-md-12">
                            <label class="input-label">Promo Code</label>
                            <input type="text" id="promo_code" name="promo_code" class="form-control"
                                placeholder="Promo Code">
                        </div>
                    </div>

                    <div class=" form-row">
                        <div class="form-group form-line-height col-lg-7 col-md-12">
                            <label class="input-label">Offer Note</label>
                            <input type="text" id="offer_note" name="offer_note" class="form-control"
                                placeholder="Offer Note">
                        </div>
                        <div class="form-group form-line-height col-lg-3 col-md-6">
                            <label class="input-label">Price <span
                                    class="important">*</span></label>
                            <input type="text" id="price" name="price" class="form-control" placeholder="Price"
                                required>
                        </div>
                        <div class="form-group form-line-height col-lg-2 col-md-6">
                            <label class="input-label">Currency <span
                                    class="important">*</span></label>
                            <select class="form-control-sm form-control" name="currency"
                                data-select2-id="2" id="currency" tabindex="-1" aria-hidden="true">
                                <option value="BDT">BDT</option>
                                <option value="USD">USD</option>
                            </select>
                        </div>
                    </div>

                    <div class=" form-row">
                        <div class="form-group form-line-height col-lg-12 col-md-12">
                            <label class="input-label">Product Purchase Link<span
                                    class="important">*</span></label>
                            <input type="text" id="product_link" name="product_link" class="form-control"
                                placeholder="Product Purchase Link" required>
                        </div>
                        <div class="form-group form-line-height col-lg-12 col-md-12">
                            <label class="input-label">Affiliate Link</label>
                            <input type="text" id="affiliate_link" name="affiliate_link" class="form-control"
                                placeholder="Affiliate Link" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12">
                    <div class="position-relative form-group form-line-height" id="to-be-text">
                        <label for="Description" class="card-header ">Description </label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                            
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="offset-md-5 col-md-5">
                <button type="submit"
                    class="btn-wide mb-4 ml-1 mt-2 btn btn-shadow btn-gradient-primary btn-md"> <i
                        class="fas fa-send"></i> Submit </button>
            </div>
        </div>
</form>
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
