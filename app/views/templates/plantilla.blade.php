<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>“SICCP”</title>
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css.css') }}">
	<link href="{{ asset('assets/css/estilos.css') }}" rel="stylesheet">
	<script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</head>
<body>
	<header>
		<h3>"SISTEMA INTEGRAL DE CONTROL DE CATÁLOGO DE PROVEEDORES"</h3>
		<h2>.:SICCP:.</h2>
	</header>
	<hr id="linea">
	@yield('contenido')
</body>
</html>