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

                  
                  <div class="waveDiv">
                    <img src="images/ico-wave.svg">
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