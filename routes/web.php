<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $plans = [
        [
            'name' => 'Starter Cloud',
            'price' => 'Rp 15.000',
            'period' => '/ bulan',
            'desc' => 'Cocok untuk blog pribadi, portfolio, dan landing page pemula.',
            'specs' => ['1 Website', '5 GB NVMe Storage', 'Unlimited Bandwidth', 'Free SSL Certificate', '1 Database MySQL'],
            'popular' => false,
        ],
        [
            'name' => 'Business Pro',
            'price' => 'Rp 45.000',
            'period' => '/ bulan',
            'desc' => 'Pilihan terbaik untuk UMKM, toko online, dan web perusahaan.',
            'specs' => ['Unlimited Websites', '50 GB NVMe Storage', 'Unlimited Bandwidth', 'Free SSL Certificate', 'Unlimited Databases', 'Daily Backup'],
            'popular' => true,
        ],
        [
            'name' => 'Enterprise VIP',
            'price' => 'Rp 120.000',
            'period' => '/ bulan',
            'desc' => 'Performa maksimal dengan sumber daya dedicated untuk traffic tinggi.',
            'specs' => ['Unlimited Websites', '200 GB NVMe Storage', 'Unlimited Bandwidth', 'Free Wildcard SSL', 'Dedicated RAM & CPU', 'Priority Support 24/7'],
            'popular' => false,
        ],
    ];

    $features = [
        ['icon' => '🚀', 'title' => 'LiteSpeed Web Server', 'desc' => 'Kecepatan loading hingga 3x lebih cepat dengan LiteSpeed & LSCache.'],
        ['icon' => '🔒', 'title' => 'Free SSL & Keamanan', 'desc' => 'Amankan data pengunjung Anda dengan SSL gratis selamanya dan Imunify360.'],
        ['icon' => '💾', 'title' => '100% NVMe Storage', 'desc' => 'Performa I/O disk super cepat menggunakan teknologi storage NVMe terbaru.'],
        ['icon' => '⚡', 'title' => 'Uptime 99.9%', 'desc' => 'Server berstandar Tier-3 dengan jaminan uptime tinggi dan stabil.'],
    ];

    return view('welcome', compact('plans', 'features'));
});
