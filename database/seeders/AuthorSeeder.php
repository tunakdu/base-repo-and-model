<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{

    public function run(): void
    {
        $authors = [
            ['name' => 'J.K. Rowling'],
            ['name' => 'J.R.R. Tolkien'],
            ['name' => 'George R.R. Martin'],
            ['name' => 'C.S. Lewis'],
            ['name' => 'J.R. Rowling'],
            ['name' => 'J.R. Tolkien'],
            ['name' => 'G.R. Martin'],
            ['name' => 'C.S. Lewis'],
        ];

        foreach ($authors as $author) {
            \App\Models\Author::create($author);
        }
    }
}
