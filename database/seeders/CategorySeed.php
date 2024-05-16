<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('_category')->truncate();

        DB::table('_category')->insert([
            [
                'name' => 'AMD Ryzen 9 3900X',
                'description' => 'Processor 12-core 24-threads socket AM4 game cache 70 MB 7 nm TDP 105W with cooling system',
                'price' => 490,
                'regular_price' => 500,
                'imgpath' => 'assets/img/Project-images/CPU.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'GeForce RTX 4090 GAMING X TRIO 24G',
                'description' => 'High-performance graphics card featuring the latest NVIDIA Ampere architecture, 24GB GDDR6X VRAM, and advanced cooling technology.',
                'price' => 1499.99,
                'regular_price' => 1599.99,
                'imgpath' => 'assets/img/Project-images/GPU.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Corsair Vengeance RGB PRO',
                'description' => 'High-performance DDR4 RAM with customizable RGB lighting, ideal for gaming and content creation.',
                'price' => 129.99,
                'regular_price' => 139.99,
                'imgpath' => 'assets/img/Project-images/Ram.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'ASUS ROG STRIX 750G',
                'description' => '80 PLUS Gold certified fully modular power supply with 1000W capacity, designed for gaming enthusiasts with ASUS ROG Strix aesthetics.',
                'price' => 199.99,
                'regular_price' => 219.99,
                'imgpath' => 'assets/img/Project-images/Powersupply.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Samsung 2TB 870 QVO SSD',
                'description' => 'High-capacity 2.5-inch internal SSD with 2TB storage, designed for fast and reliable data storage and retrieval.',
                'price' => 249.99,
                'regular_price' => 279.99,
                'imgpath' => 'assets/img/Project-images/SSD.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Asus ROG Strix B460-F Gaming Motherboard',
                'description' => 'High-performance ATX motherboard designed for gaming, featuring Intel B460 chipset, support for 10th Gen Intel Core processors, and RGB lighting.',
                'price' => 199.99,
                'regular_price' => 219.99,
                'imgpath' => 'assets/img/Project-images/Motherboard.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Seagate IronWolf Pro 12TB',
                'description' => 'High-capacity 3.5-inch internal hard drive designed for NAS systems, featuring 12TB storage capacity, optimized for 24x7 operation, and built for reliability.',
                'price' => 399.99,
                'regular_price' => 449.99,
                'imgpath' => 'assets/img/Project-images/Hard Disk.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Logitech G Pro X Superlight",
                'description' => "Ultra-lightweight gaming mouse designed for professional gamers, featuring Logitech's HERO sensor, customizable buttons, and a sleek design.",
                'price' => 149.99,
                'regular_price' => 169.99,
                'imgpath' => 'assets/img/Project-images/Mouse.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'SteelSeries Arctis Pro',
                'description' => 'Premium gaming headset with Hi-Res audio certification, comfortable ski goggle suspension headband, and ClearCast bidirectional microphone for superior voice clarity.',
                'price' => 199.99,
                'regular_price' => 219.99,
                'imgpath' => 'assets/img/Project-images/Headset.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'SteelSeries Apex Pro TKL',
                'description' => 'Tenkeyless mechanical gaming keyboard with customizable mechanical switches, programmable RGB lighting, and a magnetic wrist rest for enhanced comfort.',
                'price' => 199.99,
                'regular_price' => 219.99,
                'imgpath' => 'assets/img/Project-images/Keyboard.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Canvas 32Q Curved Monitor',
                'description' => '32-inch curved monitor with QHD resolution, designed for immersive gaming and multimedia experiences, featuring a sleek design and multiple connectivity options.',
                'price' => 499.99,
                'regular_price' => 549.99,
                'imgpath' => 'assets/img/Project-images/Monitor.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Arozzi Arena Gaming Desk',
                'description' => 'Spacious gaming desk with a large mouse pad surface, cable management system, and adjustable height, designed to provide a comfortable and immersive gaming experience.',
                'price' => 249.99,
                'regular_price' => 279.99,
                'imgpath' => 'assets/img/Project-images/Table.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Blitzed Gaming Racing Style Chair',
                'description' => 'Ergonomic racing style gaming chair with adjustable armrests, lumbar support, and a high-back design for enhanced comfort during long gaming sessions.',
                'price' => 199.99,
                'regular_price' => 229.99,
                'imgpath' => 'assets/img/Project-images/Chair.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
