<?php $__env->startSection('content'); ?>
<div class="wrap">
    <section style="max-width:520px;margin:0 auto">
        <h1>Login Admin</h1>
        <p>Halaman ini hanya untuk pengurus DKM yang mengelola website masjid.</p>
        <?php if($errors->any()): ?>
            <div class="errors">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <form method="POST" action="<?php echo e(route('login.store')); ?>">
            <?php echo csrf_field(); ?>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
            <label><input type="checkbox" name="remember" value="1" style="width:auto"> Ingat saya</label>
            <div><button class="primary" type="submit">Masuk</button></div>
        </form>
        <p class="muted">Akun demo hasil seeder ada di README (bukan akun asli). Ganti passwordnya setelah login pertama.</p>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\masjid-baeturohman-laravel\resources\views/auth/login.blade.php ENDPATH**/ ?>