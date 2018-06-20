<?php
  
  $pageTitle = ".::About Us - We're innovative, excellence Driven and custormer's choice driven";
  $about = 'active';
  $pageDescription = "";
  $pageKeywords = "";

?>
<?php require 'layout/header.php' ?>
    
<div class="oremitContainer">
  

    <section id="banner">
      <div class="aboutBannerContainer">
        <div class="aboutBannerColor">
          <div class="bannerContent">

            <?php require 'layout/nav.php' ?>
        
              <div class="col-md-12 intro-body">
                  
                  <div class="largeText">
                    BUILDING AFRICA'S power solution COMPANY OF 
                  <span class="colorit">
                    CHOICE
                  </span>

                  </div>


                  
                  <a href="#" class="nextArrow" >
                    <i class="fas fa-briefcase"></i>
                  </a>

                  <div class="smallMidText">
                    Oremit Ventures Limited is an innovative company that provides cutting-edge and state-of-the-art  power, security, funiture, oil and gas solutions that are cost-effective, scalable, secure and ingenious to improve your business and enable you to achieve your goals. 
                  </div>

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

  </body>
</html>