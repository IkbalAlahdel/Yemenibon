<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Configration;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\ContactUs;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configrations = configration::select('configrations.id','configrations.facebook','configrations.twitter','configrations.instagram','configrations.youtub','configrations.address','configrations.address_ar','configrations.phone','configrations.email')->get();
        return view('client.contact',['configrations' => $configrations]);

    }
    public function sendMail(Request $request){

        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        
        $contact = new ContactUs;
        
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        
        $contact->save();
        
        
                $details=[
                    "name"=>$request->name,
                    "email"=>$request->email,
                    "subject"=>$request->subject,
                    "message"=>$request->message
                ];
                Mail::to("info.yemenibon.org@gmail.com")->send(new ContactMail($details));
                return back()->with('message_send',__('client.contact'));
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
}
