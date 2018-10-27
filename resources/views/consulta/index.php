<!DOCTYPE html>
<html lang="en">

  <head>
   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
   <script>
      $(document).ready(function(){
          $("#userr").on('click',mostrar);
          $('#dejar').on('click',dejarAsi);
        });

      
    function mostrar() {
         $('#mostrarmodal').modal('show'); 
         $('#registro').hidden();    

    }

    function dejarAsi(){
      //var nummm = $('#numdoc').val();
      var numeros = $('#numeros').val();
      var tipos =$('#tipos').val();

      if(numeros == 123){
        $('#registro').show()
        $('#tipo').val(tipos);
        $('#numero').val(numeros);
        //alert("Mamagallista");
      }
      
    
    }



    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UDC</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">BIBLIOTECA UNIVERSITARIA</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://localhost:8000/usuario">Usuarios</a>
            </li>
           
             <li class="nav-item text-nowrap">
                        <a class="nav-link" href="/">Salir</a>
             </li>                
          </ul>
        </div>
      </div>
    </nav>
   <header class="masthead text-center text-black d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text- bg-uppercase">
              <br><br>
             
               <img src="imagenes/images.png" width="600"height="250" />  
              <br><br>
              <strong>CONSULTA DE USUARIOS</strong>
            </h1>
            <hr>
          </div>

          <div class="col-lg-8 mx-auto">
            <p class="text- muted mb-5">UNIVERSITARIA DE COLOMBIA</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="http://localhost:8000/usuario">Validar Usuario</a>
          </div>
        </div>
      </div>
    </header>

<div class="container">
 <h1 align="center">LIBRARY MANAGER UDC</h1> 

 </div>
  
  <div align="right">
  <form>
    <a class="btn btn-primary" href="http://localhost:8000/libro" role="button">Libros</a>
    <a class="btn btn-primary" href="http://localhost:8000/prestamo" role="button">Préstamos</a>
    <button type="button" class="btn btn-primary" id="userr">Usuarios</button>  
  </form>
  </div>
  <div id="registro" hidden="true">
    <table>
      <tr>
        <h3>REGISTRO</h3>
      </tr>
      <tr>
        <input type="text" name="" id="tipo" disabled="true">
        | <input type="text" name="" id="numero" disabled="true">
      </tr>
      <tr>
        <<button type="button" class="btn btn-primary">Registrar Nuevo</button>
      </tr>
    </table>

  </div>
    <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3>Ingreso de Usuarios</h3>
           </div>
           <div class="modal-body">
              <h4>Digite el número de identidad</h4>
              <select id="tipos">
                <option value="1">TI</option>
                <option value="2">CC</option>
                <option value="3">PEP</option>
              </select>
              <input type="text" name="" id="numeros">
          </div>
           <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
          <a href="#" data-dismiss="modal" class="btn btn-danger" id="dejar">Consultar</a>
        </div>
        
      </div>
   </div>
</div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
