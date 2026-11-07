<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(config('app.name')); ?> - Backoffice</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/backoffice.css')); ?>?v=<?php echo e(filemtime(public_path('css/backoffice.css'))); ?>">
</head>
<body>

    <div class="login-pagina">

        <div class="login-lado">
            <div class="marca-logo"><?php echo e(strtoupper(substr(config('app.name'), 0, 1))); ?></div>
            <h1><?php echo e(config('app.name')); ?></h1>
            <p>Backoffice para funcionários. Gestão de clientes, abertura de contas, depósitos e extractos.</p>
        </div>

        <div class="login-form-lado">
            <div class="login-caixa">
                <h2>Iniciar sessão</h2>
                <div class="sub">Entre com a sua conta de funcionário.</div>

                <?php if($errors->any()): ?>
                    <div class="alerta alerta-erro">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form action="<?php echo e(route('login.submit')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <div class="campo">
                        <label for="codigo">E-mail</label>
                        <input type="text" name="codigo" id="codigo" required class="entrada"
                               placeholder="admin@banco.com" value="<?php echo e(old('codigo')); ?>">
                    </div>

                    <div class="campo">
                        <label for="pin">Palavra-passe</label>
                        <input type="password" name="pin" id="pin" required class="entrada"
                               placeholder="Insira a sua palavra-passe">
                    </div>

                    <button type="submit" class="btn btn-primario">Entrar</button>
                </form>
            </div>
        </div>

    </div>

</body>
</html>
<?php /**PATH C:\ProgramacaoWeb\Springboot\backoffice\backoffice\resources\views/auth/login.blade.php ENDPATH**/ ?>