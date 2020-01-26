<?php include 'header.php' ?>

<section id="banner-main">
  <div class="container">
    <div class="row">
      <div class="page_heading">
        <h1>Combo Offers</h1><br>

      </div>
      <div class="breadcrumb-section" style="margin-left:-317px;">
        <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Combo offers</li>
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
            <a class="show active" data-target="#all-combo-offers" data-toggle="tab" href="">All Offers</a>
          </li>
          <li class="nav-item">
            <a data-target="#exclusive-combo-offers" data-toggle="tab" href="">Exclusive Offers</a>
          </li>
          <li class="nav-item">
            <a data-target="#special-combo-offers" data-toggle="tab" href="">Special offers</a>
          </li>
          <li class="nav-item">
            <a data-target="#regular-combo-offers" data-toggle="tab" href="">Regular Offers</a>
          </li>

        </ul>
        </div>
        <div class="col-md-3">
        </div>
       </div>
       <div id="tabsJustifiedContent" class="tab-content">
                    <div id="all-combo-offers" class="tab-pane fade  active show">
            <?php include 'all-domain-offers.php'; ?>
              </div>
                    <div id="exclusive-combo-offers" class="tab-pane fade">
                      <?php include 'exclusive-domain-offers.php'; ?>
                    </div>
                    <div id="special-combo-offers" class="tab-pane fade">
                       <?php include 'special-domain-offers.php'; ?>
                    </div>
                     <div id="regular-combo-offers" class="tab-pane fade">
                        <?php include 'regular-domain-offers.php'; ?>
                     </div>

      </div>

    </div>



</section>










<?php include 'footer.php' ?>
