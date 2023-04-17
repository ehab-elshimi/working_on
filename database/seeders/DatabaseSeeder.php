<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Contact::create([
            'first_name' => 'Ehab',
            'last_name' => 'Elshimi',
            'formal_name' => 'Ehab Kamal Kamel Amin',
            'email' => 'ehab.devloper.email@gmail.com',
            'address' => 'New Cairo, Cairo, Egypt',
            'iframe' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27641.287286187537!2d31.39039763616266!3d30.00353568536442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583cc75436d909%3A0x7f921d4528ec3e03!2sThe%205th%20Settlement%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1680894530169!5m2!1sen!2seg" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'location_url'=>'https://goo.gl/maps/9ZTt3cmHRo6Bd9Eg9'
        ]);
        \App\Models\Phones::create([
            'number' => '+2001099644971',
            'contact_id' => 1,
        ]);
        \App\Models\Phones::create([
            'number' => '+2001212688187',
            'contact_id' => 1,
        ]);
        \App\Models\SocialMedia::create([
            'icon' => '<i class="fab fa-facebook"></i>',
            'link' => 'https://www.facebook.com/profile.php?id=100009582435617',
            'contact_id' => 1,
        ]);
        \App\Models\SocialMedia::create([
            'icon' => '<i class="fab fa-linkedin-in"></i>',
            'link' => 'https://www.linkedin.com/in/ehab-elshimi-b76b0a149/',
            'contact_id' => 1,
        ]);
        \App\Models\SocialMedia::create([
            'icon' => '<i class="fab fa-github"></i>',
            'link' => 'https://github.com/ehab-elshimi?tab=repositories',
            'contact_id' => 1,
        ]);

    }

}
