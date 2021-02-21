<?php

namespace App\Http\Controllers;
Use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Resources\ArticleResource;
use Illuminate\Support\Facades\DB;
use App\Models\Carcategorie;
class ArticleController extends Controller
{
    public function index(){
        return ArticleResource::collection(Article::paginate(6));
        // return Article::all();
    }
    public function all(){
        return Article::all();
    }
    public function year($request){
        $colection = Article::where('year', $request)->get();
        
        // dd($colection);
         return $colection;
    }
    public function getCarcategory(){
        $categori = Carcategorie::all();
        $variable = Article::all();
        $articulo = Article::find(1)->category;
      
        $colection = Article::where('category_id', 2)->get();
        dd($colection);
    }
    public function show(Article $article){
        return $article;
    }
    public function store(Request $request){
        $article = Article::create($request-> all());
        return response()->json($article, 201);
    }
    public function update(Request $request, Article $article){
        $article->update($request -> all());

        return response()->json($article,200);
    }
    public function delete(Article $article){
        $article->delete();
        return response()->json(null,204);
    }

}
