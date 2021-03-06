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
                        <h1>Quick Elec - Electricians in Warrington, Cheshire and the North West</h1>
                        <h1>07943 707648</h1>
                    </div>
                </a>


                <a href="https://www.facebook.com/QuickElec" target="_blank"><div class="social facebook"></div></a>
                <a href="https://twitter.com/QuickElec" target="_blank"><div class="social twitter"></div></a>

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
                <p>© {{ now()->year }} Quick-Elec. Warrington, Cheshire &amp; North West Electricians. Site by Contra Design</p>
                <a href="https://www.ratedpeople.com/profile/quick-elec/" target="_blank"><div class="rated"></div></a>
            </footer>
        </div>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/mob-nav.js') }}"></script>
    </body>
</html>
