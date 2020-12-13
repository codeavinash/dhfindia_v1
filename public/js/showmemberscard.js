if(screen.width < 1000){

    $('.members-section-links-show-hide-btn').click(function (e) { 
        let icon = $(this).find('i');
        $(icon).toggleClass('rotate');
        $('.members-section-links').toggleClass('show-section-links');
    });

}