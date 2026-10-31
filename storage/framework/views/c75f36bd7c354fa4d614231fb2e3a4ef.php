<?php $__env->startSection('content'); ?>
<h1>Pengurus DKM</h1>
<p><a class="btn" href="<?php echo e(route('admin.pengurus.create')); ?>">+ Tambah Pengurus DKM</a></p>
<div class="card"><div class="table-wrap">
<table>
<thead><tr><th>Foto</th><th>Nama</th><th>Jabatan</th><th>Urutan</th><th>Aksi</th></tr></thead>
<tbody>
<?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<tr>
<?php if($item->fotoUrl()): ?><td><img class="thumb" src="<?php echo e($item->fotoUrl()); ?>" alt=""></td><?php else: ?><td>-</td><?php endif; ?><td><?php echo e($item->nama); ?></td><td><?php echo e($item->jabatan); ?></td><td><?php echo e($item->urutan); ?></td>
<td class="aksi">
<a href="<?php echo e(route('admin.pengurus.show', $item)); ?>">Lihat</a> |
<a href="<?php echo e(route('admin.pengurus.edit', $item)); ?>">Edit</a> |
<form method="POST" action="<?php echo e(route('admin.pengurus.destroy', $item)); ?>" style="display:inline" onsubmit="return confirm('Hapus data ini? Foto yang terupload juga akan dihapus.')">
<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<button type="submit" style="background:none;border:0;color:#b91c1c;cursor:pointer;padding:0">Hapus</button>
</form>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<tr><td colspan="10">Belum ada data. Klik tombol "Tambah" di atas untuk menambahkan pengurus pertama.</td></tr>
<?php endif; ?>
</tbody>
</table></div>
</div>
<?php echo e($items->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\masjid-baeturohman-laravel\resources\views/admin/pengurus/index.blade.php ENDPATH**/ ?>