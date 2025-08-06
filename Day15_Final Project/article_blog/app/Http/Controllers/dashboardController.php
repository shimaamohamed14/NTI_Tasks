<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;



class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
         $user = Auth::user();

    $publishedCount = Article::where('user_id', $user->id)->count();
    $articlesThisMonth = Article::where('user_id', $user->id)
                                ->whereMonth('created_at', now()->month)
                                ->count();
    $recentArticles = Article::where('user_id', $user->id)
                             ->latest()
                             ->take(5)
                             ->get();

    return view('dashboard', compact(
        'user',
        'publishedCount',
        'articlesThisMonth',
        'recentArticles'
      ) );

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
