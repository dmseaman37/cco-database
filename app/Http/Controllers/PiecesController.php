<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PiecesController extends Controller
{
    public function form() {
        $categories = DB::table('categories')->get();
        $concerts = DB::table('concerts')->get();

        return view('search', [
            'categories' => $categories,
            'concerts' => $concerts
            ]);
    }

    public function results(Request $request) {
    	$query = DB::table('pieces');

        if ($request->input('composer')) {
            $query->where('composer', 'like', '%' . $request->input('composer') . '%');
        }

        if ($request->input('title')) {
            $query->where('title', 'like', '%' . $request->input('title') . '%');
        }

        if ($request->input('opus')) {
            $query->where('opus_number', 'like', '%' . $request->input('opus') . '%');
        }

        if ($request->input('conductor')) {
            $query->where('conductor', 'like', '%' . $request->input('conductor') . '%');
        }

        if ($request->input('soloist')) {
            $query->where('soloist', 'like', '%' . $request->input('soloist') . '%');
        }

        if ($request->input('category')) {
            $query->where('category_id', $request->input('category'));
        }

        if ($request->input('concert')) {
            $query->where('concert_id', $request->input('concert'));
        }

        $pieces = $query->get();

    	return view('pieces', ['pieces' => $pieces]);
    }

    public function details($id) {
    	$piece = DB::table('pieces')
        ->join('categories', 'pieces.category_id', 'categories.id')
        ->join('concerts', 'pieces.concert_id', 'concerts.id')
        ->select('pieces.composer', 
                'pieces.title', 
                'pieces.movement', 
                'pieces.opus_number', 
                'categories.name AS category', 
                'pieces.conductor', 
                'pieces.soloist', 
                'concerts.date AS date')
		->where('pieces.id', $id)
		->first();

    	return view('details', ['piece' => $piece]);
    }
}