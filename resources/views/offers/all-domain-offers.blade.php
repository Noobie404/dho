<section id="offers">
  <!-- <div class="offers-back-img">
    <img class="img-fluid" src="assets/img/Group 870.svg" alt="">

  </div> -->
  <div class="offer-header">
    <h1>Exclusive Offers</h1>
  </div>
  <div class="offers-card">
    <div class="container">
      <div class="row">
        <div id="owl-demo" class="owl-carousel owl-theme">
        @foreach($all_offers as $all_offer)
        @if($all_offer->offer_cat == "Exclusive")
          <div class="col-md-12 items">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-3">
                  @if($all_offer->product_cat == 'Domain')
                  <img class="img-fluid" src="{!! asset('master/img/world-wide-web.svg') !!}" alt="">
                  @elseif($all_offer->product_cat == 'Hosting')
                  <img class="img-fluid" src="{!! asset('master/img/server.svg') !!}" alt="">
                  @elseif($all_offer->product_cat == 'Combo')
                  <img class="img-fluid" src="{!! asset('master/img/icon.svg') !!}" alt="">
                  @else
                  <img class="img-fluid" src="{!! asset('master/img/server(1).svg') !!}" alt="">
                  @endif                 
                 </div>
                  <div class="col-sm-6">
                    <h3>
                    {{$all_offer->offer_cat}} Offer 
                    <br><span> {{$all_offer->title}} only {{$all_offer->price}} {{$all_offer->currency}} </span></h3>
                  </div>
                  <div class="col-sm-3" style="padding-right: 0;">
                    <h4><span class="dot"></span> Active</h4>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="tldname">
                  <h2>{{$all_offer->title}}</h2>
                  <h3>{{$all_offer->sub_title}}</h3>
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
                    <a id="order-now-{{$all_offer->id}}" class="card-order" href="{{$all_offer->affiliate_link}}" target="_blank"> Order Now </a>
                    </div>
                    <div class="col-sm-5">
                      <a class="card-details" href="{{url('/product-detail')}}/{{$all_offer->id}}"> More Details </a>
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
  </div>
  <div class="offer-button" style="padding-bottom:100px;">
    <a id="exclusive-{{$title}}-more" href="javascript:void(0)">More Exclusive Offers</a>
  </div>
  <script>
    $("#exclusive-{{$title}}-more").click(function(){
      $('#exclusive-{{$title}}')[0].click();
    }); 
  </script>
</section>
<section id="special-offers">
  <!-- <div class="offers-back-img">
    <img class="img-fluid" src="assets/img/Group 870.svg" alt="">

  </div> -->
  <div class="offer-header">
    <h1>Special Offers</h1>
  </div>
  <div class="offers-card">


    <div class="container">

      <div class="row">
        <div id="owl-demo" class="owl-carousel owl-theme owl-special">
          @foreach($all_offers as $all_offer)
          @if($all_offer->offer_cat == "Special")
            <div class="col-md-12 items">
              <div class="card">
                <div class="card-header">
                  <div class="row">
                    <div class="col-sm-3">
                    @if($all_offer->product_cat == 'Domain')
                    <img class="img-fluid" src="{!! asset('master/img/world-wide-web.svg') !!}" alt="">
                    @elseif($all_offer->product_cat == 'Hosting')
                    <img class="img-fluid" src="{!! asset('master/img/server.svg') !!}" alt="">
                    @elseif($all_offer->product_cat == 'Combo')
                    <img class="img-fluid" src="{!! asset('master/img/icon.svg') !!}" alt="">
                    @else
                    <img class="img-fluid" src="{!! asset('master/img/server(1).svg') !!}" alt="">
                    @endif                
                    </div>
                    <div class="col-sm-6">
                      <h3>
                      {{$all_offer->offer_cat}} Offer 
                      <br><span> {{$all_offer->title}} only {{$all_offer->price}} {{$all_offer->currency}} </span></h3>
                    </div>
                    <div class="col-sm-3" style="padding-right: 0;">
                      <h4><span class="dot"></span> Active</h4>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tldname">
                    <h2>{{$all_offer->title}}</h2>
                    <h3>{{$all_offer->sub_title}}</h3>
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
                      <a id="order-now-{{$all_offer->id}}" class="card-order" href="{{$all_offer->affiliate_link}}" target="_blank"> Order Now </a>
                      </div>
                      <div class="col-sm-5">
                        <a class="card-details" href="{{url('/product-detail')}}/{{$all_offer->id}}"> More Details </a>
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
  </div>
  <div class="offer-button" style="padding-bottom:100px;">
    <a id="special-{{$title}}-more" href="javascript:void(0)">More Special Offers</a>
  </div>
  <script>
    $("#special-{{$title}}-more").click(function(){
      $('#special-{{$title}}')[0].click();
    }); 
  </script>
</section>
<section id="regular-offers">
  <!-- <div class="offers-back-img">
    <img class="img-fluid" src="assets/img/Group 870.svg" alt="">

  </div> -->
  <div class="offer-header">
    <h1>Regular Offers</h1>
  </div>
  <div class="offers-card">


    <div class="container">

      <div class="row">
        <div id="owl-demo" class="owl-carousel owl-theme">
          @foreach($all_offers as $all_offer)
          @if($all_offer->offer_cat == "Regular")
            <div class="col-md-12 items">
              <div class="card">
                <div class="card-header">
                  <div class="row">
                    <div class="col-sm-3">
                    @if($all_offer->product_cat == 'Domain')
                    <img class="img-fluid" src="{!! asset('master/img/world-wide-web.svg') !!}" alt="">
                    @elseif($all_offer->product_cat == 'Hosting')
                    <img class="img-fluid" src="{!! asset('master/img/server.svg') !!}" alt="">
                    @elseif($all_offer->product_cat == 'Combo')
                    <img class="img-fluid" src="{!! asset('master/img/icon.svg') !!}" alt="">
                    @else
                    <img class="img-fluid" src="{!! asset('master/img/server(1).svg') !!}" alt="">
                    @endif                 
                  </div>
                    <div class="col-sm-6">
                      <h3>
                      {{$all_offer->offer_cat}} Offer 
                      <br><span> {{$all_offer->title}} only {{$all_offer->price}} {{$all_offer->currency}} </span></h3>
                    </div>
                    <div class="col-sm-3" style="padding-right: 0;">
                      <h4><span class="dot"></span> Active</h4>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tldname">
                    <h2>{{$all_offer->title}}</h2>
                    <h3>{{$all_offer->sub_title}}</h3>
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
                      <a id="order-now-{{$all_offer->id}}" class="card-order" href="{{$all_offer->affiliate_link}}" target="_blank"> Order Now </a>
                      </div>
                      <div class="col-sm-5">
                        <a class="card-details" href="{{url('/product-detail')}}/{{$all_offer->id}}"> More Details </a>
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
  </div>
  <div class="offer-button" style="padding-bottom:100px;">
    <a id="regular-{{$title}}-more" href="javascript:void(0)">More Regular Offers</a>
  </div>
  <script>
    $("#regular-{{$title}}-more").click(function(){
      $('#regular-{{$title}}')[0].click();
    }); 
  </script>
</section>