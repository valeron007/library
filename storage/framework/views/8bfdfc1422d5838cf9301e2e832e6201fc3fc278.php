<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <?php $__env->startSection('header'); ?>
        ##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
    <?php $__env->stopSection(); ?>

</head>
<body>
    <header>
        <?php $__env->startSection('navbar'); ?>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" id="book" href="#">Книги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="author" href="#">Авторы</a>
                </li>
            </ul>
        <?php echo $__env->yieldSection(); ?>
    </header>

    <main>

        <table class="table" id="data-information">
            <tbody>

            </tbody>
        </table>
    </main>

    <footer>

    </footer>
</body>
</html>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/valeron/laravel/test/resources/views/index.blade.php ENDPATH**/ ?>