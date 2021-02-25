<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Importo i tre model in modo tale che vengano lette dalle function.
// VANNO INSERITE DOPO PERCHE' IL PERSORSO RELATIVO VIENE CARICATO SOPRA-
// *************** FONDAMENTALE **********************
use App\Category;
use App\Article;
use App\Tag;

class BlogController extends Controller
{
    public function categories()
      {
        return response()->json([
          'success' => true,
          'data' => Category::all()
        ], 200);
      }

    public function articles()
      {
        return response()->json([
          'success' => true,
          'data' => Article::all()
        ], 200);
      }

    public function tags()
      {
        return response()->json([
            'success' => true,
            'data' => Tag::all()
        ], 200);
      }

}
