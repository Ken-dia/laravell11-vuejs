<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel11-vuejs3</title>
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
    </head>
    <body>
        <div id="app">
            <router-view></router-view>
        </div>
    </body>
</html>
<?php /**PATH /home/ken-dia/Bureau/laravel11-vuejs3/resources/views/welcome.blade.php ENDPATH**/ ?>