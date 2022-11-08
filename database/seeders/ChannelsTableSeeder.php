<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Channel;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'name' => 'Relationship',
            'slug' => Str::slug('Relationship')
        ]);

        Channel::create([
            'name' => 'Money Matters',
            'slug' => Str::slug('Money Matters')
        ]);

        Channel::create([
            'name' => 'Technology',
            'slug' => Str::slug('Technology')
        ]);

        Channel::create([
            'name' => 'Kids',
            'slug' => Str::slug('Kids')
        ]);
    }
}