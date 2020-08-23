<footer>
    <div class="top-footer">
        <div class="mfa-container">
            <div class="section-zero">
                <div class="section-body">
                    <div class="img-div">
                        <img src="<?php echo e(asset('website/images/logo/logo-black.png')); ?>" alt="img" />
                    </div>

                    <div class="contact-info">
                        <div class="address">
                            <span>
                                <i class="feather icon-map-pin"></i>
                                <?php echo e($siteSetting->site_street_address); ?>

                            </span>
                        </div>
                        <div class="Email">
                            <span>
                                <i class="feather icon-mail"></i>
                                <?php echo e($siteSetting->mail_to_address); ?>

                            </span>
                        </div>
                        <div class="phones">
                            <a class="phone" href="tel:<?php echo e($siteSetting->site_phone_primary); ?>">
                                <span>
                                    <i class="feather icon-phone"></i>
                                    <?php echo e($siteSetting->site_phone_primary); ?>

                                </span>
                            </a>
                            <a class="phone" href="tel: <?php echo e($siteSetting->site_phone_secondary); ?>">
                                <span>
                                    <i class="feather icon-phone"></i>
                                    <?php echo e($siteSetting->site_phone_secondary); ?>

                                </span>
                            </a>
                        </div>
                    </div>

                    <ul class="social-ul">
                        <?php if((string)$siteSetting->facebook_address !== ''): ?>
                            <li>
                                <a href="<?php echo e($siteSetting->facebook_address); ?>" target="_blank">
                                    <i class="ion-social-facebook-outline"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if((string)$siteSetting->twitter_address !== ''): ?>
                            <li>
                                <a href="<?php echo e($siteSetting->twitter_address); ?>" target="_blank">
                                    <i class="ion-social-twitter-outline"></i>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if((string)$siteSetting->instagram_address !== ''): ?>
                            <li>
                                <a href="<?php echo e($siteSetting->instagram_address); ?>" target="_blank">
                                    <i class="ion-social-instagram-outline"></i>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if((string)$siteSetting->youtube_address !== ''): ?>
                            <li>
                                <a href="<?php echo e($siteSetting->youtube_address); ?>" target="_blank">
                                    <i class="ion-social-youtube-outline"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="section-one">
                <div class="section-heading">
                    <p>
                        Quick links
                    </p>
                </div>
                <div class="section-body">
                    <ul class="main-section-ul">
                        <li>
                            <a href="<?php echo e(route('index')); ?>">
                                <span>
                                    <?php echo e(__('Home')); ?>

                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('contact.us')); ?>">
                                <span>
                                    <?php echo e(__('Contact Us')); ?>

                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('company.listing')); ?>">
                                <span>
                                    Partners
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('travel.agent.listing')); ?>">
                                <span>
                                    <?php echo e(__('Travel Agents')); ?>

                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('traveling.to.europe')); ?>">
                                <span>
                                    <?php echo e(__('Traveling to Europe')); ?>

                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('youth.create')); ?>">
                                <span>
                                    <?php echo e(__('Youth Support')); ?>

                                </span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="section-two">
                <div class="section-heading">
                    <p>
                        <?php echo e(__('Jobs By Functional Area')); ?>

                    </p>
                </div>
                <div class="section-body">
                    <ul class="main-section-ul">
                        <?php
                            $functionalAreas = App\FunctionalArea::getUsingFunctionalAreas(10);
                        ?>

                        <?php $__currentLoopData = $functionalAreas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $functionalArea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e(route('job.list', ['functional_area_id[]' => $functionalArea->functional_area_id])); ?>">
                                <span>
                                    <?php echo e($functionalArea->functional_area); ?>

                                </span>
                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
            <div class="section-three">
                <div class="section-heading">
                    <p>
                        <?php echo e(__('Jobs By Industry')); ?>

                    </p>
                </div>
                <div class="section-body">
                    <ul class="main-section-ul">
                        <?php
                            $industries = App\Industry::getUsingIndustries(10);
                        ?>
                        <?php $__currentLoopData = $industries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $industry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e(route('job.list', ['industry_id[]'=>$industry->industry_id])); ?>">
                                    <span>
                                        <?php echo e($industry->industry); ?>

                                    </span>
                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-footer">
        <div class="mfa-container">
            <p>
                2020 &copy El Adrousi All rights reserved
            </p>
        </div>
    </div>
</footer>