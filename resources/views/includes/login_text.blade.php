
<div class="userloginbox">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<img src="{{asset('/')}}images/Works/callto.png" alt="" />
			</div>
			<div class="col-lg-6 align-self-center text-center">
				<div class="text-center text-primary">
					<h3 class="text-sm-center">{{__('Are You Looking For Job!')}} </h3>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nunc ex, maximus vel felis ut, vestibulum tristique enim. Proin eu nulla est. Maecenas tempor euismod suscipit. Sed at libero ante. Vestibulum nec odio lacus.</p>

				@if(!Auth::user() && !Auth::guard('company')->user())
					<div class="viewallbtn"><a type="button" class="btn btn-amber" href="{{route('register')}}"> {{__('Get Started Today')}} </a></div>
				@else
					<div class="viewallbtn"><a type="button" class="btn btn-amber" href="{{url('my-profile')}}">{{__('Build Your CV')}} </a></div>
				@endif
			</div>

		</div>
	</div>

</div>
