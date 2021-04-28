<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configration;

class ConfigrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configrations = configration::select('configrations.id','configrations.facebook','configrations.twitter','configrations.instagram','configrations.youtub','configrations.address','configrations.address_ar','configrations.phone','configrations.email')->get();
        return view('configrations.index',['configrations' => $configrations]);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('configrations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(['facebook'=>'required','twitter'=>'required','instagram'=>'required','youtub'=>'required','address'=>'required','phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:9','email'=>'required|email']);
        // configration::create($request->all());
        $configration = new configration();
        $configration->facebook = $request->input('facebook');
        $configration->twitter = $request->input('twitter');  
        $configration->instagram = $request->input('instagram');
        $configration->youtub = $request->input('youtub');
        $configration->address = $request->input('address');
        $configration->address_ar = $request->input('address_ar');
        $configration->phone = $request->input('phone');
        $configration->email = $request->input('email');

        $configration->save();
      

          // return view('configrations.create');
           return redirect('/admin/configrations/index')->with('completed', 'content has been updated');  
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
    public function edit($configration_id)
    {
        $configration= configration::findOrFail($configration_id);
         return view('configrations.edit', compact('configration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $configration_id)
    {
        $request->validate([
            'facebook' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
            'youtub' => 'required',
            'address' => 'required',
            'address_ar' => 'required',
            'phone' => 'required',
            'email' => 'required',
  

         ]);
         $configration= configration::whereId($configration_id)->update([
            'facebook'=>$request->input('facebook'),
            'twitter'=>$request->input('twitter'),
            'instagram'=>$request->input('instagram'),
            'youtub'=>$request->input('youtub'),
            'address'=>$request->input('address'),
            'address_ar'=>$request->input('address_ar'),
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email')

            ]);
          
             return redirect('/admin/configrations/index')->with('completed', 'configration has been updated');
    
        
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($configration_id)
    {
        $configration= configration::find($configration_id);


         $configration->delete();
         return redirect('/admin/configrations/index')->with('success','configration deleted successfully');
    }    
}
