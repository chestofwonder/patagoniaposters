$(document).ready(function () {

  $('#button_add_promo').on('click', function () {

   var promo_id = parseInt($('#tabla_promociones tr:last td input').val());
   promo_id++;
   
   var next_id = parseInt($('.single_promo').length);
   next_id++;

    $('#tabla_promociones tr:last').after(
	    "<tr class='single_promo'>" +
	    "<td><input type='hidden' name='id" + next_id + "' value='" + promo_id + "' />" + promo_id + "</td>" +
	    "<td><input type='text' name='nombre" + next_id + "' value='' required/></td>" +
	    "<td><textarea id='descripcion" + next_id + "' name='descripcion" + next_id + "' required></textarea></td>" +
	    "<td> $ cl<input type='text' name='nacional" + next_id + "' value='' required/></td>" +
	    "<td>USD<input type='text' name='internacional" + next_id + "' value='' required/></td>" +
	    "<td><input type='checkbox' class='checkbox_delete_promo' value='eliminar" + next_id + "' name='eliminar" + next_id + "' id='eliminar" + next_id + "' /></td>" +
	    "<td><input type='text' style='display:none;color:red;' id='required" + next_id + "' value='Rellena todos los campos para poder crear la promoción' /></td>" +
	    "</tr>");

  });

});


