<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

<!-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script> -->
<div class="setting-form">
    <div class="user-data full-width">
        <div class="about-left-heading">
            <h3> <i class="fas fa-edit mr-2"></i> Edit Event</h3>
        </div>
        <div class="add-event-bg">
            <form class="form-horizontal event_edit_form" method="post" action="{{ route('edit-event') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="flash_msg">
                       @if(Session::has('EventSuccess'))
                            <div class="alert alert-success alert-dismissible text-center display-15" role="alert">
                                {{ Session::get('EventSuccess') }}
                            </div>
                        @endif
                        @if(Session::has('EventDanger'))
                            <div class="alert alert-danger alert-dismissible text-center display-15" role="alert">
                                {{ Session::get('EventDanger') }}
                            </div>
                        @endif
                    </div>
                    <div class="input-section-item">
                        <div class="add-input-title">								
                            <i class="fas fa-pencil-alt"></i>
                            <h6>Event Title & Status*</h6>
                        </div>
                        <div class="add-input-items">
                            <div class="row">
                                <div class="col-md-8">
                                    <input class="add-inputs" name="event_title" type="text" value="{{$event_details->title}}" placeholder="Event Title Here">
                                    @if ($errors->has('event_title'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('event_title') }}</strong>
                                    </span>
                                    @endif
                                    <input  name="id" type="text" value="{{$event_details->id}}" hidden>
                                </div>
                                <div class="col-md-4">
                                    <div class="select-bg">									
                                            <select class="nice-select add-inputs payment-input wide custom-list" name="status">
                                                <?php if($event_details->event_status=='Active'){ ?>
                                                    <option value="Active">Active</option>
                                                    <option value="Cancel">Cancel</option>
                                                <?php }else{?>
                                                    <option value="Cancel">Cancel</option>
                                                    <option value="Active">Active</option>
                                                <?php }?>   
                                            </select>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="input-section-item">
                        <div class="add-input-title">								
                            <i class="fas fa-pencil-alt"></i>
                            <h6>Customize Your Event Link</h6>
                        </div>
                        <div class="add-input-items">
                                <br>
                                <div class="event-link">
                                    Event Link : <i class="fa fa-link"></i> <a href="https://ticketgripe.com/e/{{ !empty($event_details->custom_link)? $event_details->custom_link : $event_details->id}}" target="_blank" class="mb-2">https://ticketgripe.com/e/{{ !empty($event_details->custom_link)? $event_details->custom_link : $event_details->id}}</a>
                                    <div class="tooltip2">
                                        <button class="copy-sms" onclick="myFunction(155); return false;" onmouseout="outFunc(155)">
                                        <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                        Copy Link
                                        </button>
                                    </div>
                                </div>
                                <input type="text" style="height: 1px;width: 1px;" value="https://ticketgripe.com/e/{{ !empty($event_details->custom_link)? $event_details->custom_link : $event_details->id}}" id="155">
                                <div class="input-group mb-3">
                                    <div class="form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text display-10" id="basic-addon4">https://ticketgripe.com/e/</span>
                                            <input type="text" value="{{ !empty($event_details->custom_link)? $event_details->custom_link : $event_details->id}}" name="custom_link" class="form-control display-10" id="basic-url" aria-describedby="basic-addon4">
                                        </div>
                                    </div>
                                    @if ($errors->has('custom_link'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('custom_link') }}</strong>
                                    </span>
                                    @endif
                                </div>
                        </div>
                    </div>
                    <div class="input-section-item">
                        <div class="add-input-title">								
                            <i class="fas fa-image"></i>
                            <h6>Event Flyer</h6>
                        </div>
                        <div class="add-input-items">
                            <div class="add-evnt-dt">	
                                @if($event_details->image_path == null)	
                                <img class="event-add-img1 event-feature-img" id="imagePreview" src="{!!asset('master/images/demo.jpg')!!}">									
                                @else										
                                <img class="event-add-img1 event-feature-img" id="imagePreview" src="{!!asset($event_details->image_path)!!}">
                                @endif										
                                </img>
                                <script src="{!! asset('master/js/jquery3.3.1.js') !!}"></script>

                                <div class="addpic" id="OpenImgUpload">
                                    <input type="file" id="file" name="event_flyer">
                                    <label for="file">Choose File</label>
                                    <p>Minimum image dimension : 925 x 467</p>
                                    @if ($errors->has('event_flyer'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('event_flyer') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <script>
                                    function readURL(input) {
                                        if (input.files && input.files[0]) {
                                            var reader = new FileReader();
                                            reader.onload = function(e) {
                                               
                                               $('#imagePreview').attr('src', e.target.result);
                                                $('#imagePreview').hide();
                                                $('#imagePreview').fadeIn(650);
                                            }
                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                    $("#file").change(function() {
                                        readURL(this);
                                    });
                                </script>
                            </div>
                            <div class="add-evnt-dt">	
                                @if($event_details->event_logo == null)	
                                <img class="event-add-img1 event-feature-img event-ft-logo" id="imagePreview2" src="{!!asset('master/images/event-logo.png')!!}">
                                @else									
                                <img class="event-add-img1 event-feature-img event-ft-logo" id="imagePreview2" src="{!!asset($event_details->event_logo)!!}">
                                </img>
                                @endif										
                                <div class="addpic" id="OpenImgUpload">
                                    <input type="file" id="file2" name="event_logo">
                                    <label for="file2">Choose File</label>
                                    <p>Minimum image dimension : 250 x 100</p>
                                    @if ($errors->has('event_logo'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('event_logo') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <script>
                                    function readURL2(input) {
                                        if (input.files && input.files[0]) {
                                            var reader = new FileReader();
                                            reader.onload = function(e) {
                                               
                                            $('#imagePreview2').attr('src', e.target.result);
                                                $('#imagePreview2').hide();
                                                $('#imagePreview2').fadeIn(650);
                                            }
                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                    $("#file2").change(function() {
                                        readURL2(this);
                                    });
                                </script>
                            </div>
                        </div>									
                    </div>
                    <div class="input-section-item">
                        <div class="add-input-title">								
                            <i class="fas fa-info-circle"></i>
                            <h6>Event Details*</h6>
                        </div>
                        <div class="add-input-items">										
                            <div class="add-evnt-dt">										
                                <input class="add-inputs" type="text"  value="{{$event_details->country}}"  name="country" placeholder="Country" required>
                                @if ($errors->has('country'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('country') }}</strong>
                                </span>
                                @endif
                                <!-- <i class="fas fa-search ev-icon"></i> -->
                            </div>
                            <div class="add-evnt-dt">
                                <input class="add-inputs" value="{{ $event_details->address}}"  name="address" type="text" placeholder="Address" required>
                                @if ($errors->has('address'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="add-evnt-dt">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input class="add-inputs" value="{{ $event_details->city }}" name="city" type="text" placeholder="City" required>
                                        @if ($errors->has('city'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <input class="add-inputs" value="{{$event_details->state }}" name="state" type="text" placeholder="State/Province" required>
                                        @if ($errors->has('state'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('state') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <input class="add-inputs" value="{{ $event_details->zip }}"  name="zip" type="text" placeholder="Zip/Postal" required>
                                        @if ($errors->has('zip'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('zip') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>										
                            <div class="add-evnt-dt date-custom">											
                                <div class="row">											
                                    <div class="col-md-6">											
                                        <div class="select-bg">									
                                            <div class="input-group date" id="id_5">
                                                <span class="date-span">Start Time :</span>
                                                <input value="{{javascript_dateformate($event_details->start_date) }}"  id="out_datetime" name="start_time" type="text" class="form-control" style="border-top-left-radius: .25rem;border-bottom-left-radius: .25rem;" required>
                                                <div class="input-group-addon input-group-append">
                                                    <div class="input-group-text">
                                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                                @if ($errors->has('start_time'))
                                                <span class="help-block text-danger">
                                                    <strong>{{ $errors->first('start_time') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">											
                                        <div class="select-bg">									
                                        <div class="input-group date" id="id_6">
                                                <span class="date-span">End Time :</span>
                                                <input id="out_datetime" value="{{javascript_dateformate($event_details->end_date)}}"  name="end_time" type="text" class="form-control" style="border-top-left-radius: .25rem;border-bottom-left-radius: .25rem;" required>
                                                <div class="input-group-addon input-group-append">
                                                    <div class="input-group-text">
                                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                                @if ($errors->has('end_time'))
                                                <span class="help-block text-danger">
                                                    <strong>{{ $errors->first('end_time') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>									
                    </div>
                    <div class="input-section-item">
                        <div class="add-input-title">								
                            <i class="fas fa-check-square"></i>
                            <h6>Event Seats & Category </h6>
                        </div>
                        <div class="add-input-items">
                            <div class="add-evnt-dt">											
                                <div class="row">											
                                    <div class="col-md-4">
                                        <div class="select-bg">									
                                                <input class="add-inputs"  name="seat_number" type="number" placeholder="Seat number" value="{{$event_details->seat_number }}" >
                                                @if ($errors->has('seat_number'))
                                                <span class="help-block text-danger">
                                                    <strong>{{ $errors->first('seat_number') }}</strong>
                                                </span>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="select-bg">									
                                            <select class="nice-select add-inputs payment-input wide custom-list" name="category">
                                                 <?php echo '<option value="'.$event_details->category.'">'.$event_details->category.'</option>'; ?>
                                                 <option  value="">-------------</option>
                                                <option value="Promotion">Promotion</option>
                                                <option value="Music">Music</option>
                                                <option value="Festival">Festival</option>
                                                <option value="Art">Art</option>
                                                <option value="Club">Club</option> 
                                                <option value="Others">Others</option>
                                            </select>    
                                        </div>
                                    </div>
                                    <div class="col-md-4">											
                                    <div class="input-section-item" style="border: 0px solid red;">
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="customCheck" name="checkbox" {{ $event_details->hide_date_event_page==1 ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="customCheck" style="font-size: 12px;">Hide Expire date on event page </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>									
                    </div>
                    <div class="input-section-item">
                        <div class="add-input-title">								
                            <i class="fas fa-pencil-alt"></i>
                            <h6>Event Description*</h6>
                        </div>
                        <div class="add-input-items">
                            <textarea class="add-event-des" name="event_des" placeholder="Description here">{{$event_details->description}}</textarea>
                            <script>
                                CKEDITOR.replace('event_des');
                            </script>
                        </div>
                    </div>
                    <div class="upload-mp">
                        <button class="upload-btn" type="submit">Update Event</button>
                    </div>
                </form>
        
    </div>
</div>																																				
</div>	
<script>
    $(document).ready(function() {
    $('#id_5').datetimepicker({
        "allowInputToggle": true,
        "showClose": true,
        "showClear": true,
        "showTodayButton": true,
        "format": "MM/DD/YYYY hh:mm:ss A",
    });
    $('#id_6').datetimepicker({
        "allowInputToggle": true,
        "showClose": true,
        "showClear": true,
        "showTodayButton": true,
        "format": "MM/DD/YYYY hh:mm:ss A",
    });
});
</script>
<script>
    function myFunction(id) {
        var copyText = document.getElementById(id);
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("copy");
    
        var tooltip = document.getElementById("myTooltip");
        tooltip.innerHTML = "Link Copied";
        return false;
    }

    function outFunc(id) {
        var tooltip = document.getElementById("myTooltip");
        tooltip.innerHTML = "Copy to clipboard";
    }
</script>
<script>
    $(document).ready(function() {
        $('.event_edit_form').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                custom_link: {
                    message: 'This link is not valid',
                    validators: {
                        notEmpty: {
                            message: 'This field is required and cannot be empty'
                        },
                        stringLength: {
                            min: 2,
                            max: 30,
                            message: 'The link must be more than 2 and less than 30 characters long'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_]+$/,
                            message: 'The link can only consist of alphabetical, number and underscore'
                        }
                    }
                },
            }
        });
    });
</script>