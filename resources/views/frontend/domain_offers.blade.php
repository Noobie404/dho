@include('layouts.master.header')
<section id="banner-main">
  <div class="container">
    <div class="row">
      <div class="page_heading">
        <h1>Domain Offers</h1><br>
      </div>
      <div class="breadcrumb-section">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Domain offers</li>
          </ol>
        </nav>
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
              <a class="show active" data-target="#all-domain-offers" data-toggle="tab" href="">All Offers</a>
            </li>
            <li class="nav-item">
              <a id="exclusive-domain" data-target="#exclusive-domain-offers" data-toggle="tab" href="">Exclusive Offers</a>
            </li>
            <li class="nav-item">
              <a id="special-domain" data-target="#special-domain-offers" data-toggle="tab" href="">Special offers</a>
            </li>
            <li class="nav-item">
              <a id="regular-domain" data-target="#regular-domain-offers" data-toggle="tab" href="">Regular Offers</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
        </div>
      </div>
      <div id="tabsJustifiedContent" class="tab-content">
        <div id="all-domain-offers" class="tab-pane fade  active show">
          @include('offers.all-domain-offers')
        </div>
        <div id="exclusive-domain-offers" class="tab-pane fade">
          @include('offers.exclusive-domain-offers')
        </div>
        <div id="special-domain-offers" class="tab-pane fade">
          @include('offers.special-domain-offers')
        </div>
        <div id="regular-domain-offers" class="tab-pane fade">
          @include('offers.regular-domain-offers')
        </div>
      </div>
    </div>
</section>
@include('layouts.master.footer')