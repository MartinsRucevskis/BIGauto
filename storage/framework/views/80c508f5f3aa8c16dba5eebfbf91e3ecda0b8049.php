<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIGauto</title>
</head>
<body>
    <?php echo e(View::make('header')); ?>

    <h1 class="display-1 text-center">Automašīnas</h1>
    
    <div class="border-top my-3"></div>
    <?php $count = 0 ?>
    <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($count % 5 == 0): ?> <div class="row d-flex align-items-center justify-content-center p-0 m-0">
    <?php endif; ?>
    <?php $count++ ?>
    <div class="card m-3 p-0" style="width: 16rem; height:27rem">
        <img class="card-img-top img-responsive" style="height:37%; width:100%" src=<?php echo e($car->Bilde); ?> alt=<?php echo e($car->Razotajs." ".$car->Modelis); ?>>
        <div class="card-body">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo e($car->Razotajs); ?></li>
            <li class="list-group-item"><?php echo e($car->Modelis); ?></li>
            <li class="list-group-item"><?php echo e($car->Gads); ?></li>
            <li class="list-group-item"><?php echo e($car->Atrumkarba); ?></li>
            <li class="list-group-item"><?php echo e($car->Cena." €"); ?></li>
        </ul>
        <a href=<?php echo e("http://localhost:8080/lielaisdarbs/public/car/".$car->id); ?> class="btn btn-primary stretched-link d-flex align-items-center justify-content-center">Apskatīt</a>
        </div>
    </div>
    <?php if($count % 5 == 0): ?> </div>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo e(View::make('footer')); ?>

    
</body>
</html><?php /**PATH C:\wamp64\www\lielaisdarbs\resources\views/master.blade.php ENDPATH**/ ?>