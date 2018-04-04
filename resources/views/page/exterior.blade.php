@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'If you\'re looking to add that bit of extra class and quality to your garden or you need lighting for extra security at your home or business, Quick-Elec have the experience and expertise to help you.
		Our skilled electricians will complete any of the following installations to the highest possible standard: 
		Decking Lighting, Up and Down Lights, Wall Lighting, Flood/Security Lighting, Tile and Brick Lights, Sign Lighting, Post and Bollard Lighting, Lamp Post Lighting.',
	'keywords' => 'Warrington External Lighting, North West External Lighting, Garden lights, garden lighting, patio lights',
	'ogtitle' => 'Add some light to your outside space',
	'ogdescription' => 'Quick-Elec specialise in home and garden lighting improvements. If you\'re looking to add that bit of extra class and quality to your garden or you need lighting for extra security at your home or business, Quick-Elec have the experience and expertise to help you.
		Our skilled electricians will complete any of the following installations to the highest possible standard: 
		Decking Lighting, Up and Down Lights, Wall Lighting, Flood/Security Lighting, Tile and Brick Lights, Sign Lighting, Post and Bollard Lighting, Lamp Post Lighting.',
	'ogimage' => url('/') . '/images/fb_og/qe_exterior_fb.jpg',
	'title' => 'External Lighting Garden and Patio Lighting in Warrington, Cheshire & North West | Quick-Elec'
	])
@stop

@section('content')

<div class="page-content exterior">
	<section grid class="full-page">
		
		<div column="7">
			<h2>Add some light to your outdoor space</h2>
		</div>
		
		<article column="7">
			<p><strong>If you're looking to add that bit of extra class and quality to your garden or patio area, or you need lighting for extra security at your home or business, Quick-Elec have the experience and expertise to help you.</strong></p>
			<p>Quick-Elec specialise in home and garden lighting improvements:</p>
			<ul>
				<li>Decking Lighting</li>
				<li>Up &amp; Down Lights</li>
				<li>Wall Lighting</li>
				<li>Flood/Security Lighting</li>
				<li>Tile &amp; Brick Lights</li>
				<li>Sign Lighting</li>
				<li>Post &amp; Bollard Lighting</li>
				<li>Lamp Post Lighting</li>
			</ul>
			<p>Our skilled electricians will complete any of the above installations to the highest possible standard.</p>
			<p>These are some of our recent projects</p>
		</article>
		<article column="5">
			{{ Html::image('images/exterior/exterior_1.jpg', 'Exterior Lighting') }}
		</article>
		<article column="7">
			{{ Html::image('images/exterior/exterior_2.jpg', 'Exterior Lighting') }}
		    <p><em>Click the link below to arrange for a quote - either call us or use our contact form</em></p>
		    <a href="{{ URL::to('contact') }}" class="sector-link">Contact us for a quote</a>
		</article>
		<article column="5">
			{{ Html::image('images/exterior/exterior_3.jpg', 'Exterior Lighting') }}
		</article>
			
				
	</section>
</div>

@stop