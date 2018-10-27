<!DOCTYPE html>
<html>
<style>
div {
    background-color: rgb(190, 244, 195);
    color: rgb(255, 255, 255);
    padding: 16px;
}
</style>
<head>
	<meta charset="utf-8">
        <title>..:: Gestor de Biblioteca UDC::..</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        {!! Html::style('css/dashboard.css') !!}
        {!! Html::style('//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css') !!}
</head>
<body>
	<div style="border:20px solid rgb(17,17,17);">
	{!! Form::open(['route' => ['login.login', null], 'method' => 'post']) !!}
	<table border="1">
		<tr>
			<td colspan="3"  width="20%"></td>
		</tr>
		<tr>
			<th>GESTOR DE BIBLIOTECA</th>
			<td>
				<form>
					<input type="<a class="btn btn-primary" href="http://127.0.0.1:8000/libro" role="button">Libro</a>" name="libro">
					| <input type="<a class="btn btn-primary" href="http://127.0.0.1:8000/prestamo" role="button">Préstamo</a>" name="prestamo">
					| <input type="<a class="btn btn-primary" href="jquery" role="button">Usuarios</a>" name="usuario">

				</form>

			</td>
		</tr>
		<tr>
			<td colspan="3" width="20%"></td>
		</tr>


	</table>	

</body>
</html>