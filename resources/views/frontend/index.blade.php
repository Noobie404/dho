@include('layouts.master.header')

<section id="banner">
  <div class="banner-back img-fluid">
    <img src="{!! asset('master/img/Path2736.svg') !!}" alt="">
  </div>
  <div class="banner-content">
    <div class="row">
      <div class="col-md-7">
        <div class="banner-text">
          <h2>We Offer World's Best Domain Hosting Deals.</h2>
          <div class="banner-buttons">


            <a href="{{route('DomainOffer')}}" class="banner-button-1"> Domain Offers</a>
            <a href="{{route('HostingOffer')}}" class="banner-button-2"> Hosting Offers</a>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="banner-img img-fluid">
          <img class="d-sm-none d-md-block" src="{!! asset('master/img/Group 527.svg') !!}" alt="">

        </div>
      </div>
    </div>
  </div>
</section>
<section id="offers">
  <!-- <div class="offers-back-img">
    <img class="img-fluid" src="{!! asset('master/img/Group 870.svg') !!}" alt="">

  </div> -->
  <div class="offer-header">
    <h1>Exclusive Offers</h1>
  </div>
  <div class="offers-card">

    <div class="container">

      <div class="row">
        <div id="owl-demo" class="owl-carousel owl-theme">
        @foreach($exlusive_offers as $exclusive)
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-sm-3">
                  @if($exclusive->product_cat == 'Domain')
                  <img class="img-fluid" src="{!! asset('master/img/world-wide-web.svg') !!}" alt="">
                  @elseif($exclusive->product_cat == 'Hosting')
                  <img class="img-fluid" src="{!! asset('master/img/server.svg') !!}" alt="">
                  @elseif($exclusive->product_cat == 'Combo')
                  <img class="img-fluid" src="{!! asset('master/img/icon.svg') !!}" alt="">
                  @else
                  <img class="img-fluid" src="{!! asset('master/img/server(1).svg') !!}" alt="">
                  @endif
                </div>
                <div class="col-sm-6">
                  <h3>
                    {{$exclusive->product_cat}} Offer
                    
                    <br><span> {{$exclusive->title}} only {{$exclusive->price}} {{$exclusive->currency}} </span></h3>
                </div>
                <div class="col-sm-3" style="padding-right: 10px;">
                  <h4><span class="dot"></span> Active</h4>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="tldname">
                <h2>{{$exclusive->title}}</h2>
                <h3>{{str_replace("~", "", $exclusive->sub_title)}}</h3>
              </div>
              <div class="provider-name">
                <h3>Provider Name:<span> {{$exclusive->provider}}</span></h3>
              </div><br>
              @if($exclusive->promo_code != null)
              <div class="offer-link">
                <a data-toggle="modal" data-target="#exampleModal" id="modal-open" onclick="modal_open({{$exclusive->id}})" data-whatever="@mdo" href="javascript:void(0)">Get Your Promo Code</a>
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

                            $start_date = date($format, strtotime($exclusive->offer_start));
                            $end_date = date($format, strtotime($exclusive->offer_end));
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
                    <h4>Note : {{$exclusive->offer_note}}</h4>

                  </div>
                </div>

              </div>
              <div class="deal-section">
                <h4>Deal Price:</h4>
                <div class="deal-price">
                  <h2> <span class="currency-symbol">{{$exclusive->currency == "BDT" ? "৳" : "$"}}</span>{{$exclusive->price}} <span class="currency">{{$exclusive->currency == "BDT" ? "TK" : "USD"}}</span> </h2>
                </div>
              </div>
              <div class="card-buttons">
                <div class="row">
                  <div class="col-sm-7">
                    @if($exclusive->promo_code != null)
                    <a data-toggle="modal" data-target="#exampleModal"id="modal-open" onclick="modal_open({{$exclusive->id}})" data-whatever="@mdo" class="card-order" href="javascript:void(0)"> Order Now </a>
                    @else
                    <a  href="{{$exclusive->affiliate_link}}" target="_blank" class="card-order"> Order Now </a>
                    @endif
                  </div>
                  <a style="display: hidden" id="order-now-{{$exclusive->id}}" href="{{$exclusive->affiliate_link}}" target="_blank"></a>
                  <div class="col-sm-5">
                    <a class="card-details" data-toggle="modal" data-target="#exampleModalMore" id="modal-open"  href="javascript:void(0)" onclick="open_details({{$exclusive->id}})"> More Details </a>                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        </div>
    </div>
  </div>
  <div class="offer-button">
    <a href="{{route('AllExclusiveOffer')}}">More Exclusive Offers</a>
  </div>
</section>
<section id="special-offers">
  <!-- <div class="offers-back-img">
    <img class="img-fluid" src="{!! asset('master/img/Group 870.svg') !!}" alt="">

  </div> -->
  <div class="offer-header">
    <h1>Special Offers</h1>
  </div>
  <div class="offers-card">

    <div class="container">
      <div class="row">
        <div id="owl-demo" class="owl-carousel owl-theme">
      @foreach($special_offers as $special)
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-sm-3">
                  @if($special->product_cat == 'Domain')
                  <img class="img-fluid" src="{!! asset('master/img/world-wide-web.svg') !!}" alt="">
                  @elseif($special->product_cat == 'Hosting')
                  <img class="img-fluid" src="{!! asset('master/img/server.svg') !!}" alt="">
                  @elseif($special->product_cat == 'Combo')
                  <img class="img-fluid" src="{!! asset('master/img/icon.svg') !!}" alt="">
                  @else
                  <img class="img-fluid" src="{!! asset('master/img/server(1).svg') !!}" alt="">
                  @endif
                </div>
                <div class="col-sm-6">
                  <h3>
                    {{$special->product_cat}} Offer
                    <br><span> {{$special->title}} only {{$special->price}} {{$special->currency}} </span></h3>
                </div>
                <div class="col-sm-3"  style="padding-right: 10px;">
                  <h4><span class="dot"></span> Active</h4>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="tldname">
                <h2>{{$special->title}}</h2>
                <h3>{{str_replace("~", "", $special->sub_title)}}</h3>
              </div>
              <div class="provider-name">
                <h3>Provider Name:<span> {{$special->provider}}</span></h3>
              </div><br>
              @if($special->promo_code != null)
              <div class="offer-link">
                <a data-toggle="modal" data-target="#exampleModal" id="modal-open" onclick="modal_open({{$special->id}})" data-whatever="@mdo" href="javascript:void(0)">Get Your Promo Code</a>
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

                            $start_date = date($format, strtotime($special->offer_start));
                            $end_date = date($format, strtotime($special->offer_end));
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
                    <h4>Note : {{$special->offer_note}}</h4>

                  </div>
                </div>

              </div>
              <div class="deal-section">
                <h4>Deal Price:</h4>
                <div class="deal-price">
                  <h2> <span class="currency-symbol">{{$special->currency == "BDT" ? "৳" : "$"}}</span>{{$special->price}} <span class="currency">{{$special->currency == "BDT" ? "TK" : "USD"}}</span> </h2>
                </div>
              </div>
              <div class="card-buttons">
                <div class="row">
                  <div class="col-sm-7">
                    @if($special->promo_code != null)
                    <a data-toggle="modal" data-target="#exampleModal"id="modal-open" onclick="modal_open({{$special->id}})" data-whatever="@mdo" class="card-order" href="javascript:void(0)"> Order Now </a>
                    @else
                    <a  href="{{$special->affiliate_link}}" target="_blank" class="card-order"> Order Now </a>
                    @endif
                  </div>
                  <a style="display: hidden" id="order-now-{{$special->id}}" href="{{$special->affiliate_link}}" target="_blank"></a>
                  <div class="col-sm-5">
                    <a class="card-details" data-toggle="modal" data-target="#exampleModalMore" id="modal-open"  href="javascript:void(0)" onclick="open_details({{$special->id}})"> More Details </a>                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
  <div class="offer-button">
    <a href="{{route('AllSpecialOffer')}}">More Special Offers</a>
  </div>
</section>
<section id="regular-offers">
  <!-- <div class="offers-back-img">
    <img class="img-fluid" src="{!! asset('master/img/Group 870.svg') !!}" alt="">
  </div> -->
  <div class="offer-header">
    <h1>Regular Offers</h1>
  </div>
  <div class="offers-card">
    <div class="container">
      <div class="row">
        <div id="owl-demo" class="owl-carousel owl-theme">
      @foreach($regular_offers as $regular)
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-sm-3">
                  @if($regular->product_cat == 'Domain')
                  <img class="img-fluid" src="{!! asset('master/img/world-wide-web.svg') !!}" alt="">
                  @elseif($regular->product_cat == 'Hosting')
                  <img class="img-fluid" src="{!! asset('master/img/server.svg') !!}" alt="">
                  @elseif($regular->product_cat == 'Combo')
                  <img class="img-fluid" src="{!! asset('master/img/icon.svg') !!}" alt="">
                  @else
                  <img class="img-fluid" src="{!! asset('master/img/server(1).svg') !!}" alt="">
                  @endif
                </div>
                <div class="col-sm-6">
                  <h3>
                    {{$regular->product_cat}} Offer
                    
                    <br><span> {{$regular->title}} only {{$regular->price}} {{$regular->currency}} </span></h3>
                </div>
                <div class="col-sm-3"  style="padding-right: 10px;">
                  <h4><span class="dot"></span> Active</h4>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="tldname">
                <h2>{{$regular->title}}</h2>
                <h3>{{str_replace("~", "", $regular->sub_title)}}</h3>
              </div>
              <div class="provider-name">
                <h3>Provider Name:<span> {{$regular->provider}}</span></h3>
              </div><br>
              @if($regular->promo_code != null)
              <div class="offer-link">
                <a data-toggle="modal" data-target="#exampleModal" id="modal-open" onclick="modal_open({{$regular->id}})" data-whatever="@mdo" href="javascript:void(0)">Get Your Promo Code</a>
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

                            $start_date = date($format, strtotime($regular->offer_start));
                            $end_date = date($format, strtotime($regular->offer_end));
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
                    <h4>Note : {{$regular->offer_note}}</h4>

                  </div>
                </div>

              </div>
              <div class="deal-section">
                <h4>Deal Price:</h4>
                <div class="deal-price">
                  <h2> <span class="currency-symbol">{{$regular->currency == "BDT" ? "৳" : "$"}}</span>{{$regular->price}} <span class="currency">{{$regular->currency == "BDT" ? "TK" : "USD"}}</span> </h2>
                </div>
              </div>
              <div class="card-buttons">
                <div class="row">
                  <div class="col-sm-7">
                    @if($regular->promo_code != null)
                    <a data-toggle="modal" data-target="#exampleModal"id="modal-open" onclick="modal_open({{$regular->id}})" data-whatever="@mdo" class="card-order" href="javascript:void(0)"> Order Now </a>
                    @else
                    <a  href="{{$regular->affiliate_link}}" target="_blank" class="card-order"> Order Now </a>
                    @endif
                  </div>
                  <a style="display: hidden" id="order-now-{{$regular->id}}" href="{{$regular->affiliate_link}}" target="_blank"></a>
                  <div class="col-sm-5">
                    <a class="card-details" data-toggle="modal" data-target="#exampleModalMore" id="modal-open"  href="javascript:void(0)" onclick="open_details({{$regular->id}})"> More Details </a>                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
  <div class="offer-button mb-4">
    <a href="{{route('AllRegularOffer')}}">More Regular Offers</a>
  </div>
</section>

@include('layouts.master.footer')