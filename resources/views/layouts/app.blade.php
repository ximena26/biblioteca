<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8">
        <title>Biblioteca UDC</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        {!! Html::style('css/dashboard.css') !!}
        {!! Html::style('//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css') !!}
    </head>
    <body>

            <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
                <div class="navbar-brand col-sm-3 col-md-2 mr-0">
                        {{ HTML::image('imagenes/logo.png', 'Logo UDC', array('class' => 'img', 'width'=>'100px')) }}  

                </div>
                    <ul class="navbar-nav px-3">
                      <li class="nav-item text-nowrap">
                        <a class="nav-link" href="/">Salir</a>
                      </li>
                    </ul>
                  </nav>
              
                  <div class="container-fluid">
                    <div class="row">
                      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                        <div class="sidebar-sticky">
                          <ul class="nav flex-column">

                            <li class="nav-item">
                              <a class="nav-link active" href="\menu">
                                <span data-feather="home"></span>
                                Menu 
                              </a>
                            </li>

                            <li class="nav-item">
                              <a class="nav-link" href="/tipoUsuario">
                                <span data-feather="file"></span>
                                Tipo Usuario
                              </a>
                            </li>

                            <li class="nav-item">
                              <a class="nav-link" href="/usuario">
                                <span data-feather="shopping-cart"></span>
                                Usuario
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/facultad">
                                <span data-feather="shopping-cart"></span>
                                Facultad
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/docente">
                                <span data-feather="shopping-cart"></span>
                                Docente
                                </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/carrera">
                                <span data-feather="shopping-cart"></span>
                                Carrera
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/jornada">
                                <span data-feather="shopping-cart"></span>
                                Jornada
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/semestre">
                                <span data-feather="shopping-cart"></span>
                                Semestre
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/estudiante">
                                <span data-feather="shopping-cart"></span>
                                Estudiante
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/autor">
                                <span data-feather="shopping-cart"></span>
                                Autor
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/editorial">
                                <span data-feather="shopping-cart"></span>
                                Editorial
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/categoria">
                                <span data-feather="users"></span>
                                Categoría
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/libro">
                                <span data-feather="bar-chart-2"></span>
                                Libro
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/sede">
                                <span data-feather="layers"></span>
                                Sede
                              </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/ubicacion">
                                  <span data-feather="layers"></span>
                                  Ubicación
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="/ejemplar">
                                  <span data-feather="layers"></span>
                                  Ejemplar
                                   </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="/prestamo">
                                  <span data-feather="layers"></span>
                                  Prestamo
                                </a>
                              </li>
                          </ul>
              
                          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            
                            <span>Saved reports</span>
                            <a class="d-flex align-items-center text-muted" href="#">
                              <span data-feather="plus-circle"></span>
                            </a>
                          </h6>
                          <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                              <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                               
                               
                               
                                Year-end sale
                              </a>
                            </li>
                          </ul>
                        </div>
                      </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            @yield('contenido')
               
       
     

        <!-- Icons -->
    {!! Html::script('https://unpkg.com/feather-icons/dist/feather.min.js') !!}
    {!! Html::script('https://code.jquery.com/jquery-3.3.1.js') !!}
    {!! Html::script('//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js') !!}
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js') !!}
    {!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js') !!}
    
    <script>
      $(document).ready( function () {
        $('#tabla').DataTable();
    } );
    </script>
    <script>
      feather.replace()
    </script>   
    </body>

</html>
    