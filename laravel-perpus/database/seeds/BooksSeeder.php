<?php

use Illuminate\Database\Seeder;
use App\Book;
use App\Author;
use App\User;
use App\BorrowLog;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample penulis
        $author1 = Author::create(['name' => 'Abdul panik']);
        $author2 = Author::create(['name' => 'Acil Basnah']);
        $author3 = Author::create(['name' => 'Utuh Kacuap']);

        // Sample buku
        $book1 = Book::create(['title' => 'Bercocok Tanam Yang Baik', 'amount' => 3, 'author_id' => $author1->id]);
        $book2 = Book::create(['title' => 'Cinta Nyangkit Di Atas Duren', 'amount' => 2, 'author_id' => $author2->id]);
        $book3 = Book::create(['title' => 'Cinta Ditolak Itu Sakit', 'amount' => 4, 'author_id' => $author3->id]);
        $book4 = Book::create(['title' => 'TikTok Perusak Generasi', 'amount' => 1, 'author_id' => $author3->id]);

        // Sample peminjaman buku
        $member = User::where('email', 'member@gmail.com')->first();
        BorrowLog::create(['user_id' => $member->id, 'book_id' => $book1->id, 'is_returned' => 0]);
        BorrowLog::create(['user_id' => $member->id, 'book_id' => $book2->id, 'is_returned' => 0]);
        BorrowLog::create(['user_id' => $member->id, 'book_id' => $book3->id, 'is_returned' => 1]);
    }
}
