<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ConcertsController extends Controller
{
    public function index() {
    	$concerts = DB::table('concerts')
    	->select('concerts.id AS id', 'concerts.date AS date', 'venues.name AS venue')
    	->join('venues', 'concerts.venue_id', 'venues.id')
    	->get();

    	return view('concerts', ['concerts' => $concerts]);
    }

    public function program($id) {
    	$program = DB::table('pieces')
    	->where('concert_id', $id)
    	->get();

    	return view('pieces', ['pieces' => $program]);
    }
}
