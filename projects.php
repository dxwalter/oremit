<?php
  
  $pageTitle = ".:Projects By Oremit";
  $project = 'active';
  $pageDescription = "Oremit Ventures Limited is an innovative company that provides cutting-edge and state-of-the-art  power, security, funiture, oil and gas solutions that are cost-effective, scalable, secure and ingenious to improve your business and enable you to achieve your goals."; 
?>

<?php require 'layout/header.php' ?>
<link href="css/popUp.css" rel="stylesheet">
<div class="oremitContainer">
  

<section id="banner">
      <div class="projectBannerContainer">
        <div class="projectBannerColor">
          <div class="bannerContent">

            <?php require 'layout/nav.php' ?>

             <div class="col-md-12 intro-body">
                  <div class="col-md-12 intro1">
                      <div class="col-md-12 btext">Services Delivered.</div>
                      <div class="col-md-12 btext">
                          <div class="btext "> We're <span class="colorit">Capable</span> &amp; <span class="colorit">RELIABLE</span></div>
                          
                      </div>
                  </div>

                  <div class="intro3">
                      <button type="button" class="btn btn-light" data-toggle="modal" data-target="#hireUs">Hire Us</button>
                  </div>
              </div>

            </div>
        </div>
    </div>
</section>



  <section id="services">
    
      <div class="serviceContainer2">
          <div class="partnerIcon">
            <i class="fas fa-check-circle"></i>
          </div>
          <div class="headerTitle">
            <?php

              if (isset($_GET["solar"])) {
                echo "Solar Systems";
              } else if (isset($_GET["battery"])) {
                echo "Inverter, Battery & UPS";
              } else if (isset($_GET["camera"])) {
                echo "Surveillance Cameras (CCTV)";
              } else if (isset($_GET["office"])) {
                echo "Home & Office Furnitures";
              } else if (isset($_GET["oil"])) {
                echo "Oil and Gas Service";
              } else echo "Our Marks Of Excellence";

            ?>
      </div>
      

        <div class="fullWidth">
            <div class="row gallery">
            
              <?php require 'layout/solar.php'; ?>
              <?php require 'layout/ups.php'; ?>
              <?php require 'layout/furniture.php'; ?>
              <?php require 'layout/cctv.php'; ?>
              <?php require 'layout/oil.php'; ?>

            </div>
        </div>


      </div>

  </section>

  <section id="valuesCore">
    <div class="valuesContainer">
      <div class="valueOpacity">
        <div class="headerImg"><img src="images/headerImg.png"></div>
        <div class="serviceHeader colorWhite">
            OUR CORE VALUES
        </div>
        <div class="headerTitle colorWhite">How we create a world of possibilities</div>

        <div class="row valueMananger">

          <div class="col-md-4">
            <div class="cards valueContent">
              <div class="valueHeader">Customers First</div>
              <div class="valueMessage">
                We are customer focused and because we
                understand the local needs of our community, we provide innovative service to help business and individuals strive for greater heights.
              </div>
            </div>
          </div>


            <div class="col-md-4">
            <div class="cards valueContent">
              <div class="valueHeader">Business Innovations </div>
              <div class="valueMessage">
                When clients meet us with a problem we take it as ours. This enables us to think of innovative ways to develop sustainable and affordable solutions to meet their needs. We push ourselves to the point the customer is satisfied
              </div>
            </div>
          </div>


            <div class="col-md-4">
            <div class="cards valueContent">
              <div class="valueHeader">Excellent Result</div>
              <div class="valueMessage">
                We believe in Oremit Ventures Limited That until a customer is satisfied with our job, excellent service has not been achieved.
              </div>
            </div>
          </div>

          
        </div>

        <div class="hireDiv">
          <button type="button" class="btn btn-light" data-toggle="modal" data-target="#hireUs">Hire Us</button>
        </div> 

        </div>

      </div>
    </div>
  </section>

  <section id="partners">
    <div class="partnersContainer">
        <div class="partnerHeader">
          <div class="partnerIcon">
            <i class="fas fa-handshake"></i>
          </div>
          <div class="serviceHeader">
            OUR PARTNERS
          </div>
        </div>

        <div class="row valueMananger">
          <div class="col-md-2 partnerHover">
            <img src="images/partners/gigasec.jpg">
          </div>
          <div class="col-md-2 partnerHover">
            <img src="images/partners/haustrom.jpg">
          </div>
          <div class="col-md-2 partnerHover">
            <img src="images/partners/mecury.jpg">
          </div>
          <div class="col-md-2 partnerHover">
            <img src="images/partners/okaya.jpg">
          </div>
          <div class="col-md-2 partnerHover">
            <img src="images/partners/staba.jpg">
          </div>
          <div class="col-md-2 partnerHover">
            <img src="images/partners/staba.jpg">
          </div>

        </div>

    </div>
  </section>

  <?php require 'layout/footer.php' ?>

</div>

<?php require 'layout/js.php'; ?>

<script type="text/javascript">
  $('#moveNext').click(function() {
    $('html, body').animate({
        scrollTop: $('#services').offset().top
    }, 1000);
    console.log("contact");
});
</script>

<script type="text/javascript" src="js/popUp.js"></script>

<script type="text/javascript">
  
$(document).ready(function() {
    $('.gallery').magnificPopup({

          delegate: 'a',
          type: 'image',
          tLoading: 'Loading image #%curr%...',
          mainClass: 'mfp-img-mobile',
          gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
          },

          image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
              return item.el.attr('title');
            }
          }
    });
});

</script>

  </body>
</html>