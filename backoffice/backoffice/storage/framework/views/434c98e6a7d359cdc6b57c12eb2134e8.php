<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e($cliente ? 'Editar Cliente' : 'Novo Cliente'); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-6">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <form method="POST"
                      action="<?php echo e($cliente ? route('clientes.update', $cliente['id']) : route('clientes.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <?php if($cliente): ?>
                        <?php echo method_field('PUT'); ?>
                    <?php endif; ?>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Nome</label>
                        <input type="text" name="nome" required
                               value="<?php echo e(old('nome', $cliente['nome'] ?? '')); ?>"
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">BI</label>
                        <input type="text" name="bi" required
                               value="<?php echo e(old('bi', $cliente['bi'] ?? '')); ?>"
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Telefone</label>
                        <input type="text" name="telefone"
                               value="<?php echo e(old('telefone', $cliente['telefone'] ?? '')); ?>"
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="text" name="email"
                               value="<?php echo e(old('email', $cliente['email'] ?? '')); ?>"
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                    </div>

                    <div class="flex gap-2">
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md text-sm hover:bg-indigo-700">
                            Guardar
                        </button>
                        <a href="<?php echo e(route('clientes.index')); ?>" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md text-sm">
                            Cancelar
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\ProgramacaoWeb\Springboot\backoffice\backoffice\resources\views/clientes/form.blade.php ENDPATH**/ ?>