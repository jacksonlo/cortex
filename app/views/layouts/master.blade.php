<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!--         <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->
        @if(isset($csrf_token))
        	<meta name="csrf-token" content="<?= csrf_token() ?>">
    	@endif

        <title> Cortex | {{ $pageTitle or "" }}</title>
		
		<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>       
	    
	    <!-- Loading Bootstrap -->
	    {{ HTML::style('bootstrap/css/bootstrap.css') }}

	    <!-- Loading Flat UI -->
	    {{ HTML::style('css/flat-ui.css') }}

	    {{ HTML::style('css/styles.css') }}

	    {{ HTML::script('js/jquery-1.8.3.min.js') }}
	    {{ HTML::script('js/jquery-ui-1.10.3.custom.min.js') }}
	    {{ HTML::script('js/jquery.ui.touch-punch.min.js') }}
	    {{ HTML::script('js/bootstrap.min.js') }}
	    {{ HTML::script('js/bootstrap-select.js') }}
	    {{ HTML::script('js/bootstrap-switch.js') }}
	    {{ HTML::script('js/flatui-checkbox.js') }}
	    {{ HTML::script('js/flatui-radio.js') }}
	    {{ HTML::script('js/jquery.tagsinput.js') }}
	    {{ HTML::script('js/jquery.placeholder.js') }}
	</head>

	<body>
		<!-- green msg -->
		@if(Session::has('green-message'))
			<div class="alert alert-success alert-dismissable" id="session-msg">
			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				{{ Session::get('green-message') }}
			</div>
		@endif
		<!-- blue msg -->
		@if(Session::has('blue-message'))
			<div class="alert alert-info alert-dismissable" id="session-msg">
			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				{{ Session::get('blue-message') }}
			</div>
		@endif
		<!-- Yellow Msg -->
		@if(Session::has('yellow-message'))
			<div class="alert alert-warning alert-dismissable" id="session-msg">
			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				{{ Session::get('yellow-message') }}
			</div>
		@endif
		<!-- Red msg -->
		@if(Session::has('red-message'))
			<div class="alert alert-danger alert-dismissable" id="session-msg">
			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				{{ Session::get('red-message') }}
			</div>
		@endif

		<!-- Red long msg -->
		@if(Session::has('red-message-long'))
			<div class="alert alert-danger alert-dismissable" id="session-msg-long">
			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				{{ Session::get('red-message-long') }}
			</div>
		@endif

<!-- nav bar -->
<div class="container">
	<div class="row">
		<nav class="navbar navbar-inverse navbar-embossed" role="navigation">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
			    <span class="sr-only">Toggle navigation</span>
			  </button>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse-01">
				<ul class="nav navbar-nav navbar-left">  
					<!-- <li><img src={{ url('/e-images/brain.png') }} style="height: 35px; margin-top: 10px; margin-left: 10px;"></li>    -->      
			    	<li><a href={{ URL::route('home') }}>Cortex<span class="navbar-unread">1</span></a></li>
			    	<li><a href={{ URL::route('about') }}>About</a></li>
			    	<li class="dropdown">
				      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cerebral<b class="caret"></b></a>
				      <span class="dropdown-arrow"></span>
				      <ul class="dropdown-menu">
				    	<li><a href={{ URL::route('cerebral') }}>Regular</a></li>
				    	<li><a href={{ URL::route('cerebral').'?mode=review' }}>Review</a></li>
				    	<li><a href={{ URL::route('cerebral').'?mode=slow' }}>Slow Mode</a></li>
				    	<li><a href={{ URL::route('cerebral').'?mode=overload' }}>Overload</a></li> 
				        <li class="divider"></li>
				        <li><a href={{ URL::route('cerebral_about') }}>About</a></li>
				        <li><a href={{ URL::route('cerebral_instructions') }}>Instructions</a></li>
				      </ul>
				    </li>
			    	<li class="dropdown">
				      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Temporal<b class="caret"></b></a>
				      <span class="dropdown-arrow"></span>
				      <ul class="dropdown-menu">
				    	<li><a href={{ URL::route('temporal') }}>Regular</a></li>
				    	<li><a href={{ URL::route('temporal').'?mode=review' }}>Review</a></li>
				    	<li><a href={{ URL::route('temporal').'?mode=slow' }}>Slow Mode</a></li>
				    	<li><a href={{ URL::route('temporal').'?mode=overload' }}>Overload</a></li> 
				        <li class="divider"></li>
				        <li><a href={{ URL::route('temporal_about') }}>About</a></li>
				        <li><a href={{ URL::route('temporal_instructions') }}>Instructions</a></li>
				      </ul>
				    </li>
			    	<li class="dropdown">
				      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Exam<b class="caret"></b></a>
				      <span class="dropdown-arrow"></span>
				      <ul class="dropdown-menu">
				    	<li><a href="#">1</a></li>
				        <li class="divider"></li>
				        <li><a href="#">About</a></li>
				        <li><a href="#">Instructions</a></li>
				      </ul>
				    </li>
			  	</ul>
				<ul class="nav navbar-nav navbar-right">          
  				    <li class="dropdown">
				      <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <b class="caret"></b></a>
				      <span class="dropdown-arrow"></span>
				      <ul class="dropdown-menu">
				        <li><a href="#">Settings</a></li>
				        <li><a href={{ URL::route('stats') }}>Stats</a></li>
				        <li class="divider"></li>
				        <li><a href={{ URL::route('logout') }}>Logout</a></li>
				      </ul>
				    </li>
			    </ul>
			</div><!-- /.navbar-collapse -->
		</nav>
	</div>

<!-- main content -->
		@yield('content')
</div>
<!-- footer -->
<!-- <div class="footer">
	<div class="container-fluid">
		<div class="col-xs-">
			<p>&copy; Copyright 2014 by Jackson Lo</p>
			<p>&middot; 7jackson.lo@gmail.com &middot;</p>
		</div>
	</div>
</div> -->
<!-- end -->
	</body>
</html>

@yield('extra-lib')
<script>
	setTimeout(function() { $("#session-msg").fadeOut(2000); }, 4000)

	var popupWindow = null;
	function positionedPopup(url,winName,w,h,t,l,scroll)
	{
		settings ='height='+h+',width='+w+',top='+t+',left='+l+',scrollbars='+scroll+',resizable'
		popupWindow = window.open(url,winName,settings)
	}
@yield('scripts')
</script>

<!-- Jackson Lo 2014 -->