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
        return false;
    });

    //Pagination
    jQuery( ".pagination .page-link" ).on( "click", function(e) {
        e.preventDefault();
        var url_string = this.href;
        var url = new URL(url_string);
        var page = url.searchParams.get("page");
        jQuery("#filter #page").val(page);
    });
});



