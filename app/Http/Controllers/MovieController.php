<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    private $array = [
        'error' => '',
        'result' => []
    ];

    public function all() {
        $movies = Movie::all();

        foreach($movies as $movie) {
            $this->array['result'][] = [
                'id' => $movie->id,
                'title' => $movie->title
            ];
        }

        return $this->array;
    }
}
