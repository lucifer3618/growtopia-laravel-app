$(document).ready(function(){

    rating_data = 0;

    $(document).on('mouseenter', '.star', function(){
        var rating = $(this).data('index');
        for(var i = 1; i<= rating; i++){
            $('#star_'+i).addClass('star-select');
        }
    });


    function reset_stars(){
        for(var i = 1; i<= 5; i++){
            $('#star_'+i).removeClass('star-select');
        }

        for (var i = 1; i <= rating_data; i++) {
            $('#star_' + i).addClass('star-select');
        }
    }

    $(document).on('mouseleave', '.star', function(){
        reset_stars();
    });

    $(document).on('click', '.star', function(){
        rating_data = $(this).data('index');
    });

});


