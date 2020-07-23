@extends('layouts.admin-app')

    @section('content')
						
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Gallery</a></li>
			</ul>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon picture"></i><span class="break"></span> Gallery</h2>
						<div class="box-icon">
							<a href="#" id="toggle-fullscreen" class="hidden-phone hidden-tablet"><i class="halflings-icon fullscreen"></i></a>
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div class="masonry-gallery">
														<div id="image-1" class="masonry-thumb">
								<a style="background:url(img/gallery/photo1.jpg)" title="Sample Image 1" href="img/gallery/photo1.jpg"><img class="grayscale" src="img/gallery/photo1.jpg" alt="Sample Image 1"></a>
							</div>
														<div id="image-2" class="masonry-thumb">
								<a style="background:url(img/gallery/photo2.jpg)" title="Sample Image 2" href="img/gallery/photo2.jpg"><img class="grayscale" src="img/gallery/photo2.jpg" alt="Sample Image 2"></a>
							</div>
														<div id="image-3" class="masonry-thumb">
								<a style="background:url(img/gallery/photo3.jpg)" title="Sample Image 3" href="img/gallery/photo3.jpg"><img class="grayscale" src="img/gallery/photo3.jpg" alt="Sample Image 3"></a>
							</div>
														<div id="image-4" class="masonry-thumb">
								<a style="background:url(img/gallery/photo4.jpg)" title="Sample Image 4" href="img/gallery/photo4.jpg"><img class="grayscale" src="img/gallery/photo4.jpg" alt="Sample Image 4"></a>
							</div>
														<div id="image-5" class="masonry-thumb">
								<a style="background:url(img/gallery/photo5.jpg)" title="Sample Image 5" href="img/gallery/photo5.jpg"><img class="grayscale" src="img/gallery/photo5.jpg" alt="Sample Image 5"></a>
							</div>
														<div id="image-6" class="masonry-thumb">
								<a style="background:url(img/gallery/photo6.jpg)" title="Sample Image 6" href="img/gallery/photo6.jpg"><img class="grayscale" src="img/gallery/photo6.jpg" alt="Sample Image 6"></a>
							</div>
														<div id="image-7" class="masonry-thumb">
								<a style="background:url(img/gallery/photo7.jpg)" title="Sample Image 7" href="img/gallery/photo7.jpg"><img class="grayscale" src="img/gallery/photo7.jpg" alt="Sample Image 7"></a>
							</div>
														<div id="image-8" class="masonry-thumb">
								<a style="background:url(img/gallery/photo8.jpg)" title="Sample Image 8" href="img/gallery/photo8.jpg"><img class="grayscale" src="img/gallery/photo8.jpg" alt="Sample Image 8"></a>
							</div>
														<div id="image-9" class="masonry-thumb">
								<a style="background:url(img/gallery/photo9.jpg)" title="Sample Image 9" href="img/gallery/photo9.jpg"><img class="grayscale" src="img/gallery/photo9.jpg" alt="Sample Image 9"></a>
							</div>
														<div id="image-10" class="masonry-thumb">
								<a style="background:url(img/gallery/photo10.jpg)" title="Sample Image 10" href="img/gallery/photo10.jpg"><img class="grayscale" src="img/gallery/photo10.jpg" alt="Sample Image 10"></a>
							</div>
														<div id="image-11" class="masonry-thumb">
								<a style="background:url(img/gallery/photo11.jpg)" title="Sample Image 11" href="img/gallery/photo11.jpg"><img class="grayscale" src="img/gallery/photo11.jpg" alt="Sample Image 11"></a>
							</div>
														<div id="image-12" class="masonry-thumb">
								<a style="background:url(img/gallery/photo12.jpg)" title="Sample Image 12" href="img/gallery/photo12.jpg"><img class="grayscale" src="img/gallery/photo12.jpg" alt="Sample Image 12"></a>
							</div>
														<div id="image-13" class="masonry-thumb">
								<a style="background:url(img/gallery/photo13.jpg)" title="Sample Image 13" href="img/gallery/photo13.jpg"><img class="grayscale" src="img/gallery/photo13.jpg" alt="Sample Image 13"></a>
							</div>
													</div>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
  @endsection