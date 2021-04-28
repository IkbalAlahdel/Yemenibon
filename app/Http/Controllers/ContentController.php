<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Category;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $contents = Content::join('categories', 'categories.id', '=', 'contents.category_id')
      ->select('contents.id','contents.title','contents.title_ar', 'contents.status','contents.data','contents.data_ar','contents.pdf','categories.updated_at', 'categories.name as category_name' )->orderBy('contents.updated_at','DESC')->get();
          return view('contents.index',['contents' => $contents]);

          
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        //$content= Content::findOrFail($content_id);
        $category= Category::select()->get();

        return view('contents.create', ['category'=>$category]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        
        $request->validate(['title'=>'required|unique:contents']);
        $content = new Content();
        if($request->hasfile('pdf'))
        {
          
            $name = preg_replace('/(0)\.(\d+) (\d+)/', '$3$1$2', microtime()) . "." . $request->pdf->getClientOriginalExtension(); 

            $path= $request->pdf->move(public_path('pdf'), $name);
            $content->pdf =$name;
        
       }
        // $request->validate(['title'=>'required|unique:contents']);
        // $content = new Content();
        // $name = preg_replace('/(0)\.(\d+) (\d+)/', '$3$1$2', microtime()) . "." . $request->pdf->getClientOriginalExtension(); 

        // $path= $request->pdf->move(public_path('pdf'), $name);
        // $content->pdf =$name;
        // dd($name);
        $content->title = $request->input('title');
        $content->data = $request->input('data'); 
        $content->title_ar = $request->input('title_ar');
        $content->data_ar = $request->input('data_ar');   
        $content->status = $request->input('status');
       $content->category_id = $request->input('category_id');

        $content->save();
        return redirect('/admin/contents/index')->with('completed', 'content has been updated');  

        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content $content
     * @return \Illuminate\Http\Response
     */
    public function show($content)
    {
        $content= Content::findOrFail($content);
        return view('contents.show', compact('content'));    
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content $content
     * @return \Illuminate\Http\Response
     */
    public function edit($content_id)
    {
        $content= Content::findOrFail($content_id);
        $category= Category::select()->get();

        return view('contents.edit', ['content'=>$content,'category'=>$category]);    

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $content_id)
    {

        $request->validate([
            'title' => 'required',
            'data' => 'required',
            'title_ar' => 'required',
            'data_ar' => 'required',
         ]);

        if($request->hasfile('pdf'))
        {
          
         $name = time() . "." . $request->pdf->getClientOriginalExtension();
         $path= $request->pdf->move(public_path('pdf'), $name);
         echo $name;
         $content= Content::whereId($content_id)->update([
             'pdf'=> $name,
            'title'=>$request->input('title'),
            'data'=>$request->input('data'),
            'title_ar'=>$request->input('title_ar'),
            'data_ar'=>$request->input('data_ar'),
            // 'status'=>$request->input('status'),
            'category_id'=>$request->input('category_id'),
            ]);
        
       }
       $content= Content::whereId($content_id)->update([
        'title'=>$request->input('title'),
        'data'=>$request->input('data'),
        'title_ar'=>$request->input('title_ar'),
        'data_ar'=>$request->input('data_ar'),
        // 'status'=>$request->input('status'),
        'category_id'=>$request->input('category_id'),
        ]);
     return redirect('/admin/contents/index')->with('completed', 'content has been updated');  
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content $content
     * @return \Illuminate\Http\Response
     */
    public function destroy($content)
    {
        $content= Content::find($content);


         $content->delete();
         return redirect('/admin/contents/index')->with('success','content deleted successfully');     
         }

    ##################################################

    
    public function display_row($content_id)
    {
        $affected1 =[];
        $data['dept'] = Content::where('id',$content_id)->get();
        return view('update',$data);
                    }
                    
                    public function is_active($content_id){
                        $affected1= Content::where('id',$content_id)
                        ->update(['status'=>'1']);
                        $contents = Content::join('categories', 'categories.id', '=', 'contents.category_id')
                        ->select('contents.id','contents.title','contents.title_ar', 'contents.status','contents.data','contents.data_ar','contents.pdf','categories.updated_at', 'categories.name as category_name' )->orderBy('contents.updated_at','DESC')->get();
                        return view('contents.index',['contents' => $contents]);
                        }
                        public function is_not_active($content_id){
                            $affected1= Content::where('id',$content_id)
                            ->update(['status'=>'0']);
                            $contents = Content::join('categories', 'categories.id', '=', 'contents.category_id')
                            ->select('contents.id','contents.title','contents.title_ar', 'contents.status','contents.data','contents.data_ar','contents.pdf','categories.updated_at', 'categories.name as category_name' )->orderBy('contents.updated_at','DESC')->get();
                            return view('contents.index',['contents' => $contents]);
        
    
                            }
    
    public function display_with_status($id)
        {
            if($id==1){
                $affected1 =[];
                $affected = Content::where(['status',1])->paginate(25);
                return view('department',['cat'=>$affected,'data1'=>$affected1]);
            }elseif($id==0){
                $affected1 =[];
                $affected = Content::where(['status',0])->paginate(25);
                return view('department',['cat'=>$affected,'data1'=>$affected1]);
            }
    
        }





        }

