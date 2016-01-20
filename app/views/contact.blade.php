@extends('layouts.master')

@section('content')
	<div class="container">
		<h1>BeSpoke Software Solutions</h1>
		<p>Jerald Saenz, Proprietor</p>
		<p>ph 210-237-7653</p>
		<p>j@bespoke.com</p>
	</div>
	 <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    {{-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    {{ Form::open(array('action' => array('HomeController@doContact'))) }}
                        <div class="row">
                            <div class="col-md-6">                              
                               	<div class="form-group">
                                   {{Form::label('from', 'Your name')}}
                                   {{Form::text('from', null, array('class' => 'name', 'placeholder' => 'Enter your name'))}}
                                </div>
                                <div class="form-group">
                                   {{Form::label('email', 'email')}}
                                   {{Form::text('email', null, array('class' => 'name', 'placeholder' => 'Enter your email'))}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                   {{Form::label('subject', 'Subject')}}
                                   {{Form::text('subject', null, array('class' => 'name', 'placeholder' => 'Enter subject'))}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                   {{Form::label('body', 'Body')}}
                                   {{Form::textarea('body', null, array('class' => 'name', 'rows' => '4', 'placeholder' => 'Enter your message'))}}
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                {{Form::submit('Send email', array('class'=> 'btn btn-primary'))}}
                            </div>
                        </div>
                    </form>
                            {{Form::close()}}
                </div>
            </div>
        </div>
    </section>
@stop