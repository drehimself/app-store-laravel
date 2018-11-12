<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'title' => 'QuarkXPress 2018 Pro',
            'tagline' => 'Love Print, Live Digital',
            'icon' => asset('img/icon_quark.png'),
            'price' => 39999,
            'description' => 'Quark Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque nisi exercitationem amet non nesciunt ab suscipit vel. Temporibus eveniet alias, et, soluta vel animi illum adipisci eum vero, unde inventore.',
            'website' => 'https://apple.com',
            'media1' => asset('img/asset1.jpg'),
            'media2' => asset('img/asset2.jpg'),
        ]);

        Product::create([
            'title' => 'Pixelmator Pro',
            'tagline' => 'Pro image editing for everyone',
            'icon' => asset('img/icon_pixelmator.png'),
            'price' => 3999,
            'description' => 'Pixelmator Pro Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque nisi exercitationem amet non nesciunt ab suscipit vel. Temporibus eveniet alias, et, soluta vel animi illum adipisci eum vero, unde inventore.',
            'website' => 'https://apple.com',
            'media1' => asset('img/asset1.jpg'),
            'media2' => asset('img/asset2.jpg'),
        ]);

        Product::create([
            'title' => 'OmniFocus 3',
            'tagline' => 'Accomplish More Every Day',
            'icon' => asset('img/icon_omnifocus.png'),
            'price' => 0,
            'description' => 'OmniFocus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque nisi exercitationem amet non nesciunt ab suscipit vel. Temporibus eveniet alias, et, soluta vel animi illum adipisci eum vero, unde inventore.',
            'website' => 'https://apple.com',
            'media1' => asset('img/asset1.jpg'),
            'media2' => asset('img/asset2.jpg'),
        ]);

        Product::create([
            'title' => 'Fantastical 2',
            'tagline' => 'Calendar and Reminders',
            'icon' => asset('img/icon_fantastical2.png'),
            'price' => 6999,
            'description' => 'Quark Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque nisi exercitationem amet non nesciunt ab suscipit vel. Temporibus eveniet alias, et, soluta vel animi illum adipisci eum vero, unde inventore.',
            'website' => 'https://apple.com',
            'media1' => asset('img/asset1.jpg'),
            'media2' => asset('img/asset2.jpg'),
        ]);

        Product::create([
            'title' => 'Final Cut Pro',
            'tagline' => 'Professional post-production',
            'icon' => asset('img/icon_fcp.png'),
            'price' => 39999,
            'description' => 'Final Cut Pro Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque nisi exercitationem amet non nesciunt ab suscipit vel. Temporibus eveniet alias, et, soluta vel animi illum adipisci eum vero, unde inventore.',
            'website' => 'https://apple.com',
            'media1' => asset('img/asset1.jpg'),
            'media2' => asset('img/asset2.jpg'),
        ]);

        Product::create([
            'title' => 'Magnet',
            'tagline' => 'Organize Your Workspace',
            'icon' => asset('img/icon_magnet.png'),
            'price' => 139,
            'description' => 'Magnet Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque nisi exercitationem amet non nesciunt ab suscipit vel. Temporibus eveniet alias, et, soluta vel animi illum adipisci eum vero, unde inventore.',
            'website' => 'https://apple.com',
            'media1' => asset('img/asset1.jpg'),
            'media2' => asset('img/asset2.jpg'),
        ]);

        Product::create([
            'title' => 'DaisyDisk',
            'tagline' => 'Recover disk space',
            'icon' => asset('img/icon_daisydisk.png'),
            'price' => 999,
            'description' => 'DaisyDisk Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque nisi exercitationem amet non nesciunt ab suscipit vel. Temporibus eveniet alias, et, soluta vel animi illum adipisci eum vero, unde inventore.',
            'website' => 'https://apple.com',
            'media1' => asset('img/asset1.jpg'),
            'media2' => asset('img/asset2.jpg'),
        ]);

        Product::create([
            'title' => 'The Sims 2: Super Collection',
            'tagline' => 'Your faves in one place',
            'icon' => asset('img/icon_sims.png'),
            'price' => 3999,
            'description' => 'The Sims Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque nisi exercitationem amet non nesciunt ab suscipit vel. Temporibus eveniet alias, et, soluta vel animi illum adipisci eum vero, unde inventore.',
            'website' => 'https://apple.com',
            'media1' => asset('img/asset1.jpg'),
            'media2' => asset('img/asset2.jpg'),
        ]);

        Product::create([
            'title' => 'Word Document Writer Pro',
            'tagline' => 'Business',
            'icon' => asset('img/icon_word.png'),
            'price' => 3999,
            'description' => 'Word Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque nisi exercitationem amet non nesciunt ab suscipit vel. Temporibus eveniet alias, et, soluta vel animi illum adipisci eum vero, unde inventore.',
            'website' => 'https://apple.com',
            'media1' => asset('img/asset1.jpg'),
            'media2' => asset('img/asset2.jpg'),
        ]);

        Product::create([
            'title' => 'Antivirus Zap - Virus & Adware',
            'tagline' => 'Scan & Remove Malware & Adware',
            'icon' => asset('img/icon_antivirusapp.png'),
            'price' => 6999,
            'description' => 'Quark Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque nisi exercitationem amet non nesciunt ab suscipit vel. Temporibus eveniet alias, et, soluta vel animi illum adipisci eum vero, unde inventore.',
            'website' => 'https://apple.com',
            'media1' => asset('img/asset1.jpg'),
            'media2' => asset('img/asset2.jpg'),
        ]);
    }
}
