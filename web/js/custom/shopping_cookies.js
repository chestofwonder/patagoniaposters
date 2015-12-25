$(document).ready(function(){
  
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

});
