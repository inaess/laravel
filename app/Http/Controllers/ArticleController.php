<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        $articles= Article::all();
        return view('Article.liste',compact('articles'));
    }
    public function create(){
        return view('Article.ajouter');
    }
    public function store(Request $request){
        $request->validate([
            'designation'=>'required',
            'stock'=>'required|numeric',
        ]);
        $articles = new Article();
        $articles->designation = $request->designation;
        $articles->stock = $request->stock;
        

        $articles->save();

        return redirect('/')->with('status', 'Article a bien été ajouté avec succes');
    }

    public function delete_article($id){
        
        $articles = Article::find($id);
        $articles->delete();

        return redirect('/')->with('status', 'Article a bien été supprimé avec succes'); 
    }

    public function update_article(){
        $articles = Article::all();

        return view('Article.stock',compact('articles'));
    }

    public function modifyArticle(Request $request)
    {
        $request->validate([
            'article' => 'required|exists:articles,id',
            'type' => 'required|in:entrée,sortie',
            'quantite' => 'required|numeric|min:1',
        ]);

        $article = Article::findOrFail($request->article);

        if ($request->type === 'entrée') {
            $article->stock += $request->quantite;
        } else {
            $article->stock -= $request->quantite;
        }

        $article->save();

        return redirect('/')->with('status', 'Stock a bien été modifié avec succes');
    }

    
    
    

}
