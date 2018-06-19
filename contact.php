<?php require 'layout/header.php' ?>

<div class="oremitContainer">

 <section id="banner">
      <div class="contactBannerContainer">
        <div class="contactColor">
          <div class="bannerContent">

            <?php require 'layout/nav.php' ?>

             <div class="col-md-12 intro-body">
                  <div class="col-md-12 intro1">
                      <div class="col-md-12 btext">WE KNOW YOU NEED </div>
                      <div class="col-md-12 btext">
                          <div class="btext "> A <span class="colorit">RELIABLE</span> PARTNER</div>
                          
                      </div>
                  </div>

                  <div class="intro2">
                      <button type="button" class="btn btn-light"data-toggle="modal" data-target="#hireUs">Hire Us</button>
                  </div>
              </div>

            </div>
        </div>
    </div>
</section>

<section id="map">
	<div class="mapContainer">

		<div class="partnerHeader">
          <div class="partnerIcon">
            <i class="fas fa-globe"></i>
          </div>
          <div class="serviceHeader">
            LOCATE US
          </div>
        </div>

		<div class="mapArea">
	       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.7562871698374!2d6.981000792200595!3d4.81185760385923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069cef3f14b6751%3A0xbd201f3a31c6973b!2sAll+Saint&#39;s+Anglican+(Izon)+Church!5e0!3m2!1sen!2sng!4v1529410566468" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
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