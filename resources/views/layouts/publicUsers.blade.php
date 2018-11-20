@include('layouts.Pusersincludes._head')

<body>
	<!-- header -->
	@include('layouts.Pusersincludes._header')
	<!-- //header -->

	<!-- banner -->
	@include('layouts.Banner.Pusersincludes._banner')
	<!-- //banner -->

	@yield('content')

	<!-- brands -->
	@include('layouts.Pusersincludes._footer')
	<!-- //brands -->

	<!-- footer -->
	@include('layouts.Pusersincludes._footer')
	<!-- //footer -->


	@include('louts.Pusersincludes._scripts')

</body>

</html>