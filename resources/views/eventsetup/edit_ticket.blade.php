<script src="{!! asset('master/js/moment-with-locales.min.js') !!}"></script>
<link href="{!! asset('master/css/bootstrap-datetimepicker.min.css') !!}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
<script src="{!! asset('master/js/jquery3.3.1.js') !!}"></script>
<script src="{!! asset('master/js/bootstrap-datetimepicker.min.js') !!}"></script>
<div class="setting-form">
    <div class="user-data full-width">   
        <form class="form-horizontal" method="post" action="{{ route('action-edit-ticket') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="prsnl-info">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Ticket Type*</label>
                            <input class="payment-input" value="{{$one_ticket_details->ticket_type}}" type="text" name="ticket_type" placeholder="General Admission, VIP Admission" required><br>
                            @if ($errors->has('ticket_type'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ticket_type') }}</strong>
                            </span>
                            @endif
                            <input  name="ticket_id" type="text" value="{{$one_ticket_details->id}}" hidden>
                            <input  name="event_id" type="text" value="{{$one_ticket_details->event_id}}" hidden>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Quantity*</label>
                            <input class="payment-input" value="{{$one_ticket_details->quantity}}" type="number" name="quantity" placeholder="Ticket Quantity" required> <br>
                            @if ($errors->has('quantity'))
                            <span class="help-block">
                                <strong>{{ $errors->first('quantity') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Ticket Price*</label>
                            <input class="payment-input" value="{{$one_ticket_details->ticket_price}}" data-language="en" type="number" name="ticket_price" placeholder="Ticket Price" required> <br>
                            @if ($errors->has('ticket_price'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ticket_price') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Currency*</label>
                            <div class="select-bg">									
                                <select class="nice-select add-inputs payment-input wide custom-list" style="margin-top: 0!important;" name="currency">
                                <?php if($one_ticket_details->selling_currency=='BDT'){ ?>
                                            <option value="BDT">BDT</option>
                                            <option value="USD">USD</option>
                                        <?php }else{?>
                                            <option value="USD">USD</option>
                                            <option value="BDT">BDT</option>
                                        <?php }?>   
                                    </select>    
                                </select>    
                            </div>
                        </div>
                    </div>
                    <div class="more-option" >
                        <div class="row">											
                            <div class="col-lg-6 col-md-12">											
                                <div class="select-bg">									
                                    <div class="input-group date" id="id_42">
                                        <span class="date-span">Start selling on  :</span>
                                        <input value="{{javascript_dateformate($one_ticket_details->selling_date)}}"  id="out_datetime" name="selling_date" type="text" class="form-control" style="border-top-left-radius: .25rem;border-bottom-left-radius: .25rem;" required><br>
                                        <div class="input-group-addon input-group-append">
                                            <div class="input-group-text">
                                                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                            </div>
                                        </div>
                                        @if ($errors->has('selling_date'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('selling_date') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">											
                                <div class="select-bg">									
                                    <div class="input-group date" id="id_43">
                                        <span class="date-span">Sell until  :</span>
                                        <input id="out_datetime" value="{{javascript_dateformate($one_ticket_details->untill_date)}}"  name="untill_date" type="text" class="form-control" style="border-top-left-radius: .25rem;border-bottom-left-radius: .25rem;" required><br>
                                        <div class="input-group-addon input-group-append">
                                            <div class="input-group-text">
                                                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                            </div>
                                        </div>
                                        @if ($errors->has('untill_date'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('untill_date') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="input-section-item" style="border: 0px solid red;">
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck42" name="show_sell_untill_date"  {{$one_ticket_details->show_sell_untill_date==1 ? 'checked' : '' }} ><br>
                                        <label class="custom-control-label custom-label" for="customCheck42" style="font-size: 14px;">Show the Sell Until date on the event page.</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="input-section-item" style="border: 0px solid red;">
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck43" name="hide_ticket" {{$one_ticket_details->hide_ticket==1 ? 'checked' : '' }}><br>
                                        <label class="custom-control-label custom-label" for="customCheck43" style="font-size: 14px;">Hide ticket on your event sell ticket via link</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Fees</label>
                                    <div class="select-bg">									
                                        <select class="nice-select add-inputs payment-input wide custom-list" name="fees_consume">
                                        <option value="0">Includes all fees</option>   
                                        </select>    
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>Max. Tickets per Order</label>
                                    <input class="payment-input" value="{{$one_ticket_details->max_ticket_per_order}}" data-language="en" type="number" name="max_ticket_per_order" placeholder="Max. Tickets per Order"><br>
                                    @if ($errors->has('max_ticket_per_order'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('max_ticket_per_order') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>Min. Tickets per Order</label>
                                    <input class="payment-input" data-language="en" type="number" name="min_ticket_per_order"   value="{{$one_ticket_details->min_ticket_per_order}}" placeholder="Min. Tickets per Order "><br>
                                    @if ($errors->has('min_ticket_per_order'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('min_ticket_per_order') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="main-reply-comment" style="padding: 30px 0px;">
                                    <h6 style="font-size: 14px;">Short description</h6>
                                    <textarea class="replt-comnt" name="short_note" placeholder="Short Description">{{strip_tags($one_ticket_details->short_note)}}</textarea>
                                    @if ($errors->has('short_note'))
                                    <strong class="help-block">
                                        <strong>{{ $errors->first('short_note') }}</strong>
                                    </strong>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add-crdt-amnt">
                    <button class="setting-save-btn" type="submit">Save Changes</button>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    $(document).ready(function() {
    $('#id_42').datetimepicker({
        "allowInputToggle": true,
        "showClose": true,
        "showClear": true,
        "showTodayButton": true,
        "format": "MM/DD/YYYY hh:mm:ss A",
    });
    $('#id_43').datetimepicker({
        "allowInputToggle": true,
        "showClose": true,
        "showClear": true,
        "showTodayButton": true,
        "format": "MM/DD/YYYY hh:mm:ss A",
    });
    /* $("#display-toggle").click(function(){
        $(".more-option").toggle();
    }); */
});
</script>