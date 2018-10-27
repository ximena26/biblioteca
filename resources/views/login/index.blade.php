
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

 {!! Form::open(['route' => ['login.login', null], 'method' => 'post']) !!}
<div class="container" style="padding-top: 5%;">

<div class="row col-md-3" style="padding-left: 33%; padding-bottom: 2%">
  
    {{ HTML::image('imagenes/logo.png', 'Logo UDC', array('class' => 'img', 'width'=>'500px')) }} 
</div>
  
<div class="row">
  
  <div class="form-group col-md- offset-md-5">
    {!! Form::label('usuario', 'Usuario') !!}        
    {!! Form::number('usuario', null , ['class' => 'form-control', 'placeholder'=>'Digite el documento del usuario']) !!}
</div>
</div>
<div class="row">

<div class="form-group col-md-6 offset-md-5">
    {!! Form::label('password', 'Contraseña') !!}<br>
    {!! Form::password('password', null , ['class' => 'form-control', 'placeholder'=>'Digite la contraseña', 'required' => 'required']) !!}
        </div> 
        </div> 

      {!! Form::submit('Ingresar', ['class' => 'btn btn-success col-md-2  offset-md-5', 'style'=>'margin-top: 2%']) !!}  
  {!! Form::close() !!}
</div>
</div>

@if(Session::has('mensaje'))
<div class="alert alert-danger col-md-6 offset-md-3" role="alert" style="margin-top: 2%">
  {{Session::get('mensaje')}}
</div>
  
@endif


        <!-- Icons -->
    {!! Html::script('https://unpkg.com/feather-icons/dist/feather.min.js') !!}
    {!! Html::script('https://code.jquery.com/jquery-3.3.1.js') !!}
    {!! Html::script('//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js') !!}
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js') !!}
    {!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js') !!}

    <script>
      feather.replace()
    </script>   
    </body>

</html>
    





