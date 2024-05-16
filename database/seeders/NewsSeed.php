<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->truncate();

        DB::table('news')->insert([
        [            
        'name' => 'NVIDIA\'s RTX 30 series graphics cards',
        'title' => 'Dominace in the Market',
        'description' => 'Introduced in 2020, NVIDIA\'s RTX 30 series graphics cards continued to dominate the market. Models like the RTX 3060 Ti and RTX 3080 offered exceptional performance and support.',
        'imgpath' => asset('img/latest-news/News/1.jpg'),
        'date' => now(),
        'created_at' => now(),
        'updated_at' => now(),
        ],

        [            
        'name' => 'TechBuzz',
        'title' => 'Latest Technological Advancements Unveiled at Tech Expo',
        'description' => 'The annual Tech Expo showcased groundbreaking technological advancements. From AI-powered devices to sustainable energy solutions, the event highlighted the future of technology.',
        'imgpath' => asset('img/latest-news/News/2.jpg'),
        'date' => now(),
        'created_at' => now(),
        'updated_at' => now(),
        ],

        [            
        'name' => 'HealthDigest',
        'title' => 'New Study Reveals Surprising Benefits of Regular Exercise',
        'description' => 'A recent scientific study suggests that regular exercise not only improves physical health but also has positive effects on mental well-being. The findings challenge conventional beliefs about the impact of exercise on mental health.',
        'imgpath' => asset('img/latest-news/News/3.jpg'),
        'date' => now(),
        'created_at' => now(),
        'updated_at' => now(),
        ],

        [            
        'name' => 'SpaceExploration',
        'title' => 'NASA\'s Mars Rover Makes Exciting Discovery on the Red Planet',
        'description' => 'NASA\'s Mars rover recently made a groundbreaking discovery on the surface of the Red Planet. The findings could provide crucial insights into the history of Mars and the possibility of past life.',
        'imgpath' => asset('img/latest-news/News/4.jpg'),
        'date' => now(),
        'created_at' => now(),
        'updated_at' => now(),
        ],

        [            
        'name' => 'EntertainmentWeekly',
        'title' => 'Blockbuster Movie "Galactic Odyssey" Breaks Box Office Records',
        'description' => 'Introduced in 2020, NVIDIA\'s RTX 30 series graphics cards continued to dominate the market. Models like the RTX 3060 Ti and RTX 3080 offered exceptional performance and support.',
        'imgpath' => asset('img/latest-news/News/5.jpg'),
        'date' => now(),
        'created_at' => now(),
        'updated_at' => now(),
        ],
        ]);
    }
}
