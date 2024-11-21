<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel Routing versi1 </title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    <div class="container m-5">
        <h1>Belajar Laravel Routing</h1>
        <h6 class="mt-4">Tugas Cloning Bootstrap</h6>
        <div class="list-group mt-4">
            <a href="<?php echo e(url('/cloning')); ?>" class="list-group-item list-group-item-action">
                Tugas (Cloning Bootstrap)
            </a>
        </div>

        <div class="list-group list-group-numbered mt-4">
            <a href="<?php echo e(url('/basic_routing')); ?>" class="list-group-item list-group-item-action">
                Basic Routing (No View, No Controller)
            </a>
            <a href="<?php echo e(url('/view_route')); ?>" class="list-group-item list-group-item-action">
                View Route
            </a>
            <a href="<?php echo e(url('/controller_route')); ?>" class="list-group-item list-group-item-action">
                Controller Route
            </a>
            <a href="<?php echo e(url('/')); ?>" class="list-group-item list-group-item-action">
                Redirect Route
            </a>
            <a href="<?php echo e(url('/user/12345')); ?>" class="list-group-item list-group-item-action">
                Route Parameter (Required Parameter) - 1
            </a>
            <a href="<?php echo e(url('/posts/01/comments/20')); ?>" class="list-group-item list-group-item-action">
                Route Parameter (Required Parameter) - 2
            </a>
            <a href="<?php echo e(url('/username')); ?>" class="list-group-item list-group-item-action">
                Route Parameter (Optional Parameter)
            </a>
            <a href="<?php echo e(url('/title/this-is-my-title')); ?>" class="list-group-item list-group-item-action">
                Route With Regular Expression Constraints
            </a>
            <a href="<?php echo e(route('profileRouteName', ['profileId' => '123'])); ?>"
                class="list-group-item list-group-item-action">
                Named Route
            </a>
            <a href="<?php echo e(url('/route_priority/user')); ?>"
            class="list-group-item list-group-item-action">
                Route Priority
            </a>
            <a href="<?php echo e(url('/asdqwezxc')); ?>" class="list-group-item list-group-item-action">
                Fallback Routes
            </a>
            
        </div>
        <h6 class="mt-4">Route Groups (Route Prefixes & Route Name Prefixes)</h6>
        <div class="list-group list-group-numbered mt-4">
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="list-group-item list-group-item-action">
                Admin Dashboard
            </a>
            <a href="<?php echo e(route('admin.users')); ?>" class="list-group-item list-group-item-action">
                Admin Users
            </a>
            <a href="<?php echo e(route('admin.items')); ?>" class="list-group-item list-group-item-action">
                Admin Items
            </a>
        </div>
        <h6 class="mt-4">View Route List</h6>
        <div class="list-group list-group-numbered mt-4">
            <a href="#" class="list-group-item list-group-item-action link-danger">php artisan route:list</a>
        </div>
        <h6 class="mt-4">Routing Caching</h6>
        <div class="list-group list-group-numbered mt-4">
            <a href="#" class="list-group-item list-group-item-action link-danger">php artisan route:chace</a>

            <a href="#" class="list-group-item list-group-item-action link-danger">php artisan route:clear</a>
        </div>
        
    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>
<?php /**PATH /var/www/resources/views/routing.blade.php ENDPATH**/ ?>