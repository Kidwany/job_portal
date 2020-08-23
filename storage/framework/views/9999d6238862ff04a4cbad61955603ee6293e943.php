<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-12 col-12"> <a href="<?php echo e(url('/')); ?>" class="logo"><img
                            src="<?php echo e(asset('/')); ?>sitesetting_images/thumb/<?php echo e($siteSetting->site_logo); ?>"
                            alt="<?php echo e($siteSetting->site_name); ?>" /></a>
                <div class="navbar-header navbar-light">
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                            data-target="#nav-main" aria-controls="nav-main" aria-expanded="false"
                            aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-lg-10 col-md-12 col-12 p-0 align-items-center">

                <!-- Nav start -->
                <nav class="navbar navbar-expand-lg navbar-light">

                    <div class="navbar-collapse collapse" id="nav-main">
                        <ul class="navbar-nav text-center ml-auto">
                            <li class="nav-item <?php echo e(Request::url() == route('index') ? 'active' : ''); ?>"><a
                                        href="<?php echo e(url('/')); ?>" class="nav-link"><?php echo e(__('Home')); ?></a> </li>

                            <?php if(Auth::guard('company')->check()): ?>
                                <li class="nav-item"><a href="<?php echo e(url('/job-seekers')); ?>"
                                                        class="nav-link"><?php echo e(__('Seekers')); ?></a> </li>
                            <?php else: ?>
                                <li class="nav-item"><a href="<?php echo e(url('/jobs')); ?>" class="nav-link"><?php echo e(__('Jobs')); ?></a> </li>
                            <?php endif; ?>

                            <li class="nav-item"><a href="<?php echo e(route('company.listing')); ?>" class="nav-link">Partners</a> </li>
                            <li class="nav-item"><a href="<?php echo e(route('travel.agent.listing')); ?>" class="nav-link"><?php echo e(__('Travel Agents')); ?></a> </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Solutions
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    
                                    <a href="<?php echo e(route('traveling.to.europe')); ?>" class="dropdown-item"><?php echo e(__('Traveling to Europe')); ?></a>
                                    <a href="<?php echo e(route('talented.create')); ?>" class="dropdown-item">Are you Talented?</a>
                                    <a href="<?php echo e(route('youth.create')); ?>" class="dropdown-item"><?php echo e(__('Youth Support')); ?></a>
                                    <a href="#" class="dropdown-item">Remote Working</a>
                                    <a href="#" class="dropdown-item">Exams</a>
                                </div>
                            </li>


                            

                            

                            <li style="display: none;"
                                class="nav-item <?php echo e(Request::url() == route('blogs') ? 'active' : ''); ?>"><a
                                        href="<?php echo e(route('blogs')); ?>" class="nav-link"><?php echo e(__('Blog')); ?></a> </li>

                            <li style="display: none;"
                                class="nav-item <?php echo e(Request::url() == route('contact.us') ? 'active' : ''); ?>">
                                <a href="<?php echo e(route('contact.us')); ?>" class="nav-link"><?php echo e(__('Contact us')); ?></a>
                            </li>
                            

                            


                            <?php if(Auth::check()): ?>
                                <li class="nav-item dropdown userbtn"><a href="#"><?php echo e(Auth::user()->printUserImage()); ?></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="<?php echo e(route('home')); ?>" class="nav-link"><i
                                                        class="fa fa-tachometer" aria-hidden="true"></i> <?php echo e(__('Dashboard')); ?></a>
                                        </li>
                                        <li class="nav-item"><a href="<?php echo e(route('my.profile')); ?>" class="nav-link"><i
                                                        class="fa fa-user" aria-hidden="true"></i> <?php echo e(__('My Profile')); ?></a>
                                        </li>
                                        <li class="nav-item"><a href="<?php echo e(route('view.public.profile', Auth::user()->id)); ?>"
                                                                class="nav-link"><i class="fa fa-eye" aria-hidden="true"></i>
                                                <?php echo e(__('View Public Profile')); ?></a> </li>
                                        <li><a href="<?php echo e(route('my.job.applications')); ?>" class="nav-link"><i
                                                        class="fa fa-desktop" aria-hidden="true"></i>
                                                <?php echo e(__('My Job Applications')); ?></a> </li>
                                        <li class="nav-item"><a href="<?php echo e(route('logout')); ?>"
                                                                onclick="event.preventDefault(); document.getElementById('logout-form-header').submit();"
                                                                class="nav-link"><i class="fa fa-sign-out" aria-hidden="true"></i>
                                                <?php echo e(__('Logout')); ?></a> </li>
                                        <form id="logout-form-header" action="<?php echo e(route('logout')); ?>" method="POST"
                                              style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </ul>
                                </li>
                            <?php endif; ?>

                            <?php if(Auth::guard('company')->check()): ?>
                                <li class="nav-item postjob"><a href="<?php echo e(route('post.job')); ?>"
                                                                class="nav-link register"><?php echo e(__('Post a Job')); ?></a> </li>
                                <li class="nav-item dropdown userbtn"><a
                                            href="#"><?php echo e(Auth::guard('company')->user()->printCompanyImage()); ?></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="<?php echo e(route('company.home')); ?>" class="nav-link"><i
                                                        class="fa fa-tachometer" aria-hidden="true"></i> <?php echo e(__('Dashboard')); ?></a>
                                        </li>
                                        <li class="nav-item"><a href="<?php echo e(route('company.profile')); ?>" class="nav-link"><i
                                                        class="fa fa-user" aria-hidden="true"></i> <?php echo e(__('Company Profile')); ?></a>
                                        </li>
                                        <li class="nav-item"><a href="<?php echo e(route('post.job')); ?>" class="nav-link"><i
                                                        class="fa fa-desktop" aria-hidden="true"></i> <?php echo e(__('Post A Job')); ?></a>
                                        </li>
                                        <li class="nav-item"><a href="<?php echo e(route('company.messages')); ?>" class="nav-link"><i
                                                        class="fa fa-envelope-o" aria-hidden="true"></i>
                                                <?php echo e(__('Company Messages')); ?></a></li>
                                        <li class="nav-item"><a href="<?php echo e(route('company.logout')); ?>"
                                                                onclick="event.preventDefault(); document.getElementById('logout-form-header1').submit();"
                                                                class="nav-link"><i class="fa fa-sign-out" aria-hidden="true"></i>
                                                <?php echo e(__('Logout')); ?></a> </li>
                                        <form id="logout-form-header1" action="<?php echo e(route('company.logout')); ?>" method="POST"
                                              style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </ul>
                                </li>
                            <?php endif; ?>

                            <?php if(Auth::guard('travel_agent')->check()): ?>
                                <li class="nav-item dropdown userbtn">
                                    <a href="#">
                                        <?php echo e(Auth::guard('travel_agent')->user()->printTravelAgentImage()); ?>

                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="<?php echo e(route('travel.agent.home')); ?>" class="nav-link">
                                                <i class="fa fa-tachometer" aria-hidden="true"></i> <?php echo e(__('Dashboard')); ?></a>
                                        </li>
                                        <li class="nav-item"><a href="<?php echo e(route('travel.agent.profile')); ?>" class="nav-link">
                                                <i class="fa fa-user" aria-hidden="true"></i> <?php echo e(__('Company Profile')); ?></a>
                                        </li>
                                        <li class="nav-item"><a href="<?php echo e(route('travel.agent.messages')); ?>" class="nav-link">
                                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                <?php echo e(__('Company Messages')); ?></a>
                                        </li>
                                        <li class="nav-item"><a href="<?php echo e(route('travel.agent.logout')); ?>"
                                                                onclick="event.preventDefault(); document.getElementById('logout-form-travel-agent').submit();"
                                                                class="nav-link">
                                                <i class="fa fa-sign-out" aria-hidden="true"></i> <?php echo e(__('Logout')); ?></a>
                                        </li>
                                        <form id="logout-form-travel-agent" action="<?php echo e(route('travel.agent.logout')); ?>"
                                              method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </ul>
                                </li>
                            <?php endif; ?>

                            <?php if(!Auth::user() && !Auth::guard('company')->user() && !Auth::guard('travel_agent')->user()): ?>
                                <li class="nav-item"><a href="<?php echo e(route('login')); ?>" class="nav-link"><i class="fa fa-sign-in mr-2"></i><?php echo e(__('Sign in')); ?>  </a></li>
                                <li class="nav-item"><a href="<?php echo e(url('company/register')); ?>"
                                                        class="nav-link text-success">Employer?</a> </li>
                                <li class="nav-item"><a href="<?php echo e(route('register')); ?>"
                                                        class="nav-link register"><i class="fa fa-user-plus mr-2"></i>Sign Up</a> </li>
                            <?php endif; ?>

                            <li class="nav-item dropdown pr-1 pl-1 userbtn">
                                <?php if(app()->getLocale() == 'en'): ?>
                                    <a href="javascript:;"
                                       onclick="event.preventDefault(); document.getElementById('locale-form-ar').submit();"
                                       class="">
                                        <img alt="Image language" src="<?php echo e(url('images/flags/ar.png')); ?>">
                            <li class="nav-item p-0 m-0 mt-2 pt-1 mr-3">
                                <span class="">
                                    ِعربي
                                </span>
                            </li>
                            </a>
                            <form id="locale-form-ar" action="<?php echo e(route('set.locale')); ?>" method="POST"
                                  style="display: none;">
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" name="locale" value="ar" />
                                <input type="hidden" name="return_url" value="<?php echo e(url()->full()); ?>" />
                                <input type="hidden" name="is_rtl" value="1" />
                            </form>
                            <?php else: ?>
                                <a href="javascript:;"
                                   onclick="event.preventDefault(); document.getElementById('locale-form-en').submit();"
                                   class="">
                                    <img alt="Image language" src="<?php echo e(url('images/flags/gb.png')); ?>">
                                    <li class="nav-item p-0 m-0 mt-2 pt-1 ml-3">
                                        <span class="">
                                            English
                                        </span>
                                    </li>
                                </a>
                                <form id="locale-form-en" action="<?php echo e(route('set.locale')); ?>" method="POST"
                                      style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="locale" value="en" />
                                    <input type="hidden" name="return_url" value="<?php echo e(url()->full()); ?>" />
                                    <input type="hidden" name="is_rtl" value="0" />
                                </form>
                                <?php endif; ?>

                                </li>
                        </ul>

                        <!-- Nav collapes end -->

                    </div>
                    <div class="clearfix"></div>
                </nav>

                <!-- Nav end -->

            </div>
        </div>

        <!-- row end -->

    </div>

    <!-- Header container end -->

</div>