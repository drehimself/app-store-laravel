<?php

use App\Story;
use Illuminate\Database\Seeder;

class StoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Featured
        Story::create([
            'category_title' => 'The Basics',
            'title' => 'Create Personal Projects',
            'description' => 'With these apps, creativiy has no boundaries.',
            'content' => 'With these apps Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ipsam, provident unde expedita recusandae sapiente ducimus rem tenetur illo officia dolorem, voluptate quod blanditiis harum dolorum modi sequi ipsa voluptatum.',
            'featured_image' => asset('img/discover1.jpg'),
            'icon_image' => asset('img/discover2.jpg'),
            'story_image' => asset('img/discover1.jpg'),
            'featured' => true,
        ]);

        Story::create([
            'category_title' => 'Featured App',
            'title' => 'Get Focused, Fast',
            'description' => 'OmniFocus transforms your to-do list. Click to read how',
            'content' => 'OmniFocus transforms Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ipsam, provident unde expedita recusandae sapiente ducimus rem tenetur illo officia dolorem, voluptate quod blanditiis harum dolorum modi sequi ipsa voluptatum.',
            'featured_image' => asset('img/discover1-2.jpg'),
            'icon_image' => asset('img/discover2.jpg'),
            'story_image' => asset('img/discover1-2.jpg'),
            'featured' => true,
        ]);

        Story::create([
            'category_title' => 'Gaming Life',
            'title' => 'Dash Downhill in Alto Adventure',
            'description' => 'A beloved snowboarding game lands on the mac.',
            'content' => 'A beloved Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ipsam, provident unde expedita recusandae sapiente ducimus rem tenetur illo officia dolorem, voluptate quod blanditiis harum dolorum modi sequi ipsa voluptatum.',
            'featured_image' => asset('img/discover1.jpg'),
            'icon_image' => asset('img/discover2.jpg'),
            'story_image' => asset('img/discover1.jpg'),
            'featured' => true,
        ]);

        Story::create([
            'category_title' => 'Featured App',
            'title' => '#WritingGoals',
            'description' => 'Ulysses keeps wordsmiths on track with advanced productivity features.',
            'content' => 'Ulysses Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ipsam, provident unde expedita recusandae sapiente ducimus rem tenetur illo officia dolorem, voluptate quod blanditiis harum dolorum modi sequi ipsa voluptatum.',
            'featured_image' => asset('img/discover1-2.jpg'),
            'icon_image' => asset('img/discover2.jpg'),
            'story_image' => asset('img/discover1-2.jpg'),
            'featured' => true,
        ]);

        // Non Featured

        Story::create([
            'category_title' => 'Featured App',
            'title' => 'Declutter Your Hard Drive',
            'description' => 'Find space-hogging files to delete with DaisyDisk.',
            'content' => 'DaisyDisk Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ipsam, provident unde expedita recusandae sapiente ducimus rem tenetur illo officia dolorem, voluptate quod blanditiis harum dolorum modi sequi ipsa voluptatum.',
            'featured_image' => asset('img/discover1-2.jpg'),
            'icon_image' => asset('img/discover2.jpg'),
            'story_image' => asset('img/discover1-2.jpg'),
            'featured' => false,
        ]);

        Story::create([
            'category_title' => 'Editor\'s Choice',
            'title' => 'Apps for Designers',
            'description' => 'Channel your creativity, hone your skills and perfect your pixels.',
            'content' => 'Apps for designers Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ipsam, provident unde expedita recusandae sapiente ducimus rem tenetur illo officia dolorem, voluptate quod blanditiis harum dolorum modi sequi ipsa voluptatum.',
            'featured_image' => asset('img/discover1-2.jpg'),
            'icon_image' => asset('img/discover3.jpg'),
            'story_image' => asset('img/discover1-2.jpg'),
            'featured' => false,
        ]);

        Story::create([
            'category_title' => 'The Basics',
            'title' => '3 Notable Note-Taking Apps',
            'description' => 'Plain text enthusiast? Markdown master? Find your new favourite.',
            'content' => 'Note taking for designers Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ipsam, provident unde expedita recusandae sapiente ducimus rem tenetur illo officia dolorem, voluptate quod blanditiis harum dolorum modi sequi ipsa voluptatum.',
            'featured_image' => asset('img/discover1-2.jpg'),
            'icon_image' => asset('img/discover2.jpg'),
            'story_image' => asset('img/discover1-2.jpg'),
            'featured' => false,
        ]);

        Story::create([
            'category_title' => 'Another One',
            'title' => 'Apps for Developers',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores, dolore.',
            'content' => 'Apps for developers Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ipsam, provident unde expedita recusandae sapiente ducimus rem tenetur illo officia dolorem, voluptate quod blanditiis harum dolorum modi sequi ipsa voluptatum.',
            'featured_image' => asset('img/discover1-2.jpg'),
            'icon_image' => asset('img/discover3.jpg'),
            'story_image' => asset('img/discover1-2.jpg'),
            'featured' => false,
        ]);
    }
}
