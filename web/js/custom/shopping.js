$(document).ready(function(){
//remove_all_shopping_cart_cookies();
// ************** Shopping cookies ****************
// 
  var cookies_expirantion_time = 7;
  
  // Poster amount recount at the load of the page
  read_shopping_cart_cookies();
  
 // Add poster to shopping cart
 $('.add_shooping_bag').on('click', function(){

    add_shopping_cart_cookies($(this).prop('id'), $('#quantity_' + $(this).prop('id')).val());
});

function add_shopping_cart_cookies(id, quantity){

    if( $.cookie('www.patagoniaposters.cl:' + id) === undefined ){
    $.cookie('www.patagoniaposters.cl:' + id, parseInt(quantity), { 
	expires: cookies_expirantion_time, path: '/' 
      });
    }else{
      var old_amount = parseInt($.cookie('www.patagoniaposters.cl:' + id));
      
      old_amount += parseInt(quantity);
      
      $.cookie('www.patagoniaposters.cl:' + id, parseInt(old_amount), { 
	expires: cookies_expirantion_time, path: '/' 
      });
    }
    
  read_shopping_cart_cookies();
}

function overwrite_shopping_cart_cookies(id, quantity){
  remove_shopping_cart_cookies(id);
  add_shopping_cart_cookies(id, quantity);
  read_shopping_cart_cookies();
}

function read_shopping_cart_cookies(){
  var amount = 0;
  
  // Iterates thougt poster`s number (always 8)
 for(var i=0;i<=8;i++){
   amount += ($.cookie('www.patagoniaposters.cl:add_poster_' + i) !== undefined) ?  parseInt($.cookie('www.patagoniaposters.cl:add_poster_' + i)) : parseInt(0);
 }

if( amount > 0 ){
 $('#shopping_cart').show();
 $('#shopping_cart').html(amount);
}else{
 $('#shopping_cart').hide();
}

 return amount;
}

function remove_shopping_cart_cookies(id){
  $.removeCookie('www.patagoniaposters.cl:' + id);
  read_shopping_cart_cookies();
  return;
}

function remove_all_shopping_cart_cookies(){
  var cookies = $.cookie();
  for(var cookie in cookies) {
   $.removeCookie(cookie);
  }
  read_shopping_cart_cookies();
}

// *********************************************




// ************ Shopping cart menu icon ************

$('#shopping_cart_icon').on('click', function(){

  window.location.href = 'shopping_step1.php';
});

// *************************************************




// *************** Shopping cart ***************

// Global vars for orders
var total_posters = 0;
var total_collections = 0;
var nacional = false;

if(window.location.href.indexOf("/shopping_step1.php") > -1){

update_order_vars();

if($('#sending_zone').val()){
  calc_sending_costs();
 
 $('#sending_zone').on('change', function(){
    calc_sending_costs();
 });
}

if($('#subtotal').val()){
  calc_subtotal();
  
  $('.product_quantity input').on('change', function(){
   update_order_vars();
   calc_packaging();
   calc_subtotal();
   calc_sending_costs();
  });
}

calc_packaging();

}

function update_order_vars(){
  
var total_products = 0;
// Global vars
total_posters = 0;
total_collections = 0;

$('#table_products tr').each(function(){

  if( undefined !== $(this).find('.product_quantity input').val()){
  
    var poster_name = $(this).find('.poster_mini p img').prop('src');
    
     if( undefined !== poster_name){
       
       var amount = parseInt($(this).find('.product_quantity input').val());
       
        if( poster_name.indexOf('posters08') > -1){
	  total_collections += amount;
	}else{
	  total_posters += amount;
	}
	
      if( amount > 0 )total_products++;
	
	// Re-write the cookie for that product
	var poster_complete_id = $(this).find('.product_quantity input').prop("id");
	var poster_id = poster_complete_id.substr(poster_complete_id.length-1);
	overwrite_shopping_cart_cookies("add_poster_" + poster_id, amount);
     }
    }
  });
  
   $.cookie('total_products', parseInt(total_products), { 
	expires: cookies_expirantion_time, path: '/' 
      });
}

function calc_subtotal(){

  var subtotal = 0;
  var quantity;
  var prize;
   
  $('#table_products tr').each(function(){
    
      quantity = $(this).find('.product_quantity input').val();
      if(nacional){
	 prize = unformatNumber($(this).find('.price_nacional .prize').html());
      }else{
	 prize = unformatNumber($(this).find('.price_internacional .prize').html());
      }
     

    if( undefined !== quantity && undefined !== prize){
       subtotal += parseInt(quantity) * parseInt(prize);
    }

  });
  
  $('#subtotal').val(formatNumber(parseInt(subtotal)));
  calc_total();
}


function calc_sending_costs(){
  
  var sending_zone;
  var currency;

  sending_zone = $('#sending_zone').val();
  
  $('#table_products tr').each(function(){
    if(sending_zone === "América 1"){
      currency = "$ch";
      nacional = true;
    } else {
      currency = "USD";
      nacional = false;
    }
  });

  calc_subtotal();

  $('.currency').html(currency);

  $.ajax({
    method: "POST",
    url: "../sending_costs.php",
    data: { 
      sending_zone: sending_zone, 
      total_posters: total_posters, 
      total_collections: total_collections 
    }
  })
  .done(function( resp ) {
    if( parseInt(resp) ){
      $('#sending_costs').val(formatNumber(resp));
      $('#sending_costs').popover('hide');
      $('#checkout').show();
      calc_total();
    }else{
      $('#sending_costs').val("- - - - -");
      $('#sending_costs').attr('data-content', resp);
      $('#sending_costs').popover('show');
      $('#checkout').hide();
    }
  });
 
}

function formatNumber(number)
{
	number += '';
	x = number.split(',');
	
	x1 = x[0];
	x1 = x1.replace(".", ",");
	x2 = x.length > 1 ? '.' + x[1] : '';
	x2 = x2.replace(".", ",");
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + '.' + '$2');
	}
	return x1 + x2;
}

function unformatNumber(number){
  if (undefined !== number){
    number = number.replace('.', '');
    number = number.replace(',', '.');
    return parseFloat(number);
  }
}

function calc_packaging(){

  var packaging_tubes = total_posters / 3;

  if( 0 < packaging_tubes ){
    $('#packaging_quantity').val(Math.ceil(packaging_tubes));
    $('#packaging_quantity_div').show();
  }else{
    $('#packaging_quantity_div').hide();
  }
 
  if( 0 < total_collections ){
    $('#packaging_quantity_collections').val(total_collections);
    $('#packaging_quantity_collections_div').show();
  }else{
    $('#packaging_quantity_collections_div').hide();
  }
}

function calc_total(){
  var subtotal = parseFloat(unformatNumber($('#subtotal').val()));
  var sending_costs = unformatNumber($('#sending_costs').val());

  $('#total').val(formatNumber(subtotal + parseFloat(sending_costs)));
}


// *********************************************



// ************* Sending Conditions ************

if($('#back_to_cart').val()){
  $('#back_to_cart').on('click', function(){
    window.history.back();
  });
}

// *********************************************

 $('#warning_message_fields').hide();
 $('#warning_message_check').hide();
});



// *********** Validate Shopping step 2 *********

function validateShopping(){
  
  var data_field;
  var valid = true;

  $('.required_data_field').each(function(){
    data_field = $(this).val();
   
    if( data_field === null || data_field === "" ) valid = false;
  });
  
  if( !valid ){
    $('#warning_message_fields').show();
  } else {
    $('#warning_message_fields').hide();
  }
  
  
  if( false === $('.required_data_checkbox').is(":checked") ) {
    $('#warning_message_check').show();
     
    valid = false;
  }else{
    $('#warning_message_check').hide();
  }
  
  return valid;
}

// *********************************************
