<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <title>Togoany</title>
 <!-- Latest compiled and minified CSS -->


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<!--link href="css/bootstrap.min.css" rel="stylesheet"--> 
   </head>
    <body>
    	<!--nav class="navbar navbar-expand-sm bg-light navbar-light "-->
    		<nav class="navbar navbar-default navbar-fixed-top">
    			<div class="container">
		    		<form class="form-inline" action="/#">
		    			<a class="navbar-brand" href="#">Togoany</a>
					    <input class="form-control mr-sm-2" type="text" placeholder="Encontre notícias">
					    <button class="btn btn-success" type="submit">Buscar</button>
					</form>
     			</div>
     	</nav> 
     	 @yield('conteudo')
    </body>
</html>
<table>
