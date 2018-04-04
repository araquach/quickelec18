<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

	<meta name="description" content="With years of experience in revamping residential and commercial properties, 
										QUICK-ELEC are electrical contractors covering a wide range of domestic and commercial electrical services in the North West, all at very competitive prices.
										We specialise in domestic rewires as we have fully qualified rewire teams who complete work only to the highest standard.
										We understand what individuals and modern businesses look for when selecting an electrical contractor and we make extra efforts to exceed our customers' expectations.">
	<meta name="keywords" content="electrician, residential electrician, commercial electrician, electrical contractors, rewire, domestic rewires, burglar alarms, cctv installation, consumer unit, lighting, led lighting, security lighting, driveway lighting, energy saving, North West, Cheshire, Merseyside, Manchester">
	<meta name="author" content="Contra Design">
	
	<!-- Typekit fonts -->
	
	<meta property="og:title" content="{{ $ogtitle or 'Quick-Elec' }}">
    <meta property="og:description" content="{{ $ogdescription or 'With years of experience in revamping residential and commercial properties, 
										QUICK-ELEC are electrical contractors covering a range of domestic and commercial electrical services in the North West, all at very competitive prices.
										We specialise in domestic rewires as we have fully qualified rewire teams who complete work only to the highest standard.
										We understand what individuals and modern businesses look for when selecting an electrical contractor and we make extra efforts to exceed our customers\' expectations.' }}">
	<meta property="og:image" content="{{ $ogimage or url('/') . '/images/ogimage/home.jpg' }}">
	<meta property="og:url" content="{{ url()->current() }}">
	
	<!--Google analytics -->

	<title>{{ $title or 'Quick-Elec' }}</title>

	<link rel="stylesheet" type="text/css" media="screen" href="{{ elixir('css/app.css') }}" />
	
	
	<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
	
	<script src="https://use.typekit.net/rix1nhd.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	
</head>