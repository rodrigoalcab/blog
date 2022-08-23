<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Primeira Postagem',
            'description' => 'Postagem teste com seeds',
            'content' => 'Conteúdo da postagem',
            'is_active' => 1,
            'slug' => 'primeira-postagem',
            'user_id' => User::inRandomOrder()->first()->id
            

        ]);
    }
}
