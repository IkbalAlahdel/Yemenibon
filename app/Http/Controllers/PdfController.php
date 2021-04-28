<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pdf;
use App\Models\Category;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pdfs = pdf::join('categories', 'categories.id', '=', 'pdfs.category_id')
        ->select('pdfs.id','pdfs.name','pdfs.name_ar','pdfs.date', 'pdfs.publisher','pdfs.publisher_ar','pdfs.pdf','pdfs.img','pdfs.download_url','pdfs.veiw_url','pdfs.desc','pdfs.desc_ar','categories.updated_at', 'categories.name as category_name' )->orderBy('pdfs.updated_at','DESC')->get();
            return view('pdfs.index',['pdfs' => $pdfs]);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category= Category::select()->get();
        return view('pdfs.create', ['category'=>$category]);  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(['name'=>'required|unique:pdfs']);
        $pdf = new Pdf();
        if($request->hasfile('pdf'))
        {
          
            $name = preg_replace('/(0)\.(\d+) (\d+)/', '$3$1$2', microtime()) . "." . $request->pdf->getClientOriginalExtension(); 
            $path= $request->pdf->move(public_path('pdf'), $name);
            $pdf->pdf =$name;
        
       }
       if($request->hasfile('img'))
       {
        $name2 = preg_replace('/(0)\.(\d+) (\d+)/', '$3$1$2', microtime()) . "." . $request->img->getClientOriginalExtension();
        $path2= $request->img->move(public_path('images'), $name2);
        $pdf->img =$name2;
       }
        $pdf->name = $request->input('name');
        $pdf->name_ar = $request->input('name_ar');
        $pdf->date = $request->input('date'); 
        $pdf->publisher = $request->input('publisher');
        $pdf->publisher_ar = $request->input('publisher_ar');
        $pdf->img = $request->input('img');   
        $pdf->desc = $request->input('desc');   
        $pdf->desc_ar = $request->input('desc_ar');   
        $pdf->veiw_url = $request->input('veiw_url');   
        $pdf->download_url = $request->input('download_url');
       $pdf->category_id = $request->input('category_id');

        $pdf->save();
        return redirect('/admin/pdfs/index')->with('completed', 'pdf has been updated');  

        

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
    public function edit($pdf_id)
    {
        $pdf= Pdf::findOrFail($pdf_id);
        $category= Category::select()->get();
        return view('pdfs.edit', ['pdf'=>$pdf,'category'=>$category]);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pdf_id)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'name_ar' => 'required',
            'desc_ar' => 'required',
         ]);

        if($request->hasfile('pdf') && $request->hasfile('img'))
        {
          
         $name = time() . "." . $request->pdf->getClientOriginalExtension();
         $path= $request->pdf->move(public_path('pdf'), $name);
        //  echo $name;
         $name2 = time() . "." . $request->img->getClientOriginalExtension();
        $path2= $request->img->move(public_path('images'), $name2);
         $pdf= Pdf::whereId($pdf_id)->update([
             'pdf'=> $name,
             'img'=> $name2,
            'name'=>$request->input('name'),
            'date'=>$request->input('date'),
            'name_ar'=>$request->input('name_ar'),
            'publisher' => $request->input('publisher'),
            'publisher_ar' => $request->input('publisher_ar'),
            'img' => $request->input('img'),   
            'desc' => $request->input('desc'),   
            'desc_ar' => $request->input('desc_ar'),   
            'veiw_url' => $request->input('veiw_url'),   
            'download_url' => $request->input('download_url'), 
            'category_id'=>$request->input('category_id'),
            ]);
        
       }
    //    if($request->hasfile('image') )  
    //    {
    //     $name2 = time() . "." . $request->img->getClientOriginalExtension();
    //     $path2= $request->img->move(public_path('images'), $name2);
    //     $pdf= Pdf::whereId($pdf_id)->update([
    //        'image'=> $name2,
    //        'title'=>$request->input('title'),
    //        'desc'=>$request->input('desc'),
    //        'title_ar'=>$request->input('title_ar'),
    //        'desc_ar'=>$request->input('desc_ar'),
    //         'link'=>$request->input('link'),
    //        ]);
    //    }
    //    $content= Content::whereId($content_id)->update([
    //     'title'=>$request->input('title'),
    //     'data'=>$request->input('data'),
    //     'title_ar'=>$request->input('title_ar'),
    //     'data_ar'=>$request->input('data_ar'),
    //     // 'status'=>$request->input('status'),
    //     'category_id'=>$request->input('category_id'),
    //     ]);
     return redirect('/admin/pdfs/index')->with('completed', 'content has been updated');  
        
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pdf= Pdf::find($pdf);
        $pdf->delete();
        return redirect('/admin/pdfs/index')->with('success','content deleted successfully');     
       
    }
}
