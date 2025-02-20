<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $games = [
            ['title' => 'God of War', 'genre' => 'Action', 'price' => 39.99, 'year' => 2018],
            ['title' => 'The Last of Us Part II', 'genre' => 'Adventure', 'price' => 49.99, 'year' => 2020],
            ['title' => 'Spider-Man', 'genre' => 'Action', 'price' => 29.99, 'year' => 2018],
            ['title' => 'Horizon Zero Dawn', 'genre' => 'RPG', 'price' => 19.99, 'year' => 2017]
        ];

        return view('games.index', compact('games'));
    }
}
