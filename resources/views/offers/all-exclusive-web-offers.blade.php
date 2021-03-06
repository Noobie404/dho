<section id="regular-offers">
  <!-- <div class="offers-back-img">
    <img class="img-fluid" src="assets/img/Group 870.svg" alt="">

  </div> -->
  <div class="offer-header">
  @if(Request::segment(1) == "expired-offer")
  <h1>Expired Offers</h1>
  @else
  <h1>{{$all_offers[0]->offer_cat}} Offers</h1>
  @endif  
  </div>
  <div class="offers-card">


    <div class="container">

      <div class="row">
      @foreach($all_offers as $all_offer)
        @if($all_offer->product_cat == "Web-Server")
          <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <div class="row">
                    <div class="col-sm-3">
                    <img class="img-fluid" src="{!! asset('master/img/server(1).svg') !!}" alt="">              
                  </div>
                    <div class="col-sm-6">
                      <h3>
                      {{$all_offer->product_cat}} Offer 
                      <br><span> {{$all_offer->title}} only {{$all_offer->price}} {{$all_offer->currency}} </span></h3>
                    </div>
                    <div class="col-sm-3" style="padding-right: 10px;padding-left: 12px;">
                    @if(Request::segment(1) == "expired-offer")
                    <h4><span class="dot" style="background: red;"></span> Expired</h4>
                    @else
                    <h4><span class="dot"></span> Active</h4>
                    @endif
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tldname">
                    <h2>{{$all_offer->title}}</h2>
                    <h3>{{str_replace("~", "", $all_offer->sub_title)}}</h3>
                  </div>
                  <div class="provider-name">
                    <h3>Provider Name:<span> {{$all_offer->provider}}</span></h3>
                  </div><br>
                  @if($all_offer->promo_code != null)
                  <div class="offer-link">
                    <a data-toggle="modal" data-target="#exampleModal" id="modal-open" onclick="modal_open({{$all_offer->id}})" data-whatever="@mdo" href="javascript:void(0)">Get Your Promo Code</a>
                  </div>
                  @endif
                  <br>
                  <div class="offer-validity">
                    <h4>Offer Validity:</h4>
                    <div class="offer-time">
                      <div class="row">
                        <div class="col-sm-5">
                          <div class="time-start">
                            <?php  $format = ('d M, y');
  
                                $start_date = date($format, strtotime($all_offer->offer_start));
                                $end_date = date($format, strtotime($all_offer->offer_end));
                            ?>
                            <h4>Start Date<br><span>{{$start_date}}</span></h4>
                            <span class="line"></span>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="time-end">
  
  
                          <h4>End Date<br><span>{{$end_date}}</span></h4>
  
                          </div>
                        </div>
  
                      </div>
                      <div class="offer-note">
                        <h4>Note : {{$end_date}}</h4>
  
                      </div>
                    </div>
  
                  </div>
                  <div class="deal-section">
                    <h4>Deal Price:</h4>
                    <div class="deal-price">
                      <h2> <span class="currency-symbol">{{$all_offer->currency == "BDT" ? "৳" : "$"}}</span>{{$all_offer->price}} <span class="currency">{{$all_offer->currency == "BDT" ? "TK" : "USD"}}</span> </h2>
                    </div>
                  </div>
                  <div class="card-buttons">
                    <div class="row">
                      <div class="col-sm-7">
                        @if($all_offer->promo_code != null)
                        <a data-toggle="modal" data-target="#exampleModal"id="modal-open" onclick="modal_open({{$all_offer->id}})" data-whatever="@mdo" class="card-order" href="javascript:void(0)"> Order Now </a>
                        @else
                        <a href="{{$all_offer->affiliate_link}}" target="_blank" class="card-order"> Order Now </a>
                        @endif
                      </div>
                      <a style="display: hidden" id="order-now-{{$all_offer->id}}" href="{{$all_offer->affiliate_link}}" target="_blank"></a>
                      <div class="col-sm-5">
                        <a class="card-details" data-toggle="modal" data-target="#exampleModalMore" id="modal-open"  href="javascript:void(0)" onclick="open_details({{$all_offer->id}})"> More Details </a>                  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        @endif
        @endforeach
      </div>

    </div>
  </div>
  <div class="offer-button">
    <!-- <a href="#">More Exclusive Offers</a> -->
  </div>
</section>