<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::select('banners.id','banners.image','banners.title','banners.title_ar','banners.desc','banners.desc_ar','banners.link')->get();
        return view('/banners/index',['banners' => $banners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banners/create');
    }


// public function upload_img($images){

//     $destinationPath =  public_path() . '/assets/uploads/images';
//     $file_name = preg_replace('/(0)\.(\d+) (\d+)/', '$3$1$2', microtime()) . "." . $images->getClientOriginalExtension();
//     $images->move($destinationPath, $images);
//     return $images;
// }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['image'=>'required|mimes:jpg,png,jpeg', 'title'=>'required|max:255',
        'desc'=>'required','link'=>'required|url']);
        $banner = new Banner();
        $name = preg_replace('/(0)\.(\d+) (\d+)/', '$3$1$2', microtime()) . "." . $request->image->getClientOriginalExtension();
        $path= $request->image->move(public_path('images'), $name);
        $banner->image =$name;
        // $name = preg_replace('/(0)\.(\d+) (\d+)/', '$3$1$2', microtime()) . "." . $request->image2->getClientOriginalExtension();
        // $path= $request->image2->move(public_path('images'), $name);
        // $banner->image2 =$name;        $name = preg_replace('/(0)\.(\d+) (\d+)/', '$3$1$2', microtime()) . "." . $request->image3->getClientOriginalExtension();
        // $path= $request->image3->move(public_path('images'), $name);
        // $banner->image3 =$name;        $name = preg_replace('/(0)\.(\d+) (\d+)/', '$3$1$2', microtime()) . "." . $request->image4->getClientOriginalExtension();
        // $path= $request->image4->move(public_path('images'), $name);
        // $banner->image4 =$name;        $name = preg_replace('/(0)\.(\d+) (\d+)/', '$3$1$2', microtime()) . "." . $request->image5->getClientOriginalExtension();
        // $path= $request->image5->move(public_path('images'), $name);
        // $banner->image5 =$name;
        // $banner->images =$this->upload_img($request->file('images'));  
        $banner->title = $request->input('title');
        $banner->desc = $request->input('desc');
        $banner->title_ar = $request->input('title_ar');
        $banner->desc_ar = $request->input('desc_ar'); 
         $banner->link = $request->input('link');

        $banner->save();
          return redirect('admin/banners/index')->with('completed', 'content has been updated');  

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
    public function edit($banner_id)
    {

        $banner= Banner::findOrFail($banner_id);
         return view('banners/edit', compact('banner'));   
        
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $banner_id)
    {

        // $request->validate([
        //     'image1' => 'required',
        //     'image2' => 'required',
        //     'image3' => 'required',
        //     'image4' => 'required',
        //     'image5' => 'required',

        //  ]);

       //  dd($request);

        if($request->hasfile('image') )  
        {
         $name = time() . "." . $request->image->getClientOriginalExtension();
         $path= $request->image->move(public_path('images'), $name);
         $banner= Banner::whereId($banner_id)->update([
            'image'=> $name,
            'title'=>$request->input('title'),
            'desc'=>$request->input('desc'),
            'title_ar'=>$request->input('title_ar'),
            'desc_ar'=>$request->input('desc_ar'),
             'link'=>$request->input('link'),
            ]);
        }
        $banner= Banner::whereId($banner_id)->update([
            'title'=>$request->input('title'),
            'desc'=>$request->input('desc'),
            'title_ar'=>$request->input('title_ar'),
            'desc_ar'=>$request->input('desc_ar'),
            'link'=>$request->input('link'),
            ]);

        // if($request->hasfile('image2') )  
        // {
        //  $name2 = time() . "." . $request->image2->getClientOriginalExtension();
        //  $path2= $request->image2->move(public_path('images'), $name2);
        //  $banner= Banner::whereId($banner_id)->update([
        //     'image2'=> $name2,
        //     ]);
        // }


        // if($request->hasfile('image3') )  
        // {
        //     $name3 = time() . "." . $request->image3->getClientOriginalExtension();
        //     $path3 = $request->image3->move(public_path('images'), $name3);
        //  $banner= Banner::whereId($banner_id)->update([
        //     'image3'=> $name3,
        //     ]);
        // }
        
        // if($request->hasfile('image4') )  
        // {
        //     $name4 = time() . "." . $request->image4->getClientOriginalExtension();
        //  $path4 = $request->image4->move(public_path('images'), $name4);
        //  $banner= Banner::whereId($banner_id)->update([
        //     'image4'=> $name4,
        //     ]);
        // }
         
        // if($request->hasfile('image5') )  
        // {
        //     $name5 = time() . "." . $request->image5->getClientOriginalExtension();
        //     $path5 = $request->image5->move(public_path('images'), $name5);
        //  $banner= Banner::whereId($banner_id)->update([
        //     'image5'=> $name5,
        //     ]);
        // }
     
      
        return redirect('/admin/banners/index')->with('completed', 'banner has been updated');
            }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  \App\Models\banner $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($banner)
    {

        $banner= Banner::find($banner);

        $banner->delete();
        return redirect('/admin/banners/index')->with('success','Category deleted successfully');  
      }
  

}
