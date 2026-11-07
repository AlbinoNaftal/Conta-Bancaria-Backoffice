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
        <div>
            <h1>Efectuar depósito</h1>
            <div class="sub">Registar um depósito em dinheiro numa conta activa</div>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="cartao form-estreito">

        <form method="POST" action="<?php echo e(route('depositos.store')); ?>">
            <?php echo csrf_field(); ?>

            <div class="campo">
                <label>Número da conta</label>
                <input type="text" name="numero" required class="entrada" value="<?php echo e(old('numero')); ?>">
            </div>

            <div class="campo">
                <label>Valor (MZN)</label>
                <input type="number" name="valor" min="0.01" step="0.01" required class="entrada" value="<?php echo e(old('valor')); ?>">
            </div>

            <div class="form-botoes">
                <button type="submit" class="btn btn-aviso">Depositar</button>
            </div>
        </form>

        <p class="cartao-sub" style="margin:18px 0 0 0">
            Não sabe o número da conta? Abra <a href="<?php echo e(route('contas.todas')); ?>">Contas</a> e pesquise pelo nome do cliente.
        </p>

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
<?php endif; ?>
<?php /**PATH C:\ProgramacaoWeb\Springboot\backoffice\backoffice\resources\views/contas/deposito.blade.php ENDPATH**/ ?>