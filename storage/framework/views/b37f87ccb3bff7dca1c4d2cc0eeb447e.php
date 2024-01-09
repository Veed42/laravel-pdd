<?php $__env->startSection('content'); ?>
    <h1 class="mt-5 text-center">
        Страница создания заявки
    </h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 vh-100">
                <div class="card mt-5">
                    <div class="card-header text-center"><?php echo e(__('Store')); ?></div>
                    <?php if(count($errors) > 0): ?>
                        <div style="color:red">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <ul>
                                    <li><?php echo e($message); ?></li>
                                </ul>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>
                    <div class="card-body p-lg-5">
                        <form method="POST" action="<?php echo e(route('statement.store')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="row mb-3">
                                <label for="number_auto" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Регистрационный номер автомобиля')); ?></label>

                                <div class="col-md-6">
                                    <input id="number_auto" type="text" class="form-control <?php $__errorArgs = ['number_auto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="number_auto" autocomplete="current-password" placeholder="Регистрационный номер автомобиля">

                                    <?php $__errorArgs = ['number_auto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <label for="description_trespassing" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Описание нарушения')); ?></label>

                                <div class="col-md-6">
                                    <textarea id="description_trespassing" type="text" class=" input-description form-control p-3 h5 <?php $__errorArgs = ['description_trespassing'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="description_trespassing"  placeholder="Описание нарушения"  ></textarea>

                                    <?php $__errorArgs = ['description_trespassing'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback " role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>



                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo e(__('Submit')); ?>

                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\pdd-laravel\resources\views/statement/create.blade.php ENDPATH**/ ?>