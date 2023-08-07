<?php

namespace App\Http\Controllers;

use App\Models\Cinemas;
use App\Models\Movie;
use App\Models\ShowTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowtimeController extends Controller
{
    function index(){
      $show =  DB::select("SELECT * from show_times INNER JOIN movies on show_times.mid = movies.mid INNER JOIN cinemas ON show_times.cid = cinemas.cid;");
        // $show =  ShowTime::all();

        return view('dashboardviews.showtime.index',compact('show'));
    }
    function insart(){
        $mov = Movie::all();
        $cin = Cinemas::all();
        return view('dashboardviews.showtime.insart',compact('mov','cin'));
    }

    function store(Request $req){
        $req->validate([
            'sname' => 'required | max:50',
            'mshow' => 'required',
            'cshow' => 'required',
            'ststart'  => 'required',
            'stend' => 'required',
            'shpric' => 'required',
            'sdate' => 'required'
        ]);
     $showt = new ShowTime();

     $showt['show_name'] = $req['sname'];
     $showt['mid'] = $req['mshow'];
     $showt['cid'] = $req['cshow'];
     $showt['Starttime'] = $req['ststart'];
     $showt['endtime'] = $req['stend'];
     $showt['price'] = $req['shpric'];
     $showt['show_date'] = $req['sdate'];

     $showt->save();
     return redirect('/dashboards/showtime');


    }

    function edit($id){
        $shw = ShowTime::find($id);
        $move = Movie::all();
        $cine = Cinemas::all();
        return view('dashboardviews.showtime.edit',compact('shw','move','cine'));

    }

    function update($id,Request $req){
        $shotim =  ShowTime::find($id);

        if($shotim != null){
            $shotim['mid'] = $req['mshow'];
          $showt['show_name'] = $req['sname'];

            $shotim['cid'] = $req['cshow'];
            $shotim['Starttime'] = $req['ststart'];
            $shotim['endtime'] = $req['stend'];
            $shotim['price'] = $req['shpric'];
         $showt['show_date'] = $req['sdate'];


            $shotim->save();

            return redirect('/dashboards/showtime');
        }
        return redirect('/dashboards/showtime');


    }
    function delet($id){
        $delshow = ShowTime::find($id);

        $delshow->delete();
        return redirect('/dashboards/showtime');



    }

}
