<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		{!! Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
		{!! Html::style('bower_components/bootstrap-material-design/dist/css/material.min.css') !!}
		{!! Html::style('bower_components/bootstrap-material-design/dist/css/ripples.min.css') !!}
		{!! Html::style('bower_components/bootstrap-material-design/dist/css/roboto.min.css') !!}
		{!! Html::style('bower_components/bootstrap-material-design/dist/css/material-fullpalette.min.css') !!}
<style>
	.contenedor{
		display: table;
		height:50em;
	}

	.center{
		display: table-cell;
		vertical-align: middle;
	}
	.title{
		text-align: center;
		color: #424242;
	}
	body{
		background-image: url(css/independencia.jpg);
	}


</style>
	</head>
	<body>
			<div class="container contenedor">
			<div class="row center ">

				
				<div class="col-md-offset-4 col-md-4 well" >
					<form action="" class="form-horizontal">
						<div class="form-group title">
							<h3>Ingreso al Sistema</h3>
						</div>
						<div class="form-group">
							
							<select class="selectpicker form-control" data-style="btn-primary">
								<option value=""> </option>
								<option title="Combo 1">Presidencia</option>
							    <option title="Combo 2">Telecominicaciones</option>
							    <option title="Combo 3">Taller</option>
					    	</select>  

						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Usuario"  >
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password">
						</div>
						<div class="form-group">
					    	<div class="col-md-offset-1 col-md-11">
					      		<button type="submit" class="btn btn-success" style="width:130px">Entrar</button>
					      		<button type="submit" class="btn btn-danger" style="width:130px">Cancelar</button>
					    	</div>
					  	</div>

					</form>


				</div>

			</div>
			
		</div>
	

	</body>
</html>
