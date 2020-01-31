@include('layouts.master.header')
<section id="banner-main">
  <div class="container">
    <div class="row">
      <div class="page_heading">
        <h1>{{Request::segment(2) == null ? "Create" : "Update" }} Offer</h1><br>
      </div>
      <div class="breadcrumb-section" style="margin-left:-280px;">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{Request::segment(2) == null ? "Submit" : "Update" }} Offer</li>
          </ol>
        </nav>
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
            <span class="input-group-text" id="inputGroup-sizing-lg">Product Title</span>
          </div>
          <input type="text" class="form-control" value="{{isset($single_offer->title) ? $single_offer->title : old('title')}}" name="title" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="ex: .COM" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-md">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-lg">Product Sub-title</span>
          </div>
          <input type="text" class="form-control" value="{{isset($single_offer->sub_title) ? $single_offer->sub_title : old('sub_title')}}" name="sub_title" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="ex:.COM is a TLD" required>
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
        <label for="form-control"> Product Purchase Link</label>
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
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Product Description</span>
          </div>
          <textarea class="form-control" name="description" aria-label="With textarea" required>{{isset($single_offer->description) ? $single_offer->description : old('description')}}</textarea>
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
});
</script>
@include('layouts.master.footer')