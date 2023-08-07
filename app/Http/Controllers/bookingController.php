<?php

namespace App\Http\Controllers;

use App\Models\clientuser;
use App\Models\Mbooking;
use App\Models\ShowTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bookingController extends Controller
{
    function index(){
        $book = Mbooking::all();
    //   $book = DB::select("SELECT * FROM mbookings INNER JOIN clientusers ON mbookings.cid = clientusers.cid INNER JOIN show_times ON mbookings.stid = show_times.stid;");
        
        return view('dashboardviews.booking.index',compact('book'));
    }
    function  insart(){
        $client = clientuser::all();
        $show = ShowTime::all();
        return view('dashboardviews.booking.insart',compact('client','show'));
    }

    function store(Request $req){
        $req->validate([
            'mshow' => 'required',
            'cshow' => 'required',
            'bser' => 'required',
             
            'shpric' => 'required'
        ]);

         $book = new Mbooking;

         $book['cid'] = $req['mshow'];
         $book['stid'] = $req['cshow'];
         $book['serialnum'] = $req['bser'];
         $book['tprice'] = $req['shpric'];
      
         $book->save();

         return redirect('/dashboards/mbooking');
         
        }

        function edit($id){
        $edbook = Mbooking::find($id);
        $client = clientuser::all();
        $show = ShowTime::all();

            return view('dashboardviews.booking.edit',compact('edbook','client','show'));
        }

        function update($id,Request $req){
            $booking = Mbooking::find($id);

            if($booking != null){
                $booking['cid'] = $req['mshow'];
                $booking['stid'] = $req['cshow'];
                $booking['serialnum'] = $req['bser'];
                $booking['tprice'] = $req['shpric'];

                $booking->save();
                return redirect('/dashboards/mbooking');
                
            }
            return redirect('/dashboards/mbooking');

        }
        function delet($id){
            $delbook = Mbooking::find($id);

            if($delbook != null){
                $delbook->delete();

                return redirect('/dashboards/mbooking');
            }
            return redirect('/dashboards/mbooking');


        }
       
}

?>
