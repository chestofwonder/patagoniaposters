$(document).ready(function(){
  
// ************** Shopping cookies ****************
// 
  // Poster amount recount at the load of the page
  show_shopping_cart_quantity(read_shopping_cart_cookies());
  
 // Add poster to shopping cart
 $('.add_shooping_bag').on('click', function(){
//alert($(this).prop('id'));return;
    //$.removeCookie('www.patagoniaposters.cl:' + $(this).prop('id'));return;
    add_shopping_cart_cookies($(this).prop('id'), $('#quantity_' + $(this).prop('id')).val());
});

function add_shopping_cart_cookies(id, quantity){
 
    if( $.cookie('www.patagoniaposters.cl:' + id) === undefined ){
    $.cookie('www.patagoniaposters.cl:' + id, parseInt(quantity), { 
	expires: 30, path: '/' 
      });
    }else{
      var old_amount = parseInt($.cookie('www.patagoniaposters.cl:' + id));
      
      old_amount += parseInt(quantity);
      
      $.cookie('www.patagoniaposters.cl:' + id, parseInt(old_amount), { 
	expires: 30, path: '/' 
      });
    }

}

function read_shopping_cart_cookies(){
  var amount = 0;
  
  // Iterates thougt poster`s number (always 8)
 for(var i=0;i<=8;i++){
   amount += ($.cookie('www.patagoniaposters.cl:add_poster_' + i) !== undefined) ?  parseInt($.cookie('www.patagoniaposters.cl:add_poster_' + i)) : parseInt(0);
 }

 return amount;
}

function show_shopping_cart_quantity(amount){
  $('#shopping_cart').html(amount);
}

// *********************************************



// *************** Shopping cart ***************

if($('#sending_zone').val()){
  calc_sending_costs();
 
 $('#sending_zone').on('change', function(){
    calc_sending_costs();
 });
}

if($('#subtotal').val()){
  calc_subtotal();
  
  $('.product_quantity input').on('change', function(){
   calc_subtotal();
  });
}

if($('#packaging_quantity').val()){
  
  calc_packaging();
  
  $('#packaging_quantity').on('change', function(){
     calc_packaging();
  });
}

function calc_subtotal(){

  var subtotal = 0;
  var quantity;
  var prize;
   
  $('#table_products tr').each(function(){
    
      quantity = $(this).find('.product_quantity input').val();
      prize = $(this).find('.price_nacional').html();
    
    if( undefined !== quantity && undefined !== prize){
       subtotal += parseInt(quantity) * parseInt(prize);
    }

  });
  
  $('#subtotal').val(parseInt(subtotal));
  calc_total();
}

function calc_sending_costs(){
  
  var sending_zone;
  var currency;
  var sending_cost = 0;
  
  sending_zone = $('#sending_zone').val();
  
  $('#table_products tr').each(function(){
    if(sending_zone === "América 1"){
      currency = "$ch";
      if( undefined !== $(this).find('.price_nacional').html()){
	sending_cost += parseInt($(this).find('.price_nacional').html());
      }
    } else {
      currency = "USD";
       if( undefined !== $(this).find('.price_internacional').html()){
	  sending_cost += parseInt($(this).find('.price_internacional').html());
       }
    }
  });

  $('#sending_costs').val(parseInt(sending_cost));
  $('.currency').html(currency);
  
  calc_total();
}

function calc_packaging(){
  
  var quantity = 0;
  var min_tube = 0;
  
  // Min tube number
  $('#table_products tr').each(function(){
    
    if( undefined !== $(this).find('.product_quantity input').val()){
       quantity += $(this).find('.product_quantity input').val();
    }
  });
  
  min_tube = quantity / 3;
}

function calc_total(){
     $('#total').val(parseInt(parseInt($('#subtotal').val()) + parseInt($('#sending_costs').val())));
}

// *********************************************

});
