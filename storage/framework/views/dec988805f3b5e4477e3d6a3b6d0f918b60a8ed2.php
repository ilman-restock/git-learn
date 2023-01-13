

<?php $__env->startSection('content'); ?>
    <div class="pb-2">
        <h1 class="title title--h1 first-title title__separate">Portfolio</h1>
    </div>

    <!-- Gallery -->
    <div class="pb-0">
        <!-- Filter -->
        <div class="select">
            <span class="placeholder">Select category</span>
            <ul class="filter">
                <li class="filter__item">Category</li>
                <li class="filter__item active" data-filter="*"><a class="filter__link active" href="#filter">All</a></li>
                <li class="filter__item" data-filter=".category-concept"><a class="filter__link" href="#filter">Concept</a></li>
                <li class="filter__item" data-filter=".category-design"><a class="filter__link" href="#filter">Design</a></li>
                <li class="filter__item" data-filter=".category-life"><a class="filter__link" href="#filter">Life</a></li>
            </ul>
            <input type="hidden" name="changemetoo"/>
        </div>

        <!-- Content -->
        <div class="gallery-grid js-masonry js-filter-container">
            <div class="gutter-sizer"></div>
            <!-- Item 1 -->
            <figure class="gallery-grid__item category-concept">
                <div class="gallery-grid__image-wrap">
                    <img class="gallery-grid__image cover lazyload" src="<?php echo e(asset('assets/img/picture-1.png')); ?>" data-zoom />
                </div>
                <figcaption class="gallery-grid__caption">
                    <h4 class="title gallery-grid__title">Half Avocado</h4>
                    <span class="gallery-grid__category">Concept</span>
                </figcaption>
            </figure>

            <!-- Item 2 -->
            <figure class="gallery-grid__item category-concept">
                <div class="gallery-grid__image-wrap">
                    <img class="gallery-grid__image cover lazyload" src="<?php echo e(asset('assets/img/picture-1.png')); ?>" data-zoom />
                </div>	
                <figcaption class="gallery-grid__caption">
                    <h4 class="title gallery-grid__title">Pink Flamingo</h4>
                    <span class="gallery-grid__category">Concept</span>
                </figcaption>
            </figure>

            <!-- Item 3 -->
            <figure class="gallery-grid__item category-design">
                <div class="gallery-grid__image-wrap">
                    <img class="gallery-grid__image cover lazyload" src="<?php echo e(asset('assets/img/picture-1.png')); ?>" data-zoom />
                </div>	
                <figcaption class="gallery-grid__caption">
                    <h4 class="title gallery-grid__title">Abstract</h4>
                    <span class="gallery-grid__category">Design</span>
                </figcaption>
            </figure>

            <!-- Item 4 -->
            <figure class="gallery-grid__item category-design">
                <div class="gallery-grid__image-wrap">
                    <img class="gallery-grid__image cover lazyload" src="<?php echo e(asset('assets/img/picture-1.png')); ?>" data-zoom />
                </div>
                <figcaption class="gallery-grid__caption">
                    <h4 class="title gallery-grid__title">Abstract #2</h4>
                    <span class="gallery-grid__category">Design</span>
                </figcaption>
            </figure>

            <!-- Item 5 -->
            <figure class="gallery-grid__item category-design">
                <div class="gallery-grid__image-wrap">
                    <img class="gallery-grid__image cover lazyload" src="<?php echo e(asset('assets/img/picture-1.png')); ?>" data-zoom />
                </div>
                <figcaption class="gallery-grid__caption">
                    <h4 class="title gallery-grid__title">Abstract #3</h4>
                    <span class="gallery-grid__category">Design</span>
                </figcaption>
            </figure>

            <!-- Item 6 -->
            <figure class="gallery-grid__item category-life">
                <div class="gallery-grid__image-wrap">
                    <img class="gallery-grid__image cover lazyload" src="<?php echo e(asset('assets/img/picture-1.png')); ?>" data-zoom />
                </div>
                <figcaption class="gallery-grid__caption">
                    <h4 class="title gallery-grid__title">Golden Gate</h4>
                    <span class="gallery-grid__category">Life</span>
                </figcaption>
            </figure>

            <!-- Item 7 -->
            <figure class="gallery-grid__item category-concept">
                <div class="gallery-grid__image-wrap">
                    <img class="gallery-grid__image cover lazyload" src="<?php echo e(asset('assets/img/picture-1.png')); ?>" data-zoom />
                </div>
                <figcaption class="gallery-grid__caption">
                    <h4 class="title gallery-grid__title">Peach</h4>
                    <span class="gallery-grid__category">Concept</span>
                </figcaption>
            </figure>

            <!-- Item 8 -->
            <figure class="gallery-grid__item category-design">
                <div class="gallery-grid__image-wrap">
                    <img class="gallery-grid__image cover lazyload" src="<?php echo e(asset('assets/img/picture-1.png')); ?>" data-zoom />
                </div>
                <figcaption class="gallery-grid__caption">
                    <h4 class="title gallery-grid__title">Abstract #4</h4>
                    <span class="gallery-grid__category">Design</span>
                </figcaption>
            </figure>

            <!-- Item 9 -->
            <figure class="gallery-grid__item category-life">
                <div class="gallery-grid__image-wrap">
                    <img class="gallery-grid__image cover lazyload" src="<?php echo e(asset('assets/img/picture-1.png')); ?>" data-zoom />
                </div>
                <figcaption class="gallery-grid__caption">
                    <h4 class="title gallery-grid__title">Hedgehog</h4>
                    <span class="gallery-grid__category">Life</span>
                </figcaption>
            </figure>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\github-learn\resources\views/layouts/frontend/portfolio.blade.php ENDPATH**/ ?>