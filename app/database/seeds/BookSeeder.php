<?php

/**
 * Created by PhpStorm.
 * User: I077549
 * Date: 10/28/2015
 * Time: 6:52 PM
 */
class BookSeeder extends DatabaseSeeder
{
    public function run()
    {
        $books = [
            [
                "bookName" => "HarryPotter",
                "fileName" => "HP1.pdf",
                "author" => "Harikrishnan"
            ]
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}