$('.likeBtn').on('click', function(e) {
    let that = $(this);
    $.post( "/api.php?p=like", { post_id: $(this).data('id')}).done(function(data) {
        
        console.dir( data ); 

        if(data == 'liked') {
            that.addClass('liked');
        } else {
            that.removeClass('liked');
        }
    });

});