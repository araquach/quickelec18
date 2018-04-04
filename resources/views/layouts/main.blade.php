<!DOCTYPE html>
<html>

    @section('head')
    
    @show
    
    <body>
        
        <!--<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>-->
        <!--<script type="text/javascript" src="{{ URL::asset('js/mob-nav.js') }}"></script>-->
        
        <div container>
            
            <header>
                <a href="{{ URL::to('/') }}">
                    <div id="header-content">
                        <h1>Quick Elec</h1>
                    </div>
                </a>
                
                
                <a href="https://www.facebook.com/QuickElec" target="_blank"><div class="social facebook"></div></a>
                <a href="#"><div class="social twitter"></div></a>
                
                <a href="{{ URL::to('contact') }}">
                    <button id="contact-us" class="button--pill">Contact Us</button>
                </a>
                <div id="nav">
                    <ul class="list--inline">
                        <li>{!! link_to('/', 'Home') !!}</li>
                        <li>{!! link_to('about', 'About Us') !!}</li>
                    	<li>{!! link_to('domestic', 'Domestic') !!}</li>
                    	<li>{!! link_to('commercial', 'Commercial') !!}</li>
                    	<li>{!! link_to('testimonials', 'Testimonials') !!}</li>
                    	<li>{!! link_to('contact', 'Contact') !!}</li>
                    </ul>
                </div>
            </header>
            
                @yield('content')
        
            <footer>
                <p>© 2016 Copyright Quick-Elec. All rights reserved. Site by Contra Design</p>
                <a href="https://www.ratedpeople.com/profile/quick-elec/" target="_blank"><div class="rated"></div></a>
            </footer>
        </div>
        <script>
            $(document).ready(function(){
                var button = '<a href="#" class="menu-b"></a>';
                $('#nav').parent().append(button);
                $('a.menu-b').click(function(){
			        $('#nav ul').slideToggle();
		            return false;
		        }); // end click
        	});
        </script>
        
    </body>
</html>