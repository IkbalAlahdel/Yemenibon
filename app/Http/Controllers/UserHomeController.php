<?php

namespace App\Http\Controllers;
use App\Http\Controllers\BannerController;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $banners = Banner::select('banners.id','banners.image','banners.title','banners.title_ar','banners.desc','banners.desc_ar','banners.link')->get();
       
       $categories = Category::join('catatypes', 'catatypes.id', '=', 'categories.catatype_id')->select('categories.id','categories.name','categories.name_ar','categories.status','catatypes.type as catatype_type')
       ->where('catatypes.id',1)->get();
    //     return view('client.home',['banners' => $banners,'projects' => $projects,'categories' => $categories]);
   
    if(isset($request->id))
    {
        if($request->id>0)
        $projects = Project::join('categories', 'categories.id', '=', 'projects.category_id')
        ->select('projects.id','projects.title','projects.title_ar','projects.desc','projects.desc_ar','projects.ldesc','projects.ldesc_ar','projects.face_link','projects.twit_link','projects.insta_link','projects.image','projects.multi_image','projects.owner','projects.owner_ar','projects.address','projects.address_ar','projects.phone','projects.email','projects.website','projects.shift_h','categories.name as category_name')
       ->where( 'projects.category_id',$request->id)->paginate(4);
        else
        $projects = Project::join('categories', 'categories.id', '=', 'projects.category_id')
        ->select('projects.id','projects.title','projects.title_ar','projects.desc','projects.desc_ar','projects.ldesc','projects.ldesc_ar','projects.face_link','projects.twit_link','projects.insta_link','projects.image','projects.multi_image','projects.owner','projects.owner_ar','projects.address','projects.address_ar','projects.phone','projects.email','projects.website','projects.shift_h','categories.name as category_name')
       ->paginate(4);  
      }
    else{
        $projects = Project::join('categories', 'categories.id', '=', 'projects.category_id')
        ->select('projects.id','projects.title','projects.title_ar','projects.desc','projects.desc_ar','projects.ldesc','projects.ldesc_ar','projects.face_link','projects.twit_link','projects.insta_link','projects.image','projects.multi_image','projects.owner','projects.owner_ar','projects.address','projects.address_ar','projects.phone','projects.email','projects.website','projects.shift_h','categories.name as category_name')
       ->paginate(4);
        }
    if($request->ajax()){
        $view=view('data',compact(['projects','banners','categories']))->render();
        return response()->json(['html'=>$view]);
    }
  return view('client.home',compact(['projects','banners','categories']));
}

    public function details($id)
    {
        $banners = Banner::select('banners.id','banners.image','banners.title','banners.title_ar','banners.desc','banners.desc_ar','banners.link')->get();
        $projects = Project::join('categories', 'categories.id', '=', 'projects.category_id')
        ->select('projects.id','projects.title','projects.title_ar','projects.desc','projects.desc_ar','projects.ldesc','projects.ldesc_ar','projects.face_link','projects.twit_link','projects.insta_link','projects.image','projects.multi_image','projects.owner','projects.owner_ar','projects.address','projects.address_ar','projects.phone','projects.email','projects.website','projects.shift_h','categories.name as category_name')
       ->where('projects.id',$id)
           ->get();
       $categories = Category::join('catatypes', 'catatypes.id', '=', 'categories.catatype_id')->select('categories.id','categories.name','categories.name_ar','categories.status','catatypes.type as catatype_type')->get();
       return view('client.project_details',compact(['projects']));    

    // return response()->json('hi');
 }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

// ##########################################################Feltering

public function filtering($id){




    
    $projects = Project::join('categories', 'categories.id', '=', 'projects.category_id')
        ->select('projects.id','projects.title','projects.title_ar','projects.desc','projects.desc_ar','projects.ldesc','projects.ldesc_ar','projects.face_link','projects.twit_link','projects.insta_link','projects.image','projects.multi_image','projects.owner','projects.owner_ar','projects.address','projects.address_ar','projects.phone','projects.email','projects.website','projects.shift_h','categories.name as category_name')
         ->where('projects.category_id', '=', $id)->get();
        $categories= Category::select()->get();
        $banners = Banner::select('banners.id','banners.image','banners.title','banners.title_ar','banners.desc','banners.desc_ar','banners.link')->get();

// dd($projects);
// return response()->json(['projects' => $projects]);
return view('client.UserHome',['projects' => $projects,'categories' => $categories,'banners' => $banners]);


}

public function filteringall(){

    
    $projects = Project::join('categories', 'categories.id', '=', 'projects.category_id')
        ->select('projects.id','projects.title','projects.title_ar','projects.desc','projects.desc_ar','projects.ldesc','projects.ldesc_ar','projects.face_link','projects.twit_link','projects.insta_link','projects.image','projects.multi_image','projects.owner','projects.owner_ar','projects.address','projects.address_ar','projects.phone','projects.email','projects.website','projects.shift_h','categories.name as category_name')->get();
       $banners = Banner::select('banners.id','banners.image','banners.title','banners.title_ar','banners.desc','banners.desc_ar','banners.link')->get();
    $categories= Category::select()->get();
    // $projects=json([$projects]);
    // return response()->json(['projects' => $projects], 201);

    return view('client.UserHome',['projects' => $projects,'categories' => $categories,'banners' => $banners]);



}


###############################################################3

public function loadingprojects(Request $request)
{
    $projects = Project::paginate(5);

    if ($request->ajax()) {
        $view = view('data',compact('projects'))->render();
        return response()->json(['html'=>$view]);
    }

    return view('client.UserHome',compact('projects'));
}
}
