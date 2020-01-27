@include('layouts.master.header')
<section id="banner-main">
  <div class="container">
    <div class="row">
      <div class="page_heading">
        <h1>Create Offer</h1><br>
      </div>
      <div class="breadcrumb-section" style="margin-left:-280px;">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Submit Offer</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<form class="submit_offer" action="{{ route('CreateOffer') }}" method="post" enctype="multipart/form-data">
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
            <option disabled selected>Choose Offer Cetagory</option>
            <option value="Domain">Domain Offer</option>
            <option value="Hosting">Hosting Offer</option>
            <option value="Combo">Combo Offer</option>
            <option value="Web-Server">Web-Server Offer</option>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Offer Type</label>
          </div>
          <select class="custom-select" id="inputGroupSelect01" name="offer_cat" required>
            <option disabled selected>Choose Offer Type</option>
            <option value="Regular">Regular Offer</option>
            <option value="Exclusive">Exclusive Offer</option>
            <option value="Special">Special Offer</option>
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
          <input type="text" class="form-control" value="{{old('title')}}" name="title" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-md">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-lg">Product Sub-title</span>
          </div>
          <input type="text" class="form-control" value="{{old('sub_title')}}" name="sub_title" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-md">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-lg">Provider Name</span>
          </div>
          <input type="text" class="form-control" value="{{old('provider')}}" name="provider" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-md">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-lg">Promo Code</span>
          </div>
          <input type="text" class="form-control" value="{{old('promo_code')}}" name="promo_code" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label for="form_datetime"> Starting Time</label>
        <div class="input-group date" id="id_5">
          <input  id="out_datetime" name="offer_start" type="text" class="form-control" style="border-top-left-radius: .25rem;border-bottom-left-radius: .25rem;" value="{{old('offer_start')}}" required>
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
          <input  id="out_datetime" name="offer_end" type="text" class="form-control" style="border-top-left-radius: .25rem;border-bottom-left-radius: .25rem;" value="{{old('offer_end')}}" required>
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
          <input type="text" class="form-control" value="{{old('offer_note')}}" name="offer_note" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="input-group mb-3">
          <input type="text" class="form-control" value="{{old('price')}}" name="price" aria-label="Amount (to the nearest dollar)" required>
          <div class="input-group-append">
            <select class="custom-select" id="currency" name="currency">
              <option selected value="BDT">BDT</option>
              <option value="USD">USD</option>
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
          <input type="text" class="form-control" value="{{old('product_link')}}" name="product_link" id="basic-url" aria-describedby="basic-addon3" required>
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
          <textarea class="form-control" name="description" aria-label="With textarea" required>{{old('description')}}</textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <button type="submit" class="btn btn-secondary btn-lg btn-block">Submit Offer</button>
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