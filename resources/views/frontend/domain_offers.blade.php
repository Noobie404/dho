@include('layouts.master.header')
<section id="banner-main">
  <div class="container">
    <div class="row">
      <div class="page_heading">
        <?php 
        $title2 = explode('-', Request::segment(1));
        $title = ucfirst($title2[0]);
        ?>
        <h1>{{$title}} Offers</h1><br>
      </div>
      <div class="breadcrumb-section">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$title}} offers</li>
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
              <a class="show active" data-target="#all-{{$title}}-offers" data-toggle="tab" href="">All Offers</a>
            </li>
            <li class="nav-item">
              <a id="exclusive-{{$title}}" data-target="#exclusive-{{$title}}-offers" data-toggle="tab" href="">Exclusive Offers</a>
            </li>
            <li class="nav-item">
              <a id="special-{{$title}}" data-target="#special-{{$title}}-offers" data-toggle="tab" href="">Special offers</a>
            </li>
            <li class="nav-item">
              <a id="regular-{{$title}}" data-target="#regular-{{$title}}-offers" data-toggle="tab" href="">Regular Offers</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
        </div>
      </div>
      <div id="tabsJustifiedContent" class="tab-content">
        <div id="all-{{$title}}-offers" class="tab-pane fade  active show">
          @include('offers.all-domain-offers')
        </div>
        <div id="exclusive-{{$title}}-offers" class="tab-pane fade">
          @include('offers.exclusive-domain-offers')
        </div>
        <div id="special-{{$title}}-offers" class="tab-pane fade">
          @include('offers.special-domain-offers')
        </div>
        <div id="regular-{{$title}}-offers" class="tab-pane fade">
          @include('offers.regular-domain-offers')
        </div>
      </div>
    </div>
</section>
@include('layouts.master.footer')