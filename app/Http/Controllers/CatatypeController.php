<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Catatype;
use Illuminate\Http\Request;

class CatatypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        $catatypes = Catatype::select('catatypes.id','catatypes.type','catatypes.type_ar')->get();
        return view('catatypes.index')->with('catatypes',$catatypes);
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catatype['catatypes']= Catatype::all();
        return view('catatypes.create',$catatype);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['type'=>'required|unique:catatypes']);
        $catatype = new Catatype();
        $catatype->type = $request->input('type'); 
        $catatype->type_ar = $request->input('type_ar');         
        $catatype->save();
                 return redirect('/admin/catatypes/index')->with('completed', 'content has been updated');  
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
    public function edit($catatype_id)
    {
        $catatype= catatype::findOrFail($catatype_id);

        return view('catatypes.edit', compact('catatype'));     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $catatype_id)
    {
        $request->validate([
            'type' => 'required',
            'type_ar' => 'required',
         ]);

       $catatype= Catatype::whereId($catatype_id)->update([
        'type'=>$request->input('type'),
        'type_ar'=>$request->input('type_ar'),
        ]);
        return redirect('/admin/catatypes/index')->with('completed', 'catatype has been updated');   
         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($catatype)
    {
        $catatype= Catatype::find($catatype);


        $catatype->delete();
        return redirect('/admin/catatypes/index')->with('success','catatype deleted successfully');    
          }
}
