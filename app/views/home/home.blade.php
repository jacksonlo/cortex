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
@foreach($all as $d)
	<div class="char-block" data-toggle="modal" data-target="#wordModal" id={{ $d->id }}>
		<span class="char-helper"></span>
		<img id={{ $d->img }} class="char-img img-rounded" src={{ "./images-png/".$d->img.".png" }}>
	</div>
@endforeach
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
        	else $(this).css("background", "#9B59B6");
            $(this).find('.char-img').attr('src', './images-png/'+id+'.png');
        })  
	});

	document.oncontextmenu = function() {return false;};

	$('.char-block').mousedown(function(e) 
	{ 
		if( e.button == 2 ) 
		{ 
	    	$(this).css("background", "#9B59B6");
	    	$(this).addClass('know');
	      	return false; 
	    } 
	   	return true; 
	}); 
});

@stop