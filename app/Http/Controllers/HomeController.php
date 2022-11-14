<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class HomeController extends Controller
{
    public function index()
    {
        $book1 = new Book();
        $book1->title = 'Book 1';
        $book1->donator = 'Jojo';
        $book1->description = 'Semoga berguna!';

        $book2 = new Book();
        $book2->title = 'Book 2';
        $book2->donator = 'Leo';
        $book2->description = 'Sumbangan untuk Binusian';

        $book3 = new Book();
        $book3->title = 'Book 3';
        $book3->donator = 'Richard';
        $book3->description = 'Semangat!';

        $book4 = new Book();
        $book4->title = 'Book 4';
        $book4->donator = 'Cliff';
        $book4->description = 'Binusian the best';

        $book5 = new Book();
        $book5->title = 'Book 5';
        $book5->donator = 'Grady';
        $book5->description = 'GG';

        $book6 = new Book();
        $book6->title = 'Book 6';
        $book6->donator = 'Alvin';
        $book6->description = 'Mantap!';

        $book7 = new Book();
        $book7->title = 'Book 7';
        $book7->donator = 'Michael';
        $book7->description = 'Selamat!';

        $books = array($book1, $book2, $book3, $book4, $book5, $book6, $book7);

        return view('home', [
            "books" => $books
        ]);
    }
}
