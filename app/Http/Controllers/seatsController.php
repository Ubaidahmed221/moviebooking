<?php

namespace App\Http\Controllers;

use App\Models\Cinemas;
use App\Models\clientuser;
use App\Models\seat;
use Illuminate\Http\Request;

class seatsController extends Controller
{

    function index(){
        // $book = Mbooking::all();
        $seat = seat::all();
    //   $book = DB::select("SELECT * FROM mbookings INNER JOIN clientusers ON mbookings.cid = clientusers.cid INNER JOIN show_times ON mbookings.stid = show_times.stid;");
        
        return view('dashboardviews.seats.index',compact('seat'));
    }
    function  insart(){
        $client = clientuser::all();
        $show = Cinemas::all();
        return view('dashboardviews.seats.insart',compact('client','show'));
    }

    function store(Request $req){
        $req->validate([
            'seat1' => 'required',
            'seat2' => 'required',
            'seat3' => 'required',
            'seat4' => 'required',
            'seat5' => 'required',
            'seat6' => 'required',
            'seat7' => 'required',
            'seat8' => 'required',
            'seat9' => 'required',
            'seat10' => 'required',
            'show' => 'required',
            'client' => 'required',
             
            
        ]);

         $seat = new seat();

         $seat['seat1'] = $req['seat1'];
         $seat['seat2'] = $req['seat2'];
         $seat['seat3'] = $req['seat3'];
         $seat['seat4'] = $req['seat4'];
         $seat['seat5'] = $req['seat5'];
         $seat['seat6'] = $req['seat6'];
         $seat['seat7'] = $req['seat7'];
         $seat['seat8'] = $req['seat8'];
         $seat['seat9'] = $req['seat9'];
         $seat['seat10'] = $req['seat10'];
         $seat['cid'] = $req['client'];
         $seat['c_id'] = $req['show'];
      
         $seat->save();

         return redirect('/dashboards/seat');
         
        }

        function edit($id){
        $seat = seat::find($id);
        $client = clientuser::all();
        $show = Cinemas::all();

            return view('dashboardviews.seats.edit',compact('seat','client','show'));
        }

    //     function update($id,Request $req){
    //         $booking = Mbooking::find($id);

    //         if($booking != null){
    //             $booking['cid'] = $req['mshow'];
    //             $booking['stid'] = $req['cshow'];
    //             $booking['serialnum'] = $req['bser'];
    //             $booking['tprice'] = $req['shpric'];

    //             $booking->save();
    //             return redirect('/dashboards/mbooking');
                
    //         }
    //         return redirect('/dashboards/mbooking');

    //     }
        function delet($id){
            $delseat = seat::find($id);

            if($delseat != null){
                $delseat->delete();

                return redirect('/dashboards/seat');
            }
            return redirect('/dashboards/seat');


        }
       
}

?>


