$(document).ready(function() {
    // Handler for .ready() called.
    $('html, body').animate({
        scrollTop: $('.intro-footer2').offset().top
    }, 1000);
});
$(document).ready(function() {
    // Handler for .ready() called.
    // $('html, body').animate({
    //     scrollTop: $('.intro-footer2').offset().top
    // }, 1000);

    var phrases = [
        'Innovation',
        'Excellence',
        'Quality',
    ];
    var len = phrases.length;
    var index = 0;

    var ctrl = bubbleText({
        element: $('#bubble'),
        newText: phrases[index++],
        letterSpeed: 00,
        repeat: Infinity,
        timeBetweenRepeat: 2500,
        callback: function() {
            this.newText = phrases[index++ % len];
        },
    });


    var phrases = [
        'Innovation',
        'Excellence',
        'Quality',
    ];
    var len = phrases.length;
    var index = 0;

    var ctrl = bubbleText({
        element: $('#bubble2'),
        newText: phrases[index++],
        letterSpeed: 300,
        repeat: Infinity,
        timeBetweenRepeat: 2500,
        callback: function() {
            this.newText = phrases[index++ % len];
        },
    });

    console.log("animate");
});


function nav_animate() {
    document.getElementById("myNavbar").style.height = "100%";
    $("#bar1").toggle();
    $("#bar2").toggle();
    $("#bar3").toggle();
    $("#brand").toggle();
    $("#times").toggle();
    $("#navbar-main").toggleClass("navbar-open");
    $("#navbar-main2").toggleClass("navbar-nav-open");

}

function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}

function work() {
    $("#portfolio-tab1").toggleClass("active");
    $("#portfolio-tab2").toggleClass("active");
    $('html, body').animate({
        scrollTop: $('.intro-footer2').offset().top
    }, 1000);
    console.log("clients");
}

// function closeNav() {
//     document.getElementById("myNavbar").style.height = "0%";
//     $("#bar1").toggle();
//     $("#bar2").toggle();
//     $("#bar3").toggle();
//     $("#brand").toggle();
//     $("#times").toggle();
//     $("#navbar-main").toggleClass("navbar-open");
//     $("#navbar-main2").toggleClass("navbar-nav-open");

//}
//  function sendMessage()
// {
//     $('#errormessage').hide();
//     $('#successmessage').hide();

//     var name = $('#Name').val(); // get the value of the input field
//     if (name == "" || name == " ") {
//         $('#errormessage').html("Please enter your Name");
//         $('#errormessage').show(500);
//         //$('input#fullname').focus();
//         return;
//     }

//     var emailCompare = /^([a-z0-9_.-]+)@([da-z.-]+).([a-z.]{2,6})$/; // Syntax to compare against input
//     var email = $('input#E-mail').val().trim().toLowerCase(); // get the value of the input field
//     if (email == "" || !emailCompare.test(email)) {
//         $('#errormessage').html("Please provide a working email address");
//         $('#errormessage').show(500);
//         //$('input#fullname').focus();
//         return;
//     }

//     var comment = $('#message').val(); // get the value of the input field
//     if (comment == "" || comment == " ") {
//         $('#errormessage').html("Please enter your message");
//         $('#errormessage').show(500);
//         //$('input#fullname').focus();
//         return;
//     }

//     $.ajax({
//         type: "POST",
//         url: 'mail.php',
//         data: { name: name, email: email, message: comment },
//         timeout: 6000,
//         error: function(request, error) {

//         },
//         success: function(response) {
//             response = $.parseJSON(response);
//             if (response.success) {
//                 $('#successmessage').html("Great! We'll be in touch.");
//                 $('#successmessage').show(500);
//             } else {
//                 $('#errormessage').html("Please enter your message");
//                 $('#errormessage').show(500);
//             }
//         }
//     });
// }


setTimeout(function() {
    $("#response").fadeOut().empty();
}, 5000);