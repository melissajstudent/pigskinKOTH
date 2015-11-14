@extends('layouts.master')


@section('title')
    KOTH Dashboard
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')

	<link href="/css/navbar-static-top.css" rel="stylesheet">

@stop

@section('top_nav')
	
	    <div class="navbar navbar-static-top">
	        <div class="nav navbar-nav navbar-right">             
	            <li class="dropdown">
	              	<a href="#" class="dropdown-toggle btn-large" data-toggle="dropdown" role="menu" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> <span class="caret"></span></a>
	              	<ul class="dropdown-menu">
	                	<li><a href="#">Account</a></li>
	                	<li><a href="/">Sign Off</a></li>
	              	</ul>
            	</li>     
	        </div>
	    </div>
	
@stop

@section('content')
	<h1>Dashboard</h1>
    Awesome content will go here
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
	<script type="text/javascript" src="/js/dropdown.js"></script>
	<script>
	     $(document).ready(function(){
	        $('.dropdown-toggle').dropdown()
	    });
	</script>
    
@stop