<aside class="sidebar">

    <div class="marca">
        <div class="marca-logo"><?php echo e(strtoupper(substr(config('app.name'), 0, 1))); ?></div>
        <div>
            <div class="marca-nome"><?php echo e(config('app.name')); ?></div>
            <div class="marca-sub">Backoffice</div>
        </div>
    </div>

    <nav class="menu">
        <a href="<?php echo e(route('dashboard')); ?>" class="<?php echo e(request()->routeIs('dashboard') ? 'ativo' : ''); ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11l9-8 9 8"/><path d="M5 10v10h14V10"/></svg>
            Painel
        </a>

        <a href="<?php echo e(route('clientes.index')); ?>" class="<?php echo e(request()->routeIs('clientes.*') || request()->routeIs('contas.index') || request()->routeIs('contas.store') ? 'ativo' : ''); ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="4"/><path d="M2 21c0-4 3-7 7-7s7 3 7 7"/><path d="M17 4a4 4 0 010 8"/><path d="M22 21c0-3-2-5.5-5-6.5"/></svg>
            Clientes
        </a>

        <a href="<?php echo e(route('contas.todas')); ?>" class="<?php echo e(request()->routeIs('contas.todas') || request()->routeIs('contas.show') ? 'ativo' : ''); ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="5" width="20" height="14" rx="3"/><path d="M2 10h20"/><path d="M6 15h4"/></svg>
            Contas
        </a>

        <a href="<?php echo e(route('depositos.form')); ?>" class="<?php echo e(request()->routeIs('depositos.*') ? 'ativo' : ''); ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v12"/><path d="M7 10l5 5 5-5"/><path d="M4 21h16"/></svg>
            Depósito
        </a>
    </nav>

    <div class="utilizador">
        <div>
            <div class="utilizador-papel">Funcionário</div>
            <div class="utilizador-email"><?php echo e(session('email')); ?></div>
        </div>
        <form method="POST" action="<?php echo e(route('logout')); ?>">
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn-sair">Terminar sessão</button>
        </form>
    </div>

</aside>
<?php /**PATH C:\ProgramacaoWeb\Springboot\backoffice\backoffice\resources\views/layouts/navigation.blade.php ENDPATH**/ ?>