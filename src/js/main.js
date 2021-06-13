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