<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(10);

        $userslist = User::select('user_id','course_id','role_id','position_id','email','password','student_number','first_name','middle_name','last_name','gender','date_of_birth','mobile_number','address','email_verified_at','created_at','updated_at')->get();


        return view('dashboards.admin.index',compact('userslist'));
    }
    public function profile()
    {
        return view('dashboards.admin.profile');
    }
    public function functions()
    {
        return view('dashboards.admin.functions');
    }
    public function listofevents()
    {
        $eventlist = Events::select('id','event_course_id','event_description','event_participants','event_date','event_status')->get();
        return view('dashboards.admin.listofevents', compact('eventlist'));
    }
    public function settings()
    {
        return view('dashboards.admin.settings');
    }
    public function create()
    {
        return view('adminUser.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'email'=>'required',
            'student_number'=>'required',
            'password'=>'required',
            'roles'=>'required',
            'student_number'=>'required',
        ]);

        User::create($request->all());

        return redirect()->route('upload')->with('success','User has been created');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $users)
    {
        $userslist = User::select('user_id','course_id','role_id','position_id','email','password','student_number','first_name','middle_name','last_name','gender','date_of_birth','mobile_number','address','email_verified_at','created_at','updated_at')->get();

        // dd($userslist);

        return view('adminUser.shows',compact('userslist'));
    }

    public function view(User $users)
    {   
        $data = $users;
        // dd($data);
        // dd($users);
        $usersid = DB::table('users')->select('user_id')->get();
        // dd($eventid);
        return view('adminUser.view',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Events  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(User $users)
    {
        $data = $users;
        // dd($data);
        // dd($users);
        $usersid = DB::table('users')->select('user_id')->get();
        // dd($eventid);
        return view('adminUser.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Events  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $users)
    {
        $request->validate([
            'first_name' => 'required|string',
            'email' => 'required|string',
            'organization' => 'required|string',
            'roles' => 'required|string',
            'student_number' => 'required|string',
        ]);

        // $name = $request->input('stud_name');
      // DB::update('update student set name = ? where id = ?',[$name,$id]);

        // dd($request);
        // dd($users);

        $users->update($request->all());

        return redirect()->route('adminupload')->with('success','User update succesfully');
        // return redirect()->route('adminupload')->with('success',$users);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Events  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $users)
    {
        $users->delete();
        return redirect()->route('adminupload')->with('success',$users);
    }



    
}
