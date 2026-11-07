<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name')); ?> - Backoffice</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('css/backoffice.css')); ?>?v=<?php echo e(filemtime(public_path('css/backoffice.css'))); ?>">
    </head>
    <body>
        <div class="app">

            <?php echo $__env->make('layouts.navigation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <div class="principal">

                <?php if(isset($header)): ?>
                    <div class="topo">
                        <?php echo e($header); ?>

                    </div>
                <?php endif; ?>

                <div class="conteudo">
                    <?php if(session('sucesso')): ?>
                        <div class="alerta alerta-sucesso"><?php echo e(session('sucesso')); ?></div>
                    <?php endif; ?>

                    <?php if($errors->any()): ?>
                        <div class="alerta alerta-erro">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $erro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($erro); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <?php echo e($slot); ?>

                </div>
            </div>

        </div>
    </body>
</html>
<?php /**PATH C:\ProgramacaoWeb\Springboot\backoffice\backoffice\resources\views/layouts/app.blade.php ENDPATH**/ ?>