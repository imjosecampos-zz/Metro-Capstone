jQuery(function($) {
    setTimeout(function() {
        $( document ).off( 'click', 'td.product-remove > a'); 
    }, 50);
});