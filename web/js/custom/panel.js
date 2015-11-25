$(document).ready(function () {

  $('#button_add_promo').on('click', function () {

    var next_id = $('#tabla_promociones tr:last td input').val();
    next_id++;

    $('#tabla_promociones tr:last').after(
	    "<tr>" +
	    "<td><input type='hidden' name='id" + next_id + "' value='" + next_id + "' />" + next_id + "</td>" +
	    "<td><input type='text' name='nombre" + next_id + "' value='' /></td>" +
	    "<td><textarea id='descripcion" + next_id + "' name='descripcion" + next_id + "' ></textarea></td>" +
	    "<td> $ cl<input type='text' name='nacional" + next_id + "' value='' /></td>" +
	    "<td>USD<input type='text' name='internacional" + next_id + "' value='' /></td>" +
	    "<td><input type='checkbox' class='checkbox_delete_promo' value='eliminar" + next_id + "' name='eliminar" + next_id + "' id='eliminar" + next_id + "' /></td>" +
	    "<td><input type='text' style='display:none;color:red;' id='required" + next_id + "' value='Rellena todos los campos para poder crear la promoción' /></td>" +
	    "</tr>");

    $('#num_promos').val(parseInt($('#num_promos').val()) + 1);
  });

});


