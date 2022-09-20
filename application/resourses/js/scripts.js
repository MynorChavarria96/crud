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

function validacion()
{
    var usuario = $('#usuario').val();
    var contrasena = $('#contrasena').val();
    var sr = document.getElementById("EUser");
    var sr2 = document.getElementById("EPass");
   
   
if(usuario.length!=0)
{

if(usuario=='Mychava96')
{
    sr.style.display='none';
if(contrasena.length!=0)
{
if(contrasena=='1234')
{
    sr2.style.display='none';
    
    /*window.open("http://localhost/crud/", "_self");  */
    console.log("Bienvenido");
}else if (contrasena!='1234'&&sr2.style.display=='none')
{
    sr2.style.display='block';
}

   
}
else
{
    
    
}
}
else if(usuario!='Mychava96'&&sr.style.display=='none')
{
    sr.style.display='block';
}



 
}






    
        
    
        
    
   
}

