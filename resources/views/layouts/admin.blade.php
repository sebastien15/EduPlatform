<!DOCTYPE html>
<html lang="en">
@include('layouts.includes._head')

<body>
		<!-- start: Header -->
	@include('layouts.includes._nav')
	<!-- start: Header -->
	
		@yield('content')
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
  @include('layouts.includes._footer')
  @include('layouts.includes._scripts')
	
</body>
</html>
