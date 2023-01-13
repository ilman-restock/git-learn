

<?php $__env->startSection('content'); ?>
    <div class="pb-2">
        <h1 class="title title--h1 first-title title__separate">Blog</h1>
    </div>

    <!-- News -->
    <div class="news-grid pb-0">
        <!-- Post -->
        <article class="news-item box">
            <div class="news-item__image-wrap overlay overlay--45">
                <div class="news-item__date">Sep 16, 2019</div>
                <a class="news-item__link" href="single-post.html"></a>
                <img class="cover lazyload" src="<?php echo e(asset('assets/img/picture-1.png')); ?>" />
            </div>
            <div class="news-item__caption">
                <h2 class="title title--h4">Design Conferences in 2019</h2>
                <p>Veritatis et quasi architecto beatae vitae dicta sunt, explicabo.</p>
            </div>
        </article>

        <!-- Post -->
        <article class="news-item box">
            <div class="news-item__image-wrap overlay overlay--45">
                <div class="news-item__date">Sep 15, 2019</div>
                <a class="news-item__link" href="single-post.html"></a>
                <img class="cover lazyload" src="<?php echo e(asset('assets/img/picture-1.png')); ?>" />
            </div>
            <div class="news-item__caption">
                <h2 class="title title--h4">Best Fonts Every Designer</h2>
                <p>Sed ut perspiciatis, nam libero tempore, cum soluta nobis est eligendi.</p>
            </div>
        </article>

        <!-- Post -->
        <article class="news-item box">
            <div class="news-item__image-wrap overlay overlay--45">
                <div class="news-item__date">Sep 14, 2019</div>
                <a class="news-item__link" href="single-post.html"></a>
                <img class="cover lazyload" src="<?php echo e(asset('assets/img/picture-1.png')); ?>" />
            </div>
            <div class="news-item__caption">
                <h2 class="title title--h4">Design Digest #80</h2>
                <p>Excepteur sint occaecat cupidatat no proident, quis nostrum exercitationem ullam corporis suscipit.</p>
            </div>
        </article>
        
        <!-- Post -->
        <article class="news-item box">
            <div class="news-item__image-wrap overlay overlay--45">
                <div class="news-item__date">Sep 13, 2019</div>
                <a class="news-item__link" href="single-post.html"></a>
                <img class="cover lazyload" src="<?php echo e(asset('assets/img/picture-1.png')); ?>" />
            </div>
            <div class="news-item__caption">
                <h2 class="title title--h4">UI Interactions of the week</h2>
                <p>Enim ad minim veniam, consectetur adipiscing elit, quis nostrud exercitation ullamco laboris nisi.</p>
            </div>
        </article>
        
        <!-- Post -->
        <article class="news-item box">
            <div class="news-item__image-wrap overlay overlay--45">
                <div class="news-item__date">Sep 12, 2019</div>
                <a class="news-item__link" href="single-post.html"></a>
                <img class="cover lazyload" src="<?php echo e(asset('assets/img/picture-1.png')); ?>" />
            </div>
            <div class="news-item__caption">
                <h2 class="title title--h4">The Forgotten Art of Spacing</h2>
                <p>Maxime placeat, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </article>
        
        <!-- Post -->
        <article class="news-item box">
            <div class="news-item__image-wrap overlay overlay--45">
                <div class="news-item__date">Sep 15, 2019</div>
                <a class="news-item__link" href="single-post.html"></a>
                <img class="cover lazyload" src="<?php echo e(asset('assets/img/picture-1.png')); ?>" />
            </div>
            <div class="news-item__caption">
                <h2 class="title title--h4">Design Digest #79</h2>
                <p>Optio cumque nihil impedit uo minus quod maxime placeat, velit esse cillum.</p>
            </div>
        </article>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\github-learn\resources\views/layouts/frontend/blog.blade.php ENDPATH**/ ?>