@include('layouts.master.header')
<section id="banner-main">
  <div class="container">
    <div class="row">
      <div class="page_heading">
        <h1>{{$product_info->product_cat}} Offers</h1><br>
      </div>
      <div class="breadcrumb-section">
        <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$product_info->product_cat}} offers</li>
           </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<section class="product_details">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="product-title">
          <h1>{{$product_info->title}} {{$product_info->product_cat}}</h1>
        </div>
        <div class="product-table">
          <table class="table table-bordered table-hover table-striped">
            <tr>
              <td class="col-sm-3"> <strong>Sub-title</strong></td>
              <td class="col-sm-9"> {{$product_info->sub_title}}</td>
            </tr>
            <tr>
              <td class="col-sm-3"> <strong>Category</strong></td>
              <td class="col-sm-9"> {{$product_info->product_cat}} Offer</td>
            </tr>
            <tr>
              <td class="col-sm-3"> <strong>Type</strong></td>
              <td class="col-sm-9"> {{$product_info->offer_cat}} Offer</td>
            </tr>
            <tr>
              <td class="col-sm-3"> <strong>Provider Name</strong></td>
              <td class="col-sm-9">{{$product_info->provider}}</td>
            </tr>
            <tr>
              <?php 
              $format3 = ('F d, Y g:i A');
                  $current_time = strtotime(date('Y-m-d H:i:s')); 
                  $end_offer = strtotime($product_info->offer_end); 
                  $starttime = date($format3, strtotime($product_info->offer_start));
                  $endtime = date($format3, strtotime($product_info->offer_end));
              ?>
              <td class="col-sm-3"> <strong>Start Date</strong></td>
              <td class="col-sm-9">{{$starttime}}</td>
            </tr>
            <tr>
              <td class="col-sm-3"> <strong>End Date</strong></td>
              <td class="col-sm-9">{{$endtime}}</td>
            </tr>
            <tr>
              <td class="col-sm-3"> <strong>Price</strong></td>
              <td class="col-sm-9">{{$product_info->price}} {{$product_info->currency == "BDT" ? "TK" : "USD"}}</td>
            </tr>
            <tr>
              <td class="col-sm-3"> <strong>Offer Note</strong></td>
              <td class="col-sm-9">{{$product_info->offer_note}}</td>
            </tr>
            <tr>
              <td class="col-sm-3"> <strong>Description</strong></td>
              <td class="col-sm-9"><p>{{$product_info->description}}</p></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@include('layouts.master.footer')
