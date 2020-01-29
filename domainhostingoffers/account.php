<?php include 'header.php'; ?>
<section id="banner-main">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <div class="page_heading">
          <h1>Account</h1>
        </div>
      </div>
      <div class="col-md-12">
        <div class="breadcrumb-section">
          <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">My Account</li>
             </ol>
          </nav>


        </div>

      </div>



    </div>

  </div>




</section>
<section id ="account-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <section id="tabs" class="account-tab">
          <div class="col-xl-12">


  <nav>
    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#personal" role="tab" aria-controls="nav-home" aria-selected="true">Personal Information</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#reset-password" role="tab" aria-controls="nav-profile" aria-selected="false">Reset Password</a>
      </div>
  </nav>
    <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="nav-home-tab">
      <div class="col-md-12">
        <div class="personal-header">
          <h1>Basic Info</h1>
          <h3>You can edit your personal info here</h3>

        </div>
        <div class="personal-form">
          <div class="row">
            <div class="col-md-12">
              <form class="personal-form-body" action="index.html" method="post">
                <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                   <label for="exampleInputEmail1">Full Name</label>
                   <input type="text" name="fullname" class="form-control" id="exampleInputName" value="" aria-describedby="emailHelp" placeholder="Full Name">
                 </div>
                 </div>
                     <div class="col-md-6">
                       <div class="form-group">
                         <label for="exampleInputEmail1">Username</label>
                         <input type="text" name="username" class="form-control" id="exampleInputUsername" value="" aria-describedby="emailHelp" placeholder="Username" readonly>
                       </div>

                     </div>
                   </div>
                   <div class="row">


                   <div class="col-md-6">
                     <div class="form-group">
                       <label for="exampleInputEmail1">Email address</label>
                       <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="" aria-describedby="emailHelp" placeholder="Email" readonly>
                       <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                     </div>
                    </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Mobile Number</label>
                            <input type="text" name="mobile" class="form-control" id="exampleInputMobile" value="" aria-describedby="emailHelp" placeholder="Enter Mobile Number">
                          </div>

                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Country</label>
                            <input type="text" name="country" class="form-control" id="exampleInputCountry" value="" aria-describedby="emailHelp" placeholder="Enter Country">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="exampleInputEmail1">City</label>
                            <input type="text" name="city" class="form-control" id="exampleInputCity" value="" aria-describedby="emailHelp" placeholder="Enter City">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Street Address</label>
                            <input type="text" name="address" class="form-control" id="exampleInputEStreet" value="" aria-describedby="emailHelp" placeholder="Enter Street Address">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Post Code</label>
                            <input type="text" name="post_code" class="form-control" id="exampleInputEPostCode" value="" aria-describedby="emailHelp" placeholder="Enter Post Code">
                          </div>
                        </div>

                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <button type="submit" class="btn btn-secondary btn-lg btn-block">Submit Offer</button>

                        </div>

                      </div>
              </form>

            </div>

          </div>

        </div>

      </div>
  </div>
      <div class="tab-pane fade" id="reset-password" role="tabpanel" aria-labelledby="nav-profile-tab">
        <div class="col-md-12">
          <div class="personal-header">
            <h1>Reset Password</h1>
            <h3>You can Change your Password here</h3>

          </div>
          <div class="personal-form">
            <div class="row">
              <div class="col-md-12">
                <form class="personal-form-body" action="index.html" method="post">
                  <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                     <label for="exampleInputEmail1">Current Password</label>
                     <input type="text" name="old_password" class="form-control" id="exampleInputName" value="" aria-describedby="emailHelp" placeholder="Enter Current Password">
                   </div>
                   </div>
                       <div class="col-md-6">
                         <div class="form-group">
                           <label for="exampleInputEmail1">New Password</label>
                           <input type="text" name="new_password" class="form-control" id="exampleInputUsername" value="" aria-describedby="emailHelp" placeholder="Create New Password">
                         </div>

                       </div>
                     </div>
                        <div class="row">
                          <div class="col-md-12">
                            <button type="submit" class="btn btn-secondary btn-lg btn-block">Submit Offer</button>

                          </div>

                        </div>
                </form>

              </div>

            </div>

          </div>

        </div>
      </div>
    </div>
      </div>
  </section>


      </div>

    </div>

  </div>

</section>
<!-- <script>
  $(document).ready(function() {
      $('#personal').DataTable();
      $('#reset-password').DataTable();
  } );

</script> -->









<?php include 'footer.php'; ?>
