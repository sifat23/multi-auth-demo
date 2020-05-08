$(document).ready(function(){
    if( $("#error-copy").children().length > 0) {
        $("#error-box").css('display', 'block');
        setTimeout(function(){ 
            $("#error-box").slideUp(); 
        }, 5000);
    }
    
});