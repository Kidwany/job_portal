
<?php $__env->startSection('content'); ?>
<!-- Header start -->
<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Header end -->
<!-- Inner Page Title start -->
<?php echo $__env->make('includes.inner_page_title', ['page_title'=>__('Blog')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Inner Page Title end -->

<header id="joblisting-headerwrap" class="d-none d-sm-block">
    <div class="container-fluid">
        <section id="joblisting-header" role="search" class="text-center">

            <h1><?php echo e($category->heading); ?></h1>

        </section>
    </div>
</header>

<section id="blog-content">
    <div class="container">

        <!-- Blog start -->
        <div class="row">
            <div class="col-lg-9">
                <!-- Blog List start -->
                <div class="blogwrapper">
                    <ul class="blogList row">
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
                        
                        <li class="col-lg-6">
                            <div class="bloginner">
                                <div class="postimg"><?php echo e($blog->printBlogImage()); ?></div>

                                <div class="post-header">
                                    <h4><a href="<?php echo e(route('blog-detail',$blog->slug)); ?>"><?php echo e($blog->heading); ?></a></h4>
                                    <div class="postmeta">Category : <?php echo implode(', ',$cate_array); ?>

                                    </div>
                                </div>
                                <p><?php echo str_limit($blog->content, $limit = 150, $end = '...'); ?></p>

                            </div>
                        </li>

                        
                        <?php $count++; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                    </ul>
                </div>

                <!-- Pagination -->
                <div class="pagiWrap">
                    <nav aria-label="Page navigation example">
                        <?php if(isset($blogs) && count($blogs)): ?>
                        <?php echo e($blogs->appends(request()->query())->links()); ?> <?php endif; ?>
                    </nav>
                </div>
            </div>
             <div class="col-lg-3">
                 
                 <div class="sidebar"> 
          <!-- Search -->
          <div class="widget">
            <h5 class="widget-title">Search</h5>
            <div class="search">
              <form action="<?php echo e(route('blog-search')); ?>" method="GET">
                <input type="text" class="form-control" placeholder="Search" name="search">
                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
              </form>
            </div>
          </div>
          <!-- Categories -->
          <?php if(null!==($blogs_categories)): ?>
          <div class="widget">
            <h5 class="widget-title">Categories</h5>
            <ul class="categories">
            <?php $__currentLoopData = $blogs_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><a href="<?php echo e(url('/blog/category/').'/'.$category->slug); ?>"><?php echo e($category->heading); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
          <?php endif; ?>
        </div>
            </div>
        </div>
        <div class="py-5"></div>
    </div>
</section>




<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('styles'); ?>
<style>
.plus-minus-input {
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.plus-minus-input .input-group-field {
    text-align: center;
    margin-left: 0.5rem;
    margin-right: 0.5rem;
    padding: 0rem;
}

.plus-minus-input .input-group-field::-webkit-inner-spin-button,
.plus-minus-input .input-group-field ::-webkit-outer-spin-button {
    -webkit-appearance: none;
    appearance: none;
}

.plus-minus-input .input-group-button .circle {
    border-radius: 50%;
    padding: 0.25em 0.8em;
}
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
<?php echo $__env->make('includes.immediate_available_btn', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script>
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>