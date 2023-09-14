<!-- ====== Hero Section Start -->
<div class="relative pt-[60px] lg:pt-[80px] pb-[110px] bg-white dark:bg-slate-800">
  <div class="container">
    <div class="flex flex-wrap -mx-4">
      <div class="w-full lg:w-5/12 px-4">
        <div class="hero-content">
          <h1
            class="text-dark dark:text-gray-200 font-bold text-4xl sm:text-[42px] lg:text-[40px] xl:text-[42px] leading-snug mb-6"
          >
          Je m'appelle OUHAGUA Omar<br/>
            <span class="rounded-md text-amber-600"> Elève ingénieur</span>
          </h1>
          <p class="text-base mb-8 max-w-[520px]">
          je suis étudiant à l'École Nationale des Sciences Appliquées de Béni Mellal, en filière Transformation Digitale Industrielle. <br/>
          Mon approche consiste à tirer de l'inspiration de chaque défi pour atteindre l'excellence
            <br>
          </p>
          <ul class="flex flex-wrap items-center">
            <li>
              <?php if (isset($component)) { $__componentOriginale21d90f41251e682846d7af3e3cbbb3b = $component; } ?>
<?php $component = App\View\Components\ButtonLink::resolve(['href' => '#portfolio','variant' => 'primary'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ButtonLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'rounded-lg']); ?>
                Mes projets
               <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale21d90f41251e682846d7af3e3cbbb3b)): ?>
<?php $component = $__componentOriginale21d90f41251e682846d7af3e3cbbb3b; ?>
<?php unset($__componentOriginale21d90f41251e682846d7af3e3cbbb3b); ?>
<?php endif; ?>
            </li>
          </ul>
          <div class="clients pt-16">
            <h6 class="font-normal text-xs flex items-center text-body-color dark:text-gray-300 mb-4">
            Suivez-moi sur les réseaux sociaux
              <span class="w-8 h-[1px] bg-body-color inline-block ml-2"></span>
            </h6>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.social-icons','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('social-icons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
          </div>
        </div>
      </div>
      <div class="hidden lg:block lg:w-1/12 px-4"></div>
      <div class="w-full lg:w-6/12 px-4">
        <div class="lg:text-right lg:ml-auto">
          <div class="relative inline-block z-10 pt-11 lg:pt-0">
            <img
              src="<?php echo e(url('/img/me_hero.jpg')); ?>"
              alt="hero"
              class="max-w-full lg:ml-auto"
            />
            <span class="absolute -left-8 -bottom-8 z-[-1]">
              <svg
                width="93"
                height="93"
                viewBox="0 0 93 93"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3"/>
                <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3"/>
                <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3"/>
                <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3"/>
                <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3"/>
                <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3"/>
                <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3"/>
                <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3"/>
                <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3"/>
                <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3"/>
                <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3"/>
                <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3"/>
                <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3"/>
                <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3"/>
                <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3"/>
                <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3"/>
                <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3"/>
                <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3"/>
                <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3"/>
                <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3"/>
                <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3"/>
                <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3"/>
                <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3"/>
                <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3"/>
                <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3"/>
              </svg>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ====== Hero Section End --><?php /**PATH /var/www/html/resources/views/components/home/hero.blade.php ENDPATH**/ ?>