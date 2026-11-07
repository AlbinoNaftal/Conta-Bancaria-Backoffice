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
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Contas de <?php echo e($cliente['nome'] ?? ''); ?>

            </h2>
            <a href="<?php echo e(route('clientes.index')); ?>" class="text-sm text-gray-600 hover:text-gray-900">&larr; Voltar aos clientes</a>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <h3 class="font-semibold text-gray-800 mb-4">Contas abertas</h3>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Numero da conta</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Saldo</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Estado</th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Acoes</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php $__empty_1 = true; $__currentLoopData = $contas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900"><?php echo e($c['numero'] ?? ''); ?></td>
                                    <td class="px-6 py-4 text-sm text-gray-700"><?php echo e(number_format((float) ($c['saldo'] ?? 0), 2, ',', ' ')); ?> MZN</td>
                                    <td class="px-6 py-4 text-sm">
                                        <?php if(($c['estado'] ?? '') == 'BLOQUEADA'): ?>
                                            <span class="px-2 py-1 bg-red-100 text-red-700 rounded text-xs">Bloqueada</span>
                                        <?php else: ?>
                                            <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs"><?php echo e($c['estado'] ?? ''); ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="px-6 py-4 text-right text-sm">
                                        <a href="<?php echo e(route('contas.show', $c['numero'])); ?>" class="text-indigo-600 hover:text-indigo-900">Abrir / Extracto</a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="4" class="px-6 py-4 text-center text-sm text-gray-500">
                                        Este cliente ainda nao tem contas.
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <h3 class="font-semibold text-gray-800 mb-4">Abrir nova conta</h3>

                <form method="POST" action="<?php echo e(route('contas.store', $cliente['id'])); ?>" class="grid grid-cols-1 md:grid-cols-3 gap-4 items-end">
                    <?php echo csrf_field(); ?>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">PIN (4 digitos)</label>
                        <input type="password" name="pin" maxlength="4" required inputmode="numeric"
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Saldo inicial (MZN)</label>
                        <input type="number" name="saldoInicial" min="0" step="0.01" required
                               value="<?php echo e(old('saldoInicial', '0')); ?>"
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                    </div>

                    <div>
                        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md text-sm hover:bg-green-700">
                            Abrir conta
                        </button>
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
<?php endif; ?><?php /**PATH C:\ProgramacaoWeb\Springboot\backoffice\backoffice\resources\views/contas/index.blade.php ENDPATH**/ ?>