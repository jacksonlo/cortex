<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cortex</title>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>       
	    <!-- Loading Bootstrap -->
	    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

	    <!-- Loading Flat UI -->
	    <link href="css/flat-ui.css" rel="stylesheet">

	            {{ HTML::style('css/styles.css') }}

	    <script src="js/jquery-1.8.3.min.js"></script>
	    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
	    <script src="js/jquery.ui.touch-punch.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    <script src="js/bootstrap-select.js"></script>
	    <script src="js/bootstrap-switch.js"></script>
	    <script src="js/flatui-checkbox.js"></script>
	    <script src="js/flatui-radio.js"></script>
	    <script src="js/jquery.tagsinput.js"></script>
	    <script src="js/jquery.placeholder.js"></script>
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="login">
		        <div class="login-screen">
		          <div class="login-icon">
					<img src={{ asset('/e-images/brain.png') }}>
		            <h4>Welcome to <small>Cortex.</small></h4>
		          </div>

				{{ Form::open(array('url'=>'/login', 'class'=>'form-signin')) }}
		       	<div class="login-form">
		            <div class="form-group">
			  			{{ Form::text('username', null, array('class'=>'form-control login-field', 'placeholder'=>'Username')) }}
		              	<label class="login-field-icon fui-user" for="login-name"></label>
		            </div>

		            <div class="form-group">
   						{{ Form::password('password', array('class'=>'form-control login-field', 'placeholder'=>'Password')) }}
		              	<label class="login-field-icon fui-lock" for="login-pass"></label>
		            </div>

		      		{{ Form::submit('Login', array('class'=>'btn btn-primary btn-lg btn-block'))}}
		            <a class="login-link" href="#">Lost your password?</a>
		        </div>
      		    {{ Form::close() }}
		        </div>
		    </div>
		</div>
	</div>

<div class="footer">
	<div class="container">
		<p><br>&copy; Copyright 2014 by Jackson Lo</p>
	</div>
</div>

</body>



</html>
