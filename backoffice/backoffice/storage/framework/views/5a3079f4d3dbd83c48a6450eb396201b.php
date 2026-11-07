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
            <h1>Clientes</h1>
            <div class="sub">Cadastro, pesquisa e acesso às contas de cada cliente</div>
        </div>
        <div class="acoes">
            <a href="<?php echo e(route('clientes.create')); ?>" class="btn btn-primario">+ Novo cliente</a>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="cartao">

        <form method="GET" action="<?php echo e(route('clientes.index')); ?>" class="barra-pesquisa">
            <input type="text" name="q" value="<?php echo e($q); ?>" class="entrada" placeholder="Pesquisar por nome, BI ou telefone">
            <button type="submit" class="btn btn-primario">Pesquisar</button>
            <a href="<?php echo e(route('clientes.index')); ?>" class="btn btn-claro">Limpar</a>
        </form>

        <div class="tabela-caixa">
            <table class="tabela">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>BI</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th class="direita">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="suave"><?php echo e($c['id'] ?? ''); ?></td>
                            <td class="forte"><?php echo e($c['nome'] ?? ''); ?></td>
                            <td class="suave"><?php echo e($c['bi'] ?? ''); ?></td>
                            <td class="suave"><?php echo e($c['telefone'] ?? ''); ?></td>
                            <td class="suave"><?php echo e($c['email'] ?? ''); ?></td>
                            <td class="direita acoes">
                                <a href="<?php echo e(route('contas.index', $c['id'])); ?>">Contas</a>
                                <a href="<?php echo e(route('clientes.edit', $c['id'])); ?>">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="vazio">Nenhum cliente encontrado.</td>
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
<?php /**PATH C:\ProgramacaoWeb\Springboot\backoffice\backoffice\resources\views/clientes/index.blade.php ENDPATH**/ ?>