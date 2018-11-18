@extends('layouts.admin')
@section('LogoName','Apagie/Musha')
@section('content')

		
	
	<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			@include('school.includes._sidenav')
			<!-- end: Main Menu -->
			
			@include('layouts.includes._noscript')
			
			<!-- start: Content -->
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
						
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Messages</a></li>
				<li></li>
				<li class="hidden-sm hidden-xs pull-right">
					<form class=" col-lg-6 col-md-6 form-group">
						<div class="controls">
						    <input type="text" class=" typeahead form-control" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' placeholder="Search a teacher...">
						     <span class="input-group-addon"><button><i class="icon-search"></i></button></span>
						</div>
					</form>
				</li>
			</ul>
			<div class="w3-container">
					<div class="w3-card-4 test" style="width:92%;max-width:300px;">
                        <img src="{{asset('img/img_avatar3.png')}}" alt="Avatar" style="width:100%;opacity:0.85">
                        <div class="w3-container">
                    <h4><b>John</b></h4>    
                        <p>Head Teacher</p>    
                        </div>
                    </div>
                    <div class="w3-card-4 test" style="width:92%;max-width:300px;">
                        <img src="{{asset('img/img_avatar3.png')}}" alt="Avatar" style="width:100%;opacity:0.85">
                        <div class="w3-container">
                    <h4><b>John</b></h4>    
                        <p>Head Teacher</p>    
                        </div>
                    </div>		
                    <div class="w3-card-4 test" style="width:92%;max-width:300px;">
                        <img src="{{asset('img/img_avatar3.png')}}" alt="Avatar" style="width:100%;opacity:0.85">
                        <div class="w3-container">
                    <h4><b>John</b></h4>    
                        <p>Head Teacher</p>    
                        </div>
                    </div>			
			</div>
	    </div><!--/.fluid-container-->
	
			<!-- end: Content -->
	</div><!--/#content.span10-->
	

@endsection