
<script>

  function EnviarFormulario(form)
  {
    event.preventDefault();
    var button = document.getElementById('submitButton');
    button.disable = true;

    google.script.run
    .widthSuccessHandler(paginaAplicacion)
    .widthFailHandler(paginaError)
    .verificarPassword(form)
  }

  function paginaAplicacion(usuario)
  {
console.log(usuario);
  }
   function paginaError(error)
  {
    console.log(error);
  }


  function mostrarPassword(){
		var cambio = document.getElementById("contrasena");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
</script>