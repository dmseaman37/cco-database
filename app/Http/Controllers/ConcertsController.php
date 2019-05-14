<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

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

    public function add() {
        $venues = DB::table('venues')->get();

        return view('concert.add', ['venues' => $venues]);
    }

    public function store(Request $request) {
        $input = $request->all();

        $validation = Validator::make($input, [
            'venue' => 'required'
        ]);

        if ($validation->fails()) {
            return redirect('/concert/add')
            ->withInput()
            ->withErrors($validation);
        }

        DB::table('concerts')->insert([
            'venue_id' => $request->venue,
            'date' => $request->date
        ]);

        return redirect('/concerts');
    }

    public function confirm($id) {
        $concert = DB::table('concerts')
        ->where('id', $id)
        ->get();

        return view('concert.delete', ['concert' => $concert]);
    }

    public function delete(Request $request) {
        DB::table('pieces')
        ->where('concert_id', $request->id)
        ->delete();

        DB::table('concerts')
        ->where('id', $request->id)
        ->delete();

        return redirect('/concerts');
    }
}