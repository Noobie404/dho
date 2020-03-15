@include('layouts.master.header')
<section id="banner-main">
  <div class="container">
    <div class="row">
      <div class="page_heading">
        @if(Request::segment(1) == "expired-offer")
        <h1>Expired Offers</h1><br>
        @else
        <h1>{{$all_offers[0]->offer_cat}} Offers</h1><br>
        @endif
        <div class="breadcrumb-section">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
              @if(Request::segment(1) == "expired-offer")
              <li class="breadcrumb-item active" aria-current="page">Expired offers</li>
              @else
              <li class="breadcrumb-item active" aria-current="page">{{$all_offers[0]->offer_cat}} offers</li>
              @endif
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="domain-offers">
  <div class="row">
    <div class="col-md-12">
      <div class="domain-offers-header">
        <h2>Filter Your Choice</h2>
      </div>
      <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
          <ul id="tabsJustified" class="nav nav-tabs">
            <li class="nav-item">
              <a class="show active" data-target="#all-exclusive-offers" data-toggle="tab" href="">All Offers</a>
            </li>
            <li class="nav-item">
              <a id="Domain-exclusive" data-target="#domain-exclusive-offers" data-toggle="tab" href="">Domain</a>
            </li>
            <li class="nav-item">
              <a id="Hosting-exclusive" data-target="#hosting-exclusive-offers" data-toggle="tab" href="">Hosting</a>
            </li>
            <li class="nav-item">
              <a id="Combo-exclusive" data-target="#combo-exclusive-offers" data-toggle="tab" href="">Combo</a>
            </li>
            <li class="nav-item">
              <a id="Web-Server-exclusive" data-target="#web-exclusive-offers" data-toggle="tab" href="">Web-Server</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
        </div>
      </div>
      <div id="tabsJustifiedContent" class="tab-content">
        <div id="all-exclusive-offers" class="tab-pane fade  active show">
          @include('offers.all-exclusive-offers')
        </div>
        <div id="domain-exclusive-offers" class="tab-pane fade">
          @include('offers.all-exclusive-domain-offers')
        </div>
        <div id="hosting-exclusive-offers" class="tab-pane fade">
          @include('offers.all-exclusive-hosting-offers')
        </div>
        <div id="combo-exclusive-offers" class="tab-pane fade">
          @include('offers.all-exclusive-combo-offers')
        </div>
        <div id="web-exclusive-offers" class="tab-pane fade">
          @include('offers.all-exclusive-web-offers')
        </div>
      </div>
    </div>
</section>
@include('layouts.master.footer')