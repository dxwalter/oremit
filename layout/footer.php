
  <section id="footer">
    <div class="container-fluid remove" id="contactArea">
        <div class="row remove">
            <div class="col-md-8 remove footer-div1">
                <div class="footer-img">
                    <form action="" method="post">
                        <div class="row">

                            <div id="response2" class="col-md-12 contact-div"></div>

                            <div class="col-md-6 contact-div">
                                <input type="text" class="form-control contact"id="mail_fname" placeholder="Name " name="Name" >
                            </div>
                            <div class="col-md-6 contact-div">
                                <input type="text" class="form-control contact" id="contactDetails" placeholder="Email or Phone number " name="contact">
                            </div>
                            <div class="col-md-12 contact-div">
                                <textarea class="form-control contact" rows="4" id="mail_msg" name="message" placeholder="Message" ></textarea>
                            </div>
                            <div class="col-md-12 contact-div" align="right">
                                <button type="button"  class="btn btn-primary" onclick="send_mail()">Submit</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
            <div class="col-md-4 remove footer-div2">
               
                <div>
                  <a href="#">
                    <i class="fab fa-instagram"></i> 
                  </a>
                  Oremit Ventures
                </div>

                <div>
                  <a href="#">
                    <i class="fab fa-facebook-square"></i>
                  </a>
                  Oremit Ventures
                </div>
                                
                <div>
                  <a href="tel:234 80 3707 3110">
                    <i class="fa fa-phone-square"></i> 
                  +234 80 3707 3110 </a>
                </div>


                <div>
                  <a href="tel:234 80 3707 3110">
                    <i class="fa fa-phone-square"></i> 
                    +234 80 6665 0378
                  </a>
                </div>

                <div>
                  <a href="#">
                    <i class="fa fa-envelope"></i> 
                    info@oremit.com.ng
                  </a>
                </div>

                <div><i class="fa fa-map-marker"></i> 
                    39 Ada-George road, opposite Eagle palace hotel,
                    Port Harcourt Rivers State Nigeria
                </div>
            </div>
            <div class="col-md-12 footer-bottom">
                © Oremit Ventures 2018 | Web Design: 
                <a href="tel:2348104686729">Daniel Walter.</a>
            </div>
        </div>
    </div>
  </section>  










  <div class="modal fade" id="hireUs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          What do you want to achieve?
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="" method="post">
            <div class="row">

                <div id="response1" class="col-md-12 contact-div"></div>

                <div class="col-md-6 contact-div">
                    <input type="text" class="form-control" id="quoteName" placeholder="Full names" name="Name">
                </div>
                <div class="col-md-6 contact-div">
                    <input type="email" class="form-control" id="quoteContact" placeholder="E-mail or Phone Number" name="contact">
                </div>

               <div class="col-md-6 contact-div">
                    <select class="form-control" id="quoteService">
                      <option selected="true" value="">Select a Service</option>
                      <option value="Solar Power">Solar Panel</option>
                      <option value="Surveillance Camera">Surveillance Camera</option>
                      <option value="Inverter and Batteries">Inverter and Batteries</option>
                      <option value="Office Equipments">Office Equipments</option>
                      <option value="Oil and Gas">Oil and Gas</option>
                    </select>
                </div>
                <div class="col-md-6 contact-div">
                    <select class="form-control" id="quoteBudget">
                      <option selected="true" value="">Choose a Budget</option>
                      <option value="₦0 - #100,000">₦0 - #100,000</option>
                      <option value="₦100,000 - #500,000">₦100,000 - #500,000</option>
                      <option value="₦500,000 - #1,000,000">₦500,000 - #1,000,000</option>
                      <option value="₦1,000,000+">₦1,000,000+</option>
                    </select>
                </div>

                <div class="col-md-12 contact-div">
                    <textarea class="form-control" rows="4" id="quoteMessage" name="message" placeholder="Briefly explain your need" required></textarea>
                </div>
                
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="quoteMail()">Submit</button>
      </div>
    </div>
  </div>
</div>