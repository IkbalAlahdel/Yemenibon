<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Category;
use App\Models\Catatype;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $categories = Category::join('catatypes', 'catatypes.id', '=', 'categories.catatype_id')->select('categories.id','categories.name','categories.name_ar','categories.status','catatypes.type as catatype_type')->get();
       return view('categories.index',['categories' => $categories]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      // dd("hello");
      $catatype= Catatype::select()->get();

      return view('categories.create', ['catatype'=>$catatype]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //dd($request);
        // $request->validate([
        //     'name' => 'required',
        //     'type' => 'required',
        // ]);


        $request->validate(['name'=>'required|unique:categories','name_ar'=>'required|unique:categories','status'=>'required']);
        Category::create($request->all());
        $category = new Category();
        $category->name = $request->input('name');
        $category->name_ar = $request->input('name_ar');
        $category->status = $request->input('status');
        $category->catatype_id = $request->input('catatype_id');


        $category->save();
      

          // return view('categories.create');
           return redirect('/admin/categories/index')->with('completed', 'content has been updated');  

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($category)
    {
        dd($category);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($category_id)
    {
        $category= Category::findOrFail($category_id);
        $catatype= Catatype::select()->get();

        return view('categories/edit', ['category'=>$category,'catatype'=>$catatype]);    



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$category_id)
    {
    //dd($request);
        $request->validate([
            'name' => 'required',
            'name_ar' => 'required',

         ]);
  
       $category= Category::whereId($category_id)->update([
        'name'=>$request->input('name'),
        'name_ar'=>$request->input('name_ar'),
        'catatype_id'=>$request->input('catatype_id'),

        ]);
      
         return redirect('/admin/categories/index')->with('completed', 'category has been updated');

 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($category)
    {
       // dd($category);
        $category= Category::find($category);


         $category->delete();
         return redirect('/admin/categories/index')->with('success','Category deleted successfully');
    }

    ##################################################

    
public function display_row($category_id)
{
    $affected1 =[];
    $data['dept'] = Category::where('id',$category_id)->get();
    return view('update',$data);
                }
                
                public function is_active($category_id){
                    $affected1= Category::where('id',$category_id)
                    ->update(['status'=>'1']);
                    // $affected = Category::where('is_delete',0)->paginate(25);
                    $categories = Category::join('catatypes', 'catatypes.id', '=', 'categories.catatype_id')->select('categories.id','categories.name','categories.name_ar','categories.status','catatypes.type as catatype_type')->get();
                    return view('categories.index',['categories' => $categories]);

                    }
                    public function is_not_active($category_id){
                        $affected1= Category::where('id',$category_id)
                        ->update(['status'=>'0']);
                        $categories = Category::join('catatypes', 'catatypes.id', '=', 'categories.catatype_id')->select('categories.id','categories.name','categories.name_ar','categories.status','catatypes.type as catatype_type')->get();
                        return view('categories.index',['categories' => $categories]);

                        }

public function display_with_status($id)
    {
        if($id==1){
            $affected1 =[];
            $affected = Category::where(['status',1])->paginate(25);
            return view('department',['cat'=>$affected,'data1'=>$affected1]);
        }elseif($id==0){
            $affected1 =[];
            $affected = Category::where(['status',0])->paginate(25);
            return view('department',['cat'=>$affected,'data1'=>$affected1]);
        }

    }







}
