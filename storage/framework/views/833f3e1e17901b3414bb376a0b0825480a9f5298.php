<?php $__env->startSection('content'); ?>
<!-- Header start -->
<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php echo $__env->make('includes.inner_page_title', ['page_title'=>__('For Company')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="all-content">



	<section class="bg-white mb-md-4">
		<div class="container mt-5">
			<div class="row my-4 py-4 text-center">
				<div class="col-md-4 col-sm-12">
					<i class="icon is-shop"></i>
					<h5 class="my-4"><?php echo e(__('Small Business Solutions')); ?></h5>
					<a class="btn btn-amber" href="<?php echo e(url('offers-lite')); ?>"><?php echo e(__('Explore Now')); ?>

						</a>
				</div>
				<div class="col-md-4 col-sm-12">
					<i class="icon is-briefcase"></i>
					<h5 class="my-4"><?php echo e(__('Post Your Job')); ?></h5>
					<a class="btn btn-amber" href="#"><?php echo e(__('Post Now')); ?> </a>
						
				</div>
				<div class="col-md-4 col-sm-12">
					<i class="icon is-gift"></i>
					<h5 class="my-4"><?php echo e(__('Get Your Special Offer')); ?></h5>
					<a class="btn btn-amber" href="<?php echo e(url('company-offers')); ?>"><?php echo e(__('Save Now')); ?>

						 </a>
				</div>
			</div>
		</div>
	</section>

	<section class="text-center p-4">
		<div class="container">
			<div class="section-title text-center mb-4 pb-2">
				<h3 class="title title-line pb-5"><?php echo e(__('Select Your Recruitment Plan')); ?></h3>
			</div>

			<div class="input-group_inline">
			</div>
			<div id="cvSearchPackages" class="is-active tab" ata-tab="internationalPackge">

				<div class="row justify-content-center align-items-center text-center">
					<div class="col-md-4 col-sm-12">
						<div class="card py-4" id="5333">
							<div class="card-head display-1">
								<h3>Premium Job Posting</h3>
							</div>
							<div class="card-content">
								<del class="text-muted py-4 h4 d-block"  >$250</del>

								<p class="h2">$225</p>
								<form name="process_cart5333" id="checkout-form5333" method="post" action="#"
									class="my-4">
									<input type="hidden" name="redirect_if_not_owner" value="0">
									<input type="hidden" name="action_case" id="actionCase5333" value="16">
									<input type="hidden" name="voucher_code" value="">
									<input type="hidden" id="package_5333" name="package_to_purchase"
										value="5333@xx@225.0@1">
									<button type="submit" name="submitBtn5333" ata-value="5333@xx@225.0@1"
										data-package="package_5333"
										class="btn btn-amber">Buy Now</button>
								</form>
								<hr>
								<ul class="list px-3 text-small" style="line-height: 20px;">
									<li><span>•</span> Unlimited application</li>
									<li><span>•</span> Active for 60ays</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card py-4" id="6211">
							<div class="card-head">
								<div class="my-3 text-center">
									<p><b class="p text-small p-4">AMAZING OFFER!</b></p>
								</div>
								<div class="display-1">
									<h3>One Month CV Search <br><b class="font-weight-normal">+<br></b> Two
										Job Postings
									</h3>
								</div>
							</div>
							<div class="card-content">
								<del class="text-muted p-4 h4 d-block">$1,298</del>

								<p class="h2 p-4">$999.90</p>
								<form name="process_cart6211" id="checkout-form6211" method="post" action="#" class="">
									<input type="hidden" name="action_case" id="actionCase6211" value="11">
									<input type="hidden" id="package_6211" name="featured_offer_package" value="6211">
									<button type="submit" name="submitBtn6211" ata-package="package_6211"
										class="btn btn-amber">Buy Now</button>
								</form>
								<hr>
								<ul class="list px-3 text-small" style="line-height: 20px;">
									<li><span>•</span> Post 2 job advertisements for 60ays</li>
									<li><span>•</span> One Month access to our CVatabase and contact up to 500
										candidates</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="card py-4" id="3988">
							<div class="card-head display-1">
								<h3>1-Month CV Search</h3>
							</div>
							<div class="card-content">
								<del class="text-muted p-4 h4 d-block">$1000</del>

								<p class="h2">$900</p>
								<form name="process_cart3988" id="checkout-form3988" method="post" action="#"
									class="my-4">
									<input type="hidden" name="redirect_if_not_owner" value="0">
									<input type="hidden" name="action_case" id="actionCase3988" value="16">
									<input type="hidden" name="voucher_code" value="">
									<input type="hidden" id="package_3988" name="package_to_purchase"
										value="3988@xx@900.0@1">
									<button type="submit" name="submitBtn3988" ata-value="3988@xx@900.0@1"
										data-package="package_3988"
										class="btn btn-amber">Buy Now</button>
								</form>
								<hr>
								<ul class="list px-3 text-small" style="line-height: 20px;">
									<li><span>•</span> Use over 30 filters including nationality, location, and
										experience</li>
									<li><span>•</span> 13,000 fresh CVs everyay</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<p class="mt-4 text-center text-small">
				By clicking Buy Now, you agree to the <a href="#" class="is-black">
					<b>Service Agreement.</b>
				</a><br>Weo not charge any additional commission fees
				when you hire through Jobs Portal
			</p>
		</div>
	</section>

	<section class="bg-inverse text-center p-4">
		<h2 class="py-4">Who's Hiring on Jobs Portal</h2>
		<div class="box">
			<div class="card-banner">
				<img src="//img0cf.b8cdn.com/images/homepage/eg_who_is_hiring_20180712093150.png" class="u-stretch"
					alt="Who's Hiring on Jobs Portal" usemap="#map" ata-width="779" ata-height="312">
			</div>
		</div>
	</section>

	<section class="bg-inverse text-center p-4">
		<div class="container mt-5 text-center">
			<h2 class="my-4 py-4" >
				How Jobs Portal Can Help You Hire </h2>
			<div class="row my-4 py-4" >
				<div class="col">
					<a href="#"><i class="icon is-briefcase is-64 text-primary"></i></a>
					<h3 class="m20t">Post a job </h3>
					<p>Receive applications from interested candidates </p>
				</div>
				<div class="col">
					<a href="#"><i class="icon is-search is-64 text-primary"></i></a>
					<h3 class="m20t">Search CVs </h3>
					<p class="m0">
						Search more than 38 million CVs across all industries, career levels, and nationalities </p>
				</div>
				<div class="col">
					<a href="#"><i class="icon is-color-palette is-64 text-primary"></i></a>
					<h3 class="m20t">Branding Solutions </h3>
					<p class="m0">Boost your employer brand with a company profile, branding solutions, and your very
						own
						career site</p>
				</div>
			</div>
		</div>
	</section>

	<section class="text-center bg-inverse p-4">
		<h2>Need Help?</h2>
		<p class="font-weight-normal ">Contact us and we will be happy to assist you</p>
		<ul class="list is-basic is-spaced">
			<li><a href="#" class="h2">Call Us: ‎ +20-2-12345678</a></li>
			<li><a class="btn btn-amber my-3" href="#mailto:email">Email Us</a></li>
			<li>
				<img src="//img1cf.b8cdn.com/bayt/assets/employers-144/images/need-help-img.png" alt="Need help"
					class="img-120-m img-240-d">
			</li>
		</ul>
	</section>

	<section class="bg-inverse text-center p-4">
		<div class="container mt-5 text-center">
			<h2 class="my-4 py-4">
				What Our 40,000 Clients Say About Us. </h2>
			<div class="row my-4 py-4">
				<div class="col u-spready">
					<div>
						<img height="100" alt="Ingy Kadry"
							src="//img0cf.b8cdn.com/images/logo/30/300330_logo_1561626444_n.png">
						<p>
							Jobs Portal customer service extended help and a prime example of quality service. They went
							...<a href="#">more </a>
						</p>
					</div>
					<div>
						<p><b>Ingy Kadry</b></p>
						<p>Senior Recruiter</p>
						<p class="text-muted">Egypt</p>
					</div>
				</div>
				<div class="col u-spready">
					<div>
						<img height="100" alt="Alice Wanis"
							src="//img0cf.b8cdn.com/images/logo/48/1026548_logo_1566458560_n.png">
						<p>
							I am very impressed with the first class service I have received from Jobs Portal. </p>
					</div>
					<div>
						<p><b>Alice Wanis</b></p>
						<p>Recruiter</p>
						<p class="text-muted">Egypt</p>
					</div>
				</div>
				<div class="col u-spready">
					<div>
						<img height="100" alt="Maged Salama"
							src="//img0cf.b8cdn.com/images/logo/96/1399296_logo_1470313520_n.png">
						<p>
							“The Jobs Portal team has been very helpful and made sure we got the maximum benefit out
							of...<a href="#">more </a>
						</p>
					</div>
					<div>
						<p><b>Maged Salama</b></p>
						<p>Senior HR Specialist</p>
						<p class="text-muted">Egypt</p>
					</div>
				</div>
			</div>
			<div class="my-4">
				<a class="btn btn-amber" href="#">See More Testimonials </a>
			</div>
		</div>
	</section>

	<div class="container mt-5 bg-inverse text-center">
		<h2 class="my-4">
			Why Jobs Portal? </h2>
		<p class="m0t">Largest community of job seekers. Fast, easy, cost-effective. Customer-first attitude.</p>
		<div class="row my-4 py-4">
			<div class="col">
				<i class="icon is-text is-64 text-primary" ata-text="38M+"></i>
				<h3 class="m20t">Massive reach</h3>
				<p>Reach the largest community of job seekers in the Middle East, from across all industries and
					career levels. Growing at over 12,000 aay. </p>
			</div>
			<div class="col">
				<i class="icon is-target is-64 text-primary"></i>
				<h3 class="m20t">Easy &amp; fast </h3>
				<p>Hiring couldn't be easier. Our super-charged tools will help you find, shortlist and contact your
					perfect hire in no time </p>
			</div>
			<div class="col">
				<i class="icon is-wallet is-64 text-primary"></i>
				<h3 class="m20t">Cost-Effective hiring </h3>
				<p>Hire the best talent while maximizing your ROI. Choose from several solutions that works with
					your time and budget. </p>
			</div>
		</div>

	</div>

	<section class="bg-inverse text-center p-4">
		<div class="container text-center">
			<h2 class="py-4 my-4">Free Consultation</h2>
			<img alt="Consultation" class="is-circular"
				src="//img2cf.b8cdn.com/bayt/assets/employers-144/images/free-consultation-img.png">
			<p class="font-weight-normal my-4">Hello, let us help youecide on the best recruitment <br> strategy to use
				for
				your
				business. </p>
			<a class="btn btn-amber my-4" href="#">Schedule a Free Consultation</a>
		</div>
	</section>

</div>

<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>