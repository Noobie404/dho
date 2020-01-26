<?php include 'header.php';?>
<section id="banner-main">
  <div class="container">
    <div class="row">
      <div class="page_heading">
        <h1>Create Offer</h1><br>

      </div>
      <div class="breadcrumb-section" style="margin-left:-280px;">
        <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Submit Offer</li>
           </ol>
        </nav>


      </div>


    </div>

  </div>




</section>


<form class="submit_offer" action="index.html" method="post">

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Offer Cetagory</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01" required>
          <option disabled selected>Choose...</option>
          <option value="1">Domain Offer</option>
          <option value="2">Hosting Offer</option>
          <option value="3">Combo Offer</option>
          <option value="3">Web-Server Offer</option>
        </select>
      </div>

    </div>
    <div class="col-md-6">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Offer Type</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01" required>
          <option disabled selected>Choose...</option>
          <option value="1">Regular Offer</option>
          <option value="2">Exclusive Offer</option>
          <option value="3">Special Offer</option>
        </select>
      </div>

    </div>

  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="input-group input-group-md">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-lg">Product Name</span>
    </div>
    <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" required>
  </div>

    </div>

  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="input-group input-group-md">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-lg">Provider Name</span>
    </div>
    <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" required>
  </div>

    </div>

  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="input-group input-group-md">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-lg">Promo Code</span>
    </div>
    <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
  </div>

    </div>

  </div>
  <div class="row">
    <div class="col-md-6">
      <label for="form_datetime"> Starting Time</label>
      <div class="input-append date form_datetime" data-date="2012-12-21T15:25:00Z">
        <input size="16" type="text" value="" required>
        <span class="add-on"><i class="fas fa-times-circle"></i></span>
        <span class="add-on"><i class="fas fa-th"></i></span>
    </div>

    </div>
    <div class="col-md-6">
      <label for="form_datetime"> Ending Time</label>
      <div class="input-append date form_datetime" data-date="2012-12-21T15:25:00Z">
        <input size="16" type="text" value="" required>
        <span class="add-on"><i class="fas fa-times-circle"></i></span>
        <span class="add-on"><i class="fas fa-th"></i></span>
    </div>

    </div>

  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="input-group input-group-md">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-lg">Offer Note</span>
    </div>
    <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" required>
  </div>

    </div>


  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="input-group mb-3">

  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"required>
  <div class="input-group-append">
    <select class="custom-select" id="currency">
    <option selected value="1">BDT</option>
    <option value="2">USD</option>
  </select>
  </div>

</div>

    </div>

  </div>
  <div class="row">
    <div class="col-md-6">
      <label for="form-control"> Product Purchase Link</label>
      <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">https://example.com/</span>
  </div>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" required>
</div>

    </div>
    <div class="col-md-6">
      <label for="form-control"> Product Detail Link</label>
      <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">https://example.com/</span>
  </div>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" required>
</div>

    </div>

  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">Product Description</span>
        </div>
        <textarea class="form-control" aria-label="With textarea" required></textarea>
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



















<?php include 'footer.php';?>
