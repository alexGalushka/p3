@extends('_master')

@section('title')
	Developer's Best Friend
@stop

@section('content')
	<h1>Developer's Best Friend</h1>
	<h2>Lorem Ipsum Generator</h2>
	<blockquote>
	In publishing and graphic design, lorem ipsum is a placeholder
	text commonly used to demonstrate the graphic elements of a document or visual presentation.
	By replacing the distraction of meaningful content with filler text of scrambled Latin it
	allows viewers to focus on graphical elements such as font, typography, and layout.
	</blockquote>
	
	<p>Create random filler text for your application</p>
	<a href='/lorem-ipsum'>Generate some test...</a> 
	<br>
	<h2>Random Users Generator</h2>
    <p>Create random user/users for your application</p>
	<a href='/user-generator'>Generate some users...</a>
@stop


