@include('layouts.master.header')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>

<section id="banner-main">
  <div class="container">
    <div class="row">
      <div class="page_heading">
        <h1>{{Request::segment(2) == null ? "Create" : "Update" }} Offer</h1><br>
        <div class="breadcrumb-section">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{Request::segment(2) == null ? "Submit" : "Update" }} Offer</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
<form class="submit_offer" action="{{ route('CreateOffer') }}" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="{{$single_offer != null ? $single_offer->id : 0}}">
{{ csrf_field() }}
  <div class="container">
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
    <div class="row">
      <div class="col-md-6">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Offer Cetagory</label>
          </div>
          <select class="custom-select" id="inputGroupSelect01" name="product_cat" required>
            @if($single_offer == null)
            <option disabled selected>Choose Offer Cetagory</option>
            <option value="Domain">Domain Offer</option>
            <option value="Hosting">Hosting Offer</option>
            <option value="Combo">Combo Offer</option>
            <option value="Web-Server">Web-Server Offer</option>
            @else
            <option value="{{$single_offer->product_cat}}">{{$single_offer->product_cat}} Offer</option>
            <option value="Domain">Domain Offer</option>
            <option value="Hosting">Hosting Offer</option>
            <option value="Combo">Combo Offer</option>
            <option value="Web-Server">Web-Server Offer</option>
            <script>
                var x = document.getElementById("inputGroupSelect01");
                for (i = 1; i < x.options.length; i++) {
                    if (x.options[i].value == "{{$single_offer->product_cat}}") {
                        x.options[i].remove();
                    }
                }
            </script>
            @endif
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect02">Offer Type</label>
          </div>
          <select class="custom-select" id="inputGroupSelect02" name="offer_cat" required>
          @if($single_offer == null)
            <option disabled selected>Choose Offer Type</option>
            <option value="Regular">Regular Offer</option>
            <option value="Exclusive">Exclusive Offer</option>
            <option value="Special">Special Offer</option>
            @else
            <option value="{{$single_offer->offer_cat}}">{{$single_offer->offer_cat}} Offer</option>
            <option value="Regular">Regular Offer</option>
            <option value="Exclusive">Exclusive Offer</option>
            <option value="Special">Special Offer</option>
            <script>
                var x = document.getElementById("inputGroupSelect02");
                for (i = 1; i < x.options.length; i++) {
                    if (x.options[i].value == "{{$single_offer->offer_cat}}") {
                        x.options[i].remove();
                    }
                }
            </script>
            @endif
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-md">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-lg">Offer Title</span>
          </div>
          <input type="text" class="form-control" id="p_title" value="{{isset($single_offer->title) ? $single_offer->title : old('title')}}" name="title" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="ex: .COM" required>
        </div>
      </div>
    </div>
    <div class="row" id="single_subtitle">
      <div class="col-md-12">
        <div class="input-group input-group-md">
          <div class="input-group-prepend">
            <span class="input-group-text" id="sub_title_fade_span">Offer Sub-title</span>
          </div>
          <input type="text" id="sub_title_fade" class="form-control" value="{{isset($single_offer->sub_title) ? $single_offer->sub_title : old('sub_title')}}" name="sub_title" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="ex:.COM is a TLD">
        </div>
      </div>
    </div>
    <div class="row" id="triple_subtitle">
      <div class="col-md-4">
        <div class="input-group input-group-md">
          <div class="input-group-prepend">
            <span class="input-group-text" id="sub_title_fadeIN_span1">CPU</span>
          </div>
          <input type="text" id="sub_title_fadeIN1" class="form-control" value="" name="sub_title1" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="ex: 1">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group input-group-md">
          <div class="input-group-prepend">
            <span class="input-group-text" id="sub_title_fadeIN_span2">RAM</span>
          </div>
          <input type="text" id="sub_title_fadeIN2" class="form-control" value="" name="sub_title2" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="ex: 512 MB">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group input-group-md">
          <div class="input-group-prepend">
            <span class="input-group-text" id="sub_title_fadeIN_span3">Storage</span>
          </div>
          <input type="text" id="sub_title_fadeIN3" class="form-control" value="" name="sub_title3" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="ex: 1 TB">
        </div>
      </div>
    </div>
    <div class="row" id="double_subtitle">
      <div class="col-md-6">
        <div class="input-group input-group-md">
          <div class="input-group-prepend">
            <span class="input-group-text"">Storage</span>
          </div>
          <input type="text" id="sub_title_fadeIN4" class="form-control" value="" name="sub_title4" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="ex: 500 GB">
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-md">
          <div class="input-group-prepend">
            <span class="input-group-text">Bandwidth</span>
          </div>
          <input type="text" id="sub_title_fadeIN5" class="form-control" value="" name="sub_title5" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="ex: 512 mbps">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-md">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-lg">Provider Name</span>
          </div>
          <input type="text" class="form-control" value="{{isset($single_offer->provider) ? $single_offer->provider : old('provider')}}" name="provider" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="ex:Dianahost" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-md">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-lg">Promo Code</span>
          </div>
          <input type="text" class="form-control" value="{{isset($single_offer->promo_code) ? $single_offer->promo_code : old('promo_code')}}" name="promo_code" placeholder="" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label for="form_datetime"> Starting Time</label>
        <div class="input-group date" id="id_5">
          <input  id="out_datetime" name="offer_start" type="text" class="form-control" style="border-top-left-radius: .25rem;border-bottom-left-radius: .25rem;" value="{{isset($single_offer->offer_start) ? javascript_dateformate($single_offer->offer_start) : old('javascript_dateformate(offer_start)')}}" required>
          <div class="input-group-addon input-group-append">
              <div class="input-group-text">
                  <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
              </div>
          </div>
          @if ($errors->has('offer_start'))
          <span class="help-block text-danger">
              <strong>{{ $errors->first('offer_start') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="col-md-6">
        <label for="form_datetime"> Ending Time</label>
        <div class="input-group date" id="id_6">
          <input  id="out_datetime" name="offer_end" type="text" class="form-control" style="border-top-left-radius: .25rem;border-bottom-left-radius: .25rem;" value="{{isset($single_offer->offer_end) ? javascript_dateformate($single_offer->offer_end) : old('javascript_dateformate(offer_end)')}}" required>
          <div class="input-group-addon input-group-append">
              <div class="input-group-text">
                  <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
              </div>
          </div>
          @if ($errors->has('offer_end '))
          <span class="help-block text-danger">
              <strong>{{ $errors->first('offer_end ') }}</strong>
          </span>
          @endif
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-md">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-lg">Offer Note</span>
          </div>
          <input type="text" class="form-control" value="{{isset($single_offer->offer_note) ? $single_offer->offer_note : old('offer_note')}}" name="offer_note" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="ex : You can get this offer until end date.">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="input-group mb-3">
          <input type="text" class="form-control" value="{{isset($single_offer->price) ? $single_offer->price : old('price')}}" name="price" aria-label="Amount (to the nearest dollar)" required>
          <div class="input-group-append">
            <select class="custom-select" id="currency" name="currency">
            @if($single_offer == null)
              <option selected value="BDT">BDT</option>
              <option value="USD">USD</option>
              @else
              <option value="{{$single_offer->currency}}">{{$single_offer->currency}}</option>
              <option value="BDT">BDT</option>
              <option value="USD">USD</option>
              <script>
                  var x = document.getElementById("currency");
                  for (i = 1; i < x.options.length; i++) {
                      if (x.options[i].value == "{{$single_offer->currency}}") {
                          x.options[i].remove();
                      }
                  }
              </script>
              @endif
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <label for="form-control"> Offer Purchase Link</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3">https://example.com/</span>
          </div>
          <input type="text" class="form-control" value="{{isset($single_offer->product_link) ? $single_offer->product_link : old('product_link')}}" name="product_link" placeholder="ex: https://demo.com" id="basic-url" aria-describedby="basic-addon3" required>
        </div>
      </div>
      <!-- <div class="col-md-6">
        <label for="form-control"> Product Detail Link</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3">https://example.com/</span>
          </div>
          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" required>
        </div>
      </div> -->
    </div>
    <div class="row">
      <div class="col-md-12">
        <label for="form-control"> Offer Description</label>
        <div class="input-group">
          <textarea class="form-control" style="width: 100%" name="description" aria-label="With textarea" required>{{isset($single_offer->description) ? $single_offer->description : old('description')}}</textarea>
              <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
          <script>
              CKEDITOR.replace("description",
              {
                  width: '100%'
              });
          </script>
          
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <button type="submit" class="btn btn-secondary btn-lg btn-block">{{Request::segment(2) == null ? "Submit" : "Update" }} Offer</button>
      </div>
    </div>
  </div>
</form>
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
  $("#inputGroupSelect01").change();
});
</script>
@include('layouts.master.footer')
<script>
  $("#inputGroupSelect01").change(function(){
    var selected = $(this).children("option:selected").val();
    if (selected == 'Web-Server') {
      $("#single_subtitle").fadeOut(500);
      $("#double_subtitle").fadeOut(500);
      $("#triple_subtitle").fadeIn(500);
      $("#sub_title_fadeIN1").prop('required',true);
      $("#sub_title_fadeIN2").prop('required',true);
      $("#sub_title_fadeIN3").prop('required',true);
      $("#sub_title_fade").removeAttr('required');
      $("#sub_title_fadeIN4").removeAttr('required');
      $("#sub_title_fadeIN5").removeAttr('required');
    }else if(selected == 'Hosting'){
      $("#single_subtitle").fadeOut(500);
      $("#triple_subtitle").fadeOut(500);
      $("#double_subtitle").fadeIn(500);
      $("#sub_title_fadeIN4").prop('required',true);
      $("#sub_title_fadeIN5").prop('required',true);
      $("#sub_title_fade").removeAttr('required');
      $("#sub_title_fadeIN1").removeAttr('required');
      $("#sub_title_fadeIN2").removeAttr('required');
      $("#sub_title_fadeIN3").removeAttr('required');
    }else{
      $("#single_subtitle").fadeIn(500);
      $("#triple_subtitle").fadeOut(500);
      $("#double_subtitle").fadeOut(500);
      $("#sub_title_fade").prop('required',true);
      $("#sub_title_fadeIN1").removeAttr('required');
      $("#sub_title_fadeIN2").removeAttr('required');
      $("#sub_title_fadeIN3").removeAttr('required');
      $("#sub_title_fadeIN4").removeAttr('required');
      $("#sub_title_fadeIN5").removeAttr('required');
    }
  }); 
</script>
<?php 
if (isset($single_offer->product_cat) && $single_offer->product_cat == "Web-Server") {
  $cut = explode('~', $single_offer->sub_title);
  $cpu = $cut[1];
  $ram = $cut[3];
  $storage = $cut[5];
  ?>
  <script>
    $("#sub_title_fadeIN2").val('<?php echo $ram; ?>');
    $("#sub_title_fadeIN1").val('<?php echo $cpu; ?>');
    $("#sub_title_fadeIN3").val('<?php echo $storage; ?>');
  </script>
<?php }else if(isset($single_offer->product_cat) && $single_offer->product_cat == "Hosting") {
    $cut = explode('~', $single_offer->sub_title);
    $cpu = $cut[1];
    $ram = $cut[3];
     ?>
<script>
  $("#sub_title_fadeIN4").val('<?php echo $cpu; ?>');
  $("#sub_title_fadeIN5").val('<?php echo $ram; ?>');
</script>
<?php } ?>
<script>
    $(document).ready(function() {
        $('.submit_offer').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
              title: {
                    message: 'This title is not valid',
                    validators: {
                        notEmpty: {
                            message: 'This field is required and cannot be empty'
                        },
                        stringLength: {
                            min: 2,
                            max: 20,
                            message: 'The title must be more than 2 and less than 20 characters long'
                        },
                    }
                },
                sub_title: {
                  message: 'This title is not valid',
                  validators: {
                      notEmpty: {
                          message: 'This field is required and cannot be empty'
                      },
                      stringLength: {
                          min: 2,
                          max: 45,
                          message: 'The field must be more than 2 and less than 45 characters long'
                      },
                  }
              },
              sub_title1: {
                  message: 'This field is not valid',
                  validators: {
                      notEmpty: {
                          message: 'This field is required and cannot be empty'
                      },
                      stringLength: {
                          min: 1,
                          max: 2,
                          message: 'The field must be more than 1 and less than 2 characters long'
                      },
                  }
              },
              sub_title2: {
                  message: 'This field is not valid',
                  validators: {
                      notEmpty: {
                          message: 'This field is required and cannot be empty'
                      },
                      stringLength: {
                          min: 3,
                          max: 7,
                          message: 'The field must be more than 3 and less than 7 characters long'
                      },
                  }
              },
              sub_title3: {
                  message: 'This field is not valid',
                  validators: {
                      notEmpty: {
                          message: 'This field is required and cannot be empty'
                      },
                      stringLength: {
                          min: 3,
                          max: 7,
                          message: 'The field must be more than 3 and less than 7 characters long'
                      },
                  }
              },
              sub_title4: {
                  message: 'This field is not valid',
                  validators: {
                      notEmpty: {
                          message: 'This field is required and cannot be empty'
                      },
                      stringLength: {
                          min: 3,
                          max: 7,
                          message: 'The field must be more than 3 and less than 7 characters long'
                      },
                  }
              },
              sub_title5: {
                  message: 'This field is not valid',
                  validators: {
                      notEmpty: {
                          message: 'This field is required and cannot be empty'
                      },
                      stringLength: {
                          min: 3,
                          max: 9,
                          message: 'The field must be more than 3 and less than 9 characters long'
                      },
                  }
              },
              provider: {
                  message: 'This field is not valid',
                  validators: {
                      notEmpty: {
                          message: 'This field is required and cannot be empty'
                      },
                      stringLength: {
                          min: 2,
                          max: 18,
                          message: 'The field must be more than 2 and less than 18 characters long'
                      },
                  }
              },
              offer_note: {
                  message: 'This field is not valid',
                  validators: {
                      stringLength: {
                          max: 40,
                          message: 'The field must be less than 40 characters long'
                      },
                  }
              },
            }
        });
    });
</script> 