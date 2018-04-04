@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'ogtitle' => 'Contact Us',
	'ogdescription' => 'For quotes and enquiries don\'t hesitate to get in touch',
	'ogimage' => url('/') . '/images/fb_og/qe_reception_desk_fb.jpg',
	'title' => 'Warrington, Cheshire & North West Electricians | Contact Us | Quick-Elec'
	])
@stop

@section('content')

<div class="page-content contact">
    
    <div class="contact-form">
        <h2>Contact Us</h2>
        
        @if(Session::has('message'))
            <div class="alert alert-info">
        		{{{ Session::get('message') }}}
            </div>
        @endif
        
        <p><strong>Please complete the form below and we'll get back to you as soon as possible or call us on 07943 707648</strong></p>
       
        <p><strong>If you have an electrical emergency please call:<br> 07943 707648</strong> we are open 24/7</p>

        @if (count($errors) > 0)
        <div>
        	<p>Please fix the following input errors:</p>
        	<ul>
           		 @foreach($errors->all() as $error)
                <li>{{{ $error }}}</li>
            	@endforeach
        	</ul>
        </div>
        @endif
        
        {!! Form::open(array('action' => 'PagesController@sendEmail', 'class' => 'form')) !!}
        
        	<p>
        	{!! Form::label('first_name', 'First Name') !!}
        	{!! Form::text('first_name', old('first_name')) !!}
        	{!! $errors->first('first_name', '<div class="errorMessage">:message</div>') !!}
        	</p>
        	
        	<p>
        	{!! Form::label('second_name', 'Second Name') !!}
        	{!! Form::text('second_name', old('second_name')) !!}
        	{!! $errors->first('second_name', '<div class="errorMessage">:message</div>') !!}
        	</p>
        	
        	<p>
        	{!! Form::label('email', 'Email Address') !!}
        	{!! Form::email('email', old('email')) !!}
        	{!! $errors->first('email', '<div class="errorMessage">:message</div>') !!}
        	</p>
        	
        	<p>
        	{!! Form::label('email_confirm', 'Confirm Email Address') !!}
        	{!! Form::email('email_confirm') !!}
        	</p>
        	
        	<p>
        	{!! Form::label('mobile', 'Contact Number') !!}
        	{!! Form::text('mobile', old('mobile')) !!}
        	{!! $errors->first('mobile', '<div class="errorMessage">:message</div>') !!}
        	</p>
        	
        	<p>
        	{!! Form::label('body', 'Your Message') !!}
        	{!! Form::textarea('body', old('body')) !!}
        	{!! $errors->first('body', '<div class="errorMessage">:message</div>') !!}
        	</p>
        	
        	<p>
        	{!! Form::submit('Submit') !!}
        	</p>
        	
        {!! Form::close() !!}
        
    </div><!-- form -->
            
</div>

@stop