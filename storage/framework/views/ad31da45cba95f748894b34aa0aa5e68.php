<!-- ====== Navbar Section Start -->
<header
  x-data="{navbarOpen: false}"
  class="fixed left-0 top-0 z-50 bg-white w-full flex items-center shadow-md dark:bg-slate-900 h-24"
>
  <div class="container">
    <div class="flex -mx-4 items-center justify-between relative">
      <div class="pr-4 w-60 max-w-full">
        <a href="/" class="w-full flex items-center py-2">
          <img
            src="<?php echo e(url('/img/logo.png')); ?>"
            alt="logo"
            class="w-[48px] lg:w-[64px] inline-block dark:hidden"
          />
          <img
            src="<?php echo e(url('/img/logo-white.png')); ?>"
            alt="logo"
            class="w-[48px] lg:w-[64px] hidden dark:inline-block"
          />
          <span class="text-xl xl:text-2xl font-bold text-[#0c7187] dark:text-white">OUHAGUAOmar</span>
        </a>
      </div>
      <div class="flex px-4 justify-end items-center w-full">
        <div>
          <?php if (isset($component)) { $__componentOriginalba9ae047b5279407b6c581c8d969f9ae = $component; } ?>
<?php $component = App\View\Components\Layout\NavbarHumberger::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout.navbar-humberger'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Layout\NavbarHumberger::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@click' => 'navbarOpen = !navbarOpen','x-bind:class' => 'navbarOpen && \'navbarTogglerActive\'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalba9ae047b5279407b6c581c8d969f9ae)): ?>
<?php $component = $__componentOriginalba9ae047b5279407b6c581c8d969f9ae; ?>
<?php unset($__componentOriginalba9ae047b5279407b6c581c8d969f9ae); ?>
<?php endif; ?>
          <nav
            :class="!navbarOpen && 'hidden' "
            id="navbarCollapse"
            class="absolute right-0 top-full bg-white py-5 px-6 z-50 shadow rounded-lg w-full dark:bg-slate-900 dark:text-gray-300 lg:px-0 lg:max-w-full lg:w-full lg:right-4 lg:block lg:static lg:shadow-none"
          >
            <ul class="block lg:flex lg:items-center">
              <?php $__currentLoopData = $navigationItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginalaafa7ef88a24b29a12336aabecf6c84d = $component; } ?>
<?php $component = App\View\Components\Layout\NavbarItem::resolve(['href' => $item['href']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout.navbar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Layout\NavbarItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e($item['label']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaafa7ef88a24b29a12336aabecf6c84d)): ?>
<?php $component = $__componentOriginalaafa7ef88a24b29a12336aabecf6c84d; ?>
<?php unset($__componentOriginalaafa7ef88a24b29a12336aabecf6c84d); ?>
<?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- ====== Navbar Section End --><?php /**PATH /var/www/html/resources/views/layout/navbar.blade.php ENDPATH**/ ?>