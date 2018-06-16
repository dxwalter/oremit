$(document).ready(function () {

    $(document).on('click', "#tabHeader", function() {

        let dataCollector = $(this).attr('data-tab-control');

        alert(dataCollector);

        let activeLink = 'activeLink';

        $(this).addClass(activeLink);
    })

})