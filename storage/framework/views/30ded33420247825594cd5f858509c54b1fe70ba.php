<!-- <body> -->
<!-- start header -->
<div class="header-md">
    <div class="logo-lines">
        <div class="mfa-container">
            <div class="block-wrapper">
                <div class="lines hamburger hamburger--elastic">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
                <div class="logo-img">
                    <a href="<?php echo e(url('/')); ?>">
                        <img src="<?php echo e(asset('website/images/logo/logo-black.png')); ?>" alt="img" style="max-width: initial !important;"/>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- main links dropdown -->
    <div class="main-header-md-ul-div">
        <div class="img-ul-div">
            <a class="logo-img">
                <img src="<?php echo e(asset('website/images/logo/logo-black.png')); ?>" alt="img" style="max-width: initial !important;"/>
            </a>
            <ul class="main-header-md-ul">
                <li class="active-li">
                    <a href="<?php echo e(url('/')); ?>">
                        <span>
                            <?php echo e(__('Home')); ?>

                        </span>
                    </a>
                </li>

                <?php if(Auth::guard('company')->check()): ?>
                    <li>
                        <a href="<?php echo e(url('/job-seekers')); ?>">
                        <span>
                            <?php echo e(__('Seekers')); ?>

                        </span>
                        </a>
                    </li>
                <?php else: ?>
                    <li>
                        <a href="<?php echo e(url('/jobs')); ?>">
                        <span>
                            <?php echo e(__('Jobs')); ?>

                        </span>
                        </a>
                    </li>
                <?php endif; ?>

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


                <?php if(Auth::check()): ?>
                    <li class="drop-li">
                        <a href="#" class="drop-a">
                        <span>
                            Profile
                        </span>
                            <i class="ion-plus-round drop-i"></i>
                        </a>
                        <ul class="dropped-ul">
                            <li>
                                <a href="<?php echo e(route('home')); ?>">
                                <span>
                                    <?php echo e(__('Dashboard')); ?>

                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('my.profile')); ?>">
                                <span>
                                    <?php echo e(__('My Profile')); ?>

                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('view.public.profile', Auth::user()->id)); ?>">
                                <span>
                                     <?php echo e(__('View Public Profile')); ?>

                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('my.job.applications')); ?>">
                                <span>
                                     <?php echo e(__('My Job Applications')); ?>

                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form-header').submit();">
                                <span>
                                     <?php echo e(__('Logout')); ?>

                                </span>
                                </a>
                            </li>
                            <form id="logout-form-header" action="<?php echo e(route('logout')); ?>" method="POST"
                                  style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if(Auth::guard('company')->check()): ?>
                    <li class="drop-li">
                        <a href="#" class="drop-a">
                        <span>
                            Company Profile
                        </span>
                            <i class="ion-plus-round drop-i"></i>
                        </a>
                        <ul class="dropped-ul">
                            <li>
                                <a href="<?php echo e(route('company.home')); ?>">
                                <span>
                                    <?php echo e(__('Dashboard')); ?>

                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('company.profile')); ?>">
                                <span>
                                    <?php echo e(__('Company Profile')); ?>

                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('post.job')); ?>">
                                <span>
                                     <?php echo e(__('Post A Job')); ?>

                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('company.messages')); ?>">
                                <span>
                                     <?php echo e(__('Company Messages')); ?>

                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('company.logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form-header1').submit();">
                                <span>
                                     <?php echo e(__('Logout')); ?>

                                </span>
                                </a>
                            </li>
                            <form id="logout-form-header1" action="<?php echo e(route('company.logout')); ?>" method="POST"
                                  style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if(Auth::guard('travel_agent')->check()): ?>
                    <li class="drop-li">
                        <a href="#" class="drop-a">
                        <span>
                            Agent Profile
                        </span>
                            <i class="ion-plus-round drop-i"></i>
                        </a>
                        <ul class="dropped-ul">
                            <li>
                                <a href="<?php echo e(route('travel.agent.home')); ?>">
                                <span>
                                    <?php echo e(__('Dashboard')); ?>

                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('travel.agent.profile')); ?>">
                                <span>
                                    <?php echo e(__('Company Profile')); ?>

                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('travel.agent.messages')); ?>">
                                <span>
                                     <?php echo e(__('Company Messages')); ?>

                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('travel.agent.logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form-header1').submit();">
                                <span>
                                     <?php echo e(__('Logout')); ?>

                                </span>
                                </a>
                            </li>
                            <form id="logout-form-header1" action="<?php echo e(route('travel.agent.logout')); ?>" method="POST"
                                  style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </ul>
                    </li>
                <?php endif; ?>

                <li class="drop-li toBeClonedLi">
                    <a href="#" class="drop-a">
                        <span>
                            Solutions
                        </span>
                        <i class="ion-plus-round drop-i"></i>
                    </a>
                    <ul class="dropped-ul">
                        <li>
                            <a href="<?php echo e(url('traveling-to-europe')); ?>">
                                <span>
                                    Traveling to Europe
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('talented')); ?>">
                                <span>
                                    Are you talented?
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('youth')); ?>">
                                <span>
                                    Youth support
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="http://freelance.limitlessgroup-eg.com" target="_blank">
                                <span>
                                    Remote working
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    Exams
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    LMS
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    Study aboard
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    Build your cv
                                </span>
                            </a>
                        </li>
                         <li>
                            <a href="<?php echo e(url('certificate')); ?>">
                                <span>
                                    Certificate Translate
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <?php if(!Auth::user() && !Auth::guard('company')->user() && !Auth::guard('travel_agent')->user()): ?>
                    <li>
                        <a href="<?php echo e(url('company/register')); ?>">
                        <span>
                            Employer?
                        </span>
                        </a>
                    </li>
                    <li class="loginLi">
                        <a href="<?php echo e(route('login')); ?>">
                            <i class="feather icon-log-in"></i>
                            <?php echo e(__('Sign in')); ?>

                        </a>
                    </li>
                    <li class="signupLi">
                        <a href="<?php echo e(route('register')); ?>">
                            <i class="feather icon-user-plus"></i>
                            Sign Up
                        </a>
                    </li>
                    <li class="langLi">
                        <a href="#">
                            <img src="<?php echo e(asset('website/images/icons/sa.svg')); ?>" alt="Arabic" />
                        </a>
                    </li>

                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>

<div class="header-lg">
    <div class="header-lg-top">
        <div class="mfa-container">
            <div class="block-wrapper">
                <div class="phone-social-links">
                    <div class="notification-div">
                        <span class="title-span">
                            Hiring Open:
                        </span>
                        Are you a driven and motivated 1st line IT Support Engineer?
                    </div>
                    <ul class="social-ul">
                        <li>
                            <a href="#" class="facebook-link">
                                <i class="ion-social-facebook-outline"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="twitter-link">
                                <i class="ion-social-twitter-outline"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="instagram-link">
                                <i class="ion-social-instagram-outline"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="sanpchat-link">
                                <i class="ion-social-snapchat-outline"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-lg-bottom">
        <div class="mfa-container">
            <div class="block-wrapper">
                <div class="logo-img">
                    <a href="<?php echo e(url('/')); ?>">
                        <img src="<?php echo e(asset('website/images/logo/logo-black.png')); ?>" alt="img" style="max-width: initial !important;"/>
                    </a>
                </div>
                <div class="header-lg-ul-div"></div>
            </div>
        </div>
    </div>
</div>

<div class="fixed-sub-nav">
    <!-- cloned ul goes here -->
</div>
<!-- end header -->