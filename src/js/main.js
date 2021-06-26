//Fancybox 3
jQuery('[data-fancybox="gallery"]').fancybox({
    buttons : [
        'zoom',
        'close'
    ],
    loop: false,
    gutter : 10,
    keyboard: true,
    arrows: true,
    infobar: true,
    smallBtn: true,
    toolbar: false,
    slideShow: {
        autoStart: false    ,
        speed: 1000
    },
    thumbs : {
        autoStart : true
    }
});


jQuery( document ).ready(function() {
    //Ajax search form
    jQuery('#filter').submit(function(){
        jQuery("#filter #page").val(1);
        sendPropertiesAjax();
        return false;
    });

    jQuery(".service-fee-label").text("Service fee");
    jQuery(".total-label").text("Total");

    jQuery( "#datepicker_start input, #datepicker_end input, .af-field-guests select " ).change(function(e) {
        var start = jQuery( "#datepicker_start input").val();
        var end = jQuery( "#datepicker_end input").val();
        var guests = jQuery( ".af-field-guests select").val();


        if (start && end && guests) {
            var m1 = moment(end,'YYYYMMDD');
            var m2 = moment(start,'YYYYMMDD');
            var diff = moment.preciseDiff(m1, m2, true);
            var price = jQuery("#property-price").val();
            var service_fee = parseInt(jQuery("#service-fee").val());
            var subtotal = parseInt(diff.days * price);
            var total = subtotal + service_fee;

            jQuery(".subtotal-label").text("$" + price + " x " + diff.days + "nights");
            jQuery(".subtotal input").val(subtotal);
            jQuery(".subtotal-label-2").text("$" + subtotal);

            jQuery(".service-fee input").val(service_fee);
            jQuery(".service-fee-label-2").text("$" + service_fee);

            jQuery(".total input").val(total);
            jQuery(".total-label-2").text("$" + total);

        }

    });
});

//Pagination
jQuery('body').on('click', '.pagination .page-link', function(e) {
    e.preventDefault();
    var url_string = this.href;
    var url = new URL(url_string);
    var page = url.searchParams.get("page");
    jQuery("#filter #page").val(page);
    jQuery('.pagination .page-item').removeClass('active current');
    jQuery(this).parent().addClass('active current');
    sendPropertiesAjax();
});

function sendPropertiesAjax() {
    var filter = jQuery('#filter');
    jQuery.ajax({
        url:filter.attr('action'),
        data:filter.serialize(), // form data
        type:filter.attr('method'), // POST
        beforeSend:function(xhr){
            filter.find('button').text('Processing...'); // changing the button label
        },
        success:function(data){
            filter.find('button').text('Apply filter'); // changing the button label back
            jQuery('#response').html(data); // insert data
        }
    });
}

