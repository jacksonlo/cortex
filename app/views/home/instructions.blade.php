@extends('layouts.master')

@section('content')

<div class="row mainContent">
	<h1>Instructions</h1>
	<p class="lead">
		Cortex has 4 modes: Regular, Review, Slow mode and Overload.
		<br>
		Each mode has its strengths and uses for different points in your learning journey.
	</p>
	<p>
		<h3>Regular</h3>
		This mode is the default mode on the home page. Cortex will give you new words to learn at a moderate pace while still emphasizing the importance of review.
		
		<h3>Review</h3>
		Cortex will only give you words that you have already learned in order to review. Cortex <i>will not</i> introduce any new words in this mode.
		<br>
		<small>Note: This mode requires you have learned at least 10 words prior.</small>

		<h3>Slow Mode</h3>
		Cortex will introduce new words at a 60% slower pace than the regular mode, and will emphasize more on review and less on new words.

		<h3>Overload</h3>
		In this mode, Cortex will introduce new words <b>4x</b> faster than the regular mode. There will be very little review in this mode as Cortex will put a large emphasis on learning new words and less on review.
		<br>
		<small>Note: This mode may be useful to start off with if you already have a literacy background in Chinese.</small> 
	</p>

</div>

@stop

