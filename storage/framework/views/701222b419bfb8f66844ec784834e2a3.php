<?php $__env->startSection('content'); ?>
    <div class="vh-100 mt-5 pt-3">
        <h1 class="text-center">Admin panel</h1>
        <div class="px-5">
            <table  class="table table-striped table-bordered ">
                <thead>
                <tr>
                    <th scope="col">Имя пользователя</th>
                    <th scope="col">Фамилия пользователя</th>
                    <th scope="col">Отчество пользователя</th>
                    <th scope="col">Номер автомобиля</th>
                    <th scope="col">Описание нарушения</th>
                    <th scope="col">Статус</th>
                    <th><i class="fas fa-edit"></i></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo e($statement->user->name); ?></td>
                    <td><?php echo e($statement->user->lastname); ?></td>
                    <td><?php echo e($statement->user->surname); ?></td>
                    <td><?php echo e($statement->number_auto); ?></td>
                    <td><?php echo e($statement->description_trespassing); ?></td>
                    <td>
                        <?php if($statement->status == 0): ?>
                            <span class="text-danger"><?php echo e($statuses[$statement->status]); ?></span>
                        <?php elseif(in_array($statement->status, [1,2,3])): ?>
                            <span class="text-success"><?php echo e($statuses[$statement->status]); ?></span>
                        <?php else: ?>
                            <?php echo e($statuses[$statement->status]); ?>

                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="">
                            <i class="fa fa-edit"></i>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="ms-5 mt-5 " style="font-size: 18px;">
            <a class="link-info text-body text" href="<?php echo e(route('admin.index')); ?>">Back</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\pdd-laravel\resources\views/admin/show.blade.php ENDPATH**/ ?>