<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		{!! Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
		{!! Html::style('bower_components/bootstrap-material-design/dist/css/material.min.css') !!}
		{!! Html::style('bower_components/bootstrap-material-design/dist/css/ripples.min.css') !!}
		{!! Html::style('bower_components/bootstrap-material-design/dist/css/roboto.min.css') !!}
		{!! Html::style('bower_components/bootstrap-material-design/dist/css/material-fullpalette.min.css') !!}

	</head>
	<body>
	<div class="container">
						<form class="form-horizontal">
					<fieldset>

					<!-- Form Name -->
					<legend>Form Name</legend>

					<!-- Text input-->
					<div class="control-group">
					  <label class="control-label" for="Usuario">Usuario</label>
					  <div class="controls">
					    <input id="Usuario" name="Usuario" type="text" placeholder="" class="input-xlarge">
					    
					  </div>
					</div>

					<!-- Password input-->
					<div class="control-group">
					  <label class="control-label" for="Contraseña">Contraseña:</label>
					  <div class="controls">
					    <input id="Contraseña" name="Contraseña" type="password" placeholder="" class="input-xlarge">
					    
					  </div>
					</div>

					<!-- Button (Double) -->
					<div class="control-group">
					  <label class="control-label" for="button1id"></label>
					  <div class="controls">
					    <button id="button1id" name="button1id" class="btn btn-success">Iniciar Sesion</button>
					    <button id="button2id" name="button2id" class="btn btn-danger">Cancelar</button>
					  </div>
					</div>

					</fieldset>
					</form>
					</div>



	</body>
</html>
