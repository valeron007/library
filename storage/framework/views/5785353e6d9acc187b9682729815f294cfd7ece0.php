    <!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <?php $__env->startSection('header'); ?>
        ##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
    <?php $__env->stopSection(); ?>

</head>

<body>
<header>

</header>

<main>

    <form method="POST" action="/authors/edit/<?php echo e($author['id']); ?>">
        <?php echo csrf_field(); ?>
        <p>Введите имя</p><br>
        <input name="name" placeholder="<?php echo e($author['name']); ?>" type="string">
        <button>Сохранить</button>
    </form>
    <a href="<?php echo e(URL::to('/')); ?>">Назад</a>
</main>

<footer>

</footer>
</body>
</html>



<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/valeron/laravel/test/resources/views/author/edit.blade.php ENDPATH**/ ?>