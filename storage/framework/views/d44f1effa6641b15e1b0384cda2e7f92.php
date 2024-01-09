<?php $__env->startSection('content'); ?>
                <div class="flex bg-opacity-75 text-uppercase vh-100 mh-100 mx-auto pt-xxl-5">
                    <?php if(auth()->guard()->guest()): ?>
                    <div class="text-center">
                        <h1 class="text-center text-uppercase ">
                            Вы находитесь на Портале сознательных граждан «Нарушениям.Нет»
                        </h1>
                        <p>
                            Для использования системы необходимо зарегестрироваться
                        </p>
                    </div>
                    <?php endif; ?>
                        <?php if(Auth::user()): ?>
                            <div class="text-center">
                                <h1 class="text-center text-uppercase ">
                                    Вы находитесь на Портале сознательных граждан «Нарушениям.Нет»
                                </h1>

                                <p>
                                    Для использования системы необходимо заполнить поле заявки и она уйдет администратору
                                </p>
                            </div>
                        <?php endif; ?>

                </div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\pdd-laravel\resources\views/welcome.blade.php ENDPATH**/ ?>