@include('layouts.header')
@include('layouts.header-body')
<section class="main-wrapper mb-40">
    <div class="container">
    	<div class="featured-wrap">
			@section('section-one')

			@show
		</div>
		@section('news-ticker-wrap')

		@show
		<div class="main-content mt-20 ov-hidden">
			<div class="col-md-8 sm-padding">
				@section('section-two')

				@show
			</div>
			<aside class="col-md-4 sm-padding">
				@section('section-three')

				@show
			</aside>
		</div>
	</div>
</section>
@include('layouts.footer-body-two')
@include('layouts.footer-body-one')
@include('layouts.footer')