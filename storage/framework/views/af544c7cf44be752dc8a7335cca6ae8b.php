<!-- ====== Contact Section Start -->
<section id="contact" class="bg-white dark:bg-primary py-20 lg:py-[120px] overflow-hidden relative z-10">
  <div class="container">
    <div class="flex flex-wrap lg:justify-between -mx-4">
      <div class="w-full lg:w-1/2 xl:w-6/12 px-4">
        <div class="max-w-[570px] mb-12 lg:mb-0">
          <h2 class="text-dark dark:text-gray-100 mb-6 uppercase font-bold text-[32px] sm:text-[40px] lg:text-[36px] xl:text-[40px]">
            Pour me contacter
          </h2>
          <p class="text-base text-body-color dark:text-gray-200 leading-relaxed mb-9">
          Pour toute prise de contact, n'hésitez pas à utiliser le formulaire dédié 
          ou à m'appeler au 0762271299.           </p>
          <div class="flex mb-8 max-w-[370px] w-full">
            <div
              class="
                 max-w-[60px]
                 sm:max-w-[70px]
                 w-full
                 h-[60px]
                 sm:h-[70px]
                 flex
                 items-center
                 justify-center
                 mr-6
                 overflow-hidden
                 bg-primary bg-opacity-5
                 text-primary
                 dark:text-gray-300
                 rounded
                 "
            >
              <svg
                width="28"
                height="19"
                viewBox="0 0 28 19"
                class="fill-current"
              >
                <path
                  d="M25.3636 0H2.63636C1.18182 0 0 1.16785 0 2.6052V16.3948C0 17.8322 1.18182 19 2.63636 19H25.3636C26.8182 19 28 17.8322 28 16.3948V2.6052C28 1.16785 26.8182 0 25.3636 0ZM25.3636 1.5721C25.5909 1.5721 25.7727 1.61702 25.9545 1.75177L14.6364 8.53428C14.2273 8.75886 13.7727 8.75886 13.3636 8.53428L2.04545 1.75177C2.22727 1.66194 2.40909 1.5721 2.63636 1.5721H25.3636ZM25.3636 17.383H2.63636C2.09091 17.383 1.59091 16.9338 1.59091 16.3499V3.32388L12.5 9.8818C12.9545 10.1513 13.4545 10.2861 13.9545 10.2861C14.4545 10.2861 14.9545 10.1513 15.4091 9.8818L26.3182 3.32388V16.3499C26.4091 16.9338 25.9091 17.383 25.3636 17.383Z"
                />
              </svg>
            </div>
            <div class="w-full">
              <h4 class="font-bold text-dark dark:text-gray-200 text-xl mb-1">
                Adresse Email
              </h4>
              <p class="text-base text-body-color dark:text-gray-300">Omarouhga12@gmail.com</p>
              
            </div>
          </div>
          <div class="flex mb-8 max-w-[370px] w-full">
            <div
              class="
                 max-w-[60px]
                 sm:max-w-[70px]
                 w-full
                 h-[60px]
                 sm:h-[70px]
                 flex
                 items-center
                 justify-center
                 mr-6
                 overflow-hidden
                 bg-primary bg-opacity-5
                 text-primary
                 dark:text-gray-300
                 rounded
                 "
            >
              <svg
                width="28"
                height="19"
                viewBox="0 0 28 19"
                class="fill-current"
              >
                <path
                  d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"
                />
              </svg>
            </div>
            <div class="w-full">
              <h4 class="font-bold text-dark dark:text-gray-200 text-xl mb-1">
                Numéro de Téléphone
              </h4>
              <p class="text-base text-body-color dark:text-gray-300">+212 762-271299</p>
              
            </div>
          </div>
        </div>
      </div>
      
      <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
        <div class="bg-white dark:bg-slate-900 relative rounded-lg p-8 sm:p-12 shadow-lg">
          <form action="/contact/submit" method="POST" x-data="
          {
              formData: {
                name: '',
                email: '',
                message: '',
              },
              errors: {},
              successMessage: '',

              submitForm(event) {
                this.successMessage = '';
                this.errors = {};
                  fetch(`/contact/submit`, {
                    method: 'POST',
                    headers: {
                      'Content-Type': 'application/json',
                      'X-Requested-With': 'XMLHttpRequest',
                      'X-CSRF-TOKEN': document.querySelector(`meta[name='csrf-token']`).getAttribute('content')
                    },
                    body: JSON.stringify(this.formData)
                  })
                  .then(response => {
                    if (response.status === 200) {
                      return response.json();
                    }
                    throw response;
                  })
                  .then(result => {
                    this.formData = {
                      name: '',
                      email: '',
                      message: '',
                    };
                    this.successMessage = 'Thanks for your contact request. I will get back to you shortly.';
                  })
                  .catch(res => {
                    if (res.status === 422) {
                      this.errors = result.errors;
                    }
                    console.log(res);
                  })
              }
          }
          " x-on:submit.prevent="submitForm">
            <template x-if="successMessage">
              <div x-text="successMessage" class="py-4 px-6 bg-green-600 text-gray-100 mb-4"></div>
            </template>
            <?php echo csrf_field(); ?>
            <div class="mb-6">
              <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php $component = App\View\Components\Forms\Input::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'Nom et Prénom','name' => 'name','x-model' => 'formData.name',':class' => 'errors.name ? \'border-red-500 focus:border-red-500\' : \'\'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
              <template x-if="errors.name">
                <div x-text="errors.name[0]" class="text-red-500"></div>
              </template>
            </div>
            <div class="mb-6">
              <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php $component = App\View\Components\Forms\Input::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'email','placeholder' => 'Ton email','name' => 'email','x-model' => 'formData.email',':class' => 'errors.email ? \'border-red-500 focus:border-red-500\' : \'\'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
              <template x-if="errors.email">
                <div x-text="errors.email[0]" class="text-red-500"></div>
              </template>
            </div>
            <div class="mb-6">
              <?php if (isset($component)) { $__componentOriginal2f60389a9e230471cd863683376c182f = $component; } ?>
<?php $component = App\View\Components\Forms\Textarea::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Textarea::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'Ton Message','name' => 'message','rows' => '6','x-model' => 'formData.message',':class' => 'errors.message ? \'border-red-500 focus:border-red-500\' : \'\'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f60389a9e230471cd863683376c182f)): ?>
<?php $component = $__componentOriginal2f60389a9e230471cd863683376c182f; ?>
<?php unset($__componentOriginal2f60389a9e230471cd863683376c182f); ?>
<?php endif; ?>
              <template x-if="errors.message">
                <div x-text="errors.message[0]" class="text-red-500"></div>
              </template>
            </div>
            <div>
              <?php if (isset($component)) { $__componentOriginale67687e3e4e61f963b25a6bcf3983629 = $component; } ?>
<?php $component = App\View\Components\Button::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full']); ?>
                Envoyer
               <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale67687e3e4e61f963b25a6bcf3983629)): ?>
<?php $component = $__componentOriginale67687e3e4e61f963b25a6bcf3983629; ?>
<?php unset($__componentOriginale67687e3e4e61f963b25a6bcf3983629); ?>
<?php endif; ?>
            </div>
          </form>
          <div>
            <span class="absolute -top-10 -right-9 z-[-1]">
               <svg
                 width="100"
                 height="100"
                 viewBox="0 0 100 100"
                 fill="none"
                 xmlns="http://www.w3.org/2000/svg"
               >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z"
                    fill="#3056D3"
                  />
               </svg>
            </span>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.contact-dots-top','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('contact-dots-top'); ?>
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
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.contact-dots-bottom','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('contact-dots-bottom'); ?>
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
  </div>
</section>
<!-- ====== Contact Section End --><?php /**PATH /var/www/html/resources/views/components/home/contact.blade.php ENDPATH**/ ?>