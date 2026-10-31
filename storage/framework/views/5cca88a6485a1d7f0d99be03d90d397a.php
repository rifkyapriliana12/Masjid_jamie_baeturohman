<?php $__env->startSection('content'); ?>
<h1>Dasbor Admin</h1>
<p>Selamat datang, <?php echo e(auth()->user()->name); ?>. Di sini Anda bisa mengubah isi website masjid tanpa perlu mengerti pemrograman. Pilih salah satu tombol di bawah ini.</p>
<h2>Apa yang ingin Anda lakukan?</h2>
<p><a class="btn" href="<?php echo e(route('admin.kegiatan.create')); ?>">+ Tambah Kegiatan</a> <a class="btn" href="<?php echo e(route('admin.khutbah.create')); ?>">+ Tambah Jadwal Khutbah</a> <a class="btn" href="<?php echo e(route('admin.pengurus.create')); ?>">+ Tambah Pengurus</a></p>
<p class="help">Contoh pemakaian: untuk mengumumkan pengajian baru, klik "Tambah Kegiatan", isi judul dan tanggalnya, lalu klik "Simpan". Kegiatan itu langsung tampil di halaman depan website.</p>
<div class="card">
    <p><b>Kegiatan:</b> <?php echo e(\App\Models\Kegiatan::count()); ?> data — <a href="<?php echo e(route('admin.kegiatan.index')); ?>">Kelola Kegiatan</a></p>
    <p><b>Jadwal Khutbah:</b> <?php echo e(\App\Models\Khutbah::count()); ?> data — <a href="<?php echo e(route('admin.khutbah.index')); ?>">Kelola Khutbah</a></p>
    <p><b>Struktur DKM:</b> <?php echo e(\App\Models\Pengurus::count()); ?> data — <a href="<?php echo e(route('admin.pengurus.index')); ?>">Kelola Pengurus</a></p>
    <p><b>Pengaturan masjid:</b> <a href="<?php echo e(route('admin.pengaturan.edit')); ?>">Ubah nama, alamat, telepon, email, dan rekening infaq</a></p>
</div>
<p class="muted">Penting: data contoh dari seeder (nama "Belum diisi" dan tema contoh) harus diganti dengan data asli sebelum website diumumkan ke jamaah.</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\masjid-baeturohman-laravel\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>