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
            <h1>Conta <?php echo e($conta['numero'] ?? ''); ?></h1>
            <div class="sub">Saldo, depósito e extracto</div>
        </div>
        <div class="acoes">
            <a href="<?php echo e(route('contas.todas')); ?>" class="btn btn-claro">&larr; Voltar às contas</a>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="cartao-saldo">
        <div>
            <div class="rotulo">Saldo disponível</div>
            <div class="valor"><?php echo e(number_format((float) ($conta['saldo'] ?? 0), 2, ',', ' ')); ?> <small>MZN</small></div>
            <div class="conta-num">
                Conta <?php echo e($conta['numero'] ?? ''); ?>

                <?php if(($conta['estado'] ?? '') == 'BLOQUEADA'): ?>
                    <span class="etiqueta etiqueta-bloq">Bloqueada</span>
                <?php else: ?>
                    <span class="etiqueta etiqueta-ok">Activa</span>
                <?php endif; ?>
            </div>
        </div>

        <div>
            <?php if(($conta['estado'] ?? '') == 'BLOQUEADA'): ?>
                <form method="POST" action="<?php echo e(route('contas.desbloquear', $conta['numero'])); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <button type="submit" class="btn btn-sucesso">Desbloquear conta</button>
                </form>
            <?php else: ?>
                <form method="POST" action="<?php echo e(route('contas.bloquear', $conta['numero'])); ?>"
                      onsubmit="return confirm('Bloquear esta conta?');">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <button type="submit" class="btn btn-perigo">Bloquear conta</button>
                </form>
            <?php endif; ?>
        </div>
    </div>

    <div class="cartao">
        <div class="cartao-titulo">Efectuar depósito</div>

        <form method="POST" action="<?php echo e(route('depositos.store')); ?>" class="form-linha" style="max-width:520px">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="numero" value="<?php echo e($conta['numero']); ?>">

            <div class="campo">
                <label>Valor (MZN)</label>
                <input type="number" name="valor" min="0.01" step="0.01" required class="entrada">
            </div>

            <button type="submit" class="btn btn-aviso">Depositar</button>
        </form>
    </div>

    <div>

        <div class="cartao">
            <div class="cartao-titulo">Extracto</div>

            <div class="tabela-caixa">
                <table class="tabela">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Tipo</th>
                            <th>Referência</th>
                            <th>Origem</th>
                            <th>Destino</th>
                            <th class="direita">Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $movimentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <?php
                                $entrada = (($m['contaDestino'] ?? '') == ($conta['numero'] ?? ''));
                            ?>
                            <tr>
                                <td class="suave"><?php echo e(substr(str_replace('T', ' ', $m['dataHora'] ?? ''), 0, 16)); ?></td>
                                <td><span class="etiqueta etiqueta-neutra"><?php echo e($m['tipo'] ?? ''); ?></span></td>
                                <td class="suave"><?php echo e($m['referencia'] ?? ''); ?></td>
                                <td class="suave"><?php echo e($m['contaOrigem'] ?? '-'); ?></td>
                                <td class="suave"><?php echo e($m['contaDestino'] ?? ''); ?></td>
                                <td class="direita <?php echo e($entrada ? 'entrada-valor' : 'saida-valor'); ?>">
                                    <?php echo e($entrada ? '+' : '-'); ?> <?php echo e(number_format((float) ($m['valor'] ?? 0), 2, ',', ' ')); ?>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="6" class="vazio">Ainda não há movimentos nesta conta.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
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
<?php endif; ?>
<?php /**PATH C:\ProgramacaoWeb\Springboot\backoffice\backoffice\resources\views/contas/show.blade.php ENDPATH**/ ?>