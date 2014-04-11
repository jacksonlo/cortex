@extends('layouts.master')

@section('content')

<div class="modal fade" id="wordModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><!-- word --></h4>
      </div>
      <div id="wordDetail" class="modal-body">
      	<!-- word detail -->
      </div>
      <div class="modal-footer">
		<button class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="row">
	<div class="progress">
	  	<div class="progress-bar" style="width: {{ $progress_width }}%;"></div>
  		<div class="progress-bar progress-bar-1000" style="width: 25%;"></div>
  		<div class="progress-bar progress-bar-2500" style="width: 62.5%;"></div>
	</div>
<div>

<div class="row" style="text-align: center;">
@foreach($all as $d)
	@if(in_array($d->id, $random))
	<div class="char-block" data-toggle="modal" data-target="#wordModal" id={{ $d->id }}>
		<span class="char-helper"></span>
		<img id={{ $d->img }} class="char-img img-rounded" src={{ "./images-png/".$d->img.".png" }}>
	</div>
	@endif
@endforeach
</div>
<div class="row" style="padding-bottom: 20px; padding-top: 25px;">
	@if(!isset($_GET['mode']))
	<div style="text-align: center;"><a href={{ URL::route('home') }} class="btn btn-success btn-lg" style="width: 70%">Hit</a></div>
	@elseif($_GET['mode'] == 'review')
	<div style="text-align: center;"><a href={{ URL::route('home').'?mode=review' }} class="btn btn-success btn-lg" style="width: 70%">Review</a></div>
	@elseif($_GET['mode'] == 'slow')
	<div style="text-align: center;"><a href={{ URL::route('home').'?mode=slow' }} class="btn btn-success btn-lg" style="width: 70%">Slow Hit</a></div>
	@endif
</div>

@stop

@section('scripts')

$(document).ready(function()
{
	$('.char-block').click(function()
	{
		$.ajax({
			type: "POST",
			url: "{{ URL::route('getDetail') }}",
			data: {
				'id' : $(this).attr('id')
			},
			dataType: "json",
			headers: {
            	'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        	},
			success: function(data) {
				$('#wordDetail').html(data.detail);
				$('#myModalLabel').html(data.word);
			},
			error: function(data) {
				alert('Error');
			}
		});
	});

	$('.char-block').bind("mouseover", function()
	{
        $(this).css("background", "black");
        var id = $(this).find('.char-img').attr('id');
        $(this).find('.char-img').attr('src', './images/'+id+'.gif');

        $(this).bind("mouseout", function() {
        	if(!$(this).hasClass('know')) $(this).css("background", '');
        	else $(this).css("background", "#2C3E50");
            $(this).find('.char-img').attr('src', './images-png/'+id+'.png');
        })  
	});

	document.oncontextmenu = function() {return false;};

	$('.char-block').mousedown(function(e) 
	{ 
		var thisID = $(this).attr('id');
		if( e.button == 2 ) 
		{ 
	    	if(!$(this).hasClass('know'))
	    	{
		    	$.ajax({
					type: "POST",
					url: "{{ URL::route('know') }}",
					data: {
						'id' : $(this).attr('id')
					},
					dataType: "text",
					headers: {
		            	'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
		        	},
					success: function(data) {
				    	$('#'+thisID).css("background", "#2C3E50");
				    	$('#'+thisID).addClass('know');
					},
					error: function(data) {
						alert('Error');
					}
				});
			}
	      	return false; 
	    } 
	   	return true; 
	}); 
});

@stop