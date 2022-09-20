<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('/application/resourses/css/styles.css')?>">

</head>
<body>

<?php
 
	   $errores=[];
	   if($_SERVER['REQUEST_METHOD']==='POST')
	   {
	

		$user = $_POST['usuario'];
		$password = $_POST['password'];
		
		//Hacemos uso de Get con parametro usuario
		$consulta = json_decode(
			file_get_contents('http://3.144.78.104/crud/index.php/Api_User/'.$user)
		);
		 
		if($consulta->status==1)
		{
			$passw= $consulta->data->pass;
			$usuario= $consulta->data->usuario;
			$status = $consulta->data->status;
			//verifiar si password es correcto
			$auth = password_verify($password, $passw);
		if($auth)
		{
			//Se inicia la sesion
			session_start();
			//Se llena la sesion
			$_SESSION['usuario']=$usuario;
			$_SESSION['login']=true;

			//Se redireciona 
			header('Location: /crud');
		}
		else if($status==0)
		{
			$errores[]="Usuario aún no validado";
		}
		else
		{
			$errores[]="Contraseña Incorrecta";
		}
			
		}
		else
		{
			$errores[]="El usuario no existe";
		}
		
	
	   }
       
    ?>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3 id="titulo" >Registrarme</h3>
<?php foreach($errores as $error): ?>

	<div >
 <label id ="Epass" style="color:red; font-size:14px" > <?php echo $error; ?></label>

    </div>
<?php endforeach; ?>

			</div>
			<div class="card-body">
				<form method="POST">
                
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="usuario" id ="usuario" placeholder="Usuario" required>
						
					</div>
                   
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control" id="contrasena" placeholder="Contraseña" required>
                        <div class="input-group-append">
            <button id="show_password" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
          </div>
					</div>
					
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn" >
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					¿No tienes una cuenta? <a href="#">Crear Cuenta</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">¿Olvidaste tu contraseña?</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="<?=base_url('/application/resourses/js/scripts.js')?>"></script>


</body>
</html>


