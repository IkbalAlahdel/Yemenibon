<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return("hello");
    //  User::find(1)->getprofile;
    $users = User::select('users.id','users.name','users.email','users.password','users.status')->orderBy('id','DESC')->get();
     return view('users.index',['users' => $users]);
 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required|unique:users','email'=>'required|email|unique:users','password'=>'required']);
        $user = User::create([
    
        'name' => $request['name'],
        'email' => $request['email'],
        'password' => Hash::make($request['password']),
        ]);
        $user->save();
      

    
           return redirect('/admin/users/index')->with('completed', 'content has been updated');  
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
    public function edit($user_id)
    {
        $user= User::findOrFail($user_id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',

         ]);   
        
         $user= User::whereId($user_id)->update([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            ]);
          
             return redirect('/admin/users/index')->with('completed', 'user has been updated');
    
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id)
    {
        $user= User::find($user_id);


        $user->delete();
        return redirect('/admin/users/index')->with('success','user deleted successfully');
       }



           ##################################################

    
public function display_row($user_id)
{
    $affected1 =[];
    $data['dept'] = User::where('id',$user_id)->get();
    return view('update',$data);
                }
                
                public function is_active($user_id){
                    $affected1= User::where('id',$user_id)
                    ->update(['status'=>'-1']);
                    $users = User::select('users.id','users.name','users.email','users.password','users.status')->orderBy('id','DESC')->get();
                    return view('users.index',['users' => $users]);
// dd($user);
                    }
                    public function is_not_active($user_id){
                        $affected1= User::where('id',$user_id)
                        ->update(['status'=>'0']);
                        $users = User::select('users.id','users.name','users.email','users.password','users.status')->orderBy('id','DESC')->get();
                        return view('users.index',['users' => $users]);
                        // dd($user);

                        }

// public function display_with_status($id)
//     {
//         if($id==1){
//             $affected1 =[];
//             $affected = User::where(['status',-1])->paginate(25);
//             return view('department',['cat'=>$affected,'data1'=>$affected1]);
//         }elseif($id==0){
//             $affected1 =[];
//             $affected = User::where(['status',0])->paginate(25);
//             return view('department',['cat'=>$affected,'data1'=>$affected1]);
//         }
// }
}
