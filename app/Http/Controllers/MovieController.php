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

    public function one($id) {
        $movie = Movie::find($id);

        if($movie) {
            $this->array['result'] = $movie;
        }else{
            $this->array['error'] = 'ID not found';
        }

        return $this->array;
    }
    
    public function new(Request $request) {
        $title = $request->input('title');
        $body = $request->input('body');
        
        if($title && $body) {
            $movie = new Movie();
            $movie->title = $title;
            $movie->body = $body;
            $movie->save();

            $this->array['result'] = [
                'id' => $movie->id,
                'title' => $title,
                'body' => $body
            ];
        }else{
            $this->array['error'] = 'Fields not found';
        }

        return $this->array;
    }

    public function edit(Request $request, $id) {
        $title = $request->input('title');
        $body = $request->input('body');
        
        if($title && $body && $id) {
            $movie = Movie::find($id);

            if($movie) {
                $movie->title = $title;
                $movie->body = $body;
                $movie->save();

                $this->array['result'] = [
                    'id' => $id,
                    'title' => $title,
                    'body' => $body
                ];
            }else{
                $this->array['error'] = 'ID not found';
            }
            
        }else{
            $this->array['error'] = 'Fields not found';
        }

        return $this->array;
    }

    public function delete($id) {
        $movie = Movie::find($id);

        if($movie) {
            $movie->delete();
        }else{
            $this->array['error'] = 'ID not found';
        }

        return $this->array;
    }
}
