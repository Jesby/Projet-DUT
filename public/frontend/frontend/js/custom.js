$(document).ready(function(){
    
         $('.addToCartBtn').click(function(e){
            e.preventDefault();
               var product_id = $(this).closest('.product_data').find('.prod_id').val();
               var product_qty = $(this).closest('.product_data').find('.qtyinput').val();
            //   alert(product_id);
            //   alert(product_qty);
               $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
    
               $.ajax({
                         method: "POST",
                        url: "/add-to-cart",                   
                   data:{
                            'product_id': product_id,
                            'product_qty': product_qty,
                   },
                      success: function(response)
                     {
                        alert(response.status);
                     }
               });
             });  
             
             $('.addtoliste').click(function(e){
                e.preventDefault();
                   var product_id = $(this).closest('.product_data').find('.prod_id').val();

                   $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
        
                   $.ajax({
                             method: "POST",
                            url: "/add-to-liste",                   
                       data:{
                                'product_id': product_id,
                       },
                          success: function(response)
                         {
                            swal(response.status);
                         }
                   });
                 });         
    
    $('.increment-btn').click(function(e){
        e.preventDefault();

         var var_inc = $(this).closest('.product_data').find('.qtyinput').val();
         var value = parseInt(var_inc,10);
         value = isNaN(value) ? 0 : value; 
         if( value < 10)
         {
             value++;
             $(this).closest('.product_data').find('.qtyinput').val(value);
         }
    });

    $('.decrement-btn').click(function(e){
        e.preventDefault();
        var var_dec = $(this).closest('.product_data').find('.qtyinput').val();
        
         var value = parseInt(var_dec,10);
         value = isNaN(value) ? 0 : value; 
         if( value > 1)
         {
             value--;
             $(this).closest('.product_data').find('.qtyinput').val(value);
         }
    });

    $('.delete-cart-item').click(function(e){
        e.preventDefault();
        
           
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        $.ajax({
            method: "POST",
           url: "delete-cart",                   
      data:{
               'prod_id': prod_id,
       },
         success: function(response){
             window.location.reload();
              alert("Supprimer avec success",response.status, "Supprimer avec success");
        }
  });
       
    });
    
    $('.changeQuantity').click(function(e){
        e.preventDefault();
                $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
          var prod_id = $(this).closest('.product_data').find('.prod_id').val();

          var qty = $(this).closest('.product_data').find('.qtyinput').val();
            data = {
                'prod_id' : prod_id,
                'qtyinput' : qty,
            }
            $.ajax({
                             method: "POST",
                            url: "update-cart",                   
                       data : data,
                      
                          success: function(response)
                         {
                             window.location.reload();
                            // alert(response);
                         }
                   });

        //   
         }); 

});