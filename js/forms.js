function send_mail() {

    
    $('#response2').show();

    var fname = $('#mail_fname').val(); // get the value of the input field
    if (fname == "") {
        $('#response2').html("Please enter your first and last name <font color='red'><i class='fas fa-exclamation-triangle'></i></font>");
        return;
    }


    var contact = $('#contactDetails').val();
    if (contact.length < 5) {
        $('#response2').html("Enter your email address or phone number <font color='red'><i class='fas fa-exclamation-triangle'></i></font>");
        return;
    }

    var msg = $('#mail_msg').val(); // get the value of the input field

    if (msg == "") {
        $('#response2').html("Please enter Your Message <font color='red'><i class='fas fa-exclamation-triangle'></i></font>");
        
        return;

    }

    
    var name = $('#mail_fname').val();
    var contact = $('#contactDetails').val();;
    var msg = $('#mail_msg').val();
    var type = "contact";
    var url = "mail.php";

    $('#response2').html("<span class='fa fa-spinner fa-spin' id='spin'></span>");


    $.ajax({
        type: "POST",
        url: url,
        data: {'name' : name, 'contact' : contact, 'msg' : msg, 'msgType':type},
        success: function(response) {
            $('#response2').empty();
            $('#response2').html(response);
        }
    });
    
}





function quoteMail() {

    
    $('#response1').show();

    var fname = $('#quoteName').val(); // get the value of the input field
    if (fname == "") {
        $('#response1').html("Please enter your first and last name <font color='red'><i class='fas fa-exclamation-triangle'></i></font>");
        return;
    }


    var contact = $('#quoteContact').val();
    if (contact.length < 5) {
        $('#response1').html("Enter your email address or phone number <font color='red'><i class='fas fa-exclamation-triangle'></i></font>");
        return;
    }

    var quoteService = $('#quoteService').val(); // get the value of the input field
    if (quoteService == "") {
        $('#response1').html("Select a service <font color='red'><i class='fas fa-exclamation-triangle'></i></font>");
        
        return;

    }

    var quoteBudget = $('#quoteBudget').val(); // get the value of the input field

    if (quoteBudget == "") {
        $('#response1').html("Select a budget <font color='red'><i class='fas fa-exclamation-triangle'></i></font>");
        
        return;

    }

    var quoteMessage = $('#quoteMessage').val();
    if (quoteMessage.length < 5) {
        $('#response1').html("Kindly explain what you want to achieve in the big box below <font color='red'><i class='fas fa-exclamation-triangle'></i></font>");
        return;
    }

    $('#response1').html("<span class='fa fa-spinner fa-spin' id='spin'></span>");

    var type = "Request Quote";
    var url = "mail.php";

    let sentData  = {'quoterName':fname,  'quoterContact':contact, 'service':quoteService, 'budget':quoteBudget, 'message':quoteMessage, 'msgType':type};

    $.ajax({
        type: "POST",
        url: url,
        data: sentData,
        success: function(response) {
            $('#response1').empty();
            $('#response1').html(response);
        }
    });
    
}