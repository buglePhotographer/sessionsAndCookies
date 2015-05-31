var enviarInformacion = function(){
    var json = {
        'nombre' :  $('#txtNombre').val(),
        'descripcion' : $('#txtDescripcion').val()
    };
    
    $.ajax({
      url: 'api.php',
      type: 'POST',
      data: json,
      success: function(data, textStatus, jqXHR)
      {
          alert("Te recordare por siempre " + $('#txtNombre').val());
      }
    });
};

$('#submitButton').on('click', function(){
    enviarInformacion();
});
