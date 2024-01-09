<?php $__env->startSection('content'); ?>
    <div class="vh-100 mt-5 pt-3">
        <h1 class="text-center">Admin panel</h1>
        <div class="px-4">
            <table  class="table table-striped table-bordered ">
                <thead>
                <tr class="text-center">
                    <th scope="col">Имя пользователя</th>
                    <th scope="col">Номер автомобиля</th>
                    <th scope="col">Описание нарушения</th>
                    <th scope="col">Статус</th>
                    <th><i class="fas fa-eye "></i></th>
                    <th><i class="fas fa-edit"></i></th>
                    <th><i class="fas fa-times"></i></th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $statements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="text-center">
                        <td><?php echo e($statement->user->login); ?></td>
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
                        <td><a href="<?php echo e(route('statements.show', $statement->id)); ?>">
                                <i class="fa fa-eye"></i>
                            </a>
                        </td>
                        <td><a href="<?php echo e(route('statement.edit', $statement->id)); ?>">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <form action="<?php echo e(route('statement.destroy',$statement->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <input type="submit" value="Delete">
                            </form>
                        </td>


                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\pdd-laravel\resources\views/admin/index.blade.php ENDPATH**/ ?>