@extends('layouts.master')

@section('content')

<div class="row mainContent">
	<h1>About Cerebral</h1>
	<p class="lead">
		Cerebral is a segment of the Cortex Web Application.
	</p>
	<p>
		<h3>Algorithm</h3>
		Jackson's memorization is best utilized by reviewing previous material while continuing to learn new material. The more Jackson is familiar with a certain character, the less review he needs.
		Therefore, Cortex is designed so that it is based on an algorithm which will take a random selection of <b>X#</b> of characters to review.
		Each time, when a character is right clicked, it is considered as "I know this word" (right now, for the next 5 minutes) and Cortex will note down that Jackson knows this word during this time.
		Cortex will then have this character re-appear to review after a certain time has passed.
		<br>
		<br>
		The algorithm used is described as follows: Cortex will take a random selection of characters to review or learn based on weighted probabilities for each of the characters. 
		<br>
		The factors that the weighted probabilities taken into account are:
		<ol>
			<li>Number of times of occurrence.</li>
			<li>Number of times of occurrence versus the average occurrence for all words. </li>
		</ol>

		<h3>Data</h3>
		The Chinese characters are ordered by their frequency of use, as scraped from <a href="www.learnchineseez.com">Learn Chinese EZ</a>.
		<br>
		<br>

		<h6>Credits</h6> 
		<small>
			<ul>
				<li>All chinese data and images are scraped from <a href="www.learnchineseez.com">Learn Chinese EZ</a>, and I do not take any credit. [This app is for personal use, don't sue me plz :3]</li>
				<li>Images such as the background and white wood are somewhere off the internet. Credits go out to whoever, again, this is for private personal use, don't sue me plz.</li>
			</ul>
		</small>

		<br>
		<small>Please contact <a href="mailto:7jackson.lo@gmail.com?Subject=Cortex%20Inquiry">Jackson Lo</a> for any questions or inquiries.</small>
	</p>

</div>

@stop

