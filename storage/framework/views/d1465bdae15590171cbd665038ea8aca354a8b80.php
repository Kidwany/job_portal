<?php if(isset($video)): ?>
<div class="videowraper section">
			
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="embed-responsive embed-responsive-16by9">
				  <iframe src="<?php echo e($video->video_link); ?>" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-5">
			
				<div class="vidover">
        <div class="titleTop">
            <h3><?php echo e(__('Watch Our')); ?> <span><?php echo e(__('Video')); ?></span></h3>
        </div>
        <!-- title end -->
        <p><?php echo e($video->video_text); ?></p>
			</div>
			
			</div>
		</div>
	
	</div>
				
		
		
			
	
		
		
       
     
</div>









<?php endif; ?>