<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloudHost - Layanan Web Hosting & Server Cepat Bergaransi</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 font-sans antialiased">

    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-slate-900/85 backdrop-blur-md border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <span class="text-2xl font-black tracking-wider text-blue-500">CLOUD<span class="text-white">HOST</span></span>
            </div>
            <div class="hidden md:flex items-center space-x-8 text-sm font-medium text-slate-300">
                <a href="#features" class="hover:text-blue-400 transition">Fitur</a>
                <a href="#pricing" class="hover:text-blue-400 transition">Hosting</a>
            </div>
            <div>
                <a href="#pricing" class="bg-blue-600 hover:bg-blue-500 text-white px-5 py-2.5 rounded-xl font-medium text-sm transition shadow-lg shadow-blue-500/20">Pesan Sekarang</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 md:pt-44 md:pb-32 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <span class="inline-block bg-blue-500/10 text-blue-400 text-xs font-semibold px-3 py-1 rounded-full border border-blue-500/20 mb-6">⚡ Performa Tinggi & Stabil</span>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight max-w-4xl mx-auto leading-tight mb-6">
                Web Hosting Super Cepat untuk <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-400">Kesuksesan Bisnis Anda</span>
            </h1>
            <p class="text-slate-400 text-lg md:text-xl max-w-2xl mx-auto mb-10">
                Solusi hosting terbaik dengan infrastruktur NVMe murni, LiteSpeed server, dan garansi uptime 99.9% untuk mendongkrak performa website Anda.
            </p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                <a href="#pricing" class="w-full sm:w-auto bg-blue-600 hover:bg-blue-500 text-white px-8 py-4 rounded-xl font-semibold transition shadow-xl shadow-blue-600/30">Lihat Paket Hosting</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-slate-900/50 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-3xl font-bold mb-4">Kenapa Memilih CloudHost?</h2>
                <p class="text-slate-400">Kami memberikan teknologi infrastruktur kelas atas dengan harga yang bersahabat.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-slate-800/50 p-8 rounded-2xl border border-slate-700/60">
                    <div class="text-4xl mb-4"><?php echo e($feature['icon']); ?></div>
                    <h3 class="text-xl font-semibold mb-2"><?php echo e($feature['title']); ?></h3>
                    <p class="text-slate-400 text-sm leading-relaxed"><?php echo e($feature['desc']); ?></p>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-3xl font-bold mb-4">Pilih Paket Hosting Anda</h2>
                <p class="text-slate-400">Semua paket sudah termasuk garansi uang kembali 30 hari.</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">
                <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-slate-800/40 rounded-3xl p-8 border <?php echo e($plan['popular'] ? 'border-blue-500 shadow-2xl shadow-blue-500/10 relative' : 'border-slate-800'); ?> flex flex-col justify-between">
                    <?php if($plan['popular']): ?>
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-blue-600 text-white text-xs font-bold uppercase tracking-wider py-1 px-4 rounded-full">
                        Paling Populer
                    </div>
                    <?php endif; ?>
                    <div>
                        <h3 class="text-2xl font-bold mb-2"><?php echo e($plan['name']); ?></h3>
                        <p class="text-slate-400 text-sm mb-6"><?php echo e($plan['desc']); ?></p>
                        <div class="flex items-baseline mb-6">
                            <span class="text-4xl font-extrabold"><?php echo e($plan['price']); ?></span>
                            <span class="text-slate-400 text-sm ml-1"><?php echo e($plan['period']); ?></span>
                        </div>
                        <ul class="space-y-4 mb-8 text-sm text-slate-300">
                            <?php $__currentLoopData = $plan['specs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <?php echo e($spec); ?>

                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <a href="#" onclick="alert('Terima kasih! Ini adalah web dummy sistem pembelian hosting.')" class="w-full block text-center bg-blue-600 hover:bg-blue-500 text-white py-3 rounded-xl font-medium transition shadow-lg shadow-blue-600/20">Pilih Paket</a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-950 border-t border-slate-800 py-12">
        <div class="max-w-7xl mx-auto px-6 text-center text-slate-500 text-sm">
            <p>&copy; <?php echo e(date('Y')); ?> CloudHost. All rights reserved. Dummy Laravel Web Hosting Project.</p>
        </div>
    </footer>

</body>
</html>
<?php /**PATH /www/wwwroot/dclaravel.telkomuniversity.ac.id/hosting-store/resources/views/welcome.blade.php ENDPATH**/ ?>