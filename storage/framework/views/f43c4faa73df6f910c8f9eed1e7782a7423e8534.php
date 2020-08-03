<?php if((string)$siteSetting->facebook_address !== ''): ?>
<a href="<?php echo e($siteSetting->facebook_address); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
<?php endif; ?>

<?php if((string)$siteSetting->twitter_address !== ''): ?>
<a href="<?php echo e($siteSetting->twitter_address); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
<?php endif; ?>
<?php if((string)$siteSetting->instagram_address !== ''): ?>
<a href="<?php echo e($siteSetting->instagram_address); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
<?php endif; ?>
<?php if((string)$siteSetting->linkedin_address !== ''): ?>
<a href="<?php echo e($siteSetting->linkedin_address); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
<?php endif; ?>
<?php if((string)$siteSetting->youtube_address !== ''): ?>
<a href="<?php echo e($siteSetting->youtube_address); ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
<?php endif; ?>
