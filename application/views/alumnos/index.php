<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Alumnos Umg</title>
  </head>
  <body>
    
		<div class="row">
		<div class = "container-fluid">
			<h1 class="text-center">Listado Alumnos<h1/>
			<hr style="background-color: black; color: black; height: 1px;">
		</div>
		</div>
		<div class="row">
			<div class="col-md-12 mt-12">
				<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" id= "agregar">
 Agregar Alumno
</button>

<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Ingreso Alumnos</h5>
        <button type="button" id="reset" class="close" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button>
 

      </div>
      <div class="modal-body">

	  <form action ="" method="post" id="form">
	  <div class="form-group">
    <input type="hidden" name="id" id="id_edit" value="" >
            <label for=""><b class="text-danger">*</b>Nombre:</label>
            <input type="text" name="nombre" placeholder="Ingrese el nombre" id="nombre" class="form-control" value="">
        </div>
		<div class="form-group">
            <label for=""><b class="text-danger">*</b>Apellidos:</label>
            <input type="text" name="apellido" placeholder="Ingrese el apellido" id="apellido" class="form-control" value="">
        </div>
        <div class="form-group">
            <label for=""><b class="text-danger">*</b>Dpi:</label>
            <input type="text" name="dpi" maxlength="15" placeholder="Ingrese el DPI xxxx-xxxxx-xxxx" id="dpi" class="form-control" value="">
        </div>
        <div class="form-group">
            <label for=""><b class="text-danger">*</b>Dirección:</label>
            <input type="text" name="direccion" placeholder="Ingrese la direccion" id="direccion" class="form-control" value="" >
        </div>
        <div class="form-group">
            <label for=""><b class="text-danger">*</b>Telefono:</label>
            <input type="number" name="movil" placeholder="Ingrese el número "id="movil" class="form-control" value="" >
        </div>
        <div class="form-group">
            <label for=""><b class="text-danger">*</b>Correo electronico:</label>
            <input type="text" name="email" placeholder="Ingrese el correo" id="email" class="form-control" value="" >
        </div>
        <div class="form-group">
            <label for=""><b class="text-danger">*</b>Estado:</label>
            <select name="inactivo" id="inactivo" class="form-control chosen-select">
                <option value="">Seleccionar una opcion...</option>
                <option value="0">Activo</option>
                <option value="1">Inactivo</option>
            </select>
       
	</div>
	 
	</form>
	
	
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="cerrar" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="add">Guardar</button>
        <button type="button" class="btn btn-primary" id="update">Actualizar</button>
      </div>
    </div>
  </div>
</div>
			</div>
		</div>

		<div class="row">
			<div class="container-fluid">
			<table class="table table-bordered table-hover">
            <thead>
                <tr >
                <style>
                        th
                        {
                            text-align: center;
                        }
                      
                    </style>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Dpi</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Fecha Creación</th>
                    <th>Usuario</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
           <tbody id="tbody">

           </tbody>
           
        </table>

			</div>
		</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></l>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    


  <script>


  $(document).on("click", "#agregar", function(e)
	{

    $('#Modal').modal('show');
    $("#update").hide();
    $("#add").show();
    $("#ModalLabel").text("Ingreso Alumnos");
		e.preventDefault();
    const  generateRandomString = (num) => {
    const characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
    let result1= ' ';
    const charactersLength = characters.length;
    for ( let i = 0; i < num; i++ ) {
        result1 += characters.charAt(Math.floor(Math.random() * charactersLength));
    }

    return result1;
}
    var aleat = generateRandomString(8);
    $("#nombre").val(aleat);
  
  });
  
	$(document).on("click", "#add", function(e)
	{
		e.preventDefault();
   
		var nombre = $("#nombre").val();
		var apellido = $("#apellido").val();
    var dpi = $("#dpi").val();
		var direccion = $("#direccion").val();
		var movil = $("#movil").val();
		var email = $("#email").val();
		var inactivo = $("#inactivo").val();
    var user = '1';
if(nombre== "" || apellido=="" || dpi=="" || direccion=="" || movil == "" || email=="" || inactivo=="" || user=="")
{
alert("Debe llenar todos los campos");

}
else{
  $.ajax({
		url: "<?php echo base_url(); ?>insert",
		type: "post",
		dataType: "json",
		data:
		{
			nombre: nombre,
			apellido: apellido,
      dpi: dpi,
			direccion: direccion,
			movil: movil,
			email: email,
			inactivo: inactivo,
      user: user
		},
		success: function(data)
		{
			console.log(data);
      $('#Modal').modal('hide');
if(data.message=="Registro insertado exitosamente")
{
  toastr["success"](data.message);

toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
fetch();
$("#form")[0].reset();
}
else{
  toastr["error"](data.message);

toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
                  }
  }
		} 
		});
  
}

	});
 
  function fetch()
{
$.ajax({
url: "<?php echo base_url(); ?>fetch",
type: "post",
dataType: "json",
success: function(data){
var tbody ="";

           for(var key in data){
            tbody +="<tr>";
						tbody +="<td>"+data[key]['alumno'] +"</td>";
						tbody +="<td>"+data[key]['nombre']+" "+data[key]['apellido'] +"</td>";
            tbody +="<td>"+data[key]['dpi'] +"</td>";
						tbody +="<td>"+data[key]['direccion']+"</td>";
						tbody +="<td>"+data[key]['movil']+"</td>";
						tbody +="<td>"+data[key]['email']+"</td>";
						tbody +="<td>"+data[key]['fecha_creacion']+"</td>";
						tbody +="<td>"+data[key]['user']+"</td>"; 
            if(data[key]['inactivo']==0){
              tbody +="<td>"+"Activo"+"</td>"; 
            }
            else{
              tbody +="<td>"+"Inactivo"+"</td>"; 
            }
            
           
            tbody +=`<td>
                  <a href="#" id="del"  class="btn btn-sm btn-outline-danger"value="${data[key]['alumno']}"><i class="fas fa-trash-alt"></i></a>
                  <a href="#" id="edit" class="btn btn-sm btn-outline-info" value="${data[key]['alumno']}"><i class="fas fa-edit"></i></a>
                  </td>`;
				  tbody+="</tr>";
           }
           $("#tbody").html(tbody);
}

});
}
fetch();
	$(document).on("click", "#reset", function(e)
	{
    e.preventDefault();
    $("#form")[0].reset();
  });
  $(document).on("click", "#cerrar", function(e)
	{
    e.preventDefault();
    $("#form")[0].reset();
  });
 

 $(document).on("click", "#del", function(e){
e.preventDefault();
var del_id = $(this).attr("value");
if(del_id=="")
{
  alert("Se requiere id");
}
else
{
  const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger mr-2'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: '¿Desea eliminar el registro ?' ,
  text: "El registro se eliminará permanentemente",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: '¡Si, eliminar!',
  cancelButtonText: 'No, cancelar!',
  reverseButtons: true
}).then((result) => {
  if (result.value) {
$.ajax({
  url: "<?php echo base_url(); ?>delete",
  type: "post",
  dataType: "json",
  data: {
  del_id: del_id
  },
  success: function(data){
  fetch();
  
  }
});
    swalWithBootstrapButtons.fire(
      '¡Eliminado!',
      'El registro ha sido eliminado',
      'success'
    )
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelado',
      'No se eliminó ningun registro :)',
      'error'
    )
  }
})

}
 });


$(document).on("click", "#edit", function(e){
e.preventDefault();
var edit_id = $(this).attr("value");

if(edit_id=="")
{
  alert("Se requiere id para editar");
}
else
{
  $.ajax({
  url: "<?php echo base_url(); ?>edit",
  type: "post",
  dataType: "json",
  data: {
  edit_id: edit_id
  },
  success: function(data){
   if(data.response == "success")
   {
    $("#add").hide(); 
    $("#update").show(); 
    $('#Modal').modal('show');
    $('#ModalLabel').text("Editar Alumnos");
    $("#id_edit").val(data.post.alumno);
    $("#nombre").val(data.post.nombre);
    $("#apellido").val(data.post.apellido);
    $("#dpi").val(data.post.dpi);
    $("#direccion").val(data.post.direccion);
    $("#movil").val(data.post.movil);
    $("#email").val(data.post.email);
    $("#inactivo").val(data.post.inactivo);
    
   }
   else{
    toastr["error"](data.message);

toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
                  }

   }
  /*fetch();*/
  
  }
});

}
});

$(document).on("click", "#update", function(e){
e.preventDefault();
    var edit_id = $("#id_edit").val();
    var edit_nombre = $("#nombre").val();
		var edit_apellido = $("#apellido").val();
    var edit_dpi = $("#dpi").val();
		var edit_direccion = $("#direccion").val();
		var edit_movil = $("#movil").val();
		var edit_email = $("#email").val();
		var edit_inactivo = $("#inactivo").val();
    var edit_user = '1';

if(edit_id=="" || edit_nombre== "" || edit_apellido=="" || edit_dpi=="" || edit_direccion=="" || edit_movil == "" || edit_email=="" || edit_inactivo=="" || edit_user=="")
{
  alert("Todos los campos son requeridos");
}
else
{
  $.ajax({
  url: "<?php echo base_url(); ?>update",
  type: "post",
  dataType: "json",
  data: {
      edit_id: edit_id,
      edit_nombre: edit_nombre,
			edit_apellido: edit_apellido,
      edit_dpi: edit_dpi,
			edit_direccion: edit_direccion,
			edit_movil: edit_movil,
			edit_email: edit_email,
			edit_inactivo: edit_inactivo,
      edit_user: edit_user
  },
  success: function(data){
    fetch();
if(data.message =="Registro actualizado exitosamente")
{
  $('#Modal').modal('hide');
  toastr["success"](data.message);

toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

}
else
{
  toastr["error"](data.message);

toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
                  }


}
  }
});

  }
});

</script>
</body>
</html>