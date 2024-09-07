<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{

    public function run(): void
    {
        $books = [
            ['title' => 'Harry Potter and the Philosopher\'s Stone', 'author_id' => 1],
            ['title' => 'Harry Potter and the Chamber of Secrets', 'author_id' => 1],
            ['title' => 'Harry Potter and the Prisoner of Azkaban', 'author_id' => 1],
            ['title' => 'Harry Potter and the Goblet of Fire', 'author_id' => 1],
            ['title' => 'Harry Potter and the Order of the Phoenix', 'author_id' => 1],
            ['title' => 'Harry Potter and the Half-Blood Prince', 'author_id' => 1],
            ['title' => 'Harry Potter and the Deathly Hallows', 'author_id' => 1],
            ['title' => 'The Hobbit', 'author_id' => 2],
            ['title' => 'The Lord of the Rings', 'author_id' => 2],
            ['title' => 'The Silmarillion', 'author_id' => 2],
            ['title' => 'The Children of Húrin', 'author_id' => 2],
            ['title' => 'The Fall of Gondolin', 'author_id' => 2],
            ['title' => 'A Game of Thrones', 'author_id' => 3],
            ['title' => 'A Clash of Kings', 'author_id' => 3],
            ['title' => 'A Storm of Swords', 'author_id' => 3],
            ['title' => 'A Feast for Crows', 'author_id' => 3],
            ['title' => 'A Dance with Dragons', 'author_id' => 3],
            ['title' => 'The Lion, the Witch and the Wardrobe', 'author_id' => 4],
            ['title' => 'Prince Caspian', 'author_id' => 4],
            ['title' => 'The Voyage of the Dawn Treader', 'author_id' => 4],
            ['title' => 'The Silver Chair', 'author_id' => 4]
        ];

        foreach ($books as $book) {
            \App\Models\Book::create($book);
        }
    }
}
