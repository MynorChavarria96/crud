<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Validar Page</title>
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
	

	
				
		
		$consulta = $this->user->codigo($codigo);


fetch ('http://3.144.78.104/crud/index.php/Api_User');


//POST DATA
$codigo = $_POST['codigo'];

//API Url
$url = 'http://3.144.78.104/crud/index.php/Api_User';

//Initiate cURL.
$ch = curl_init($url);

//The JSON data.
$jsonData = array(
    'codigo' =>  $codigo,
   
);

//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);

//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

//Execute the request
$result = curl_exec($ch);






		var_dump($consulta);
			//$datos = $this->user->update($id);
		 
		
}
	   
       
    ?>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3 id="titulo" >Validar Código</h3>
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
						<input type="text" class="form-control" name="codigo" id ="codigo" placeholder="codigo" required>
						
					</div>
                   
				
					
					<div class="form-group">
						<input type="submit" value="Validar" class="btn float-right login_btn" >
					</div>
				</form>
				</div>
		
		</div>
	</div>
</div>
<script src="<?=base_url('/application/resourses/js/scripts.js')?>"></script>


</body>
</html>


