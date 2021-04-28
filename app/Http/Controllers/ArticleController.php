<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::join('categories', 'categories.id', '=', 'articles.category_id')
        ->select('articles.id','articles.article_name','articles.name_ar','articles.date', 'articles.publisher','articles.publisher_ar','articles.article','articles.article_ar','articles.qoute','articles.qoute_ar','articles.image','articles.source_url','articles.desc','articles.desc_ar','categories.updated_at', 'categories.name as category_name' )
        ->orderBy('articles.updated_at','DESC')
        ->where('articles.category_id', '=', '5')
        ->get();
            return view('articles.index',['articles' => $articles]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category= Category::select()->get();
        return view('articles.create', ['category'=>$category]);  
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate(['name'=>'required|unique:articles','image'=>'required|mimes:jpg,png,jpeg']);
        $article = new Article();
        if($request->hasfile('image'))
        {
        $name = preg_replace('/(0)\.(\d+) (\d+)/', '$3$1$2', microtime()) . "." . $request->image->getClientOriginalExtension();
        $path= $request->image->move(public_path('images'), $name);
        $article->image =$name;
        $article->article_name = $request->input('article_name');
        $article->name_ar = $request->input('name_ar');
        $article->date = $request->input('date'); 
        $article->publisher = $request->input('publisher');
        $article->publisher_ar = $request->input('publisher_ar');
        $article->image = $request->input('image');   
        $article->article = $request->input('article');   
        $article->article_ar = $request->input('article_ar');   
        $article->qoute = $request->input('qoute');   
        $article->qoute_ar = $request->input('qoute_ar');   
        $article->desc = $request->input('desc');   
        $article->desc_ar = $request->input('desc_ar');   
        $article->source_url = $request->input('source_url');   
       $article->category_id = $request->input('category_id');
        }
        // dd($name);

        $article->article_name = $request->input('article_name');
        $article->name_ar = $request->input('name_ar');
        $article->date = $request->input('date'); 
        $article->publisher = $request->input('publisher');
        $article->publisher_ar = $request->input('publisher_ar');
        $article->image = $request->input('image');   
        $article->article = $request->input('article');   
        $article->article_ar = $request->input('article_ar');   
        $article->qoute = $request->input('qoute');   
        $article->qoute_ar = $request->input('qoute_ar');   
        $article->desc = $request->input('desc');   
        $article->desc_ar = $request->input('desc_ar');   
        $article->source_url = $request->input('source_url');   
       $article->category_id = $request->input('category_id');

        $article->save();
// dd($request);
        return redirect('/admin/articles/index')->with('completed', 'article has been updated');  

            }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($article_id)
    {
        $article= Article::findOrFail($article_id);
        $category= Category::select()->get();
        return view('articles.edit', ['article'=>$article,'category'=>$category]);    
      }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $article_id)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'name_ar' => 'required',
            'desc_ar' => 'required',
         ]);

        if($request->hasfile('img'))
        {
          
         
         $name = time() . "." . $request->img->getClientOriginalExtension();
        $path= $request->img->move(public_path('images'), $name);
         $article= article::whereId($article_id)->update([
             'img'=> $name,
            'article_name' => $request->input('article_name'),
            'name_ar' => $request->input('name_ar'),
            'date' => $request->input('date'),
            'article' => $request->input('article'),
            'article_ar' => $request->input('article_ar'),   
            'qoute' => $request->input('qoute'),   
            'qoute_ar' => $request->input('qoute_ar'),   
            'publisher' => $request->input('publisher'),
            'publisher_ar' => $request->input('publisher_ar'),
            'img' => $request->input('img'),   
            'desc' => $request->input('desc'),   
            'desc_ar' => $request->input('desc_ar'),   
            'source_url' => $request->input('source_url'),
            'category_id'=>$request->input('category_id'),   
            ]);
        
       }
       return redirect('/admin/articles/index')->with('completed', 'content has been updated');  

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article= Article::find($article);
        $article->delete();
        return redirect('/admin/articles/index')->with('success','content deleted successfully');     
        
    }
}
