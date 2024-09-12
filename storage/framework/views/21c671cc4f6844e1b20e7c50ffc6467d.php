<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
   <?php $__env->slot('title', null, []); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>


  <article class="py-8 max-w-screen-md border-b border-gray-500">

    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">Judul Artikel 1</h2>
    <div class="text-base text-gray-500">
      <a href="#">Anis Talib</a> | 1 Januari 2024
</div>
<p class="my-4 font-light">Pahang is a large state in Peninsular Malaysia. It's known for its mountains, rainforests and beaches, including the white sands and coral reefs of Tioman Island off the east coast. The state capital, Kuantan, is a major seaport.</p>
<a href="" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>

</article>

<article class="py-8 max-w-screen-md border-b border-gray-500">

<h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">Judul Artikel 2</h2>
<div class="text-base text-gray-500">
  <a href="#">Anis Talib</a> | 1 June 2024
</div>
<p class="my-4 font-light">Kuantan 188 was completed on 3 September 2019. The upright design concept of Kuantan 188 and its tapered profile refers to the structure of old Malay weapons, namely the spear and spear blade tip, as found on the Pahang Darul Makmur State Coat of Arms while the Anjung Menara design is based on the leaves and flowers of the Teruntum Putih tree. Kuantan 188, which stands proud on the banks of Kuantan River here, is not only the latest iconic landmark of Pahang’s first city, but also sets the night and weekend moods of Kuantan, the capital city of Pahang situated on the East Coast of Malaysia.</p>
<a href="" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>

</article>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>

<?php /**PATH C:\Users\anisz\Herd\laravel11\resources\views/blog.blade.php ENDPATH**/ ?>