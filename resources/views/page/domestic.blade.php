@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'QUICK-ELEC domestic electricians are experts in all domestic electrical jobs. Our friendly and reliable electricians can carry out everything from full and partial re-wires, installation of burglar alarm & CCTV, consumer unit ugrades or simply changing a light fitting.
	Like so many of our domestic customers, once you have used our services once you will be sure to keep our business card close to hand.
	For over a decade we have been operating in Warrington and the North West offering a local, reliable and trustworthy service that people come back to time and time again.
	Our fully qualified electricians can personally undertake any electrical work you need, and no job is too small.',
	'keywords' => 'domestic, electricians, Warrington, North West, re-wires, burglar alarms',
	'ogtitle' => 'Domestic Electricians',
	'ogdescription' => 'QUICK-ELEC domestic electricians are experts in all domestic electrical jobs. Our friendly and reliable electricians can carry out everything from full and partial re-wires, installation of burglar alarm & CCTV, consumer unit ugrades or simply changing a light fitting.
	Like so many of our domestic customers, once you have used our services once you will be sure to keep our business card close to hand.
	For over a decade we have been operating in Warrington and the North West offering a local, reliable and trustworthy service that people come back to time and time again.
	Our fully qualified electricians can personally undertake any electrical work you need, and no job is too small.',
	'ogimage' => url('/') . '/images/fb_og/qe_living_room_fb.jpg',
	'title' => 'Domestic Electricians in Warrington, Cheshire & North West | Quick-Elec'
	])
@stop

@section('content')

<div class="page-content domestic">
	<section grid class="full-page">
		
		<div column="7">
			<h2>Friendly, Reliable, Experienced</h2>
		</div>
		
		<article column="7">
			<p><strong>QUICK-ELEC domestic electricians are experts in all domestic electrical jobs. 
			   Our friendly and reliable electricians can carry out everything from full and partial re-wires, installation of burglar alarm & CCTV, 
			   consumer unit ugrades or simply changing a light fitting.</strong></p>
			
			<ul>
				<li>New Installations</li>
				<li>Inspection and testing</li>
				<li>Alarms</li>
				<li>CCTV</li>
				<li>Fault finding</li>
				<li>Indoor and outdoor lighting installations</li>
				<li>Consumer unit upgrades</li>
			</ul>
			<p>For over a decade we have been operating in <em>Warrington and the North West (Widnes, Runcorn, Alderley Edge, Leigh and Wigan) </em> offering a local, reliable and trustworthy service that people come back to time and time again.</p>
		</article>
		<article column="5">
			{{ Html::image('images/stock/qe_kitchen.jpeg', 'Quick Elec', array('width' => 300 , 'height' => 200)) }}
		</article>
		<article column="7">
		    <p>Our fully qualified electricians can personally undertake any electrical work you need, and no job is too small.</p>
		    <p><em>Like so many of our domestic customers, once you have used our services once you will be sure to keep our business card close to hand!</em></p>
		    <a href="{{ URL::to('contact') }}" class="sector-link">Contact us for more information</a>
		</article>
		<article column="5">
			{{ Html::image('images/stock/qe_living_room.jpeg', 'Quick Elec', array('width' => 300 , 'height' => 200)) }}
		</article>
			
				
	</section>
</div>

@stop