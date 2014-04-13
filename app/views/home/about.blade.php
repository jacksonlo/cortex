@extends('layouts.master')

@section('content')

<div class="row mainContent">
	<h1>About Cortex</h1>
	<p class="lead">
		Cortex is a web application designed by Jackson Lo to help him in long term memorization of chinese characters.
	</p>
	<p>
		Cortex is 100% developed for Jackson Lo and will be continued to be improved as to his needs. Cortex can be modified for other topics or content which would also benefit from a long term memorization tool.

		<h3>Philosophy</h3>
		Jackson's memorization is best utilized by reviewing previous material while continuing to learn new material. The more Jackson is familiar with a certain character, the less review he needs.
		Therefore, Cortex is designed so that it is based on an algorithm which will take a random selection of <b>X#</b> of characters to review.
		Each time, when a character is made purple (right clicked), it is considered as "I know this word" (right now, for the next 5 minutes) and Cortex will note down that Jackson knows this word during this time.
		Cortex will then have this character re-appear to review after a certain time has passed.
		
		<h3>Modes</h3>
		There are three modes:
		<ol>
			<li>Cerebral</li>
			<li>HSK</li>
			<li>Exam</li>
		</ol>

		<h3>Mission</h3>
		To be able to read over 95% of written Chinese. <b><u>Defeat illiteracy!</b></u>
		<ol>
			<li>1,000 Chinese Characters --> ~90% of written Chinese. </li>
			<li>2,500 Chinese Characters --> ~98% of written Chinese.</li>
			<li>All 4000 here --> ~100% of all written Chinese.</li>
		</ol>

		<br>
		<small>Please contact <a href="mailto:7jackson.lo@gmail.com?Subject=Cortex%20Inquiry">Jackson Lo</a> for any questions or inquiries.</small>
	</p>

</div>

@stop

