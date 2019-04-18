<?php
namespace App\Http\Controllers\V1;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = Article::all();
        return response()->json($articles);
    }
}
