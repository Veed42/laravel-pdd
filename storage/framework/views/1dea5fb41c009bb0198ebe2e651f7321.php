<?php $__env->startSection('content'); ?>
    <div>

    </div>
    <h1 class="mt-5 text-center">
        Страница редактирования заявки
    </h1>
    <div class="container vh-100">
        <form action="<?php echo e(route('statement.update', $statement->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('patch'); ?>
            <div class="row mb-3 flex-column">
                <label for="name" class="mt-3"><?php echo e(__('Имя')); ?></label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e($statement->user->name); ?>"   autofocus>


                </div>
                <div class="col-md-6 form-group">
                    <label class="mt-3" for="lastname"><?php echo e(__('Фамилия')); ?></label>
                    <input id="lastname" type="text" class="form-control <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="lastname" value="<?php echo e($statement->user->lastname); ?>"  autofocus>

                </div>

                <div class="col-md-6">
                    <label class="mt-3" for="surname"><?php echo e(__('Отчество')); ?></label>
                    <input id="surname" type="text" class="form-control <?php $__errorArgs = ['surname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="surname" value="<?php echo e($statement->user->surname); ?>"  autofocus>

                </div>

                <div class="col-md-6">
                    <label class="mt-3" for="login"><?php echo e(__('Логин')); ?></label>
                    <input id="login" type="text" class="form-control <?php $__errorArgs = ['login'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="login" value="<?php echo e($statement->user->login); ?>"  autofocus>

                </div>

                <div class="form-group mt-3">
                    <span class="mb-3">Статус заявки</span>
                    <div class="mt-2">
                        <?php $status = old('status') ?? $statement->status ?? 0 ?>
                        <select name="status" class="form-control" title="Статус заявки">
                            <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option  value="<?php echo e($key); ?>" <?php if($key == $status): ?> selected <?php endif; ?>>
                                    <?php echo e($value); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                </div>

            </div>
            <div class="row mb-0">
                <div class="col-md-8 ">
                    <button type="submit" class="btn btn-primary">
                        <?php echo e(__('Update')); ?>

                    </button>
                </div>
            </div>
        </form>
        <div class="mt-5">
            <div class="col-md-8 ">
                <button type="submit" class="btn btn-primary">
                    <?php echo e(__('Back')); ?>

                </button>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['tittle' => 'Редактирование'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\pdd-laravel\resources\views/admin/edit.blade.php ENDPATH**/ ?>