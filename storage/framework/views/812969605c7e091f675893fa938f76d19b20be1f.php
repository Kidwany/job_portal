<div class="section" id="Blog">
    <div class="container">
        <!-- title start -->
        <div class="titleTop">
            <div class="subtitle"><?php echo e(__('Here You Can See')); ?></div>
            <h3 class="mt-2"><?php echo e(__('Latest')); ?> <span><?php echo e(__('Blogs')); ?></span></h3>
        </div>
        <!-- title end -->

        <ul class="jobslist row">
            <?php if(null!==($blogs)): ?>
                <?php
                $count = 1;
                ?>
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $cate_ids = explode(",", $blog->cate_id);
                    $data = DB::table('blog_categories')->whereIn('id', $cate_ids)->get();
                    $cate_array = array();
                    foreach ($data as $cat) {
                        $cate_array[] = "<a href='" . url('/blog/category/') . "/" . $cat->slug . "'>$cat->heading</a>";
                    }
                    ?>
                    <li class="col-lg-4">
                        <div class="bloginner">
                            <div class="postimg">
                                <?php if(null!==($blog->image) && $blog->image!=""): ?>

                                    <img src="<?php echo e(asset('uploads/blogs/'.$blog->image)); ?>" alt="<?php echo e($blog->heading); ?>">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('images/blog/1.jpg')); ?>" alt="<?php echo e($blog->heading); ?>">
                                <?php endif; ?>
                            </div>

                            <div class="post-header">
                                <h4><a href="<?php echo e(route('blog-detail',$blog->slug)); ?>"><?php echo e($blog->heading); ?></a></h4>
                                <div class="postmeta">Category : <?php echo implode(', ',$cate_array); ?>

                                </div>
                                <p><?php echo str_limit($blog->content, $limit = 150, $end = '...'); ?></p>

                            </div>

                        </div>
                    </li>

                    <?php $count++; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </ul>
        <!--view button-->
        <div class="viewallbtn"><a type="button" class="btn btn-amber" href="<?php echo e(route('blogs')); ?>"><?php echo e(__('View All Blog Posts')); ?></a></div>
        <!--view button end-->
    </div>
</div>