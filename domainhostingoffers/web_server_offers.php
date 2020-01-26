<?php include 'header.php' ?>

<section id="banner-main">
  <div class="container">
    <div class="row">
      <div class="page_heading">
        <h1>Web-Server Offers</h1><br>

      </div>
      <div class="breadcrumb-section" style="margin-left:-412px;">
        <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Web-server offers</li>
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
            <a class="show active" data-target="#all-web_server-offers" data-toggle="tab" href="">All Offers</a>
          </li>
          <li class="nav-item">
            <a data-target="#exclusive-web_server-offers" data-toggle="tab" href="">Exclusive Offers</a>
          </li>
          <li class="nav-item">
            <a data-target="#special-web_server-offers" data-toggle="tab" href="">Special offers</a>
          </li>
          <li class="nav-item">
            <a data-target="#regular-web_server-offers" data-toggle="tab" href="">Regular Offers</a>
          </li>

        </ul>
        </div>
        <div class="col-md-3">
        </div>
       </div>
       <div id="tabsJustifiedContent" class="tab-content">
                    <div id="all-web_server-offers" class="tab-pane fade  active show">
            <?php include 'all-web_server-offers.php'; ?>
              </div>
                    <div id="exclusive-web_server-offers" class="tab-pane fade">
                      <?php include 'exclusive-web_server-offers.php'; ?>
                    </div>
                    <div id="special-web_server-offers" class="tab-pane fade">
                       <?php include 'special-web_server-offers.php'; ?>
                    </div>
                     <div id="regular-web_server-offers" class="tab-pane fade">
                        <?php include 'regular-web_server-offers.php'; ?>
                     </div>

      </div>

    </div>



</section>










<?php include 'footer.php' ?>
