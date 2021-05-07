<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{ User, Post };

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            "name" => "John Doe",
            "email" => "john.d@user.com",
            "email_verified_at" => date("Y-m-d H:i:s"),
            "password" => bcrypt("1234567890")
        ]);

        User::create([
            "name" => "Jane Doe",
            "email" => "jane.d@user.com",
            "email_verified_at" => date("Y-m-d H:i:s"),
            "password" => bcrypt("1234567890")
        ]);

        User::create([
            "name" => "Samantha Lorem",
            "email" => "samantha.l@user.com",
            "email_verified_at" => date("Y-m-d H:i:s"),
            "password" => bcrypt("1234567890")
        ]);

        Post::create([
            "slug" => uniqid(),
            "description" => "Hi everyone! Just wanted to know how are you this week? It's been a stressing one for me! I have a lot of things to do, and a lot of revelations happened. My mental health almost broke! anyways, hope you're all doing fine!~",
            "created_by" => 1,
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
        ]);
    }
}
