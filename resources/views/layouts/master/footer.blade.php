<footer>
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
              <div class="promo-code">
                <h3>******** <span class="line"></span></h3> <img src="{!! asset('master/img/unlink.svg') !!}" alt="">
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

<div class="container">
  <div class="row">
    <div class="col-lg-3">
      <div class="footer-text">
        <h3>About Us</h3>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using .</p>

      </div>

    </div>
    <div class="col-lg-2">
      <div class="footer-links1">


     <h3>Important Links</h3>
       <ul class="important-links">
         <li> <a href="#">Domain Offers</a> </li>
         <li> <a href="#">Hosting Offers</a> </li>
         <li> <a href="#">Combo Offers</a> </li>
         <li> <a href="#">Web-Server Offers</a> </li>
       </ul>
       </div>
    </div>
    <div class="col-lg-2">
      <div class="footer-links2">
        <h3>Useful Links</h3>
          <ul class="useful-links">
            <li> <a href="#">Home</a> </li>
            <li> <a href="#">Privacy Policy</a> </li>
            <li> <a href="#">Contact</a> </li>
          </ul>

      </div>

    </div>
    <div class="col-lg-5">
      <div class="footer-subscribe">
        <h3>Subscribe</h3>
        <h4>Join our community and be the first to know.</h4>
        <div class="input-group mb-3">
  <input type="text" class="form-control subscribe-form" placeholder="Your Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary subscribe-button" type="button">Subscribe us</button>
  </div>
</div>
      </div>

    </div>
  </div>
</div>
<div class="footer-bottom">
  <h3>Copyright © 2019 All Rights Reserved, A brand of Innovadeus Pvt. Ltd.</h3>
</div>

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
    function modal_open(id){
        $.ajax({

            url: '/promo-code',
            type: 'post',
            data: {
                id: id,
                '_token': $('meta[name="csrf-token"]').attr('content'),
            },
            dataType: 'json',
            success: function(response) { 

                $('#cus-order-table').empty();
                var len = response.length;
                    
                    //$("#cus-order-table").append('');
              
        // loadjscssfile("/master/css/bootstrap4-toggle.min.css", "css");
            }

            
        });
    }
  </script>
</html>
