<!-- ====== Portfolio Section Start -->
<section
  id="portfolio"
  x-data="
        {
          selectedTab: 'all',
          activeClasses: 'bg-primary text-white',
          inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
        }
      "
  class=" bg-white dark:bg-slate-800 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px]"
>
  <div class="container">
    <div class="flex flex-wrap -mx-4">
      <div class="w-full px-4">
        <div class="text-center mx-auto mb-[60px] max-w-[510px]">
          <h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] text-dark dark:text-gray-300 mb-4">
            Mes Projects
          </h2>
          <p class="text-base text-body-color">
          Nous apprenons le plus en construisant des projets.<br/> Voici quelques-uns de mes projets
          </p>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap justify-center -mx-4">
      <div class="w-full px-4">
        <ul class="flex flex-wrap justify-center mb-12 space-x-1">
          <li class="mb-1">
            <button
              @click="selectedTab = 'all' "
              :class="selectedTab == 'all' ? activeClasses : inactiveClasses "
              class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition "
            >
            Tous les Projets
            </button>
          </li>
          <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="mb-1">
            <button
              @click="selectedTab = '<?php echo e($tab); ?>' "
              :class="selectedTab === '<?php echo e($tab); ?>' ? activeClasses : inactiveClasses "
              class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition ">
              <?php echo e($tab); ?>

            </button>
          </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    </div>
    <div class="flex flex-wrap -mx-4">
      <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginalc5c04a890dc36a94d2a54c8420adac92 = $component; } ?>
<?php $component = App\View\Components\PortfolioItem::resolve(['title' => $item['title'],'categories' => $item['category'],'image' => $item['image'],'github' => $item['github']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('portfolio-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PortfolioItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc5c04a890dc36a94d2a54c8420adac92)): ?>
<?php $component = $__componentOriginalc5c04a890dc36a94d2a54c8420adac92; ?>
<?php unset($__componentOriginalc5c04a890dc36a94d2a54c8420adac92); ?>
<?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</section>
<!-- ====== Portfolio Section End --><?php /**PATH /var/www/html/resources/views/components/home/portfolio.blade.php ENDPATH**/ ?>