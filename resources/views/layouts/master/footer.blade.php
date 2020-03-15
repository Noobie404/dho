<footer>
  <?php 
  $about_us = DB::table('about_us')->select('about')->first();
  ?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <img class="cross" src="{!! asset('master/img/cross.svg') !!}" alt="">
        </button>

      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
                <img class="img-fluid pop-img" src="{!! asset('master/img/pop-up.svg') !!}" alt="">
            </div>
            <div class="col-md-5">
              <div class="promo-header">
                <h2>Your Promo Code</h2>
              </div>
              <div class="promo-des">
                <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth.</p>
              </div>
              <input type="text" name="tooltip-modal" id="tooltip-modal" style="height: 0px;width: 0px;opacity: 0;">
              <div class="promo-code">
                <h3 id="stars">******** </h3><span class="line"></span> 
                <div class="tooltip2">
                  <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                  <img  onclick="myFunction(); return false;" onmouseout="outFunc()" src="{!! asset('master/img/unlink.svg') !!}" alt="">
                </div>
              </div>
              <div class="promo-note">
                <h2>Thanks For Purchasing!</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalMore" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <img class="cross" src="{!! asset('master/img/cross.svg') !!}" alt="">
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
          <div class="col-md-12">
              <div class="">
                <h3 id="detail-header"></h3>
              </div>
              <div class="product-table">
                <table class="table table-bordered table-hover table-striped">
                  <tr>
                    <td style="width: 30%"> <strong>Sub-title</strong></td>
                    <td style="width: 70%" id="sub-title-more"></td>
                  </tr>
                  <tr>
                    <td style="width: 30%"> <strong>Category</strong></td>
                    <td style="width: 70%" id="product_cat_more"></td>
                  </tr>
                  <tr>
                    <td style="width: 30%"> <strong>Type</strong></td>
                    <td style="width: 70%" id="offer_cat_more"></td>
                  </tr>
                  <tr>
                    <td style="width: 30%"> <strong>Provider Name</strong></td>
                    <td style="width: 70%" id="provider_more"></td>
                  </tr>
                  <tr>
                    <td style="width: 30%"> <strong>Start Date</strong></td>
                    <td style="width: 70%" id="start_time_more"></td>
                  </tr>
                  <tr>
                    <td style="width: 30%"> <strong>End Date</strong></td>
                    <td style="width: 70%" id="end_time_more"></td>
                  </tr>
                  <tr>
                    <td style="width: 30%"> <strong>Price</strong></td>
                    <td style="width: 70%" id="price_more"></td>
                  </tr>
                  <tr>
                    <td style="width: 30%"> <strong>Offer Note</strong></td>
                    <td style="width: 70%" id="offer_note_more"></td>
                  </tr>
                  <tr>
                    <td style="width: 30%"> <strong>Description</strong></td>
                    <td style="width: 70%" id="description_more"><p></p></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-3">
      <div class="footer-text">
        <h3>About Us</h3>
        <p>{!! $about_us->about !!}</p>

      </div>

    </div>
    <div class="col-lg-2">
      <div class="footer-links1">


     <h3>Offers</h3>
       <ul class="important-links">
         <li> <a href="{{route('DomainOffer')}}">Domain</a> </li>
         <li> <a href="{{route('HostingOffer')}}">Hosting</a> </li>
         <li> <a href="{{route('CombogOffer')}}">Combo</a> </li>
         <li> <a href="{{route('WebservergOffer')}}">Web-Server</a> </li>
         <li> <a href="{{route('AllExpiredOffer')}}">Expired</a> </li>
       </ul>
       </div>
    </div>
    <div class="col-lg-2">
      <div class="footer-links2">
        <h3>Useful Links</h3>
          <ul class="useful-links">
            <li> <a href="{{route('/')}}">Home</a> </li>
            <li> <a href="#!">Privacy Policy</a> </li>
            <li> <a href="#!">Contact</a> </li>
            <li> <a href="#!">About Us</a> </li>
            <li> <a href="#!">Terms & Conditions</a> </li>
          </ul>

      </div>

    </div>
    <div class="col-lg-5">
      <div class="footer-subscribe">
        <h3>Subscribe</h3>
        <h4>Join our community and be the first to know.</h4>
        <div class="input-group mb-3">
  <input type="text" id="subscribe" class="form-control subscribe-form" placeholder="Your Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button id="btnValidate" class="btn btn-outline-secondary subscribe-button" type="button">Subscribe us</button>
  </div>
</div>
      </div>

    </div>
  </div>
</div>
<div class="footer-bottom">
  <h3>Copyright © {{Date('Y')}} All Rights Reserved, A brand of <a style="color: #000;" href="https://innovadeus.com" target="_blank">Innovadeus Pvt. Ltd.</></h3>
</div>
<script src="js/sweetalert.min.js"></script>
<script type="text/javascript" src="{!! asset('master/js/owl.carousel.js') !!}"> </script>
<script type="text/javascript" src="{!! asset('master/js/owl.carousel.min.js') !!}"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="{!! asset('master/js/bootstrap-datetimepicker.js') !!}"></script>
<script src="{!! asset('master/js/bootstrap-datetimepicker.min.js') !!}"></script>
<script src="https://kit.fontawesome.com/73605b6102.js" crossorigin="anonymous"></script>
<script type="text/javascript">

$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText: [
      '<img aria-label="' + 'Previous' + '" src="{!! asset('master/img/back.svg') !!}">',
      '<img aria-label="' + 'Previous' + '" src="{!! asset('master/img/next.svg') !!}">'
    ],
    navSpeed: false,
    navElement: 'button type="button" role="presentation"',
    navContainer: false,
    navContainerClass: 'owl-nav',
    navClass: [
      'owl-prev',
      'owl-next'
    ],
    slideBy: 1,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
});
$(".owl-special").owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  navText: [
    '<img aria-label="' + 'Previous' + '" src="{!! asset('master/img/back.svg') !!}">',
    '<img aria-label="' + 'Previous' + '" src="{!! asset('master/img/next.svg') !!}">'
  ],
  navSpeed: false,
  navElement: 'button type="button" role="presentation"',
  navContainer: false,
  navContainerClass: 'owl-nav',
  navClass: [
    'owl-prev',
    'owl-next'
  ],
  slideBy: 1,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:3
      }
  }
});
});


</script>
<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "dd MM yyyy - HH:ii P",
        showMeridian: true,
        autoclose: true,
        todayBtn: true
    });
</script>
</footer>
  </body>
  <script>
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    function modal_open(id){
      $("#order-now-"+id)[0].click();
        $.ajax({

            url: '/promo-code',
            type: 'post',
            data: {
                id: id,
                '_token': $('meta[name="csrf-token"]').attr('content'),
            },
            dataType: 'json',
            success: function(response) { 

                $('#stars').empty();                    
                $("#stars").append('********');
                document.getElementById("tooltip-modal").value = response['promo_code'];
          }
        });
    }
  </script>
  <script>
      $(document).ready(function(e) {
          $('#btnValidate').click(function() {
              var sEmail = $('#subscribe').val();
              if ($.trim(sEmail).length == 0) {
                  swal("Error", "Please enter valid email address !", "error");
              }
              if (validateEmail(sEmail)) {
                  subscribe(sEmail);
              } else {
                  swal("Error", "Invalid Email Address !", "error");
              }
          });
      });

      function validateEmail(sEmail) {
          var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
          if (filter.test(sEmail)) {
              return true;
          } else {
              return false;
          }
      }

      function subscribe(sEmail) {
          $.ajax({
              url: "{{route('subscribe')}}",
              type: 'post',
              cache: false,
              data: {
                  email: sEmail,
                  _token: '{{csrf_token()}}'
              },
              dataType: 'json',
              success: function(response) {
                  if (response == 1) {
                      swal({
                          text: "Mail sent successfully",
                          icon: "success",
                          buttons: true,
                          SuccessMode: true,
                      });
                  } else {
                      swal("Error", "Mail sent failed !", "error");
                  }
              }
          });
      }
  </script>
  <script>
  function open_details(id) {
    $.ajax({
        url: "{{route('product-detail')}}",
        type: 'post',
        cache: false,
        data: {
            id: id,
            _token: '{{csrf_token()}}'
        },
        dataType: 'json',
        success: function(response) {
          if (response['currency'] == 'BDT') {
            var currency = ' TK';
          }else{
            var currency = ' USD';
          }
          var str = response['sub_title'];
          var sub_title = str.replace("~", "");
          $('#detail-header').text('');
          $('#sub-title-more').text('');
          $('#product_cat_more').text('');
          $('#offer_cat_more').text('');
          $('#provider_more').text('');
          $('#start_time_more').text('');
          $('#end_time_more').text('');
          $('#price_more').text('');
          $('#offer_note_more').text('');
          $('#description_more').text('');

          $('#detail-header').append(response['title'] +' '+ response['product_cat'] + ' offer');
          $('#sub-title-more').append(sub_title);
          $('#product_cat_more').append(response['product_cat']+' offer');
          $('#offer_cat_more').append(response['offer_cat']+' offer');
          $('#provider_more').append(response['provider']);
          $('#start_time_more').append(moment(response['offer_start']).format("MMMM Do YYYY, h:mm:ss A"));
          $('#end_time_more').append(moment(response['offer_end']).format("MMMM Do YYYY, h:mm:ss A"));
          $('#price_more').append(response['price'] + currency);
          $('#offer_note_more').append(response['offer_note']);
          $('#description_more').append(response['description']);
        }
    });
  }
  </script>
  <script>
      function myFunction() {

          var code = $('#tooltip-modal').val();
          var copyText = document.getElementById('tooltip-modal');
          copyText.select();
          copyText.setSelectionRange(0, 99999);
          document.execCommand("copy");
    
          var tooltip = document.getElementById("myTooltip");
          tooltip.innerHTML = "Code Copied";

          $("#stars").fadeOut(function() {
            $(this).text(code).fadeIn();
          });
          return false;
      }

      function outFunc() {
          var tooltip = document.getElementById("myTooltip");
          tooltip.innerHTML = "Copy to clipboard";
      }
  </script>
</html>
