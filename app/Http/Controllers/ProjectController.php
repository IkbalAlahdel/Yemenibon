<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::join('categories', 'categories.id', '=', 'projects.category_id')
        ->select('projects.id','projects.title','projects.title_ar','projects.desc','projects.desc_ar','projects.ldesc','projects.ldesc_ar','projects.face_link','projects.twit_link','projects.insta_link','projects.image','projects.multi_image','projects.owner','projects.owner_ar','projects.address','projects.address_ar','projects.phone','projects.email','projects.website','projects.shift_h','categories.name as category_name')->get();
        return view('projects.index',['projects' => $projects]);  
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category= Category::select()->get();

        return view('projects.create', ['category'=>$category]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['title'=>'required|unique:projects','desc'=>'required','ldesc'=>'required','image'=>'required']);
        $project = new Project();
            $name = preg_replace('/(0)\.(\d+) (\d+)/', '$3$1$2', microtime()) . "." . $request->image->getClientOriginalExtension(); 
            $path= $request->image->move(public_path('images'), $name);
            $project->image =$name;
        
       
            foreach($request->file('multi_image') as $image)
            {
                $imageName=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $imageName);  
                $fileNames[] = $imageName;
            }
    
            $images = json_encode($fileNames);
            $project->multi_image =$images;
            // $name = [];

            // if($request->hasfile('multi_image'))
    
            //  {
    
            //     foreach($request->file('multi_image') as $project)
    
            //     {
    
            //         $name = time().rand(1,100).'.'.$project->extension();
    
            //         $project->move(public_path('images'), $name);  
    
            //         $name[] = $name;  
    
            //     }
    
            //  }
            //  $project= new Project();
    
            //  $project->multi_image = $name;
//             $name=[];
//                 foreach($request->file('multi_image') as $project)
// {
//             $project = new Project();
//                     $name = time().rand(1,100).'.'.$project->extension();
//             $path= $request->multi_image->move(public_path('images'), $name);
//             $name[]=$name;

//             $project->multi_image =$name;
// }

        $project->title = $request->input('title');
        $project->desc = $request->input('desc');  
        $project->ldesc = $request->input('ldesc');  
        $project->title_ar = $request->input('title_ar');
        $project->desc_ar = $request->input('desc_ar');  
        $project->ldesc_ar = $request->input('ldesc_ar'); 
        $project->face_link = $request->input('face_link');
        $project->twit_link = $request->input('twit_link');
        $project->insta_link = $request->input('insta_link');
        $project->owner = $request->input('owner');  
        $project->owner_ar = $request->input('owner_ar');  
        $project->address = $request->input('address');  
        $project->address_ar = $request->input('address_ar');  
        $project->phone = $request->input('phone');  
        $project->email = $request->input('email');  
        $project->website = $request->input('website');  
        $project->shift_h = $request->input('shift_h');  

        $project->category_id = $request->input('category_id');

    

        
        // Store $images image in DATABASE from HERE 
        $project->save();
      

          // return view('categories.create');
           return redirect('/admin/projects/index')->with('completed', 'content has been updated');  
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
    public function edit($project_id)
    {
        $project= Project::findOrFail($project_id);
        $category= Category::select()->get();

        return view('projects.edit', ['project'=>$project,'category'=>$category]); 
         }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $project_id)
    {
        // $request->validate([
        //     'title' => 'required',

        //  ]);
         if($request->hasfile('image'))
         {
           
          $name = time() . "." . $request->image->getClientOriginalExtension();
          $path= $request->image->move(public_path('images'), $name);
          $project= Project::whereId($project_id)->update([
              'image'=> $name,
                'title'=>$request->input('title'),
                'desc'=>$request->input('desc'),
                'ldesc'=>$request->input('ldesc'),
                'title_ar'=>$request->input('title_ar'),
                'desc_ar'=>$request->input('desc_ar'),  
                'ldesc_ar'=>$request->input('ldesc_ar'), 
                'face_link'=>$request->input('face_link'),
                'twit_link'=>$request->input('twit_link'),
                'insta_link'=>$request->input('insta_link'),
                'category_id'=>$request->input('category_id')
                ]);

         
        }
        if($request->hasfile('multi_image'))
        {
        foreach($request->file('multi_image') as $image)
        {
            $imageName=$image->getClientOriginalName();
            $image->move(public_path().'/images/', $imageName);  
            $fileNames[] = $imageName;
        }
        $images = json_encode($fileNames);
        $project= Project::whereId($project_id)->update([
            'multi_image'=> $images,
            ]);

    }
      
       $project= Project::whereId($project_id)->update([
        'title'=>$request->input('title'),
        'desc'=>$request->input('desc'),
        'ldesc'=>$request->input('ldesc'),
        'title_ar'=>$request->input('title_ar'),
        'desc_ar'=>$request->input('desc_ar'),  
        'ldesc_ar'=>$request->input('ldesc_ar'),
        'face_link'=>$request->input('face_link'),
        'twit_link'=>$request->input('twit_link'),
        'insta_link'=>$request->input('insta_link'),
        'owner'=>$request->input('owner'),
        'owner_ar'=>$request->input('owner_ar'),
        'address'=>$request->input('address'),
        'address_ar'=>$request->input('address_ar'),
        'phone'=>$request->input('phone'),
        'email'=>$request->input('email'),
        'website'=>$request->input('website'),
        'shift_h'=>$request->input('shift_h'),
        'category_id'=>$request->input('category_id'),



        // 'status'=>$request->input('status')
        ]);
      
         return redirect('/admin/projects/index')->with('completed', 'category has been updated');

     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($project_id)
    {
        $content= Content::find($project_id);


        $project->delete();
        return redirect('/admin/projects/index')->with('success','content deleted successfully');     
        }  
}
