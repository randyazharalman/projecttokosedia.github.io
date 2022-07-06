// (function($){
//     $('showModalBuy').on('click', function(){
//         $('#productTitle').html('Buy')
//         const id = $(this).data('id')
//     })
// })

$('.showModalBuy').on('click', function(){
    const id = $(this).data('id');

    $.ajax({
        url: 'http://localhost/tokosedia/public/products/getmodalbuy',
        data: {id : id},
        method: 'post',
        dataType: 'json',

        success: function(data){

           $('#nameproduct').val(data.name_product) 
        }
    })
})