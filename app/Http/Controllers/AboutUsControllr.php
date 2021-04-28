<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\AboutUs;

use Illuminate\Http\Request;

class AboutUsControllr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = AboutUs::all();
        return view('about.index',['abouts' => $abouts]);  
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('about.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate(['title'=>'required|unique:projects',
        // 'desc'=>'required',
        // 'ldesc'=>'required',
        // 'image'=>'required']);
        $about = new AboutUs();
           //image code
        
          
       
      
           foreach($request->file('attachment') as $image)
           {
               $imageName=$image->getClientOriginalName();
               $image->move(public_path().'/images/', $imageName);  
               $fileNames[] = $imageName;
           }
   
           $images = json_encode($fileNames);
           $about->multi_image =$images;


        $about->initiative_ar_desc = $request->input('initiative_ar_desc');  
        $about->initiative_desc = $request->input('initiative_desc');
        
        $about->Training_desc = $request->input('Training_desc');
        $about->Training_ar_desc = $request->input('Training_ar_desc');
       
        $about->objectives_ar_desc = $request->input('objectives_ar_desc');  
        $about->objectives_desc = $request->input('objectives_desc');  
        $about->Trainers = $request->input('Trainers');  
        $about->Trainers_ar = $request->input('Trainers_ar');  
        $about->Trainers_name = $request->input('Trainers_name');  
        $about->Trainers_name_ar = $request->input('Trainers_name_ar');  
        $about->Trainers_job = $request->input('Trainers_job');  
        $about->Trainers_job_ar = $request->input('Trainers_job_ar');  

        $about->Trainees = $request->input('Trainees');
        $about->Trainees_ar = $request->input('Trainees_ar');
        $about->Trainees_name = $request->input('Trainees_name');
        $about->Trainees_name_ar = $request->input('Trainees_name_ar');
        $about->Trainees_job = $request->input('Trainees_job');
        $about->Trainees_job_ar = $request->input('Trainees_job_ar');

    

        
        // Store $images image in DATABASE from HERE 
        $about->save();
      

          // return view('categories.create');
           return redirect('/admin/about/index')->with('completed', 'content has been add');  
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
    public function edit($about_id)
    {
        $about= Project::findOrFail($about_id);
        $category= Category::select()->get();

        return view('projects.edit', ['project'=>$about,'category'=>$category]); 
         }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $about_id)
    {
        // $request->validate([
        //     'title' => 'required',

        //  ]);
         if($request->hasfile('image'))
         {
           
          $name = time() . "." . $request->image->getClientOriginalExtension();
          $path= $request->image->move(public_path('images'), $name);
          $about= Project::whereId($about_id)->update([
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
        $about= Project::whereId($about_id)->update([
            'multi_image'=> $images,
            ]);

    }
      
       $about= Project::whereId($about_id)->update([
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
    public function destroy($about_id)
    {
        $about=AboutUs::find($about_id);


        $about->delete();
        return redirect('/admin/about/index')->with('success','content deleted successfully');     
        }  
}
