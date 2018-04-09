$(document).ready(function(){
    var bodyWidth = parseInt( $( 'body' ).css( 'width' ).replace( 'px', '' ) ) - 255;
    $('.rightSide').css('width', bodyWidth+'px');
});