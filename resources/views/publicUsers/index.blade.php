@extends('layouts.publicUsers')
@section('content')

     <!-- about -->
	@include('publicUsers.indexIncludes._about')
	<!-- //about -->

	<!-- Stats-->
	@include('publicUsers.indexIncludes._stats')
	<!-- //Stats -->

	<!-- course-->
	@include('publicUsers.indexIncludes._stats')
	<!-- //course -->

	<!-- what we do -->
	@include('publicUsers.indexIncludes._stats')
	<!-- //what we do -->

	<!-- video and events -->
	@include('publicUsers.indexIncludes._stats')
	<!-- //video and events -->

	<!-- testimonials -->
	<div class="testimonials py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-white text-center mb-5">what our
				<span class="font-weight-bold">people says</span>
			</h3>
			<div class="mis-stage">
				<!-- The element to select and apply miSlider to - the class is optional -->
				<ol class="mis-slider">
					<!-- The slider element - the class is optional -->
					<li class="mis-slide">
						<!-- A slide element - the class is optional -->
						<a href="#" class="mis-container">
							<!-- A slide container - this element is optional, if absent the plugin adds it automatically -->
							<figure>
								<!-- Slide content - whatever you want -->
								<img src="images/t1.jpg" alt=" " class="img-fluid" />
								<figcaption>Carl Lii
									<span>Sed maximus eros quis leo.</span>
								</figcaption>
							</figure>
						</a>
					</li>
					<li class="mis-slide">
						<a href="#" class="mis-container">
							<figure>
								<img src="images/t2.jpg" alt=" " class="img-fluid" />
								<figcaption>Michael Paul
									<span>Sed maximus eros quis leo.</span>
								</figcaption>
							</figure>
						</a>
					</li>
					<li class="mis-slide">
						<a href="link" class="mis-container">
							<figure>
								<img src="images/t3.jpg" alt=" " class="img-fluid" />
								<figcaption>Henry Doe
									<span>Sed maximus eros quis leo.</span>
								</figcaption>
							</figure>
						</a>
					</li>
					<li class="mis-slide">
						<a href="#" class="mis-container">
							<figure>
								<img src="images/t4.jpg" alt=" " class="img-fluid" />
								<figcaption>Laura James
									<span>Sed maximus eros quis leo.</span>
								</figcaption>
							</figure>
						</a>
					</li>
					<li class="mis-slide">
						<a href="#" class="mis-container">
							<figure>
								<img src="images/t5.jpg" alt=" " class="img-fluid" />
								<figcaption>Thomas Carl
									<span>Sed maximus eros quis leo.</span>
								</figcaption>
							</figure>
						</a>
					</li>
					<li class="mis-slide">
						<a href="#" class="mis-container">
							<figure>
								<img src="images/t6.jpg" alt=" " class="img-fluid" />
								<figcaption>Rosy Crisp
									<span>Sed maximus eros quis leo.</span>
								</figcaption>
							</figure>
						</a>
					</li>
					<li class="mis-slide">
						<a href="#" class="mis-container">
							<figure>
								<img src="images/t4.jpg" alt=" " class="img-fluid" />
								<figcaption>Michael Paul
									<span>Sed maximus eros quis leo.</span>
								</figcaption>
							</figure>
						</a>
					</li>
				</ol>
			</div>
		</div>
	</div>
	<!-- //testimonials -->

	<!-- news -->
	<div class="news-section py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">our lastest
				<span class="font-weight-bold">news</span>
			</h3>
			<div class="row news-grids-w3l pt-md-4">
				<div class="col-md-4 news-grid">
					<a href="blog.html">
						<img src="images/n1.jpg" class="img-fluid" alt="" />
					</a>
					<div class="news-text">
						<div class="news-events-agile event-colo1 py-2 px-3">
							<h5 class="float-left">
								<a href="blog.html" class="text-white">07 May</a>
							</h5>
							<div class="post-img float-right">
								<ul>
									<li>
										<a href="#">
											<i class="far fa-comments text-white"></i>
										</a>
									</li>
									<li class="mx-3">
										<a href="#">
											<i class="far fa-heart text-white"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-share text-white"></i>
										</a>
									</li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="detail-bottom">
							<h6 class="my-3">
								<a href="blog.html" class="text-dark">
									Eiusmod tempor incididunt ut labore sed do eiusmod
								</a>
							</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod
								tempor incididunt ut labore</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 news-grid my-md-0 my-sm-5 my-4">
					<a href="blog.html">
						<img src="images/n2.jpg" class="img-fluid" alt="" />
					</a>
					<div class="news-text">
						<div class="news-events-agile py-2 px-3">
							<h5 class="float-left">
								<a href="blog.html" class="text-white">07 May</a>
							</h5>
							<div class="post-img float-right">
								<ul>
									<li>
										<a href="#">
											<i class="far fa-comments text-white"></i>
										</a>
									</li>
									<li class="mx-3">
										<a href="#">
											<i class="far fa-heart text-white"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-share text-white"></i>
										</a>
									</li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="detail-bottom">
							<h6 class="my-3">
								<a href="blog.html" class="text-dark">
									Eiusmod tempor incididunt ut labore sed do eiusmod
								</a>
							</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod
								tempor incididunt ut labore</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 news-grid">
					<a href="blog.html">
						<img src="images/n3.jpg" class="img-fluid" alt="" />
					</a>
					<div class="news-text">
						<div class="news-events-agile event-colo3 py-2 px-3">
							<h5 class="float-left">
								<a href="blog.html" class="text-white">07 May</a>
							</h5>
							<div class="post-img float-right">
								<ul>
									<li>
										<a href="#">
											<i class="far fa-comments text-white"></i>
										</a>
									</li>
									<li class="mx-3">
										<a href="#">
											<i class="far fa-heart text-white"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-share text-white"></i>
										</a>
									</li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="detail-bottom">
							<h6 class="my-3">
								<a href="blog.html" class="text-dark">
									Eiusmod tempor incididunt ut labore sed do eiusmod
								</a>
							</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod
								tempor incididunt ut labore</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //news -->

@endsection