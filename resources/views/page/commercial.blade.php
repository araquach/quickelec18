@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'At QUICK-ELEC we have the experience and qualifications to be well equipped to carry out all types of Commercial work quickly and efficiently.
						Aiming at all times to achieve 100% customer satisfaction with our prompt and friendly service, if you require:
						Fault Finding & Repairs, New Installations, Rewiring, Emergency Lighting, Fire Alarm Systems, Office Lighting, Telephone and Data, Security Lighting, Sockets and Switches, Light Fittings, Outdoor Electrical Work, Fixed wire testing',
	'keywords' => 'Commercial electricians Warrington, Commercial electricians North West',
	'ogtitle' => 'Fully equipped for all commercial projects',
	'ogdescription' => 'At QUICK-ELEC we have the experience and qualifications to be well equipped to carry out all types of Commercial work quickly and efficiently.
						Aiming at all times to achieve 100% customer satisfaction with our prompt and friendly service, if you require:
						Fault Finding & Repairs, New Installations, Rewiring, Emergency Lighting, Fire Alarm Systems, Office Lighting, Telephone and Data, Security Lighting, Sockets and Switches, Light Fittings, Outdoor Electrical Work, Fixed wire testing',
	'ogimage' => url('/') . '/images/fb_og/qe_office_fb.jpg',
	'title' => 'Commercial Electricians in Warrington, Cheshire & North West | Quick-Elec'
	])
@stop

@section('content')

<div class="page-content commercial">
	
	<section grid class="full-page">
	
		<div column="10">
	  	<h2>Fully equipped for all commercial projects</h2>
	  	</div>
	  
	  	<article column="7">
	  		<p><strong>At QUICK-ELEC we have the experience and qualifications to be well equipped to carry out all types of Commercial work quickly and efficiently.</strong></p>
			<p>Aiming at all times to achieve 100% customer satisfaction with our prompt and friendly service, if you require:</p>
			<ul>
		    	<li>Fault Finding & Repairs</li>
		    	<li>New Installations</li>
		    	<li>Rewiring</li>
		    	<li>Emergency Lighting</li>
		    	<li>Fire Alarm Systems</li>
		    	<li>Office Lighting</li>
		    	<li>Telephone and Data</li>
		    	<li>Security Lighting</li>
		    	<li>Sockets and Switches</li>
		    	<li>Light Fittings</li>
		    	<li>Outdoor Electrical Work</li>
		    	<li>Fixed wire testing</li>
			</ul>
	  	</article>
	  	<article column="5">
	  		{{ Html::image('images/stock/qe_office.jpeg', 'Quick Elec', array('width' => 300 , 'height' => 200)) }}
	  		{{ Html::image('images/stock/qe_reception_desk.jpeg', 'Quick Elec', array('width' => 300 , 'height' => 200)) }}
	  	</article>
	  	<article column="7">
			<a href="{{ URL::to('contact') }}" class="sector-link">Contact us for more information</a>
		</article>
	  	<article column="5">
	  		{{ Html::image('images/stock/qe_emergency_lighting.jpeg', 'Quick Elec', array('width' => 300 , 'height' => 200)) }}
	  	</article>
	</section>

</div>

@stop