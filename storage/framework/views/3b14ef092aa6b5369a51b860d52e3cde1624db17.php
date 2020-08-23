
<?php $__env->startSection('content'); ?>
    <!-- Header start -->
    <?php echo $__env->make('website.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php
        $company = $job->getCompany();
    ?>

    <!-- Job details page -->
    <div class="myPage">
        <div class="header-breadcrumb">
            <div class="page-title mfa-container">
                <?php echo e(__('Job Detail')); ?>

            </div>
            <div class="breadcrumb-wrapper">
                <div class="mfa-container">
                    <ul class="breadcrumb-ul">
                        <li class="breadcrumb-li">
                            <a href="<?php echo e(url('/')); ?>">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-li active-breadcrumb">
                            <?php echo e(__('Job Detail')); ?>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-content jobDetailsContent">
            <div class="searchWrapper">
                <div class="mfa-container">
                    <form class="searchJob" action="<?php echo e(route('job.list')); ?>" method="<?php echo e(__('Search Jobs')); ?>">
                        <div class="input-btn-group">
                            <input
                                    type="text"
                                    name="search"
                                    value="<?php echo e(Request::get('search', '')); ?>"
                                    placeholder="<?php echo e(__('Enter Skills, job title or Location')); ?>"
                            />
                            <button type="submit">
									<span>
										<?php echo e(__('Search Jobs')); ?>

									</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492 492">
                                    <defs></defs>
                                    <title>Asset 3</title>
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <path
                                                    class="cls-1"
                                                    d="M144.84,389.59a240.34,240.34,0,0,1-42.43-42.43L8.75,440.83a30,30,0,0,0,42.43,42.42Z"
                                            />
                                            <path
                                                    class="cls-2"
                                                    d="M102.41,347.16a240.34,240.34,0,0,0,42.43,42.43L173.38,361A201.19,201.19,0,0,1,131,318.62Z"
                                            />
                                            <path
                                                    class="cls-2"
                                                    d="M131,318.61A201,201,0,0,0,173.39,361h0A199.1,199.1,0,0,0,292,400c110.46,0,200-89.54,200-200S402.46,0,292,0,92,89.54,92,200a199.08,199.08,0,0,0,39,118.62Z"
                                            />
                                            <circle class="cls-1" cx="293" cy="200" r="164" />
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mfa-container">
                <div class="detailsWrapper">
                    <div class="leftDetails">
                        <div class="topDetails">
                            <div class="topDiv">
                                <div class="noLogo">
                                    <p class="title">
                                        <?php echo e($job->title); ?>

                                    </p>
                                    <div class="company__location">
                                        <a href="#" class="companyTitle">
                                            <?php echo e($company->name); ?>

                                        </a>
                                        <div class="location">
                                            <?php if((bool)$job->is_freelance): ?>
                                                Freelance
                                            <?php else: ?>
                                               <?php echo e($job->getLocation()); ?>

                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="jobTime">
                                        Posted <?php echo e($job->created_at->diffForHumans()); ?>

                                    </div>
                                </div>
                                <div class="companyLogo">
                                    <img src="<?php echo asset('company_logos/' . $company->logo); ?>" alt="img" />
                                </div>
                            </div>
                            <div class="bottomDiv">
                                <a href="#" class="applyLink">
                                    Apply for Job
                                </a>
                                <div class="positionsCount">
                                    <span><?php echo e($job->num_of_positions); ?></span>
                                    <span> Open Positions</span>
                                </div>
                            </div>
                        </div>

                        <div class="secondDetails">
                            <div class="aboutJobDiv">
                                <div class="title">
                                    About the Job
                                </div>
                                <div class="jobDesc">
                                    <p>
                                        <?php echo $job->description; ?>

                                    </p>
                                    
                                </div>
                            </div>

                            <div class="gridTable">
                                <ul class="gridUl">
                                    <li>
                                        <div class="cellTitle">
                                            <?php echo e(__('Experience')); ?>:
                                        </div>
                                        <div class="cellBody">
                                            <?php echo e($job->getJobExperience('job_experience')); ?>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="cellTitle">
                                            <?php echo e(__('Career Level')); ?>:
                                        </div>
                                        <div class="cellBody">
                                            <?php echo e($job->getCareerLevel('career_level')); ?>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="cellTitle">
                                            <?php echo e(__('Type')); ?>:
                                        </div>
                                        <div class="cellBody">
                                            <?php echo e($job->getJobType('job_type')); ?>

                                        </div>
                                    </li>
                                    <?php if(!(bool)$job->hide_salary): ?>
                                        <li>
                                            <div class="cellTitle">
                                                Salary:
                                            </div>
                                            <div class="cellBody">
                                                <strong><?php echo e($job->salary_from.' '.$job->salary_currency); ?> - <?php echo e($job->salary_to.' '.$job->salary_currency); ?></strong>
                                            </div>
                                        </li>
                                    <?php endif; ?>

                                    <li>
                                        <div class="cellTitle">
                                            Vacancies:
                                        </div>
                                        <div class="cellBody">
                                            <?php echo e($job->num_of_positions); ?> open positions
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>

                        <div class="thirdDetails">
                            <div class="skillsDiv">
                                <div class="title">
                                    Skills:
                                </div>
                                <ul class="skillsUl">
                                    <?php echo $job->getJobSkillsList(); ?>

                                </ul>
                            </div>
                        </div>

                        <div class="fourthDetails">
                            <div class="benefitsDiv">
                                <div class="title">
                                    Benefits:
                                </div>
                                <div class="benefitsDesc">
                                    <p>
                                        <?php echo $job->benefits; ?>

                                    </p>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="moreBtns">
                            <?php if(Auth::check() && Auth::user()->isFavouriteJob($job->slug)): ?>
                                <a href="<?php echo e(route('remove.from.favourite', $job->slug)); ?>" class="addToFav">
                                    <i class="feather icon-minus"></i>
                                    Remove From favourites
                                </a>
                            <?php else: ?>
                                <a href="<?php echo e(route('add.to.favourite', $job->slug)); ?>" class="addToFav">
                                    <i class="feather icon-plus"></i>
                                    Add to favourites
                                </a>
                            <?php endif; ?>
                            <a href="<?php echo e(route('report.abuse', $job->slug)); ?>" class="reportBtn">
                                <i class="feather icon-alert-triangle"></i>
                                <?php echo e(__('Report Abuse')); ?>

                            </a>
                        </div>
                    </div>

                    <div class="rightDetails">
                        <div class="aboutCompany">
                            <div class="title">
                                About this Company
                            </div>
                            <div class="aboutBody">
                                <a href="<?php echo e(route('company.detail',$company->slug)); ?>" class="imgDiv">
                                    <img src="<?php echo asset('company_logos/' . $company->logo); ?>" alt="img" />
                                    <div class="title__count">
                                        <div class="compTitle">
                                            <?php echo e($company->name); ?>

                                            <?php if($company->isOnline()): ?>
                                                <small style="color: lightseagreen; font-weight: 200; font-size: 12px"> online</small>
                                            <?php else: ?>
                                                <small style="color: orangered; font-weight: 200; font-size: 12px"> offline</small>
                                            <?php endif; ?>
                                        </div>
                                        <div class="positionsCount">
                                            <span><?php echo e(App\Company::countNumJobs('company_id', $company->id)); ?> </span>
                                            <span> Open Positions</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="noLogo">
                                    <div class="location">
                                        <i class="feather icon-map-pin"></i>
                                        <?php echo e($company->getLocation()); ?>

                                    </div>

                                    <p class="compDesc">
                                        <?php echo e(str_limit(strip_tags($company->description), 250, '...')); ?>

                                        <a href="<?php echo e(route('company.detail',$company->slug)); ?>">
                                            <span> Read More</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="relatedJobs">
                            <div class="title">
                                Find Related Jobs
                            </div>
                            <ul class="relatedJobsUl">
                                <?php if(isset($relatedJobs) && count($relatedJobs)): ?>
                                    <?php $__currentLoopData = $relatedJobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedJob): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $relatedJobCompany = $relatedJob->getCompany(); ?>
                                        <?php if(null !== $relatedJobCompany): ?>
                                                <li>
                                                    <span>- </span>
                                                    <a href="<?php echo e(route('job.detail', [$relatedJob->slug])); ?>">
                                                        <?php echo e($relatedJob->title); ?>

                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </ul>
                        </div>

                        <div class="companyLocation">
                            <div class="title">
                                <i class="feather icon-map-pin"></i>
                                Company Location
                            </div>
                            <?php echo $company->map; ?>

                            
                        </div>

                        <div class="emailToFriend">
                            <div class="title">
                                <i class="feather icon-mail"></i>
                                Email to Friend
                            </div>
                            <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <form class="mfa-form share-friend-form" action="<?php echo e(route('email.to.friend', $job->slug)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="form-div">
                                    <input type="hidden" name="job_url" value="<?php echo e(route('job.detail', $job->slug)); ?>">
                                </div>
                                <div class="form-div">
                                    <label for="friend-name">
											<span>
												Friends Name
											</span>
                                        <input type="text" id="friend-name" required name="friend_name" value="<?php echo e(old('friend_name')); ?>"/>
                                        <i class="feather icon-user"></i>
                                    </label>
                                    <?php if($errors->has('friend_name')): ?> <span class="help-block"> <strong><?php echo e($errors->first('friend_name')); ?></strong> </span> <?php endif; ?>
                                </div>
                                <div class="form-div">
                                    <label for="friend-email">
											<span>
												Friends Email
											</span>
                                        <input type="text" id="friend-email" required name="friend_email" value="<?php echo e(old('friend_email')); ?>"/>
                                        <i class="feather icon-mail"></i>
                                    </label>
                                    <?php if($errors->has('friend_email')): ?> <span class="help-block"> <strong><?php echo e($errors->first('friend_email')); ?></strong> </span> <?php endif; ?>
                                </div>
                                <div class="form-div">
                                    <label for="your-name">
											<span>
												Your Name
											</span>
                                        <?php if(Auth::check()): ?>
                                            <input type="text" id="your-name" required name="your_name" value="<?php echo e(\Illuminate\Support\Facades\Auth::user()->name); ?>"/>
                                        <?php else: ?>
                                            <input type="text" id="your-name" required name="your_name" value="<?php echo e(old('your_name')); ?>"/>
                                        <?php endif; ?>

                                        <i class="feather icon-user"></i>
                                    </label>
                                    <?php if($errors->has('your_name')): ?> <span class="help-block"> <strong><?php echo e($errors->first('your_name')); ?></strong> </span> <?php endif; ?>
                                </div>
                                <div class="form-div">
                                    <label for="your-email">
											<span>
												Your Email
											</span>
                                        <?php if(Auth::check()): ?>
                                            <input type="text" id="your-email" required name="your_email" value="<?php echo e(\Illuminate\Support\Facades\Auth::user()->email); ?>"/>
                                        <?php else: ?>
                                            <input type="text" id="your-email" required name="your_email" value="<?php echo e(old('your_email')); ?>"/>
                                        <?php endif; ?>
                                        <i class="feather icon-mail"></i>
                                    </label>
                                    <?php if($errors->has('your_email')): ?> <span class="help-block"> <strong><?php echo e($errors->first('your_email')); ?></strong> </span> <?php endif; ?>
                                </div>
                                <button type="submit">
										<span>
											Send now
											<i class="feather icon-send"></i>
										</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./Job details page -->

    <?php echo $__env->make('website.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>