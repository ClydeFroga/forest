jQuery(function ($) {

    $('#archiveLoad').click(function(){
        $('#archiveLoad > span').text('Загружаю...');
        var data = {
            'action': 'archiveloadmore',
            'offset': offset,
        };
        $.ajax({
            url:ajaxurl,
            data:data,
            type:'POST',
            success:function(data){
                if( data ) {
                    $('.magazine2').append(data);
                    offset += 9;
                }
                else {
                    $('#archiveLoad').remove();
                }
            }
        });
    });

    $('#rubricLoad').click(function(){
        $('#rubricLoad > span').text('Загружаю...');
        var data = {
            'action': 'loadmore',
            'query': true_posts,
            'page' : current_page
        };
        $.ajax({
            url:ajaxurl,
            data:data,
            type:'POST',
            success:function(data){
                if( data ) {
                    $('.horizontalBar4').append(data);
                    $('#rubricLoad > span').text('Загрузить ещё')
                    current_page++;
                    if (current_page == max_pages) $("#rubricLoad").remove();
                } else {
                    $('#rubricLoad').remove();
                }
            }
        });
    });

});