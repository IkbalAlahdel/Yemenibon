<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interview;
use App\Models\Category;
class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interviews = Interview::join('categories', 'categories.id', '=', 'interviews.category_id')
        ->select('interviews.id','interviews.name','interviews.name_ar','interviews.date', 'interviews.interviewer','interviews.interviewer_ar','interviews.interview','interviews.interview_ar','interviews.voice','interviews.img','interviews.desc','interviews.desc_ar','categories.updated_at', 'categories.name as category_name' )->orderBy('interviews.updated_at','DESC')->get();
            return view('interviews.index',['interviews' => $interviews]);   
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category= Category::select()->get();
        return view('interviews.create', ['category'=>$category]);  
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required|unique:interviews','img'=>'required|mimes:jpg,png,jpeg']);
        $interview = new Interview();

        $name = preg_replace('/(0)\.(\d+) (\d+)/', '$3$1$2', microtime()) . "." . $request->img->getClientOriginalExtension();
        $path= $request->img->move(public_path('images'), $name);
        $interview->img =$name;
        $interview->name = $request->input('name');
        $interview->name_ar = $request->input('name_ar');
        $interview->date = $request->input('date'); 
        $interview->interviewer = $request->input('interviewer');
        $interview->interviewer_ar = $request->input('interviewer_ar');
        $interview->img = $request->input('img');   
        $interview->interview = $request->input('interview');   
        $interview->interview_ar = $request->input('interview_ar');   
        $interview->voice = $request->input('voice');   
        $interview->desc = $request->input('desc');   
        $interview->desc_ar = $request->input('desc_ar');   
        $interview->category_id = $request->input('category_id');
        $interview->save();
        return redirect('/admin/interviews/index')->with('completed', 'interview has been updated');  

   
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
    public function edit($interview_id)
    {
        $interview= Interview::findOrFail($interview_id);
        $category= Category::select()->get();
        return view('interviews.edit', ['interview'=>$interview,'category'=>$category]);    
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $interview_id)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'name_ar' => 'required',
            'desc_ar' => 'required',
         ]);

         $interview= Interview::whereId($interview_id)->update([
             'img'=> $name,
            'name' => $request->input('name'),
            'name_ar' => $request->input('name_ar'),
            'date' => $request->input('date'),
            'interviewer' => $request->input('interviewer'),
            'interviewer_ar' => $request->input('interviewer_ar'),   
            'interview' => $request->input('interview'),   
            'interview_ar' => $request->input('interview_ar'),   
            'img' => $request->input('img'),   
            'voice' => $request->input('voice'),   
            'desc' => $request->input('desc'),   
            'desc_ar' => $request->input('desc_ar'),   
            'category_id'=>$request->input('category_id'),   
            ]);
        
       
       return redirect('/admin/interviews/index')->with('completed', 'content has been updated');  

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $interview= Interview::find($interview);
        $interviews->delete();
        return redirect('/admin/interviews/index')->with('success','content deleted successfully');     
        
    }
}
