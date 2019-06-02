<!doctype>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <?php $__env->startSection('header'); ?>
            <meta charset="utf-8">
            <title>Laravel</title>

            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
            <title>Laravel</title>

            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            <link href="<?php echo e(\Illuminate\Support\Facades\URL::asset('css/app.css')); ?>" rel="stylesheet" type="text/css">
            <script src="<?php echo e(\Illuminate\Support\Facades\URL::asset('js/app.js')); ?>"></script>
        <?php echo $__env->yieldSection(); ?>
    </head>
    <body>


    <footer>
        <?php $__env->startSection('footer'); ?>
            <h1>footer</h1>
        <?php $__env->stopSection(); ?>
    </footer>
    </body>
</html>
<?php /**PATH /home/valeron/laravel/test/resources/views/main.blade.php ENDPATH**/ ?>