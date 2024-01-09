<?php $__env->startSection('content'); ?>
    <div class="vh-100">
        <div class="container ">
            <div class="text-center">
                <h1 class="text-center mt-5">
                    Страница просмотра заявлений и создания заявлений
                </h1></div>

            <a class="link-offset-1-hover" href="<?php echo e(route('statement.create')); ?>">Создать заявление</a>
        </div>
        <div class="px-4">
            <table  class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">Номер автомобиля</th>
                    <th scope="col">Описание нарушения</th>
                    <th scope="col">Статус</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = Auth::user()->statements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($statement->number_auto); ?></td>
                        <td><?php echo e($statement->description_trespassing); ?></td>
                        <td>
                            <?php if($statement->status == 0): ?>
                                <span class="text-danger"><?php echo e($statuses[$statement->status]); ?></span>
                            <?php elseif(in_array($statement->status, [1,2])): ?>
                                <span class="text-success"><?php echo e($statuses[$statement->status]); ?></span>
                            <?php else: ?>
                                <?php echo e($statuses[$statement->status]); ?>

                            <?php endif; ?>
                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>










    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\pdd-laravel\resources\views/statement/index.blade.php ENDPATH**/ ?>