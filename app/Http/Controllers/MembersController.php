<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Funds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    public function index()
    {
        return view('dashboards.org.cs.members.cs_index');
    }
    public function profile()
    {
        return view('dashboards.org.cs.members.profile');
    }
    public function functions()
    {
        return view('dashboards.org.cs.members.functions');
    }
    public function listofevents()
    {
        $events = Events::latest()->paginate(10);

        $eventlist = Events::select('id','event_name','event_description','event_participants','event_date','event_status')->get();
        $eventid = DB::table('events')->select('id')->get();
        $eventstatus = DB::table('events')->select('event_status')->get();
        return view('dashboards.org.cs.members.listofevents',compact('eventlist','eventid','eventstatus'))->with('i', (request()->input('page', 1) - 1) * 5);
        // return view('dashboards.org.cs.members.listofevents',compact('eventlist'))->with('i', (request()->input('page', 1) - 1) * 5));
    }
    public function listoffunds()
    {
        $funds = Funds::latest()->paginate(10);

        $fundslist = Funds::select('id','fund_name','fund_description','fund_goal','fund_collected','fund_status','created_at','updated_at')->get();
        return view('dashboards.org.cs.members.listoffunds',compact('fundslist'));
        // return view('dashboards.org.cs.members.listoffunds');
    }
    public function settings()
    {
        return view('dashboards.org.cs.members.cs_settings');
    }
}
