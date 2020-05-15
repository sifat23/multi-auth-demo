$(document).ready(function(){
    if( $("#error-copy").children().length > 0) {
        $("#error-box").css('display', 'block');
        setTimeout(function(){ 
            $("#error-box").slideUp(); 
        }, 5000);
    }
    

    $('#add-question').click(function() {
        console.log("working");
        $('#question-section').append('<div class="form-group"><input type="text" class=="form-control" placeholder="Question "></div>');
    })

    $('.box-pick').click(function() {
        console.log("working");
    });

    $(document).ready(function() {
        $('#myframe').attr('src', 'http://127.0.0.1:8000/storage/HD-Masha_Allah_(Sultan-The_Saviour)(sumirbd.mobi).mp4');
    });
});