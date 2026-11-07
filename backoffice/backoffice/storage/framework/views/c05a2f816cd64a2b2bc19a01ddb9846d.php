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
            <h1>Contas</h1>
            <div class="sub">Todas as contas do banco</div>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="cartao">

        <form method="GET" action="<?php echo e(route('contas.todas')); ?>" class="barra-pesquisa">
            <input type="text" name="q" value="<?php echo e($q); ?>" class="entrada" placeholder="Pesquisar por número da conta ou nome do cliente">
            <button type="submit" class="btn btn-primario">Pesquisar</button>
            <a href="<?php echo e(route('contas.todas')); ?>" class="btn btn-claro">Limpar</a>
        </form>

        <p class="cartao-sub" style="margin-top:0"><?php echo e(count($contas)); ?> conta(s)</p>

        <div class="tabela-caixa">
            <table class="tabela">
                <thead>
                    <tr>
                        <th>Número da conta</th>
                        <th>Cliente</th>
                        <th>Saldo</th>
                        <th>Estado</th>
                        <th class="direita">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $contas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="forte"><?php echo e($c['numero'] ?? ''); ?></td>
                            <td class="suave"><?php echo e($c['cliente']['nome'] ?? '-'); ?></td>
                            <td><?php echo e(number_format((float) ($c['saldo'] ?? 0), 2, ',', ' ')); ?> MZN</td>
                            <td>
                                <?php if(($c['estado'] ?? '') == 'BLOQUEADA'): ?>
                                    <span class="etiqueta etiqueta-bloq">Bloqueada</span>
                                <?php else: ?>
                                    <span class="etiqueta etiqueta-ok">Activa</span>
                                <?php endif; ?>
                            </td>
                            <td class="direita acoes">
                                <a href="<?php echo e(route('contas.show', $c['numero'])); ?>">Extracto / Depositar</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="5" class="vazio">Nenhuma conta encontrada.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
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
<?php endif; ?>
<?php /**PATH C:\ProgramacaoWeb\Springboot\backoffice\backoffice\resources\views/contas/todas.blade.php ENDPATH**/ ?>