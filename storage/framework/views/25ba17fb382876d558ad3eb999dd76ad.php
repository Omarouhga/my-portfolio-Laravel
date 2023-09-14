<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="white">
    <head>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title>OUHAGUA Omar</title> 
        <script src="https://apis.google.com/js/platform.js"></script>

    </head>
    <body class="text-gray-800 dark:text-gray-200 ">
      <div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
          <?php if (isset($component)) { $__componentOriginal1123ab115b514343a1dfb86d9c409788 = $component; } ?>
<?php $component = App\View\Components\Layout\Navbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Layout\Navbar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1123ab115b514343a1dfb86d9c409788)): ?>
<?php $component = $__componentOriginal1123ab115b514343a1dfb86d9c409788; ?>
<?php unset($__componentOriginal1123ab115b514343a1dfb86d9c409788); ?>
<?php endif; ?>
          <?php echo e($slot); ?>

          <?php if (isset($component)) { $__componentOriginalee11687ee104896068889238394e1f7e = $component; } ?>
<?php $component = App\View\Components\Layout\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Layout\Footer::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee11687ee104896068889238394e1f7e)): ?>
<?php $component = $__componentOriginalee11687ee104896068889238394e1f7e; ?>
<?php unset($__componentOriginalee11687ee104896068889238394e1f7e); ?>
<?php endif; ?>
      </div>

    </body>
</html>
<?php /**PATH /var/www/html/resources/views/layout/app.blade.php ENDPATH**/ ?>