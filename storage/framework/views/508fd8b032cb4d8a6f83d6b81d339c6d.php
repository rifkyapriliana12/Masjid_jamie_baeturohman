<?php $__env->startSection('content'); ?>
<?php if($slides->isNotEmpty()): ?>
<section class="hero hero-slider" id="beranda">
    <div class="slides" id="slideshow" data-count="<?php echo e($slides->count()); ?>">
        <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <figure class="slide <?php echo e($loop->first ? 'active' : ''); ?>">
                <img src="<?php echo e($slide->fotoUrl()); ?>" alt="<?php echo e($slide->judul ?? 'Foto Masjid Jami Baeturohman'); ?>">
                <?php if($slide->judul || $slide->keterangan): ?>
                    <figcaption class="slide-caption">
                        <?php if($slide->judul): ?><b><?php echo e($slide->judul); ?></b><?php endif; ?>
                        <?php if($slide->keterangan): ?><span><?php echo e($slide->keterangan); ?></span><?php endif; ?>
                    </figcaption>
                <?php endif; ?>
            </figure>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="hero-overlay"></div>
    <div class="hero-text">
        <p style="font-size:1.6rem;color:#fbbf24">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ</p>
        <p>Dengan menyebut nama Allah Yang Maha Pengasih lagi Maha Penyayang</p>
        <h1><?php echo e($setting->nama_masjid); ?></h1>
        <p class="gold">DESA BELAWA</p>
        <p style="max-width:640px;margin:0 auto"><?php echo e(config('mosque.tagline')); ?> — rumah ibadah dan pembinaan umat bagi warga Desa Belawa dan sekitarnya.</p>
        <p style="margin-top:20px">
            <a class="btn" href="#jadwal">Lihat Jadwal Sholat</a>
            <a class="btn2" href="#kegiatan">Kegiatan Masjid</a>
        </p>
    </div>
    <?php if($slides->count() > 1): ?>
        <button class="slide-nav slide-prev" type="button" aria-label="Slide sebelumnya">&#10094;</button>
        <button class="slide-nav slide-next" type="button" aria-label="Slide berikutnya">&#10095;</button>
        <div class="slide-dots">
            <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <button class="slide-dot <?php echo e($loop->first ? 'active' : ''); ?>" type="button" aria-label="Ke slide <?php echo e($loop->iteration); ?>"></button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
</section>
<script>
(function () {
    var box = document.getElementById('slideshow');
    if (!box) return;
    var items = box.querySelectorAll('.slide');
    if (items.length <= 1) return;
    var section = box.closest('.hero-slider');
    var dots = section.querySelectorAll('.slide-dot');
    var current = 0;
    var timer = null;
    function show(index) {
        current = (index + items.length) % items.length;
        items.forEach(function (el, i) { el.classList.toggle('active', i === current); });
        dots.forEach(function (el, i) { el.classList.toggle('active', i === current); });
    }
    function start() { if (!timer) timer = setInterval(function () { show(current + 1); }, 5000); }
    function stop() { if (timer) { clearInterval(timer); timer = null; } }
    function restart() { stop(); start(); }
    var prev = section.querySelector('.slide-prev');
    var next = section.querySelector('.slide-next');
    if (prev) prev.addEventListener('click', function () { show(current - 1); restart(); });
    if (next) next.addEventListener('click', function () { show(current + 1); restart(); });
    dots.forEach(function (dot, i) { dot.addEventListener('click', function () { show(i); restart(); }); });
    section.addEventListener('mouseenter', stop);
    section.addEventListener('mouseleave', start);
    section.addEventListener('touchstart', stop, { passive: true });
    section.addEventListener('touchend', start);
    start();
})();
</script>
<?php else: ?>
<section class="hero" id="beranda">
    <p style="font-size:1.6rem;color:#fbbf24">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ</p>
    <p>Dengan menyebut nama Allah Yang Maha Pengasih lagi Maha Penyayang</p>
    <h1><?php echo e($setting->nama_masjid); ?></h1>
    <p class="gold">DESA BELAWA</p>
    <p style="max-width:640px;margin:0 auto"><?php echo e(config('mosque.tagline')); ?> — rumah ibadah dan pembinaan umat bagi warga Desa Belawa dan sekitarnya.</p>
    <p style="margin-top:20px">
        <a class="btn" href="#jadwal">Lihat Jadwal Sholat</a>
        <a class="btn2" href="#kegiatan">Kegiatan Masjid</a>
    </p>
</section>
<?php endif; ?>

<div class="wrap">
    <section>
        <div class="grid">
            <?php $__currentLoopData = config('mosque.features'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">
                    <div style="font-size:2rem"><?php echo e($feature['icon']); ?></div>
                    <h3><?php echo e($feature['title']); ?></h3>
                    <p><?php echo e($feature['text']); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <section id="tentang">
        <p><b style="color:#b45309;letter-spacing:.15em">TENTANG MASJID</b></p>
        <h2>Rumah Allah, Pusat Komunitas</h2>
        <p><?php echo e(config('mosque.description')); ?></p>
        <p>DKM <?php echo e($setting->nama_masjid); ?> mengajak seluruh jamaah untuk memakmurkan masjid: hadir berjamaah, mengikuti kajian, menyekolahkan anak di TPA/TPQ, serta berbagi melalui infaq dan sedekah.</p>
        <div class="card">
            <p><b>Nama:</b> <?php echo e($setting->nama_masjid); ?></p>
            <p><b>Lokasi:</b> Desa Belawa</p>
            <p><b>Alamat:</b> <?php echo e($setting->alamat); ?></p>
            <p><b>Pengelola:</b> Dewan Kemakmuran Masjid (DKM)</p>
        </div>
    </section>

    <section id="jadwal">
        <p><b style="color:#b45309;letter-spacing:.15em">JADWAL SHOLAT</b></p>
        <h2>Waktu Sholat Hari Ini</h2>
        <p>Jadwal diperbarui otomatis setiap hari dari API Aladhan (metode Kemenag RI, wilayah Cirebon). Datanglah lebih awal agar dapat mengikuti sholat berjamaah dengan khusyuk.</p>
        <div class="dark">
            <h3>Jadwal Sholat Hari Ini — Wilayah Cirebon &amp; sekitarnya</h3>
            <?php if($prayer): ?>
                <?php if(! empty($prayer['hijri'])): ?>
                    <p style="color:#fbbf24"><?php echo e($prayer['hijri']['day'] ?? ''); ?> <?php echo e($prayer['hijri']['month']['en'] ?? ''); ?> <?php echo e($prayer['hijri']['year'] ?? ''); ?> H · <?php echo e($prayer['date']['readable'] ?? ''); ?></p>
                <?php endif; ?>
                <div class="prayer">
                    <div>Subuh<br><b><?php echo e(substr($prayer['timings']['Fajr'] ?? '-', 0, 5)); ?></b></div>
                    <div>Dzuhur<br><b><?php echo e(substr($prayer['timings']['Dhuhr'] ?? '-', 0, 5)); ?></b></div>
                    <div>Ashar<br><b><?php echo e(substr($prayer['timings']['Asr'] ?? '-', 0, 5)); ?></b></div>
                    <div>Maghrib<br><b><?php echo e(substr($prayer['timings']['Maghrib'] ?? '-', 0, 5)); ?></b></div>
                    <div>Isya<br><b><?php echo e(substr($prayer['timings']['Isha'] ?? '-', 0, 5)); ?></b></div>
                </div>
            <?php else: ?>
                <p>Jadwal sholat tidak dapat dimuat saat ini. Silakan periksa koneksi internet Anda, atau lihat jadwal di papan pengumuman masjid.</p>
            <?php endif; ?>
            <p class="muted" style="color:#a7f3d0">Sumber: Aladhan Prayer Times (metode Kemenag RI). Waktu dapat berbeda beberapa menit dengan jadwal resmi setempat.</p>
        </div>
    </section>

    <section id="kegiatan">
        <p><b style="color:#b45309;letter-spacing:.15em">KEGIATAN</b></p>
        <h2>Program &amp; Kegiatan</h2>
        <?php if($kegiatans->isEmpty()): ?>
            <p>Belum ada kegiatan yang diumumkan. Silakan hubungi pengurus DKM.</p>
        <?php else: ?>
            <div class="grid">
                <?php $__currentLoopData = $kegiatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kegiatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="card">
                        <?php if($kegiatan->fotoUrl()): ?>
                            <img class="resp" src="<?php echo e($kegiatan->fotoUrl()); ?>" alt="<?php echo e($kegiatan->judul); ?>">
                        <?php else: ?>
                            <div class="foto-kosong">Belum ada foto kegiatan</div>
                        <?php endif; ?>
                        <p class="muted"><?php echo e($kegiatan->tanggal->format('d F Y')); ?></p>
                        <h3><a href="<?php echo e(route('kegiatan.show', $kegiatan)); ?>"><?php echo e($kegiatan->judul); ?></a></h3>
                        <p><?php echo e(\Illuminate\Support\Str::limit($kegiatan->deskripsi, 140)); ?></p>
                    </article>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </section>

    <section id="khutbah">
        <p><b style="color:#b45309;letter-spacing:.15em">JADWAL KHUTBAH JUMAT</b></p>
        <h2>Jadwal Khutbah Jumat</h2>
        <?php if($khutbahs->isEmpty()): ?>
            <p>Jadwal khutbah belum diumumkan. Silakan hubungi pengurus DKM.</p>
        <?php else: ?>
            <div class="table-wrap"><table>
                <thead><tr><th>Tanggal Jumat</th><th>Khatib</th><th>Imam</th><th>Muadzin</th><th>Tema</th></tr></thead>
                <tbody>
                    <?php $__currentLoopData = $khutbahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $khutbah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($khutbah->tanggal->format('d F Y')); ?></td>
                            <td><?php echo e($khutbah->khatib); ?></td>
                            <td><?php echo e($khutbah->imam); ?></td>
                            <td><?php echo e($khutbah->muadzin); ?></td>
                            <td><?php echo e($khutbah->tema ?? '-'); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table></div>
        <?php endif; ?>
    </section>

    <section id="struktur">
        <p><b style="color:#b45309;letter-spacing:.15em">STRUKTUR DKM</b></p>
        <h2>Pengurus Dewan Kemakmuran Masjid</h2>
        <?php if($pengurus->isEmpty()): ?>
            <p>Struktur pengurus belum diumumkan.</p>
        <?php else: ?>
            <div class="grid">
                <?php $__currentLoopData = $pengurus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card" style="text-align:center">
                        <?php if($orang->fotoUrl()): ?>
                            <img class="pengurus-foto" src="<?php echo e($orang->fotoUrl()); ?>" alt="<?php echo e($orang->nama); ?>">
                        <?php else: ?>
                            <div class="foto-kosong">Belum ada foto pengurus</div>
                        <?php endif; ?>
                        <h3><?php echo e($orang->nama); ?></h3>
                        <p><?php echo e($orang->jabatan); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
        <p class="muted">Catatan: nama pengurus yang masih tertulis "Belum diisi" adalah data contoh dari seeder dan harus diganti dengan nama asli oleh admin.</p>
    </section>

    <section id="infaq">
        <div class="notice" style="text-align:center">
            <h2>Infaq &amp; Sedekah</h2>
            <p>Setiap infaq yang Anda titipkan digunakan untuk operasional masjid, kegiatan pembinaan umat, dan kemaslahatan jamaah. Semoga menjadi amal jariyah yang terus mengalir.</p>
            <?php if($setting->infaqTersedia()): ?>
                <p><b><?php echo e($setting->nama_bank ?? ''); ?></b><br><b style="font-size:1.3rem"><?php echo e($setting->rekening_infaq); ?></b><br>Atas nama pengurus masjid (konfirmasi ke DKM sebelum transfer).</p>
            <?php else: ?>
                <p><b>Rekening infaq: belum diisi DKM.</b><br>Rekening resmi infaq akan diumumkan oleh pengurus DKM. Untuk berinfaq, silakan hubungi pengurus DKM atau datang langsung ke masjid. Nomor rekening tidak ditampilkan karena belum dikonfirmasi — jangan transfer ke nomor rekening yang tidak resmi.</p>
            <?php endif; ?>
        </div>
    </section>

    <section id="kontak">
        <p><b style="color:#b45309;letter-spacing:.15em">KONTAK &amp; LOKASI</b></p>
        <h2>Kunjungi Masjid Kami</h2>
        <div class="grid">
            <div class="card">
                <h3>Alamat</h3>
                <p><?php echo e($setting->alamat); ?></p>
                <p><a href="<?php echo e(config('mosque.maps_url')); ?>" target="_blank" rel="noreferrer">Lihat di Google Maps</a></p>
                <p class="muted">Plus Code: <?php echo e(config('mosque.plus_code')); ?></p>
            </div>
            <div class="card">
                <h3>Telepon / WhatsApp</h3>
                <p><?php echo e($setting->telepon ?? 'Belum diisi DKM — menunggu konfirmasi pengurus DKM'); ?></p>
                <h3>Email</h3>
                <p><?php echo e($setting->email ?? 'Belum diisi DKM'); ?></p>
            </div>
            <div class="card">
                <h3>Pengelola</h3>
                <p>Dewan Kemakmuran Masjid (DKM) <?php echo e($setting->nama_masjid); ?></p>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\masjid-baeturohman-laravel\resources\views/home.blade.php ENDPATH**/ ?>