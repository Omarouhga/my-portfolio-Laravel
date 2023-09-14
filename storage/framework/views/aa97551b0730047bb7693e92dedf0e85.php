<!-- ====== About Section Start -->
<section id="about" class=" pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
  <div class="container">
    <div class="flex flex-wrap justify-between items-center -mx-4">
      <div class="w-full lg:w-6/12 px-4">
        <div class="flex items-center -mx-3 sm:-mx-4">
          <div class="w-full xl:w-1/2 px-3 sm:px-4">
            <div class="py-3 sm:py-4">
              <img
                src="<?php echo e(url('/img/me_hero.jpg')); ?>"
                alt=""
                class="rounded-2xl w-full"
              />
            </div>
            <div class="py-3 sm:py-4">
              <img
                src="<?php echo e(url('/img/me_hero.jpg')); ?>"
                alt=""
                class="rounded-2xl w-full"
              />
            </div>
          </div>
          <div class="w-full xl:w-1/2 px-3 sm:px-4">
            <div class="my-4 relative z-10">
              <img
                src="<?php echo e(url('/img/me_hero.jpg')); ?>"
                alt=""
                class="rounded-2xl w-full"
              />
              <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.about-dots','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('about-dots'); ?>
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
      </div>
      <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
        <div class="mt-10 lg:mt-0">
          <span class="font-semibold text-lg text-primary mb-2 block">
             <blockquote class="text-sm text-gray-500 italic py-2 px-3 border-l-4 border-amber-500">
                 "Everything is achievable with hard work"
             </blockquote>
          </span>
          <h2 class="font-bold text-3xl sm:text-4xl dark:text-gray-200 mb-8">
            A propos de moi
          </h2>
          <p class="text-base dark:text-gray-400 mb-8">
          Etudiant en 5éme année à l'École Nationale des Sciences Appliquées de Béni Mellal, spécialisé en Transformation Digitale Industrielle.<br />
          Mon parcours académique m'a permis de développer une passion pour les nouvelles technologies.
          
         <br />
          </p>
          <p class="text-base dark:text-gray-400 mb-8">
          En dehors des cours, je m'investis pleinement dans le sport, notamment le football,
           où je puise motivation, discipline et une source de défis personnels stimulants.
            <br/>
            N'hésitez pas à me contacter pour en apprendre davantage sur moi. <br />
          </p>
          <?php if (isset($component)) { $__componentOriginale21d90f41251e682846d7af3e3cbbb3b = $component; } ?>
<?php $component = App\View\Components\ButtonLink::resolve(['href' => '#contact','variant' => 'primary','target' => '_blank'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ButtonLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            Contacter moi
           <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale21d90f41251e682846d7af3e3cbbb3b)): ?>
<?php $component = $__componentOriginale21d90f41251e682846d7af3e3cbbb3b; ?>
<?php unset($__componentOriginale21d90f41251e682846d7af3e3cbbb3b); ?>
<?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== About Section End --><?php /**PATH /var/www/html/resources/views/components/home/about.blade.php ENDPATH**/ ?>