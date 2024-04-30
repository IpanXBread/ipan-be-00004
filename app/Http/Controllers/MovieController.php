<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Carbon\Carbon;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        // return response()->json(['data' => $movies]);
        // return view('moviesView', ['movies' => $movies]);
        return view('welcome', ['movies' => $movies]);
    }

    public function read()
    {
        $movies = Movie::all();
        return response()->json(['data' => $movies]);
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'duration' => 'required',
            'views' => 'required',
            'poster' => 'required|url',
            'overall_rating' => 'required|numeric',
            'description' => 'required',
        ]);

        // Create a new movie instance
        $movie = Movie::create($validatedData);

        // Redirect to a relevant page
        return redirect('/movies')->with('success', 'Movie created successfully!');
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect('/movies')->with('success', 'Movie deleted successfully!');
    }

    public function findByGenre($genre)
    {
        $movies = Movie::where('genre', $genre)->get();
        return response()->json(['data' => $movies]);
    }

    public function moviesWithinTimeSlot()
    {
        // $now = Carbon::now();

        $timeStart = Carbon::parse('2020-04-04 00:00:00');
        $timeEnd = Carbon::parse('2020-04-05 00:00:00');

        $movies = Movie::whereBetween('created_at', [$timeStart, $timeEnd])->get();


        return $movies;
    }

    public function getMovieByTitle($title)
    {
        try {
            $movie = Movie::where('title', $title)->firstOrFail();
            return response()->json(['data' => $movie]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Movie not found.'], 404);
        }
    }
}
